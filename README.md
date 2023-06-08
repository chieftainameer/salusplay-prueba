
# SalusPlay

install php dependencies
```
composer install
```

### Environment Configuration
copy the .env.example to .env file
```
cp .env.example .env
```

### Generate a unique key
```
php artisan key:generate
```
update the database Configuration
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### run the migrations
```
php artisan migrate
```
### OPTIONAL
run database seeders to populate the database
```
php artisan db:seeders
```

finally, run the php server to serve the application

```
php artisan serve
```
