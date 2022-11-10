<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\SendEmailController;




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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes([
    'reset' => true,
   ]);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/send-email',function(){
    $data = [
    'name' => 'Nama Anda',
    'body' => 'Testing Kirim Email'
    ];
   
    Mail::to('claudianna06@gmail.com')->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
   });

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
Route::resource('gallery', 'App\Http\Controllers\GalleryController');