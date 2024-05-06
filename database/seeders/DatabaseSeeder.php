<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Carline;
use App\Models\Item;
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
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'username'  => 'admin',
            'password'  => Hash::make('password'),
            'role_id'   => 1,
            'section_id'=> 1,
            'email_verified_at'=> now(),
            'status'    => 1
        ]);

        Item::factory(500)->create();
        Carline::factory(500)->create();

        $this->call([
            AllSectionSeeder::class,
            RoleSeeder::class,
            SectionSeeder::class
        ]);
    }
}
