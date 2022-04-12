@extends('layouts.adminnav')

@section('content')

<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl">Vul je gegevens in</h3>
    </section>

    <section class="mt-10">
        <form class="flex flex-col" method="POST" action="">
            @csrf


            <!-- Email -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                    for="email">{{ __('Email Address') }}</label>
                <input type="email" id="email"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>


            <!-- Name -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="naam">{{ __('Naam') }}</label>
                <input type="text" id="naam"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="name" value="{{ old('naam') }}" required autocomplete="name" autofocus>
            </div>


            <!-- Achternaam -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                    for="achternaam">{{ __('Achternaam') }}</label>
                <input type="text" id="achternaam"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="lastname" value="{{ old('achternaam') }}" required autocomplete="lastname" autofocus>
            </div>


            <!-- Adres -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="adres">{{ __('Adres') }}</label>
                <input type="text" id="adres"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="adres" value="{{ old('adres') }}" required autocomplete="adress" autofocus>
            </div>

            <!-- Stad -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="stad">{{ __('Stad') }}</label>
                <input type="text" id="stad"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="stad" value="{{ old('stad') }}" required autocomplete="city" autofocus>
            </div>

            <!-- Postcode -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                    for="postcode">{{ __('Postcode') }}</label>
                <input type="text" id="postcode"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="postcode" value="{{ old('postcode') }}" required autocomplete="postalcode" autofocus>
            </div>

            <!-- telefoonnummer -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                    for="telefoonnummer">{{ __('telefoonnummer') }}</label>
                <input type="text" id="telefoonnummer"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                    name="telefoonnummer" value="{{ old('telefoonnummer') }}" required autocomplete="phonenumber"
                    autofocus>
            </div>

            <!-- Provider -->


            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="provider" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Provider</label>
                <select id="provider" name="provider" autocomplete="provider"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach($providers as $provider)
                    <option value='{{ $provider->id }}'>{{ $provider->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- pakket -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="pakket " class="block text-gray-700 text-sm font-bold mb-2 ml-3">Pakket</label>
                <select id="pakket" name="pakket" autocomplete="pakket"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Internet</option>
                    <option>Internet/bellen</option>
                    <option>Internet/bellen/TV</option>
                </select>
            </div>

            <!-- betaling -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="betaling" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Betaling</label>
                <select id="betaling" name="betaling" autocomplete="betaling"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Ideal</option>
                    <option>Paypal</option>
                    <option>Je ziel</option>
                </select>
            </div>


            <button
                class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                type="submit">Betaal</button>
        </form>
    </section>
</main>




<style>
    .body-bg {
        background-color: #9921e8;
        background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
    }

    .form {
        margin-left: 35px;
        margin-right: 35px;
        padding-top: 50px;
    }

</style>
@endsection
