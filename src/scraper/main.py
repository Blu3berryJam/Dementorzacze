from bs4 import BeautifulSoup
import requests

url = "https://eodkurzacz.pl/"
atribute1 = "Moc odkurzacza"
atribute2 = "Wymiary\xa0odkurzacza"

def get_subcategories(category):
    subs = category.find('ul', {"class": "level2"}).find_all('li',recursive=False)
    subcategories = []
    for s in subs:
        subcategories.append((s.find('span').get_text(),s.find('a')['href']))
    return subcategories

def get_products(cat_name,subcategory):
    page = requests.get(url+str(subcategory[1]))
    soup = BeautifulSoup(page.content, 'html.parser')
    product_divs = soup.find_all('div',{"class": "product-inner-wrap"})
    if len(product_divs) == 0:
        return []
    products = []
    for product in product_divs:
        link = product.find('a',{"class": "prodimage f-row"})['href']
        name,desc,price,power,dimensions = get_product_info(link)
        products.append({"name":name,"description":desc,"power": power,"dimensions":dimensions,"price":price,"category":cat_name,"subcategory":subcategory[0]})
    return products

def get_product_info(link):
    page = requests.get(url + link)
    soup = BeautifulSoup(page.content, 'html.parser')
    name = soup.find('h1',{"class": "name"}).get_text()
    decription = power = dimensions = ""
    decription_div = soup.find('div',{"class":"resetcss"})
    table_elements = soup.find('div',{"class":"resetcss"}).find_all('li')
    for element in table_elements:
        if atribute1 in element.get_text():
            power = element.get_text()
        if atribute2 in element.get_text():
            dimensions = element.get_text()
    if decription_div is not None:
        decription = decription_div.get_text()
    price = soup.find('em',{"class":"main-price"}).get_text()
    return name,decription,price,power,dimensions

# Press the green button in the gutter to run the script.
if __name__ == '__main__':
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


