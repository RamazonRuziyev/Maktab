<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use App\Models\class_table;
use Illuminate\Http\Request;

class ClassTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //3.  class_table  кайси укувчи утирган ва кайси группадан
        $classTables = class_table::with('students', 'classRooms')->get();
        dd($classTables);
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
