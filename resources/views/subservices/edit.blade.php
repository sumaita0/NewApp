@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Edit Sub-Service</h1>

    <form action="{{ route('subservices.update', $subService->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Service</label>
            <select name="service_id" class="w-full border rounded px-4 py-2">
                @foreach($services as $service)
                    <option value="{{ $service->id }}"
                        {{ $subService->service_id == $service->id ? 'selected' : '' }}>
                        {{ $service->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Title</label>
            <input type="text" name="title" value="{{ $subService->title }}"
                   class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full border rounded px-4 py-2"
                      rows="4">{{ $subService->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Price</label>
            <input type="number" name="price" value="{{ $subService->price }}"
                   class="w-full border rounded px-4 py-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Discount Price</label>
            <input type="number" name="discount_price" value="{{ $subService->discount_price }}"
                   class="w-full border rounded px-4 py-2">
        </div>

      

        <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
            Update Sub-Service
        </button>
    </form>
</div>
@endsection
