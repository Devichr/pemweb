@extends('index')
@section('konten')
<div class="m-16">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<h1 class="text-xl font-black">Informasi Kontak</h1>
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>No HP:</strong> {{ $noHp }}</p>
    <p><strong>Alamat:</strong> {{ $alamat }}</p>
</div>
</div>
@endsection