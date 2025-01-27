<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Film; // Importamos el MODELO FILM
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
    */

    /* 
    El DataBaseSeeder sirve para ejecutar todos
    los seeders que se añaden en este. 
    */
    

    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(FilmSeeder::class); // Llama al FilmSeeder
    }
}
