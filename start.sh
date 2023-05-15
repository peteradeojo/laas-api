#!/usr/bin/sh

php artisan migrate --force

env

php artisan serve --host=0.0.0.0
