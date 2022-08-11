@extends('layouts.app')

@section('content')
    <div class="contents-center">
        <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
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
        
        <div class="container">
    <div x-data="
        {
            openTab: 1,
            activeClasses: 'p-4 -mb-px border-b border-current text-amber-500 underline underline-offset-8',
            inactiveClasses: 'p-4 -mb-px border-b border-transparent hover:text-amber-500',
        } " class="w-11/12 mb-14">
        <div class="flex text-sm font-medium border-b border-gray-100">
            <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium py-3 px-4 lg:px-6 p-4 -mb-px border-b border-transparent hover:text-amber-500">
            Meet the team
            </a>
            <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 p-4 -mb-px border-b border-transparent hover:text-amber-500">
            Stats
            </a>

        </div>
        <!-- Tab Content -->
        <div class="justify-center">
            <div x-show="openTab === 1" class="overflow-auto rounded bg-pink-200 xs:h-96 md:h-[35rem] w-full text-body-color text-base p-6" style="display: none;">
                <div class="grid gap-4 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-4">

                    @for ($i = 0; $i < 4; $i++)
                    <div class="flex flex-col xs:bg-gray-900 overflow-hidden group relative rounded-2xl w-full">
                        <img class="object-cover w-full h-56 group-hover:scale-[2] group-hover:translate-y-12 duration-500" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" />
                            <div
                                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-gray-300 opacity-0 group-hover:h-full group-hover:opacity-80 duration-500">
                                <div class="flex flex-row">
                                    <div class="flex flex-col p-1">
                                        <h3 class="font-bold text-sm">SENIOR CAPS</h3>
                                        <p class="text-4xl text-center text-amber-500">10</p>
                                    </div>
                                    <div class="flex flex-col p-1">
                                        <h3 class="font-bold text-sm">SENIOR GOALS</h3>
                                        <p class="text-4xl text-center text-amber-500">11</p>
                                    </div>
                                </div>
                                <a class="text-black hover:text-white mt-5 px-4 py-3 rounded-md bg-slate-400 hover:bg-amber-500 duration-300" href="#">View Full Stats</a>
                            </div>
                        <div class="p-4 bg-gray-900 group-hover:invisible duration-500 xs:h-24">
                            <h5 class="text-lg text-white">Player Name</h5>

                            <p class="mt-1 text-xs text-gray-500">Position</p>

                        </div>
                    </div>
                    @endfor

                </div>
            </div>
            <div x-show="openTab === 2" class="overflow-auto rounded bg-orange-200 xs:h-96 md:h-[35rem] w-full text-body-color text-base p-6" style="display: none;">
                <div class="">
                    <!-- Stats -->
                    <!-- component -->
                    <div class="overflow-hidden rounded-md bg-gray-100 pr-2 pt-5 shadow-md flex flex-col">
                            <h1 class="mt-2 text-left text-2xl font-bold text-gray-500 px-5 py-3">Team Stats</h1>
                            <br>
                        <div class="overflow-auto flex flex-col md:flex-row">
                            <!-- Games Stat Card -->
                            <div class="xs:flex px-5 py-2 mx-2 my-3 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl border-solid border-2 border-blue-200">
                                <div class="py-5 xs:px-1 text-center">
                                    <p class="text-5xl text-blue-400">10</p>
                                </div>
                                <h3 class="mt-2 align-middle text-center text-2xl font-bold text-gray-500">Total Goals</h3>
                            </div>
                            <!-- End Stat Card -->
                            <!-- Goals Stat Card -->
                            <div class="xs:flex px-5 py-2 mx-2 my-3 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                <div class="py-5 text-center">
                                    <p class="text-5xl text-blue-400">10</p>
                                </div>
                                <h3 class="mt-2 align-middle text-center text-2xl font-bold text-gray-500">Total Games</h3>
                            </div>
                            <!-- End Stat Card -->
                            <!-- Goals per game Stat Card -->
                            <div class="xs:flex px-5 py-2 mx-2 my-3 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                <div class="py-5 text-center">
                                    <p class="text-5xl text-blue-400">10</p>
                                </div>
                                <h3 class="mt-2 align-middle text-center text-2xl font-bold text-gray-500">Goals p/game<h3>
                            </div>
                            <!-- End Stat Card -->
                            <!-- Shots per game Stat Card -->
                            <div class="xs:flex px-5 py-2 mx-2 my-3 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                <div class="py-5 text-center">
                                    <p class="text-5xl text-blue-400">20</p>
                                </div>
                                <h3 class="mt-2 align-middle text-center text-2xl font-bold text-gray-500">Shots p/game<h3>
                            </div>
                            <!-- End Stat Card -->
                            <!-- Shots per game Stat Card -->
                            <div class="xs:flex px-5 py-2 mx-2 my-3 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                <div class="py-5 text-center">
                                    <p class="text-5xl text-blue-400">20</p>
                                </div>
                                <h3 class="mt-2 align-middle text-center text-2xl font-bold text-gray-500">Expected Goals</h3>
                            </div>
                            <!-- End Stat Card -->
                            <!-- Shots per game Stat Card -->
                            <div class="xs:flex px-5 py-2 mx-2 my-3 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                <div class="py-5 text-center">
                                    <p class="text-5xl text-blue-400">20</p>
                                </div>
                                <h3 class="mt-2 align-middle text-center text-2xl font-bold text-gray-500">Expected Goals</h3>
                            </div>
                            <!-- End Stat Card -->
                        </div>
                    </div>
                    <!-- end component -->
                    
                    <!-- End Stats -->
                </div>
            </div>
        </div>
        <script src="//unpkg.com/alpinejs" defer></script>
    </div>
</div>
@endsection