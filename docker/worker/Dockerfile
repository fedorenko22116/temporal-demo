FROM spiralscout/roadrunner as rr
FROM fozzyua/docker-php-base-image:v1.0.7-php8.4.14

WORKDIR /var/www/project

COPY --from=rr /usr/bin/rr /usr/bin/rr

COPY composer.json composer.lock /var/www/project/
RUN composer install

COPY --chown=1000:1000 . /var/www/project

ENTRYPOINT ["rr"]
CMD ["serve"]
