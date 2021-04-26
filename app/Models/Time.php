<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    public function classn()
    {
        return $this->belongsToMany(Classn::class,'classn_room_time');
    }
    public function room()
    {
        return $this->belongsToMany(Room::class,'classn_room_time');
    }
}
