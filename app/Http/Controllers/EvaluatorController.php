<?php

// EvaluatorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluatorPreference;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\EvaluationScore; 

class EvaluatorController extends Controller
{
    public function showPreferences()
    {
        $evaluator = Auth::user();

        // Assuming you have a relationship method on the User model to retrieve preferences
        $preferences = $evaluator->evaluatorPreferences;

        // Update the route name to match the other
        return view('evaluator.preferences', compact('evaluator', 'preferences'))->with('route_name', 'evaluator.dashboard');
    }

    public function updatePreferences(Request $request)
    {
        $evaluator = Auth::user();

        $request->validate([
            'category' => 'required|string',
            'specialty_area' => 'required|string',
        ]);

        // Create or update preferences based on the evaluator's relationship
        $evaluator->evaluatorPreferences()->updateOrCreate(
            ['evaluator_id' => $evaluator->id],
            [
                'category' => $request->category,
                'specialty_area' => $request->specialty_area,
            ]
        );

        // Update the route name to match the other
        return redirect()->route('evaluator.dashboard')->with('success', 'Preferences updated successfully.');
    }

    public function showAssignedProjects()
    {
        $evaluator = Auth::user();
        $assignedProjects = $evaluator->assignedProjects;

        return view('evaluator.assigned_projects', compact('assignedProjects'));
    }

    public function scoreProject(Request $request, $projectId)
    {
        $evaluator = Auth::user();

        // Validate score (you may want to add more validation)
        $request->validate([
            'score' => 'required|integer|between:1,10',
        ]);

        // Associate the score with the project using the evaluation_scores table
        EvaluationScore::updateOrCreate(
            ['evaluator_id' => $evaluator->id, 'project_id' => $projectId],
            ['score' => $request->score]
        );

        return redirect()->route('evaluator.assigned_projects')->with('success', 'Score submitted successfully.');
    }


}
