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

        <div class="border-t border-gray-100 lg:hidden ">
            <nav class="flex items-center justify-center p-4 overflow-x-auto text-sm font-medium">
                <a class="flex-shrink-0 pl-4 text-gray-900 text-gray-900 w-10"><img
                        src="{{ asset('assets/logos/logo.jpg') }}"></a>

                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/news') }}">News Center</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/warriors') }}">Brave Warriors</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/gladiators') }}">Brave Gladiators</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/competitions') }}">Competitions</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/docs') }}">Official Documents</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/store') }}">Store</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/gallery') }}">Gallery</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ url('/about') }}">About Us</a>
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
                        <img src="{{ asset('assets/logos/nfa-sponsors/coca-cola.png') }}" class="w-38 mx-2"
                            alt="" href="https://www.coca-colacompany.com/">
                    </div>

                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/thenamibian.png') }}" class="w-38 mx-2"
                            alt="" href="https://www.namibian.com.na/">
                    </div>
                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/standardbank.png') }}" class="w-38 mx-2"
                            alt="" href="https://www.standardbank.com.na/">
                    </div>
                    <div class="p-4">
                        <img src="{{ asset('assets/logos/nfa-sponsors/government.png') }}" class="w-38"
                            alt="" href="https://www.gov.na/">
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
