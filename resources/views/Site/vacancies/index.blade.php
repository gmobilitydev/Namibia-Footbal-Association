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
                    <h2><strong class="text-1xl text-yellow-900 sm:block">
                            Do you think your educational background and professional expertise will help NFA regain its
                            reputation and raise itself to the highest levels of international standards?

                        </strong></h2>
                </div>


            </div>
        </div>
    </header>
    <section class="m-20">
        <div class="max-w-screen-xl px-4 py-18 pb-18 mx-auto  lg:items-center lg:flex">

            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">

                @forelse ($vacancyList as $vacancy)
                    <div class=" relative block p-8 border border-gray-100 shadow-xl rounded-xl">
                        <span
                            class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                            @if ($vacancy->status != '1')
                                {{ 'Open' }}
                            @else
                                {{ 'Close' }}
                            @endif

                        </span>

                        <div class="mt-4 text-gray-500 sm:pr-8">

                            <h5 id="modal-open" class="openModal hover:text-amber-400 hover:cursor-pointer mt-4 text-xl font-bold text-gray-900"> {{ $vacancy->job_title }}</h5>

                            <p class="hidden mt-2 text-sm sm:block">
                                <i>Closing on</i> {{ $vacancy->end_date }}
                            </p>
                        </div>
                    </div>


                @empty
                    <div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
                        <div class="max-w-xl mx-auto text-center">
                            <h1 class="text-3xl font-extrabold sm:text-5xl">
                                No Bids Available
                                <strong class="font-extrabold text-yellow-500 sm:block">
                                    Coming Soon
                                </strong>
                            </h1>


                        </div>
                    </div>
                @endforelse


            </div>

            <!-- Modal overlay -->
            <div id="overlay" class="bg-black absolute inset-0 bg-opacity-50 hidden justify-center items-center"> 
                <!-- modal content -->
                <div class="bg-gray-200 rounded py-3 px-4">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-bold px-1">{{ $vacancy->job_title }}</h4>
                        <svg id="modal-close" class="hover:cursor-pointer hover:bg-gray-300 p-1 rounded-full w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </div>
                    <!-- modal content -->
                    <div class="py-3 px-4">
                        <div class="flex justify-center items-center">
                            <p class="text-sm text-gray-400"><i>Starting on </i>{{ $vacancy->start_date }} and <i>Closing on </i>{{ $vacancy->end_date }}</p>
                        </div>
                        <p class="text-md text-gray-600 mt-2">{{ $vacancy->job_description }}</p>
                    </div>

                    
                </div>
            </div> 
        </div>

        
    </section>

    

    <script>
       window.addEventListener('DOMContentLoaded', () =>{
            const overlay = document.querySelector('#overlay')
            const vacancies = document.querySelectorAll('.openModal')
            const closeBtn = document.querySelector('#modal-close')

            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            }

            // overlay.addEventListener('click', toggleModal)
            vacancies.forEach(vacancy => vacancy.addEventListener('click', toggleModal))
            closeBtn.addEventListener('click', toggleModal)
       })
    </script>
@endsection
