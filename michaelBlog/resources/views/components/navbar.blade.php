<nav class="bg-white/50 backdrop-blur-md fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="./assets/logo.png" class="h-8" alt="Michael Logo">
            <span class="self-center text-2xl font-semibold text-gray-900">Shutter Stories</span>
        </a>
        <div class="flex md:order-2 space-x-3">
            <button type="button" onclick="window.location.href='{{ route('admin') }}'"
                class="text-white bg-blue-500 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-lg text-sm px-4 py-2 text-center">Open
                Panel</button>
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
                    <a href="{{ route('index')}}"
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
