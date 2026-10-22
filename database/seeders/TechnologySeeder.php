<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'HTML',
            'CSS',
            'JAVASCRIPT',
            'PHP',
            'LARAVEL',
            'REACT',
            'NODE.JS',
            'BOOTSTRAP',
        ];
        
        foreach ($technologies as $technologyName) {
            $technology = new Technology();

            $technology->name = $technologyName;

            $technology->save();
        }
    }
}
