@extends('layouts.app')

@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center">

        <a class="text-white" href="{{ url('/about') }}">History</a>
        <a class="text-white" href="{{ url('/org') }}">Organisation</a>

    </div>
    <section class="bg-yellow-300">
        <!-- Page Container -->
        <div class="flex items-center justify-center min-h-screen bg-white py-20">
            <div class="flex flex-col">
                <!-- Notes -->
                <span class="text-center font-bold my-10 opacity-30">
                    Meet the Namibian Football Association Team
                    <hr class="my-4">
                    The NFA consists of a permanent staff, predominantly based at its headquarters Windhoek, Namibia.



                </span>
                <div class="flex flex-col mt-8">

                    @forelse ($committeeList as $committee)
                        <!-- Meet the Team -->
                        <div class="container max-w-7xl px-4">
                            <!-- Section Header -->
                            <div class="flex flex-wrap justify-center text-center mb-24">
                                <div class="w-full lg:w-6/12 px-4">
                                    <!-- Header -->
                                    <h1 class="text-gray-900 text-4xl font-bold mb-8 border-b py-6">
                                        {{ $committee->name }}
                                    </h1>

                                    <!-- Description -->
                                    <p class="text-gray-700 text-lg font-light">
                                        {{ Str::limit($committee->description, 65) }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-wrap">

                                @foreach ($committee->member as $member)
                                    <!-- Team Members -->
                                    <!-- Member #1 -->
                                    <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                                        <div class="flex flex-col">
                                            <!-- Avatar -->
                                            <a href="./org/member/{{ $member->id }}" class="mx-auto">
                                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                                    src="{{ asset('storage') }}/{{ $member->image }}">
                                            </a>

                                            <!-- Details -->
                                            <div class="text-center mt-6">
                                                <!-- Name -->
                                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                                    {{ $member->first_names . $member->last_name }}
                                                </h1>

                                                <!-- Title -->
                                                <div class="text-gray-700 font-light mb-2">
                                                    {{ $member->position }}
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>







                        </div>

                    @empty
                    @endforelse
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
