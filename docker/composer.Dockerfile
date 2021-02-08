FROM composer:2.0.8

WORKDIR /var/www/html

COPY codeigniter/. .

ENTRYPOINT [ "composer", "--ignore-platform-reqs" ]