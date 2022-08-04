@extends('layouts.app')

@section('content')
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">

                    <h1 class="text-2xl font-extrabold sm:text-5xl">

                        Careers


                    </h1>
                    <h2><strong class="text-1xl font-extrabold text-yellow-700 sm:block">
                            Do you think your educational background and professional expertise will help NFA regain its
                            reputation and raise itself to the highest levels of international standards?

                        </strong></h2>
                </div>


            </div>
        </div>
    </header>
    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">

            <div class="max-w-xl mx-auto text-center">

                @forelse ($vacancyList as $vacancy)
                    <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-yellow-500/30 hover:border-yellow-500"
                        href="/services/digital-campaigns">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>

                        <h3 class="mt-4 text-xl font-bold text-grey-900">{{ $vacancy->job_title }}</h3>


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
        </div>
    </section>
@endsection
