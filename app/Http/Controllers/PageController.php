<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function hello($your_name)
    {
        $name = str_replace('-', ' ', $your_name);

        return response($name);
    }

    public function about()
    {
        return response('<h1>About</h1>', 200)
            ->header('Content-Type', 'text/html');
    }
}
