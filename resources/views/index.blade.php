<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->
    </head>
    <body class="antialiased">
        <header>
            <nav class="relative flex w-full flex-wrap items-center justify-between bg-blue-400 py-4 text-white shadow-lg hover:text-neutral-700 focus:text-neutral-700">
                <div class="w-full flex-wrap items-center justify-between px-3">
                <nav class="w-full rounded-md" aria-label="breadcrumb">
                <ol class="list-reset ml-2 flex ">
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/">Home</a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/mahasiswa">Mahasiswa</a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/kelas">Kelas </a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/about">About</a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/kontak">Kontak</a></li>
                </ol>
                </nav>
        </header>
        @yield('konten')
    </body>
</html>
