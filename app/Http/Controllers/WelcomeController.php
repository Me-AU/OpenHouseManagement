<?php

// app/Http/Controllers/WelcomeController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    public function index()
    {
        $appName = 'Open House Platform';

        return view('welcome', compact('appName'));
    }

    public function dashboard()
    {
        Log::info(auth()->user()->role); // Log the user's role

        return view('dashboard');
    }
}
