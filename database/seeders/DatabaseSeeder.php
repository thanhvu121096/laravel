<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            ["name" =>'iphone'],
            ["name" =>'iphone12'],
            ["name" =>'iphone13'],
            ["name" =>'iphone14'],
            ["name" =>'iphone15'],
            ["name" =>'iphone16'],
            ["name" =>'iphone17'],
        ]);
    }
}
