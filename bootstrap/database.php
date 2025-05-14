<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Container\Container;


/* 
 | --------------------------------------------------------------------------
 | Database Configuration
 | --------------------------------------------------------------------------
 | This file sets up the database connection using Eloquent ORM. 
 */

$capsule = new Capsule;

// Add your connection here
$capsule->addConnection([
    'driver'    => config('database.connection', 'mysql'),
    'host'      => config('database.host', '127.0.0.1'),
    'port'      => config('database.port', 3306),
    'database'  => config('database.database', 'my_php_app'),
    'username'  => config('database.username', 'root'),
    'password'  => config('database.password', ''),
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher (required for things like model events)
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally
$capsule->setAsGlobal();

// Boot Eloquent ORM
$capsule->bootEloquent();
