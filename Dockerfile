FROM composer:2 AS composer
FROM mlocati/php-extension-installer:1.4 as phpei
FROM php:8.1-apache-buster

# Copy composer and install-php-extensions from other images
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --from=phpei /usr/bin/install-php-extensions /usr/bin/install-php-extensions

# Create a local user
ARG LOCAL_USER
ARG LOCAL_USER_ID
RUN useradd -ms /bin/bash -l -u "$LOCAL_USER_ID" "$LOCAL_USER"

ENV ACCEPT_EULA=Y

# Install some tools
RUN apt-get update \
    && apt-get install --no-install-recommends -y \
        apt-transport-https \
        software-properties-common \
        ca-certificates \
        git \
        gnupg \
        ssh-client \
        unzip \
        p7zip

# Install php extensions
RUN install-php-extensions \
        intl \
        gd \
        pcov \
        sqlite3 \
        opcache \
        tidy \
        xdebug-^2 \
        zip

RUN apt-get purge -y \
        apt-transport-https \
        software-properties-common \
        gnupg \
    && apt-get autoremove -y \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# set recommended PHP.ini settings
RUN set -eux

# Set apache configuration
ENV DOCUMENT_ROOT /var/www/html

# Set apache configuration and activate apache modules
RUN echo "ServerName localhost" >/etc/apache2/conf-available/fqdn.conf \
    && a2dismod mpm_event \
    && a2enmod rewrite expires remoteip headers mpm_prefork
