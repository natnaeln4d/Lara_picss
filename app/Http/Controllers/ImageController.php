<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;


class ImageController extends Controller
{
    public function index()
    {
       $images=Image::published()->latest()->paginate(15);
       return view('image.index',compact('images'));
    }
    public function show(Image $image)
    {
  return view('image.show',compact('image'));
    }
    public function create()
    {
      return view('image.create');
    }
    public function store(ImageRequest $request)
    {
      Image::create($request->getdata());
       return to_route('image.index')->with('message',"The image has been Uploaded sucessfully");
    }
    public function edit(Image $image)
    {
      return view('image.edit',compact('image'));
    }
    public function update(Image $image,ImageRequest $request)
    {
     $image->update($request->getdata());
       return to_route('image.index')->with('message',"The image has been Updated sucessfully");
    }
    public function destory(Image $image )
    {
      $image->delete();
       return to_route('image.index')->with('message',"The image has been Deleted sucessfully");
    }
}
