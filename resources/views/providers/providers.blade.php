@extends('layouts.adminnav')

@section('content')


<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 mt-5">
    <a href="{{ url('providers/providersCreate/') }}">
        <button
            class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Create</button>
    </a>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Naam
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                options
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y">


                        @foreach($providers as $provider)


                        <tr class="hover:bg-gray-100 divide-gray-200">


                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{$provider->name}}
                                </div>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap">

                                <a href="{{ url('providers/providersEdit/' . $provider->id) }}">
                                    <button
                                        class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Edit</button>
                                </a>
                                <a href="{{ url('providers/providersDelete/' . $provider->id) }}">
                                    <button
                                        class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
