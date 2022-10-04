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
    return view('dashboard');
});

Route::resource('education', 
'App\Http\Controllers\EducationController');

Route::resource('project', 
'App\Http\Controllers\ProjectController');

Route::resource('about', 
'App\Http\Controllers\About_usController');

Route::get('/project/hapus/{id}', 
[App\Http\Controllers\ProjectController::class, 'hapus']);
