<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[homeController::class, 'index']);

Route::get('/about',function () {
    echo "Halaman About";
});

Route::get('/mahasiswa',function () {
    echo "Halaman Mahasiswa";
});

Route::get('/user/{id}',function ($id) {
    echo 'echo ID: ' . $id;
});
