<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="background-image"></div>
    <div class="container-app">
        <div class="card-app">
            <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
                <h5 class="text-xl font-medium text-gray-900">Sign up to our platform</h5>
                <div>
                    <label for="name">Your name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="input-app @error('name') error @else no-error @enderror" placeholder="name" required />
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email" >Your email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="input-app @error('email') error @else no-error @enderror" placeholder="name@company.com" required />
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password">Your password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="input-app @error('password') error @else no-error @enderror" required />
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="input-app @error('password_confirmation') error @else no-error @enderror" required />
                    @error('password_confirmation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="button-primary w-full">Create your account</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Are you already registered? <a href="{{ route('login') }}" class="text-red-700 hover:underline">Sign in</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
