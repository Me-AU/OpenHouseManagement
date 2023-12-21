<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluatorPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluator_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluator_id')->constrained('users');
            $table->foreignId('project_id')->constrained('projects');
            $table->string('category')->nullable();
            $table->string('specialty_area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluator_preferences');
    }
}
