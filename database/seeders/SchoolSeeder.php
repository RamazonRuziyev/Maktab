<?php

namespace Database\Seeders;

use App\Models\school;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        school::create([
            'name' => 'Maktab'
        ]);
        school::create([
            'name' => 'Maktab1'
        ]);
        school::create([
            'name' => 'Maktab2'
        ]);
    }
}
