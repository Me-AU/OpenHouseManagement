<?php

// ProjectAssignmentService.php

namespace App\Services;

use App\Models\Project;
use App\Models\Evaluator;
use App\Models\EvaluatorPreference;
use Illuminate\Support\Facades\DB;

class ProjectAssignmentService
{
    public function assignProjects()
    {
        $evaluators = Evaluator::all();
        $projects = Project::all();

        foreach ($evaluators as $evaluator) {
            // Get evaluator preferences
            $preferences = EvaluatorPreference::where('evaluator_id', $evaluator->id)->first();

            // Get projects that match preferences
            $matchingProjects = $this->getMatchingProjects($preferences, $projects);

            // Randomly assign 3-5 projects
            $assignedProjects = $this->randomlyAssignProjects($matchingProjects);

            // Save assigned projects to evaluator
            $evaluator->assignedProjects()->sync($assignedProjects);
        }
    }

    private function getMatchingProjects($preferences, $projects)
    {
        // Your logic to filter projects based on preferences (e.g., keywords)
        // Example: Filter projects with at least one common keyword
        return $projects->filter(function ($project) use ($preferences) {
            return count(array_intersect($preferences->keywords, explode(',', $project->keywords))) > 0;
        });
    }

    private function randomlyAssignProjects($projects)
    {
        // Randomly assign 3-5 projects
        $assignedProjects = $projects->shuffle()->take(rand(3, 5));

        return $assignedProjects->pluck('id')->toArray();
    }
}
