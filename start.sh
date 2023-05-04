#!/usr/bin/sh

php artisan config:clear
php artisan config:cache

php artisan migrate --force

php artisan route:cache

php artisan serve --host=0.0.0.0
