@extends('layouts.app')


@section('content')
    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">


    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        {{ $comp->name }}
                    </h1>
                </div>


            </div>
        </div>
    </header>
    <header class="bg-red-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="flex gap-5">
                    <div>
                        <span class="countdown font-mono text-4xl">
                            <span style="--value:15;"></span>
                        </span>
                        days
                    </div>
                    <div>
                        <span class="countdown font-mono text-4xl">
                            <span style="--value:10;"></span>
                        </span>
                        hours
                    </div>
                    <div>
                        <span class="countdown font-mono text-4xl">
                            <span style="--value:24;"></span>
                        </span>
                        min
                    </div>
                    <div>
                        <span class="countdown font-mono text-4xl">
                            <span style="--value:47;"></span>
                        </span>
                        sec
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div class="container my-24 px-6 mx-auto">
        <section class="mb-32 text-gray-800">
            <img src=" {{ asset('storage') }}/{{ $comp->image }}" class="w-full shadow-lg mb-6" alt="" />


            <div class="max-w-2xl px-6 py-16 mx-auto space-y-12">
                <article class="space-y-8  dark:text-gray-800">
                    <div class="space-y-6">
                        <h1 class="text-4xl font-bold md:tracking-tight md:text-5xl">{{ $comp->name }}
                        </h1>
                        <div
                            class="flex flex-col items-start justify-between w-full md:flex-row md:items-center dark:text-gray-400">
                            <div class="flex items-center md:space-x-2">

                                <p class="text-sm">{{ $comp->created_at->format('m/d/y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:text-gray-900">
                        <p>{{ $comp->content }}.</p>
                    </div>
                </article>

            </div>
        </section>
    </div>
@endsection
