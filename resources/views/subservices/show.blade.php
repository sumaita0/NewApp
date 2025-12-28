@extends('layouts.app')

@section('content')
@include('partials.Hero_Sections.Subservices')

<div class="container mx-auto py-16 px-4 md:px-12 lg:px-44">
    <div class="mb-8 flex items-start gap-6">
        {{-- Sub-Service Icon --}}
        <div class="flex-shrink-0">
            <img src="{{ $subService->icon ? asset('images/' . $subService->icon) : 'https://via.placeholder.com/150' }}" 
                 alt="{{ $subService->title }}" class="h-24 w-24 object-cover rounded-lg border border-gray-200 shadow-sm">
        </div>

        {{-- Sub-Service Info --}}
        <div class="flex-1">
            <h1 class="text-3xl font-bold">{{ $subService->title }}</h1>
            <p class="text-gray-600 mt-2">Category: {{ $subService->service->title ?? 'N/A' }}</p>
            <p class="text-gray-700 mt-4">{{ $subService->description }}</p>
            <p class="text-gray-500 mt-2">Price: ${{ number_format($subService->price ?? 0, 2) }}</p>
            @if($subService->discount_price)
                <p class="text-red-500">Discount: ${{ number_format($subService->discount_price, 2) }}</p>
            @endif
            <p class="text-gray-500 mt-1">Quantity: {{ $subService->quantity ?? 0 }}</p>

            {{-- Buttons --}}
            <div class="mt-6 flex gap-3">
                {{-- Book Now for users --}}
                @auth
                    @if(Auth::user()->usertype !== 'admin')
                        <a href="{{ route('subservices.book', $subService->id) }}"
                           class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600 transition">
                            Book Now
                        </a>
                    @endif
                @endauth

                {{-- Admin controls --}}
                @auth
                    @if(Auth::user()->usertype === 'admin')
                        <a href="{{ route('subservices.edit', $subService->id) }}"
                           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                            Edit
                        </a>

                        <form action="{{ route('subservices.delete', $subService->id) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this sub-service?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
