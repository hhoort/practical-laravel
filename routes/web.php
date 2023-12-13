<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/form',[formcontroller::class,'register']);
Route::post('/form',[formcontroller::class,'data']);
Route::get('/std/view',[formcontroller::class,'std_view']);


Route::get('/std/dlt/{id}',[formcontroller::class,'std_dlt']);

Route::get('/std/edit/{id}',[formcontroller::class,'std_edit']);

Route::post('/std/update/{id}',[formcontroller::class,'std_update']);