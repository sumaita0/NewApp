@extends('layouts.app')

@section('content')
@include('partials.Hero_Sections.Subservices')

<div class="container mx-auto py-16 px-4 md:px-12 lg:px-44">
    <div class="mb-8">
        <h1 class="text-3xl font-bold">{{ $subService->title }}</h1>
        <p class="text-gray-600 mt-2">Category: {{ $subService->service->title ?? 'N/A' }}</p>
    </div>

    <div class="grid gap-12 md:grid-cols-2 items-center">
        <div>
            <img src="{{ $subService->icon ? asset('images/' . $subService->icon) : 'https://via.placeholder.com/600x400' }}" 
                 alt="{{ $subService->title }}" class="rounded shadow-lg">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4">About {{ $subService->title }}</h2>
            <p class="text-gray-700 mb-4">{{ $subService->description }}</p>
            <p class="text-gray-700 mb-2">Price: ${{ $subService->price ?? 0 }}</p>
            @if($subService->discount_price)
                <p class="text-red-500 mb-2">Discount: ${{ $subService->discount_price }}</p>
            @endif

            {{-- Booking/Purchase Button --}}
        @if(Auth::check() && Auth::user()->usertype === 'user')
            <form action="{{ route('subservices.book', $subService->id) }}" method="POST" class="mt-6">
                @csrf
                <button type="submit" class="bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e7ac1] transition">
                    Book / Purchase
                </button>
            </form>
        @elseif(Auth::check() && Auth::user()->usertype === 'admin')
            <div class="mt-6 flex flex-col space-y-2">
                <button type="button" disabled 
                        class="bg-gray-400 text-white px-6 py-3 rounded cursor-not-allowed">
                    Book / Purchase (Login as User)
                </button>
                <a href="{{ route('login') }}" 
                class="text-[#1193d4] font-semibold hover:underline text-center">
                    Log in as a user
                </a>
            </div>
        @else
            <p class="mt-6 text-gray-700">
                <a href="{{ route('login') }}" class="text-[#1193d4] font-semibold hover:underline">
                    Log in
                </a> as a user to book/purchase this sub-service.
            </p>
        @endif


        </div>
    </div>
</div>
@endsection
