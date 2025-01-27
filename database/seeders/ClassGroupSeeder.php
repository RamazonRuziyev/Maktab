<?php

namespace Database\Seeders;

use App\Models\class_group;
use App\Models\class_room;
use App\Models\school;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school = school::first();
        class_group::create([
            'school_id' => $school->id,
            'name' => '11A',
        ]);
        class_group::create([
            'school_id' => $school->id,
            'name' => '11B',
        ]);
    }
}
