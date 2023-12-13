#!/bin/sh

bash cert_key_gen.sh
docker exec prestashop mkdir /etc/ssl/dementorzacze
docker cp keys prestashop:/etc/ssl/dementorzacze/keys
docker cp default-ssl.conf prestashop:/etc/apache2/sites-available/default-ssl.conf
docker exec prestashop ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf
docker exec prestashop a2enmod ssl
docker exec prestashop service apache2 restart
