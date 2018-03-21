FROM dockerfordevs_phpserver

RUN wget https://getcomposer.org/composer.phar -O /bin/composer \
    && chmod +x /bin/composer 

WORKDIR /var/www/
ENTRYPOINT ["/bin/composer"]
CMD ["install"]
