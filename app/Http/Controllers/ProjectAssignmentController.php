<?php

// ProjectAssignmentController.php

namespace App\Http\Controllers;

use App\Services\ProjectAssignmentService;

class ProjectAssignmentController extends Controller
{
    public function assignProjects()
    {
        $projectAssignmentService = new ProjectAssignmentService();
        $projectAssignmentService->assignProjects();

        return 'Projects assigned successfully.';
    }
}
