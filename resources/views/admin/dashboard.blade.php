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
                    src="{{ Auth::user()->profile_photo_path ? asset('images/' . Auth::user()->profile_photo_path) : asset('images/default-admin.png') }}" 
                    alt="{{ Auth::user()->name ?? 'Admin' }} Profile Photo"
                />
            </div>
            
            <h2 class="text-xl font-bold">{{ Auth::user()->name ?? 'Admin' }}</h2>
            <p class="text-gray-500 text-sm">{{ Auth::user()->usertype ?? 'admin' }}</p>
        </div>

        <nav class="mt-6 space-y-2 px-2 md:px-0">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Dashboard</a>
            <a href="{{ route('services.index') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Services</a>  
            <a href="{{ route('services.create') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Add Service</a>
            <a href="{{ route('subservices.index') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Sub-Services</a>  
            <a href="{{ route('subservices.create') }}" class="block px-4 py-2 text-gray-700 font-semibold hover:bg-gray-200 rounded">Add Sub-Service</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 md:ml-6">

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6">
            <h1 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-0">Admin Dashboard</h1>
            <a href="{{ route('profile.edit') }}" 
               class="block px-4 sm:px-6 py-2 text-gray-700 font-semibold bg-slate-500 hover:bg-[#1193d4] hover:text-white rounded">
                Edit Profile
            </a>
        </div>

        <!-- Welcome Card -->
        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h2 class="text-xl font-semibold mb-2">Welcome {{ Auth::user()->name ?? 'Admin' }}</h2>
            <p class="text-gray-600">
                This is your admin panel. From here, you can manage services, sub-services, and view user statistics.
            </p>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-500 text-sm">Total Users</h3>
                <p class="text-2xl sm:text-3xl font-bold mt-2">{{ $totalUsers }}</p>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-500 text-sm">Services</h3>
                <p class="text-2xl sm:text-3xl font-bold mt-2">{{ $totalServices }}</p>
            </div>
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-500 text-sm">Sub-Services</h3>
                <p class="text-2xl sm:text-3xl font-bold mt-2">{{ $totalSubServices }}</p>
            </div>
        </div>

       <!-- Services Section -->
<section id="services" class="py-10 px-2 sm:px-0">
    <div class="text-center mb-6">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">Our Services</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($services as $service)
            <a href="{{ route('services.show', $service->slug) }}"
               class="bg-[rgb(244,240,240)] p-6 sm:p-8 group transition flex flex-col items-center text-center hover:bg-[#1193d4] cursor-pointer rounded h-full">

                <!-- Icon -->
                <div class="mb-4">
                    <img src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}"
                         class="h-12 w-12 service-icon transition"
                         alt="{{ $service->title }}">
                </div>

                <!-- Title -->
                <h3 class="text-lg sm:text-xl font-bold mb-2 text-black group-hover:text-white transition">
                    {{ $service->title }}
                </h3>

                <!-- Description with fixed height & ellipsis -->
                <p class="text-gray-800 group-hover:text-white transition mb-4 line-clamp-3">
                    {{ $service->description }}
                </p>

                <!-- Optional button -->
                <span class="mt-auto text-sm font-semibold text-blue-700 group-hover:text-white transition">
                    View More
                </span>
            </a>
        @empty
            <p class="col-span-3 text-center text-gray-500">No services created yet.</p>
        @endforelse
    </div>
</section>

<style>
/* Optional: line clamp for descriptions */
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}
.service-icon {
    filter: none;
    transition: filter 0.3s ease;
}
.group:hover .service-icon {
    filter: brightness(0) invert(1);
}
</style>


    </main>
</div>
@endsection
