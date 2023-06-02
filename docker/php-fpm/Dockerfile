FROM php:8.2-fpm

RUN apt-get update && apt-get install -y libpq-dev iputils-ping iproute2
RUN docker-php-ext-install -j$(nproc) pdo pdo_pgsql
RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /app

