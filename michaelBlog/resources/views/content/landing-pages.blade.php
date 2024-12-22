<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Content</title>
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body class="bg-gray-100">

    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="../assets/logo.png" alt="logo-web" class="w-9 m-3">
                    <div class="text-xl font-bold">Logo</div>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search..."
                        class="border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500">
                    <button class="ml-2 bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-600">Search</button>
                </div>
                <div class="hidden md:inline space-x-4 p-4">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-500">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-500">Services</a>
                    <a href="#"
                        class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-md transition duration-200">Logout</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-button" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block text-gray-700 hover:text-blue-500">Home</a>
                <a href="#" class="block text-gray-700 hover:text-blue-500">About</a>
                <a href="#" class="block text-gray-700 hover:text-blue-500">Services</a>
                <button type="button"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Red</button>
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

    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <button type="button"
            class="text-blue-600 hover:text-white border border-blue-400 bg-blue-100 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-200 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">All
            categories</button>
        <button type="button"
            class="text-gray-700 border border-gray-300 hover:border-gray-400 bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">CSS</button>
        <button type="button"
            class="text-gray-700 border border-gray-300 hover:border-gray-400 bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">PHP</button>
        <button type="button"
            class="text-gray-700 border border-gray-300 hover:border-gray-400 bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">HTML</button>
        <button type="button"
            class="text-gray-700 border border-gray-300 hover:border-gray-400 bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">GITHUB</button>
    </div>



    <script>
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>