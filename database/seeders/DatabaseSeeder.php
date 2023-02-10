<?php

namespace Database\Seeders;
use App\Models\Image;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Image::factory(7)->create();
        $images=Storage::allFiles('images');


        foreach($images as $image){


            if(strpos($image,".DS_Store")) continue;
        
            Image::factory()->create(
                [
                    'file'=>$image,
                    'dimention'=>Image::getDimention($image)
                ]);
        }
       
    }
}
