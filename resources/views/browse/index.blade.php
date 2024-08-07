<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    @vite('resources/scss/app.scss','resources/js/app.js')

</head>
<body class="bg-black text-white">

    <header>
        @include('partials.browse.header')
    </header>

    @if(isset($searching) && $searching)
        @include('partials.browse.search')
    @else
        @include('partials.browse.main-content')
    @include('partials.browse.modal', ['movies' => $allMovies]) 
    @endif

    <footer>
    </footer>
    @vite(['resources/js/app.js'])
</body>
</html>
