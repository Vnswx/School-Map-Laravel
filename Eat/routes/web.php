<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GedunglabControllers;

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

Route::get('/', function (){
    return view('FolderDatabase.login');
});



Route::get('/denah', [GedunglabControllers::class, 'denah'])->name('denah');
Route::get('/omagas', [GedunglabControllers::class, 'omagas'])->name('omagas');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/postlogin', [loginController::class, 'postlogin'])->name('postlogin');
Route::get('/gedung/{gedung}', [GedunglabControllers::class, 'index'])->name('gedunglab');
Route::get('/denah1/{gedung}', [GedunglabControllers::class, 'index2'])->name('denah1');
Route::get('/tambah/{gedung}', [GedunglabControllers::class, 'create'])->name('tambah');
Route::post('/simpan/{gedung}', [GedunglabControllers::class, 'store'])->name('simpan');
Route::get('/delete/{id}', [GedunglabControllers::class, 'destroy'])->name('delete');
