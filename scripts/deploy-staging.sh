#!/bin/bash

ssh -i id_cd567023268175d5eef2286540c57939 civilservices@192.81.212.49 << EOF

echo -e "\n\033[38;5;34m✓ Civil Services › Automated Deployment\033[0m\n"

cd /var/www/staging.civil.services/html
git checkout --force staging
git pull

echo -e "\n\033[38;5;34m✓ Civil Services › Set Folder Permissions\033[0m\n"

chmod -R o+w bootstrap/cache
chmod -R o+w storage

echo -e "\n\033[38;5;34m✓ Civil Services › Remove Old Packages\033[0m\n"

rm -fr node_modules
rm -fr vendor

echo -e "\n\033[38;5;34m✓ Civil Services › Update Yarn Package\033[0m\n"

yarn install
composer install

echo -e "\n\033[38;5;34m✓ Civil Services › Update Static Assets\033[0m\n"

yarn run dev

echo -e "\n\033[38;5;34m✓ Civil Services › Clear Redis Cache\033[0m\n"

redis-cli FLUSHALL

echo -e "\n\033[38;5;34m✓ Civil Services › Deployment Complete\033[0m\n"

EOF