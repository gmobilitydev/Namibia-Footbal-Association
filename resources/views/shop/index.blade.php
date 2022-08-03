@extends('layouts.app')


@section('content')
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        Store
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-32 lg:items-cer entlg:flex">
            <div class="max-w-xl mx-auto text-center">



            </div>
        </div>
        <div class="pl-45">

        </div>
    </section>


    <div class="pl-500 grid grid-cols-4 gap-6">

        @for ($i = 0; $i < 10; $i++)
            <div class="card">
                <a class="relative block border border-gray-100" href="#">
                    <button class="absolute p-2 text-white bg-black rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img class="object-contain w-full h-56 lg:h-72" src="{{ asset('assets/images/nfa.png') }}"
                        alt="Build Your Own Drone" loading="lazy" />

                    <div class="p-6">
                        <strong class="inline-block px-3 py-1 text-xs font-medium bg-yellow-400">
                            New
                        </strong>

                        <h5 class="mt-4 text-lg font-bold">
                            Brave Warriors Training Kit
                        </h5>

                        <p class="mt-2 text-sm text-gray-700">
                            N$554.99
                        </p>

                        <button class="block w-full p-4 mt-4 text-sm font-medium bg-yellow-500 rounded-sm" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>
        @endfor
    </div>
@endsection
