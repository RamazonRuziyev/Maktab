<?php

namespace Database\Seeders;

use App\Models\class_room;
use App\Models\school;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school = school::first();
        class_room::create([
            'school_id' => $school->id,
            'name' => '11-sinf',
        ]) ;
        class_room::create([
            'school_id' => $school->id,
            'name' => '10-sinf',
        ]) ;
    }
}
