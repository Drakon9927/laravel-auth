<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    public function run()
    {
        Type::create(['name' => 'Front-end', 'description' => 'Front-end development', 'icon' => 'icon-link']);
        Type::create(['name' => 'Back-end', 'description' => 'Back-end development', 'icon' => 'icon-link']);
        Type::create(['name' => 'Full stack', 'description' => 'Full stack development', 'icon' => 'icon-link']);
        Type::create(['name' => 'Design', 'description' => 'Design', 'icon' => 'icon-link']);
    }
}
