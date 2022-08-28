@extends('Site.Competitions.layouts.app')


@section('content')
    <div class="container px-6 mx-auto">

        <!-- Section: Design Block -->

        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style="background-position: 50%; background-image: url({{ asset('storage') }}/{{ $comp->posts->first()->image }}); height: 500px;">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(0, 0, 0, 0.75)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-bottom text-white px-6 py-6 md:py-0 md:px-12 max-w-[800px]">
                            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight leading-tight mb-12">
                                {{ $comp->posts->first()->title }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

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
@endsection
