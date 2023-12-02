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

## Włączenie ssl na prestashopie:
Wejdź do folderu ssl i uruchom skrypt enableSSL.sh

```
bash enable.sh
```

# Praca z gitem
Aby cokolwiek wstawić na gita należy pamiętać żeby nadać upranienia do czytania i pisania, inaczej git się zbuntuje.
```
sudo chmod -R 777 *
 -- operacje git ---
```
