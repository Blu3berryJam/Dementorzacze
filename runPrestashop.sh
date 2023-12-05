#!/bin/sh
cp environment.ex .env
cd app
sudo chmod -R 777 admin_123 cache themes var
cd ..
sudo docker compose up -d
cd ssl 
bash enableSSL.sh
cd ..
