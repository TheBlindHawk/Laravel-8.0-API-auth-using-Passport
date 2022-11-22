# Cloning

After cloning the project change the username and password of the ```.env``` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
run the following on terminal:
```
sudo service mysql start                    //if mysql is not running

composer update
php artisan migrate
php artisan passport:install
php artisan passport:client --personal
php artisan key:generate
php artisan serve
```

# Step by step

A step by step documentation is available [here](https://zenn.dev/theblindhawk/articles/5cdf5b0c1d5b19).

Good luck!

