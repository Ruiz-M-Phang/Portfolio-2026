<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([ // Here I say I want to use the user model and from there the factory belongen to user and than create the following database data
            'name' => 'Test User', // COLUMN => VALUE
            'email' => 'test@example.com',
        ]);
    }
}
