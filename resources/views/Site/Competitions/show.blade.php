@extends('Site.Competitions.layouts.app')


@section('content')
    <div class="container px-6 mx-auto">

        <!-- Section: Design Block -->

        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style="background-position: 50%; background-image: url({{ asset('storage') }}/{{ $comp->image }}); height: 500px;">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(0, 0, 0, 0.26)">

                </div>
            </div>
            <header class="bg-yellow-300">
                <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
                    <div class="justify-between items-center flex">
                        <div class="text-center sm:text-center">
                            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                                <div class="wrap-countdown mercado-countdown"
                                    data-expire="{{ $comp->launch_date->format('Y/m/d h:i:s') }}">
                                </div>
                            </h1>
                        </div>

                    </div>
                </div>
            </header>


            <section class="overflow-hidden text-gray-700">




                <!-- Gallery Lightbox -->
                <!-- component -->
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-0 mx-auto">
                        <h2 class="text-3xl font-bold mb-12 py-4 text-center">Latest News</h2>
                        <div class="grid lg:grid-cols-4 gap-2">
                            @forelse ($comp->posts as $post)
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
                                        <div
                                            class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
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
                </section>



            </section>
        </section>


    </div>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
@endsection
