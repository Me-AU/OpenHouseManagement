<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(15)->create([
            'role' => 'evaluator',
        ]);

        User::factory()->count(10)->create([
            'role' => 'fyp_group',
        ]);

        User::factory()->count(5)->create([
            'role' => 'admin',
        ]);
    }
}
