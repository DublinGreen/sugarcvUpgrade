FROM php:8.1-fpm

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring xml zip bcmath

# Set working directory
WORKDIR /var/www/sugarcv.co.uk