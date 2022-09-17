@extends('layouts.base')

@section('title')
    Nouvel article - @parent
@endsection

@section('content')
    
    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Nouvel article</h1>

    <div class="w-1/4 mx-auto flex flex-col text-emerald-600">

        {{-- <ul class="mb-6">
            @foreach($errors->all() as $error)
                <li class="text-xl">{{ $error }}</li>
            @endforeach
        </ul> --}}

        <form action="" method="post" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="author">Votre pseudo</label>
                <input class="mb-1" type="text" name="author" id="author" value="{{ old('author') }}">
                @error('author')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="content">Votre article</label>
                <textarea class="mb-1" name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                @error('content')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col border-4 border-green-400 rounded-lg text-2xl p-4 mb-3">
                <label class="mb-1" for="image">Image</label>
                <input class="mb-1" type="file" name="image" id="image" value="{{ old('image') }}">
                @error('image')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center">
                <button class="bg-green-400 hover:bg-green-600 hover:text-white duration-500 text-2xl rounded-lg p-2 mb-3">Poster</button>
            </div>

        </form>

    </div>

@endsection