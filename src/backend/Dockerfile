FROM php:8-fpm

COPY composer.lock composer.json /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    zip \
    vim \
    git \
    curl

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html

RUN groupadd --gid 1000 --system appuser \
    && useradd --uid 1000 -g appuser \
    -G www-data,root --shell /bin/bash \
    --create-home appuser

USER appuser

EXPOSE 9000
CMD ["php-fpm"]
