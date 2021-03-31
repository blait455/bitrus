This project runs with Laravel version 7.0

## Getting started

Assuming you've already installed on your machine: PHP (>= 7.0.0), [Laravel](https://laravel.com) and [Composer](https://getcomposer.org).

``` bash
# install dependencies
composer install
npm install
# create .env file and generate the application key
cp .env.example .env
php artisan key:generate
# build database from migration files
php artisan migrate
# or, if you prefer to migrate and seed
php artisan migrate --seed
```

Then launch the server:

``` bash
php artisan serve
```

The project is now up and running! Access it at http://localhost:8000.
