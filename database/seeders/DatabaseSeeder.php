<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\ProjectsTableSeeder;
use Database\Seeders\EvaluatorPreferencesTableSeeder;
use Database\Seeders\EvaluationScoresTableSeeder;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ProjectsTableSeeder::class);
        $this->call(EvaluatorPreferencesTableSeeder::class);
        $this->call(EvaluationScoresTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
