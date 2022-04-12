FROM php:7.4-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

EXPOSE 80

ENV DB_HOST='ecommerceapp.cqkmimvdkxb5.us-east-1.rds.amazonaws.com'
ENV DB_USER='root'
ENV DB_PASSWORD='rootroot'
ENV DB_NAME='ecommerceapp'

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]