FROM fozzyua/docker-php-openswoole-base-image:v1.0.1-php8.4.5-openswoole-25.2.0

# Install build dependencies and PHP gRPC extension via PECL
RUN pecl install grpc \
    && docker-php-ext-enable grpc \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/project

COPY --chown=1000:1000 . /var/www/project

ENTRYPOINT ["php"]
CMD ["./bin/client.php"]
