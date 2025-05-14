<?php

namespace Core;

use Core\ExceptionHandler;

class View
{
    /**
     * Render a view file.
     *
     * @param  string  $view
     * @param  array   $data
     * @return void
     */
    public static function render(string $view, array $data = [])
    {
        // Extract data array to variables
        extract($data);

        // Define the path to the view directory
        $viewPath = __DIR__ . config('view.view_dir') . str_replace('.', '/', $view) . config('view.view_ext');

        // Check if the view file exists
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            // Handle the missing view using the exception handler
            self::handleMissingView($view);
        }
    }

    /**
     * Handle missing view file.
     *
     * @param string $view
     * @return void
     */
    private static function handleMissingView(string $view)
    {
        // Log the error and render a generic error page or message
        $exceptionMessage = "View not found: {$view}";

        // Log the error 
        ExceptionHandler::error(new \Exception($exceptionMessage));

        // Render a user-friendly error page
        echo "Oops! Something went wrong. The requested view could not be found.";
    }
}
