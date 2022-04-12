<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
            padding-top: 0px;
        }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">

<header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="/home" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Pryces</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a href="/producten" class="mr-5 hover:text-white">Producten</a>
                <a href="/edit" class="mr-5 hover:text-white">Account gegevens</a>
                <a href="/verwijder" class="mr-5 hover:text-white">Account verwijderen</a>

                @if(Auth::user()->rol == 1)
                <a href="/gebruikers" class="mr-5 hover:text-white">Gebruikers</a>
                @endif

                @if(Auth::user()->rol == 1)
                <a href="/providers" class="mr-5 hover:text-white">Providers</a>
                @endif
            </nav>


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Logout
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </form>
        </div>
    </header>

    <!-- <div class="container px-5 py-24 mx-auto">
    <h1  class="text-3xl font-medium title-font text-white mb-12 text-center">Welkom {{ Auth::user()->name }}</h1>
    </div> -->

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Bewerk/Verwijder gegevens</h3>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="route('users/edit')">
                {{ csrf_field() }}
                {{ method_field('patch') }}


                <!-- Naam -->

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">{{ __('Name') }}</label>
                    <input type="text" name="name" id="email" value="{{ Auth::user()->name }}"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>

                <!-- email -->

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                        for="email">{{ __('Email Address') }}</label>
                    <input type="email" id="email" value="{{ Auth::user()->email }}"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>

                <!-- wachtwoord -->

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





</body>