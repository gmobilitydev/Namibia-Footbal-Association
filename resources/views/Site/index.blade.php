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
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover"
                            style="background-position: 50%; background-image: url({{ asset('/storage') }}/{{ $latestPostList->first()->image }}); height: 500px;">
                            <a href="./news/{{ $latestPostList->first->id }}"></a>
                        </div>


                        <div class="container mx-auto px-6 md:px-12 xl:px-32">
                            <div class="text-center text-gray-800">
                                <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12"
                                    style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">
                                        {{ $latestPostList[0]->title }}
                                        <br />
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <section class="dark:bg-zinc-900 dark:text-gray-100">
                <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
                    <div class="space-y-2 text-center">
                        <h2 class="text-3xl font-bold">Latest News</h2>

                    </div>
                    <a rel="noopener noreferrer" href="./news/{{ $latestPostList[1]->id }}"
                        class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                        <img src="{{ asset('storage') }}/{{ $latestPostList[1]->image }}" alt=""
                            class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                        <div class="p-6 space-y-2 lg:col-span-5">
                            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                                {{ $latestPostList[1]->title }}</h3>
                            <span
                                class="text-xs dark:text-gray-400">{{ $latestPostList[1]->published_at->format('m/d/ygit ') }}</span>
                            <p>{{ $latestPostList[1]->content }}</p>
                        </div>
                    </a>
                    <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                        <a rel="noopener noreferrer" href="./news/{{ $latestPostList[2]->id }}"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                src="{{ asset('storage') }}/{{ $latestPostList[2]->image }}">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $latestPostList[2]->title }}</h3>
                                <span
                                    class="text-xs dark:text-gray-400">{{ $latestPostList[2]->published_at->format('m/d/y') }}</span>
                                <p>{{ $latestPostList[2]->content }}</p>
                            </div>
                        </a>
                        <a rel="noopener noreferrer" href="./news/{{ $latestPostList[3]->id }}"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                src="{{ asset('storage') }}/{{ $latestPostList[3]->image }}">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $latestPostList[3]->title }}</h3>
                                <span
                                    class="text-xs dark:text-gray-400">{{ $latestPostList[3]->published_at->format('m/d/y') }}</span>
                                <p>{{ $latestPostList[3]->content }}</p>
                            </div>
                        </a>
                        <a rel="noopener noreferrer" href="./news/{{ $latestPostList[4]->id }}"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                src="{{ asset('storage') }}/{{ $latestPostList[4]->image }}">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $latestPostList[4]->title }}</h3>
                                <span
                                    class="text-xs dark:text-gray-400">{{ $latestPostList[4]->published_at->format('m/d/y') }}</span>
                                <p>{{ $latestPostList[4]->content }}</p>
                            </div>
                        </a>

                    </div>

                </div>
            </section>
            <section class="mb-32 text-gray-800 background-radial-gradient">
                <style>
                    .background-radial-gradient {
                        background-color: hsl(49, 41%, 15%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(49, 41%, 35%) 15%,
                                hsl(46, 41%, 30%) 35%,
                                hsl(49, 41%, 20%) 75%,
                                hsl(49, 40%, 19%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(49, 41%, 45%) 15%,
                                hsl(50, 41%, 30%) 35%,
                                hsl(49, 41%, 20%) 75%,
                                hsl(49, 41%, 19%) 80%,
                                transparent 100%);
                    }
                </style>

                <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                    <div class="container mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                            <div class="mt-12 lg:mt-0">
                                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                    style="color: hsl(49, 81%, 95%)">
                                    Catch up on the latest <br /><span style="color: hsl(49, 81%, 75%)">Highlights</span>
                                </h1>

                            </div>
                            <div class="mb-12 lg:mb-0">
                                <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                                    style="padding-top: 56.25%">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </section>
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
