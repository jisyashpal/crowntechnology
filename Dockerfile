FROM php:8.2-apache

# Enable MySQL support for PDO
RUN docker-php-ext-install pdo pdo_mysql

# Serve the app from /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
COPY . /var/www/html/

# Set writable paths for runtime
RUN mkdir -p /var/www/html/logs /var/www/html/public/uploads \
    && chown -R www-data:www-data /var/www/html/logs /var/www/html/public/uploads

EXPOSE 80
