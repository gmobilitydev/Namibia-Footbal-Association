@extends('layouts.app')

@section('content')
    <div>
        <div
            class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
            <a class="text-white" href="{{ url('/warriors') }}">Home</a>
            <a class="text-white" href="{{ url('/warriors-fixtures') }}">Fixtures & Results</a>
            <a class="text-white" href="{{ url('/warriors-squads') }}">Squads</a>

        </div>

        <!-- ------------------------------------------------ HEADER ------------------------------------------------ -->
        <header class="bg-sky-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
                <div class="sm:justify-between sm:items-center sm:flex">
                    <div class="text-center sm:text-left">
                        <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12"
                            style="color: hsl(49, 81%, 95%)">
                            Fixtures & Results <br />


                        </h1>
                    </div>


                </div>
            </div>
        </header>
        <!-- ------------------------------------------------ END OF HEADER ------------------------------------------------ -->

        <!-- ------------------------------------------------ CONTENT ------------------------------------------------ -->
        <div>
            <!-- Upcoming Event Section -->
            <section class="background-radial-gradient">
                <!-- component -->
                <!-- <div class="mx-auto bg-gray-700 h-screen flex items-center justify-center px-1"> -->
                <div class="py-5 mx-auto bg-gray-700 flex items-center justify-center px-1">
                    <div class="flex flex-col w-full bg-white rounded shadow-lg sm:w-3/4 md:w-3/5 lg:1/2">

                        <!-- Event Image -->
                        <!-- <div class="w-full h-64 bg-top bg-cover rounded-t" style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)"></div> -->
                        <!-- End Event Image -->

                        <!-- Event Info -->
                        <div class="flex flex-col w-full lg:flex-row">
                            <div
                                class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded lg:flex-col lg:items-center lg:justify-center w-full lg:w-1/4">
                                <div class="lg:text-3xl">Month</div>
                                <div class="lg:text-6xl">day</div>
                                <div class="lg:text-xl">Time</div>
                            </div>

                            <div class="p-4 font-normal text-gray-800 lg:w-3/4">
                                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 text-center">
                                    Next Match</h1>
                                <div class="flex flex-row mx-auto w-96">
                                    <div class="text-center">
                                        <img class="h-12 lg:h-24 mx-auto"
                                            src="{{ asset('assets/logos/squads/Namibia FA.png') }}">
                                        <p class="mt-2 text-xl font-bold">Team A </p>
                                    </div>
                                    <p class="m-auto text-5xl">vs</p>
                                    <div class="text-center">
                                        <img class="h-12 lg:h-24 mx-auto" src="{{ asset('assets/logos/squads/SKW.jpg') }}">
                                        <p class="mt-2 text-xl font-bold">Team A</p>
                                    </div>
                                </div>
                                <div class="items-center mt-4 text-gray-700 w-96 mx-auto">
                                    <p class="text-center">Event Location</p>
                                </div>
                            </div>
                            <!-- End Event Image -->
                        </div>
                    </div>
                </div>
            </section>


            <!-- Fixtures Section -->
            <section class="pt-10">

                <div x-data="{
                    openTab: 1,
                    activeClasses: 'text-xl p-4 -mb-px border-b border-current text-amber-500',
                    inactiveClasses: 'text-xl p-4 -mb-px border-b border-transparent hover:text-amber-500',
                }" class="w-5/12 mb-14 mx-auto items-center">
                    <div class="flex text-sm font-medium border-b border-gray-100">
                        <a href="javascript:void(0)" @click="openTab = 1"
                            :class="openTab === 1 ? activeClasses : inactiveClasses">
                            Fixtures
                        </a>
                        <a href="javascript:void(0)" @click="openTab = 2"
                            :class="openTab === 2 ? activeClasses : inactiveClasses">
                            Results
                        </a>
                    </div>


                    <!-- component -->
                    <div class="bg-white flex flex-col py-1 mx-2 bg-white flex items-center justify-center mx-auto mt-10">
                        <!-- fixture table -->
                        <div x-show="openTab === 1" style="display: none;" class="flex flex-col p-4 mx-5">
                            <h2 class="text-5xl font-bold text-center pb-2">
                                FIXTURES
                            </h2>

                            @foreach ($fixturesList as $competition)
                                <h2 class="text font-bold text-center pb-2">
                                    {{ $competition->name }}
                                </h2>
                                @foreach ($competition->fixtures as $fixture)
                                    <a href="#" class="group">
                                        <div
                                            class="bg-white flex flex-col md:flex-row border border-gray-200 shadow-md group-hover:shadow-amber-400 group-hover:scale-105 rounded-md my-4 py-4 px-6">
                                            <!-- Match details name, date, type -->
                                            <div class="my-2 md:m-auto w-full md:w-1/5">
                                                <p class="font-bold text-lg">{{ $fixture->date }}</p>
                                            </div>

                                            <!-- Fixture Center Teams and Time -->
                                            <div class="flex flex-row mx-auto w-96">
                                                <div class="text-center m-auto">
                                                    <img class="h-10 mx-auto"
                                                        src="{{ asset('storage') }}/{{ $fixture->home->image }}">
                                                    <p class="mt-2 text-xl font-bold">{{ $fixture->home->name }}</p>
                                                </div>
                                                <div class="m-auto">
                                                    <p class="m-auto text-xl">{{ $fixture->date }}</p>
                                                    <p class="m-auto text-5xl">vs</p>
                                                </div>
                                                <div class="text-center m-auto">
                                                    <img class="h-10 mx-auto"
                                                        src="{{ asset('storage') }}/{{ $fixture->away->image }}">
                                                    <p class="mt-2 text-xl font-bold">{{ $fixture->away->name }}</p>
                                                </div>
                                            </div>

                                            <!-- Button for more info -->
                                            <div class="flex flex-row h-1/2 my-auto">
                                                <button
                                                    class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-2 mx-auto my-4 md:mx-2 rounded ">Match
                                                    Info</button>
                                                <!-- <button class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-2 rounded">Buy Tickets</button> -->
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @endforeach


                        </div>


                        <!-- results table -->
                        <div x-show="openTab === 2" style="display: none;" class="flex flex-col p-4">
                            <h2 class="text-5xl font-bold text-center pb-2">
                                RESULTS
                            </h2>

                            @for ($i = 0; $i < 5; $i++)
                                <a href="#" class="group">
                                    <div
                                        class="flex flex-col md:flex-row border border-gray-200 bg-white shadow-md group-hover:shadow-amber-400 group-hover:scale-105 rounded-md my-4 py-4 px-6">
                                        <!-- Match details name, date, type -->
                                        <div class="my-2 md:m-auto w-full md:w-1/5">
                                            <p class="text-sm">Premier League</p>
                                            <p class="font-bold text-lg">ma/tch/date</p>
                                        </div>

                                        <!-- Fixture Center Teams and Time -->
                                        <div class="flex flex-row mx-auto w-96">
                                            <div class="text-center m-auto">
                                                <img class="h-10 mx-auto"
                                                    src="{{ asset('assets/logos/squads/Namibia FA.png') }}">
                                                <p class="mt-2 text-xl font-bold">Team A </p>
                                            </div>
                                            <div class="m-auto">
                                                <p class="m-auto text-xl">RES:ULT</p>
                                                <!-- <p class="m-auto text-5xl">vs</p>  -->
                                            </div>
                                            <div class="text-center m-auto">
                                                <img class="h-10 mx-auto" src="{{ asset('assets/logos/squads/SKW.jpg') }}">
                                                <p class="mt-2 text-xl font-bold">Team B</p>
                                            </div>
                                        </div>

                                        <!-- Button for more info -->
                                        <div class="flex flex-row h-1/2 my-auto">
                                            <button
                                                class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-2 mx-auto my-4 md:mx-2 rounded">Match
                                                Info</button>
                                            <!-- <button class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-2 rounded">Buy Tickets</button> -->
                                        </div>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
                <!-- end of fixture table -->
            </section>
            <script src="//unpkg.com/alpinejs" defer></script>
        </div>
        <!-- -------------------------------------------- END OF CONTENT --------------------------------------------- -->


    </div>
@endsection
