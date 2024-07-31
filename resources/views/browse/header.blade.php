<nav class="fixed w-full bg-black z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="space-x-4 flex items-center">
        <img href="{{ route('browse.index') }}" width="100px" height="100px" src="{{ asset('storage/Netflix.png') }}" alt="logo">
            <a href="{{ route('browse.index') }}" class="text-white hover:text-gray-300">Home</a>
            <a href="#" class="text-white hover:text-gray-300">Series</a>
            <a href="#" class="text-white hover:text-gray-300">Movies</a>
        </div>
        <div class="space-x-4 flex items-center">
            <form action="{{ route('browse.search') }}" method="GET" class="flex items-center">
                <input type="text" name="query" placeholder="Search movies..." class="p-2 border rounded w-40 md:w-64 bg-black text-white placeholder-white  focus:outline-none focus:ring-2">
            </form>
                <svg width="50px" height="50px" viewBox="-2.28 0 66.3577 66.3577" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <clipPath id="clip-path"> <path clip-rule="evenodd" d="M53.456 52.022A30.766 30.766 0 0 1 30.9 61.829a31.163 31.163 0 0 1-3.833-.237 34.01 34.01 0 0 1-11.15-3.644 31.007 31.007 0 0 1-7.849-6.225l1.282-3.1 13.91-6.212c.625 3.723 7.806 8.175 7.806 8.175s7.213-3.412 8.087-8.211l12.777 6.281z" fill="none"></path> </clipPath> <clipPath id="clip-path-2"> <path clip-rule="evenodd" d="M14.112 46.496l6.814-3.042 10.209 13.978 10.328-13.938 5.949 2.831v20.033h-33.3V46.496z" fill="none"></path> </clipPath> </defs> <title></title> <g data-name="Layer 2" id="Layer_2"> <g data-name="—ÎÓÈ 1" id="_ÎÓÈ_1"> <circle cx="30.8999" cy="30.8999" fill="#3dbc93" r="30.8999"></circle> <path d="M23.255 38.68l15.907.121v12.918l-15.907-.121V38.68z" fill="#f9dca4" fill-rule="evenodd"></path> <path d="M39.165 38.778v3.58a7.783 7.783 0 0 1-.098 1.18 6.527 6.527 0 0 1-.395 1.405c-5.374 4.164-13.939.748-15.306-6.365z" fill-rule="evenodd" opacity="0.11"></path> <path d="M31.129 8.432c21.281 0 12.987 35.266 0 35.266-12.266 0-21.281-35.266 0-35.266z" fill="#ffe8be" fill-rule="evenodd"></path> <path d="M18.365 24.046c-3.07 1.339-.46 7.686 1.472 7.658a31.972 31.972 0 0 1-1.472-7.659z" fill="#f9dca4" fill-rule="evenodd"></path> <path d="M44.135 24.046c3.07 1.339.465 7.686-1.466 7.657a31.978 31.978 0 0 0 1.466-7.657z" fill="#f9dca4" fill-rule="evenodd"></path> <path d="M44.123 24.17s7.96-11.785-2.636-16.334a11.881 11.881 0 0 0-12.87-5.22C22.775 3.805 20.604 6.7 20.604 6.7s-5.53 5.014-10.44 5.117a9.774 9.774 0 0 0 6.28 1.758c-.672 1.68-1.965 7.21 1.989 10.854 4.368-2.868 8.012-8.477 8.012-8.477s.982 3.257.207 4.86a18.879 18.879 0 0 0 7.922-3.531c2.542-2.036 3.893-4.297 5.31-4.326 3.256-.069 4.213 9.74 4.24 11.216z" fill="#ecbe6a" fill-rule="evenodd"></path> <path d="M53.456 52.022A30.766 30.766 0 0 1 30.9 61.829a31.163 31.163 0 0 1-3.833-.237 34.01 34.01 0 0 1-11.15-3.644 31.007 31.007 0 0 1-7.849-6.225l1.282-3.1 13.91-6.212c.625 3.723 7.806 8.175 7.806 8.175s7.213-3.412 8.087-8.211l12.777 6.281z" fill="#498bd9" fill-rule="evenodd"></path> <g clip-path="url(#clip-path)"> <path d="M14.112 46.496l6.814-3.042 10.209 13.978 10.328-13.938 5.949 2.831v20.033h-33.3V46.496z" fill="#545f69" fill-rule="evenodd"></path> <g clip-path="url(#clip-path-2)"> <path d="M37.79 42.881h.732v21.382h-.732V42.881zm-14.775 0h.731v21.382h-.73V42.881zm-2.981 0h.731v21.382h-.731V42.881zm-2.944 0h.731v21.382h-.73V42.881zm-2.981 0h.731v21.382h-.731V42.881zm20.708 0h.731v21.382h-.731V42.881zm-2.981 0h.731v21.382h-.731V42.881zm-2.944 0h.731v21.382h-.731V42.881zm-2.981 0h.731v21.382h-.731V42.881zm20.785 0h.732v21.382h-.732V42.881zm-2.98 0h.73v21.382h-.73V42.881zm-2.944 0h.73v21.382h-.73z" fill="#434955" fill-rule="evenodd"></path> </g> </g> <path d="M23.265 41.27l7.802 9.316-6.305 3.553-4.823-10.591 3.326-2.278z" fill="#58b0e0" fill-rule="evenodd"></path> <path d="M39.155 41.45l-8.088 9.136 6.518 3.553 4.777-10.719-3.207-1.97z" fill="#58b0e0" fill-rule="evenodd"></path> <path d="M21.637 23.157h6.416a1.58 1.58 0 0 1 1.119.464v.002a1.579 1.579 0 0 1 .464 1.117v2.893a1.585 1.585 0 0 1-1.583 1.583h-6.416a1.578 1.578 0 0 1-1.116-.465h-.002a1.58 1.58 0 0 1-.464-1.118V24.74a1.579 1.579 0 0 1 .464-1.117l.002-.002a1.578 1.578 0 0 1 1.116-.464zm6.416.85h-6.416a.735.735 0 0 0-.517.214l-.001.002a.735.735 0 0 0-.214.517v2.893a.73.73 0 0 0 .215.517.735.735 0 0 0 .517.215h6.416a.735.735 0 0 0 .732-.732V24.74a.734.734 0 0 0-.214-.518.731.731 0 0 0-.518-.215z" fill="#464449" fill-rule="evenodd"></path> <path d="M34.548 23.157h6.416a1.58 1.58 0 0 1 1.118.464v.002a1.579 1.579 0 0 1 .465 1.117v2.893a1.585 1.585 0 0 1-1.583 1.583h-6.416a1.58 1.58 0 0 1-1.117-.465l-.001-.002a1.58 1.58 0 0 1-.465-1.116V24.74a1.58 1.58 0 0 1 .465-1.117l.002-.001a1.58 1.58 0 0 1 1.116-.465zm6.416.85h-6.416a.73.73 0 0 0-.517.214l-.001.002a.729.729 0 0 0-.214.517v2.893a.73.73 0 0 0 .214.517l.001.001a.73.73 0 0 0 .517.214h6.416a.735.735 0 0 0 .732-.732V24.74a.734.734 0 0 0-.214-.518h-.001a.731.731 0 0 0-.517-.215z" fill="#464449" fill-rule="evenodd"></path> <path d="M29.415 24.506h3.845v.876h-3.845z" fill="#464449"></path> </g> </g> </g></svg>
        </div>
    </div>
</nav>