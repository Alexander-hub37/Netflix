@extends('layout.auth')
@section('title', $formType === 'login' ? 'Login' : 'Register')
@section('content')
    <form class="space-y-6" method="POST" action="{{ route($formType === 'login' ? 'login' : 'register') }}">
        @csrf
        <h5>{{ $formType === 'login' ? 'Sign in to our platform' : 'Sign up to our platform' }}</h5>

        @if ($formType === 'register')
            <div>
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="input-app @error('name') error @else no-error @enderror" placeholder="name" required />
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        @endif

        <div>
            <label for="email">{{ $formType === 'login' ? 'Your email' : 'Your email' }}</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="input-app @error('email') error @else no-error @enderror" placeholder="name@company.com" required />
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">{{ $formType === 'login' ? 'Your password' : 'Your password' }}</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="input-app @error('password') error @else no-error @enderror" required />
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        @if ($formType === 'register')
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="input-app @error('password_confirmation') error @else no-error @enderror" required />
                @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        @endif

        @if(session('error'))
            <p class="error">
                {{ session('error') }}
            </p>
        @endif

        <button type="submit" class="button-primary w-full">{{ $formType === 'login' ? 'Login to your account' : 'Create your account' }}</button>

        <div class="text-sm font-medium text-gray-500">
            @if ($formType === 'login')
                Not registered? <a href="{{ route('register') }}" class="text-red-700 hover:underline">Create account</a>
            @else
                Are you already registered? <a href="{{ route('login') }}" class="text-red-700 hover:underline">Sign in</a>
            @endif
        </div>
    </form>
@endsection
