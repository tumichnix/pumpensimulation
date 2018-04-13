# Pumpensimulation

## Install
```bash
cd [PATH-TO-PROJECT]
chmod -R 0777 ./storage && composer install
cp .env.example .env
touch database/database.sqlite
php artisan migrate[:refresh]
php artisan db:seed // only run for generating test data
php -S localhost:8080 -t public
```

## Postman Collection
You can import the "pumpensimulation.postman_collection" to get a quick and smart start with the restful api.

## Get calculation for a project without REST
```bash
cd [PATH-TO-PROJECT]
php artisan project:calculation ID
```
