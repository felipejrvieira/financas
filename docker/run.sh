#!/bin/sh
composer install
composer create-project
touch database/database.sqlite
chown -R 1000:1000 .
php artisan migrate
php artisan serve --host=0.0.0.0 --port=80
