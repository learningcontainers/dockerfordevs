# =============================================================================
# Webserver
# =============================================================================
FROM php:apache as basewebserver

RUN a2enmod rewrite \
    && docker-php-ext-install pdo_mysql

# =============================================================================
# Composer
# =============================================================================
FROM basewebserver as composer

RUN apt update && apt install -y git zip unzip
RUN curl https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer | php -- --quiet
RUN mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer
ENV COMPOSER_HOME /opt/composer
WORKDIR /app
CMD ["-"]
ENTRYPOINT ["composer", "--ansi"]