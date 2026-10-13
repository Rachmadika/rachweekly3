<?php

use App\Models\Berita;
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
/// ans.com/ localhost:8000/
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "jeneng" => "Basirudin Ansor",
        "nim" => "A112233",
        "prodi" => "Teknologi Informasi",
        "gambar" => "ans.jpeg",
    ]);
});


Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambilberita(),
    ]);
});


Route::get('/berita/{slug}', function ($slug) {
    return view('beritatunggal', [
        "title" => Berita::getTitle($slug),
        "berita" => Berita::getBerita($slug),
    ]);
});
