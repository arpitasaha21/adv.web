<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cvController;
use App\Http\Controllers\formController;

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

Route::get('/profile',[cvController::class,'profile']);
Route::get('/education',[cvController::class,'education']);
Route::get('/project',[cvController::class,'project']);
Route::get('/contact',[cvController::class,'contact']);
Route::get('/refrence',[cvController::class,'refrence']);
Route:: get('/add',[formController::class,'addReg']);

Route:: post('/add',[formController::class,'add'])->name('add.submit');


