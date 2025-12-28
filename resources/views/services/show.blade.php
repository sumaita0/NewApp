@extends('layouts.app')

@section('content')
@include('partials.Hero_Sections.Hero_Service')

<div class="container mx-auto py-10">

    {{-- Service Header --}}
    <div class="flex items-start gap-6 py-10 max-w-6xl mx-auto">
        {{-- Service Icon --}}
        <div class="flex-shrink-0">
            <img src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}" 
                 alt="{{ $service->title }}" 
                 class="h-24 w-24 object-cover rounded-lg border border-gray-200 shadow-sm">
        </div>

        {{-- Service Info --}}
        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-2">{{ $service->title }}</h1>
            <p class="text-gray-600 text-lg">{{ $service->description }}</p>

            {{-- Admin Controls --}}
            @auth
                @if(Auth::user()->usertype === 'admin')
                    <div class="flex gap-3 mt-4">
                        <a href="{{ route('services.edit', $service->id) }}"
                           class="bg-[#1193d4] text-white px-4 py-2 rounded hover:bg-[#0e7bbd] transition">
                            Edit Service
                        </a>

                        <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this service?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                                Delete Service
                            </button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    </div>

    {{-- Sub-Services --}}
    <div class="max-w-6xl mx-auto mt-12">
        <h2 class="text-2xl font-semibold mb-6">Sub-Services</h2>

        @if($service->subservices && $service->subservices->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($service->subservices as $sub)
                    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition flex flex-col items-start">
                        {{-- Sub-Service Icon --}}
                        <img src="{{ $sub->icon ? asset('images/' . $sub->icon) : '/images/default-service.png' }}" 
                             alt="{{ $sub->title }}" class="h-16 w-16 mb-4 rounded border border-gray-200">

                        {{-- Sub-Service Info --}}
                        <h3 class="text-xl font-semibold mb-1">{{ $sub->title }}</h3>
                        <p class="text-gray-600 mb-2">{{ $sub->description }}</p>
                        <p class="text-gray-500 mt-1">Price: ${{ number_format($sub->price ?? 0, 2) }}</p>
                        @if($sub->discount_price)
                            <p class="text-red-500">Discount: ${{ number_format($sub->discount_price, 2) }}</p>
                        @endif
                        <p class="text-gray-500 mt-1">Quantity: {{ $sub->quantity ?? 0 }}</p>

                        {{-- Buttons --}}
                        <div class="mt-4 flex gap-2">
                            @auth
                                @if(Auth::user()->usertype !== 'admin')
                                    {{-- Book Now Button --}}
                                    <a href="{{ route('subservices.book', $sub->id) }}"
                                       class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                                        Book Now
                                    </a>
                                @endif
                            @endauth

                            {{-- View Details Button --}}
                            <a href="{{ route('subservices.show', $sub->id) }}"
                               class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                                View
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600 mt-4">No sub-services available for this category.</p>
        @endif
    </div>

</div>
@endsection
