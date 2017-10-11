FROM php:7-fpm

MAINTAINER "duck @ theBIGGAME" <me@duck.me.uk>

ARG EVENT_NUMBER
ENV APP_EVENTID ${EVENT_NUMBER}
ENV PATH="$PATH:/var/www/vendor/bin"

# install some dependencies / crap we need

RUN apt-get update \
    && apt-get install -y \
    curl \
    && curl -sL https://deb.nodesource.com/setup_6.x | bash - \
    && apt-get install -y \
    nodejs \
    libmcrypt-dev \
    libfreetype6 libjpeg-dev libfreetype6-dev libpng-dev \
    libxrender1 \
    wget \
    git \
    nginx \
    supervisor \
    zip unzip

# notes:
#  NPROC is done so we build PHP extensions with all available cores, dramatically reducing compile time (especially for gd)
#  we grab prestissimo because it multi-threads composer downloads basically for free

RUN NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) \
    && docker-php-ext-install -j${NPROC} \
    bcmath \
    gd \
    mcrypt \
    mbstring \
    mysqli \
    pdo_mysql \
    opcache \
    pcntl \
    && docker-php-ext-configure gd \
        --enable-gd-native-ttf \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log \
    && chown -R www-data:www-data /var/lib/nginx \
    && chown -R www-data:www-data /var/www \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
    && composer global require "hirak/prestissimo:^0.3"

# configuration
ADD ./docker/php.ini /usr/local/etc/php/conf.d/php-fpm.ini
ADD ./docker/supervisord.conf /etc/supervisord.conf
ADD ./docker/nginx.conf /etc/nginx/nginx.conf

# create app dir
RUN mkdir -p /var/www

# we copy some basic package management files here to cut down on layer changes

COPY ./composer.json ./composer.lock ./package.json ./gulpfile.js /var/www/

WORKDIR /var/www

# needed to make autoloader work properly
COPY ./database /var/www/database

RUN /usr/bin/composer install --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader \
    && npm install -g gulp \
    && npm install --production

COPY . /var/www/

RUN /usr/bin/gulp --production

RUN chown -R www-data:www-data \
        /var/www/storage \
        /var/www/bootstrap/cache \
    && chmod +x \
        /var/www/docker/launch.sh

EXPOSE 80

CMD /usr/bin/supervisord -c /etc/supervisord.conf