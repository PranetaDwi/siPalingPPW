<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CobaBikin;
use App\Http\Controllers\MencobaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\SendEmailController;



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

Route::get('/about', function () {
    return view('about', [
        "name" => "Neta",
        "email" => "pranetaw23@gmail.com"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar', [
        "judul" => "Tanah Para Bandit",
        "penulis" => "Tere Liye",
        "penerbit" => "Gramedia Pustaka",
        "tahun" => "2023",
        "stok" => "10"
    ]);
});

Route::get('/boom',[MencobaController::class, 'boomesport']);

Route::get('/coba',[CobaBikin::class, 'halow']);

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku/create', [BukuController::class, 'create'])->name('create');

Route::post('/buku', [BukuController::class, 'store'])->name('store');

Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('destroy');

Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('edit');

Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('update');

// pertemuan pertama sama pak udin 
Route::controller(LoginRegisterController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');   
});

Route::get('/send-mail', [SendEmailController::class,
'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');



