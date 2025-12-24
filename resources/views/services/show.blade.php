@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="mb-8">
        <h1 class="text-3xl font-bold">{{ $service->title }}</h1>
        <p class="text-gray-600 mt-2">{{ $service->description }}</p>
    </div>

    <h2 class="text-2xl font-semibold mb-4">Sub-Services</h2>
    @if($subservices->isEmpty())
        <p class="text-gray-600">No sub-services available for this category.</p>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($subservices as $sub)
        <div class="bg-white rounded shadow p-6 hover:shadow-lg transition">
            @if($sub->icon)
                <img src="{{ $sub->icon }}" alt="{{ $sub->title }}" class="h-12 w-12 mx-auto mb-4">
            @endif
            <h3 class="text-xl font-semibold">{{ $sub->title }}</h3>
            <p class="text-gray-600 mt-1">{{ $sub->description }}</p>
            <p class="text-gray-500 mt-2">Price: ${{ $sub->price ?? 0 }}</p>
            @if($sub->discount_price)
                <p class="text-red-500">Discount: ${{ $sub->discount_price }}</p>
            @endif
            <p class="text-gray-500 mt-1">Quantity: {{ $sub->quantity ?? 0 }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
