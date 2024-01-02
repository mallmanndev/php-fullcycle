FROM php:8.2.14-fpm

WORKDIR /var/www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 9000