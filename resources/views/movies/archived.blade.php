@extends('layout.template')

@section('title', 'Movies')

@section('content')
<div class="container-fluid">
    <div class="flex items-center justify-between mb-4">
        <a href="{{ route('movies.index') }}" class="button-primary">
            Volver
        </a>
        @include('components.modals.modal')
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Genres</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($movies as $movie)
            <tbody>
                <tr>
                    <td><img src="{{ asset($movie->image) }}" alt="Image"></td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>
                            @foreach($movie->genders as $gender)
                                {{ $gender->name }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                    </td>
                    <td>
                        <div class="flex">
                            <form action="{{ route('movies.restore', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit">
                                    @include('components.icons.edit')
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <br>
</div>
@endsection
