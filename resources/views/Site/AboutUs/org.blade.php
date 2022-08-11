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
                        FIFA Normalisation Commitee
                    </h1>
                </div>

            </div>
        </div>
    </header>

    <div class="container bg-gray-50 mb-50">

        <div class="grid place-items-center ">
            <img class="w-13" src="{{ asset('assets/images/organisation/Bisey.png') }}">
        </div>

        <div class="grid grid-cols-4 gap-4">
            <img src="{{ asset('assets/images/organisation/Afra.png') }}">
            <img src="{{ asset('assets/images/organisation/Willy.png') }}">
            <img src="{{ asset('assets/images/organisation/Esmerelda.png') }}">
            <img src="{{ asset('assets/images/organisation/Cassius.png') }}">



        </div>

    </div>


    <section class="bg-yellow-300 mb-8 ">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8 ">
            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                Secretariat Management Team
            </h1>
        </div>

    </section>
    </div>
    <div class="container bg-gray-50">
        <div class="grid grid-cols-4 gap-4">
            <img src="{{ asset('assets/images/organisation/Afra.png') }}">
            <img src="{{ asset('assets/images/organisation/Willy.png') }}">
            <img src="{{ asset('assets/images/organisation/Esmerelda.png') }}">
            <img src="{{ asset('assets/images/organisation/Cassius.png') }}">
            <img src="{{ asset('assets/images/organisation/Cyril.png') }}">
            <img src="{{ asset('assets/images/organisation/Jacqueline.png') }}">
            <img src="{{ asset('assets/images/organisation/Jacquiline.png') }}">
            <img src="{{ asset('assets/images/organisation/Titus.png') }}">

        </div>

    </div>
@endsection
