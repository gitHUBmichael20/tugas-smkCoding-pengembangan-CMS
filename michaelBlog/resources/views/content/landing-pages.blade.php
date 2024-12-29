<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Content</title>
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

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


    <section class="bg-gradient-to-br from-gray-100 via-white to-gray-200">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div class="backdrop-blur-md bg-white/60 border border-gray-300 rounded-lg p-8 md:p-12 mb-8 shadow-lg">
                <a href="#"
                    class="bg-blue-50 text-blue-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 14">
                        <path
                            d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                    </svg>
                    Tutorial
                </a>
                <h1 class="text-gray-800 text-3xl md:text-5xl font-extrabold mb-2">How to quickly deploy a static
                    website</h1>
                <p class="text-lg font-normal text-gray-600 mb-6">Static websites are now used to bootstrap lots of
                    websites and are
                    becoming the basis for a variety of tools that even influence both web designers and developers.</p>
                <a href="#"
                    class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Menampilkan artikel website --}}

    {{-- Selector jenis artikel --}}
    <section class="flex flex-col pt-4 bg-white justify-center items-center">
        <h2 class="text-3xl font-bold text-gray-900">Search Now</h2>
        <div class="bg-white p-6 space-y-6 max-w-7xl">
            <!-- Search bar and sort dropdown -->
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center space-x-4 flex-grow">
                    <input type="text" placeholder="Search..."
                        class="bg-white border border-gray-300 text-gray-700 rounded-lg px-4 py-2 w-full focus:ring-blue-500 focus:border-blue-500"
                        aria-label="Search">
                </div>
                <div class="flex items-center space-x-4">
                    <label for="sort" class="text-gray-700 font-medium">Sort by:</label>
                    <select id="sort"
                        class="bg-white border border-gray-300 text-gray-700 rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="newest">Newest</option>
                        <option value="popular">Most Popular</option>
                        <option value="trending">Trending</option>
                        <option value="alphabetical">Alphabetical</option>
                    </select>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-12">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($articles as $article)
                    <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-auto">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                    src="{{ $article->image }}" alt="Article Image">
                                <div
                                    class="absolute top-4 right-4 text-white px-3 py-1 rounded-full text-sm
                                    @switch($article->article_type)
                                        @case('CSS') bg-green-500 @break
                                        @case('Javascript') bg-yellow-500 @break
                                        @case('HTML') bg-red-500 @break
                                        @case('PHP') bg-purple-500 @break
                                        @case('Github') bg-gray-700 @break
                                        @case('Python') bg-blue-600 @break
                                        @case('Math') bg-teal-500 @break
                                        @default bg-gray-400
                                    @endswitch">
                                    {{ $article->article_type }}
                                </div>
                            </div>
                            <div class="p-6">
                                <h2
                                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                    {{ $article->title }}
                                </h2>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <img class="w-8 h-8 rounded-full mr-3" src="https://via.placeholder.com/50"
                                        alt="Author">
                                    <div>
                                        <p class="font-medium text-gray-700">{{ $article->author }}</p>
                                        <p>{{ $article->created_date }}</p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition-colors">
                                    Read More →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <!-- Tambahkan Pagination -->
            <div class="mt-8">
                {{ $articles->links('pagination::tailwind') }}
            </div>
        </div>
    </section>
    

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.querySelector("[data-collapse-toggle]");
            const navMenu = document.getElementById("external");

            toggleButton.addEventListener("click", () => {
                navMenu.classList.toggle("hidden");
            });
        });
    </script>
</body>

</html>
