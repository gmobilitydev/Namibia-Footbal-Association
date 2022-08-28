@extends('Site.Competitions.layouts.app')


@section('content')
    <div class="container px-6 mx-auto mb-40">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

            <div class="grid overflow-hidden grid-cols-3 grid-rows-2 gap-2 m-20">

                @forelse ($comp->teams as $team)
                    <div class="sm:justify-between sm:items-center sm:flex">
                        <div class="text-center sm:text-left flex items-center border-b">

                            <img class="object-contain md:object-scale-down h-20 m-3"
                                src="{{ asset('storage') }}/{{ $team->image }}">
                            <a href="#">
                                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                                    {{ $team->name }}
                                </h1>
                            </a>
                        </div>


                    </div>



                @empty
                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        No teams found
                    </td>
                @endforelse

            </div>
        </div>

    </div>
@endsection
