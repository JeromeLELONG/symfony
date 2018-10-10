FROM mysql:5
ENV MYSQL_ROOT_PASSWORD root
ENV MYSQL_DATABASE db_symfony
COPY init.sql /docker-entrypoint-initdb.d/init.sql
WORKDIR /docker-entrypoint-initdb.d/
COPY my.cnf /etc/mysql/my.cnf

CMD ["--character-set-server=latin1", "--character-set-filesystem=latin1", "--collation-server=latin1_swedish_ci"]
#RUN /etc/init.d/mysql start
#RUN  mysql -u root -p${MYSQL_ROOT_PASSWORD}   < /docker-entrypoint-initdb.d/init.sql