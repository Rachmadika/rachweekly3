<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "jeneng" => "Rachmadika",
        "nim" => "13242520055",
        "prodi" => "teknologi informasi",
        "gambar" => "rach.png"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita',
        'berita' => Berita::latest()->get()
    ]);
});

Route::get('/berita/{slug}', function ($slug) {
    return view('beritatunggal', [
        'title' => 'Detail Berita',
        'berita' => Berita::where('slug', $slug)->firstOrFail()
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});
