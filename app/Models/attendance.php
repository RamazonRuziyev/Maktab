<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;
    protected $fillable = [ 'lesson_id' ,'student_id','attended'];
    public function lessons()
    {
        return $this->belongsTo(lesson::class);
    }
    public function students()
    {
        return $this->belongsTo(student::class);
    }
}
