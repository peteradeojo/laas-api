#!/usr/bin/sh

# php artisan migrate --force

php artisan serve & php artisan queue:work redis
