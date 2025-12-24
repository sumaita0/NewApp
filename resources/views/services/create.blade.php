@extends('layouts.app')



@section('content')
@include('partials.Hero_Sections.Hero_Create_Service')
<div class="max-w-4xl mx-auto mt-20 mb-20 px-4 md:px-12 lg:px-44">
    <h1 class="text-2xl font-bold mb-4">Add New Service</h1>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow space-y-4">
        @csrf

        <div>
            <label for="title" class="block text-gray-700 font-semibold">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label for="description" class="block text-gray-700 font-semibold">Description</label>
            <textarea name="description" id="description" class="w-full border p-2 rounded">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="icon" class="block text-gray-700 font-semibold">Icon</label>
            <input type="file" name="icon" id="icon" class="w-full border p-2 rounded">
        </div>

        <div>
            <label for="is_active" class="block text-gray-700 font-semibold">Active</label>
            <select name="is_active" id="is_active" class="w-full border p-2 rounded">
                <option value="1" selected>Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class=" bg-[#1193d4] text-white px-4 py-2 rounded">Save Service</button>
    </form>
</div>
@endsection
