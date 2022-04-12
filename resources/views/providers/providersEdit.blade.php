@extends('layouts.adminnav')

@section('content')


<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl">Bewerk gegevens</h3>
    </section>

    <section class="mt-10">
        <form class="flex flex-col" method="post" action="">
            {{ csrf_field() }}


            <!-- Naam -->

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Naam</label>
                <input type="text" name="name" value="{{ $provider->name }}"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
            </div>

            <button
                class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                type="submit">Submit</button>
        </form>
    </section>
</main>


<style>
    .body-bg {
        background-color: #9921e8;
        background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
    }

</style>

@endsection
