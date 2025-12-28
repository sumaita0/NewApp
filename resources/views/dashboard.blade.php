@extends('layouts.app')

@section('content')
  @include('partials.Hero_Sections.Hero_Home')
  <!-- Services Section -->
<section id="services" class="py-16 bg-gray-50 px-4 md:px-12 lg:px-44 pb-16">
  <div class="text-center mb-10">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold">Our Services</h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    
    @forelse($services as $service)

      @auth
      @if(Auth::user()->usertype === 'admin')
        <!-- ADMIN CARD (not clickable) -->
        <div class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4]">

          <div class="mb-4">
            <img 
              src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}" 
              class="h-12 w-12 service-icon transition" 
              alt="{{ $service->title }}"
            >
          </div>

          <h3 class="text-xl sm:text-2xl font-bold mb-2 text-black group-hover:text-white transition">
            {{ $service->title }}
          </h3>

          <p class="text-gray-800 group-hover:text-white transition text-center mb-4">
            {{ Str::limit($service->description, 100) }}
          </p>

        
        </div>

      @else
        <!-- USER CARD (clickable) -->
        <a 
          href="{{ route('services.show', $service->slug) }}"
          class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4]"
        >
          <div class="mb-4">
            <img 
              src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}" 
              class="h-12 w-12 service-icon transition" 
              alt="{{ $service->title }}"
            >
          </div>

          <h3 class="text-xl sm:text-2xl font-bold mb-2 text-black group-hover:text-white transition">
            {{ $service->title }}
          </h3>

          <p class="text-gray-800 group-hover:text-white transition text-center">
            {{ Str::limit($service->description, 100) }}
          </p>
        </a>
      @endif
      @endauth

      @guest
        <!-- GUEST CARD -->
        <a 
          href="{{ route('services.show', $service->slug) }}"
          class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4]"
        >
          <div class="mb-4">
            <img 
              src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}" 
              class="h-12 w-12 service-icon transition" 
              alt="{{ $service->title }}"
            >
          </div>

          <h3 class="text-xl sm:text-2xl font-bold mb-2 text-black group-hover:text-white transition">
            {{ $service->title }}
          </h3>

          <p class="text-gray-800 group-hover:text-white transition text-center">
            {{ Str::limit($service->description, 100) }}
          </p>
        </a>
      @endguest

    @empty
      <p class="col-span-3 text-center text-gray-500">No services available.</p>
    @endforelse

  </div>
</section>

<style>
.service-icon {
  filter: none;
  transition: filter 0.3s ease;
}
.group:hover .service-icon {
  filter: brightness(0) invert(1);
}
</style>

  @include('partials.projects')
  @include('partials.blog')
  @include('partials.features')
  
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<section class="py-16 px-2 sm:px-4 md:px-12 lg:px-44  bg-[rgb(244,240,240)] ">
  <div class="container mx-auto ">
    <h2 class="text-4xl font-bold text-center mb-12">Our Team</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 ">

      <!-- Team Member 1 -->
      <div class="bg-[rgb(244,240,240)] ml-0  text-center">
        <img src="images/team-img-1-1.jpg" alt="Jeff Walsh" class="w-full h-64 mx-auto object-cover mb-4">
        <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
        <p class="text-blue-500 font-semibold mb-2">CEO</p>
        <p class="text-gray-600 text-sm">Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
        <!-- Socials -->
        <div class="flex justify-center space-x-4 mt-5">
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="bg-[rgb(244,240,240)]  text-center">
        <img src="images/team-img-1-2.jpg" alt="Janet Adams" class="w-full h-64 mx-auto  object-cover mb-4">
        <h3 class="text-xl font-bold mb-1">Janet Adams</h3>
        <p class="text-blue-500 font-semibold mb-2">Human Resources</p>
        <p class="text-gray-600 text-sm">Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
       
        <div class="flex justify-center space-x-4 mt-5">
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>


      <!-- Team Member 3 -->
      <div class="bg-[rgb(244,240,240)]   text-center">
        <img src="images/team-img-1-3.jpg" alt="Colin Weiland" class="w-full h-64 mx-auto  object-cover mb-4">
        <h3 class="text-xl font-bold mb-1">Colin Weiland</h3>
        <p class="text-blue-500 font-semibold mb-2">New Business Manager</p>
        <p class="text-gray-600 text-sm">Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
        
        <div class="flex justify-center space-x-4 mt-5">
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Team Member 4 -->
      <div class="bg-[rgb(244,240,240)]   text-center ">
        <img src="images/team-img-1-4.jpg" alt="Wendy Willings" class="w-full h-64 mx-auto object-cover mb-4">
        <h3 class="text-xl font-bold mb-1">Wendy Willings</h3>
        <p class="text-blue-500 font-semibold mb-2">Public Relations</p>
        <p class="text-gray-600 text-sm">Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
        
        <div class="flex justify-center space-x-4 mt-5">
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    

  </div>
    
</section>

  @include('partials.clients')
  @include('partials.clients_logot')
@endsection
