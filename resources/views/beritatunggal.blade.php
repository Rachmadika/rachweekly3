@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h2>{{ $berita["judul"] }}</h2>
        <h5>Penulis : {{ $berita["penulis"]}}</h5>
    </div>
    <div class="text-justify">
       <p>{{$berita["konten"]}}</p>
    </div>

    <a href="/berita">kembali</a>
@endsection