@extends('layout.template')

@section('title', 'Edit Genders')

@section('content')

<div class="max-w-lg mx-auto mt-10 px-4">
    <h1>Edit Gender</h1>
        <div class="card">
            @include('genders/form', ['gender' => $gender])
        </div>
</div>
@endsection
