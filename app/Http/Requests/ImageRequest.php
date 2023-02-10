<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Image;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->method()=='PUT'){

            return[
                'title'=>'required'
            ];
        }
        return [
            'file'=>'required| image',
            'title'=>'nullable'
           
        ];
    }
       public function getdata()
    {
       $data=$this->validated() + [
           'user_id'=>1
       ];
       if($this->hasFile('file')){
           $directory=Image::makeDirectory(); //create the directory
           $data['file']=$this->file->store($directory); //put's file on data variable
           $data['dimention']=Image::getDimention($data['file']);

       }
    //    if($title=$data['title']){
    //        $data['slug']=$this->getSlug($title);
    //    }
       return $data;   // return the directory
       
    }
    
}
