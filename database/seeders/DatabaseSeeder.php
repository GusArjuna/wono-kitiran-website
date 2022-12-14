<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'password' => '$2y$10$XYDd1UOkEOKJIFlMgLC/c.kiGYRVJcHtM6oku43I.KBNgP1idLff6',
            'passwordnormal' => '123',
        ]);
    }
}
