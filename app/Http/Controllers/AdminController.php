<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    public function showDashboard()
    {
        // Retrieve all FYP projects
        $projects = Project::all();

        return view('admin.dashboard', compact('projects'));
    }

    public function setProjectLocations(Request $request)
    {
        // Validate and update project locations based on the form submission
        $request->validate([
            'locations' => 'required|array',
            'locations.*' => 'nullable|string',
        ]);

        foreach ($request->locations as $projectId => $location) {
            Project::where('id', $projectId)->update(['location' => $location]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Project locations updated successfully.');
    }
}
