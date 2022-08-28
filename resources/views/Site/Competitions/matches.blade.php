@extends('Site.Competitions.layouts.app')


@section('content')
    <!-- ------------------------------------------------ CONTENT ------------------------------------------------ -->
    <div>
        <!-- Upcoming Event Section -->



        <!-- Fixtures Section -->
        <section class="pt-10">

            <div x-data="{
                openTab: 1,
                activeClasses: 'text-xl p-4 -mb-px border-b border-current text-amber-500',
                inactiveClasses: 'text-xl p-4 -mb-px border-b border-transparent hover:text-amber-500',
            }" class="w-5/12 mb-14 mx-auto items-center">
                <div class="flex text-sm font-medium border-b border-gray-100">
                    <a href="javascript:void(0)" @click="openTab = 1"
                        :class="openTab === 1 ? activeClasses : inactiveClasses">
                        Fixtures
                    </a>

                </div>


                <!-- component -->
                <div class="bg-white flex flex-col py-1 mx-2 bg-white flex items-center justify-center mx-auto mt-10">
                    <!-- fixture table -->
                    <div x-show="openTab === 1" style="display: none;" class="flex flex-col p-4 mx-5">
                        <h2 class="text-3xl font-bold text-center pb-2">
                            MATCHES
                        </h2>


                        @foreach ($comp->fixtures as $fixture)
                            <a href="#" class="group">
                                <div
                                    class="bg-white flex flex-col md:flex-row border border-gray-200 shadow-md group-hover:shadow-amber-400 group-hover:scale-105 rounded-md my-4 px-6">
                                    <!-- Match details name, date, type -->
                                    <div class="flex items-center">
                                        <img class="object-contain md:object-scale-down h-6 m-3"
                                            src="{{ asset('storage') }}/{{ $fixture->home->image }}">
                                        <a href="#">
                                            <h1 class="text-sm font-bold text-gray-900 ">
                                                {{ $fixture->home->name }}
                                            </h1>
                                        </a>
                                        <div class="px-3 m-6 bg-amber-400 text-white font-bold shadow">
                                            @if (is_null($fixture->home->result))
                                                {{ $fixture->date->format('H:i') }}
                                            @endif
                                            {{ $fixture->home->result }}
                                            {{ $fixture->away->result }}
                                        </div>
                                        <img class="object-contain md:object-scale-down h-6 m-3"
                                            src="{{ asset('storage') }}/{{ $fixture->away->image }}">
                                        <a href="#">
                                            <h1 class="text-sm font-bold text-gray-900 ">
                                                {{ $fixture->away->name }}
                                            </h1>
                                        </a>
                                    </div>


                                </div>
                            </a>
                        @endforeach




                    </div>



                </div>
                <!-- end of fixture table -->
        </section>
        <script src="//unpkg.com/alpinejs" defer></script>
    </div>
    <!-- -------------------------------------------- END OF CONTENT --------------------------------------------- -->


    </div>
@endsection
