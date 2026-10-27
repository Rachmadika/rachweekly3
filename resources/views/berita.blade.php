@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Halaman Berita</h1>
    @if ($berita->count())
        @foreach ($berita as $item)
            <article class="mb-5 border-bottom pb-4">
                <h2>
                    <a href="/berita/{{ $item->slug }}" class="text-decoration-none">{{ $item->judul }}</a>
                </h2>
                <h5>Oleh: {{ $item->penulis }}</h5>
                <p>{{ $item->excerpt }}</p>
                <a href="/berita/{{ $item->slug }}" class="text-decoration-none">Baca selengkapnya..</a>
            </article>
        @endforeach
    @else
        <p class="text-center fs-4">Tidak ada berita ditemukan.</p>
    @endif
@endsection
