@extends('layout.template')

@section('title', 'Create Movies')

@section('content')

<div class="max-w-lg mx-auto mt-10 px-4">
    <h1>Create Movie</h1>
        <div class="card">
            @include('movies/form', ['movie' => null])
        </div>
</div>
@endsection
