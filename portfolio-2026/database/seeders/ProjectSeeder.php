<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // using this code for testing database
        // Project::factory()->count(2)->create(); // Dit vult de database met behulp van de faker() functie

        // Project::factory()->create([
        //     'name' => 'BEM Shoppingcard',
        //     'image_alt' => 'Front-page image van BEM Shoppingcard',
        // ]);
    }
}
