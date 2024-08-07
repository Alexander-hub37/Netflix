@if(isset($latestMovie))

<div class="relative h-[555px] w-full">
  <div class="absolute inset-0 bg-cover bg-center lg:bg-[url('https://i.blogs.es/2a9439/avengers_endgame_analisis_problema_marvel/1366_2000.jpeg')] bg-[url('https://imageio.forbes.com/blogs-images/markhughes/files/2019/04/AVENGERS-ENDGAME-poster-DOLBY-CINEMA.jpg?height=1039&width=711&fit=bounds')]">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex flex-col justify-end h-full p-6 text-left text-white">
      <div class="mb-4">
        <h2 class="text-2xl font-bold mb-4 mt-8">{{$latestMovie->title}}</h2>
        <p class="mt-2 text-lg md:text-xl lg:text-2xl max-w-md">{{$latestMovie->description}}</p>
      </div>
      <div class="flex space-x-4">
        <button class="px-6 py-3 text-lg font-semibold text-black bg-white rounded-md">Play</button>
        <button class="px-6 py-3 text-lg font-semibold text-white bg-gray-700 bg-opacity-70 rounded-md">More information</button>
      </div>
    </div>
  </div>
</div>

@endif

<div class="flex flex-wrap lg:flex-nowrap">
    <div class="w-full lg:w-5/6 order-1 lg:order-1">
        <main class="container mx-auto bg-black px-5 -mt-5">
            @if(isset($moviesByGenre))
            <section class="mb-12 ">
                @foreach($moviesByGenre as $genre => $movies)
                <h2 class="text-2xl font-bold mb-4 mt-8">{{ $genre }}</h2>
                    @if($movies->count())
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach($movies as $movie)
                        <div>
                        <button data-modal-target="modal-{{ $movie->id }}" data-modal-toggle="modal-{{ $movie->id }}" type="button">
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset($movie->image) }}">
                        </button>
                        </div>
                        @endforeach
                    </div>
                    @endif
                @endforeach
            </section>
            @endif         
        </main>
    </div>
    <div class="w-full lg:w-1/6 order-2 lg:order-2">
        <main class="container mx-auto bg-black px-5 -mt-5">
            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-4 mt-8">Top Rated</h2>
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        @foreach($topRatedMovies as $movie)
                        <div>
                        <button data-modal-target="modal-{{ $movie->id }}" data-modal-toggle="modal-{{ $movie->id }}" type="button">
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset($movie->image) }}">
                        </button>
                        </div>
                        @endforeach
                    </div>
            </section>
        </main>
    </div>
</div>