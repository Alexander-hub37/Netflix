@extends('layout.template')

@section('title', 'Create Genders')

@section('content')

<div class="max-w-lg mx-auto mt-10 px-4">
<h1>Create Gender</h1>
        <div class="card">
            @include('genders/form', ['gender' => null])
        </div>
</div>
@endsection
