@extends('Site.Competitions.layouts.app')


@section('content')
    <div class="container px-6 mx-auto mb-40">


        @forelse ($comp->groups as $group)
            <div class="container px-40">
                <div class="text-center sm:text-left py-6">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl border-b">
                        {{ $group->name }}
                    </h1>
                </div>
                @forelse ($group->teams as $key=>$team)
                    <div class="flex items-center border-b">
                        <h1>{{ ++$key }}</h1>
                        <img class="object-contain md:object-scale-down h-20 p-5 m-3"
                            src="{{ asset('storage') }}/{{ $team->image }}">
                        <a href="#">
                            <h1 class="text-sm font-bold text-gray-900 ">
                                {{ $team->name }}
                            </h1>
                        </a>
                    </div>
                @empty
                    <div class="text-center sm:text-left">
                        <h1 class="text-lg font-bold text-gray-900 sm:text-3xl border-b">
                            No teams found
                        </h1>
                    </div>
                @endforelse
            </div>

        @empty
            <div class="text-center">
                <h1 class="text-xs text-gray-900 sm:text-3xl border-b py-6">
                    No groups found
                </h1>
            </div>
        @endforelse


    </div>
@endsection
