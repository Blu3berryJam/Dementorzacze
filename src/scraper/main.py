import json
import os
import re
from bs4 import BeautifulSoup
import requests
import csv
import random
import multiprocessing

url = "https://eodkurzacz.pl/"
atribute1 = "Moc odkurzacza"
atribute2 = "Wymiary\xa0odkurzacza"
data_folder = "../../data"


def get_subcategories(category):
    subs = category.find('ul', {"class": "level2"}).find_all('li', recursive=False)
    subcategories = []
    for s in subs:
        subcategories.append({"name": s.find('span').get_text(), "link": s.find('a')['href']})
    return subcategories


def get_products(cat_name, subcategory):
    page = requests.get(url + str(subcategory['link']))
    soup = BeautifulSoup(page.content, 'html.parser')
    product_divs = soup.find_all('div', {"class": "product-inner-wrap"})

    if len(product_divs) == 0:  # if no products in subcategory
        return []

    products = []
    for product in product_divs:
        link = product.find('a', {"class": "prodimage f-row"})['href']  # get product page link
        name, desc, price, power, dimensions, brand, high_res_img_link,img_path = get_product_info(
            link)  # get product info from product page
        # low_res_img_link  = product.find('img')['data-src'] #get product miniature link
        products.append({"name": name, "brand": brand, "description": desc, "power": power, "dimensions": dimensions,
                         "price": price, "category": cat_name, "subcategory": subcategory['name'],
                         "high_res_img_link": high_res_img_link,"img_path":img_path})  # ,"low_res_img_link":low_res_img_link})
        # #add product info to products list
    return products


def get_product_info(link):
    page = requests.get(url + link)
    soup = BeautifulSoup(page.content, 'html.parser')
    name = soup.find('h1', {"class": "name"}).get_text().strip()  # get product name
    name = re.sub('[^A-Za-z\d +\-/._:()*@#!$%^&]+', '', name)  # remove weird characters
    description = power = dimensions = ""
    table_elements = soup.find('div', {"class": "resetcss"}).find_all('li')  # get product desription list items

    for element in table_elements:
        if atribute1 in element.get_text():  # check if list item is vacuum power atribute
            power = element.get_text()
        if atribute2 in element.get_text():  # check if list item is vacuum dimensions atribute
            dimensions = element.get_text()

    price = soup.find('em', {"class": "main-price"}).get_text()  # get product price

    brand = soup.find('a', {"class": "brand"})  # get brand name <a> element
    if brand is not None:  # if brand is not none get brand name
        brand = brand.get_text().strip()
    else:  # else set brand to unknown
        brand = "-"

    high_res_link = soup.find('div', {"class": "mainimg productdetailsimgsize row"}).find('img')[
        'src']  # get product image link
    img_data = requests.get(url + high_res_link).content  # get product image
    img_path = "/images/" + name.replace("/", "").replace("-", "").replace(" ", "_").replace("\xa0", "_") + ".jpg"  # product image name and path
    with open(data_folder + img_path, 'wb') as handler:
        handler.write(img_data)  # save product image

    imges = soup.find_all("img")
    for i in imges:
        i.decompose()
    description_div = soup.find('div', {"class": "resetcss"})  # get product description
    if description_div is not None:
        description = str(description_div)
    return name, description, price, power, dimensions, brand, high_res_link,img_path


def writeCategories(categories):
    with open(data_folder+"/categories.json", "w") as outfile:
        json.dump(categories, outfile)


def writeProducts(products):
    with open(data_folder+"/products.json", "w") as outfile:
        json.dump(products, outfile)

# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    if not os.path.exists(data_folder):
        os.mkdir(data_folder)
    if not os.path.exists(data_folder+"/images"):
        os.mkdir(data_folder+"/images")
    page = requests.get(url)
    soup = BeautifulSoup(page.content, 'html.parser')
    list_categories = soup.find('ul', {"class": "level1"}).find_all('li', recursive=False)
    list_categories = list_categories[1:-2]
    categories = []
    for c in list_categories:
         categories.append({"name":c.find('span').get_text(),"subcategories":get_subcategories(c)})
    writeCategories(categories)
    pool = multiprocessing.Pool()
    products = []
    for i in range(len(categories)):
        items = []
        for subcategory in categories[i]['subcategories']:
            items.append([categories[i]['name'], subcategory])
        for result in pool.starmap(get_products, items):
            products += result
    writeProducts(products)
