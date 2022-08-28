@extends('Site.Competitions.layouts.app')


@section('content')
    <div class="container px-6 mx-auto mb-40">

        <div class="overflow-x-auto relative ">

            <div class="grid overflow-hidden grid-cols-3 gap-2 m-20 sm:grid-cols-2">

                @forelse ($comp->teams as $team)
                    <div class="sm:justify-between sm:items-center sm:flex">
                        <div class="flex items-center border-b">

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
            </div>
            <div class="text-center">
                <h1 class="text-xs text-gray-900 sm:text-3xl border-b py-6">
                    No teams found
                </h1>
            </div>
            @endforelse

        </div>
    </div>

    </div>
@endsection
