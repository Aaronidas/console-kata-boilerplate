FROM php:7.3.1-cli-alpine3.8
RUN apk update && apk add --no-cache \
    && docker-php-ext-install -j$(nproc) \
        bcmath \
        mbstring
RUN mkdir /.composer \
    && chown -R www-data:www-data /.composer
ENV PATH /var/www/html/bin:/var/www/html/vendor/bin:$PATH