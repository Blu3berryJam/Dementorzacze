# Instalacja

## Windows
uruchomić kontener poleceniem:
```
docker compose up
```

## Ubuntu
nadać uprawnienia do czytania i pisania wszystkim plikom w projekcie
i następnie uruchomić kontener na poziomie administratora

```
sudo chmod -R 777 *
sudo docker compose up
```
## Dostęp do:
- [Prestashop](http://localhost:8080)
- [Panel administratora](http://localhost:8080/admin_123)
## Importowanie danych z pliku CSV
1. Przed zaimportowaniem produktów należy przejść do zakłatki Preferencje -> Ogólne i ustawić opcję "Pozwól na iframes w polach HTML" na Tak.
2. W [panelu administratora](http://localhost:8080/admin_123) przechodzimy do zakładki zaawansowane, a następnie import
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

# Praca z gitem
Aby cokolwiek wstawić na gita należy pamiętać żeby nadać upranienia do czytania i pisania, inaczej git się zbuntuje.
```
sudo chmod -R 777 *
 -- operacje git ---
```
