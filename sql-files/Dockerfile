FROM mysql:8.0 
RUN chmod a+rw /var/lib/mysql
COPY ../sql-files /docker-entrypoint-initdb.d
RUN chmod a+r /docker-entrypoint-initdb.d/*
EXPOSE 3306 
