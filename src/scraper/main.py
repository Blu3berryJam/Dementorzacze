from bs4 import BeautifulSoup
import requests

url = "https://eodkurzacz.pl/"

def get_subcategories(category):
    subs = category.find('ul', {"class": "level2"}).find_all('li',recursive=False)
    subcategories = []
    for s in subs:
        subcategories.append((s.find('span').get_text(),s.find('a')['href']))
    return subcategories

def get_elements(link):
    return []

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
    print(names)
    print(subcategories)


