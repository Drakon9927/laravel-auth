<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'Titolo del progetto',
            'description' => 'Descrizione progetto',
            'start_date' => '2024-09-08',
            'end_date' => '2024-10-07',
            'status' => 'active'
        ]);
        
    }
}
