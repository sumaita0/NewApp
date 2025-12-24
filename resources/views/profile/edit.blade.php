@extends('layouts.app')

@section('content')
<div class="container mx-auto py-16 px-4 md:px-12 lg:px-44">
    <h2 class="text-3xl font-bold mb-8">Edit Profile</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded shadow space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-semibold mb-2">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full border border-gray-300 p-2 rounded">
            @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block font-semibold mb-2">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full border border-gray-300 p-2 rounded">
            @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block font-semibold mb-2">Password (leave blank to keep current)</label>
            <input type="password" name="password" id="password" class="w-full border border-gray-300 p-2 rounded">
            @error('password')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block font-semibold mb-2">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <!-- Profile Photo -->
        <div>
            <label for="profile_photo" class="block font-semibold mb-2">Profile Photo</label>
            <input type="file" name="profile_photo" id="profile_photo" class="w-full">
            @if($user->profile_photo_path)
                <img src="{{ asset('images/' . $user->profile_photo_path) }}" alt="Profile Photo" class="h-24 w-24 rounded mt-2 object-cover border">
            @endif
            @error('profile_photo')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>

        <!-- Submit -->
        <div>
            <button type="submit" class="bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e7ac1] transition">
                Update Profile
            </button>
        </div>
    </form>
</div>
@endsection
