<?php

// app/Http/Controllers/AjaxController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax-example');
    }

    public function getData(Request $request)
    {
        // Process data or fetch data from the database
        $data = ['message' => 'Data from the server'];

        // Return JSON response
        return response()->json($data);
    }
}
