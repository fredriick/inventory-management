FROM php:8.2.13-fpm-alpine

RUN docker-php-ext-install pdo_mysql

RUN apk add --no-cache bash

WORKDIR /var/www/html

COPY . .

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN composer install --no-interaction --no-scripts --no-suggest

RUN php artisan key:generate

EXPOSE 9000

CMD ["php-fpm"]
