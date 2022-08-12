<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <header class="shadow-sm">
        <div class="flex items-center justify-between h-16 max-w-screen-xl px-4 mx-auto">
            <div class="flex flex-1 w-0 lg:hidden">
                <button class="p-2 text-gray-600 bg-gray-100 rounded-full" type="button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </button>
            </div>



            <div class="flex justify-end flex-1 w-0 lg:hidden">
                <button class="p-2 text-gray-500 bg-gray-100 rounded-full" type="button">
                    <svg class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <nav class="items-center justify-center hidden space-x-8 text-sm font-medium lg:flex lg:flex-1 lg:w-0">

                <a class="text-gray-900 w-10" href="{{ url('/') }}"><img
                        src="{{ asset('assets/logos/logo.jpg') }}"></a>

                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/news') }}">News Center</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/warriors') }}">Brave Warriors</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/gladiators') }}">Brave Gladiators</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/competitions') }}">Competitions</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/docs') }}">Official Documents</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/store') }}">Store</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/gallery') }}">Gallery</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/about') }}">About Us</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/procurement') }}">Procurement</a>
                <a class="text-gray-900 hover:text-amber-300" href="{{ url('/vacancies') }}">Vacancies</a>

            </nav>


        </div>

        <div class="border-t border-gray-100 lg:hidden">
            <nav class="flex items-center justify-center p-4 overflow-x-auto text-sm font-medium">
                <a class="flex-shrink-0 pl-4 text-gray-900"><img src="logo.png"></a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="">About</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="">Blog</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="">Projects</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="">Contact</a>
            </nav>
        </div>
    </header>
    @yield('content')
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

</body>
<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-100">
    <div class="mx-auto max-w-screen-xl text-center">
        <!-- component -->
        <div class="py-16 bg-white">
            <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-56">
                <div class="m-auto text-center lg:w-7/12">
                    <h2 class="text-2xl text-gray-800 font-bold md:text-4xl"> Our partners
                    </h2>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/coca.png') }}" class="w-38" alt="">
                    </div>

                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/namibian.png') }}" class="w-38 " alt="">
                    </div>
                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/standard.png') }}" class="w-38 " alt="">
                    </div>
                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/govenrment.png') }}" class="w-24"
                            alt="">
                    </div>

                </div>
            </div>
        </div>

        <p class="my-6 text-gray-500 dark:text-gray-800">The Home of Namibian Football</p>
        <ul class="flex flex-wrap justify-center space-x-8 items-center mb-6 dark:text-gray-900">
            <li>
                <a class="text-gray-900" href="{{ url('/news') }}">News Center</a>

            </li>
            <li>
                <a class="text-gray-900" href="{{ url('/store') }}">Store</a>

            </li>
            <li>
                <a class="text-gray-900" href="{{ url('/gallery') }}">Gallery</a>

            </li>
            <li>
                <a class="text-gray-900" href="{{ url('/about') }}">About Us</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-800">©2022 <a href="#"
                class="hover:underline">The Namibian Football Asscociation</a>. All Rights Reserved. Powered By <a
                href="https://gmobility.co.na">GMobility</a></span>
    </div>
</footer>

</html>
