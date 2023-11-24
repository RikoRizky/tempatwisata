<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/",[AppController::class,"home"]);
Route::get("template",function(){return view('template'); });
Route::get("wisata",[AppController::class,"wisata"]);

Route::get('tambah',[AppController::class,'tambah']);
Route::post("tambah",[AppController::class,"proses_tambah"]);

Route::get("wisata/{id}/edit",[AppController::class,"edit"]);
Route::post("edit",[AppController::class,"proses_edit"]);

Route::get("wisata/{id}/hapus",[AppController::class,"hapus"]);