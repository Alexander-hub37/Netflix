@extends('layout.template')

@section('title', 'Genders')

@section('content')
<div class="container-fluid">
    <div class="flex items-center justify-between mb-4">
        <div class="flex gap-4">
            <a href="{{ route('genders.create') }}" class="button-primary">
                Create New Genders
            </a>
            <a href="{{ route('genders.archived') }}" class="button-secondary">
                Genres Archived
            </a>
        </div>
        @include('components.modals.modal')
    </div>
   
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    @foreach($genders as $gender)
        <div class=" flex flex-col items-center pb-10 border border-gray-200 rounded-lg">
            <h5>{{ $gender->name }}</h5>
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ route('genders.edit', $gender) }}">
                        @include('components.icons.edit')
                    </a>
                        <form action="{{ route('genders.destroy', $gender) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                @include('components.icons.delete')
                            </button>
                        </form>
                </div>    
            </div>
            @endforeach
    </div>
    <br>
    {{ $genders->links('vendor.pagination.tailwind') }}
</div>
       
        
@endsection

