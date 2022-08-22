@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    </head>

    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        Gallery
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Container for demo purpose -->
    <div class="container px-6 mx-auto">

        <!-- Section: Design Block -->

        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style="background-position: 50%; background-image: url({{ asset('assets/images/galler.jpeg') }}); height: 500px;">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(0, 0, 0, 0.75)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center text-white px-6 py-6 md:py-0 md:px-12 max-w-[800px]">
                            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight leading-tight mb-12">
                                View Our<br /><span>Visual Stories</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <section class="overflow-hidden text-gray-700">
                <div class="container px-5 mx-auto lg:pt-24 lg:px-24">
                    <h2 class="text-center text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-24"
                        style="color: hsl(0, 0%, 15%)">
                        Gallery
                    </h2>
                </div>



                <!-- Gallery Lightbox -->
                <!-- component -->
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-0 mx-auto">
                        <div class="flex flex-col text-center w-full mb-20">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac
                                Heirloom</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon
                                brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't
                                heard of them man bun deep jianbing selfies heirloom.</p>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            @forelse ($images as $image)
                                <div class="lg:w-1/3 sm:w-1/2 p-4">
                                    <div class="flex relative">
                                        <img alt="gallery"
                                            class="absolute inset-0 w-full h-full object-cover object-center"
                                            src="{{ asset('storage') }}/{{ $image->image }}">
                                        <div
                                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">
                                                {{ $image->category }}</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                                {{ $image->title }}
                                            </h1>
                                            <p class="leading-relaxed">{{ $image->content }}</p>
                                        </div>
                                    </div>

                                </div>




                            @empty
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">No Images
                                    Found.</h1>
                            @endforelse
                            <div class="container py-6">
                                {{ $images->onEachSide(5)->links() }}

                            </div>




                        </div>



                    </div>
                </section>

            </section>
        </section>
    </div>

    </html>
@endsection
