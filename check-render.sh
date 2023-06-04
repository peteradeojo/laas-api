#!/bin/sh

# Check if /etc/secrets/.env file exists and copy to /app directory
if [ -f /etc/secrets/.env ]; then
    cp /etc/secrets/.env /app/.env
fi
