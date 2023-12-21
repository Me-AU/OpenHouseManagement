<?php

// FYPGroupController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\EvaluatorPreference;

class FYPGroupController extends Controller
{
    public function showDashboard()
    {
        $projects = Project::all(); 

        // Retrieve evaluator preferences for displaying on the dashboard
        $evaluatorPreferences = EvaluatorPreference::all();

        return view('fypgroup.dashboard', compact('projects', 'evaluatorPreferences'));
    }

    public function editProject($id)
    {
        $project = Project::findOrFail($id);

        return view('fypgroup.edit_project', compact('project'));
    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        // Validate and update project details based on the form submission
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            // Add more validation rules as needed
        ]);

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            // Update other project attributes
        ]);

        return redirect()->route('fypgroup.dashboard')->with('success', 'Project details updated successfully.');
    }
}