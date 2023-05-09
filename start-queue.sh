#!/usr/bin/sh

php artisan queue:work redis --tries=3 --sleep=3
