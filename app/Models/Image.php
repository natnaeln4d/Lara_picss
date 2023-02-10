<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

   protected $fillable=['file','title','dimention','user_id','slug'];
   public function user()
   {
      return $this->belongsTo(User::class);
   }
    public static function makeDirectory()
    {

        $subFolder='images/';
        Storage::makeDirectory($subFolder);
        return $subFolder;
    }
    public static function getDimention($image)
    {
        [$width,$height]=getimagesize(Storage::path($image));
          return $width ."X". $height;

    }
    public function scopepublished($query)
    {
       return $query->where('is_published',true); // name implinces
    }
    public function fileUrl()
    {
        return Storage::url($this->file);
    }
    public function permlink()
    {
        return $this->slug ? route('image.show',$this->slug) : "#";
    }
    public function route($method,$key='')
    {
       return route("images.{$method}",$this->$key);
    }
  public function getSlug()
    {
        $slug=str($this->title)->slug();
        $numSlugFound=static::where('slug',"regexp","^".$slug."(-[0-9]?)")->count();
        if($numSlugFound > 0){
            return $slug ."-". $numSlugFound + 1;

        }
        return $slug;

    }
    protected static function booted()
    {
       static::creating(function($image){
           if($image->title){
               $image->slug=$image->getSlug();
               $image->is_published=true;

           }

       });
       static::updating(function($image){
        if($image->title && !$image->slug){
            $image->slug=$image->getSlug();
            $image->is_published=true;

        }

    });
    static::deleted(function($image){
       Storage::delete($image->file);

        });
    }
    public function uploadDate()
    {
       return $this->created_at->diffForHumans();
    }

}
