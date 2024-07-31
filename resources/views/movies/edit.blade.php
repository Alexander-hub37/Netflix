@extends('layout.template')

@section('title', 'Edit Movies')

@section('content')

<div class="max-w-lg mx-auto mt-10 px-4">
    <h1>Edit Movie</h1>
        <div class="card">
            @include('movies/form', ['movie' => $movie])
        </div>
</div>
@endsection
