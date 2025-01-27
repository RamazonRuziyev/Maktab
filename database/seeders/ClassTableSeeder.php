<?php

namespace Database\Seeders;

use App\Models\class_room;
use App\Models\class_table;
use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classRoom = class_room::first();
        $students = student::all();
        foreach($students as $student)
        class_table::create([
            'class_room_id' => $classRoom->id,
            'student_id' => $student->id,
        ]);
    }
}
