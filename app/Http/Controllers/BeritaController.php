<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
  public function tampilBerita()
  {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::latest()->get()
    ]);

}
  public function getBerita($slug)
  {
    $berita = Berita::where('slug', $slug)->firstOrFail();

    return view('beritatunggal', [
        "title" => $berita->judul,
        "berita" => $berita
    ]);
  }
}