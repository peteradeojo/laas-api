#!/usr/bin/sh

while [ ! -f /app/.env ]; do
    sleep 1
done

service redis-server start

php artisan migrate --force

php artisan serve & php artisan queue:work redis
