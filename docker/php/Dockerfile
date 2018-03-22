# Base PHP image for all our containers
FROM php:fpm-alpine as php-base
RUN docker-php-ext-install pdo_mysql

# Image for running composer
FROM php-base as composer
RUN curl --silent --show-error https://getcomposer.org/installer | php \
    && mv composer.phar /bin/composer
WORKDIR /var/www/
ENTRYPOINT ["/bin/composer"]
CMD ["install"]

# Our PHP CLI container
FROM php-base as php-cli
WORKDIR /var/www/
ENTRYPOINT ["php"]
