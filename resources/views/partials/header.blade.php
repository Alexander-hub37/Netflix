<nav class="bg-black">
        <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" class="h-6 sm:h-9" alt="Netflix Logo">
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="flex text-sm bg-red-700 rounded-lg md:me-0 focus:ring-4 focus:ring-red-700" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://img.icons8.com/?size=100&id=85yg4VIbT8Gd&format=png&color=000000" alt="user photo">
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                @auth
                    <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                @endauth
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    @if(Auth::check())
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" href="{{ route('logout') }}">Logout</a>
                    @endif
                </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                @include('components.icons.menu')
            </button>
        </div> 
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black">
            <li>
                <a href="{{ route('movies.index') }}" class="nav-link {{request()->routeIs('movies.index') ? 'active' : '' }}">Movies</a>
            </li>
            <li>
                <a href="{{ route('genders.index') }}" class="nav-link {{request()->routeIs('genders.index') ? 'active' : '' }}">Genders</a>
            </li>
            <li>
                <a href="{{ route('browse.index') }}"  class="nav-link {{request()->routeIs('browse.index') ? 'active' : '' }}">Netflix</a>
            </li>
            </ul>
        </div>    
        </div>
    </nav>