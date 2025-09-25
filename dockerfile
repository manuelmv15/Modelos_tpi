FROM php:8.2-apache


# Extensiones PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli


# Habilitar mod_rewrite
RUN a2enmod rewrite


# Permitir .htaccess y acceso en /var/www/html
RUN printf "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \
  > /etc/apache2/conf-available/z-override.conf \
  && a2enconf z-override


WORKDIR /var/www/html


EXPOSE 80