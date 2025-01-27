<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','school_id','class_group_id','attended'];
    public function classGroups()
    {
        return $this->belongsTo(class_group::class);
    }    
    public function schools()
    {
        return $this->belongsTo(school::class);
    }
    public function attendances()
    {
        return $this->hasMany(attendance::class);
    }
    public function classTables()
    {
        return $this->hasMany(class_table::class);
    }
}
