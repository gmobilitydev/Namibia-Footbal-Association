@extends('layouts.app')

@section('content')
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40">

            <div id="carouselExampleSlidesOnly" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">

                    <div class="relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%; background-image: url({{ asset('/storage') }}/{{ $latestPostList->first()->image }}); height: 500px;">
                        <a href="./news/{{ $latestPostList->first->id }}"></a>
                    </div>

                    <div class="container mx-auto px-6 md:px-12 xl:px-32">
                        <div class="text-center text-gray-800">
                            <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12"
                                style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">
                                    {{ $latestPostList->first()->title }}
                                    <br />
                                </h1>

                            </div>
                        </div>
                    </div>

                </div>
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
                                    <iframe
                                        class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
                                        src="https://www.youtube.com/embed/E8NsOy829KA" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </section>
            <section class="mb-10">

                <div class="grid overflow-hidden grid-cols-12 grid-rows-2 gap-2">
                    <div class="box row-start-1 row-end-3 col-start-3 col-end-5">
                        <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12">NFA COMPETITIONS &
                            EVENTS</h1>
                        <h1>
                            The NFA’s competitions offer chances to make a larger, positive social impact. The NFA aims to
                            establish a standard for national athletic events and be an inspiration for all audience groups,
                            both competition enthusiasts and the general public.
                        </h1>
                    </div>
                    <div class="box row-end-auto col-start-5 col-span-6">
                        <div class="grid overflow-hidden grid-cols-6 grid-rows-2 gap-2">
                            <div class="box row-start-1 row-end-auto col-start-2 col-end-4"><a href=""
                                    class="relative block overflow-hidden bg-center bg-no-repeat bg-cover  rounded-xl"
                                    style="background-image: url(https://www.hyperui.dev/photos/beach-1.jpeg)">
                                    <span
                                        class="absolute z-10 inline-flex items-center px-3 py-1 text-xs font-semibold text-white bg-black rounded-full  right-4 top-4">
                                        4.5

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1.5 text-yellow-300"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </span>

                                    <div class="relative p-8 pt-40 text-white bg-black bg-opacity-40">
                                        <h5 class="text-2xl font-bold">Rome</h5>

                                        <p class="text-sm">Italy</p>
                                    </div>
                                </a>
                            </div>
                            <div class="box col-start-4 col-end-7"><a href=""
                                    class="relative block overflow-hidden bg-center bg-no-repeat bg-cover  rounded-xl"
                                    style="background-image: url(https://www.hyperui.dev/photos/beach-1.jpeg)">
                                    <span
                                        class="absolute z-10 inline-flex items-center px-3 py-1 text-xs font-semibold text-white bg-black rounded-full  right-4 top-4">
                                        4.5

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1.5 text-yellow-300"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </span>

                                    <div class="relative p-8 pt-40 text-white bg-black bg-opacity-40">
                                        <h5 class="text-2xl font-bold">Rome</h5>

                                        <p class="text-sm">Italy</p>
                                    </div>
                                </a>
                            </div>
                            <div class="box col-start-2 col-end-3">3</div>
                            <div class="box col-start-3 col-end-5">4</div>
                            <div class="box col-start-5 col-end-7">5</div>
                        </div>

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
                                    data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!"
                                    role="button">Go
                                    to
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
