@extends('Site.Competitions.layouts.app')


@section('content')
      <div class="container px-6 mx-auto mb-40">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <tbody>
                    @forelse ($comp->teams as $team)
                        <tr class="border-b border-gray-200 dark:border-gray-700">

                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                Sliver
                            </td>
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                Sliver
                            </td>

                        </tr>


                    @empty
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            No teams found
                        </td>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
@endsection
