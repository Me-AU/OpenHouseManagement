<?php

namespace Database\Factories;

use App\Models\EvaluationScore;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationScoreFactory extends Factory
{
    protected $model = EvaluationScore::class;

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
            'score' => $this->faker->numberBetween(1, 10),
            // Add other attributes as needed
        ];
    }
}
