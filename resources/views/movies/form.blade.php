<form action="{{ isset($movie) ? route('movies.update', $movie->id) : route('movies.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if(isset($movie))
        @method('PUT')
    @endif
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $movie->title ?? '')}}"  class="input-app @error('title') error @else no-error @enderror" placeholder="Movie title" required />
        @error('title')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="2" class="input-app @error('description') error @else no-error @enderror" placeholder="Leave a comment...">{{ $movie->description ?? ''}}</textarea>
        @error('description')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div>       
        <label for="banner">Upload banner</label>
        <input class="input-file" id="banner" name="banner" type="file">
    </div>
    <div>
        <label for="image">Upload Image</label>
        <input class="input-file" id="image" name="image" type="file">
    </div>
    <div>
        <label for="video">Upload Video</label>
        <input class="input-file" id="video" name="video" type="file">
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
    <button type="submit" class="button-primary w-full">
        {{ isset($movie) ? 'Update' : 'Create' }}
    </button>
</form>
