@extends('layouts.app')

@section('content')
@include('partials.Hero_Sections.Hero_Service')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Edit Service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Title</label>
            <input type="text" name="title" value="{{ $service->title }}"
                   class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full border rounded px-4 py-2"
                      rows="4">{{ $service->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Icon</label>
            <input type="file" name="icon" class="w-full border rounded px-4 py-2">
            @if($service->icon)
                <img src="{{ asset('images/'.$service->icon) }}" class="h-16 mt-2">
            @endif
        </div>

        <div class="mb-4 flex items-center gap-2">
            <input type="checkbox" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }}>
            <label>Active</label>
        </div>

        <div class="flex gap-4">
            <button class="bg-[#1193d4] text-white px-6 py-2 rounded hover:bg-[#0e7bbd]">
                Update
            </button>
            <a href="{{ route('services.index') }}" class="bg-gray-300 px-6 py-2 rounded">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
