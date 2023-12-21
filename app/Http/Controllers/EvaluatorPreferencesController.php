<?php

// EvaluatorPreferencesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluatorPreference;

class EvaluatorPreferencesController extends Controller
{
    public function showForm()
    {
        // Retrieve the currently authenticated user (evaluator)
        $evaluator = auth()->user();

        // Retrieve existing preferences (if any)
        $preferences = EvaluatorPreference::where('evaluator_id', $evaluator->id)->first();

        return view('evaluator.preferences', compact('preferences'));
    }

    public function updatePreferences(Request $request)
    {
        // Retrieve the currently authenticated user (evaluator)
        $evaluator = auth()->user();

        // Validate and update preferences based on the form submission
        $request->validate([
            'category' => 'nullable|string',
            'specialty_area' => 'nullable|string',
            // Add more validation rules as needed
        ]);

        EvaluatorPreference::updateOrCreate(
            ['evaluator_id' => $evaluator->id],
            $request->only(['category', 'specialty_area'])
        );

        return redirect()->route('evaluator.dashboard')->with('success', 'Preferences updated successfully.');
    }
}
