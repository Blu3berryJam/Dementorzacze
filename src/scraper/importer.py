import io
import os
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

def add_category(name,parent):
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

def add_categories():
    home_id = 2
    with open(data_folder + "\categories.json", "r") as infile:
        categories = json.load(infile)
        for cat in categories:
            cat_id = add_category(cat['name'],home_id)
            for subcat in cat['subcategories']:
                add_category(subcat['name'],cat_id)


prestashop = prestapyt.PrestaShopWebServiceDict(presta_link, "" )#TODO add key

cat_schema = prestashop.get("categories", options={"schema": "blank"})
prod_schema = prestashop.get("products", options={"schema": "blank"})

del prod_schema["product"]["position_in_category"]
del prod_schema["product"]["associations"]["combinations"]

feature_schema = prestashop.get("product_features", options={"schema": "blank"})
feature_option_schema = prestashop.get("product_feature_values", options={"schema": "blank"})

remove_categories()
remove_products()
