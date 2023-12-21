<?php

// Evaluator.php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Evaluator extends Model
{
    public function evaluatorPreferences()
    {
        return $this->hasOne(EvaluatorPreference::class);
    }
}
