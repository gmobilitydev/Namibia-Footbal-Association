@extends('layouts.app')

@section('content')
    <div>
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
            openClasses: 'w-96 h-24 relative space-y-1 p-4', 
            closedClasses: 'w-96 h-24 relative space-y-1 p-4'
             
        }" 
            class="content-center container justify-between items-center mr-5 sm:w-full lg:w-5/8 mx-5 px-6 sm:py-1 lg:py-1 flex flex-col md:flex-row">
            <div @click="open = ! open" class="flex flex-col">
            @for ($i = 0; $i < 5; $i++)
                
                <div class="container justify-between items-center mr-5 sm:w-45 md:w-full mx-2 px-10 sm:py-1 lg:py-1">

                    <div class="mt-4">
                        <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                            <div class="group relative flex cursor-pointer justify-between rounded-xl bg-blue-100 before:absolute before:inset-y-0 before:right-0 before:w-full before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-blue-400 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                            <div :class="w-96 h-24 relative space-y-1 p-4">
                                <h4 class="text-lg text-gray-900 text-left">Brave Warriors</h4>
                                <div class="relative h-6 text-gray-800 text-sm">
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
                            <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 lg:group-hover:scale-[1.1]" src="{{ asset('assets/logos/logo.jpg') }}" alt="logo">
                            </div>
                        </div>
                    </div>
                            
                </div>
                
                @endfor 
                

            </div>
            <!-- <div x-show="!open" @click.outside="open = true" class="xs:w-full lg:w-3/4 xs:h-45 lg:h-5/6 bg-white p-4"><h4 class="p-4 text-center text-lg text-slate-400"> CLICK on team to see details</h4> </div> -->
            <div x-show="open" @click.outside="open = false" class="xs:w-full lg:w-3/4 xs:h-45 lg:h-5/6 bg-white p-4 bg-slate-100">
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
                        <div x-show="openTab === 1" class="rounded bg-white h-48 md:h-screen w-full text-body-color text-base leading-relaxed p-6 overflow-auto" style="display: none;">
                            <div class="grid gap-4 grid-cols-3 grid-rows-3">
                                
                                @for ($i = 0; $i < 8; $i++)
                                <div>
                                    <div class="group relative w-96">
                                        <img class="w-3/4 h-full object-cover"
                                            src="https://www.kindacode.com/wp-content/uploads/2022/06/t-shirt-example.png" />

                                        <div
                                            class="absolute top-0 left-0 w-3/4 h-0 flex flex-col justify-center items-center bg-gray-300 opacity-0 group-hover:h-full group-hover:opacity-70 duration-500">
                                            <div class="flex flex-row">
                                                <div class="flex flex-col p-1">
                                                    <h3 class="font-bold text-sm">SENIOR CAPS</h3>
                                                    <p class="text-3xl text-center text-amber-500">10</p>
                                                </div>
                                                <div class="flex flex-col p-1">
                                                    <h3 class="font-bold text-sm">SENIOR GOALS</h3>
                                                    <p class="text-3xl text-center text-amber-500">11</p>
                                                </div>
                                            </div>
                                            <a class="text-black hover:text-white mt-5 px-8 py-3 rounded-full bg-slate-400 hover:bg-amber-500 duration-300" href="#">View Full Stats</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-4xl text-amber-500 font-bold">Player Name</h3>
                                        <p class="text-2xl text-slate-500">Position</p>
                                    </div>
                                </div>
                                @endfor

                            </div>
                        </div>
                        <div x-show="openTab === 2" class="rounded bg-white h-96 w-full text-body-color text-base leading-relaxed p-6" style="display: none;">
                            <div>
                                Stats
                            </div>
                        </div>
                    </div>
                    <script src="//unpkg.com/alpinejs" defer></script>
                </div> 
            </div>
        </div>
        
    </div>
@endsection
