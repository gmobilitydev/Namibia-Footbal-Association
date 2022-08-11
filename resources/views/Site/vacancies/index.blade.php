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
                        class="block p-8 transition h-1/2 border border-gray-300 border-8 border-double shadow-xl rounded-xl hover:shadow-yellow-900/40 hover:border-yellow-500 hover:border-solid">
                        <div class="block h-4/4 shadow-xl rounded-xl border w-full border-gray-00">

                            <div class="w-full h-40 lg:w-full xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">

                                <div class="font-semibold text-gray-800 text-4xl text-center">
                                    {{ $vacancy->job_title }}
                                </div>
                            </div>
                            <div
                                class=" items-center w-1 bg-yellow-500 lg:px-20">
                                <span
                                    class=" text-gray-600 bg-gray-400 px-3 py-5 text-sm rounded leading-loose mx-2 font-semibold">

                                </span>
                            </div>

                            <div class= "items-center w-90 h-1/2 m-2 bg-gray-300 lg:justify-center px-2 py-2 rounded-xl" >
                                <button
                                class="items-center justify-center block w-full h-8 transition px-5 py-1 text-sm text-center px-2font-medium bg-gray-100 rounded-xl hover:bg-yellow-500"
                                type="button">
                                Apply
                                </button>
                                <span
                                    class="flex flex-1 text-center text-green-600 text-sm rounded leading-loose mx-2 font-semibold">

                                    @if ($vacancy->status != '1')
                                        {{ 'Open' }}
                                    @else
                                        {{ 'Close' }}
                                    @endif

                                </span>

                                    <div class="text-gray-700 font-medium text-sm text-right lg:text-right px-2">
                                    <i>Closing on</i> {{ $vacancy->end_date }}
                                    </div>
                            </div>


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
