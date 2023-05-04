FROM ubuntu:latest

RUN apt-get update
RUN apt-get install -y curl apt-transport-https ca-certificates curl gnupg-agent software-properties-common

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get -y install php8.1-fpm php8.1-curl php8.1-xml php8.1-xml php8.1-bcmath php8.1-mbstring php8.1-redis php8.1-pgsql php8.1-gd php8.1-zip php8.1-mysql

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

WORKDIR /app

COPY . .
COPY ./start.sh /app/start.sh

RUN chmod +x /app/start.sh

RUN composer install

# CMD ["/app/start.sh"]
