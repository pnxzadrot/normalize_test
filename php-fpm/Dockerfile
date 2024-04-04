FROM php:8.3-fpm-alpine

# Install packages
RUN apk add --no-cache curl git build-base zlib-dev oniguruma-dev autoconf zip libpng-dev gd bash
#OPcache
RUN docker-php-ext-install opcache
COPY ./php-fpm/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN sed -i 's/memory_limit.*/memory_limit = -1/g' "$PHP_INI_DIR/php.ini"
RUN sed -i 's/;date.timezone.*/date.timezone = Asia\/Krasnoyarsk/g' "$PHP_INI_DIR/php.ini"


RUN chown www-data:www-data /var/www
WORKDIR /var/www
USER www-data

COPY --chown=www-data:www-data . .

# Composer
RUN composer install --no-interaction

CMD php-fpm

EXPOSE 9000