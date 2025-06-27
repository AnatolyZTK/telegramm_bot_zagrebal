# Базовый образ PHP с необходимыми расширениями
FROM php:8.4-fpm

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql zip exif pcntl bcmath gd sockets

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создание рабочей директории
WORKDIR /var/www

# Копируем только файлы composer сначала
COPY composer.json composer.lock ./

# Установка зависимостей с оптимизацией
RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --optimize-autoloader

# Копируем весь проект
COPY . .

# Создаем необходимые директории и устанавливаем права
RUN mkdir -p var/cache var/log \
    && chown -R www-data:www-data var \
    && chmod -R 777 var

## Очистка кэша Symfony (только если папка var существует)
#RUN if [ -d var ]; then \
#    php bin/console cache:clear --no-warmup \
#    && php bin/console cache:warmup; \
#    fi

# Оптимизация автозагрузчика
RUN composer dump-autoload --optimize

# Точка входа
CMD ["php-fpm"]

EXPOSE 9000
