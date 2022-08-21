@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
        <a class="text-white" href="{{ url('/warriors') }}">Home</a>
        <a class="text-white" href="{{ url('/warriors-fixtures') }}">Fixtures & Results</a>
        <a class="text-white" href="{{ url('/warriors-squads') }}">Squads</a>

    </div>
    <header class="bg-sky-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12"
                        style="color: hsl(49, 81%, 95%)">
                        Brave Warriors <br />
                    </h1>
                </div>


            </div>
        </div>
    </header>
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40 background-radial-gradient">
            <style>
                .background-radial-gradient {
                    background-color: hsl(218, 41%, 15%);
                    background-image: radial-gradient(650px circle at 0% 0%,
                            hsl(218, 41%, 35%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%),
                        radial-gradient(1250px circle at 100% 100%,
                            hsl(218, 41%, 45%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%);
                }
            </style>

            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                style="color: hsl(218, 81%, 95%);">The Home of Mens Football <br /><span
                                    style="color: hsl(218, 81%, 75%);">For Namibia</span></h1>

                        </div>
                        <div class="mb-12 lg:mb-0">
                            <img src="{{ asset('assets/images/JoslinKamatuka.jpg') }}"
                                class="w-full rounded-lg shadow-lg hover:scale-110 transition duration-300 ease-in-out"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <section class="background-radial-gradient-2">
                <style>
                    .background-radial-gradient-2 {
                        background-color: hsl(0, 0%, 100%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(0, 0%, 95%) 15%,
                                hsl(0, 0%, 81%) 35%,
                                hsl(0, 0%, 84%) 75%,
                                hsl(47, 7%, 75%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(0, 0%, 100%) 15%,
                                hsl(0, 0%, 75%) 35%,
                                hsl(60, 4%, 84%) 75%,
                                hsl(46, 25%, 90%) 80%,
                                transparent 100%);
                    }
                </style>
                <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
                    <div class="space-y-2 text-center">
                        <h2 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12">Latest News</h2>

                    </div>
                    @forelse($latestPostList as $post)
                    @if($loop->first)
                    <a rel="noopener noreferrer" href="./warriors/ {{ $post->id }}"
                        class="relative overflow-hidden bg-no-repeat bg-cover max-w-xs block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-white">
                        <img src="{{ asset('storage') }}/{{ $post->image }}" alt=""
                            class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500 hover:scale-110 transition duration-300 ease-in-out">
                        <div class="p-6 space-y-2 lg:col-span-5">
                            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                            {{ $post->title }}</h3>
                            <span class="text-xs dark:text-gray-400">{{ $post->published_at->format('m/d/y') }}</span>
                            <p>{{ $post->content}}</p>
                        </div>
                    </a>
                    @else
                    <!-- <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3"> -->
                    <div class="flex justify-center flex-row">
                            <a rel="noopener noreferrer" href="./warriors/ {{ $post->id }}"
                                class="relative mx-2 overflow-hidden bg-no-repeat bg-cover max-w-xs max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-white">
                                <img role="presentation"
                                    class="object-cover w-full rounded h-44 dark:bg-white  hover:scale-110 transition duration-300 ease-in-out"
                                    src="{{ asset('storage') }}/{{ $post->image }}">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                    {{ $post->title }} </h3>
                                    <span class="text-xs dark:text-gray-400">{{ $post->published_at->format('m/d/y') }}</span>

                                </div>
                            </a>
                    <!-- </div> -->
                    @endif

                    @empty
                    <h1 class="text-3xl font-extrabold sm:text-5xl">
                        No Posts Found
                        <strong class="font-extrabold text-yellow-500 sm:block">
                            Stay Posted
                        </strong>
                    </h1>
                    @endforelse

                    </div>

                </div>
            </section>
            <section class="mb-40 background-radial-gradient-3">
                <style>
                    .background-radial-gradient-3 {
                        background-color: hsl(0, 100%, 40%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(0, 100%, 43%) 15%,
                                hsl(0, 83%, 57%) 35%,
                                hsl(0, 84%, 41%) 75%,
                                hsl(0, 83%, 36%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(0, 95%, 44%) 15%,
                                hsl(0, 100%, 39%) 35%,
                                hsl(0, 80%, 51%) 75%,
                                hsl(0, 90%, 35%) 80%,
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
                                    style="color: hsl(0, 0%, 15%);">Brave Warriors<br /><span
                                        style="color: hsl(0, 34%, 86%);">Team Kit </span></h1>
                                <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-zinc-900 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Go to
                                    store</a>

                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </section>
        <!-- Section: Design Block -->

        <section class="pt-0">
            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                style="color: hsl(0, 0%, 14%)">
                                Dressing Room Vibes With <br /><span style="color: hsl(0, 100%, 37%)">The Brave
                                    Warriors</span>
                            </h1>

                        </div>
                        <div class="mb-12 lg:mb-0">
                            <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                                style="padding-top: 56.25%">
                                <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
                                    src="https://www.youtube.com/embed/Cud8zY7XbDk" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>



    </div>
    <!-- Container for demo purpose -->
@endsection
