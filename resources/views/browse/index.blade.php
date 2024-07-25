<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">

    <nav class="fixed w-full bg-gray-900 bg-opacity-75 z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">Netflix</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-gray-300">Inicio</a>
                <a href="#" class="hover:text-gray-300">Series</a>
                <a href="#" class="hover:text-gray-300">Películas</a>
                <a href="#" class="hover:text-gray-300">Novedades</a>
                <a href="#" class="hover:text-gray-300">Mi Lista</a>
            </div>
            <div class="space-x-4">
                <a href="#" class="hover:text-gray-300">Buscar</a>
                <a href="#" class="hover:text-gray-300">Perfil</a>
            </div>
        </div>
    </nav>

    @if(isset($latestMovie))
    <header class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset($latestMovie->banner) }}');">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
       
        <div class="container mx-auto px-4 py-20 relative z-10" >
            <div class="max-w-lg pt-40">
                <h1 class="text-4xl font-bold mb-50">{{ $latestMovie->title }}</h1>
                <p class="text-lg mb-4 ">{{ $latestMovie->description }}</p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Ver Ahora</a>
                    <a href="#" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Más Información</a>
                </div>
            </div>
        </div>
    </header>
    @endif


    <main class="container mx-auto px-4 py-12">
        @if(isset($moviesByGenre))
        <section class="mb-12">
            @foreach($moviesByGenre as $genre => $movies)
            <h2 class="text-2xl font-bold mb-4">{{ $genre }}</h2>
                @if($movies->count())
                <div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-4 gap-5">
                    @foreach($movies as $movie)
                    <div class="bg-gray-800 rounded-lg overflow-hidden">
                        <img src="{{ asset($movie->image) }}" alt="Película 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ ($movie->title) }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            @endforeach
        </section>
        @endif
       
    </main>
</body>
</html>
