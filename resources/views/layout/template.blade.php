<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <svg width="60px" height="60px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M478.4 221.3c-44.7 0-81 36.3-81 81s36.3 81 81 81 81-36.3 81-81-36.3-81-81-81z m32.4 288.9c0-17.9-14.5-32.4-32.4-32.4S446 492.3 446 510.2s14.5 32.4 32.4 32.4 32.4-14.5 32.4-32.4z m-113.4 208c0 44.7 36.3 81 81 81s81-36.3 81-81-36.3-81-81-81c-44.8 0-81 36.2-81 81z m207.9-208c0 44.7 36.3 81 81 81s81-36.3 81-81-36.3-81-81-81-81 36.3-81 81z m-415.9 0c0 44.7 36.3 81 81 81s81-36.3 81-81-36.3-81-81-81-81 36.3-81 81z m766.4 379.1c-30-65.3-95.7-108-167.6-108.7-37.7-0.6-74.2 10.6-105.5 31.6-0.2 0.1-0.3 0.2-0.5 0.3-60.3 40.7-130.8 62.3-203.8 62.3-201 0-364.5-163.5-364.5-364.5s163.5-364.5 364.5-364.5 364.5 163.5 364.5 364.5c0 61.7-15.7 122.6-45.3 176.2-6.5 11.7-2.2 26.5 9.5 33s26.5 2.2 33-9.5c33.6-60.8 51.4-129.8 51.4-199.7 0-227.8-185.3-413.1-413.1-413.1S65.3 282.5 65.3 510.3s185.3 413.1 413.1 413.1c82.1 0 161.4-24.1 229.4-69.6 0.2-0.1 0.5-0.2 0.7-0.4 23.4-16.1 50.8-24.1 79.3-24.2 53.1 0.5 101.7 32.1 123.9 80.4 4.1 8.9 12.9 14.2 22.1 14.2 3.4 0 6.8-0.7 10.1-2.2 12.2-5.7 17.5-20.1 11.9-32.3z" fill="#4f91e8"></path></g></svg>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{ route('movies.index') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Movies</a>
            </li>
            <li>
                <a href="{{ route('genders.index') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Genders</a>
            </li>
            <li>
                <a href="{{ route('browse.index') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Netflix</a>
            </li>
            </ul>
        </div>
        </div>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
       
    </footer>
</body>
</html>
