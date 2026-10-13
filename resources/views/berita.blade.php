@extends('layouts.main')

@section('content')
    <div class="mt-5">
        @foreach ($beritas as $berita)
            <h2><a href="berita/{{ $berita["slug"] }}">{{ $berita["judul"] }}</a></h2>
            <h5>{{ $berita["penulis"] }}</h5>
            <p>{{ $berita["konten"] }}</p>
        @endforeach
    </div>
    
@endsection