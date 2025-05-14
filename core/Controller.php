<?php

namespace Core;

use Core\View;

class Controller
{
    /**
     * Load a view file using the View renderer.
     *
     * @param  string  $view
     * @param  array   $data
     * @return void
     */
    public function view(string $view, array $data = [])
    {
        View::render($view, $data); // Use View class to render the view
    }

    /**
     * Redirect to a specific route.
     *
     * @param  string  $route
     * @return void
     */
    public function redirect(string $route)
    {
        header("Location: /{$route}");
        exit;
    }
}
