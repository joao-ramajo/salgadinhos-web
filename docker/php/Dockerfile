# ========================
# STAGE 1 – Composer
# ========================
FROM composer:2 AS composer

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-scripts

# ========================
# STAGE 2 – Node build
# ========================
FROM node:20 AS node

WORKDIR /app
COPY package.json package-lock.json ./
RUN npm install
COPY resources resources
COPY vite.config.js .
RUN npm run build

# ========================
# STAGE 3 – PHP Final
# ========================
FROM php:8.4-fpm

# Extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www

# Copia app
# COPY . .
COPY --chown=www-data:www-data . .

# Copia dependências
COPY --from=composer /app/vendor vendor
COPY --from=node /app/public/build public/build

# Permissões
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache
RUN mkdir -p storage/logs storage/framework/sessions storage/framework/views storage/framework/cache \
    && chown -R www-data:www-data storage \
    && chmod -R 775 storage

EXPOSE 9000
