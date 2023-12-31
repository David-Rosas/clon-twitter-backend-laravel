<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

      User::factory()->create([
        'name' => 'Andre',
        'email' => 'andre@andre.com',
    ]);

      Tweet::factory(40)->create();
    }
}
