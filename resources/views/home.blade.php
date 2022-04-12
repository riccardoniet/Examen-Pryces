@extends('layouts.adminnav')

@section('content')

<div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-white mb-12 text-center">Welkom {{ Auth::user()->name }}</h1>
</div>

@endsection

