<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classn extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function time()
    {
        return $this->belongsToMany(Time::class);
    }
    public function room()
    {
        return $this->belongsToMany(Room::class);
    }
    public function course()
    {
        return $this->hasOne(Course::class,'id','course_id');
    }
}
