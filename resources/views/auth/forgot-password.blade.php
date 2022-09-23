@extends('layouts.base')

@section('title')
    Mot de passe oublié - @parent
@endsection

@section('content')
    
    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Mot de passe oublié</h1>

    <div class="w-1/4 mx-auto flex flex-col text-emerald-600">

        <form action="" method="post">
            @csrf

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="email">Email</label>
                <input class="mb-1" type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center">
                <button class="bg-green-400 hover:bg-green-600 hover:text-white duration-500 text-2xl rounded-lg p-2 mb-3">Envoyer un lien</button>
            </div>

        </form>

    </div>

@endsection