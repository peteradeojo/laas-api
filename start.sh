#!/usr/bin/sh

if [ -f "/etc/secrets/.env" ]; then
    # code to be executed if the file is a regular file
    echo "Env file Found, copying to dir and setting app key";

    cp /etc/secrets/.env .env
    php artisan key:generate
else
    # code to be executed if the file is not a regular file
    echo "Env file Not found";
    exit 1;
fi


php artisan serve --host=0.0.0.0
