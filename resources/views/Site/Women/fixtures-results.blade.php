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
        <header class="bg-sky-900">
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

        </div>
        <!-- -------------------------------------------- END OF CONTENT --------------------------------------------- -->


    </div>
@endsection
