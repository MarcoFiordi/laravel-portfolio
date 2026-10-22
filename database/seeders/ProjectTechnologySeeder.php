<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::where('title', 'Laravel Portfolio')->first();

        $technologies = Technology::whereIn('name', [
            'PHP',
            'LARAVEL',
            'MySQL',
        ])->pluck('id');

        if ($project) {
            $project->technologies()->sync($technologies);
        }
    }
}
