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
                    <a href="{{ route('admin') }}" class="hover:underline me-4 md:me-6">Dashboard Admin</a>
                </li>
                <li>
                    <a href="{{ route('gallery')}}" class="hover:underline me-4 md:me-6">Gallery</a>
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