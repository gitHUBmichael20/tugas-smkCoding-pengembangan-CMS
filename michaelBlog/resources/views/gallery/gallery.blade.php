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
    <section
        class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 shadow-lg rounded-xl bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 backdrop-blur-lg">
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
    <section class="flex justify-center mt-5">
        <div class="grid max-w-7xl grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($galleries as $gallery)
            <div class="grid gap-4">
                <div class="relative max-w-sm group overflow-hidden rounded-lg">
                    <img
                        class="w-full h-full transition-transform duration-300 group-hover:scale-105"
                        src="{{ $gallery->image }}"
                        alt="{{ $gallery->title }}"
                    />
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">{{ $gallery->title }}</h3>
                            <p class="text-sm">{{ $gallery->captions }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $galleries->links() }}
    </section>
    
</body>

</html>
