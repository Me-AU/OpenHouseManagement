<?php

// app/Http/Controllers/WelcomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $appName = 'Open House Platform';

        return view('welcome', compact('appName'));
    }
}
