@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center">

        <a class="text-white" href="{{ url('/about') }}">History</a>
        <a class="text-white" href="{{ url('/org') }}">Organisation</a>

    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        About Us
                    </h1>
                </div>


            </div>
        </div>

    </header>
    <div class="container px-6 mx-auto">
        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">


        </section>
        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">


            <!-- Section: Design Block -->
            <section>
                <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                    <div class="container mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                            <div class="mt-12 lg:mt-0">
                              
                            </div>
                            <div class="mb-12 lg:mb-0">
                                <div class="relative w-full overflow-hidden rounded-lg shadow-lg">
                                    <img src="{{ asset('assets/images/Bisey.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>

            </section>


        </div>
        <!-- Container for demo purpose -->

    </div>
@endsection
