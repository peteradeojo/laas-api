#!/usr/bin/sh

php artisan key:generate

php artisan config:clear
php artisan config:cache

php artisan migrate --force

php artisan route:cache

supervisorctl start all

supervisorctl status

php artisan serve --host=0.0.0.0
