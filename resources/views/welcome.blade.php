@extends('layouts.app')

@section('content')

  <!-- Hero Section -->

  <section class="relative bg-cover bg-center min-h-screen py-20" style="background-image: url('https://via.placeholder.com/1920x1080');">


<div class="absolute inset-0 bg-black/50"></div>
<div class="w-full max-w-7xl mx-auto h-full flex items-center relative z-10 px-4">
  <div class="max-w-2xl text-white space-y-6">
    <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">Information On Demand</h1>
    <p class="text-lg md:text-xl">Delivering the insights that matter to your business.</p>
    <div class="flex space-x-4">
      <a href="#services" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-lg text-lg font-semibold">Our Services</a>
      <a href="#contact" class="px-6 py-3 border border-white hover:bg-white hover:text-black rounded-lg text-lg font-semibold">Contact Us</a>
    </div>
  </div>
</div>


  </section>

  <!-- Services Section -->

  <section id="services" class="py-20 bg-gray-50">
    <div class="container mx-auto text-center mb-12">
      <h2 class="text-4xl font-extrabold mb-4">Our Services</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">We provide a wide range of services to meet your business needs and drive growth.</p>
    </div>


<div class="container mx-auto grid md:grid-cols-3 gap-8">
  <!-- Service 1 -->
  <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
    <div class="text-blue-600 mb-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c.132 0 .262.014.39.04A4 4 0 1112 16a4 4 0 010-8z" />
      </svg>
    </div>
    <h3 class="text-2xl font-bold mb-2">Service One</h3>
    <p class="text-gray-600">High-quality service designed to optimize your business processes and increase efficiency.</p>
  </div>

  <!-- Service 2 -->
  <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
    <div class="text-blue-600 mb-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
    </div>
    <h3 class="text-2xl font-bold mb-2">Service Two</h3>
    <p class="text-gray-600">Expert solutions tailored to meet complex challenges and ensure measurable results.</p>
  </div>

  <!-- Service 3 -->
  <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
    <div class="text-blue-600 mb-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
      </svg>
    </div>
    <h3 class="text-2xl font-bold mb-2">Service Three</h3>
    <p class="text-gray-600">Innovative strategies to help you stay ahead of the competition in a fast-changing market.</p>
  </div>
</div>


  </section>

  <section id="contact" class="py-20">
    <div class="container mx-auto text-center mb-12">
      <h2 class="text-4xl font-extrabold mb-4">Get in Touch</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Have questions or need more information? We're here to help.</p>
    </div>




@endsection
