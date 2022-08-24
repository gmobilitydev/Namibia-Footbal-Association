@extends('layouts.app')


@section('content')
    <section class="mb-40">


        <div class="relative overflow-hidden bg-no-repeat bg-cover"
            style="
            background-position: 50%;
            background-image: url('{{ asset('storage') }}/{{ $comp->image }}');
            height: 250px;
          ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.75)">
                <div class="flex justify-center items-center h-full">
                    <div class="text-center text-white px-6 md:px-12">
                        <h1 class="text-4xl sm:text-2xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12">
                            {{ $comp->name }}
                        </h1>

                    </div>
                </div>
            </div>
        </div>
        <div
            class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">


        </div>
    </section>

    <!-- Section: Design Block -->



    <div class="container my-24 px-6 mx-auto">

    </div>
@endsection
