@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama : {{ $jeneng ?? 'Nama' }}</p>
    <p>NIM : {{ $nim ?? '-' }}</p>
    <p>Prodi : {{ $prodi ?? '-' }}</p>
    <img src="/images/{{ $gambar ?? 'default.png' }}" width="200" alt="Foto {{ $jeneng ?? 'Profil' }}">
@endsection