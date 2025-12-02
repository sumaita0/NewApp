<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Navbar -->
<nav id="navbar" class="bg-white fixed w-full  top-0 left-0 z-40 shadow transition-all duration-300 pt-10">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center py-4 px-2 sm:px-4 md:px-12 lg:px-44 space-y-2 md:space-y-0 relative">

    <!-- Logo -->
    <a href="/" class="flex items-center">
      <img src="images/logo.png" alt="Logo" class="h-10 w-auto">
    </a>

   

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-2 items-center">

      <!-- Home Dropdown -->
      <li class="group relative">
        <a href="/" class="py-2 px-3 bg-white hover:text-white hover:bg-[#1193d4] border-none font-semibold">Home</a>
        <ul class="absolute top-full left-0 mt-2 bg-white border-none border rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity pointer-events-none group-hover:pointer-events-auto z-50">
          <li><a href="#" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">Home Boxed</a></li>
        </ul>
      </li>

      <!-- Pages Dropdown -->
      <li class="group relative">
        <a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">Pages</a>
        <ul class="absolute top-full left-0 mt-2 bg-white border-none rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity z-50">
          <li><a href="/about" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">About</a></li>
          <li><a href="#" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">Services</a></li>
          <li><a href="#" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">Team</a></li>
          <li><a href="#" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">Jobs</a></li>
          <li><a href="#" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">Blog</a></li>
          <li><a href="#" class="block px-14 py-2 text-white bg-gray-700 hover:bg-[#1193d4]  text-nowrap text-centered ">Contact</a></li>
        </ul>
      </li>

      <!-- Single Items -->
      <li><a href="/about" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">About</a></li>
      <li><a href="/services" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">Services</a></li>
      <li><a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">Team</a></li>
      <li><a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">Jobs</a></li>
      <li><a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">Blog</a></li>
      <li><a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold">Contact</a></li>
      <li>
  <a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] border rounded border-none font-semibold flex items-center">
    <!-- Search Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
    </svg>
  </a>
</li>

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

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg absolute top-full left-0 w-full">
      <ul class="flex flex-col space-y-2 p-4">

        <!-- Home Dropdown Mobile -->
        <li class="flex flex-col">
          <span class="font-semibold">Home</span>
          <ul class="ml-4 mt-1 space-y-1">
            <li><a href="#" class="block w-full py-1">Home Boxed</a></li>
          </ul>
        </li>

        <!-- Pages Dropdown Mobile -->
        <li class="flex flex-col">
          <span class="font-semibold">Pages</span>
          <ul class="ml-4 mt-1 space-y-1">
            <li><a href="#" class="block py-1">About</a></li>
            <li><a href="#" class="block py-1">Services</a></li>
            <li><a href="#" class="block py-1">Team</a></li>
            <li><a href="#" class="block py-1">Jobs</a></li>
            <li><a href="#" class="block py-1">Blog</a></li>
            <li><a href="#" class="block py-1">Contact</a></li>
          </ul>
        </li>

        <!-- Separate Single Items -->
        <li><a href="#" class="block py-2">About</a></li>
        <li><a href="#" class="block py-2">Services</a></li>
        <li><a href="#" class="block py-2">Team</a></li>
        <li><a href="#" class="block py-2">Jobs</a></li>
        <li><a href="#" class="block py-2">Blog</a></li>
        <li><a href="#" class="block py-2">Contact</a></li>

      </ul>
    </div>

  </div>
</nav>

<!-- Toggle Script -->
<script>
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>
