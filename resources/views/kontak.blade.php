@extends('index')
@section('konten')
<h1 class="text-xl font-black">Informasi Kontak</h1>
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>No HP:</strong> {{ $noHp }}</p>
    <p><strong>Alamat:</strong> {{ $alamat }}</p>
@endsection