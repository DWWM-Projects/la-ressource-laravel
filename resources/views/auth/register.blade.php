@extends('layouts.base')

@section('title')
    Inscription - @parent
@endsection

@section('content')
    
    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Inscription</h1>

    <div class="w-1/4 mx-auto flex flex-col text-emerald-600">

        <form action="" method="post" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="name">Votre pseudo</label>
                <input class="mb-1" type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="email">Votre Email</label>
                <input class="mb-1" type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="password">Mot de passe</label>
                <input class="mb-1" type="password" name="password" id="password">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="password_confirmation">Confirmation</label>
                <input class="mb-1" type="password" name="password_confirmation" id="password_confirmation">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="terms">
                    <input type="checkbox" name="terms" id="terms">
                    Accepter les conditions générales d'utilisation
                </label>                
                @error('terms')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center">
                <button class="bg-green-400 hover:bg-green-600 hover:text-white duration-500 text-2xl rounded-lg p-2 mb-3">Inscription</button>
            </div>

        </form>

    </div>

@endsection