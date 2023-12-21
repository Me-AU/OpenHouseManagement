<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the 'role' column if it doesn't exist
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['evaluator', 'fyp_group', 'admin'])->default('fyp_group');
            }

            // Add the 'created_at' column if it doesn't exist
            if (!Schema::hasColumn('users', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove the 'role' column
            $table->dropColumn('role');

            // Remove the 'created_at' and 'updated_at' columns
            $table->dropTimestamps();
        });
    }
}
