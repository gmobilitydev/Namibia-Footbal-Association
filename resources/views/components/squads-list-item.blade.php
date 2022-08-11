<div>
            <div x-data="{ open: false }" class=" bg-gray-50 items-center justify-center flex flex-col ">
                <!-- <div   class="p-4 bg-blue-100 w-1/2 rounded flex justify-between items-center"> -->
                    <!-- Teams List Item -->
                    @for ($i = 0; $i < 5; $i++)
                
                <div @click="open = ! open" class="container justify-between items-center mr-5 sm:w-full lg:w-1/2 mx-5 px-6 sm:py-1 lg:py-1">

                    <div class="mt-4">
                        <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                            <div class="group relative flex cursor-pointer justify-between rounded-xl bg-amber-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-amber-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                            <div class="relative space-y-1 p-4">
                                <h4 class="text-lg text-amber-900">Brave Warriors</h4>
                                <div class="relative h-6 text-amber-800 text-sm">
                                <!-- <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Captain: Team Captain</span> -->
                                <a href="" class="flex items-center gap-3 lg:invisible absolute left-1 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                    <span>See the team </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    <!--  -->
                                </a>
                                </div>
                            </div>
                            <!-- <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="https://raw.githubusercontent.com/Meschacirung/Tailus-website/main/public/images/singers/Michael-Jackson.png" alt="" /> -->
                            <img class="absolute bottom-0 right-6 w-[4rem] transition duration-300 lg:group-hover:scale-[1.4]" src="{{ asset('assets/logos/logo.jpg') }}" alt="logo">
                            </div>
                        </div>
                    </div>
                            
                </div>
                
                @endfor      
                <!-- End of Teams List Item -->
                <div x-show="open" @click.outside="open = false" class="xs:w-full lg:w-3/4 xs:h-45 lg:h-screen bg-white p-4 bg-slate-100">
                    <h4 class="p-4 align-center text-lg text-slate-400">Brave Warriors</h4>
                                

                    <!-- Tabs Component -->
                    <!-- component -->
                    
                    <div x-data="
                        {
                        openTab: 1,
                        activeClasses: 'p-4 -mb-px border-b border-current text-amber-500 underline underline-offset-8',
                        inactiveClasses: 'p-4 -mb-px border-b border-transparent hover:text-amber-500',
                        }
                        " class="w-full mb-14">
                        <div class="flex text-sm font-medium border-b border-gray-100">
                            <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium py-3 px-4 lg:px-6 p-4 -mb-px border-b border-transparent hover:text-amber-500">
                            Meet the team
                            </a>
                            <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 p-4 -mb-px border-b border-transparent hover:text-amber-500">
                            Stats
                            </a>
                            
                        </div>
                        <!-- Tab Content -->
                        <div>
                            <div x-show="openTab === 1" class="rounded bg-white h-96 w-7/8 text-body-color text-base leading-relaxed p-6" style="display: none;">
                                <div>
                                    Team
                                </div>
                            </div>
                            <div x-show="openTab === 2" class="rounded bg-white  h-96 w-7/8 text-body-color text-base leading-relaxed p-6" style="display: none;">
                                <div>
                                    Stats
                                </div>
                            </div>
                        </div>
                    </div>                
                    <!-- End of Tabs Component -->
                </div>
            </div>
                
            
        </div>

        <script src="//unpkg.com/alpinejs" defer></script>
<!-- 

        <div x-data="{
            open: false,
            openClasses: 'w-48 h-24 relative space-y-1 p-4 md:mr-10',
            closedClasses: 'w-96 h-24 relative space-y-1 p-4 mr-10'
        }"
            class="container border-2 border-green-500 justify-center contents-center mx-auto w-screen px-6 py-1 flex flex-col md:flex-row">
            <div @click="open = ! open" class="flex flex-col">

                <div class="container border-2 border-red-500 justify-between items-center mx-2 px-2">

                    <div class="mt-4">
                        <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                            <div class="group relative flex cursor-pointer justify-between rounded-xl bg-blue-100 before:absolute before:inset-y-0 before:right-0 before:w-full before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-blue-400 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                            <div :class="open === true ? openClasses : closedClasses">
                                <h4 class="text-lg text-gray-900 text-left">Brave Warriors</h4>
                                <div class="relative h-6 text-gray-800 text-sm">
                               
                                <a href="" class="flex items-center gap-3 lg:invisible absolute left-1 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                                    <span>See the team </span>
                                    
                                </a>
                                </div>
                            </div>
                            
                            <img class="absolute bottom-0 right-6 w-[5rem] transition duration-300 lg:group-hover:scale-[1.2]" src="{{ asset('assets/logos/logo.jpg') }}" alt="logo">
                            </div>
                        </div>
                    </div>

                </div>

            


            </div>
            <div x-show="open" @click.outside="open = true" class="my-5 contents-center rounded-md w-full lg:w-2/3 xs:h-45 lg:h-5/6 bg-slate-200 ml-4">
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
                        <div x-show="openTab === 1" class="overflow-auto rounded bg-pink-200 xs:h-96 md:h-[35rem] w-full text-body-color text-base p-6" style="display: none;">
                            <div class="grid gap-4 md:grid-cols-1 lg:grid-cols-2">

                                @for ($i = 0; $i < 8; $i++)
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
        </div> -->