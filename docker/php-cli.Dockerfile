FROM php:7.3.25-cli-alpine

RUN apk update && apk add curl git wget 1> /dev/null

RUN docker-php-ext-install pdo pdo_mysql 1> /dev/null

RUN docker-php-ext-install bcmath sockets 1> /dev/null

RUN apk add --no-cache $PHPIZE_DEPS 1> /dev/null \
    && pecl install xdebug-2.9.8 1> /dev/null \
    && docker-php-ext-enable xdebug 1> /dev/null

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY codeigniter/. .

ENTRYPOINT [ "php" ]