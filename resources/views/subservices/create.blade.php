@extends('layouts.app')

@section('content')
@include('partials.Hero_Sections.Hero_Create_Subservice')
<div class="container mx-auto py-16 px-4 md:px-12 lg:px-44 mt-30">
    <h2 class="text-3xl font-bold mb-8">Add New Sub-Service</h2>

    <form action="{{ route('subservices.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-8 rounded shadow">
        @csrf

        <!-- Select Service -->
        <div>
            <label for="service_id" class="block mb-2 font-semibold">Parent Service</label>
            <select name="service_id" id="service_id" class="w-full border border-gray-300 rounded p-2">
                <option value="">-- Select Service --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                        {{ $service->title }}
                    </option>
                @endforeach
            </select>
            @error('service_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Sub-Service Title -->
        <div>
            <label for="title" class="block mb-2 font-semibold">Title</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded p-2" value="{{ old('title') }}">
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block mb-2 font-semibold">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded p-2">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Icon -->
        <div>
            <label for="icon" class="block mb-2 font-semibold">Icon (optional)</label>
            <input type="file" name="icon" id="icon" class="w-full border border-gray-300 rounded p-2">
            @error('icon')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Price -->
        <div>
            <label for="price" class="block mb-2 font-semibold">Price</label>
            <input type="number" name="price" id="price" min="0" class="w-full border border-gray-300 rounded p-2" value="{{ old('price') }}">
            @error('price')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Discount Price -->
        <div>
            <label for="discount_price" class="block mb-2 font-semibold">Discount Price</label>
            <input type="number" name="discount_price" id="discount_price" min="0" class="w-full border border-gray-300 rounded p-2" value="{{ old('discount_price') }}">
            @error('discount_price')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        

        <!-- Active Checkbox -->
        <div class="flex items-center space-x-2">
            <input type="checkbox" name="is_active" id="is_active" value="1" checked>
            <label for="is_active" class="font-semibold">Active</label>
        </div>

        <!-- Submit -->
        <div>
            <button type="submit" class="bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e7ac1] transition">
                Add Sub-Service
            </button>
        </div>
    </form>
</div>
@endsection
