@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">


    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        Official Documents
                    </h1>
                </div>

            </div>
        </div>
    </header>
    <section class="text-grey-800 bg-white">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Our Official documents</h2>


            </div>


            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-4">




                @forelse ($documentlist as $document)
                    <a class="relative block p-8 border border-gray-100 shadow-xl hover:text-amber-300" href="">


                        <div class="mt-4 text-gray-500 sm:pr-8">


                            <h5 class="mt-4 text-xl font-bold text-gray-900"> {{ $document->title }}</h5>

                        </div>
                    </a>

                @empty
                @endforelse



            </div>


        </div>
    </section>
@endsection
