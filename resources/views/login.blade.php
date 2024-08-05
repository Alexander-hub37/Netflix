<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="relative">
    <div class="absolute inset-0 bg-cover blur-sm bg-[url('https://assets.nflxext.com/ffe/siteui/vlv3/826348c2-cdcb-42a0-bc11-a788478ba5a2/56eb4a2f-2136-4e15-9960-84d26f3bed98/PE-es-20240729-POP_SIGNUP_TWO_WEEKS-perspective_WEB_bb462c08-8ad2-4990-a192-8b2d3b4d1e01_large.jpg')]"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen">
            <div class="w-full max-w-md p-6">
                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg sm:p-6">
                    <form class="space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                        <h5 class="text-xl font-medium text-gray-900">Sign in to our platform</h5>
                        <div>
                            <label for="email" class="text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border @error('email') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5" placeholder="name@company.com"  value="{{ old('email') }}" required />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="text-sm font-medium text-gray-900">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border @error('password') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5" required />
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        @if(session('error'))
                            <p class="text-red-500 text-xs mt-1">
                                {{ session('error') }}
                            </p>
                        @endif
                        <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                        <div class="text-sm font-medium text-gray-500">
                            Not registered? <a href="{{ route('register') }}" class="text-red-700 hover:underline">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
