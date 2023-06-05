#!/bin/sh

sh /app/check-render.sh

php artisan storage:link

php artisan migrate --force

php artisan config:cache

# php artisan serve --host=0.0.0.0

chown -R www-data:www-data /app/storage
chown -R www-data:www-data /app/bootstrap/cache
chown -R www-data:www-data /app/supervisord.conf

supervisord -n -c /app/supervisor.conf
