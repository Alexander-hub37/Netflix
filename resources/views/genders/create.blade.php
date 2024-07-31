@extends('layout.template')

@section('title', 'Create Genders')

@section('content')

<div class="app-container">
<h1>Create Gender</h1>
        <div class="card">
            @include('genders/form', ['gender' => null])
        </div>
</div>
@endsection
