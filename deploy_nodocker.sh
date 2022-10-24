#!/bin/bash

if ! [[ $# -eq 1 ]] ; then
    echo 'This script requires 1 arg, the APP_URL'
    exit -1
fi

php artisan config:cache
env >> .env
echo "APP_URL=$1" >> .env
