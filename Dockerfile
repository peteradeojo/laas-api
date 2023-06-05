FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && \
    apt-get upgrade -y

RUN apt-get install software-properties-common -y

RUN add-apt-repository --yes ppa:ondrej/php

RUN apt-get install -y php8.1 --no-install-recommends

RUN apt-get install --fix-missing -y curl zip php8.1-mysqli php8.1-pdo php8.1-xml php8.1-redis php8.1-sqlite3 php8.1-bcmath php8.1-mbstring php8.1-curl supervisor

# Create the log directory and assign permissions
RUN mkdir -p /var/log/supervisor && chown -R www-data:www-data /var/log/supervisor

WORKDIR /app

COPY . .

RUN chmod +x /app/composer-setup.sh
RUN chmod +x /app/check-render.sh
RUN chmod +x /app/start.sh

RUN sh /app/composer-setup.sh
RUN composer install --no-dev --no-interaction --no-progress --optimize-autoloader

ENTRYPOINT ["/app/start.sh"]
