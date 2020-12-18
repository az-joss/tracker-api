FROM php:7.4-fpm

ARG USER_ID="1000"
ARG GROUP_ID="1000"
ARG PHP_EXTENSIONS="bcmath exif pcntl iconv intl json mysqli opcache pdo_mysql soap xsl zip"

ARG APP_WORKDIR="/var/www/app"

# dependencies
RUN apt-get update \
    && apt-get install -y \
        curl \
        openssl \
        libxml2-dev \
        libxslt-dev \
        libicu-dev \
        libmcrypt-dev \
        libzip-dev \
    && apt-get clean -y

# configure php extantions
RUN docker-php-ext-configure \
        pdo_mysql \
        --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure intl

# install php extantions
RUN docker-php-ext-install $PHP_EXTENSIONS \
    && pecl install xdebug-2.8.1 \
    && docker-php-ext-enable \
        xdebug

# change user
RUN usermod -o -u ${USER_ID} www-data \
    && groupmod -o -g ${GROUP_ID} www-data

# set user
USER "${USER_ID}:${GROUP_ID}"

WORKDIR "${APP_WORKDIR}"

CMD ["php-fpm"]
