<?php

use Bramus\Router\Router;
use App\Http\Controllers\HomeController;

/* 
 | --------------------------------------------------------------------------
 | Composer Autoload
 | --------------------------------------------------------------------------
 | The Composer autoloader is required to load all necessary dependencies.
 */

require_once __DIR__ . '/../vendor/autoload.php';

/* 
 | --------------------------------------------------------------------------
 | Load bootstrap file
 | --------------------------------------------------------------------------
 | The bootstrap file initializes the application, loads environment variables...
 */
require_once __DIR__ . '/../bootstrap/app.php';

/* 
 | --------------------------------------------------------------------------
 | Load database file
 | --------------------------------------------------------------------------
 | The database file initializes the database connection using Eloquent ORM.
 */
require_once __DIR__ . '/../bootstrap/database.php';

/* 
 | --------------------------------------------------------------------------
 | Controller Registration
 | --------------------------------------------------------------------------
 | Controllers are registered here. Each controller handles specific routes and logic.
 */
$homeController = new HomeController();

/* 
 | --------------------------------------------------------------------------
 | Router Initialization
 | --------------------------------------------------------------------------
 | The router is responsible for handling incoming requests and directing them to the appropriate controller.
 */
$router = new Router();

// Define routes
$router->get('/', function () use ($homeController): void {
    $homeController->index();
});

$router->run();
