<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about',function(){
    $data="hello world";
    return view('about',compact('data'));
});
Route::get('folder/index',[App\Http\Controllers\ChannelController::class,'index'])->name('folder.index');
Route::get('folder/upload_video',[App\Http\Controllers\VideoController::class,'upload'])->name('folder.uploadvideo');
Route::post('folder/upload_video',[App\Http\Controllers\VideoController::class,'store'])->name('folder.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
