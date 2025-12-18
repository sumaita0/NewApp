@extends('layouts.app')

@section('content')
<div class="py-10 max-w-7xl mx-auto sm:px-6 lg:px-8">

    <!-- Profile Card -->
    <div class="bg-white shadow rounded-lg p-6">
        <div class="pt-32">
            <!-- Profile Photo & Basic Info -->
            <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-8">
                
                <!-- Profile Photo -->
                <div class="mb-6 md:mb-0">
                    <img src="{{ Auth::user()->profile_photo_url }}" 
                         alt="Profile Photo" 
                         class="w-32 h-32 rounded-full object-cover border-2 border-gray-300">
                </div>

                <!-- Basic Info -->
                <div class="flex-1 space-y-1">
                    <h3 class="text-2xl font-bold">{{ Auth::user()->name }}</h3>
                    <p class="text-gray-500">{{ Auth::user()->email }}</p>
                    <p class="text-gray-500">User Type: {{ Auth::user()->usertype ?? 'User' }}</p>
                    <p class="text-gray-500">Phone: {{ Auth::user()->phone ?? 'Not set' }}</p>
                    <p class="text-gray-500">Address: {{ Auth::user()->address ?? 'Not set' }}</p>
                    <p class="text-gray-500">Gender: {{ Auth::user()->gender ?? 'Not set' }}</p>
                    <p class="text-gray-500">Date of Birth: {{ Auth::user()->date_of_birth ?? 'Not set' }}</p>
                    <p class="text-gray-500">Bio: {{ Auth::user()->bio ?? 'No bio yet' }}</p>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Jetstream Forms -->

        <!-- 1. Update Profile Info (with Photo Upload) -->
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Update Profile Info</h4>
                @livewire('profile.update-profile-information-form')
            </div>
        @endif

        <!-- 2. Update Password -->
        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Update Password</h4>
                @livewire('profile.update-password-form')
            </div>
        @endif

        <!-- 3. Two-Factor Authentication -->
        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Two-Factor Authentication</h4>
                @livewire('profile.two-factor-authentication-form')
            </div>
        @endif

        <!-- 4. Logout Other Browser Sessions -->
        <div class="mb-6">
            <h4 class="text-lg font-semibold mb-2">Logout Other Browser Sessions</h4>
            @livewire('profile.logout-other-browser-sessions-form')
        </div>

        <!-- 5. Delete Account -->
        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2 text-red-600">Delete Account</h4>
                @livewire('profile.delete-user-form')
            </div>
        @endif
    </div>

</div>
@endsection
