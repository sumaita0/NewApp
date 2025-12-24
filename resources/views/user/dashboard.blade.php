@extends('layouts.app')

@section('content')

<div class="bg-gray-300 h-20 w-full my-4"></div>

<div class="flex flex-col md:flex-row min-h-screen py-16 bg-white px-4 md:px-12 lg:px-44 ">

    <!-- Sidebar -->
    <aside class="w-full md:w-64 bg-white border border-gray-300 flex-shrink-0 mb-6 md:mb-0 ">
        <div class="p-6 text-center border-b">
            <!-- Profile Photo -->
            <div class="mb-4">
                <img 
                    class="w-24 h-24 rounded-full mx-auto object-cover border-2 border-gray-200" 
                    src="{{ Auth::user()->profile_photo_path ? asset('images/' . Auth::user()->profile_photo_path) : asset('images/default-user.png') }}" 
                    alt="{{ Auth::user()->name ?? 'User' }} Profile Photo"
                />
            </div>
            
            <h2 class="text-xl font-bold">{{ Auth::user()->name ?? 'User' }}</h2>
            <p class="text-gray-500 text-sm">{{ Auth::user()->usertype ?? 'user' }}</p>
        </div>

        <nav class="mt-6 space-y-2 px-2 md:px-0">
            <a href="{{ route('user.dashboard') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Dashboard</a>
            <a href="{{ route('user.bookings') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">My Bookings</a>  
            <a href="{{ route('services.index') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Services</a>  
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Edit Profile</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 md:ml-6">

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6">
            <h1 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-0">Welcome, {{ Auth::user()->name }}</h1>
        </div>

        <!-- Welcome Card -->
        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h2 class="text-xl font-semibold mb-2">Hello {{ Auth::user()->name }}</h2>
            <p class="text-gray-600">
                This is your dashboard. Here you can manage your bookings, view available services, and update your profile.
            </p>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-500 text-sm">My Bookings</h3>
                <p class="text-2xl sm:text-3xl font-bold mt-2">{{ $myBookingsCount ?? 0 }}</p>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-500 text-sm">Pending Orders</h3>
                <p class="text-2xl sm:text-3xl font-bold mt-2">{{ $pendingOrders ?? 0 }}</p>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-500 text-sm">Completed Orders</h3>
                <p class="text-2xl sm:text-3xl font-bold mt-2">{{ $completedOrders ?? 0 }}</p>
            </div>
        </div>

        <!-- Services Section -->
        <section id="services" class="py-10 px-2 sm:px-0">
            <div class="text-center mb-6">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">Available Services</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @forelse($services as $service)
                    <a href="{{ route('services.show', $service->slug) }}"
                       class="bg-[rgb(244,240,240)] p-6 sm:p-8 group transition flex flex-col items-center text-center hover:bg-[#1193d4] cursor-pointer rounded">
                        <div class="mb-4">
                            <img src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}"
                                 class="h-12 w-12 service-icon transition"
                                 alt="{{ $service->title }}">
                        </div>

                        <h3 class="text-lg sm:text-xl font-bold mb-2 text-black group-hover:text-white transition">
                            {{ $service->title }}
                        </h3>

                        <p class="text-gray-800 group-hover:text-white transition mb-2">
                            {{ $service->description }}
                        </p>
                    </a>
                @empty
                    <p class="col-span-3 text-center text-gray-500">No services available yet.</p>
                @endforelse
            </div>
        </section>

    </main>
</div>
@endsection
