<form action="{{ isset($movie) ? route('movies.update', $movie->id) : route('movies.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if(isset($movie))
        @method('PUT')
    @endif  
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Title</label>
            <input type="text" id="title" name="title" value="{{ $movie->title ?? ''}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-600 gray:border-gray-500 dark:placeholder-gray-400 dark:text-dark" placeholder="Movie title" required />
        </div>
        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Description</label>
            <textarea id="description" name="description" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{ $movie->description ?? ''}}</textarea>
        </div>
        <div>       
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark" for="banner">Upload banner</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400" id="banner" name="banner" type="file">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark" for="image">Upload Image</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark" for="video">Upload Video</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400" id="video" name="video" type="file">
        </div>
        <div>
            <label for="id_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Select gender</label>
            <select id="id_gender" name="id_gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 gray:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach($genders as $gender)
                <option value="{{ $gender->id}}" {{ (isset($movie) && $gender->id == $movie->id_gender) ? 'selected' : '' }}>{{ $gender->name }}</option>
            @endforeach
            </select>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            {{ isset($movie) ? 'Update' : 'Create' }}
        </button>
        
</form>