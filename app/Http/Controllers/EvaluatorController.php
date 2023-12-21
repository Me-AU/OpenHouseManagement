<?php

// EvaluatorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluatorPreference;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
}
