<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Category::factory()->create([
            'name' => 'Testsssss User',
            'description' => 'tesasst@example.com',
            'slig' => 'test@examplessss.com',
            'thumbnail' => 'test@exsssample.com',
            'status' => 1,

        ]);
        User::factory()->create([
            'name' => 'Test Udđser',
            'email' => 'test@exdđample.com',
        ]);
    }
}
