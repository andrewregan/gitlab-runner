#!/bin/bash

# install dependencies only for Docker
[[ ! -e /.dockerenv ]] && [[ ! -e /.dockerinit ]] && exit 0

set -xe

# install git (required by composer)
apt-get update -yqq
apt-get install git -yqq

# install phpunit, the tool used for testing
curl -o /usr/local/bin/phpunit https://phar.phpunit.de/phpunit.phar
chmod +x /usr/local/bin/phpunit

# install mysql for php
apt-get install php7.0-mysql

