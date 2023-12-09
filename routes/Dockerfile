FROM php:8.3.0RC6-cli-bookworm

RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        git \
        curl \
        libpq-dev && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql && \
    docker-php-ext-install zip && \
    a2enmod rewrite && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-interaction

RUN chown -R www-data:www-data storage bootstrap/cache

RUN chmod -R 775 storage bootstrap/cache

CMD ["apache2-foreground"]
