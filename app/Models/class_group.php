<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_group extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' ,'school_id',];
    public function schools()
    {
        return $this->belongsTo(school::class);
    }
    public function students()
    {
        return $this->hasMany(student::class);
    }
    
}
