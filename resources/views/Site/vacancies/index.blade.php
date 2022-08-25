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
                    <button id="btnOpen" class="openModal relative block p-8 border border-gray-100 shadow-xl rounded-xl">
                        <span
                            class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                            @if ($vacancy->status != '1')
                                {{ 'Open' }}
                            @else
                                {{ 'Close' }}
                            @endif

                        </span>

                        <div class="mt-4 text-gray-500 sm:pr-8">


                            <h5 class="mt-4 text-xl font-bold text-gray-900"> {{ $vacancy->job_title }}</h5>

                            <p class="hidden mt-2 text-sm sm:block">
                                <i>Closing on</i> {{ $vacancy->end_date }}
                            </p>
                        </div>
                    </button>


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
        </div>

        <div id="myModal" class="absolute m-auto p-4 border border-black w-48">
            <div class="flex flex-row">
                <h1>Modal Content</h1>
                <button class="closeModal ml-auto my-auto">X</button>
            </div>
        </div>
    </section>

    <!-- <script>
        let open = document.getElementsByClassName("btnOpen");
        let close = document.getElementsByClassName("close");
        var modal = document.getElementById("myModal");

        open.onclick = function() {
            modal.style.display = "block";
        }

        close.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('.openModal').on('click', function(e){
                $('#interestModal').removeClass('invisible');
            });
            $('.closeModal').on('click', function(e){
                $('#interestModal').addClass('invisible');
            });
        });
    </script>
@endsection
