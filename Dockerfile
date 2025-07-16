FROM php:8.2-apache

# Install ekstensi yang dibutuhkan
RUN apt-get update && apt-get install -y \
    zip unzip libzip-dev libicu-dev \
    && docker-php-ext-install intl pdo_mysql zip

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Set DocumentRoot ke folder public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Ubah default Apache config supaya root-nya ke /public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Salin semua source code ke dalam container
COPY . /var/www/html

# Ubah permission writable agar CI bisa nulis
RUN chown -R www-data:www-data /var/www/html/writable

# Jalankan composer install (opsional kalau belum di Git)
WORKDIR /var/www/html
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php composer.phar install && \
    rm composer-setup.php