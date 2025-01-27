<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SchoolSeeder::class,
            ClassRoomSeeder::class,
            ClassGroupSeeder::class,
            StudentSeeder::class,
            LessonSeeder::class,
            ClassTableSeeder::class,
            attendancesSeeder::class
        ]);
    }
}
