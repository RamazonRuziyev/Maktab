<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_room extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','school_id'];
    public function schools()
    {
        return $this->belongsTo(school::class);
    }
    public function lessons()
    {
        return $this->hasMany(lesson::class);
    }
    public function classTables()
    {
        return $this->hasMany(class_table::class);
    }
    public function classGroups()
    {
        return $this->hasMany(class_group::class);
    }

}
