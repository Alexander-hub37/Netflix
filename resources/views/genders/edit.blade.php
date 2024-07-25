@extends('layout.template')

@section('title', 'Edit Genders')

@section('content')

<div class="max-w-lg mx-auto mt-10 px-4">
<h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">Edit Gender</h1>

<div class="w-full bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 white:bg-gray-800 gray:border-gray-700">
    @include('genders/form', ['gender' => $gender])
</div>
</div>
@endsection
