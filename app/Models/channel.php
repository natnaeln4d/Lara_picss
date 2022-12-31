<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    use HasFactory;
     public function user()
     {
        return $this->belongsTo(User::class);
     }
     public function video()
     {
       return $this->hasMany(video::class);
     }
}
