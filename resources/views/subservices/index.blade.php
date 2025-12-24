@extends('layouts.app')

@section('content')

@include('partials.Hero_Sections.Subservices')
<div class="container py-16 bg-white px-4 md:px-12 lg:px-44 mt-10 mx-auto">
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold">All Sub-Services</h1>
        @if(Auth::check() && Auth::user()->usertype === 'admin')
            <a href="{{ route('subservices.create') }}" class="bg-[#1193d4] text-white px-6 py-2 rounded hover:bg-[#0e7ac1] transition">
                Add Sub-Service
            </a>
        @endif

    </div>

    @if($subServices->isEmpty())
        <p class="text-gray-600">No sub-services available.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($subServices as $sub)
                <div class="bg-white rounded shadow p-6 hover:shadow-lg transition flex flex-col">
                    <!-- Sub-Service Icon -->
                    @if($sub->icon)
                        <img src="{{ asset('images/' . $sub->icon) }}" alt="{{ $sub->title }}" class=" mx-auto mb-4">
                    @endif

                    <!-- Sub-Service Info -->
                    <h3 class="text-xl font-semibold">{{ $sub->title }}</h3>
                    <p class="text-gray-600 mt-1">{{ $sub->description }}</p>
                    <p class="text-gray-500 mt-2">Service: <span class="font-semibold">{{ $sub->service->title ?? '-' }}</span></p>
                    <p class="text-gray-500 mt-1">Price: ${{ $sub->price ?? 0 }}</p>
                    @if($sub->discount_price)
                        <p class="text-green-700">Discount: ${{ $sub->discount_price }}</p>
                    @endif
                    <p class="text-gray-500 mt-1">Quantity: {{ $sub->quantity ?? 0 }}</p>
                    <p class="mt-1 text-gray-500">Status: 
                        @if($sub->is_active)
                            <span class="text-green-600 font-semibold">Active</span>
                        @else
                            <span class="text-red-600 font-semibold">Inactive</span>
                        @endif
                    </p>

                    <!-- Actions -->
                    <div class="mt-4 flex justify-between space-x-2">
                        <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                            Edit
                        </a>

                        <form action="{{ route('subservices.delete', $sub->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this sub-service?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
