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