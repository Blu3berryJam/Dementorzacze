#!/bin/sh
cp environment.ex .env
sudo chmod -R 777 *
sudo docker compose up -d
cd ssl 
bash enableSSL.sh
cd ..
