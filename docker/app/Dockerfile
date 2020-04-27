FROM php:7.2.20-fpm


# Pre-requisites installation
#RUN apt-get update \
#   && apt-get install -y libmcrypt-dev curl mcrypt git unzip \
#   && pecl install mcrypt-1.0.2 \
#   && docker-php-ext-enable mcrypt \
#   && docker-php-ext-install pdo_mysql bcmath \
#   && pecl install mongodb \
#   && echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini \
#   && docker-php-ext-enable bcmath \
#   && docker-php-ext-enable pdo_mysql \
#   && docker-php-ext-enable sodium \
#   && apt-get install -y zlib1g-dev libzip-dev zip

WORKDIR /var/www/html
