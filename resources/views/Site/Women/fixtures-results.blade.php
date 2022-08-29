@extends('layouts.app')

@section('content')
    <div>
        <div
            class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-4 md:space-x-8 text-sm font-medium text-left sm:text-center w-50">
            <a class="text-white" href="{{ url('/gladiators') }}">Home</a>
            <a class="text-white" href="{{ url('/gladiators-fixtures') }}">Fixtures & Results</a>
            <a class="text-white" href="{{ url('/gladiators-squads') }}">Squads</a>

    </div>

    <!-- ------------------------------------------------ HEADER ------------------------------------------------ -->
    <header class="bg-red-800">
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
                    <div class="flex flex-col w-full bg-white rounded shadow-lg w-3/4 md:w-3/5 lg:1/2">

                        <!-- Event Image -->
                        <!-- <div class="w-full h-64 bg-top bg-cover rounded-t" style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)"></div> -->
                        <!-- End Event Image -->

                        <!-- Event Info -->
                        <div class="flex flex-col w-full lg:flex-row">
                            <div
                                class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded lg:flex-col lg:items-center lg:justify-center w-full lg:w-1/4">
                                <!-- <div class="lg:text-3xl">Month</div>
                                <div class="lg:text-6xl">day</div>
                                <div class="lg:text-xl">Time</div> -->
                            </div>

                            <div class="p-4 font-normal text-gray-800 lg:w-3/4">
                            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 text-center">
                                    No Upcoming Matches</h1>
                                <!-- <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 text-center">
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
                                </div> -->
                            </div>
                            <!-- End Event Image -->
                        </div>
                    </div>
                </div>
            </section>


            <!-- Fixtures Section -->


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
                        <div x-show="openTab === 1" style="display: none;" class="flex flex-col p-4">
                            <h2 class="text-3xl md:text-5xl font-bold text-center pb-2">
                                FIXTURES
                            </h2>

                            <div class="flex items-center justify-center h-full py-40 bg-gray-200">
                                <div class="container">
                                    <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
                                        <div class="text-center">
                                            <h2
                                                class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 text-xl sm:text-2xl md:text-5xl sm:leading-none lg:text-6xl">
                                                Brave Gladiators <span class="text-yellow-500">  Fixtures</span>
                                            </h2>
                                            <h3 class='text-xl md:text-3xl mt-10'>No Fixtures Available</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- results table -->
                        <div x-show="openTab === 2" style="display: none;" class="flex flex-col p-4">
                            <h2 class="text-3xl md:text-5xl font-bold text-center pb-2">
                                RESULTS
                            </h2>

                            <div class="flex items-center justify-center h-full py-40 bg-gray-200">
                                <div class="container">
                                    <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
                                        <div class="text-center">
                                            <h2
                                                class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 text-xl sm:text-2xl md:text-5xl sm:leading-none lg:text-6xl">
                                                Brave Gladiators <span class="text-yellow-500">  Results</span>
                                            </h2>
                                            <h3 class='text-xl md:text-3xl mt-10'>No Results Available</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <script src="//unpkg.com/alpinejs" defer></script>
        </div>
        <!-- -------------------------------------------- END OF CONTENT --------------------------------------------- -->



    </div>
@endsection
