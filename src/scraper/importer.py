import io
import re
import json
import prestapyt
from random import randint

presta_link = "http://localhost:8080/api/"
data_folder = "../../data"


def get_ids(names, name):
    ids = []
    classes = prestashop.get(names)[names][name]
    for key in classes:
        ids.append(key["attrs"]["id"])
    return ids


def remove_categories():
    ids = get_ids("categories", "category")
    ids = [i for i in ids if int(i) >= 3]
    if len(ids):
        prestashop.delete("categories", resource_ids=ids)


def remove_products():
    ids = get_ids("products", "product")
    if len(ids):
        prestashop.delete("products", resource_ids=ids)


def remove_brands():
    ids = get_ids("manufacturers", "manufacturer")
    if len(ids):
        prestashop.delete("manufacturers", resource_ids=ids)


def add_category(name, parent):
    cat = prestashop.get("categories", options={"filter[name]": name})

    if not cat["categories"]:
        cat_schema["category"]["name"]["language"]["value"] = name
        cat_schema["category"]["id_parent"] = parent
        cat_schema["category"]["active"] = 1
        cat_schema["category"]["link_rewrite"]["language"]["value"] = re.sub(r"[^a-zA-Z0-9]+", "-", name).lower()
        cat_schema["category"]["description"]["language"]["value"] = f"Kategoria {name}"
        return prestashop.add("categories", cat_schema)["prestashop"]["category"]["id"]
    else:
        return cat["categories"]["category"]["attrs"]["id"]


def add_brand(name):
    brand = prestashop.get("manufacturers", options={"filter[name]": name})
    if not brand["manufacturers"]:
        brand_schema['manufacturer']['name'] = name
        brand_schema["manufacturer"]["active"] = 1
        brand_schema['manufacturer']['meta_title']["language"]["value"] = name
        brand_schema['manufacturer']['meta_keywords']["language"]["value"] = name
        return prestashop.add("manufacturers", brand_schema)["prestashop"]["manufacturer"]["id"]
    else:
        return brand["manufacturers"]['manufacturer']["id"]


def add_product(product):
    cat_id = \
    prestashop.get("categories", options={"filter[name]": product['category']})["categories"]["category"]["attrs"]["id"]
    subcat_id = \
    prestashop.get("categories", options={"filter[name]": product['subcategory']})["categories"]["category"]["attrs"][
        "id"]
    prod_schema["product"]["name"]["language"]["value"] = product["name"]
    prod_schema["product"]["id_manufacturer"] = add_brand(product["brand"])
    prod_schema["product"]["id_category_default"] = subcat_id
    prod_schema["product"]["id_shop_default"] = 1
    prod_schema["product"]["id_tax_rules_group"] = 4  # TODO presta fix
    prod_schema["product"]["link_rewrite"]["language"]["value"] = re.sub(r"[^a-zA-Z0-9]+", "-", product["name"]).lower()
    prod_schema["product"]["active"] = 1
    prod_schema["product"]["state"] = 1
    prod_schema["product"]["available_for_order"] = 1
    prod_schema["product"]["minimal_quantity"] = 1
    prod_schema["product"]["show_price"] = 1
    prod_schema["product"]["price"] = float(re.sub('[^0-9 ,]', '', product["price"]).replace(",", "."))
    prod_schema["product"]["on_sale"] = 0
    prod_schema["product"]["meta_title"]["language"]["value"] = product["name"]
    prod_schema["product"]["meta_keywords"]["language"]["value"] = product['category']
    if product["dimensions"] != "":
        dimensions = product["dimensions"].replace("\u00a0", " ").replace("\u00d7", "").replace("x", "").replace("  ",
                                                                                                                 " ")
        dimensions = dimensions.split(": ")[1]
        dimensions = dimensions.split(" ")
        prod_schema["product"]["width"] = dimensions[0]
        prod_schema["product"]["height"] = dimensions[1]
        prod_schema["product"]["depth"] = dimensions[2]
    else:
        prod_schema["product"]["width"] = ""
        prod_schema["product"]["height"] = ""
        prod_schema["product"]["depth"] = ""
    prod_schema["product"]["associations"]["categories"] = {"category": [{"id": 2}, {"id": cat_id}, {"id": subcat_id}]}
    prod_schema["product"]["description"]["language"]["value"] = product["description"]
    product_id = prestashop.add("products", prod_schema)["prestashop"]["product"]["id"]
    stock_id = prestashop.search("stock_availables", options={"filter[id_product]": product_id})[0]
    stock_available_schema = prestashop.get("stock_availables", resource_id=stock_id)
    stock_available_schema["stock_available"]["quantity"] = randint(0, 10)
    stock_available_schema["stock_available"]["depends_on_stock"] = 0
    prestashop.edit("stock_availables", stock_available_schema)
    fd = io.open(data_folder + product["img_path"], "rb")
    content = fd.read()
    fd.close()
    prestashop.add(f"images/products/{product_id}",
                   files=[("image", product["img_path"].replace("/images/", ""), content)])


def add_categories():
    root_id = 2
    with open(data_folder + "/categories.json", "r") as infile:
        categories = json.load(infile)
        for cat in categories:
            cat_id = add_category(cat['name'], root_id)
            for subcat in cat['subcategories']:
                add_category(subcat['name'], cat_id)


def add_products():
    with open(data_folder + "/products.json", "r") as infile:
        products = json.load(infile)
        for prod in products:
            add_product(prod)


prestashop = prestapyt.PrestaShopWebServiceDict(presta_link, "X56WC1EAT6K1ME1AR6CRHXSCPHYIUKUG")

cat_schema = prestashop.get("categories", options={"schema": "blank"})
prod_schema = prestashop.get("products", options={"schema": "blank"})

del prod_schema["product"]["position_in_category"]
del prod_schema["product"]["associations"]["combinations"]

brand_schema = prestashop.get("manufacturers", options={"schema": "blank"})

remove_categories()
remove_products()
remove_brands()
add_categories()
add_products()
