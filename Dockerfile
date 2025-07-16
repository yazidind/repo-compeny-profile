FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan CI4
RUN apt-get update && apt-get install -y \
    libzip-dev unzip \
    && docker-php-ext-install zip intl mbstring

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Copy semua file project ke container
COPY . /var/www/html/

# Set direktori kerja
WORKDIR /var/www/html/

# Ubah document root Apache ke folder public/
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update konfigurasi Apache agar root ke /public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Atur hak akses ke folder writable
RUN chown -R www-data:www-data writable
RUN chmod -R 775 writable