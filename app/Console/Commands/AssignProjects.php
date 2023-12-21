<?php

// app/Console/Commands/AssignProjects.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProjectAssignmentService;

class AssignProjects extends Command
{
    protected $signature = 'assign:projects';
    protected $description = 'Assign projects to evaluators';

    public function handle()
    {
        $projectAssignmentService = new ProjectAssignmentService();
        $projectAssignmentService->assignProjects();

        $this->info('Projects assigned successfully.');
    }
}
