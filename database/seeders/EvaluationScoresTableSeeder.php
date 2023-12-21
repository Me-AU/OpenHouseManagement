<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluationScore;

class EvaluationScoresTableSeeder extends Seeder
{
    public function run()
    {
        EvaluationScore::factory()->count(30)->create();
    }
}
