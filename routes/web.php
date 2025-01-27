<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\ClassTableController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/school',SchoolController::class);
Route::resource('/student',StudentController::class);
Route::resource('/lesson',LessonController::class);
Route::resource('/classroom',ClassRoomController::class);
Route::resource('/attendance',AttendanceController::class);
Route::resource('/classtable',ClassTableController::class);
