# apiLaravel

## Project setup
```
composer install
```

### Set environnement file
```
copy-paste .env.example
rename .env
modify this file with database name, login and password
```

### Create Api Key
```
php artisan key:generate
```

### Create database
```
create manually database with name apilaravel
php artisan migrate
php artisan db:seed
```

### Compiles for development
```
php artisan serve
```
