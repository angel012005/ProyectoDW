FROM php:8.0-apache

# Instalar las extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

