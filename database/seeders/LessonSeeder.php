<?php

namespace Database\Seeders;

use App\Models\class_group;
use App\Models\class_room;
use App\Models\lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classGroup = class_group::first();
        $classRoom = class_room::first();
        lesson::create([
             'name' => 'Matematika',
             'class_room_id' => $classRoom->id,
             'class_group_id' =>  $classGroup->id,

        ]);
        
    }
}
