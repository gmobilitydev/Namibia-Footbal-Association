@extends('Site.Competitions.layouts.app')


@section('content')
    <!-- ------------------------------------------------ CONTENT ------------------------------------------------ -->
    <div>
        <!-- Upcoming Event Section -->



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


                        @foreach ($comp->fixtures as $fixture)
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
