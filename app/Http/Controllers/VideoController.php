<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'file'=>['required','mimes:mp4,avi,m4a,webm'],
            'title' => ['required', 'string', 'max:255'],
            'discription' => ['required', 'string', 'max:1000']
           
        ]);
    }
    public function store(Request $request)
    {
        //  $request->validate([
        //     'file'=>'required|mimes:mp4,mka,oga,webm,avi'

        //  ]);
         $file=$request->file('file');
         $file->move('/upload_video',$file->extension());
         $file_name=$file->extension();
         $insert=new video();
         $insert->file=$file_name;
         $insert->title=$request->input('title');
         $insert->discription=$request->input('discription');
         $insert->thumbnail=$request->input('thumbnail');
         $insert->create(
            $request->all()

         );
         return redirect()->route('home')->with('message','New video uploaded successfully');
    }
    // public function store(Request $request)
    // {   


    // //    $video=$request->input('file');
    // //     $title=$request->input('file');
    // //     $id=User::FindOrFail('id');
    // // if ($request->has('file')) {
    // //     $video = $request->file('file');
    // //     $video_extenstion = strtolower($video->extension());
    // //     $allow_extentions = array('mp4');
    // //     if (!in_array($video_extenstion, $allow_extentions)) {
    // //        return Redirect()->back()->with('msg', 'Video format is not allowed only MP4 is allowed format');
    // //     }
    // //     $filename = $id.'_'.time().rand(11111,9999). '.';
    // //     $video_path = $filename.$video_extenstion;
    // //     return $video->storeAs('uploads/video/', $video_path);
    // // }

   

    //     $file = $request->file('file');
    //     $title=$request->input('title');
    //     $filename = $file->extension();
    //     // $subfolder=Storage::makeDirectory();
    //     // public_path('storage') => storage_path('app/public/uploads/video/')
    //     // $path = public_path().'/uploads/video/';

    //     $dispcription=$request->input('discription');
    //     $thumbnail=$request->input('thumbnail');

    //     $path = $file->storeAs('/uploads/video/', $filename);
    //     $url = Storage::url($path);
    //     $urlfile=$request->$url;

    //     DB::insert('insert into videos(file,title,discription) values(?,?,?)',[$urlfile,$title,$dispcription,$thumbnail]);
    //     return redirect()->route('home')->with('message','New video uploaded successfully');
    
    // }

        
        
        
    public function upload()
    {
        return view('folder.uploadvideo');
    }
}
