@extends('layouts.app')

@section('content')
    <div class="contents-center">
        <div
            class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
            <a class="text-white" href="{{ url('/warriors') }}">Home</a>
            <a class="text-white" href="{{ url('/warriors-fixtures') }}">Fixtures & Results</a>
            <a class="text-white" href="{{ url('/warriors-squads') }}">Squads</a>
        </div>

        <header class="bg-sky-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
                <div class="sm:justify-between sm:items-center sm:flex">
                    <div class="text-center sm:text-left">
                        <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12"
                            style="color: hsl(49, 81%, 95%)">
                            Squads <br />
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- accordian -->
        <!-- component -->
        <!-- This is an example component -->

        <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-10 ml-20 mt-10" style="color:black">
            Group Stage Teams <br />
        </h1>

        <hr />

        <div class="m-40 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5">

            <a href="#">
                <div
                    class=" h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/logos/squads/AfricanStars.png') }}" alt="Africn Stars" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">African<br>Stars</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/logos/squads/Blue_Waters.png') }}" alt="Blue Waters" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">Blue<br>Waters</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/logos/squads/FC_Civics.png') }}" alt="FC Civivcs" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">FC<br>Civics</span>
                </div>
            </a>


            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/logos/squads/Namibia_FA.png') }}" alt="Namibia FA" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">Namibia<br>FA</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/logos/squads/Orlando_Pirates_SC.png') }}" alt="Orlando Pirates SC"
                        class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">Orlando<br>Pirates SC</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/logos/squads/Ramblersna.png') }}" alt="Ramblersna" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">Ramblersna<br></span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/images/Skw_logo.jpg') }}" alt="SKW" class="w-20 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">SKW<br></span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/images/eleven arrows.jpg') }}" alt="Eleven Arrows" class="w-20 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">Eleven<br>arrows</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/images/UNAM.png') }}" alt="Blue Waters" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">FC<br>UNAM</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/images/tura magic.jpg') }}" alt="Blue Waters" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">tura<br>Magic</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="h-44 w-32 my-5 bg-white-100 shadow-sm border border-grey rounded-xl flex flex-col justify-center shadow duration-300 hover:bg-gray-300 hover:shadow-xl">
                    <img src="{{ asset('assets/images/citizens.jpg') }}" alt="Blue Waters" class="w-24 mx-auto">
                    <span class="mt-6 text-sm ?leading-5 font-semibold text-center">tura<br>Magic</span>
                </div>
            </a>


        </div>

    </div>
@endsection
