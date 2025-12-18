@extends('layouts.app')

@section('content')
   

      <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[70vh]" style="background-image: url('/images/hero1.jpg');" >
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="container mx-auto h-full flex items-center justify-center relative z-10 px-4 sm:px-8 md:px-24 lg:px-44">
      <div class="max-w-2xl text-center lg:text-left text-white space-y-6">
        <h1 class="text-4xl text-center sm:text-5xl md:text-6xl font-extrabold leading-tight">
          Contact Us
        </h1>
        <p class="text-lg text-center sm:text-xl md:text-2xl">
          We're here to help and answer any question you might have. We look forward to hearing from you!
        </p>

        <div class="text-center mt-12">
          <a href="/about" class="inline-flex items-stretch bg-[#1193d4] text-white font-semibold rounded hover:bg-black transition">
            <span class="px-6 py-2 flex items-center">Read More</span>
            <span class="flex items-center justify-center w-12 bg-black hover:bg-[#1193d4]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>



     <!-- Service Details -->
  <section class="container mx-auto py-16 px-4 md:px-12">
    <div class="grid gap-12 md:grid-cols-2 items-center">
      <!-- Image -->
      <div>
        <img src="https://via.placeholder.com/600x400" alt="Service 1" class="rounded shadow-lg">
      </div>

      <!-- Text content -->
      <div>
        <h2 class="text-3xl font-bold mb-4">About Service 1</h2>
        <p class="text-gray-700 mb-4">Service 1 is designed to help you achieve your goals efficiently and effectively. With our expert team and cutting-edge solutions, you get a seamless experience and measurable results.</p>
        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
          <li>High-quality results guaranteed</li>
          <li>Customized solutions tailored to your needs</li>
          <li>Expert support and guidance</li>
          <li>Affordable and transparent pricing</li>
        </ul>
        <a href="/contact" class="bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e7ac1] transition">Get Started</a>
      </div>
    </div>
  </section>

  <!-- Optional: Sub-services/products section -->
  <section class="bg-gray-100 py-16 px-4 md:px-12">
    <h2 class="text-3xl font-bold text-center mb-12">Sub-Services under Service 1</h2>
    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

      <div class="bg-white rounded shadow p-6 flex flex-col items-center text-center">
        <img src="https://via.placeholder.com/150" alt="Sub Service 1" class="mb-4 rounded w-32 h-32 object-cover">
        <h3 class="font-semibold text-xl mb-2">Sub Service 1</h3>
        <p class="text-gray-600 mb-4">Short description.</p>
        <a href="#" class="bg-[#1193d4] text-white px-4 py-2 rounded hover:bg-[#0e7ac1]">Learn More</a>
      </div>

      <div class="bg-white rounded shadow p-6 flex flex-col items-center text-center">
        <img src="https://via.placeholder.com/150" alt="Sub Service 2" class="mb-4 rounded w-32 h-32 object-cover">
        <h3 class="font-semibold text-xl mb-2">Sub Service 2</h3>
        <p class="text-gray-600 mb-4">Short description.</p>
        <a href="#" class="bg-[#1193d4] text-white px-4 py-2 rounded hover:bg-[#0e7ac1]">Learn More</a>
      </div>

      <!-- Add more sub-services as needed -->

    </div>
  </section>



@endsection