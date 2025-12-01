<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-900">

  @include('partials.topbar')
  @include('partials.navbar')

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/hero1.jpg');">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="container mx-auto h-full flex items-center justify-center relative z-10 px-4 sm:px-8 md:px-24 lg:px-44">
      <div class="max-w-2xl text-center lg:text-left text-white space-y-6">
        <h1 class="text-4xl text-center sm:text-5xl md:text-6xl font-extrabold leading-tight">
          Information On Demand
        </h1>
        <p class="text-lg text-center sm:text-xl md:text-2xl">
          Delivering the insights that matter to your business.
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

  <!-- Page Content -->
  <main class="flex-grow-1">
    @yield('content')
  </main>

  @include('partials.footer')

<script>
  // Mobile menu toggle
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');
  btn.addEventListener('click', () => menu.classList.toggle('hidden'));

  const navbar = document.getElementById('navbar');
  const topbar = document.getElementById('topbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('pt-4', 'bg-opacity-80', 'backdrop-blur-sm'); 
      topbar.classList.add('-translate-y-full');
    } else {
      navbar.classList.remove('pt-4', 'bg-opacity-80', 'backdrop-blur-sm'); 
      topbar.classList.remove('-translate-y-full');
    }
  });
</script>

</body>
</html>
