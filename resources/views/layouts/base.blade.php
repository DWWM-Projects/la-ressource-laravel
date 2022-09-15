<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title') {{ config('app.name') }} @show
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-green-200">
    <header class="flex flex-row justify-between bg-green-400 text-emerald-800 p-6">
        <div class="flex flex-row items-center gap-6 ml-6">
            <h1 class="text-6xl">{{ config('app.name') }}</h1>
            <a class="text-3xl hover:text-white" href="{{ route('home') }}">Accueil</a>
            <a class="text-3xl hover:text-white" href="{{ route('blog') }}">Blog</a>
        </div>
        <div class="flex flex-row items-center gap-6 mr-6">
            <a class="text-3xl hover:text-white" href="#">S'enregistrer</a>
            <a class="text-3xl hover:text-white" href="#">S'inscrire</a>
        </div>
    </header>

    @yield('content')

    <footer class="bg-green-300 text-2xl text-center p-6">
        Copyright &copy {{ now()->year }} - {{ config('app.name') }}
    </footer>
</body>
</html>