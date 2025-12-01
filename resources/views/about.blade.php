@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="max-w-6xl mx-auto py-20 px-4">
    <h1 class="text-5xl font-bold text-center mb-12">About Us</h1>
    
    <p class="text-lg mb-4 text-center">
        Welcome to our company! We are committed to providing the best services to our clients. 
        Our team of experts is dedicated to delivering high-quality solutions tailored to your needs.
    </p>

    <p class="text-lg mb-12 text-center">
        Our mission is to innovate, inspire, and lead in our field. 
        We value creativity, integrity, and excellence in everything we do.
    </p>

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

@include('partials.clients')
@include('partials.clients_logot')
@endsection
