FROM php:8.1.4-fpm

ENV TZ Asia/Tokyo

RUN apt-get update && \
    apt-get install -y --no-install-recommends git unzip libzip-dev libicu-dev libonig-dev && \
    curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs && \
    docker-php-ext-install intl pdo_mysql zip bcmath

COPY php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /app