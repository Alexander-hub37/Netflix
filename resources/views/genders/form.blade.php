<form action="{{ isset($gender) ? route('genders.update', $gender->id) : route('genders.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if(isset($gender))
        @method('PUT')
    @endif

    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $gender->name ?? '')}}" class="shadow-sm bg-gray-50 border @error('name') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-600 gray:border-gray-600 black:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Name" required />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        {{ isset($gender) ? 'Update' : 'Create' }}
    </button>
    
</form>