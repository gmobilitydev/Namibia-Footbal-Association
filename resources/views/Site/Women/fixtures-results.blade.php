@extends('layouts.app')

@section('content')
    <div>
        <div
            class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
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
            <div class="flex flex-col w-full bg-white rounded shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
                
            <!-- Event Image -->
            <div class="w-full h-64 bg-top bg-cover rounded-t" style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)"></div>
            <!-- End Event Image -->
            
            <!-- Event Info -->
                <div class="flex flex-col w-full md:flex-row">
                    <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                        <div class="md:text-3xl">Month</div>
                        <div class="md:text-6xl">day</div>
                        <div class="md:text-xl">Time</div>
                    </div>
                    <div class="p-4 font-normal text-gray-800 md:w-3/4">
                        <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">Event Name</h1>
                        <p class="leading-normal">Event description: expands a bit on the event and/or the parties involved.</p>
                        <div class="flex flex-row items-center mt-4 text-gray-700">
                            <div class="w-1/2">
                                Event Location
                            </div>
                            <div class="w-1/2 flex justify-end">
                                <img src="https://collegefootballplayoff.com/images/section_logo.png" alt="" class="w-8">
                            </div>
                        </div>
                    </div>
                    <!-- End Event Image -->
                </div>
            </div>
            </div>
        </section>

        <!-- Fixtures Section -->
        <section class="mb-40 bg-slate-200 background-radial-gradient">
            
            <!-- component -->
            <div class="bg-slate-200 flex flex-row py-1 mx-2 bg-white flex items-center justify-center">
                <!-- fixture table -->
                <div class="bg-slate-200 flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-10 p-20 ">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center">
                            <thead class="border-b">
                                <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    Team A
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    Date and Time
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                    Team B
                                </th>
                                </tr>
                            </thead>
                            <tbody class="mb-20 bg-black-100">
                                <tr class="border-b bg-gray-50 border-gray-200">
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        Team A
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        Date Time
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        Team B
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- results table -->
                <div class="bg-slate-200 flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-10 p-10">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-center">
                                <thead class="border-b">
                                    <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                        Team A
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                        Results
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                        Team B
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b bg-gray-50 border-gray-200">
                                        <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                            Team A
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            1 - 1
                                        </td>
                                        <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                            Team B
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of fixture table -->
        </section>
    </div>
    <!-- -------------------------------------------- END OF CONTENT --------------------------------------------- -->


    </div>
@endsection
