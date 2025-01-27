<?php

namespace App\Http\Controllers;

use App\Models\class_room;
use App\Models\school;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1.  School дан учувчилар сони курсатиш
        $schools = school::withCount('students')->get();
        foreach ($schools as $school) {
            // Har bir maktabdagi o'quvchilar sonini hisoblash
            $studentsCount = $school->students()->count();
          dd($studentsCount);
        }


        //4.  School  парталар сони ва канчасида бугун фойдаланган(укувчи буйича такрорланмасин ) ва фойдаланмаган
        $classRooms  = class_room::with('classTables')->get();
        foreach ($classRooms as $classRoom) {
            $totalTables = $classRoom->classTables->count();
            $usedTables = $classRoom->classTables->whereNotNull('student_id')->count();
            $unusedTables = $totalTables - $usedTables;
            echo "  Jami partalar  : $totalTables, Ishlatilgan parta: $usedTables,Ishlatilmagan parta: $unusedTables<br>";
        }
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
