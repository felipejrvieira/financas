#!/bin/sh
composer install
composer create-project
chown -R 1000:1000 .
php artisan serve --host=0.0.0.0 --port=80
