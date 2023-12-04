# Instalacja
To jest wersja bez zainstalowanej presty -> zainstalowaną prestę można pobrać 
przez link:

rozpakuj tara w folderze projektu 


## Ubuntu
nadać uprawnienia do czytania i pisania wszystkim plikom w projekcie
i następnie uruchomić kontener na poziomie administratora

```
sudo chmod -R 777 *
sudo docker compose up
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

# Praca z gitem
Aby cokolwiek wstawić na gita należy pamiętać żeby nadać upranienia do czytania i pisania, inaczej git się zbuntuje.
```
sudo chmod -R 777 *
 -- operacje git ---
```
