<?php

namespace Database\Seeders;

use App\Models\AllSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AllSection::create([
            'name'      => 'Dashboard',
            'route'     => 'dashboard',
            'icon'      => 'ri-home-8-line'
        ]);
    }
}
