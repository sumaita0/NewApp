<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="bg-white shadow-2xl rounded-3xl max-w-md w-full p-8">

        <!-- Header -->
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Create Account</h2>
            <p class="text-gray-500 mt-2">Register to get started</p>
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

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" />
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" />
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-semibold">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" />
            </div>

            <div class="mb-4">
                <label for="usertype" class="block text-gray-700 font-semibold">{{ __('User Type') }}</label>
                <select id="usertype" name="usertype" required
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2">
                    <option value="user" {{ old('usertype') == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ old('usertype') == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <button type="submit" class="w-full py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-semibold">
                {{ __('Register') }}
            </button>
        </form>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-gray-600 text-sm">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Log In</a>
            </p>
        </div>

    </div>
</body>
</html>
