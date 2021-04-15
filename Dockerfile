FROM ubuntu:20.04
RUN apt-get update && apt-get install -y php apache2 mcrypt php-libapache php-mysql mysql-server php-mysqli 
RUN apt-get install --no-install-recommends -y libpq-dev
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions
EXPOSE 80
