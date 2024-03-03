FROM debian

EXPOSE 80
EXPOSE 443

RUN apt-get update && apt-get install -y apache2
RUN apt-get update && apt-get install -y php php-mysql php-cli php-curl php-dom php-fileinfo php-gd php-iconv php-intl php-json php-mbstring php-pdo php-simplexml php-zip
#RUN apt install -y php8.2-mysql php-xml php-cli php-curl php-dom php-fileinfo php-gd php-iconv php-intl php-json php-mbstring php-pdo php-simplexml php-zip

RUN a2enmod ssl
RUN a2enmod rewrite

WORKDIR /app

ENTRYPOINT [ "apachectl", "-D", "FOREGROUND" ]