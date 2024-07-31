<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    @vite('resources/scss/app.scss','resources/js/app.js')

</head>
<body class="bg-black text-white">

    @include('browse.header')

    @if(isset($searching) && $searching)

        @include('browse.search')
    @else
        @include('browse.main-content')

    @include('browse.modal', ['movies' => $topRatedMovies]) 
    @endif
    @vite(['resources/js/app.js'])

</body>

</html>
