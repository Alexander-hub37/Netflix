@extends('layout.template')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-4">{{ $movie->title }}</h1>
        <p class="text-lg mb-4">{{ $movie->description }}</p>

        <div class="mb-6">
            <h2 class="text-2xl font-semibold">Calificaciones:</h2>
            <p>Promedio: {{ number_format($averageRating, 2) }}</p>
        </div>
        
        <form class="max-w-sm mx-auto" action="{{ route('movies.rate', $movie) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Tu Calificación:</label>
                <select id="value" name="value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a rating</option>
                    <option value="0">No es para mí</option>
                    <option value="1">Me gusta</option>
                    <option value="2">Me encanta</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Calificar</button>
        </form>
    </div>
@endsection
