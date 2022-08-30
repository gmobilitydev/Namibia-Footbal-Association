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

                            @if ($vacancy->status != '1')
                            <span
                            class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs"> {{ 'Open' }} </span>
                            @else
                            <span
                            class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-red-100 text-red-600 font-medium text-xs"> {{ 'Close' }} </span>
                            @endif



                        <div class="mt-4 text-gray-500 sm:pr-8">

                            <h5 id="modal-open" data-toggle="modal" data-target="#empModal" data-id='{{ $vacancy->id }}' class="openModal hover:text-amber-400 hover:cursor-pointer mt-4 text-xl font-bold text-gray-900"> {{ $vacancy->job_title }}</h5>

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
            <div id="overlay" role="dialog" class="bg-black fixed inset-0 bg-opacity-50 hidden justify-center items-center w-screen h-screen">
                <!-- modal content -->
                {{-- <div data-x='{
                    vacancy = {{$vacancy->status}}
                    openClass: "bg-white rounded py-3 px-4 w-2/5 border-1 border-green-300 shadow-md shadow-green-200"
                    closedClass: "bg-white rounded py-3 px-4 w-2/5 border-1 border-red-300 shadow-md shadow-red-200"
                }' :class="vacancy === 1 ? openClass : closedClass"> --}}
               {{-- <div id="status"> --}}
                {{-- @if ($vacancy->status != '1') --}}
                    <div class="bg-white rounded py-3 px-4 w-2/5 border-1 border-gray-300 shadow-md shadow-gray-200"">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center">
                            <h4 class="text-lg font-bold px-1" id="job-title"></h4>
                            <div id="status">

                            </div>
                            <svg id="modal-close" class="hover:cursor-pointer hover:bg-gray-300 p-1 rounded-full w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>
                        <!-- modal content -->
                        <div class="py-3 px-4">
                            <div class="flex justify-center items-center">
                                <p class="text-sm text-gray-400"><i>Starting on </i> <span id="start-date"> </span> and <i>Closing on <span id="end-date"></span></i> </p>
                            </div>
                            <p class="text-md text-gray-600 mt-2 text-justify" id="job-description"></p>
                        </div>

                        <div class=".modal-body"> </div>
                    </div>
                {{-- @else --}}
                    {{-- <div class="bg-white rounded py-3 px-4 w-2/5 border-1 border-red-300 shadow-md shadow-red-200"">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center">
                            <h4 class="text-lg font-bold px-1" id="job-title"></h4>
                            <svg id="modal-close" class="hover:cursor-pointer hover:bg-gray-300 p-1 rounded-full w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>
                        <!-- modal content -->
                        <div class="py-3 px-4">
                            <div class="flex justify-center items-center">
                                <p class="text-sm text-gray-400"><i>Starting on </i> <span id="start-date"> </span> and <i>Closing on <span id="end-date"></span></i> </p>
                            </div>
                            <p class="text-md text-gray-600 mt-2 text-justify" id="job-description"></p>
                        </div>

                            <div class=".modal-body"> </div>
                    </div> --}}
                {{-- @endif --}}
               {{-- </div> --}}

            </div>
        </div>


    </section>



    <script>
    //    window.addEventListener('DOMContentLoaded', () =>{
            const overlay = document.querySelector('#overlay')
            const vacancies = document.querySelectorAll('.openModal')
            const closeBtn = document.querySelector('#modal-close')

    //         const toggleModal = () => {
    //             overlay.classList.toggle('hidden')
    //             overlay.classList.toggle('flex')
    //         }

    //         // overlay.addEventListener('click', toggleModal)
    //         vacancies.forEach(vacancy => vacancy.addEventListener('click', toggleModal))
    //         closeBtn.addEventListener('click', toggleModal)
    //    })

        $(document).ready(function(){
            // $('.openModal').click(function(){
            //
                $('.openModal').click(function(){
                    overlay.classList.toggle('hidden')
                    overlay.classList.toggle('flex')

                    var vacancy_id = $(this).data('id');
                    // alert(vacancy_id);
                    $.ajax({
                        url: 'vacancy-detail/'+vacancy_id,
                        type: 'GET',
                        data: {"id": vacancy_id},
                        success: function(data){;
                            console.log(data);
                            // $('#job-title').em/pty()
                            $('#job-title').html(data.job_title)

                            // $('#start-date').empty()
                            $('#start-date').html(data.start_date)

                            // $('#end-date').empty()
                            $('#end-date').html(data.end_date)

                            // $('#job-description').empty()
                            $('#job-description').html(data.job_description)

                            $('#status').empty()
                            data.status === 0 ? $('#status').html('Open').addClass('rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs') : $('#status').html('Closed').addClass('rounded-full px-3 py-1.5 bg-red-100 text-red-600 font-medium text-xs')
                            // $('.modal-body').html(response);
                            // $('#overlay').modal('show');
                        }
                    })
                });
                $('#modal-close').click(function(){
                    overlay.classList.toggle('hidden')
                    overlay.classList.toggle('flex')
                })
            })




    </script>
@endsection
