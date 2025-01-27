<?php

namespace Database\Seeders;

use App\Models\attendance;
use App\Models\lesson;
use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class attendancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = student::first();
        $lesson  = lesson::first();
        attendance::create([
            'lesson_id' => $lesson->id,
            'student_id' => $student->id,
        ]);
    }
}
