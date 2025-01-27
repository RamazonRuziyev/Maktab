<?php

namespace Database\Seeders;

use App\Models\class_group;
use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classGroup  =  class_group::first();
        student::create([
            'class_group_id' => $classGroup->id,
            'school_id' => 1,
            'name' => 'Ali Valiyev',
        ]);
        student::create([
            'class_group_id' => $classGroup->id,
            'school_id' => 1,
            'name' => 'shamsi',
        ]);
    }
}
