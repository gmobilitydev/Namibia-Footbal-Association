@extends('layouts.app')

@section('content')
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40">


            <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                    <@foreach ($latestPostList as $post)
                        <div class="carousel-item active float-left w-full">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                                style="background-position: 50%; background-image: url({{ URL::asset('storage\app\public\5QolrVUMrSQxrmmoliLDnYNQlXB1nB-metaY29tcGV0aXRpb24uanBlZw==-.jpg') }}); height: 500px;">
                            </div>

                            <div class="container mx-auto px-6 md:px-12 xl:px-32">
                                <div class="text-center text-gray-800">
                                    <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12"
                                        style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                                        <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">
                                            {{ $post->title }}
                                            <br />
                                        </h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--<div class="carousel-item float-left w-full">
                                                                                                                                                                <div class="relative overflow-hidden bg-no-repeat bg-cover"
                                                                                                                                                                    style="background-position: 50%; background-image: url({{ asset('assets/images/team.jpg') }}); height: 500px;">
                                                                                                                                                                </div>

                                                                                                                                                                <div class="container mx-auto px-6 md:px-12 xl:px-32">
                                                                                                                                                                    <div class="text-center text-gray-800">
                                                                                                                                                                        <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12"
                                                                                                                                                                            style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                                                                                                                                                                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Magaia brace
                                                                                                                                                                                hands South
                                                                                                                                                                                Africa first WAFCON trophy
                                                                                                                                                                                <br />
                                                                                                                                                                            </h1>

                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="carousel-item float-left w-full">
                                                                                                                                                                <div class="relative overflow-hidden bg-no-repeat bg-cover"
                                                                                                                                                                    style="background-position: 50%; background-image: url({{ asset('assets/images/galler.jpeg') }}); height: 500px;">
                                                                                                                                                                </div>

                                                                                                                                                                <div class="container mx-auto px-6 md:px-12 xl:px-32">
                                                                                                                                                                    <div class="text-center text-gray-800">
                                                                                                                                                                        <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12"
                                                                                                                                                                            style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                                                                                                                                                                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Magaia brace
                                                                                                                                                                                hands South
                                                                                                                                                                                Africa first WAFCON trophy
                                                                                                                                                                                <br />
                                                                                                                                                                            </h1>

                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>-->
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <section class="dark:bg-zinc-900 dark:text-gray-100">
                <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
                    <div class="space-y-2 text-center">
                        <h2 class="text-3xl font-bold">Latest News</h2>

                    </div>
                    <a rel="noopener noreferrer" href="#"
                        class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                        <img src="{{ asset('assets/images/galler.jpeg') }}" alt=""
                            class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                        <div class="p-6 space-y-2 lg:col-span-5">
                            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">
                                Noster tincidunt reprimique ad pro</h3>
                            <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                            <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert
                                putent doctus id.</p>
                        </div>
                    </a>
                    <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <a rel="noopener noreferrer" href="#"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                src="{{ asset('assets/images/caf.jpeg') }}">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                    laoreet repudiare legendos</h3>
                                <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                                <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                    percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea,
                                    ei vocent delicata indoctum pri.</p>
                            </div>
                        </a>
                        <a rel="noopener noreferrer" href="#"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                src="{{ asset('assets/images/team.jpg') }}">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                    laoreet repudiare legendos</h3>
                                <span class="text-xs dark:text-gray-400">January 22, 2021</span>
                                <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                    percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea,
                                    ei vocent delicata indoctum pri.</p>
                            </div>
                        </a>
                        <a rel="noopener noreferrer" href="#"
                            class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                            <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                src="{{ asset('assets/images/caf.jpeg') }}">
                            <div class="p-6 space-y-2">
                                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu
                                    laoreet repudiare legendos</h3>
                                <span class="text-xs dark:text-gray-400">January 23, 2021</span>
                                <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas
                                    percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea,
                                    ei vocent delicata indoctum pri.</p>
                            </div>
                        </a>

                    </div>

                </div>
            </section>
            <section class="mb-32 text-gray-800 background-radial-gradient">
                <style>
                    .background-radial-gradient {
                        background-color: hsl(49, 41%, 15%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(49, 41%, 35%) 15%,
                                hsl(46, 41%, 30%) 35%,
                                hsl(49, 41%, 20%) 75%,
                                hsl(49, 40%, 19%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(49, 41%, 45%) 15%,
                                hsl(50, 41%, 30%) 35%,
                                hsl(49, 41%, 20%) 75%,
                                hsl(49, 41%, 19%) 80%,
                                transparent 100%);
                    }
                </style>

                <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                    <div class="container mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                            <div class="mt-12 lg:mt-0">
                                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                    style="color: hsl(49, 81%, 95%)">
                                    Catch up on the latest <br /><span style="color: hsl(49, 81%, 75%)">Highlights</span>
                                </h1>

                            </div>
                            <div class="mb-12 lg:mb-0">
                                <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                                    style="padding-top: 56.25%">
                                    <iframe
                                        class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
                                        src="https://www.youtube.com/embed/E8NsOy829KA" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section>

                    <div class="flex justify-center items-center min-h-500 bg-gray-200">
                        <div class="space-y-2 text-align-left pr-36">
                            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Competitions</h2>
                        </div>
                        <div aria-details="card"
                            class="relative flex w-[300px] hover:w-[600px] transition-all duration-1000 ease-in-out h-96 overflow-hidden bg-white shadow-2xl"">
                            <div aria-details="image"
                                class="relative min-w-xm w-[300px] scale-50 h-full bg-white flex justify-center items-center">
                                <img class="h-93 max-w-xs transition duration-300 ease-out hover:-rotate-12 hover:-translate-x-5"
                                    src="{{ asset('assets/logos/DR. Hage cup logo.jpg') }}" />
                            </div>
                            <div aria-details="details"
                                class="bg-slate-200 relative min-w-sm h-full flex p-5 flex-col justify-center transition delay-700 ease-in-out">
                                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Dr. Hage
                                    Geingob Cup</h1>
                                <h4 class="text-sm font-medium mt-2">Competition details</h4>
                                <p class="text-md font-normal text-left">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Placeat qui aliquid error.</p>

                            </div>
                        </div>
                        <div aria-details="card"
                            class="relative flex w-[300px] hover:w-[600px] transition-all duration-1000 ease-in-out h-96 overflow-hidden bg-white shadow-2xl"">
                            <div aria-details="image"
                                class="relative min-w-xm w-[300px] scale-50 h-full bg-white flex justify-center items-center">
                                <img class="h-93 max-w-xs transition duration-300 ease-out hover:-rotate-12 hover:-translate-x-5"
                                    src="{{ asset('assets/logos/namibian-logo-main.png') }}" />
                            </div>
                            <div aria-details="details"
                                class="bg-slate-200 relative min-w-sm h-full flex p-5 flex-col justify-center transition delay-700 ease-in-out">
                                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">The Newspaper
                                    Cup</h1>
                                <h4 class="text-sm font-medium mt-2">Competition details</h4>
                                <p class="text-md font-normal text-left">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Placeat qui aliquid error.</p>

                            </div>
                        </div>
                        <div aria-details="card"
                            class="relative flex w-[300px] hover:w-[600px] transition-all duration-1000 ease-in-out h-96 overflow-hidden bg-white shadow-2xl"">
                            <div aria-details="image"
                                class="relative min-w-xm w-[300px] scale-50 h-full bg-white flex justify-center items-center">
                                <img class="h-96 max-w-xs transition duration-300 ease-out hover:-rotate-12 hover:-translate-x-5"
                                    src="{{ asset('assets/logos/npfl.png') }}" />
                            </div>
                            <div aria-details="details"
                                class="bg-slate-200 relative min-w-sm h-full flex p-5 flex-col justify-center transition delay-700 ease-in-out">
                                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">The Namibian
                                    Premier Football League</h1>
                                <h4 class="text-sm font-medium mt-2">Competition details</h4>
                                <p class="text-md font-normal text-left">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Placeat qui aliquid error.</p>

                            </div>
                        </div>
                    </div>
                </section>



            </section>


        </section>
        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-32 background-radial-gradient-2">
                <style>
                    .background-radial-gradient-2 {
                        background-color: hsl(54, 100%, 50%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(56, 100%, 50%) 15%,
                                hsl(54, 93%, 57%) 35%,
                                hsl(51, 91%, 47%) 75%,
                                hsl(46, 86%, 42%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(56, 100%, 50%) 15%,
                                hsl(54, 88%, 46%) 35%,
                                hsl(56, 100%, 55%) 75%,
                                hsl(46, 71%, 47%) 80%,
                                transparent 100%);
                    }
                </style>

                <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                    <div class="container mx-auto xl:px-32">
                        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                            <div class="mb-12 lg:mb-0">
                                <img src="{{ asset('assets/images/nfa.png') }}" class="w-full rounded-lg shadow-lg"
                                    alt="" />
                            </div>
                            <div class="mt-12 lg:mt-0">
                                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                    style="color: hsl(46, 84%, 95%);">Brave Warriors<br /><span
                                        style="color: hsl(54, 81%, 75%);">Team Kit </span></h1>
                                <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-zinc-900 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!"
                                    role="button">Go to store</a>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->


    </div>
@endsection
