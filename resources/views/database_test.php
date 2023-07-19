<?php
try {
    $connection = new PDO(
        'mysql:host=mysql;dbname=mysql',
        'sail',
        'password'
    );
    echo 'Connection to the database successful!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}




// DB_CONNECTION=mysql
//     # DB_HOST=mysql for .env here, and =localhost for connecting from CLI or MySQL Workbench, etc...
//     # Also, in order to do php artisan migrate from the console, you might need to change DB_HOST to localhost instead of mysql
// DB_HOST=mysql
// # DB_HOST=localhost
// DB_PORT=3306
// DB_DATABASE=test_app
// DB_USERNAME=sail
// DB_PASSWORD=password