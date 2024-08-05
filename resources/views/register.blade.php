<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="relative">
    <div class="absolute inset-0 bg-cover blur-sm bg-[url('https://assets.nflxext.com/ffe/siteui/vlv3/826348c2-cdcb-42a0-bc11-a788478ba5a2/56eb4a2f-2136-4e15-9960-84d26f3bed98/PE-es-20240729-POP_SIGNUP_TWO_WEEKS-perspective_WEB_bb462c08-8ad2-4990-a192-8b2d3b4d1e01_large.jpg')]"></div>
<div class="relative z-10 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-6">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg sm:p-6">
            <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
                <h5 class="text-xl font-medium text-gray-900">Sign up to our platform</h5>
                <div>
                    <label for="name" class="text-sm font-medium text-gray-900">Your name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="bg-gray-50 border @error('email') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5" placeholder="name" required />
                    @error('name')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border @error('email') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 " placeholder="name@company.com" required />
                    @error('email')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border @error('email') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    @error('password')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border @error('email') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5" required />
                    @error('password_confirmation')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create your account</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Are you already registered? <a href="{{ route('login') }}" class="text-red-700 hover:underline">Sign in</a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
