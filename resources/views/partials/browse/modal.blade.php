@foreach($movies as $movie)
<div id="modal-{{ $movie->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative h-[480px] rounded-lg w-full bg-cover bg-center" style="background-image: url('{{ asset($movie->banner) }}');">
            <div class="absolute inset-0 bg-black bg-opacity-50">
                <div class="relative z-10 flex flex-col justify-end h-full p-6 text-left text-white">
                    <div class="mb-4">
                        <h2 class="text-2xl font-bold mb-4 mt-8">{{ ($movie->title) }}</h2>
                        <p class="mt-2 text-base md:text-lg lg:text-xl max-w-md">{{ ($movie->description) }}</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="px-6 py-3 text-base font-semibold text-black bg-white rounded-md">Play</button>
                        <button class="px-6 py-3 text-lg font-semibold text-white bg-gray-700 bg-opacity-70 rounded-md">More information</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 bg-black rounded-lg">
            <form class="mb-4" action="{{ route('browse.rate', $movie) }}" method="POST">
                @csrf
                <select id="value" name="value" class="p-2 border rounded bg-black text-white border-gray-600">
                <option selected>Choose a rating</option>
                <option value="0">It's not for me</option>
                <option value="1">I like it</option>
                <option value="2">I love it</option>
                </select>
                <button type="submit" class="bg-red-700 text-white py-2 px-4 rounded-md mt-2">Qualify</button>
            </form>
            <div class="flex items-center space-x-2">
                @include('components.icons.star')
                <p class="font-normal text-white-700 dark:text-gray-400">{{ number_format($movie->qualifications_avg_value, 2) }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach