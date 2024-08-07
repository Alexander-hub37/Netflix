<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="background-image"></div>
        <div class="container-app">
            <div class="card-app">
                <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                    <h5>Sign in to our platform</h5>
                    <div>
                        <label for="email">Your email</label>
                        <input type="email" name="email" id="email" class="input-app @error('email') error @else no-error @enderror " placeholder="name@company.com"  value="{{ old('email') }}" required />
                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="input-app @error('password') error @else no-error @enderror" required />
                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    @if(session('error'))
                        <p class="error">
                            {{ session('error') }}
                        </p>
                    @endif
                    <button type="submit" class="button-primary w-full">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500">
                        Not registered? <a href="{{ route('register') }}" class="text-red-700 hover:underline">Create account</a>
                    </div>
                </form>
            </div>  
        </div>
    
</body>
</html>
