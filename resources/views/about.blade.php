@extends('layouts.app')


@section('content')

@include('partials.Hero_About')

<!-- About Subsection -->
<section id="about" class="py-16 bg-white px-4 md:px-12 lg:px-44 mt-10">
  <div class="mx-full  container mx-auto ">
    <div class="grid gap-6 lg:grid-cols-4">
      
      <!-- Column 1: Who We Are -->
      <div class="lg:col-span-2 text-left bg-white">
        <h2 class="text-2xl sm:text-3xl font-monospace mb-6">Who We Are</h2>
        <h3 class="text-gray-500 italic text-lg mb-4">
          Pushing out limits to provide the highest quality services.
        </h3>
        <p class="text-gray-700 text-lg mb-4">
          Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi.
        </p>
        <p class="text-gray-700 text-lg">
          Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor.
          Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor.
      
        </p>
      </div>

      <!-- Column 2-->
      <div class="flex flex-col gap-6">
        <div class="bg-white  flex-1 flex flex-col">
          <div class="flex justify-start mb-3">
            <img src="/images/vision.png" alt="Vision Logo" class="w-8 h-8">
          </div>
          <h3 class="text-2xl font-semibold mb-2">Our Vision</h3>
          <p class="text-gray-600 flex-1">
            Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat, purus sapien ultricies dolor.
          </p>
        </div>
        <div class="bg-white flex-1 flex flex-col">
          <div class="flex justify-start mb-3">
            <img src="/images/mission.png" alt="Mission Logo" class="w-8 h-8">
          </div>
          <h3 class="text-2xl font-semibold mb-2">Our Mission</h3>
          <p class="text-gray-600 flex-1">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
        </div>
      </div>

      <!-- Column 3 -->
      <div class="flex flex-col gap-6">
        <div class="bg-white  flex-1 flex flex-col">
          <div class="flex justify-start mb-3">
            <img src="/images/vision.png" alt="Vision Logo 2" class="w-8 h-8">
          </div>
          <h3 class="text-2xl font-semibold mb-2">Our Vision</h3>
          <p class="text-gray-600 flex-1">
            Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat, purus sapien ultricies dolor.
          </p>
        </div>
        <div class="bg-white flex-1 flex flex-col">
          <div class="h-14 w-14 rounded-full bg-[#1193d4] flex items-center justify-center">
            <img src="/images/diamond.png" alt="Values Logo" class="h-7 w-7 invert brightness-0">
          </div>
          <h3 class="text-2xl font-semibold mb-2">Our Values</h3>
          <p class="text-gray-600 flex-1">
            Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat, purus sapien ultricies dolor.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<div class="py-16 bg-gray-50 px-4 md:px-12 lg:px-44">

    <!-- Pricing Plans -->
    <h2 class="text-4xl font-bold mb-12 text-center">Select Your Plan to Start</h2>

    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Plan 1 -->
        <div class="border overflow-hidden ">
            <!-- Price Section -->
            <div class="bg-[#1193d4] text-white text-center py-8">
                <h3 class="text-2xl font-semibold mb-6 mt-6">Starter</h3>
                <p class="text-4xl font-bold">
                    <span class="align-super text-base">$</span>19<span class="text-lg font-normal">/month</span>
                </p>
            </div>
            <!-- Features -->
            <div class="p-8 text-center">
                <ul class="mb-6 space-y-2">
                    <li>250MB Memory</li>
                    <li>10 Projects</li>
                    <li>10GB Space</li>
                </ul>
                <button class="w-full bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e82c3] transition">sign up</button>
            </div>
        </div>

        <!-- Plan 2 -->
        <div class="border overflow-hidden ">
            <div class="bg-[#1193d4] text-white text-center  py-8">
                <h3 class="text-2xl font-semibold mb-6 mt-6">Basic</h3>
                <p class="text-4xl font-bold">
                    <span class="align-super text-base">$</span>29<span class="text-lg font-normal">/month</span>
                </p>
            </div>
            <div class="p-8 text-center">
                <ul class="mb-6 space-y-2">
                    <li>250MB Memory</li>
                    <li>10 Projects</li>
                    <li>10GB Space</li>
                </ul>
                <button class="w-full bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e82c3] transition">sign up</button>
            </div>
        </div>

        <!-- Plan 3 -->
       <div class="border overflow-hidden ">
            <div class="bg-[#1193d4] text-white text-center py-8">
                <h3 class="text-2xl font-semibold mb-6 mt-6">Pro</h3>
                <p class="text-4xl font-bold">
                    <span class="align-super text-base">$</span>49<span class="text-lg font-normal">/month</span>
                </p>
            </div>
            <div class="p-8 text-center">
                <ul class="mb-6 space-y-2">
                    <li>250MB Memory</li>
                    <li>10 Projects</li>
                    <li>10GB Space</li>
                </ul>
                <button class="w-full bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e82c3] transition">sign up</button>
            </div>
        </div>

        <!-- Plan 4 -->
        <div class="border overflow-hidden ">
            <div class="bg-[#1193d4] text-white text-center py-8">
                <h3 class="text-2xl font-semibold mb-6 mt-6">Ultra</h3>
                <p class="text-4xl font-bold">
                    <span class="align-super text-base">$</span>99<span class="text-lg font-normal">/month</span>
                </p>
            </div>
            <div class="p-8 text-center">
                <ul class="mb-6 space-y-2">
                    <li>250MB Memory</li>
                    <li>10 Projects</li>
                    <li>10GB Space</li>
                </ul>
                <button class="w-full bg-[#1193d4] text-white px-6 py-3 rounded hover:bg-[#0e82c3] transition">sign up</button>
            </div>
        </div>
    </div>
</div>


@include('partials.clients_logot')
@endsection
