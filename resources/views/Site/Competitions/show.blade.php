@extends('layouts.app')


@section('content')
    <!-- Component Code -->
    <header class="competition-banner">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <img src="{{ asset('storage') }}/{{ $comp->badge }}" />
                    <h1 class="text-2xl font-bold text-white sm:text-3xl">
                        {{ $comp->name }}
                    </h1>
                </div>



            </div>
        </div>
    </header>
    <header class="">
        <div class="flex items-center justify-between h-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">


            <div class="flex items-center justify-center flex-1">
                <nav class=" lg:text-gray-900 lg:tracking-wide lg:font-bold lg:text-xs lg:space-x-4 lg:flex">
                    <a href="/about"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-yellow-600 hover:border-current">
                        Home
                    </a>

                    <a href="/news"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-yellow-600 hover:border-current">
                        Matches
                    </a>

                    <a href="/products"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-yellow-600 hover:border-current">
                        Standings </a>

                    <a href="/contact"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-yellow-600 hover:border-current">
                        Teams
                    </a>
                </nav>


            </div>
    </header>




    <div class="relative h-screen w-full flex items-center justify-center text-center bg-cover bg-center"
        style="background-image:url({{ asset('assets/images/nnc.jpeg') }});">

        <main class="px-4 sm:px-6 lg:px-8 z-10">
            <div class="text-center">
                <h2
                    class="text-4xl tracking-tight leading-10 font-medium sm:text-5xl text-white sm:leading-none md:text-6xl">
                    <span class="text-white font-bold"></span>
                </h2>
                <p class="mt-3 text-white sm:mt-5 sm:text-md sm:max-w-xl sm:mx-auto md:mt-5">
                </p>

            </div>
        </main>


    </div>
@endsection
