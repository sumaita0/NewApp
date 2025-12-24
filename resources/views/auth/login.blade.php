<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="bg-white shadow-2xl rounded-3xl max-w-md w-full p-8">

        <!-- Header -->
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Welcome Back!</h2>
            <p class="text-gray-500 mt-2">Login to your account</p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" />
            </div>

            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="flex items-center text-gray-600">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <button type="submit" class="w-full py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-semibold">
                {{ __('Log in') }}
            </button>
        </form>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-gray-600 text-sm">
                Not registered yet ? 
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Sign Up</a>
            </p>
        </div>

    </div>
</body>
</html>
