<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michael Blog</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script>
        function toggleMenu() {
            const mobileMenu = document.getElementById("mobile-menu");
            mobileMenu.classList.toggle("hidden");
        }

        function toggleDropdown() {
            const dropdown = document.getElementById("dropdown-menu");
            dropdown.classList.toggle("hidden");
        }
    </script>
</head>

<body>
    <nav class="bg-white/50 backdrop-blur-md fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('index') }}" class="flex items-center space-x-3">
                <img src="./assets/logo.png" class="h-8" alt="Michael Logo">
                <span class="self-center text-2xl font-semibold text-gray-900">Michael Blog</span>
            </a>
            <div class="flex md:order-2 space-x-3">
                <button type="button" onclick="window.location.href='{{ route('sign-up') }}'"
                    class="text-white bg-blue-500 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                    started</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white/70 backdrop-blur-sm md:space-x-8 md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#"
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

    <!-- hero section -->
    <section
        class="min-h-screen pt-16 flex items-center relative overflow-hidden bg-gradient-to-br from-indigo-50 to-purple-50">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-20 right-0 w-72 h-72 bg-purple-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
        </div>

        <div class="container px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto py-12 md:py-20">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="flex-1 w-full md:w-1/2">
                    <div class="relative">
                        <div class="absolute -left-6 -top-6 w-20 h-20 bg-purple-200 rounded-full blur-2xl opacity-60">
                        </div>

                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 relative">
                            Hi, I'm Michael
                            <span
                                class="block mt-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-transparent bg-clip-text">
                                Front End Dev
                            </span>
                        </h1>
                    </div>

                    <p class="text-gray-600 text-lg mb-8 max-w-lg">
                        On this blog I share tips and tricks, frameworks, projects, tutorials, etc.
                        Make sure you subscribe to get the latest updates
                    </p>
                    <a href="{{ route('landing-pages') }}"
                        class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-purple-700 bg-purple-100 rounded-full dark:bg-purple-900 dark:text-purple-300 hover:bg-purple-200 dark:hover:bg-purple-800">
                        <span class="text-xs bg-purple-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span
                            class="text-sm font-medium">How to quickly deploy a static website, Watch Now !!</span>
                        <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </div>

                <div class="flex-1 w-full md:w-1/2 relative">
                    <div class="absolute -right-20 top-0 w-40 h-40 bg-indigo-200 rounded-full blur-3xl opacity-60">
                    </div>
                    <div class="absolute left-10 bottom-10 w-20 h-20 bg-purple-200 rounded-full blur-2xl opacity-60">
                    </div>

                    <div class="relative bg-white/30 backdrop-blur-sm p-4 rounded-2xl shadow-xl">
                        <video src="./assets/programming.webm" autoplay muted loop
                            class="w-56 h-auto max-w-lg mx-auto rounded-lg"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- category section -->
    <section class="py-16 bg-gradient-to-br from-indigo-50 to-purple-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Browse The Category —</h2>
                <a href="content/landing-pages.blade.php" target="_blank"
                    class="text-gray-600 hover:text-gray-900 flex items-center gap-2">
                    See All Category
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                <div
                    class="bg-white p-6 rounded-xl shadow-sm transition-all duration-300 flex flex-col items-center justify-center text-center border border-transparent hover:border-purple-700 border-solid">
                    <div class="w-12 h-12 mb-4 flex items-center justify-center">
                        <img src="./assets/css-3.png" alt="css-3-logo">
                    </div>
                    <h3 class="font-semibold">CSS</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-xl shadow-sm transition-all duration-300 flex flex-col items-center justify-center text-center border border-transparent hover:border-purple-700 border-solid">
                    <div class="w-12 h-12 mb-4 flex items-center justify-center">
                        <span class="text-2xl font-bold">JS</span>
                    </div>
                    <h3 class="font-semibold">Javascript</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-xl shadow-sm transition-all duration-300 flex flex-col items-center justify-center text-center border border-transparent hover:border-purple-700 border-solid">
                    <div class="w-12 h-12 mb-4 flex items-center justify-center">
                        <img src="./assets/js.png" alt="js-logo">
                    </div>
                    <h3 class="font-semibold">Tailwind</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-xl shadow-sm transition-all duration-300 flex flex-col items-center justify-center text-center border border-transparent hover:border-purple-700 border-solid">
                    <div class="w-12 h-12 mb-4 flex items-center justify-center">
                        <img src="./assets/php.svg" alt="php-logo">
                    </div>
                    <h3 class="font-semibold">PHP</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-xl shadow-sm transition-all duration-300 flex flex-col items-center justify-center text-center border border-transparent hover:border-purple-700 border-solid">
                    <div class="w-12 h-12 mb-4 flex items-center justify-center">
                        <img src="./assets/github.svg" alt="github-logo">
                    </div>
                    <h3 class="font-semibold">Github</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-12">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900">Featured Article —</h2>
                <a href="#" class="text-gray-600 hover:text-gray-900 flex items-center gap-2">
                    See All Category
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Article Card Template -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://via.placeholder.com/300x200" alt="Article Image">
                            <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm">
                                Tech
                            </div>
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                Fundamental Of JavaScript
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://via.placeholder.com/50"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Jan 10, 2022 · 3 Min Read</p>
                                </div>
                            </div>

                            <a href="#"
                                class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition-colors">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://via.placeholder.com/300x200" alt="Article Image">
                            <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm">
                                CSS
                            </div>
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                                Grid CSS Make Your Life Easier
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://via.placeholder.com/50"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Jan 10, 2022 · 3 Min Read</p>
                                </div>
                            </div>

                            <a href="#"
                                class="mt-4 inline-block text-green-600 hover:text-green-800 font-semibold transition-colors">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://via.placeholder.com/300x200" alt="Article Image">
                            <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm">
                                CSS
                            </div>
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                                Grid CSS Make Your Life Easier
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://via.placeholder.com/50"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Jan 10, 2022 · 3 Min Read</p>
                                </div>
                            </div>

                            <a href="#"
                                class="mt-4 inline-block text-green-600 hover:text-green-800 font-semibold transition-colors">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Artikel 4 -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://via.placeholder.com/300x200" alt="Article Image">
                            <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm">
                                CSS
                            </div>
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                                Grid CSS Make Your Life Easier
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://via.placeholder.com/50"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Jan 10, 2022 · 3 Min Read</p>
                                </div>
                            </div>

                            <a href="#"
                                class="mt-4 inline-block text-green-600 hover:text-green-800 font-semibold transition-colors">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Website --}}
    <footer class="bg-gradient-to-br from-gray-100 to-gray-200 text-gray-700">
        <div class="max-w-7xl mx-auto p-6 lg:p-12">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand Section -->
                <div class="space-y-6">
                    <div class="flex items-center">
                        <h2 class="text-3xl font-bold">
                            <span class="text-purple-700">Michael</span>
                            <span class="text-gray-700">.</span>
                            <span class="text-blue-300">blog</span>
                        </h2>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Exploring technology, design, and innovation through personal insights and experiences.
                    </p>
                    <div class="flex gap-6">
                        <a href="#"
                            class="text-gray-400 hover:text-blue-300 transform hover:scale-110 transition-all duration-300">
                            <i class="fab fa-medium-m text-xl"></i>
                        </a>
                        <a href="#"
                            class="text-gray-400 hover:text-blue-300 transform hover:scale-110 transition-all duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#"
                            class="text-gray-400 hover:text-blue-300 transform hover:scale-110 transition-all duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#"
                            class="text-gray-400 hover:text-blue-300 transform hover:scale-110 transition-all duration-300">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-6">
                    <h3
                        class="text-xl font-semibold text-gray-700 relative after:content-[''] after:block after:w-12 after:h-1 after:bg-blue-300 after:mt-2">
                        Quick Links
                    </h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin') }}"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Dashboard Panel
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="space-y-6">
                    <h3
                        class="text-xl font-semibold text-gray-700 relative after:content-[''] after:block after:w-12 after:h-1 after:bg-blue-300 after:mt-2">
                        Categories
                    </h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Web Development
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Design
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Technology
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-2 group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-300 transition-all duration-300"></span>
                                Tutorials
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="space-y-6">
                    <h3
                        class="text-xl font-semibold text-gray-700 relative after:content-[''] after:block after:w-12 after:h-1 after:bg-blue-300 after:mt-2">
                        Contact
                    </h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="mailto:contact@Michael.blog"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-3 group">
                                <i
                                    class="fas fa-envelope text-blue-300 group-hover:scale-110 transition-transform duration-300"></i>
                                contact@Michael.blog
                            </a>
                        </li>
                        <li>
                            <a href="tel:+628XXXXXXXXX"
                                class="text-gray-500 hover:text-blue-300 transition-colors duration-300 flex items-center gap-3 group">
                                <i
                                    class="fas fa-phone text-blue-300 group-hover:scale-110 transition-transform duration-300"></i>
                                +62 8XX XXXX XXXX
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="mt-12 pt-8 border-t border-gray-300">
                <div class="text-center space-y-4">
                    <p class="text-sm text-gray-500">
                        © 2024 <span class="font-semibold text-gray-700">Michael.blog</span> | All Rights Reserved
                    </p>
                    <p class="text-sm text-gray-500 flex items-center justify-center gap-2">
                        Crafted with <span class="text-red-500 animate-pulse">❤</span> in Jakarta, Indonesia
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
