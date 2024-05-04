<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Auteur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Auteur::create(['first_name' => 'John','last_name' => 'DOE']);
        Auteur::create(['first_name' => 'Chocolat','last_name' => 'DOUX']);
        Auteur::create(['first_name' => 'Tendre','last_name' => 'BOIS']);
        Auteur::create(['first_name' => 'Laravel','last_name' => 'APP']);
    }
}
