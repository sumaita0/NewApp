@extends('layouts.app')

@section('content')

@php
    $user = Auth::user();

    // Redirect based on usertype
    if($user->usertype === 'admin') {
        header('Location: /admin/dashboard');
        exit;
    }
@endphp

<div class="py-10 max-w-7xl mx-auto sm:px-6 lg:px-8">

    <!-- Profile Card -->
    <div class="bg-white shadow rounded-lg p-6">
        <div class="pt-32">
            <!-- Profile Photo & Basic Info -->
            <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-8">
                
                <!-- Profile Photo -->
                <div class="mb-6 md:mb-0">
                    <img src="{{ $user->profile_photo_path ? asset('images/' . $user->profile_photo_path) : asset('images/default-user.png') }}" 
                         alt="Profile Photo" 
                         class="w-32 h-32 rounded-full object-cover border-2 border-gray-300">
                </div>

                <!-- Basic Info -->
                <div class="flex-1 space-y-1">
                    <h3 class="text-2xl font-bold">{{ $user->name }}</h3>
                    <p class="text-gray-500">{{ $user->email }}</p>
                    <p class="text-gray-500">User Type: {{ $user->usertype ?? 'User' }}</p>
                    <p class="text-gray-500">Phone: {{ $user->phone ?? 'Not set' }}</p>
                    <p class="text-gray-500">Address: {{ $user->address ?? 'Not set' }}</p>
                    <p class="text-gray-500">Gender: {{ $user->gender ?? 'Not set' }}</p>
                    <p class="text-gray-500">Date of Birth: {{ $user->date_of_birth ?? 'Not set' }}</p>
                    <p class="text-gray-500">Bio: {{ $user->bio ?? 'No bio yet' }}</p>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6">
                    <a href="{{ route('profile.edit') }}" 
                    class="block px-4 sm:px-6 py-2 text-gray-700 font-semibold bg-slate-500 hover:bg-[#1193d4] hover:text-white rounded">
                        Edit Profile
                    </a>
                 </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Jetstream Forms -->

        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Update Profile Info</h4>
                @livewire('profile.update-profile-information-form')
            </div>
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Update Password</h4>
                @livewire('profile.update-password-form')
            </div>
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Two-Factor Authentication</h4>
                @livewire('profile.two-factor-authentication-form')
            </div>
        @endif

        <div class="mb-6">
            <h4 class="text-lg font-semibold mb-2">Logout Other Browser Sessions</h4>
            @livewire('profile.logout-other-browser-sessions-form')
        </div>

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2 text-red-600">Delete Account</h4>
                @livewire('profile.delete-user-form')
            </div>
        @endif
    </div>

</div>
@endsection
