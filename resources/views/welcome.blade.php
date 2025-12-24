@extends('layouts.app')

@section('content')
  @include('partials.Hero_Sections.Hero_Home')
  @include('partials.service')
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
