FROM spiralscout/roadrunner as rr
FROM fozzyua/docker-php-base-image:v1.0.7-php8.4.14

# Install build dependencies and PHP gRPC extension via PECL
RUN pecl install grpc \
    && docker-php-ext-enable grpc \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/project

COPY --from=rr /usr/bin/rr /usr/bin/rr
COPY --chown=1000:1000 . /var/www/project

ENTRYPOINT ["rr"]
CMD ["serve"]
