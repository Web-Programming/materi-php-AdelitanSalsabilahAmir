<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('beranda', function () {
    return view('beranda',
    [
        'name' => 'adelitan',
        'email' => 'adelitanbintiamir@gmail.com',
        'alamat' => 'bukit'
    ]
);
});
Route::get('/berita/{id}/{judul}',function ($id, $judul){
    return view('berita',['id' => $id, 'judul' => $judul]);
});    


//membuat route ke halaman prodi index melalui controller ProdiController
Route::get('/prodi/index', action: [ProdiController::class,'index']);

Route::resource('materi', MateriController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class); // ganti dari 'mahasiswa' ke 'mhs'
Route::resource('dosen', DosenController::class);



