FROM docker-php-openswoole-base-image:v1.0.1-php8.4.14-openswoole25.2.0

# Install build dependencies and PHP gRPC extension via PECL
RUN pecl install grpc \
    && docker-php-ext-enable grpc \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/project

COPY --chown=1000:1000 . /var/www/project

RUN vendor/bin/dload

CMD ./worker.php
