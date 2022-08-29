
@extends('Site.Competitions.layouts.app')


@section('content')
    <div class="w-screen">

        <!-- Section: Design Block -->

        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style=" background-image: url({{ asset('storage') }}/{{ $comp->image }}); height: 500px;">

            </div>
            <header class="bg-gradient-to-b from-orange-400 to-yellow-300">
                <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
                    <div class="grid justify-items-center">
                        <h1 class="font-bold text-white sm:text-3xl">
                            {{ $comp->name }} Starts In:


                        </h1>
                        <div class="justify-between items-center flex">
                            <div class="text-center sm:text-center">
                                <h1 class="text-2xl text-white sm:text-3xl">
                                    <div class="wrap-countdown mercado-countdown"
                                        data-expire="{{ $comp->launch_date->format('Y/m/d h:i:s') }}">
                                    </div>


                                </h1>
                                <div class="flex items-center text-white">
                                    <div class="container px-2  ">
                                        <h2 class="text-sm font-bold text-center">Days</h2>

                                    </div>
                                    <div class="container  px-2  ">
                                        <h2 class="text-sm font-bold  text-center">Hours</h2>

                                    </div>
                                    <div class="container  px-2  ">
                                        <h2 class="text-sm font-bold text-center">Mins</h2>

                                    </div>
                                    <div class="container  px-2 bprder-r">
                                        <h2 class="text-sm font-bold text-center">Secs</h2>

                                    </div>

                                </div>

                            </div>

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
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="container">
                                <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
                                    <div class="text-center">
                                        <h2
                                            class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                                            No<span class="text-yellow-500">Posts</span>
                                        </h2>
                                        <h3 class='text-xl md:text-3xl mt-10'>Found</h3>

                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforelse





                    </div>
                </section>



            </section>
        </section>


    </div>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
@endsection

