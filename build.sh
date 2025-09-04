#!/bin/bash

# Install Composer dependencies
echo "Installing Composer dependencies..."
if ! command -v composer &> /dev/null; then
    # Download composer if not available
    curl -sS https://getcomposer.org/installer | php
    php composer.phar install --no-dev --optimize-autoloader
else
    composer install --no-dev --optimize-autoloader
fi

# Copy environment file
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Install npm dependencies and build assets
echo "Installing npm dependencies..."
npm ci

echo "Building assets..."
npm run build

echo "Build completed successfully!"
