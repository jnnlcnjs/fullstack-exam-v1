FROM nginx:stable-alpine

WORKDIR /etc/nginx/conf.d

COPY docker/config/nginx/docker.nginx.conf .

RUN mv docker.nginx.conf default.conf

EXPOSE 8000

RUN chown -R nobody:nobody /var/log/nginx