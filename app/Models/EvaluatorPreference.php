<?php

// EvaluatorPreference.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluatorPreference extends Model
{
    public function evaluator()
    {
        return $this->belongsTo(Evaluator::class);
    }
}
