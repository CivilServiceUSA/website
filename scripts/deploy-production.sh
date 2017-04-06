#!/bin/bash

ssh -i id_6b807e557c63097610e78edbac36506f civilservices@192.81.212.49 << EOF

echo -e "\n\033[38;5;34m✓ Civil Services › Automated Deployment\033[0m\n"

cd /var/www/civil.services/html
git checkout --force master
git pull

echo -e "\n\033[38;5;34m✓ Civil Services › Remove Old Packages\033[0m\n"

rm -fr node_modules
rm -fr vendor

echo -e "\n\033[38;5;34m✓ Civil Services › Update Yarn Package\033[0m\n"

yarn install
composer install

echo -e "\n\033[38;5;34m✓ Civil Services › Deployment Complete\033[0m\n"

EOF