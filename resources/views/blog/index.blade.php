@extends('layouts.base')

@section('title')
    Blog - @parent
@endsection

@section('content')
    
    <h1 class="text-6xl text-center text-emerald-600 font-[Kalam] my-6">Les Articles</h1>

    @if (session('status'))
        <div class="w-2/3 mx-auto bg-green-400 text-emerald-600 text-center text-2xl rounded-lg p-2 mb-6">
            {{ session('status') }}
        </div>
    @endif

    <div class="flex flex-col gap-6">

        @foreach ($posts as $post)        
            <div class="w-2/3 mx-auto flex flex-row flex-wrap gap-6 text-emerald-600 border-4 border-green-400 rounded-lg p-6 mb-6">
                <div class="w-full flex flex-row justify-between items-center bg-green-400 rounded-lg p-2 mb-3">
                    <p class="text-2xl">{{ $post->author }}</p>
                    <div class="flex flex-row gap-3">
                        <p class="text-xl">Le: {{ $post->created_at }}</p>
                        {{-- @if () --}}
                            <p class="text-xl">Modifié le: {{ $post->updated_at }}</p>
                        {{-- @endif --}}
                    </div>
                </div>
                <div class="flex flex-row items-center gap-6">
                    <p class="w-3/5 mx-auto text-xl">{{ $post->content }}</p>
                    {{-- <img class="w-1/5 rounded-lg" src="img/linkfouet.jpg"> --}}
                    <img class="w-1/5 rounded-lg" src="{{ $post->image }}">
                </div>
                <div class="w-full flex flex-row gap-3">
                    <a class="w-1/2 bg-green-400 hover:bg-green-600 duration-500 text-3xl text-center hover:text-white rounded-lg p-3" href="{{ route('post.edit', $post->id) }}">Modifier</a>
                    {{-- <a class="w-1/2 bg-green-400 hover:bg-green-600 duration-500 text-3xl text-center hover:text-white rounded-lg p-3" href="{{ route('post.delete', $post->id) }}">Supprimer</a> --}}
                    <form action="{{ route('post.delete', $post->id) }}" method="post" class="w-1/2 inline">
                        @csrf
                        @method('delete')
                        <button class="w-full bg-green-400 hover:bg-green-600 duration-500 text-3xl text-center hover:text-white rounded-lg p-3">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>

    <div class="w-2/3 mx-auto mb-6">
        {{ $posts->links() }}
    </div>

@endsection