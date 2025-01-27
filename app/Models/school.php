<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;
    protected $fillable = [ 'name'];
    public function classGroups()
    {
        return $this->hasMany(class_group::class);
    }
    public function classRooms()
    {
        return $this->hasMany(class_room::class);
    }
    
    public function students()
    {
        return $this->hasMany(student::class);
    }
}
