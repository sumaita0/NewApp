<!-- Topbar -->
<div id="topbar" class="bg-[rgb(244,240,240)] text-gray-800 text-sm fixed w-full top-0 left-0 z-50 transition-transform duration-300">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center py-2 px-2 sm:px-4 md:px-12 lg:px-44 space-y-2 md:space-y-0">
    <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-1 sm:space-y-0 text-center md:text-left">
      <span class="sm:whitespace-nowrap">Email: info@company.com</span>
      <span class="text-[#bcbec0] sm:whitespace-nowrap">|</span>
      <span class="sm:whitespace-nowrap">Hi! Welcome to our website.</span>
      <span class="text-[#bcbec0] sm:whitespace-nowrap">|</span>
      <span class="sm:whitespace-nowrap">Phone: +123 456 7890</span>
    </div>

    <div class="flex items-center space-x-2">
      <div class="relative inline-block">
        <button onclick="document.getElementById('langMenu').classList.toggle('hidden')"
                class="flex items-center space-x-1 px-2 py-1 border border-gray-800 rounded-lg text-black hover:bg-[#51575b] hover:text-white focus:outline-none">
          <span>Language</span>
          <i class="bi bi-caret-down-fill"></i>
        </button>
        <ul id="langMenu" class="absolute right-0 mt-2 w-28 bg-white text-gray-800 rounded shadow-lg hidden z-50">
          <li><a href="#" onclick="setLang('en')" class="block px-4 py-2 hover:bg-gray-100 whitespace-nowrap">English</a></li>
          <li><a href="#" onclick="setLang('es')" class="block px-4 py-2 hover:bg-gray-100 whitespace-nowrap">Spanish</a></li>
          <li><a href="#" onclick="setLang('fr')" class="block px-4 py-2 hover:bg-gray-100 whitespace-nowrap">French</a></li>
        </ul>
      </div>

      <div class="flex space-x-2">
        <a href="#" class="py-1 px-2 hover:bg-[#1193d4] text-black hover:text-white rounded-lg"><i class="bi bi-facebook text-lg"></i></a>
        <a href="#" class="py-1 px-2 hover:bg-[#1193d4] text-black hover:text-white rounded-lg"><i class="bi bi-twitter text-lg"></i></a>
        <a href="#" class="py-1 px-2 hover:bg-[#1193d4] text-black hover:text-white rounded-lg"><i class="bi bi-linkedin text-lg"></i></a>
      </div>
 
    </div>
  </div>
</div>

<!-- Navbar -->
<nav id="navbar" class="bg-white fixed w-full z-40 shadow transition-all duration-300">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center py-4 px-4 md:px-12 lg:px-44">
    <!-- Logo -->
    <a href="/" class="flex items-center mb-2 md:mb-0">
      <img src="images/logo.png" alt="Logo" class="h-10 w-auto">
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-2 items-center">
      
      <li><a href="/" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Home</a></li>
      <li>
        <a href="/about" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">About</a>
      </li>
     <!-- Services Dropdown -->
<li class="group relative">
  <!-- Main Services link -->
  <a href="/services" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Services</a>

  <!-- Dropdown menu -->
  <ul class="absolute top-full left-0 mt-2 bg-gray-700 rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity z-50 w-48">
    <!-- Arrow pointing up -->
    <div class="absolute top-0 left-4 -translate-y-2 w-0 h-0 border-l-8 border-r-8 border-b-8 border-l-transparent border-r-transparent border-b-gray-700"></div>

    <!-- Dropdown items -->
    <li>
      <a href="/services/service1" class="block px-4 py-2 text-gray-200 hover:bg-[#1193d4] hover:text-white">Service 1</a>
    </li>
    <li>
      <a href="/services/service2" class="block px-4 py-2 text-gray-200 hover:bg-[#1193d4] hover:text-white">Service 2</a>
    </li>
    <li>
      <a href="/services/service3" class="block px-4 py-2 text-gray-200 hover:bg-[#1193d4] hover:text-white">Service 3</a>
    </li>
  </ul>
</li>


      <li><a href="/team" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Team</a></li>
      <li><a href="/job" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Jobs</a></li>
      <li><a href="/blog" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Blog</a></li>
      <li><a href="/contact" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Contact</a></li>
    </ul>

    <!-- Mobile Menu Button -->
    <div class="md:hidden">
      <button id="menu-btn" class="text-gray-800 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>
</nav>

<script>

   // Add 'active' class to the current page link
  const currentPath = window.location.pathname; // e.g., "/about"
  const navLinks = document.querySelectorAll('#navbar a');

  navLinks.forEach(link => {
    // Compare the link's href path to current path
    const linkPath = new URL(link.href).pathname;
    if(linkPath === currentPath) {
      link.classList.add('bg-[#1193d4]', 'text-white'); // active styles
    }
  });


  const topbar = document.getElementById('topbar');
  const navbar = document.getElementById('navbar');

  function updateNavbar() {
    const topbarHeight = topbar.offsetHeight;
    if(window.scrollY > topbarHeight){
      // Hide topbar
      topbar.style.transform = `translateY(-${topbarHeight}px)`;
      // Move navbar to top
      navbar.style.top = '0';
    } else {
      // Show topbar
      topbar.style.transform = 'translateY(0)';
      // Navbar below topbar
      navbar.style.top = topbarHeight + 'px';
    }
  }

  window.addEventListener('scroll', updateNavbar);
  window.addEventListener('load', updateNavbar);
</script>




<!-- Bootstrap Icons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">