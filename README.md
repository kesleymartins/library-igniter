# Library Igniter
A simple library app styled with bootstrap

### Requirements
- PHP 8
- Composer
- php-intl
- sqlite3
- node

### Installation
---
```sh
# Install foreman is you don't have installed
npm i -g foreman

# Install dependencies
composer install
npm install

Setup local environment, by default is set to development env
cp env .env

# Run all migrations
php spark migrate

# Open local server localhost:8080
foreman start
```
