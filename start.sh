#!/bin/sh

sh /app/check-render.sh

php artisan storage:link

php artisan migrate --force

php artisan config:cache

php artisan serve --host=0.0.0.0
