@extends('layouts.base')

@section('title')
    Blog - @parent
@endsection

@section('content')
    
    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Les Articles</h1>

    <div class="flex flex-col gap-6">

        <div class="w-2/3 mx-auto flex flex-row flex-wrap gap-6 text-emerald-600 border-4 border-green-400 rounded-lg p-6 mb-6">
            <div class="w-full flex flex-row justify-between items-center bg-green-400 rounded-lg p-2 mb-3">
                <p class="text-2xl">Créateur</p>
                <p class="text-xl">Date</p>
            </div>
            <div class="flex flex-row gap-6">
                <p class="w-3/5 mx-auto text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ipsam quis nostrum reiciendis vel voluptas, hic reprehenderit magnam rerum odit dicta earum. Omnis, laboriosam? Rem fugiat ut eaque adipisci. Dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ipsam quis nostrum reiciendis vel voluptas, hic reprehenderit magnam rerum odit dicta earum. Omnis, laboriosam? Rem fugiat ut eaque adipisci. Dolorum!</p>
                <img class="w-1/5 rounded-lg" src="img/linkfouet.jpg">
            </div>
            <div class="w-full flex flex-row gap-3">
                <a class="w-1/2 bg-green-400 hover:bg-green-600 duration-500 text-3xl text-center hover:text-white rounded-lg p-3" href="#">Modifier</a>
                <a class="w-1/2 bg-green-400 hover:bg-green-600 duration-500 text-3xl text-center hover:text-white rounded-lg p-3" href="#">Supprimer</a>
            </div>
        </div>

    </div>

@endsection