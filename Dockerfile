# Set the base image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev git zip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Set working directory
WORKDIR /var/www

# Copy the Laravel app files into the container (including composer.json)
COPY . /var/www

# Copy composer.json and composer.lock files
COPY composer.json /var/www/
COPY composer.lock /var/www/

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Run composer install (now it can access the full application, including artisan)
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permissions for the storage and cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/vendor

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
