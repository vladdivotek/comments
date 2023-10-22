FROM php:8.1.3-fpm-alpine3.15

WORKDIR /var/www

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/


RUN echo "UPDATING DEPENDENCIES..."
RUN apk update && apk add \
  build-base \
  freetype-dev \
  libjpeg-turbo-dev \
  libpng-dev \
  libzip-dev \
  zip \
  unzip \
  git \
  oniguruma-dev \
  curl \
  libpng-dev \
  libpng-dev \
  libmcrypt-dev \
  neovim \
  bash \
  openssh-client\
  libwebp-dev

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd
RUN apk add --no-cache \
  freetype-dev \
  libjpeg-turbo-dev \
  libwebp-dev \
  libpng-dev

RUN docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg && \
  docker-php-ext-install gd

RUN apk add --update linux-headers

# Install Redis Extension
RUN echo "INSTALLING REDIS..."
RUN apk add autoconf && pecl install -o -f redis \
  &&  rm -rf /tmp/pear \
  &&  docker-php-ext-enable redis && apk del autoconf

# Get latest Composer
RUN echo "INSTALLING COMPOSER..."
COPY --from=composer:lts /usr/bin/composer /usr/bin/composer

# Install Node
RUN echo "INSTALLING NODE..."
RUN apk add nodejs npm
