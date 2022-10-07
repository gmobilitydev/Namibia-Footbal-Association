@extends('layouts.app')

@section('content')
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40">


            <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

            <section>
             
          
                <div class="max-w-screen-xl p-5 mx-auto dark:bg-zinc-900 dark:text-gray-100">
                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                        style="color: hsl(0, 0%, 100%)">
                        Competitions
                    </h1>
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2">
                        @forelse ($competitions as $competition)
                            <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover h-96 dark:bg-gray-500"
                                style="background-image: url({{ asset('storage') }}/{{ $competition->image }});">
                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b dark:via-transparent dark:from-gray-900 dark:to-gray-900">
                                </div>
                                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                                    <div class="flex flex-col justify-start text-center dark:text-gray-100">
                                        <span
                                            class="text-3xl font-semibold leading-none tracking-wide">{{ $competition->launch_date->format('d') }}</span>
                                        <span
                                            class="leading-none uppercase">{{ $competition->launch_date->format('m') }}</span>
                                    </div>
                                </div>
                                <h2 class="z-10 p-5">
                                    <a rel="noopener noreferrer" href="./competitions/{{ $competition->id }}"
                                        class="font-medium text-md hover:underline dark:text-gray-100">{{ $competition->name }}</a>
                                </h2>
                            </div>

                        @empty
                            <h2>No Competitions found</h2>
                    </div>
                    @endforelse




                </div>
    </div>

    </section>


    </section>
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 background-radial-gradient-2">
            <style>
                .background-radial-gradient-2 {
                    background-color: hsl(54, 100%, 50%);
                    background-image: radial-gradient(650px circle at 0% 0%,
                            hsl(56, 100%, 50%) 15%,
                            hsl(54, 93%, 57%) 35%,
                            hsl(51, 91%, 47%) 75%,
                            hsl(46, 86%, 42%) 80%,
                            transparent 100%),
                        radial-gradient(1250px circle at 100% 100%,
                            hsl(56, 100%, 50%) 15%,
                            hsl(54, 88%, 46%) 35%,
                            hsl(56, 100%, 55%) 75%,
                            hsl(46, 71%, 47%) 80%,
                            transparent 100%);
                }
            </style>

            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mb-12 lg:mb-0">
                            <img src="{{ asset('assets/images/nfa.png') }}" class="w-full rounded-lg shadow-lg"
                                alt="" />
                        </div>
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                style="color: hsl(46, 84%, 95%);">Brave Warriors<br /><span
                                    style="color: hsl(54, 81%, 75%);">Team Kit </span></h1>
                            <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-zinc-900 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out"
                                data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Go to
                                store</a>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->


    </div>
@endsection
