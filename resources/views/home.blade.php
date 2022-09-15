@extends('layouts.base')

@section('title')
    Accueil - @parent
@endsection

@section('content')

    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Bienvenue sur {{ config('app.name') }}</h1>

    <p class="w-1/3 mx-auto text-2xl text-center text-emerald-600 font-[Kalam] mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores quae, eveniet, porro repellat dicta quas ad qui reprehenderit at praesentium dolorum corporis facilis officia aliquam molestias assumenda dolores saepe esse.</p>

    <div class="w-2/3 mx-auto flex flex-row flex-wrap gap-6 border-4 border-green-400 rounded-lg p-6 mb-6">
        <img class="rounded-lg" src="img/tetra.jpg">
        <img class="rounded-lg" src="img/zelda.jpg">
        <img class="rounded-lg" src="img/linkfouet.jpg">
    </div>

@endsection