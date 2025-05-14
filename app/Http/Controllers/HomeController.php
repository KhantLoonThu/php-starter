<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Core\Controller;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $data = Home::all();

        // load the view file
        $this->view('home.index', [
            'title' => 'Home Page',
        ]);
    }
}
