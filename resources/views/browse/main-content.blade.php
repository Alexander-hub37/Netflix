@if(isset($latestMovie))
<header class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset($latestMovie->banner) }}');">
    <div class="absolute inset-0"></div>

    <div class="container mx-auto px-4 py-20 relative z-10" >
        <div class="max-w-lg pt-56 mt-20">
            <h2 class="text-4xl font-bold">{{ $latestMovie->title }}</h2>
            <p class="text-lg mb-4 ">{{ $latestMovie->description }}</p>
            <div class="flex space-x-4">
                <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Watch movie</a>
                <a href="#" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">More information</a>
            </div>
        </div>
    </div>
</header>
@endif

<main class="container mx-auto px-5 py-0 relative -mt-24">
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4">Top Rated Movies</h2>
            <div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-4 gap-5">
            @foreach($topRatedMovies as $movie)
                <div class="rounded-lg overflow-hidden">
                <button data-modal-target="modal-{{ $movie->id }}" data-modal-toggle="modal-{{ $movie->id }}" type="button">
                    <img src="{{ asset($movie->image) }}" class="w-full h-48 object-cover" >
                </button>
                </div>
            @endforeach
            </div>
    </section>
</main>

<main class="container mx-auto bg-black px-5 -mt-5">
    @if(isset($moviesByGenre))
    <section class="mb-12 ">
        @foreach($moviesByGenre as $genre => $movies)
        <h2 class="text-2xl font-bold mb-4 mt-8">{{ $genre }}</h2>
            @if($movies->count())
            <div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-4 gap-5 -mt-3">
                @foreach($movies as $movie)
                <div class="rounded-lg overflow-hidden">
                <button data-modal-target="modal-{{ $movie->id }}" data-modal-toggle="modal-{{ $movie->id }}" type="button">
                    <img src="{{ asset($movie->image) }}" alt="Película 1" class="w-full h-48 object-cover">
                </button>
                </div>
                @endforeach
            </div>
            @endif
        @endforeach
    </section>
    @endif         
</main>