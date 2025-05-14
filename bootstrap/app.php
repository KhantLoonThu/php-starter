<?php

use Core\ExceptionHandler;
use Dotenv\Dotenv;


/* 
 | --------------------------------------------------------------------------
 | Load Custom Helpers
 | --------------------------------------------------------------------------
 | Load the helpers.php file to register custom helper functions.
 */

require_once __DIR__ . '/../app/Support/helpers.php';

/* 
 | --------------------------------------------------------------------------
 | Load Environment Variables (.env)
 | --------------------------------------------------------------------------
 | Loads the .env file to get environment-specific configurations.
 */
$dotenv = Dotenv::createImmutable(__DIR__ . '/../env');
$dotenv->safeLoad();

/* 
 | --------------------------------------------------------------------------
 | Register the exception handler
 | --------------------------------------------------------------------------
 | Sets a custom exception handler to mange errors and exceptions.
 */
set_exception_handler([ExceptionHandler::class, 'handle']);

/* 
 | --------------------------------------------------------------------------
 | Set Default Timezone
 | --------------------------------------------------------------------------
 | Sets the default timezone for the application.
 */
date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));

/* 
 | --------------------------------------------------------------------------
 | Load Configuration Files
 | --------------------------------------------------------------------------
 | Loads the configuration files into an array.
 */
$config = [
    'app'      => require __DIR__ . '/../config/app.php',
    'database' => require __DIR__ . '/../config/database.php',
    'mail'     => require __DIR__ . '/../config/mail.php',
    'view'     => require __DIR__ . '/../config/view.php',
    'log'      => require __DIR__ . '/../config/log.php',
];

/* 
 | --------------------------------------------------------------------------
 | Share Config Globally
 | --------------------------------------------------------------------------
 | The configuration is made globally accessible for the rest of the app.
 */
$GLOBALS['config'] = $config;

/* 
 | --------------------------------------------------------------------------
 | Return Bootstrapped Application Data
 | --------------------------------------------------------------------------
 | This array holds key information about the environment and app config.
 */
return [
    'env'    => env('APP_ENV', 'production'),
    'debug'  => env('APP_DEBUG', 'false') === 'true', // Ensure the default is a string
    'config' => $config,
];
