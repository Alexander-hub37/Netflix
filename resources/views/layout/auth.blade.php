<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="background-image"></div>
        <div class="container-app">
            <div class="card-app">
            @yield('content')
            </div>  
        </div>
    
</body>
</html>
