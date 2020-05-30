#!/usr/bin/env bash

# shutdown the application
php artisan down

#pull update from Git
git pull

# Install dependencies again
composer install --no-interaction --prefer-dist

# run autoload
composer dump-autoload

# run migration forcefully.
php artisan migrate --force

# Now, power on the application
php artisan up