<?php
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Contactcontroller;
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

Route::get('/',[Homecontroller::class,'Homeindex']);

Route::post('/save',[Contactcontroller::class,'save']);

Route::get('/edit/{id}',[Contactcontroller::class,'edit'])->name('edit');

Route::put('/update/{id}',[Contactcontroller::class,'update'])->name('update');

Route::get('/delete/{id}',[Contactcontroller::class,'delete'])->name('delete');

Route::get('/about',[Aboutcontroller::class,'Aboutindex']);

Route::get('/Contact', [Contactcontroller::class,'Contactindex']);
