<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function classn()
    {
        return $this->belongsToMany(Classn::class,'classn_room_time')->withPivot('id','time_id');
    }
    public function time()
    {
        return $this->belongsToMany(Time::class,'classn_room_time')->withPivot('id','classn_id');
    }
    
}
