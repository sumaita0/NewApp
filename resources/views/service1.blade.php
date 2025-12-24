@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-cover bg-center h-[70vh] rounded-b-3xl shadow-lg" style="background-image: url('/images/hero1.jpg');">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="container mx-auto h-full flex items-center justify-center relative z-10 px-4 sm:px-8 md:px-24 lg:px-44">
        <div class="max-w-2xl text-center lg:text-left text-white space-y-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
               Services
            </h1>
            <p class="text-lg sm:text-xl md:text-2xl text-white/90">

            </p>

        </div>
    </div>
</section>

<!-- Service Details -->
<section class="container py-16 bg-white px-4 md:px-12 lg:px-44 mt-10 rounded-2xl shadow-md">
    <div class="grid gap-12 md:grid-cols-2 items-center">
        <!-- Image -->
        <div class="flex justify-center md:justify-start">
            <div class="overflow-hidden rounded-3xl shadow-lg w-64 h-64 md:w-72 md:h-72 flex items-center justify-center bg-gray-100 transition-transform hover:scale-105">
                <img src="{{ asset('images/' . ($service->icon ?? 'placeholder.png')) }}"
                     alt="{{ $service->title }}"
                     class="w-32 h-32 object-contain">
            </div>
        </div>

        <!-- Text content -->
        <div>
            <h2 class="text-3xl font-bold mb-4 text-gray-800">
                About {{ $service->title }}
            </h2>

            <p class="text-gray-600 mb-6 leading-relaxed">
                {{ $service->description }}
            </p>

        </div>
    </div>
</section>

<!-- Sub-services / Products Section -->
@if($service->subservices->count())
<section class="bg-gray-50 py-16 px-4 md:px-12 lg:px-44 mt-10">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
        Sub-Services under {{ $service->title }}
    </h2>

    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($service->subservices as $sub)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition p-6 flex flex-col items-center text-center">
                <img src="{{ asset('images/' . ($sub->icon ?? 'placeholder.png')) }}"
                     alt="{{ $sub->title }}"
                     class="mb-4 rounded-full w-32 h-32 object-cover border-2 border-gray-200 shadow-sm transition-transform hover:scale-105">

                <h3 class="font-semibold text-xl mb-2 text-gray-800 hover:text-blue-600 transition">
                    {{ $sub->title }}
                </h3>

                <p class="text-gray-500 mb-4 text-sm sm:text-base">
                    {{ Str::limit($sub->description, 100) }}
                </p>

                <a href="{{ route('subservices.show', $sub->id) }}"
                   class="inline-block bg-[#1193d4] text-white px-4 py-2 rounded-full font-semibold shadow hover:bg-[#1193d4] transition">
                    Learn More
                </a>
            </div>
        @endforeach
    </div>
</section>
@endif

@endsection
