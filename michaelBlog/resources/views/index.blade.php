<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shutter Stories</title>
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
                <span class="self-center text-2xl font-semibold text-gray-900">Shutter Stories</span>
            </a>
            <div class="flex md:order-2 space-x-3">
                <button type="button" onclick="window.location.href='{{ route('admin') }}'"
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
                        <a href="{{ route('gallery') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-300 md:hover:bg-transparent md:hover:text-gray-700 md:p-0">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ route('about-pages') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-300 md:hover:bg-transparent md:hover:text-gray-700 md:p-0">About
                            Pages</a>
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

                        <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-gray-900 mb-6 relative">
                            Hi, Welcome to My Gallery
                            <span
                                class="block mt-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-transparent bg-clip-text">
                                Camera enthusiast
                            </span>
                        </h1>
                    </div>

                    <p class="text-gray-600 text-lg mb-8 max-w-lg">
                        On this blog I share my own portofolio about photography, Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Officia facere earum nemo? Magni!
                    </p>
                    <a href="#"
                        class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-purple-700 bg-purple-100 rounded-full dark:bg-purple-900 dark:text-purple-300 hover:bg-purple-200 dark:hover:bg-purple-800">
                        <span class="text-xs bg-purple-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span
                            class="text-sm font-medium text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, minus?</span>
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
                        <image src="./assets/hero-image.jpg"
                            class="w-full h-auto max-w-lg mx-auto rounded-lg"></image>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- category section -->
    <section class="py-16 bg-gradient-to-br from-indigo-200 to-purple-200">
        <figure class="max-w-screen-md mx-auto text-center">
            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                <path
                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
            </svg>
            <blockquote>
                <p class="text-2xl italic font-medium text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quaerat minus ipsa nulla odit deleniti exercitationem sit. Beatae facere asperiores ullam
                    nulla sequi accusamus ipsam fuga, enim fugit nisi ipsum, similique molestiae iste.</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                <img class="w-6 h-6 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                    alt="profile picture">
                <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                    <cite class="pe-3 font-medium text-gray-900 ">Michael Gough</cite>
                    <cite class="ps-3 text-sm text-gray-500 ">CEO at Google</cite>
                </div>
            </figcaption>
        </figure>
    </section>

    <!-- blog section -->
    <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-12">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900">Top Photo —</h2>
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
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-inherit">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://picsum.photos/400/800" alt="Article Image">
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet.
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://picsum.photos/100/100"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Life is easy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-inherit">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://picsum.photos/400/800" alt="Article Image">
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet.
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://picsum.photos/100/100"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Life is easy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-inherit">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://picsum.photos/400/800" alt="Article Image">
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet.
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://picsum.photos/100/100"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Life is easy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Artikel 4 -->
                <div class="group transform transition-all duration-300 hover:-translate-y-2 hover:shadow-inherit">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://picsum.photos/400/800" alt="Article Image">
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                Lorem ipsum dolor sit amet.
                            </h2>

                            <div class="flex items-center text-gray-500 text-sm">
                                <img class="w-8 h-8 rounded-full mr-3" src="https://picsum.photos/100/100"
                                    alt="Author">
                                <div>
                                    <p class="font-medium text-gray-700">Michael</p>
                                    <p>Life is easy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Website --}}
    <footer class="bg-white rounded-lg shadow dark:bg-gray-800 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="{{ route('index') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="./assets/logo.png" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-200">Flowbite</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="{{ route('about-pages')}}" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Dashboard Admin</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Gallery</a>
                    </li>
                    <li>
                        <a href="mailto:carlosimbolon23@gmail.com" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-600 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://laravel.com/docs/" class="hover:underline">Michael™</a>. All Rights Reserved.</span>
        </div>
    </footer>   
</body>

</html>
