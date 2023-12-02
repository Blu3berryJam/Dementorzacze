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
## Importowanie danych
1. W [panelu administratora](http://localhost:8080/admin_123) przechodzimy do zakładki zaawansowane, a następnie import
2. Wybieramy czy chcemy zaimportować kategorie czy produkty i dodajemy plik
3. Oznaczamy opcję **Usuń wszystkie produkty przed importem**. Wszystkie inne pozostawiamy odznaczone.
4. Przechodzimy dalej
5. Pierwszą kolumnę zmieniamy z ID na **Ignoruj tą kolumnę**
6. Zmieniamy liczbę pomijanych wierszy z 1 na 0
7. klikamy przycisk **Importuj**

# Praca z gitem
Aby cokolwiek wstawić na gita należy pamiętać żeby nadać upranienia do czytania i pisania, inaczej git się zbuntuje.
```
sudo chmod -R 777 *
 -- operacje git ---
```
