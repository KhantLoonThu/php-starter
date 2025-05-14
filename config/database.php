<?php

/* 
 | -------------------------------------------------------------------------- 
 | Database Configuration
 | -------------------------------------------------------------------------- 
 | Settings for the database connection, including host, port,
 | database name, username, and password.
 */
return [
    /* 
     | --------------------------------------------------------------------------
     | Database Connection Type
     | -------------------------------------------------------------------------- 
     | The database driver to use, such as 'mysql', 'pgsql', etc.
     */
    'connection' => env('DB_CONNECTION', 'mysql'), // Default is 'mysql'

    /* 
     | --------------------------------------------------------------------------
     | Database Host
     | -------------------------------------------------------------------------- 
     | The hostname or IP address of the database server.
     */
    'host'       => env('DB_HOST', '127.0.0.1'), // Default is '127.0.0.1'

    /* 
     | --------------------------------------------------------------------------
     | Database Port
     | -------------------------------------------------------------------------- 
     | The port to connect to the database server (default is 3306 for MySQL).
     */
    'port'       => env('DB_PORT', 3306), // Default is 3306 for MySQL

    /* 
     | --------------------------------------------------------------------------
     | Database Name
     | -------------------------------------------------------------------------- 
     | The name of the database to connect to.
     */
    'database'   => env('DB_DATABASE', 'my_php_app'), // Default is 'my_php_app'

    /* 
     | --------------------------------------------------------------------------
     | Database Username
     | -------------------------------------------------------------------------- 
     | The username used for authenticating with the database.
     */
    'username'   => env('DB_USERNAME', 'root'), // Default is 'root'

    /* 
     | --------------------------------------------------------------------------
     | Database Password
     | -------------------------------------------------------------------------- 
     | The password for the database user.
     */
    'password'   => env('DB_PASSWORD', ''), // Default is an empty string (no password)
];
