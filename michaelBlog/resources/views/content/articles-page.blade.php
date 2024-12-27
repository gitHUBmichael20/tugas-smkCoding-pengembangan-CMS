<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama Artikel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-white/50 backdrop-blur-md sticky w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('index') }}" class="flex items-center space-x-3">
                <img src="./assets/logo.png" class="h-8" alt="Michael Logo">
                <span class="self-center text-2xl font-semibold text-gray-900">Syntax Journal</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 rounded-lg text-sm p-2.5 mr-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-100 focus:ring-blue-400 focus:border-blue-400"
                        placeholder="Search...">
                </div>
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300"
                    aria-controls="navbar-search" aria-expanded="false">
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

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Article Header -->
        <header class="space-y-6 mb-8">
            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                UI/UX Study Case: Optimalisasi Aplikasi Gojek Terhadap Keluhan User Untuk Meningkatkan Kenyamanan
                Penggunaannya
            </h1>

            <!-- Author Card -->
            <div class="flex items-center space-x-4">
                <!-- Profile Picture -->
                <img src="https://picsum.photos/40/40" alt="Author profile"
                    class="w-10 h-10 rounded-full object-cover" />

                <!-- Author Info -->
                <div class="flex sm:space-x-4">
                    <div>
                        <h2 class="text-base font-semibold text-gray-900">Hassanjadi</h2>
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <span>8 min read</span>
                            <span>•</span>
                            <time>Dec 22, 2022</time>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div class="flex flex-wrap gap-2">
                <span
                    class="px-3 py-1 text-sm bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200 transition-all duration-200">CSS</span>
                <span
                    class="px-3 py-1 text-sm bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition-all duration-200">HTML</span>
                <span
                    class="px-3 py-1 text-sm bg-yellow-100 text-yellow-700 rounded-full hover:bg-yellow-200 transition-all duration-200">JavaScript</span>
            </div>
        </header>

        <!-- Featured Image -->
        <figure class="mb-8">
            <img src="https://picsum.photos/1200/400?grayscale" alt="Featured image"
                class="w-full h-auto rounded-lg object-cover" />
        </figure>

        <!-- Article Content -->
        <article class="prose prose-lg max-w-none">
            <p class="text-gray-700 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">Latar Belakang</h2>
            <p class="text-gray-700 mb-6">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
            </p>

            <!-- Additional Image -->
            <figure class="my-8">
                <img src="https://picsum.photos/seed/picsum/800/400" alt="Additional content image"
                    class="w-full h-auto rounded-lg object-cover" />
                <figcaption class="mt-2 text-sm text-gray-500 text-center">
                    Caption for the image goes here
                </figcaption>
            </figure>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">Metodologi</h2>
            <p class="text-gray-700 mb-6">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.
            </p>
        </article>
    </main>

    <!-- Article Footer -->
    <footer class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 border-t border-gray-200">
        <!-- Navigation Buttons -->
        <div class="flex justify-between items-center mb-8">
            <a href="#"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Home
            </a>

            <a href="#"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                See All Articles
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

        <!-- Recommended Articles Section -->
        <div class="space-y-4">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Recommended Articles</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Article Card 1 -->
                <article class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://picsum.photos/400/200" alt="Article thumbnail"
                        class="w-full h-48 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <span
                                class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">UI/UX</span>
                            <span class="text-sm text-gray-500">5 min read</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                            Principles of User Interface Design: A Comprehensive Guide
                        </h3>
                        <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                            Learn about the fundamental principles that make interfaces more intuitive and
                            user-friendly.
                        </p>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/32/32" alt="Author avatar"
                                class="w-8 h-8 rounded-full" />
                            <div class="ml-2">
                                <p class="text-sm font-medium text-gray-900">John Doe</p>
                                <p class="text-xs text-gray-500">Dec 20, 2022</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article Card 2 -->
                <article class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://picsum.photos/400/200" alt="Article thumbnail"
                        class="w-full h-48 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <span
                                class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Design</span>
                            <span class="text-sm text-gray-500">8 min read</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                            The Impact of Color Psychology in Mobile Applications
                        </h3>
                        <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                            Discover how color choices affect user behavior and engagement in mobile apps.
                        </p>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/32/32" alt="Author avatar"
                                class="w-8 h-8 rounded-full" />
                            <div class="ml-2">
                                <p class="text-sm font-medium text-gray-900">Jane Smith</p>
                                <p class="text-xs text-gray-500">Dec 18, 2022</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article Card 3 -->
                <article class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://picsum.photos/400/200" alt="Article thumbnail"
                        class="w-full h-48 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <span
                                class="px-2 py-1 text-xs font-medium bg-purple-100 text-purple-800 rounded-full">Research</span>
                            <span class="text-sm text-gray-500">6 min read</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                            User Research Methods for Better Product Development
                        </h3>
                        <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                            Explore effective research methods to improve your product development process.
                        </p>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/32/32" alt="Author avatar"
                                class="w-8 h-8 rounded-full" />
                            <div class="ml-2">
                                <p class="text-sm font-medium text-gray-900">Mike Johnson</p>
                                <p class="text-xs text-gray-500">Dec 15, 2022</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </footer>

</body>

</html>
