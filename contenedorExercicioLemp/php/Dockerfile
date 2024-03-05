## apache/Dockerfile
FROM debian:12

RUN apt-get update && apt-get install -y php-fpm

#Instalar extensións de php.
RUN apt install -y php php-mysql php-cli php-curl php-dom php-fileinfo php-gd php-iconv php-intl php-json php-mbstring php-pdo php-simplexml php-zip

EXPOSE 80
EXPOSE 443

WORKDIR /app

ENTRYPOINT [ "php-fpm8.2", "-F"]