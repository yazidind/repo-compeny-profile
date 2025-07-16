FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev unzip zip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install zip pdo pdo_mysql mbstring gd

# Enable Apache Rewrite Module
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/writable

# Set working directory
WORKDIR /var/www/html

# Run composer install
RUN composer install

# Expose port
EXPOSE 80