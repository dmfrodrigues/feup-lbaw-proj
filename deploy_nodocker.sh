#!/bin/bash

if ! [[ $# -eq 1 ]] ; then
    echo 'This script requires 1 arg, the APP_URL'
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
