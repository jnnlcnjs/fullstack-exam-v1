FROM mariadb:10.5.8

WORKDIR /etc/mysql/conf.d

COPY docker/config/mysql/docker.my.cnf .

RUN mv docker.my.cnf my.cnf

EXPOSE 3306

RUN chown -R mysql:mysql /var/log/mysql

RUN touch /var/log/mysql/mysql_error.log

RUN touch /var/log/mysql/mysql_slow.log