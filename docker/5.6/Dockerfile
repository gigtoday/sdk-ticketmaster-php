FROM php:5.6-fpm-alpine

MAINTAINER Mathias Schilling <m@matchilling.com>

ENV LIB_PATH /usr/local/lib/ticketmaster

# Install modules
RUN apk add --update bash && \
    rm -rf /var/cache/apk/*

# Create lib directory
RUN mkdir -p $LIB_PATH
WORKDIR $LIB_PATH

# Install lib dependencies
RUN curl --silent --show-error https://getcomposer.org/installer | php
COPY composer.json $LIB_PATH
RUN php composer.phar install

# Bundle lib source
COPY . $LIB_PATH

CMD ["php", "composer.phra", "run-script", "test"]
