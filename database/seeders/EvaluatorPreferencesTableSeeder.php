<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluatorPreference;

class EvaluatorPreferencesTableSeeder extends Seeder
{
    public function run()
    {
        EvaluatorPreference::factory()->count(20)->create();
    }
}
