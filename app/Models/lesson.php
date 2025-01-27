<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','class_room_id','class_group_id' ];
    public function classRooms()
    {
        return $this->belongsTo(class_room::class);
    }
    public function classGroups()
    {
        return $this->belongsTo(class_group::class);
    }
    public function attendances()
    {
        return $this->hasMany(attendance::class);
    }
}
