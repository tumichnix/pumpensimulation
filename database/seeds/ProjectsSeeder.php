<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Project::class, 5)->create()->each(function ($project) {
        });
    }
}
