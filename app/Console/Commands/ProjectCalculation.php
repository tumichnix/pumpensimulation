<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;

class ProjectCalculation extends Command
{
    protected $signature = 'project:calculation {id : The project id}';
    protected $description = 'Get calculation for the given project id';

    public function handle()
    {
        $id = $this->argument('id');
        $project = Project::findOrFail($id);

        $this->line($project->calc);
    }
}
