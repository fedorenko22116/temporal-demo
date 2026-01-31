FROM fozzyua/docker-php-base-image:v1.0.7-php8.4.14

WORKDIR /var/www/project

COPY --chown=1000:1000 . /var/www/project

RUN vendor/bin/dload

CMD ["./rr", "serve"]
