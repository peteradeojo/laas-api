FROM php:8.1-cli-alpine3.16

ENV DEBIAN_FRONTEND=noninteractive
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apk add --no-cache \
    libzip-dev \
    zip \
    unzip \
    php81-pdo_mysql php81-mysqli php81-pecl-redis php81-pdo_sqlite php81-sqlite3 php81-bcmath php81-mbstring php81-xml php81-dom

COPY composer-setup.sh /var/www/composer-setup.sh
RUN chmod +x /var/www/composer-setup.sh
RUN /var/www/composer-setup.sh

WORKDIR /app

COPY . .

RUN composer install

RUN chmod +x /app/start.sh
RUN chmod +x /app/check-render.sh

CMD ["/app/start.sh"]
