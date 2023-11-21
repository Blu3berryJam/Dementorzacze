import os
import re

from bs4 import BeautifulSoup
import requests
import csv
import random
url = "https://eodkurzacz.pl/"
atribute1 = "Moc odkurzacza"
atribute2 = "Wymiary\xa0odkurzacza"
low_res_folder = "../../images_low"
high_res_folder = "../../images_high"
data_folder = "../../data"

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
        name,desc,price,power,dimensions,brand,img_path_high = get_product_info(link) #get product info from product page
        low_res_img_link  = product.find('img')['data-src'] #get product miniature link
        img_data = requests.get(url + low_res_img_link).content #get product miniature
        img_path = low_res_folder + "/" + name.replace("/","") + ".jpg" #product miniature name and path
        with open(img_path,'wb') as handler:
            handler.write(img_data) #save product miniature

        products.append({"name":name,"brand":brand,"description":desc,"power": power,"dimensions":dimensions,"price":price,"category":cat_name,"subcategory":subcategory['name'],"img_path_high":img_path_high,"img_path":img_path}) #add product info to products list
    return products

def get_product_info(link):
    page = requests.get(url + link)
    soup = BeautifulSoup(page.content, 'html.parser')
    name = soup.find('h1',{"class": "name"}).get_text().strip() #get product name
    name = re.sub('[^A-Za-z0-9 +\-/._:()*@#!$%^&]+', '', name) #remove weird characters
    description = power = dimensions = ""
    table_elements = soup.find('div',{"class":"resetcss"}).find_all('li') #get product desription list items

    for element in table_elements:
        if atribute1 in element.get_text(): #check if list item is vacuum power atribute
            power = element.get_text()
        if atribute2 in element.get_text(): #check if list item is vacuum dimensions atribute
            dimensions = element.get_text()


    price = soup.find('em',{"class":"main-price"}).get_text() #get product price

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

    imges = soup.find_all("img")
    for i in imges:
        i.decompose()
    description_div = soup.find('div',{"class":"resetcss"})#get product description
    if description_div is not None:
        description = description_div
    return name,description,price,power,dimensions,brand,img_path

def writeCategories(names,subcategories):
    if not os.path.exists(data_folder):
        os.mkdir(data_folder)
    with open(data_folder +'/categories.csv', 'w', newline='',encoding='UTF-8') as f:
        writer = csv.writer(f,delimiter=";")
        row = ["0"]
        row.append("1")
        row.append("Home")
        row.append("")
        row.append("1")
        row.append("")
        row.append("")
        row.append("")
        row.append("")
        row.append("home")
        row.append("")
        writer.writerow(row)
        for i in range(len(names)):
            row=[str(i+3)]
            row.append("1")
            row.append(names[i])
            row.append("Home")
            row.append("0")
            row.append("")
            row.append("Kup "+names[i])
            row.append(names[i])
            row.append("")
            row.append(names[i])
            row.append("")
            writer.writerow(row)
            j=1
            for s in subcategories[i]:
                row = [str((i+3)*100+j)]
                j+=1
                row.append("1")
                row.append(s['name'])
                row.append(names[i])
                row.append("0")
                row.append("")
                row.append("Kup " + s['name'])
                row.append(s['name'])
                row.append("")
                row.append(s['name'])
                row.append("")
                writer.writerow(row)

def writeProducts(products):
    if not os.path.exists(data_folder):
        os.mkdir(data_folder)
    with open(data_folder +'/products.csv', 'w', newline='',encoding='UTF-8') as f:
        writer = csv.writer(f,delimiter=";")
        for p in products:
            dimensions = ['','','']
            if p['dimensions']!="":
                p['dimensions'] = p['dimensions'].replace("\xa0"," ")
                p['dimensions'] = p['dimensions'].replace(" x ","×")
                dimensions = str(p['dimensions']).split('×')
                print(dimensions)
                for i in range(len(dimensions)):
                    dimensions[i] = re.sub('[^0-9]', '', dimensions[2])
            row = []
            row.append('')
            row.append("1")
            row.append(p['name'])
            row.append(p['subcategory'])
            row.append(str(p['price']).replace('\xa0','').replace(",","."))
            row.append("4")
            row.append('')
            row.append('1')
            for i in range(7):
                row.append('')
            row.append(p['brand'])
            row.append('')
            row.append('')
            row.append('')
            row.append('0')
            row.append(dimensions[0])
            row.append(dimensions[1])
            row.append(dimensions[2])
            row.append('')
            row.append('')
            row.append('')
            row.append(str(random.randint(1,10)))
            row.append('1')
            row.append('0')
            row.append('0')
            row.append('')
            row.append('0')
            row.append('')
            row.append('')
            row.append('')
            row.append(p['description'])
            row.append('')
            row.append(p['name'])
            row.append(p['name'])
            row.append(p['name'])
            row.append(p['name'])
            row.append('in stock')
            row.append("Current supply. Ordering availlable")
            row.append('1')
            row.append('')
            row.append('')
            row.append('1')
            row.append(p["img_path"]+","+p["img_path_high"])
            row.append(p['name']+","+p["name"])
            row.append('1')
            if p['power']!="":
                row.append("power:"+p['power']+":1")
            else:
                row.append('')
            row.append('0')
            row.append('new')
            row.append('0')
            row.append('0')
            row.append('0')
            row.append('0')
            row.append('0')
            row.append('')
            row.append('')
            row.append('')
            row.append('')
            row.append('0')
            row.append('0')
            row.append('0')
            row.append('0')
            row.append('')
            writer.writerow(row)

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
    list_categories = list_categories[1:-2]
    names = []
    subcategories = []
    for c in list_categories:
        names.append(c.find('span').get_text())
        subcategories.append(get_subcategories(c))
    writeCategories(names,subcategories)

    products = []
    for i in range(len(names)):
        for subcategory in subcategories[i]:
            products+= get_products(names[i],subcategory)
    writeProducts(products)


