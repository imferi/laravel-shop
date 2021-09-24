# install guide

clone project from github

```
git clone https://github.com/ashkanfekridev/laravel-shop.git 
cd laravel-shop
```

install laravel and project dependencies
```
composer install
```
create environment file and create laravel private key
```
cp .env.example .env && php artisan key:generate 
```

install application migration
```
php artisan migrate
```

run laravel application
```
php artisan serve
```









