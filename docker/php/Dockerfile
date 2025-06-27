FROM php:8.4-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Установка PHP-расширений
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd sockets

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создание рабочей директории
WORKDIR /var/www

# Копируем только composer файлы
COPY src/composer.json src/composer.lock ./

## Установка зависимостей (с кэшированием)
#RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

# Копируем остальные файлы
COPY src .

## Оптимизация автозагрузки
#RUN composer dump-autoload --optimize --apcu
