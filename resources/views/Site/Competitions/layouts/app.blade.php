<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <header class="shadow-sm">
        <div class="flex items-center justify-between h-16 max-w-screen-xl px-4 mx-auto">






            <!-- <nav class="items-center justify-center hidden space-x-8 text-sm font-medium lg:flex lg:flex-1 lg:w-0">

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
        </div> -->

            <nav
                class="px-auto py-4 bg-white
        items-center justify-center space-x-8 text-sm font-medium lg:flex lg:flex-1 lg:w-0">

                <div class="lg:hidden">
                    <button class="navbar-burger flex items-center text-blue-600 p-3">
                        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul class="hidden absolute lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">

                    <a class="text-gray-900 w-10" href="{{ url('/') }}"><img
                            src="{{ asset('assets/logos/logo.jpg') }}">
                    </a>
                    </li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/news') }}">News Center</a></li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/warriors') }}">Brave Warriors</a>
                    </li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/gladiators') }}">Brave
                            Gladiators</a></li>
                    <li><a class="text-gray-900 hover:text-amber-300"
                            href="{{ url('/competitions') }}">Competitions</a></li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/docs') }}">Official Documents</a>
                    </li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/store') }}">Store</a></li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/gallery') }}">Gallery</a></li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/about') }}">About Us</a></li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/procurement') }}">Procurement</a>
                    </li>
                    <li><a class="text-gray-900 hover:text-amber-300" href="{{ url('/vacancies') }}">Vacancies</a></li>
                </ul>

            </nav>
            <div class="navbar-menu relative z-50 hidden">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                    <div class="flex items-center mb-8">

                        <button>
                            <a class="text-gray-900" href="{{ url('/') }}">
                                <img class="h-12 sm:h-24 mx-auto" src="{{ asset('assets/logos/logo.jpg') }}">
                            </a>
                        </button>

                        <button class="navbar-close">
                            <svg class="ml-64 sm:ml-60 h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/warriors') }}">Brave Warriors</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/gladiators') }}">Brave Gladiators</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/competitions') }}">Competitions</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/docs') }}">Official Documents</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/store') }}">Store</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/gallery') }}">Gallery</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/about') }}">About Us</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/procurement') }}">Procurement</a></li>
                            <li class="mb-1"><a class="text-gray-900 hover:text-amber-300"
                                    href="{{ url('/vacancies') }}">Vacancies</a></li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright ?? 2022</span>
                        </p>
                    </div>
                </nav>
            </div>
    </header>

    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>
    <!-- Component Code -->
    <header class="competition-banner">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <div class="text-center w-24">
                    <img src="{{ asset('storage') }}/{{ $comp->badge }} " />
                </div>
                <div class="px-6">
                    <h1 class="text-2xl font-bold text-white sm:text-3xl">
                        {{ $comp->name }}
                    </h1>
                </div>



            </div>
        </div>
    </header>
    <header class="">
        <div class="flex items-center justify-between h-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">


            <div class="flex items-center justify-center flex-1">
                <nav class=" lg:text-gray-900 lg:tracking-wide font-bold text-xs space-x-2 lg:space-x-4 flex">
                    <a href="{{ url('/competitions') }}/{{ $comp->id }}"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-amber-400 hover:border-current">
                        Home
                    </a>

                    <a href="{{ url('/competitions/') }}/{{ $comp->id }}/{{ 'matches' }}"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-amber-400 hover:border-current">
                        Matches
                    </a>

                    <a href="{{ url('/competitions/') }}/{{ $comp->id }}/{{ 'standings' }}"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-amber-400 hover:border-current">
                        Standings </a>

                    <a href="{{ url('/competitions/') }}/{{ $comp->id }}/{{ 'teams' }}"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-amber-400 hover:border-current">
                        Teams
                    </a>
                    <a href="{{ url('/competitions/') }}/{{ $comp->id }}/{{ 'docs' }}"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-amber-400 hover:border-current">
                        Documents
                    </a>
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
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-800">??2022 <a href="#"
                class="hover:underline">The Namibian Football Asscociation</a>. All Rights Reserved. Powered By <a
                href="https://gmobility.co.na">GMobility</a></span>
    </div>
</footer>

</html>
