<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nama_controllernya;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\StaffBranchcontroller;



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

Route::get('/welcome', function() {
    echo '<center><u>Hello semuanya,apa kabar?<br></u></center>';
    echo '<center><u>pada kali ini kita sedang belajar route basic</u></center>';
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($nama,$umur,$alamat,$jk,$hobby) {
    return view('pages1.biodata', compact('nama','umur','alamat','jk','hobby'));
});

Route::get('/pesanan/{minuman}', function ($minuman = 'kosong') {
    return view('pages1.pesanan', compact('minuman'));
});

Route::get('/bangunan/{material}/{material2}', function ($material = 'Mohon maaf material tidak ada',$material2 = 'Mohon maaf material tidak ada') {
    return view('pages1.bangunan', compact('material','material2'));
});

Route::get('/pengenalan', [App\Http\Controllers\nama_controllernya::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}', [nama_controllernya::class, 'intro']); 

Route::get('/siswa', [nama_controllernya::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class, 'menu']);

Route::get('kampus',[App\Http\Controllers\Latihancontroller::class,'kampus']);

Route::get('/tv',[App\Http\Controllers\Latihancontroller::class,'tv']);

Route::get('/belanja',[App\Http\Controllers\LatihanController::class, 'belanja']);

Route::get('/post', [Postcontroller::class, 'index']);

Route::get('/sb', [StaffBranchController::class, 'index']);