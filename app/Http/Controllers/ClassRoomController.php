<?php

namespace App\Http\Controllers;

use App\Models\class_room;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // 2 class_room дарс ларни олиш ва кайси группа кайси дарсда келган
        $classRooms = class_room::with('lessons')->get();  
        foreach ($classRooms as $classRoom) {
            echo "ClassRoom: " . $classRoom->name . "<br>";
            foreach ($classRoom->lessons as $lesson) {
                echo "Lesson: " . $lesson->name . "<br>";
            }
        // dd($classRooms);
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
