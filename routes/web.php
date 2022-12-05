<?php

use App\Http\Controllers\ImageController;
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

Route::get('/',[ImageController::class,'index'])->name('image.index');
Route::get('images/{image:slug}',[ImageController::class,'show'])->name('image.show');
Route::get('images/',[ImageController::class,'create'])->name('image.create');
Route::post('images/',[ImageController::class,'store'])->name('image.store');
Route::get('images/{image}/edit',[ImageController::class,'edit'])->name('image.edit');
Route::put('images/{image}',[ImageController::class,'update'])->name('image.update');//update requiers @csrf Put method
Route::delete('images/{image}',[ImageController::class,'destory'])->name('image.destory');
Route::view('/test-blade','test');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
