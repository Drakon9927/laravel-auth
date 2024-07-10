<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Project::create([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),  // Generate a sentence with 6 words
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),  // Generate a paragraph
                'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'end_date' => $faker->date($format = 'Y-m-d', $max = '2023'),
                'status' => $faker->randomElement(['active', 'completed', 'pending'])  // Randomly pick a status
            ]);
        }
    }
}
