<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Journal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="bg-white p-4">
    {{-- Navigation Bar --}}
    <nav class="bg-white/80 border-gray-200 backdrop-blur-md shadow-lg rounded-lg sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <img src="./assets/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-800">Michael Blog</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Log
                    Out</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div id="external" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white/70 backdrop-blur-sm md:space-x-8 md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="{{ route('index') }}"
                            class="block py-2 px-3 text-gray-900 bg-gray-200 rounded hover:bg-gray-300 md:bg-transparent md:hover:text-gray-700 md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('landing-pages') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-300 md:hover:bg-transparent md:hover:text-gray-700 md:p-0">Article</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-300 md:hover:bg-transparent md:hover:text-gray-700 md:p-0">Gallery</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-300 md:hover:bg-transparent md:hover:text-gray-700 md:p-0">Portofolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Jumbotron --}}
    <section
        class="py-8 px-4 mt-6 mx-auto max-w-screen-xl text-center lg:py-16 shadow-lg rounded-xl bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 backdrop-blur-lg">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-800 md:text-5xl lg:text-6xl">
            - My Personal Gallery Portofolio -
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto non tempora consequatur dolores repudiandae
            incidunt consequuntur.
        </p>
        <button
            class="inline-flex items-center px-6 py-3 text-white font-medium text-sm rounded-lg bg-gradient-to-r from-blue-400 to-purple-500 shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-200">
            <i class="fa-solid fa-arrow-down mr-2"></i>
            Let's See !!
        </button>

    </section>

    {{-- Gallery Section --}}
    <section class="flex flex-col justify-center items-center mt-6">
        <div class="grid max-w-7xl grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($galleries as $gallery)
                <div class="grid gap-4">
                    <div class="relative max-w-sm group overflow-hidden rounded-lg">
                        <img class="w-full h-full transition-transform duration-300 group-hover:scale-105"
                            src="{{ $gallery->image }}" alt="{{ $gallery->title }}" />
                        <div
                            class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div class="text-white text-center p-4">
                                <h3 class="text-xl font-bold mb-2">{{ $gallery->title }}</h3>
                                <p class="text-sm">{{ $gallery->captions }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4 max-w-full">
            {{ $galleries->links() }}
        </div>
    </section>    
</body>

</html>
