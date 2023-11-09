import os
import re

from bs4 import BeautifulSoup
import requests
import pandas as pd

url = "https://eodkurzacz.pl/"
atribute1 = "Moc odkurzacza"
atribute2 = "Wymiary\xa0odkurzacza"
low_res_folder = "../../images_low"
high_res_folder = "../../images_high"

def get_subcategories(category):
    subs = category.find('ul', {"class": "level2"}).find_all('li',recursive=False)
    subcategories = []
    for s in subs:
        subcategories.append({"name":s.find('span').get_text(),"link":s.find('a')['href']})
    return subcategories

def get_products(cat_name,subcategory):
    page = requests.get(url+str(subcategory['link']))
    soup = BeautifulSoup(page.content, 'html.parser')
    product_divs = soup.find_all('div',{"class": "product-inner-wrap"})

    if len(product_divs) == 0: #if no products in subcategory
        return []

    products = []
    for product in product_divs:
        link = product.find('a',{"class": "prodimage f-row"})['href'] #get product page link
        name,desc,price,power,dimensions,brand = get_product_info(link) #get product info from product page
        print(brand)
        low_res_img_link  = product.find('img')['data-src'] #get product miniature link
        img_data = requests.get(url + low_res_img_link).content #get product miniature
        img_path = low_res_folder + "/" + name.replace("/","") + ".jpg" #product miniature name and path
        with open(img_path,'wb') as handler:
            handler.write(img_data) #save product miniature

        products.append({"name":name,"brand":brand,"description":desc,"power": power,"dimensions":dimensions,"price":price,"category":cat_name,"subcategory":subcategory['name']}) #add product info to products list
    return products

def get_product_info(link):
    page = requests.get(url + link)
    soup = BeautifulSoup(page.content, 'html.parser')
    name = soup.find('h1',{"class": "name"}).get_text().strip() #get product name
    name = re.sub('[^A-Za-z0-9 +\-/.,_:()*@#!$%^&]+', '', name) #remove weird characters
    decription = power = dimensions = ""
    decription_div = soup.find('div',{"class":"resetcss"}) #get product description
    table_elements = soup.find('div',{"class":"resetcss"}).find_all('li') #get product desription list items

    for element in table_elements:
        if atribute1 in element.get_text(): #check if list item is vacuum power atribute
            power = element.get_text()
        if atribute2 in element.get_text(): #check if list item is vacuum dimensions atribute
            dimensions = element.get_text()

    if decription_div is not None:
        decription = decription_div.get_text()

    price = soup.find('em',{"class":"main-price"}).get_text() #get brand price
    brand = soup.find('a',{"class":"brand"}) #get brand name <a> element
    if brand is not None:#if brand is not none get brand name
        brand = brand.get_text().strip()
    else: #else set brand to unknown
        brand = "-"

    high_res_link = soup.find('div',{"class": "mainimg productdetailsimgsize row"}).find('img')['src']  # get product image link
    img_data = requests.get(url + high_res_link).content  # get product image
    img_path = high_res_folder + "/" + name.replace("/", "") + ".jpg"  # product image name and path
    with open(img_path, 'wb') as handler:
        handler.write(img_data)  # save product image

    return name,decription,price,power,dimensions,brand

# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    if not os.path.exists(low_res_folder):
        os.mkdir(low_res_folder, 0o666)
    if not os.path.exists(high_res_folder):
        os.mkdir(high_res_folder, 0o666)

    names = []
    page = requests.get(url)
    soup = BeautifulSoup(page.content, 'html.parser')
    list_categories = soup.find('ul', {"class": "level1"}).find_all('li',recursive=False)
    list_categories = list_categories[0:-2]
    names = []
    subcategories = []
    for c in list_categories:
        names.append(c.find('span').get_text())
        subcategories.append(get_subcategories(c))

    products = []
    for i in range(len(names)):
        for subcategory in subcategories[i]:
            products+= get_products(names[i],subcategory)


