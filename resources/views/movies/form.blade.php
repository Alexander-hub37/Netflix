<form action="{{ isset($movie) ? route('movies.update', $movie->id) : route('movies.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if(isset($movie))
        @method('PUT')
    @endif
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $movie->title ?? '')}}"  class="input-title @error('title') error @else no-error @enderror" placeholder="Movie title" required />
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{ $movie->description ?? ''}}</textarea>
    </div>
    <div>       
        <label for="banner">Upload banner</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400" id="banner" name="banner" type="file">
    </div>
    <div>
        <label for="image">Upload Image</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file">
    </div>
    <div>
        <label for="video">Upload Video</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400" id="video" name="video" type="file">
    </div>
    <div>
        <label for="genders">Select gender(s)</label>
        <div class="flex flex-wrap">
            @foreach($genders as $gender)
                <div class="mr-4 mb-2">
                    <input type="checkbox" id="gender_{{ $gender->id }}" name="genders[]" value="{{ $gender->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        @if(isset($movie) && $movie->genders->contains($gender->id)) checked @endif
                        class="mr-2">
                    <label for="gender_{{ $gender->id }}">{{ $gender->name }}</label>
                </div>
            @endforeach
        </div>
    </div>
    <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        {{ isset($movie) ? 'Update' : 'Create' }}
    </button>
</form>
