@extends('layouts.app')

@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center">



    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">

                <div class="text-center sm:text-left">

                    <h1 class="text-white text-2xl font-extrabold sm:text-5xl">

                        Careers


                    </h1>
                    <h2><strong class="text-1xl text-yellow-700 sm:block">
                            Do you think your educational background and professional expertise will help NFA regain its
                            reputation and raise itself to the highest levels of international standards?

                        </strong></h2>
                </div>


            </div>
        </div>
    </header>
    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-32 mx-auto  lg:items-center lg:flex">

            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">

                @forelse ($vacancyList as $vacancy)
                    <a
                        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-yellow-500/30 hover:border-yellow-500">
                        <div class="lg:flex block shadow-xl rounded-xl border  border-gray-400">

                            <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                                <div class="flex flex-row lg:justify-start justify-center">
                                    <div class="text-gray-700 font-medium text-sm text-right lg:text-right px-2">
                                        <i class="far fa-clock">Closing on</i> {{ $vacancy->end_date }}
                                    </div>

                                </div>
                                <div class="font-semibold text-gray-800 text-xl text-center lg:text-left px-2">
                                    {{ $vacancy->job_title }}
                                </div>

                                <div class="text-gray-600 font-medium text-sm pt-1 text-center lg:text-left px-2">
                                    {{ $vacancy->job_description }}
                                </div>
                            </div>
                            <div
                                class="flex flex-row items-center w-full lg:w-1/3 bg-white lg:justify-end justify-center px-2 py-4 lg:px-0">
                                <span
                                    class="tracking-wider text-green-600 bg-gray-200 px-2 text-sm rounded leading-loose mx-2 font-semibold">

                                    @if ($vacancy->status != '1')
                                        {{ 'Open' }}
                                    @else
                                        {{ 'Close' }}
                                    @endif

                                </span>



                            </div>

                            <div class= "flex flex-row items-center w-full lg:w-1/3 bg-white lg:justify-end justify-center px-2 py-4 lg:px-0" >
                                <button
                                class="items-center justify-center block w-50 h-8 justify transition px-5 py-1 position-center text-sm text-center lg:text-center px-2font-medium bg-gray-300 rounded-xl hover:bg-yellow-500"
                                type="button">
                                Apply
                            </button>
                            </div>
sdfdfddfdf
                        </div>
                    </a>

                @empty

                    <h1 class="text-3xl font-extrabold sm:text-5xl">
                        No Vacancies Available
                        <strong class="font-extrabold text-yellow-700 sm:block">
                            Coming Soon
                        </strong>
                    </h1>
                @endforelse


            </div>
        </div>
    </section>
@endsection
