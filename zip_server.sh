#!/bin/bash

zip -ur server.zip .

while read in; do zip -d server.zip "$in"; done < dockerignore

zip -d server.zip .env
zip -u server.zip .env_production
printf "@ .env_production\n@=.env\n" | zipnote -w server.zip

zip -u server.zip deploy_nodocker.sh
