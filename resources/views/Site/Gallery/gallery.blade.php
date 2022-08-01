@extends('layouts.app')


@section('content')
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
                style="
            background-position: 50%;
            background-image: url({{ asset('assets/images/galler.jpeg') }});
            height: 500px;
          ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(0, 0, 0, 0.75)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center text-white px-6 py-6 md:py-0 md:px-12 max-w-[800px]">
                            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight leading-tight mb-12">
                                Our<br /><span>Visual Stories</span>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Section: Design Block -->
            <section class="overflow-hidden text-gray-700">
                <div class="container px-5 mx-auto lg:pt-24 lg:px-24">
                    <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                        style="color: hsl(0, 0%, 15%)">
                        Gallery</h2>
                    <div class="flex flex-wrap -m-1 md:-m-2">
                        <div class="grid grid-cols-4 gap-4">

                            @for ($i = 0; $i < 10; $i++)
                                <div class="mb-4">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover max-w-xs">
                                        <img src="{{ asset('assets/images/caf.jpeg') }}"
                                            class="max-w-xs hover:scale-110 transition duration-300 ease-in-out hover:opacity-50 transition duration-300 ease-in-out bg-slate-900"
                                            alt="Louvre" />

                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

            </section>


        </section>

    </div>
    <!-- Container for demo purpose -->
@endsection
