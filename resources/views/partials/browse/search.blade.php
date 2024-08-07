<main class="container mx-auto px-4 py-10">
        <br><br>
        <section class="mb-12">
            @if(count($movies) > 0)
            <h2 class="text-2xl font-bold mb-4">Search results for "{{ $query }}"</h2>
                
                <form action="{{ route('browse.search') }}" method="GET" class="mb-4">
                    <input type="hidden" name="query" value="{{ request('query') }}">
                    <select name="gender" class="p-2 border rounded bg-black text-white border-gray-600">
                        <option value="">All genres</option>
                        @foreach($genders as $gender)
                            <option value="{{ $gender->id }}" {{ request('gender') == $gender->id ? 'selected' : '' }}>
                                {{ $gender->name }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="ml-2 p-2 bg-red-700 text-white rounded">Filter</button>
                </form>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @foreach($movies as $movie)
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset($movie->image) }}">
                    </div>
                @endforeach
                </div>
            @else
                <p>No results found for "{{ $query }}"</p>
            @endif
        </section>
    </main>
