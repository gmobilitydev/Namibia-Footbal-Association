@extends('layouts.app')


@section('content')
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        Store
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-32 lg:items-cer entlg:flex">
            <div class="max-w-xl mx-auto text-center">



            </div>
        </div>

    </section>
    <div class="grid overflow-hidden grid-cols-6 grid-rows-2 gap-2 mt-6">
        <div class="box row-start-1 row-end-auto col-start-2 col-end-5">
            <div class="grid grid-cols-4 gap-6">
                @forelse ($productList as $product)
                    <div class="card">
                        <a class="relative block border border-gray-100" href="#">
                            <button class="absolute p-2 text-white bg-black rounded-full right-4 top-4" type="button">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>

                            <img class="object-contain w-full h-56 lg:h-72"
                                src="{{ asset($product->getFirstMediaUrl('product-images')) }}" loading="eager" />

                            <div class="p-6">
                                <strong class="inline-block px-3 py-1 text-xs font-medium bg-yellow-400">
                                    New
                                </strong>

                                <h5 class="mt-4 text-lg font-bold">
                                    {{ $product->name }}
                                </h5>

                                <p class="mt-2 text-sm text-gray-700">
                                    N${{ $product->price }}
                                </p>

                                <button class="block w-full p-4 mt-4 text-sm font-medium bg-yellow-500 rounded-sm"
                                    type="button">
                                    Add to Cart
                                </button>
                            </div>
                        </a>
                    </div>
                @empty
                @endforelse


            </div>
            <div class="container py-6">
                {{ $productList->onEachSide(5)->links() }}

            </div>



        </div>
        <div class="box row-start-1 row-end-auto col-start-5 col-end-6">
            <div class="">


                <details open class="overflow-hidden border border-gray-200 rounded">
                    <summary class="flex items-center justify-between px-5 py-3 bg-gray-100 lg:hidden">
                        <span class="text-sm font-medium"> Toggle Filters </span>

                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </summary>

                    <form action="" class="border-t border-gray-200 lg:border-t-0">
                        <fieldset>
                            <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                                Type
                            </legend>

                            <div class="px-5 py-6 space-y-2">
                                <div class="flex items-center">
                                    <input id="toy" type="checkbox" name="type[toy]"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="toy" class="ml-3 text-sm font-medium"> Toy </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="game" type="checkbox" name="type[game]"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="game" class="ml-3 text-sm font-medium"> Game </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="outdoor" type="checkbox" name="type[outdoor]"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="outdoor" class="ml-3 text-sm font-medium">
                                        Outdoor
                                    </label>
                                </div>

                                <div class="pt-2">
                                    <button type="button" class="text-xs text-gray-500 underline">
                                        Reset Type
                                    </button>
                                </div>
                            </div>
                        </fieldset>

                        <div>
                            <fieldset>
                                <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                                    Age
                                </legend>

                                <div class="px-5 py-6 space-y-2">
                                    <div class="flex items-center">
                                        <input id="3+" type="checkbox" name="age[3+]"
                                            class="w-5 h-5 border-gray-300 rounded" />

                                        <label for="3+" class="ml-3 text-sm font-medium"> 3+ </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="8+" type="checkbox" name="age[8+]"
                                            class="w-5 h-5 border-gray-300 rounded" />

                                        <label for="8+" class="ml-3 text-sm font-medium"> 8+ </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="12+" type="checkbox" name="age[12+]"
                                            class="w-5 h-5 border-gray-300 rounded" />

                                        <label for="12+" class="ml-3 text-sm font-medium"> 12+ </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="16+" type="checkbox" name="age[16+]"
                                            class="w-5 h-5 border-gray-300 rounded" />

                                        <label for="16+" class="ml-3 text-sm font-medium"> 16+ </label>
                                    </div>

                                    <div class="pt-2">
                                        <button type="button" class="text-xs text-gray-500 underline">
                                            Reset Age
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="flex justify-between px-5 py-3 border-t border-gray-200">
                            <button name="reset" type="button"
                                class="text-xs font-medium text-gray-600 underline rounded">
                                Reset All
                            </button>

                            <button name="commit" type="button"
                                class="px-5 py-3 text-xs font-medium text-white bg-green-600 rounded">
                                Apply Filters
                            </button>
                        </div>
                    </form>
                </details>

            </div>
        </div>

    </div>
@endsection
