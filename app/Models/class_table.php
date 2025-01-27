<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_table extends Model
{
    use HasFactory;
    protected $fillable = [ 'class_room_id','student_id'];
    public function classRooms()
    {
        return $this->belongsTo(class_room::class);
    }
    public function students()
    {
        return $this->belongsTo(student::class);
    }
}
