#!/usr/bin/sh

sh "./render-env-check.sh"

ls -la public

php artisan storage:link --force

php artisan serve --host=0.0.0.0
