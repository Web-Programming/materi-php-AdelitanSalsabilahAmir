<?php

use App\Http\Controllers\ProdiController;
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



