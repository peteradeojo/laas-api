#!/bin/bash

sh "./render-env-check.sh"

php artisan storage:link --force

/usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf
