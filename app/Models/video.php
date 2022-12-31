<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable=['file','title','description','user_id'];
    
      public function channel()
      {
       return $this->belongsTo(video::class);
      }
      public function comment()
      {
      return $this->hasMany(Comment::class);
      }
}
