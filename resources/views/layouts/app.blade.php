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

 
  @include('partials.navbar')



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
