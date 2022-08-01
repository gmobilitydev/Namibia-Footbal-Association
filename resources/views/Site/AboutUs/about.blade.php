@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center">

        <a class="text-white" href="">History</a>
        <a class="text-white" href="">Executive</a>
        <a class="text-white" href="">Organisation</a>

    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        About Us
                    </h1>
                </div>


            </div>
        </div>

    </header>
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto">


        <!-- Section: Design Block -->
        <section>
            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                style="color: hsl(0, 0%, 15%)">
                                Our Mandate</h2>
                            <p class="text-lg" style="color: hsl(0, 0%, 17%)">The mandate of the Namibia Football
                                Association [NFA]
                                is to govern and develop the beautiful game of
                                football
                                through all fourteen political regions of the Republic of Namibia.

                                Since the inception of the NFA in 1992, the Association has grown exponentially and was
                                tranformed into
                                an
                                organisation that can serve our game for the full benefit of all Namibians. However, and
                                regretfully so,
                                the
                                NFA was confronted with a leadership LID that determined the limit on the potential for the
                                organisational
                                growth of the Association.

                                The new NFA, under the administrative and operational authority of the FIFA Normalisation
                                Committee is
                                in
                                the process to modernise football giving it a true Namibian look and feel to be accessible,
                                to be
                                inclusive
                                in all aspects of the game, not just in football for senior men, but for women and at youth
                                levels for
                                boys
                                and girls.

                                For NFA to make football truly Namibian, the Association must help develop football
                                everywhere so that
                                it
                                [the NFA] has a strong top tier league for men, women football with a super league,
                                Nationwide First
                                Division, Regional 2nd Division, Brave Warriors [Senior National Football Men’s Team], Brave
                                Gladiators
                                [Senior National Football Women’s Team] as well as the U/20s and U/17s Boys and Girls,
                                hoping to
                                inculcate
                                Football Used Towards Social Advancement and Learning [FUTSAL] as part of the NFA family in
                                the
                                foreseeable
                                future.</p>
                        </div>
                        <div class="mb-12 lg:mb-0">
                            <div class="relative w-full overflow-hidden rounded-lg shadow-lg">
                                <img src="{{ asset('assets/images/Bisey.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">

            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style="
                    background-position: 50%;
                    background-image: url('{{ asset('assets/images/team.jpg') }}');
                    height: 500px;
                  ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(17, 7, 7, 0.438)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center text-white px-6 py-6 md:py-0 md:px-12 max-w-[800px]">
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <!-- Container for demo purpose -->
@endsection
