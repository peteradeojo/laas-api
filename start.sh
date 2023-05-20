#!/usr/bin/sh

# if [ -f "/etc/secrets/.env" ]; then
#     # code to be executed if the file is a regular file
#     echo "Env file Found, copying to dir and setting app key and migrate";

#     cp /etc/secrets/.env .env

#     php artisan config:cache

#     php artisan key:generate
#     php artisan migrate --force
# else
#     # code to be executed if the file is not a regular file
#     echo "Env file Not found";
#     exit 1;
# fi

sh "./render-env-check.sh"

php artisan storage:link

php artisan serve --host=0.0.0.0
