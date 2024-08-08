@extends('layout.template')

@section('title', 'Genders')

@section('content')
<div class="container-fluid">
    <div class="flex items-center justify-between mb-4">
        <a href="{{ route('genders.index') }}" class="button-primary">
            Volver
        </a>
        @include('components.modals.modal')
    </div>
   
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    @foreach($genders as $gender)
        <div class=" flex flex-col items-center pb-10 border border-gray-200 rounded-lg">
            <h5>{{ $gender->name }}</h5>
                <div class="flex mt-4 md:mt-6">
                    <form action="{{ route('genders.restore', $gender->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">
                            @include('components.icons.edit')
                        </button>
                    </form>
                </div>    
        </div>
    @endforeach
    </div>
    <br>
</div>
       
        
@endsection

