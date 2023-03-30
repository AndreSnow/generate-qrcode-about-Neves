FROM php:8.1.0-apache

RUN apt-get update -y --fix-missing && \
    apt-get install -y libmcrypt-dev zlib1g-dev libzip-dev git curl gnupg libmagickwand-dev --no-install-recommends && \
    pecl install mcrypt-1.0.5 && \
    pecl install imagick && \
    docker-php-ext-enable mcrypt imagick && \
    docker-php-ext-install zip pdo pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && apt-get autoremove -y && apt-get autoclean -y && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY . /var/www/html
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

WORKDIR /var/www/html

RUN a2enmod rewrite headers ssl && \
    service apache2 restart

CMD ["apache2-foreground"]

EXPOSE 80
