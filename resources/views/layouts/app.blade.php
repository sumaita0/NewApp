<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

</head>
<body class="bg-white text-gray-900">

 @include('partials.topbar')

 @include('partials.navbar')

 
<!-- Hero Section -->
<section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/hero1.jpg');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Content -->
  <div class="container mx-auto h-full flex items-center justify-center relative z-10 px-4 sm:px-8 md:px-24 lg:px-44">
    <div class="max-w-2xl text-center lg:text-left text-white space-y-6">
      <h1 class="text-4xl text-center sm:text-5xl md:text-6xl font-extrabold leading-tight">Information On Demand</h1>
      <p class="text-lg text-center sm:text-xl md:text-2xl">Delivering the insights that matter to your business.</p>
      <div class="flex justify-center mt-4">
        <a href="#services" class="px-6 py-3 bg-[#1193d4] hover:bg-[#0e7ac1] rounded-lg text-lg font-semibold text-center">
          Read More
        </a>
      </div>

    </div>
  </div>
</section>

  @include('partials.service')

  @include('partials.projects')

  @include('partials.blog')
  
  @include('partials.features')

  @include('partials.team')

  @include('partials.clients')

  @include('partials.clients_logot')

  @include('partials.footer')

<script>
    // Mobile menu toggle
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => menu.classList.toggle('hidden'));

    // Scroll behavior
    const navbar = document.getElementById('navbar');
    const topbar = document.getElementById('topbar');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('pt-4', 'bg-opacity-80', 'backdrop-blur-sm'); // shrink padding + transparency
        topbar.classList.add('-translate-y-full'); // hide topbar
      } else {
        navbar.classList.remove('pt-4', 'bg-opacity-80', 'backdrop-blur-sm'); // restore
        topbar.classList.remove('-translate-y-full'); // show topbar
      }
    });
  </script>
</body>
</html>
