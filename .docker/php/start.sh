#!/bin/bash

if [ $COMPOSER_INSTALL == "1" ]; then
    composer global require hirak/prestissimo
    composer install --prefer-dist --no-progress --no-suggest
fi

if [ $ENABLE_XDEBUG == "1" ]; then
    docker-php-ext-enable xdebug
fi

chmod 0777 ./tests/_output -R

docker-php-entrypoint php-fpm
