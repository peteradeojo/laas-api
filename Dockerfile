FROM ubuntu:latest

RUN apt -y update
RUN apt install -y --no-install-recommends php8.1 << 1
RUN php -v
RUN apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-pqsql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath php8.1-redis
RUN apt-get install -y php8.1-curl php8.1-zip php8.1-simplexml
RUN # Composer
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN HASH=`curl -sS https://composer.github.io/installer.sig`
RUN php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer

WORKDIR /var/www/

COPY . .

COPY ./start.sh /var/www/

RUN chmod +x /var/www/start.sh

CMD ["/var/www/start.sh"]
