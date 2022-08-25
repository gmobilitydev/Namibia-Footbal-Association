@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">


    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        News Center
                    </h1>
                </div>


            </div>
        </div>
    </header>

    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800 text-center">

            <h2 class="text-3xl font-bold mb-12 pb-4 text-center">Latest News</h2>
            <div class="grid lg:grid-cols-4 gap-2">
                @forelse ($latestPostList as $post)
                    <article class="flex flex-col dark:bg-gray-200">
                        <a rel="noopener noreferrer" href="./news/{{ $post->id }}"
                            aria-label="Te nulla oportere reprimique his dolorum">
                            <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                                src="{{ asset('storage') }}/{{ $post->image }}">
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a rel="noopener noreferrer" href="#"
                                aria-label="Te nulla oportere reprimique his dolorum"></a>
                            <a rel="noopener noreferrer" href="#"
                                class="text-xs tracking-wider uppercase hover:underline dark:text-slate-900"></a>
                            <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">{{ $post->title }}</h3>
                            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                                <span>{{ $post->published_at->format('m/d/y') }}</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="container px-6 mx-auto"></div>

                    <h1 class="text-3xl font-extrabold sm:text-5xl">
                        No Posts Found
                        <strong class="font-extrabold text-yellow-500 sm:block">
                            Stay Posted
                        </strong>
                    </h1>
                @endforelse





            </div>

            <div class="container py-6">
                {{ $latestPostList->onEachSide(5)->links() }}

            </div>



    </div>

    </section>
    <!-- Section: Design Block -->
    <section class="mb-32 background-radial-gradient">
        <style>
            .background-radial-gradient {
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

    </div>
    <!-- Container for demo purpose -->
@endsection
