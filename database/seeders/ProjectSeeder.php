<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Laravel Portfolio',
                'description' => 'Portfolio personale sviluppato con Laravel e Bootstrap.',
                'image' => null,
                'project_url' => null,
            ],
            [
                'title' => 'Boolflix',
                'description' => 'Applicazione web per la ricerca e visualizzazione di film e serie TV.',
                'image' => null,
                'project_url' => null,
            ],
            [
                'title' => 'E-commerce',
                'description' => 'Progetto e-commerce completo con frontend e backend.',
                'image' => null,
                'project_url' => null,
            ],
        ];

        foreach ($projects as $projectData) {
            $project = new Project();

            $project->title = $projectData['title'];
            $project->description = $projectData['description'];
            $project->image = $projectData['image'];
            $project->project_url = $projectData['project_url'];

            $project->save();
        }
    }
}