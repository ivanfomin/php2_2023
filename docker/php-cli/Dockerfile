FROM php:8.2-cli

RUN apt update && apt-get install -y autoconf g++ make \
    && pecl install xdebug \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
#COPY entrypoint.sh /usr/local/bin/docker-php-entrypoint
#RUN chmod +x /usr/local/bin/docker-php-entrypoint


#RUN docker-php-ext-install intl

#RUN addgroup -g 1000 app && adduser -u 1000 -G app


COPY --from=composer /usr/bin/composer /usr/local/bin/composer

WORKDIR /app

#USER app


