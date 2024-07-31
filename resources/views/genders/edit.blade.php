@extends('layout.template')

@section('title', 'Edit Genders')

@section('content')

<div class="app-container">
    <h1 class="h1">Edit Gender</h1>
        <div class="card">
            @include('genders/form', ['gender' => $gender])
        </div>
</div>
@endsection
