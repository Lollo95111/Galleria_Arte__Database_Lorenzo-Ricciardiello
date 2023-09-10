<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Lorenzo',
            'email' => 'lollo@lollo.com',
            'password' => Hash::make('lollo'),
            'is_admin' => false
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Andrea',
            'email' => 'andrea@andrea.com',
            'password' => Hash::make('lollo'),
            'is_admin' => true
        ]);



    }
}
