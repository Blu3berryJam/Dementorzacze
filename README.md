# Projekt

Projekt wykonany na przedmiot biznes elektroniczny: odwzorowanie sklepu internetowego.

Sklep: [eOdkurzacz.pl](https://eodkurzacz.pl/)

Zespół:
<li>
    <ul>Mikołaj Bisewski</ul>
    <ul>Michał Jaroszewicz</ul>
    <ul>Justyna Dąbrowska</ul>
    <ul>Filip Daab</ul>
    <ul>Konrad Drozd</ul>
<li>

# Instalacja

## Ubuntu
nadać uprawnienia do czytania i pisania wszystkim plikom w projekcie,
stworzyć plik z zmiennymi środowiskowymi przez zmianę nazwy i rozszerzenia
pliku environment.ex na .env i następnie uruchomić kontener na poziomie administratora

```
cp environment.ex .env
cd app
sudo chmod -R 777 admin_123 cache themes var
cd .. 
sudo docker compose up
```

ALBO możesz wykonać powyższe czynności poprzez uruchomienie skryptu runPrestashop.sh

```
bash runPrestashop.sh
```

## Włączenie ssl na prestashopie:
Uruchom skrypt enableSSL.sh
Aby go uruchomić musisz być w folderze ssl

```
cd ssl
bash enableSSL.sh
```
Ostatnim poleceniem tego skryptu jest restart serwisu apache2... co wyłącza cały kontener więc trzeba go jeszcze raz uruchomić
można to zrobić w docker desktop -> ten trójkąt 

Następnie, ponieważ jeszcze nie wiem jak to zrobić żeby automatycznie to robiło, trzeba zmienić adres w przeglądarce na
```
localhost:443/admin_123
```

## Dostęp do:
- [Prestashop](http://localhost:443)
- [Panel administratora](http://localhost:443/admin_123)

# Praca z gitem
Aby cokolwiek wstawić na gita należy pamiętać żeby nadać upranienia do czytania i pisania, inaczej git się zbuntuje.
```
sudo chmod -R 777 *
 -- operacje git ---
```

## Importowanie danych z pliku CSV
1. Przed zaimportowaniem produktów należy przejść do zakłatki Preferencje -> Ogólne i ustawić opcję "Pozwól na iframes w polach HTML" na Tak.
2. W [panelu administratora](http://localhost:443/admin_123) przechodzimy do zakładki zaawansowane, a następnie import
3. Wybieramy czy chcemy zaimportować kategorie czy produkty i dodajemy plik
4. Oznaczamy opcję **Usuń wszystkie produkty przed importem**. Wszystkie inne pozostawiamy odznaczone.
5. Przechodzimy dalej
6. Pierwszą kolumnę zmieniamy z ID na **Ignoruj tą kolumnę**
7. Zmieniamy liczbę pomijanych wierszy z 1 na 0
8. klikamy przycisk **Importuj**
## Importowanie danych przez importer
1. Przed zaimportowaniem produktów należy przejść do zakłatki Preferencje -> Ogólne i ustawić opcję "Pozwól na iframes w polach HTML" na Tak.
2. Przechodzimy do zakładki zaawansowane -> API sprawdzamy czy API jest włączone i sprawdzamy czy klucz na pewno zgadza się z kluczem podanym w importerze w linijce 129
3. Jeżeli istnieje potrzeba wygenerowania nowego klucza, robimy to, a następnie wpisujemy go w importerze w linijce 129.
4. Uruchamiamy plik importer.py

