<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title') {{ config('app.name') }} @show
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Damion&family=Kalam:wght@400;700&family=Shrikhand&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-green-200 font-[Kalam]">
    <header class="flex flex-row justify-between bg-green-400 text-emerald-600 font-[Kalam] p-6">
        <div class="flex flex-row items-center font-[] gap-6 ml-6">
            <h1 class="text-6xl font-bold font-[Shrikhand]">{{ config('app.name') }}</h1>
            <a class="text-5xl hover:text-white" href="{{ route('home') }}">Accueil</a>
            <a class="text-5xl hover:text-white" href="{{ route('blog') }}">Blog</a>
        </div>
        <div class="flex flex-row items-center font-[Kalam] gap-6 mr-6">
            <a class="text-5xl hover:text-white" href="#">S'enregistrer</a>
            <a class="text-5xl hover:text-white" href="#">S'inscrire</a>
        </div>
    </header>

    @yield('content')

    <footer class="bg-green-300 text-3xl text-center text-emerald-600 font-[Kalam] p-6">
        Copyright &copy {{ now()->year }} - {{ config('app.name') }}
    </footer>
</body>
</html>