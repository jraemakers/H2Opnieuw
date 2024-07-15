@extends('layouts.app')

@section('head')
    <title>H2Opnieuw | Home</title>
    <meta name="title" content="H2Opnieuw | Home" />
    <meta name="description" content="Our goal is to save the world while saving money. H2opnieuw tries to achieve this using sustainable development goals." />
    <meta property="og:title" content="H2Opnieuw | Home" />
    <meta property="og:description" content="Our goal is to save the world while saving money. H2opnieuw tries to achieve this using sustainable development goals." />
@endsection

@section('main')
    <div class="mx-auto container h-auto">
        <h1 class="mx-2 text-center">H<sub>2</sub>Opnieuw&trade;</h1>
        <h2 class="text-center">Save the world while<br>saving money</h2>
    </div>
    <img src="{{ Vite::asset('resources/images/water-min.png') }}" class="absolute bottom-0 select-none -z-10" alt="Water">
@endsection
