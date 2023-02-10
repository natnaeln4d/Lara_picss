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

Route::get('/',[ImageController::class,'index'])->name('image.index')->middleware('auth');
Route::get('images/{image:slug}',[ImageController::class,'show'])->name('image.show')->middleware('auth');
Route::get('images/',[ImageController::class,'create'])->name('image.create')->middleware('auth');
Route::post('images/',[ImageController::class,'store'])->name('image.store')->middleware('auth');
Route::get('images/{image}/edit',[ImageController::class,'edit'])->name('image.edit')->middleware('auth');
Route::put('images/{image}',[ImageController::class,'update'])->name('image.update')->middleware('auth');//update requiers @csrf Put method
Route::delete('images/{image}',[ImageController::class,'destory'])->name('image.destory')->middleware('auth');

Route::get('Setting/profile',[App\Http\Controllers\ProfileController::class,'edit'])->name('setting.profile.edit');
Route::put('Setting/profile',[App\Http\Controllers\ProfileController::class,'update'])->name('setting.profile.update');
Route::view('/test-blade','test');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
