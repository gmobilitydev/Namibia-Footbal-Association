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

        <div x-data="{
            open: false,
            openClasses: 'w-48 h-24 relative space-y-1 p-4 mr-10',
            closedClasses: 'w-96 h-24 relative space-y-1 p-4 mr-10'
        }"
            class="container border-2 border-green-500 justify-center contents-center mx-auto w-screen px-6 py-1 flex flex-col md:flex-row">
            <div @click="open = ! open" class="flex flex-col">
            @for ($i = 0; $i < 5; $i++)

                <div class="container border-2 border-red-500 justify-between items-center mr-5 mx-2 px-2">

                    <div class="mt-4">
                        <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                            <div class="group relative flex cursor-pointer justify-between rounded-xl bg-blue-100 before:absolute before:inset-y-0 before:right-0 before:w-full before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-blue-400 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                            <div :class="open === true ? openClasses : closedClasses">
                                <h4 class="text-lg text-gray-900 text-left">Brave Warriors</h4>
                                <div class="relative h-6 text-gray-800 text-sm">
                                <!-- <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Captain: Team Captain</span> -->
                                <a href="" class="flex items-center gap-3 lg:invisible absolute left-1 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                    <span>See the team </span>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg> -->
                                    <!--  -->
                                </a>
                                </div>
                            </div>
                            <!-- <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="https://raw.githubusercontent.com/Meschacirung/Tailus-website/main/public/images/singers/Michael-Jackson.png" alt="" /> -->
                            <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 lg:group-hover:scale-[1.1]" src="{{ asset('assets/logos/logo.jpg') }}" alt="logo">
                            </div>
                        </div>
                    </div>

                </div>

                @endfor


            </div>
            <div x-show="open" @click.outside="open = true" class="my-5 contents-center rounded-md w-full xs:h-45 lg:h-5/6 bg-red-200 ml-4">
                <h4 class="p-4 align-center text-lg text-slate-400">Brave Warriors</h4>

                <!-- Tabs Component -->
                <!-- component -->

                <div x-data="
                    {
                    openTab: 1,
                    activeClasses: 'p-4 -mb-px border-b border-current text-amber-500 underline underline-offset-8',
                    inactiveClasses: 'p-4 -mb-px border-b border-transparent hover:text-amber-500',
                    }
                    " class="w-11/12 mb-14">
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
                        <div x-show="openTab === 1" class="rounded bg-pink-300 h-full xs:h-48 w-full p-6 overflow-auto" style="display: none;">
                            <div class="grid gap-4 md:grid-cols-1 lg:grid-cols-2">

                                @for ($i = 0; $i < 4; $i++)
                                <div class="xs:flex flex-row md:block xs:bg-gray-900 overflow-hidden group relative rounded-2xl">
                                    <img class="object-cover w-full xs:h-24 xs:w-24 md:h-56 lg:group-hover:h-full duration-500" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" />
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
                                            <a class="text-black hover:text-white mt-5 px-8 py-3 rounded-md bg-slate-400 hover:bg-amber-500 duration-300" href="#">View Full Stats</a>
                                        </div>
                                    <div class="p-4 bg-gray-900 group-hover:invisible duration-500 xs:h-24">
                                        <h5 class="text-lg text-white">Player Name</h5>

                                        <p class="mt-1 text-xs text-gray-500">Position</p>

                                    </div>
                                </div>
                                @endfor

                            </div>
                        </div>
                        <div x-show="openTab === 2" class="overflow-auto rounded bg-orange-200 h-screen w-full text-body-color text-base leading-relaxed p-6" style="display: none;">
                            <div class="">
                                <!-- Stats -->
                                <!-- component -->
                                <div class="overflow-hidden rounded-md bg-gray-100 px-2 py-5 shadow-md flex flex-col lg:grid grid-cols-3 gap-3">

                                    <!-- Games Stat Card -->
                                        <div class="pt-2 mx-3 w-48 overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <svg class="fill-blue-400 h-20 m-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.001 297.001" style="enable-background:new 0 0 297.001 297.001;" xml:space="preserve">
                                                <path d="M286.184,92.872C255.511,16.952,168.79-19.857,92.872,10.816C16.953,41.489-19.857,128.208,10.816,204.129
                                                c23.334,57.755,79.093,92.876,137.869,92.872c18.486-0.002,37.279-3.477,55.444-10.816
                                                C280.048,255.512,316.858,168.792,286.184,92.872z M219.144,223.406l-28.4-30.05l16.013-49.283l39.5-22.995l30.313,35.832
                                                c-1.17,17.388-5.878,34.295-13.679,49.681L219.144,223.406z M77.857,223.406l-43.828-16.847c-1.637-3.233-3.157-6.555-4.539-9.975
                                                c-5.253-13.003-8.208-26.372-9.072-39.658l30.326-35.848l39.499,22.995l16.013,49.283L77.857,223.406z M96.03,31.367l42.4,16.094
                                                v48.481l-40.406,29.356l-39.377-22.924V56.848C69.23,46.446,81.781,37.742,96.03,31.367z M238.353,56.854v45.521l-39.378,22.924
                                                L158.57,95.942V47.46l42.324-16.065C214.687,37.563,227.404,46.15,238.353,56.854z M38.507,104.359l-15.754,18.622
                                                c2.927-14.308,8.265-28.028,15.754-40.533V104.359z M124.997,185.858L110.47,141.15l38.03-27.631l38.029,27.631l-14.526,44.708
                                                H124.997z M274.318,123.064l-15.824-18.705V82.33c3.424,5.698,6.45,11.732,9.018,18.087
                                                C270.524,107.873,272.775,115.451,274.318,123.064z M169.248,21.864L148.5,29.74l-20.822-7.903
                                                C141.646,19.538,155.676,19.618,169.248,21.864z M54.652,236.063l19.115,7.348l9.739,15.707
                                                C72.913,252.91,63.171,245.173,54.652,236.063z M115.494,272.487l-22.309-35.979l28.833-30.51h52.964l28.833,30.51l-22.353,36.049
                                                C159.312,278.46,136.618,278.137,115.494,272.487z M213.424,259.231l9.81-15.821l19.087-7.337
                                                C234.002,245.013,224.321,252.851,213.424,259.231z"/>
                                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                            <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">Total Goals</h1>
                                            <div class="space-x-4 bg-gray-100 py-5 text-center">
                                                <p class="text-5xl text-blue-400">10</p>
                                            </div>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Goals Stat Card -->
                                        <div class="pt-2 mx-3 w-48 overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <svg class="fill-blue-400 h-20 m-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.001 297.001" style="enable-background:new 0 0 297.001 297.001;" xml:space="preserve">
                                                <path d="M286.184,92.872C255.511,16.952,168.79-19.857,92.872,10.816C16.953,41.489-19.857,128.208,10.816,204.129
                                                c23.334,57.755,79.093,92.876,137.869,92.872c18.486-0.002,37.279-3.477,55.444-10.816
                                                C280.048,255.512,316.858,168.792,286.184,92.872z M219.144,223.406l-28.4-30.05l16.013-49.283l39.5-22.995l30.313,35.832
                                                c-1.17,17.388-5.878,34.295-13.679,49.681L219.144,223.406z M77.857,223.406l-43.828-16.847c-1.637-3.233-3.157-6.555-4.539-9.975
                                                c-5.253-13.003-8.208-26.372-9.072-39.658l30.326-35.848l39.499,22.995l16.013,49.283L77.857,223.406z M96.03,31.367l42.4,16.094
                                                v48.481l-40.406,29.356l-39.377-22.924V56.848C69.23,46.446,81.781,37.742,96.03,31.367z M238.353,56.854v45.521l-39.378,22.924
                                                L158.57,95.942V47.46l42.324-16.065C214.687,37.563,227.404,46.15,238.353,56.854z M38.507,104.359l-15.754,18.622
                                                c2.927-14.308,8.265-28.028,15.754-40.533V104.359z M124.997,185.858L110.47,141.15l38.03-27.631l38.029,27.631l-14.526,44.708
                                                H124.997z M274.318,123.064l-15.824-18.705V82.33c3.424,5.698,6.45,11.732,9.018,18.087
                                                C270.524,107.873,272.775,115.451,274.318,123.064z M169.248,21.864L148.5,29.74l-20.822-7.903
                                                C141.646,19.538,155.676,19.618,169.248,21.864z M54.652,236.063l19.115,7.348l9.739,15.707
                                                C72.913,252.91,63.171,245.173,54.652,236.063z M115.494,272.487l-22.309-35.979l28.833-30.51h52.964l28.833,30.51l-22.353,36.049
                                                C159.312,278.46,136.618,278.137,115.494,272.487z M213.424,259.231l9.81-15.821l19.087-7.337
                                                C234.002,245.013,224.321,252.851,213.424,259.231z"/>
                                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                            <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">Total Games</h1>
                                            <div class="space-x-4 bg-gray-100 py-5 text-center">
                                                <p class="text-5xl text-blue-400">10</p>
                                            </div>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Goals per game Stat Card -->
                                        <div class="pt-2 mx-3 w-48 overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <svg class="fill-blue-400 h-20 m-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.001 297.001" style="enable-background:new 0 0 297.001 297.001;" xml:space="preserve">
                                                <path d="M286.184,92.872C255.511,16.952,168.79-19.857,92.872,10.816C16.953,41.489-19.857,128.208,10.816,204.129
                                                c23.334,57.755,79.093,92.876,137.869,92.872c18.486-0.002,37.279-3.477,55.444-10.816
                                                C280.048,255.512,316.858,168.792,286.184,92.872z M219.144,223.406l-28.4-30.05l16.013-49.283l39.5-22.995l30.313,35.832
                                                c-1.17,17.388-5.878,34.295-13.679,49.681L219.144,223.406z M77.857,223.406l-43.828-16.847c-1.637-3.233-3.157-6.555-4.539-9.975
                                                c-5.253-13.003-8.208-26.372-9.072-39.658l30.326-35.848l39.499,22.995l16.013,49.283L77.857,223.406z M96.03,31.367l42.4,16.094
                                                v48.481l-40.406,29.356l-39.377-22.924V56.848C69.23,46.446,81.781,37.742,96.03,31.367z M238.353,56.854v45.521l-39.378,22.924
                                                L158.57,95.942V47.46l42.324-16.065C214.687,37.563,227.404,46.15,238.353,56.854z M38.507,104.359l-15.754,18.622
                                                c2.927-14.308,8.265-28.028,15.754-40.533V104.359z M124.997,185.858L110.47,141.15l38.03-27.631l38.029,27.631l-14.526,44.708
                                                H124.997z M274.318,123.064l-15.824-18.705V82.33c3.424,5.698,6.45,11.732,9.018,18.087
                                                C270.524,107.873,272.775,115.451,274.318,123.064z M169.248,21.864L148.5,29.74l-20.822-7.903
                                                C141.646,19.538,155.676,19.618,169.248,21.864z M54.652,236.063l19.115,7.348l9.739,15.707
                                                C72.913,252.91,63.171,245.173,54.652,236.063z M115.494,272.487l-22.309-35.979l28.833-30.51h52.964l28.833,30.51l-22.353,36.049
                                                C159.312,278.46,136.618,278.137,115.494,272.487z M213.424,259.231l9.81-15.821l19.087-7.337
                                                C234.002,245.013,224.321,252.851,213.424,259.231z"/>
                                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                            <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">Goals p/game</h1>
                                            <div class="space-x-4 bg-gray-100 py-5 text-center">
                                                <p class="text-5xl text-blue-400">10</p>
                                            </div>
                                        </div>
                                        <!-- End Stat Card -->
                                        <!-- Shots per game Stat Card -->
                                        <div class="pt-2 mx-3 w-48 overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-blue-200 hover:shadow-xl hover:border-solid hover:border-2 hover:border-blue-200">
                                            <svg class="fill-blue-400 h-20 m-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.001 297.001" style="enable-background:new 0 0 297.001 297.001;" xml:space="preserve">
                                                <path d="M286.184,92.872C255.511,16.952,168.79-19.857,92.872,10.816C16.953,41.489-19.857,128.208,10.816,204.129
                                                c23.334,57.755,79.093,92.876,137.869,92.872c18.486-0.002,37.279-3.477,55.444-10.816
                                                C280.048,255.512,316.858,168.792,286.184,92.872z M219.144,223.406l-28.4-30.05l16.013-49.283l39.5-22.995l30.313,35.832
                                                c-1.17,17.388-5.878,34.295-13.679,49.681L219.144,223.406z M77.857,223.406l-43.828-16.847c-1.637-3.233-3.157-6.555-4.539-9.975
                                                c-5.253-13.003-8.208-26.372-9.072-39.658l30.326-35.848l39.499,22.995l16.013,49.283L77.857,223.406z M96.03,31.367l42.4,16.094
                                                v48.481l-40.406,29.356l-39.377-22.924V56.848C69.23,46.446,81.781,37.742,96.03,31.367z M238.353,56.854v45.521l-39.378,22.924
                                                L158.57,95.942V47.46l42.324-16.065C214.687,37.563,227.404,46.15,238.353,56.854z M38.507,104.359l-15.754,18.622
                                                c2.927-14.308,8.265-28.028,15.754-40.533V104.359z M124.997,185.858L110.47,141.15l38.03-27.631l38.029,27.631l-14.526,44.708
                                                H124.997z M274.318,123.064l-15.824-18.705V82.33c3.424,5.698,6.45,11.732,9.018,18.087
                                                C270.524,107.873,272.775,115.451,274.318,123.064z M169.248,21.864L148.5,29.74l-20.822-7.903
                                                C141.646,19.538,155.676,19.618,169.248,21.864z M54.652,236.063l19.115,7.348l9.739,15.707
                                                C72.913,252.91,63.171,245.173,54.652,236.063z M115.494,272.487l-22.309-35.979l28.833-30.51h52.964l28.833,30.51l-22.353,36.049
                                                C159.312,278.46,136.618,278.137,115.494,272.487z M213.424,259.231l9.81-15.821l19.087-7.337
                                                C234.002,245.013,224.321,252.851,213.424,259.231z"/>
                                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                            <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">Shots p/game</h1>
                                            <div class="space-x-4 bg-gray-100 py-5 text-center">
                                                <p class="text-5xl text-blue-400">20</p>
                                            </div>
                                        </div>
                                        <!-- End Stat Card -->

                                    
                                </div>
                                <!-- end component -->
                                @for ($i = 0; $i < 4; $i++)

                                <div class="ml-3">
                                            <h5 class="text-lg font-medium text-white">Mark Mead</h5>
                                            <div class="flow-root">
                                                
                                            </div>
                                        </div>

                                @endfor
                                <!-- End Stats -->
                            </div>
                        </div>
                    </div>
                    <script src="//unpkg.com/alpinejs" defer></script>
                </div>
            </div>
        </div>

    </div>
@endsection
