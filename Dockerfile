# Base image with PHP and Composer
FROM php:8.1-fpm

# Set working directory
WORKDIR /app

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libpq-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install supervisor
RUN apt-get install -y supervisor
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy application files
COPY . /app

# Set up Laravel storage and permissions
RUN chown -R www-data:www-data /app/storage
RUN chmod -R 775 /app/storage

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install project dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

COPY start.sh /app/start.sh
RUN chmod +x /app/start.sh

# Expose port 9000 for PHP-FPM
EXPOSE 8000
EXPOSE 9000

# Start supervisor
CMD [ "/app/start.sh" ]
