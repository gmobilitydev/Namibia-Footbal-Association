@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">


    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        Competitions
                    </h1>
                </div>



            </div>
        </div>
    </header>
    <link crossorigin="anonymous" href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <script crossorigin="anonymous" defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        .swiper-container {
            overflow: hidden;
        }
    </style>

    <section class="bg-zinc-900">
        <div class="px-4 py-16 mx-auto max-w-[1340px]">
            <div class="items-end justify-between max-w-7xl sm:flex sm:pr-6 lg:pr-8">
                <h2 class="text-white max-w-xl text-4xl font-bold tracking-tight sm:text-5xl">
                    Local Competitions
                </h2>

                <div class="flex mt-8 lg:mt-0">
                    <button
                        class="p-3 text-yellow-600 transition-colors border border-current rounded-full focus:outline-none focus:bg-yellow-600 focus:text-white prev-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform -rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <button
                        class="p-3 ml-3 text-yellow-600 border border-current rounded-full focus:outline-none focus:bg-yellow-600 focus:text-white next-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-8 lg:col-span-2 lg:mx-0">
                <div class="grid grid-cols-3 gap-4">

                    @forelse ($competitions as $comp)
                        <div class="w-full">
                            <a href="/competitions/{{ $comp->id }}"
                                class="relative block overflow-hidden bg-center bg-no-repeat bg-cover  rounded w-full rounded-lg shadow-lg hover:scale-110 transition duration-300 ease-in-out"
                                style="background-image: url({{ asset('storage') }}/{{ $comp->image }})">


                                <div class="relative p-8 pt-40 text-white bg-black bg-opacity-40">
                                    <h5 class="text-2xl font-bold">{{ $comp->name }}</h5>

                                    <p class="text-sm">Competition Date</p>
                                </div>
                            </a>

                        </div>
                    @empty
                    @endforelse
                </div>






            </div>
        </div>
    </section>
    <section class="dark:bg-amber-300 dark:text-gray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">Latest News</h2>

            </div>
            <a rel="noopener noreferrer" href="#"
                class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="{{ asset('assets/images/galler.jpeg') }}" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                        Noster tincidunt reprimique ad pro</h3>
                    <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                    <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert
                        putent doctus id.</p>
                </div>
            </a>
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                        src="{{ asset('assets/images/caf.jpeg') }}">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                            laoreet repudiare legendos</h3>
                        <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                        <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                            percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea,
                            ei vocent delicata indoctum pri.</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                        src="{{ asset('assets/images/team.jpg') }}">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                            laoreet repudiare legendos</h3>
                        <span class="text-xs dark:text-gray-400">January 22, 2021</span>
                        <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                            percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea,
                            ei vocent delicata indoctum pri.</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                        src="{{ asset('assets/images/caf.jpeg') }}">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                            laoreet repudiare legendos</h3>
                        <span class="text-xs dark:text-gray-400">January 23, 2021</span>
                        <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                            percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea,
                            ei vocent delicata indoctum pri.</p>
                    </div>
                </a>

            </div>

        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 32,
                autoplay: {
                    delay: 8000,
                },
                navigation: {
                    nextEl: '.next-button',
                    prevEl: '.prev-button',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.5,
                        centeredSlides: true,
                    },
                    1024: {
                        centeredSlides: false,
                        slidesPerView: 2.25,
                    },
                },
            })
        })
    </script>
@endsection
