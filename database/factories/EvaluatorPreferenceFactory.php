<?php

namespace Database\Factories;

use App\Models\EvaluatorPreference;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluatorPreferenceFactory extends Factory
{
    protected $model = EvaluatorPreference::class;

    public function definition()
    {
        // Define the attributes and their default values
        return [
            'evaluator_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'project_id' => function () {
                return \App\Models\Project::factory()->create()->id;
            },
            'category' => $this->faker->word,
            'specialty_area' => $this->faker->word,
        ];
    }
}
