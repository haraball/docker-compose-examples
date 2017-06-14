FROM php:5.6-apache

RUN apt-get update -y && apt-get install -y php5-mysql

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite
RUN service apache2 restart
