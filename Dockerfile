FROM php:8.2-apache

# Enable PDO MySQL for database access
RUN docker-php-ext-install pdo pdo_mysql

# Set Apache document root to /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# Copy project files into container
COPY . /var/www/html/

# Recommended permissions for Apache runtime dirs
RUN chown -R www-data:www-data /var/www/html/logs /var/www/html/public/uploads

EXPOSE 80
