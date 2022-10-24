#!/bin/bash

if ! [[ $# -eq 2 ]] ; then
    echo 'This script requires 2 args, the APP_URL and DB_PASSWORD'
    exit -1
fi

# Install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"

php composer.phar update
php artisan config:cache
cat .env_production > .env
env >> .env
echo "APP_URL=$1" >> .env
echo "DB_DATABASE=lbaw2174" >> .env
echo "DB_USERNAME=lbaw2174" >> .env
echo "DB_PASSWORD=$2" >> .env
