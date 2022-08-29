@extends('layouts.app')

@section('content')
    <div class="contents-center">
        <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-4 md:space-x-8 text-sm font-medium text-center sm:text-center w-50">
            <a class="text-white" href="{{ url('/gladiators') }}">Home</a>
            <a class="text-white" href="{{ url('/gladiators-fixtures') }}">Fixtures & Results</a>
            <a class="text-white" href="{{ url('/gladiators-squads') }}">Squads</a>
        </div>

        <header class="bg-red-800">
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
                <div class="sm:justify-between sm:items-center sm:flex">
                    <div class="text-center sm:text-center">
                        <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12"
                            style="color: hsl(49, 81%, 95%)">
                            Squads <br />
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container mt-6">
            <div x-data="
                {
                    openTab: 1,
                    activeClasses: 'text-lg p-4 -mb-px border-b border-current text-amber-500 underline underline-offset-8',
                    inactiveClasses: 'text-lg p-4 -mb-px border-b border-transparent hover:text-amber-500',
                } " class="w-11/12 mb-14 mx-auto"
            >
                <div class="flex text-sm font-medium border-b border-gray-100 mx-auto">
                    <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-lg md:text-base py-3 px-4 lg:px-6 p-4 -mb-px border-b border-transparent hover:text-amber-500">
                    Meet the team
                    </a>
                    <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-lg md:text-base rounded-md py-3 px-4 lg:px-6 p-4 -mb-px border-b border-transparent hover:text-amber-500">
                    Stats
                    </a>
                </div>

                <!-- Tab Content -->
                <div class="justify-center h-screen">
                    <div x-show="openTab === 1" class="overflow-auto rounded bg-white shadow-md h-screen w-full text-body-color text-base p-6" style="display: none;">
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                            @for ($i = 0; $i < 11; $i++)
                            <div class="flex flex-col xs:bg-gray-900 overflow-hidden group relative rounded-2xl w-full">
                                <img class="object-cover w-full h-56 group-hover:scale-[2] group-hover:translate-y-12 duration-500" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" />
                                    <div
                                        class="absolute top-0 center-0 w-full h-0 flex flex-col justify-center items-center bg-gray-300 opacity-0 group-hover:h-full group-hover:opacity-80 duration-500">
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

                    <div x-show="openTab === 2" class="overflow-auto rounded bg-white shadow-md h-screen w-full text-body-color text-base p-6" style="display: none;">
                        <div class="">
                            <!-- Stats -->
                                <!-- component -->
                                <div class="overflow-hidden rounded-md bg-gray-100 p-2 shadow-md flex flex-col">
                                        <!-- <h1 class="mt-2 text-center text-2xl text-gray-500 px-5 py-0">Team Stats</h1> -->
                                        <br>
                                    <div class="overflow-auto flex flex-col md:flex-row">
                                        <!-- Games Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl border-solid border-2 border-blue-200">
                                            <div class="py-5 xs:px-1 text-center">
                                                <p class="text-5xl text-blue-400">10</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Total Goals</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Goals Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">10</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Total Games</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Goals per game Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">10</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Goals p/game<h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Shots per game Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">20</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Shots p/game<h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Shots per game Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">20</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Expected Goals</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Shots per game Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">20</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Expected Goals</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Average Possession Stat Card -->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">12%</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Average Possession</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Win Percentage-->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">5%</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">Win Percentage</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- FIFA Ranking-->
                                        <div class="flex md:block px-5 py-2 mx-2 my-5 w-full rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <div class="py-5 text-center">
                                                <p class="text-5xl text-blue-400">105th</p>
                                            </div>
                                            <h3 class="mx-auto mt-2 align-middle text-center text-xl text-gray-500">FIFA Ranking</h3>
                                        </div>
                                        <!-- End Stat Card -->
                                    </div>
                                </div>
                                <!-- end component -->

                                    <div class="shadow-md rounded-md p-4 my-2 bg-gray-100 grid gap-2 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                                        <!-- Appearances -->
                                        <div>
                                            <div class="relative block p-8 border bg-white border-gray-100 shadow-md mx-2 border border-gray-200 rounded-xl hover:scale-105 hover:shadow-amber-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-amber-200 duration-100">
                                                <!-- <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                                                    4.3
                                                </span> -->

                                                <div class="mt-4 text-gray-500">
                                                    <div class="flex flex-col mb-2">
                                                        <svg class="w-8 h-8 sm:w-10 sm:h-10 my-auto mx-auto fill-amber-300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
                                                            <g id="XMLID_822_">
                                                                <g>
                                                                    <g>
                                                                        <path d="M393,248c33.084,0,60-26.916,60-60s-26.916-60-60-60s-60,26.916-60,60S359.916,248,393,248z M393,158
                                                                            c16.542,0,30,13.458,30,30s-13.458,30-30,30s-30-13.458-30-30S376.458,158,393,158z"/>
                                                                        <path d="M393,278c-19.024,0-37.362,5.549-53.034,15.814C317.021,267.015,282.962,250,245,250
                                                                            c-37.962,0-72.021,17.015-94.966,43.814C134.362,283.549,116.024,278,97,278c-53.486,0-97,43.514-97,97v15h230v30h30v-30h230v-15
                                                                            C490,321.514,446.486,278,393,278z M120.903,360H31.692c6.829-29.747,33.519-52,65.308-52c13.039,0,25.614,3.774,36.386,10.765
                                                                            C126.978,331.432,122.666,345.329,120.903,360z M230,360h-78.812c6.435-40.393,38.419-72.377,78.812-78.812V360z M260,360
                                                                            v-78.812c40.393,6.435,72.377,38.418,78.812,78.812H260z M369.097,360c-1.763-14.671-6.075-28.569-12.483-41.235
                                                                            C367.386,311.774,379.961,308,393,308c31.789,0,58.479,22.253,65.308,52H369.097z"/>
                                                                        <path d="M97,248c33.084,0,60-26.916,60-60s-26.916-60-60-60s-60,26.916-60,60S63.916,248,97,248z M97,158
                                                                            c16.542,0,30,13.458,30,30s-13.458,30-30,30s-30-13.458-30-30S80.458,158,97,158z"/>
                                                                        <path d="M245,220c41.355,0,75-33.645,75-75s-33.645-75-75-75c-41.355,0-75,33.645-75,75S203.645,220,245,220z M245,100
                                                                            c24.813,0,45,20.187,45,45s-20.187,45-45,45s-45-20.187-45-45S220.187,100,245,100z"/>
                                                                    </g>
                                                                </g>
                                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                        </svg>
                                                        <h5 class=" my-auto mx-auto text-xl font-bold text-gray-900">Appearances</h5>
                                                    </div>
                                                    <!-- Players List -->
                                                    <div class="flex flex-col h-48 overflow-auto">
                                                        @for($i = 0; $i < 11; $i++)
                                                            <div class="my-1 mx-auto p-2 w-full flex flex-row shadow-sm border boder-slate-200 bg-white">
                                                                <h3 class="mx-auto my-auto text-md text-black hover:text-amber-300">Player Name</h3>
                                                                <p class="mx-auto text-2xl text-blue-300">10</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Goals -->
                                        <div>
                                            <div class="relative block p-8 border bg-white border-gray-100 shadow-md mx-2 border border-gray-200 rounded-xl hover:scale-105 hover:shadow-amber-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-amber-200 duration-100">
                                                <!-- <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                                                    4.3
                                                </span> -->

                                                <div class="mt-4 text-gray-500">
                                                    <div class="flex flex-col mb-2">
                                                        <svg class="w-8 h-8 sm:w-10 sm:h-10 my-auto mx-auto fill-amber-300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
                                                            <g id="XMLID_838_">
                                                                <g>
                                                                    <path d="M50,0v15c0,34.836,9.303,69.031,26.903,98.887c15.605,26.474,37.351,48.954,63.195,65.484
                                                                        c2.093,50.835,40.495,92.454,89.902,99.553V310c-35.841,0-65,29.159-65,65v25h-45v90h250v-90h-45v-25c0-35.841-29.159-65-65-65
                                                                        v-31.076c49.407-7.099,87.809-48.718,89.902-99.553c25.844-16.529,47.589-39.01,63.195-65.484C430.697,84.031,440,49.836,440,15V0
                                                                        H50z M140,142.238C106.287,114.32,84.723,73.826,80.689,30H140V142.238z M340,430v30H150v-30H340z M295,375v25H195v-25
                                                                        c0-19.299,15.701-35,35-35h30C279.299,340,295,355.701,295,375z M320,175c0,41.355-33.645,75-75,75c-41.355,0-75-33.645-75-75V30
                                                                        h150V175z M350,142.238V30h59.311C405.277,73.826,383.713,114.32,350,142.238z"/>
                                                                </g>
                                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                        </svg>

                                                        <h5 class="my-auto mx-auto text-xl font-bold text-gray-900">Goals</h5>
                                                    </div>
                                                    <!-- Players List -->
                                                    <div class="flex flex-col h-48 overflow-auto">
                                                        @for($i = 0; $i < 11; $i++)
                                                            <div class="my-1 mx-auto p-2 w-full flex flex-row shadow-sm border boder-slate-200 bg-white">
                                                                <h3 class="mx-auto my-auto text-md text-black hover:text-amber-300">Player Name</h3>
                                                                <p class="mx-auto text-2xl text-blue-300">10</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Assists -->
                                        <div>
                                            <div class="relative block p-8 border bg-white border-gray-100 shadow-md mx-2 border border-gray-200 rounded-xl hover:scale-105 hover:shadow-amber-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-amber-200 duration-100">
                                                <!-- <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                                                    4.3
                                                </span> -->

                                                <div class="mt-4 text-gray-500">
                                                    <div class="flex flex-col mb-2">
                                                        <svg class="w-8 h-8 sm:w-10 sm:h-10 my-auto mx-auto fill-amber-300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path d="M499.423,176.581c-10.943-33.567-28.44-64.033-52.004-90.554c-36.568-41.158-86.227-69.866-139.829-80.836
                                                                        c-33.735-6.905-69.447-6.905-103.18,0C150.81,16.16,101.151,44.869,64.58,86.027c-23.564,26.52-41.061,56.987-52.004,90.554
                                                                        C4.231,202.178,0,228.894,0,255.989s4.231,53.811,12.577,79.408c10.947,33.576,28.45,64.05,52.023,90.574
                                                                        c36.564,41.142,86.21,69.842,139.795,80.811c16.873,3.454,34.234,5.206,51.605,5.206s34.732-1.751,51.605-5.206
                                                                        c53.586-10.97,103.232-39.67,139.795-80.811c23.573-26.524,41.075-56.998,52.023-90.574C507.769,309.8,512,283.083,512,255.989
                                                                        S507.769,202.178,499.423,176.581z M415.464,82.602h-59.217l-29.703-51.448C359.406,41.519,389.952,59.192,415.464,82.602z
                                                                        M212.964,24.308c28.229-5.206,57.839-5.206,86.073,0l39.54,68.487l-43.416,74.981h-78.323l-43.416-74.981L212.964,24.308z
                                                                        M334.305,255.989l-39.153,67.814h-78.306l-39.153-67.814l39.153-67.815h78.306L334.305,255.989z M185.457,31.154l-29.704,51.448
                                                                        H96.537C122.049,59.192,152.594,41.519,185.457,31.154z M76.844,103h78.917l43.416,74.982l-39.148,67.807H72.184L33.41,178.629
                                                                        C43.049,150.853,57.639,125.45,76.844,103z M20.398,255.989c0-16.867,1.78-33.572,5.308-49.904l28.812,49.904l-28.812,49.904
                                                                        C22.178,289.56,20.398,272.856,20.398,255.989z M33.409,333.348l38.774-67.161h87.846l39.149,67.808l-43.416,75.001H76.86
                                                                        C57.648,386.544,43.052,361.133,33.409,333.348z M96.559,429.395h59.194l29.689,51.422
                                                                        C152.595,470.456,122.062,452.792,96.559,429.395z M299.048,487.668c-28.238,5.208-57.858,5.208-86.097,0l-39.529-68.465
                                                                        l43.416-75.001h78.323l43.416,75.001L299.048,487.668z M326.558,480.818l29.689-51.422h59.194
                                                                        C389.938,452.792,359.405,470.456,326.558,480.818z M435.14,408.997h-78.9l-43.417-75.001l39.149-67.808h23.359
                                                                        c5.632,0,10.199-4.566,10.199-10.199c0-5.633-4.567-10.199-10.199-10.199h-23.359l-39.148-67.807L356.24,103h78.917
                                                                        c19.205,22.449,33.795,47.853,43.435,75.628l-41.719,72.26c-1.822,3.156-1.822,7.044,0,10.199l41.719,72.26
                                                                        C468.948,361.132,454.352,386.544,435.14,408.997z M486.294,305.892l-28.812-49.904l28.812-49.904
                                                                        c3.528,16.332,5.308,33.037,5.308,49.904C491.602,272.855,489.822,289.56,486.294,305.892z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M411.718,245.789h-2.73c-5.632,0-10.199,4.566-10.199,10.199c0,5.633,4.567,10.199,10.199,10.199h2.73
                                                                        c5.632,0,10.199-4.566,10.199-10.199C421.918,250.356,417.35,245.789,411.718,245.789z"/>
                                                                </g>
                                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                        </svg>

                                                        <h5 class="my-auto mx-auto text-xl font-bold text-gray-900">Assists</h5>
                                                    </div>
                                                    <!-- Players List -->
                                                    <div class="flex flex-col h-48 overflow-auto">
                                                        @for($i = 0; $i < 11; $i++)
                                                            <div class="my-1 mx-auto p-2 w-full flex flex-row shadow-sm border boder-slate-200 bg-white">
                                                                <h3 class="mx-auto my-auto text-md text-black hover:text-amber-300">Player Name</h3>
                                                                <p class="mx-auto text-2xl text-blue-300">10</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tackles -->
                                        <div>
                                            <div class="relative block p-8 border bg-white border-gray-100 shadow-md mx-2 border border-gray-200 rounded-xl hover:scale-105 hover:shadow-amber-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-amber-200 duration-100">
                                                <!-- <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                                                    4.3
                                                </span> -->

                                                <div class="mt-4 text-gray-500">
                                                    <div class="flex flex-col mb-2">
                                                        <svg class="w-8 h-8 sm:w-10 sm:h-10 my-auto mx-auto fill-amber-300" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                                            <style type="text/css">
                                                                .st0{fill:none;stroke:#fcd34d;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                                                            </style>
                                                            <circle class="st0" cx="23" cy="7" r="3"/>
                                                            <path class="st0" d="M8,10l2.8-2.8C12,6,14,6,15.2,7.2l7.9,7.9c1.1,1.1,2.8,1.2,4.1,0.2L30,13"/>
                                                            <path class="st0" d="M17,10l-4.7,4.7c-1.5,1.5-1,4.2,1,5l3.9,1.5c1.1,0.4,1.9,1.5,1.9,2.7v6"/>
                                                            <path class="st0" d="M14,20l-2.6,2.6c-0.8,0.8-2.1,0.8-2.8,0L5,19"/>
                                                            <line class="st0" x1="16" y1="18" x2="21" y2="13"/>
                                                        </svg>

                                                        <h5 class="my-auto mx-auto text-xl font-bold text-gray-900">Tackles</h5>
                                                    </div>
                                                    <!-- Players List -->
                                                    <div class="flex flex-col h-48 overflow-auto">
                                                        @for($i = 0; $i < 11; $i++)
                                                            <div class="my-1 mx-auto p-2 w-full flex flex-row shadow-sm border boder-slate-200 bg-white">
                                                                <h3 class="mx-auto my-auto text-md text-black hover:text-amber-300">Player Name</h3>
                                                                <p class="mx-auto text-2xl text-blue-300">10</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Interceptions -->
                                        <div>
                                            <div class="relative block p-8 border bg-white border-gray-100 shadow-md mx-2 border border-gray-200 rounded-xl hover:scale-105 hover:shadow-amber-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-amber-200 duration-100">
                                                <!-- <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                                                    4.3
                                                </span> -->

                                                <div class="mt-4 text-gray-500">
                                                    <div class="flex flex-col mb-2">
                                                        <svg class="w-8 h-8 sm:w-10 sm:h-10 my-auto mx-auto fill-amber-300" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="#fcd34d"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <line x1="18" y1="6" x2="6" y2="18" />
                                                            <line x1="6" y1="6" x2="18" y2="18" />
                                                        </svg>

                                                        <h5 class="my-auto mx-auto text-xl font-bold text-gray-900">Interceptions</h5>
                                                    </div>
                                                    <!-- Players List -->
                                                    <div class="flex flex-col h-48 overflow-auto">
                                                        @for($i = 0; $i < 11; $i++)
                                                            <div class="my-1 mx-auto p-2 w-full flex flex-row shadow-sm border boder-slate-200 bg-white">
                                                                <h3 class="mx-auto my-auto text-md text-black hover:text-amber-300">Player Name</h3>
                                                                <p class="mx-auto text-2xl text-blue-300">10</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Clearances -->
                                        <div>
                                            <div class="relative block p-8 border bg-white border-gray-100 shadow-md mx-2 border border-gray-200 rounded-xl hover:scale-105 hover:shadow-amber-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-amber-200 duration-100">
                                                <!-- <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                                                    4.3
                                                </span> -->

                                                <div class="mt-4 text-gray-500">
                                                    <div class="flex flex-col mb-2">
                                                        <svg class="w-8 h-8 sm:w-10 sm:h-10 my-auto mx-auto fill-amber-300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path d="M469.163,101.992H42.837C19.216,101.992,0,121.208,0,144.829v254.98c0,5.633,4.566,10.199,10.199,10.199h41.603
                                                                        c5.633,0,10.199-4.566,10.199-10.199v-39.777h59.37v21.418c0,5.633,4.566,10.199,10.199,10.199
                                                                        c5.633,0,10.199-4.566,10.199-10.199v-21.418h62.555v21.418c0,5.633,4.566,10.199,10.199,10.199
                                                                        c5.633,0,10.199-4.566,10.199-10.199v-21.418h62.556v21.418c0,5.633,4.567,10.199,10.199,10.199s10.199-4.566,10.199-10.199
                                                                        v-21.418h62.555v21.418c0,5.633,4.567,10.199,10.199,10.199s10.199-4.566,10.199-10.199v-21.418h5.1
                                                                        c5.632,0,10.199-4.566,10.199-10.199c0-5.633-4.567-10.199-10.199-10.199h-5.1v-28.558H450v88.733
                                                                        c0,5.633,4.567,10.199,10.199,10.199h41.602c5.632,0,10.199-4.566,10.199-10.199v-254.98
                                                                        C512,121.208,492.784,101.992,469.163,101.992z M121.371,339.633h-59.37v-28.558h59.37V339.633z M121.371,290.677h-59.37v-28.558
                                                                        h59.37V290.677z M121.371,241.721h-59.37v-28.558h59.37V241.721z M121.371,192.765h-59.37v-27.538h59.37V192.765z
                                                                        M204.324,339.633h-62.555v-28.558h62.555V339.633z M204.324,290.677h-62.555v-28.558h62.555V290.677z M204.324,241.721
                                                                        L204.324,241.721h-62.555v-28.558h62.555V241.721z M204.324,192.765L204.324,192.765h-62.555v-27.538h62.555V192.765z
                                                                        M287.278,339.633h-62.556v-28.558h62.556V339.633z M287.278,290.677h-62.556v-28.558h62.556V290.677z M287.278,241.721h-62.556
                                                                        v-28.558h62.556V241.721z M287.278,192.765h-62.556v-27.538h62.556V192.765z M370.231,339.633h-62.555v-28.558h62.555V339.633z
                                                                        M370.231,290.677h-62.555v-28.558h62.555V290.677z M370.231,241.721h-62.555v-28.558h62.555V241.721z M370.231,192.765h-62.555
                                                                        v-27.538h62.555V192.765z M450,290.677H390.63v-28.558H450V290.677z M450,241.721H390.63v-28.558H450V241.721z M450,192.765
                                                                        H390.63v-27.538H450V192.765z M491.602,389.61h-21.203V161.425c0-9.151-7.445-16.596-16.596-16.596H58.199
                                                                        c-9.151,0-16.596,7.445-16.596,16.596V389.61H20.398V144.829c0-12.373,10.066-22.438,22.438-22.438h426.327
                                                                        c12.373,0,22.438,10.066,22.438,22.438V389.61z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M428.367,339.633h-3.06c-5.632,0-10.199,4.566-10.199,10.199c0,5.633,4.567,10.199,10.199,10.199h3.06
                                                                        c5.632,0,10.199-4.566,10.199-10.199C438.566,344.2,433.999,339.633,428.367,339.633z"/>
                                                                </g>
                                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                        </svg>

                                                        <h5 class="my-auto mx-auto text-xl font-bold text-gray-900">Clearances</h5>
                                                    </div>
                                                    <!-- Players List -->
                                                    <div class="flex flex-col h-48 overflow-auto">
                                                        @for($i = 0; $i < 11; $i++)
                                                            <div class="my-1 mx-auto p-2 w-full flex flex-row shadow-sm border boder-slate-200 bg-white">
                                                                <h3 class="mx-auto my-auto text-md text-black hover:text-amber-300">Player Name</h3>
                                                                <p class="mx-auto text-2xl text-blue-300">10</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!-- End Stats -->
                        </div>
                    </div>
                </div>
            </div>
            <script src="//unpkg.com/alpinejs" defer></script>
        </div>
    </div>
@endsection
