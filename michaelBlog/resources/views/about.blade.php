<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <title>About Page</title>
    @vite('resources/css/app.css')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.querySelector("[data-collapse-toggle]");
            const navMenu = document.getElementById("external");

            toggleButton.addEventListener("click", () => {
                navMenu.classList.toggle("hidden");
            });
        });
    </script>
</head>

<body>
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main content --}}
    <main>
        {{-- section pertama --}}
        <section class="py-24 relative xl:mr-0 lg:mr-5 mr-0">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                    <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-center items-start gap-8 flex">
                            <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                                <h6 class="text-gray-400 text-base font-normal leading-relaxed">About Us</h6>
                                <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                    <h2
                                        class="text-indigo-700 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                        The Tale of Our Achievement Story</h2>
                                    <p
                                        class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                        Our achievement story is a testament to teamwork and perseverance. Together,
                                        we've
                                        overcome challenges, celebrated victories, and created a narrative of progress
                                        and
                                        success.</p>
                                </div>
                            </div>
                            <div class="w-full flex-col justify-center items-start gap-6 flex">
                                <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                    <div
                                        class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                        <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">33+ Years
                                        </h4>
                                        <p class="text-gray-500 text-base font-normal leading-relaxed">Influencing
                                            Digital
                                            Landscapes Together</p>
                                    </div>
                                    <div
                                        class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                        <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">125+
                                            Projects
                                        </h4>
                                        <p class="text-gray-500 text-base font-normal leading-relaxed">Excellence
                                            Achieved
                                            Through Success</p>
                                    </div>
                                </div>
                                <div
                                    class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                    <div
                                        class="w-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                        <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">26+ Awards
                                        </h4>
                                        <p class="text-gray-500 text-base font-normal leading-relaxed">Our Dedication to
                                            Innovation Wins Understanding</p>
                                    </div>
                                    <div
                                        class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                        <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">99% Happy
                                            Clients</h4>
                                        <p class="text-gray-500 text-base font-normal leading-relaxed">Mirrors our Focus
                                            on
                                            Client Satisfaction.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="sm:w-fit w-full group px-3.5 py-2 bg-indigo-50 hover:bg-indigo-100 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out justify-center items-center flex">
                            <span
                                class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">Read
                                More</span>
                            <svg class="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#4F46E5"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full lg:justify-start justify-center items-start flex">
                        <div
                            class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-3xl sm:border border-gray-200 relative">
                            <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                                src="https://picsum.photos/800/1200" alt="about Us image" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- testimoni --}}
        <section class="bg-white dark:bg-gray-800">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                            fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-2xl font-medium text-gray-900 dark:text-white">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Ipsam autem eligendi expedita deserunt alias a fugit, hic eius
                            veritatis id amet reprehenderit animi placeat porro dolor tempora at incidunt ullam!</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3">
                        <img class="w-6 h-6 rounded-full"
                            src="#"
                            alt="profile picture">
                        <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                            <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                            <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </section>


        {{-- section kedua --}}
        <section class="py-24 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                            <h2
                                class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                Building Stronger Communities through Collaboration and Empowerment</h2>
                            <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                Through collaborationperse perspectives and strengths are leveraged to create inclusive
                                environments where everyone has the opportunity to thrive. This approach not only
                                fosters personal growth and achievement but also strengthens the fabric of society.</p>
                        </div>
                        <button
                            class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                            <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                        </button>
                    </div>
                    <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover" src="https://picsum.photos/800/600"
                        alt="about Us image" />
                </div>
                <hr class="h-px max-w-7xl my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
        </section>

        {{-- Contact Section --}}
        <section class="grid sm:grid-cols-2 items-start gap-16 p-4 mx-auto max-w-7xl bg-white font-[sans-serif]">
            <div>
                <h1 class="text-gray-800 text-3xl font-extrabold">Let's Talk</h1>
                <p class="text-sm text-gray-500 mt-4">Have some big idea or brand to develop and need help? Then reach
                    out we'd love to hear about your project and provide help.</p>

                <div class="mt-12">
                    <h2 class="text-gray-800 text-base font-bold">Email</h2>
                    <ul class="mt-4">
                        <li class="flex items-center">
                            <div
                                class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                    viewBox="0 0 479.058 479.058">
                                    <path
                                        d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                        data-original="#000000" />
                                </svg>
                            </div>
                            <a href="javascript:void(0)" class="text-[#007bff] text-sm ml-4">
                                <small class="block">Mail</small>
                                <strong>info@example.com</strong>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-12">
                    <h2 class="text-gray-800 text-base font-bold">Socials</h2>

                    <ul class="flex mt-4 space-x-4">
                        <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                        data-original="#000000" />
                                </svg>
                            </a>
                        </li>
                        <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                    viewBox="0 0 511 512">
                                    <path
                                        d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                                        data-original="#000000" />
                                </svg>
                            </a>
                        </li>
                        <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <form class="ml-auto space-y-4">
                <input type='text' placeholder='Name'
                    class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-blue-500 focus:bg-transparent" />
                <input type='email' placeholder='Email'
                    class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-blue-500 focus:bg-transparent" />
                <input type='text' placeholder='Subject'
                    class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-blue-500 focus:bg-transparent" />
                <textarea placeholder='Message' rows="6"
                    class="w-full rounded-md px-4 bg-gray-100 text-gray-800 text-sm pt-3 outline-blue-500 focus:bg-transparent"></textarea>
                <button type='button'
                    class="text-white bg-blue-500 hover:bg-blue-600 tracking-wide rounded-md text-sm px-4 py-3 w-full !mt-6">Send</button>
            </form>
        </section>

    </main>
    
    {{-- footer website --}}
    @include('components.footer')   
</body>

</html>
