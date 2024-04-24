@extends('index')
@section('konten')
<div class="m-16">
<h1 class="text-xl font-black">Mahasiswa Kelas N2023</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="border-collapse border-slate-500 table-autow-full text-sm text-left rtl:text-right text-gray-500 w-full">
        <thead class="text-xs text-gray-700 uppercase">    
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50">Nama</th>
                <th scope="col" class="px-6 py-3">NIM</th>
            </tr>
        </thead>
    <tbody>
        <tr class="border-b border-gray-200">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">Deviano Christian Widy Ananda</td>
            <td class="px-6 py-4">23110572</td>
        </tr>
        <tr class="border-b border-gray-200">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">FIDELLIA SRINURAENI</td>
            <td class="px-6 py-4">23110569</td>
        </tr>
        <tr class="border-b border-gray-200">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">RIZAL RAFSANZANI RAHAYU</td>
            <td class="px-6 py-4">23110558</td>
        </tr>
        <tr class="border-b border-gray-200">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">RAKA ADITYA ZACHRIA</td>
            <td class="px-6 py-4">23110555</td>
        </tr>
        <tr class="border-b border-gray-200">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">ANDIKA MUHAMAD NAUFAL</td>
            <td class="px-6 py-4">23110423</td>
        </tr>
    </tbody>
</table>
</div>
</div>
@endsection
