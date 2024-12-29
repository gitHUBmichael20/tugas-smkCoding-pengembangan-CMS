<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now for admin to customize the pages 😊🙏</title>
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:w-1/2 lg:py-0">
                <a href="#" class="flex  mb-6 text-2xl font-semibold text-gray-800">
                    <img class="w-8 h-8 mr-2" src="assets/logo.png" alt="logo">
                    Syntax Journal
                </a>
                <div class="w-full bg-white rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-800 md:text-2xl">
                            Create account for Admin Now !!
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-100 border border-gray-300 text-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Your Name</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-100 border border-gray-300 text-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Agus Budi" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-800">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-100 border border-gray-300 text-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required="">
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                                up</button>
                            <p class="text-sm font-light text-gray-500">
                                Already have an account? <a href="{{ route("admin-login") }}" class="font-medium text-blue-600 hover:underline">Login Now ! 😊</a>
                            </p>
                        </form> 
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-indigo-100 text-center hidden lg:flex justify-center">
                <div class="m-12 xl:m-16 w-1/2 lg:w-2/3 bg-contain bg-center bg-no-repeat"
                    style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
                </div>
            </div>
        </div>
    </div>
</body>


</html>
