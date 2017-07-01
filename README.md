# Enstart Extension: Database

Wrapper for [mrjgreen/database](https://github.com/mrjgreen/database)

#### Dependencies:

* `maer/enstart` version 0.2+
* PHP 7.0+ with the PDO extension

#### Install

    composer require maer/enstart-db

#### Config:

    // Database connection settings
    'database' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'database',
        'username'  => 'username',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ],

    // Register service provider
    'providers' => [
        ...
        'Enstart\Ext\Database\ServiceProvider',
    ],

#### Access the extension

    // Get a copy of the instance
    $db = $app->container->make('Database\Connection');

    // or through the alias:
    $app->db

    // or through dependency injection (if you type hint it in your constructor)
    use Database\Connection


Read more @ https://github.com/mrjgreen/database