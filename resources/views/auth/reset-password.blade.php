@extends('layouts.base')

@section('title')
    Réinitialiser - @parent
@endsection

@section('content')
    
    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Réinitialisation</h1>

    <div class="w-1/4 mx-auto flex flex-col text-emerald-600">

        <form action="{{ route('password.update') }}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="email">Votre Email</label>
                <input class="mb-1" type="email" name="email" id="email" value="{{ request()->email }}">
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

            <div class="text-center">
                <button class="bg-green-400 hover:bg-green-600 hover:text-white duration-500 text-2xl rounded-lg p-2 mb-3">
                    Réinitialiser le mot de passe
                </button>
            </div>

        </form>

    </div>

@endsection