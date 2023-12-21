<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showDashboard()
    {
        // Logic to retrieve information for the student dashboard
        // For example, the number of evaluators who have assessed their project
        // You can fetch this information from your database

        return view('student.dashboard');
    }
}
