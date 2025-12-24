<!-- Topbar -->
<div id="topbar" class="hidden md:flex bg-[rgb(244,240,240)] text-gray-800 text-sm fixed w-full top-0 left-0 z-50 transition-transform duration-300">
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
  <div class="flex justify-between items-center py-4 px-4 sm:px-8 lg:px-44 w-full">

    <!-- Logo -->
    <a href="/" class="flex items-center">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex flex-wrap justify-end items-center space-x-2 w-full">
      <!-- Search Box -->
      <li>
        <div class="relative">
          <input 
            type="text" 
            placeholder="Search..." 
            class="pl-3 pr-10 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#1193d4] focus:border-[#1193d4] text-sm"
          />
          <button class="absolute right-1 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-[#1193d4]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
          </button>
        </div>
      </li>

      <li><a href="/" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Home</a></li>
      <li><a href="/about" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">About</a></li>


      <!-- Services Dropdown -->
      <li class="group relative">
            <a href="/services"
              class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">
                Services
            </a>

            <ul class="absolute top-full left-0 mt-2 bg-gray-700 rounded
                      opacity-0 invisible group-hover:opacity-100
                      group-hover:visible transition-opacity z-50 w-56">

                <div class="absolute top-0 left-4 -translate-y-2 w-0 h-0
                            border-l-8 border-r-8 border-b-8
                            border-l-transparent border-r-transparent
                            border-b-gray-700"></div>

                @foreach ($services as $service)
                    <li class="group/sub relative">
                        <a href="{{ route('services.show', $service->slug) }}"
                          class="flex justify-between items-center px-4 py-2
                                  text-gray-200 hover:bg-[#1193d4] hover:text-white">
                            {{ $service->title }}

                            @if ($service->subservices->count())
                                <span class="text-sm">›</span>
                            @endif
                        </a>

                        @if ($service->subservices->count())
                          <ul class="absolute top-0 left-full ml-1 bg-gray-700 rounded
                                    opacity-0 invisible group-hover/sub:opacity-100
                                    group-hover/sub:visible transition-opacity w-56">
                              @foreach ($service->subservices as $sub)
                                  <li>
                                      <a href="{{ route('subservices.show', $sub->id) }}"
                                        class="block px-4 py-2 text-gray-200 hover:bg-[#1193d4] hover:text-white">
                                          {{ $sub->title }}
                                      </a>
                                  </li>
                              @endforeach
                          </ul>
                      @endif


                    </li>
                @endforeach
            </ul>
      </li>



      <li><a href="/team" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Team</a></li>
      <li><a href="/job" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Jobs</a></li>
      <li><a href="/blog" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Blog</a></li>
      <li><a href="/contact" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Contact</a></li>

     @guest
          <li><a href="{{ route('login') }}" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Login</a></li>
          <li><a href="{{ route('register') }}" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace">Sign Up</a></li>
      @else
          <li class="group relative">
              <a href="#" class="py-2 px-3 hover:text-white hover:bg-[#1193d4] rounded font-monospace flex items-center space-x-2">
                  <img 
                      src="{{ Auth::user()->profile_photo_path ? asset('images/' . Auth::user()->profile_photo_path) : asset('images/default-user.png') }}" 
                      alt="Profile" 
                      class="w-6 h-6 rounded-full"
                  >
                  <span>{{ Auth::user()->name }}</span>
              </a>

              <ul class="absolute top-full right-0 mt-2 bg-gray-700 rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity z-50 w-48">
                  <div class="absolute top-0 right-4 -translate-y-2 w-0 h-0 border-l-8 border-r-8 border-b-8 border-l-transparent border-r-transparent border-b-gray-700"></div>

                  <li>
                      <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-gray-200 hover:bg-[#1193d4] hover:text-white">
                          Profile
                      </a>
                  </li>

                  <li>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="w-full text-left px-4 py-2 text-gray-200 hover:bg-[#1193d4] hover:text-white">
                              Logout
                          </button>
                      </form>
                  </li>
              </ul>
          </li>
      @endguest

    </ul>

    <!-- Mobile Buttons -->
    <div class="md:hidden flex items-center space-x-2">
      <!-- Search Button -->
      <button id="mobile-search-btn"
        class="flex items-center px-3 py-1.5 border rounded text-gray-800 border-gray-800
              hover:text-white hover:bg-[#1193d4] focus:outline-none">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
        </svg>
      </button>

      <!-- Menu Button -->
      <button id="menu-btn"
        class="flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800
              hover:text-white hover:bg-[#1193d4] focus:outline-none">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20">
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
        </svg>
      </button>
    </div>

  </div>

 


     <!-- ================= MOBILE MENU ================= -->
<div class="md:hidden">
    <ul id="mobile-menu" class="hidden flex-col bg-white w-full shadow-lg">
        <li><a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Home</a></li>
        <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">About</a></li>
        
        <!-- Services Dropdown -->
        <li>
            <span class="block px-4 py-2 font-semibold cursor-pointer hover:bg-[#1193d4] hover:text-white">Services</span>
            <ul class="pl-4">
                @foreach(App\Models\Service::where('is_active', 1)->get() as $service)
                    <li>
                        <a href="{{ route('services.show', $service->slug) }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">{{ $service->title }}</a>
                        
                        @if($service->subservices->count())
                            <ul class="pl-4">
                                @foreach($service->subservices as $sub)
                                    <li>
                                        <a href="{{ route('subservices.show', $sub->id) }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">
                                            {{ $sub->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </li>

        <li><a href="{{ route('team') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Team</a></li>
        <li><a href="{{ route('job') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Jobs</a></li>
        <li><a href="{{ route('blog') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Blog</a></li>
        <li><a href="{{ route('contact') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Contact</a></li>

        {{-- Auth Links --}}
        @guest
            <li><a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Login</a></li>
            <li><a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Sign Up</a></li>
        @else
            <li class="border-t mt-2 pt-2">
                <div class="flex items-center px-4 py-2 space-x-2">
                    <img src="{{ Auth::user()->profile_photo_path ? asset('images/' . Auth::user()->profile_photo_path) : asset('images/default-admin.png') }}" 
                         alt="Profile" class="w-8 h-8 rounded-full">
                    <span class="font-semibold">{{ Auth::user()->name }}</span>
                </div>
                <ul class="pl-4">
                    <li>
                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-[#1193d4] hover:text-white">Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-[#1193d4] hover:text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
</div>

<!-- Mobile Search Bar -->
<div id="mobile-search-bar" class="hidden md:hidden bg-white border-t border-b px-4 py-3">
    <input type="text" placeholder="Search..."
        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#1193d4]">
</div>


    </div>
  </div>
</nav>


<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
/* Hover only when active */
#menu-btn.active:hover,
#mobile-search-btn.active:hover {
    background-color: #1193d4;
    color: white;
}
</style>

<script>
  // Highlight active desktop link
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('#navbar a');

  navLinks.forEach(link => {
    const linkPath = new URL(link.href).pathname;
    if(linkPath === currentPath) {
      link.classList.add('bg-[#1193d4]', 'text-white');
      const parentLi = link.closest('li.group');
      if(parentLi) {
        const parentLink = parentLi.querySelector('a');
        if(parentLink) parentLink.classList.add('bg-[#1193d4]', 'text-white');
      }
    }
    if(linkPath === '/services' && currentPath.startsWith('/service')) {
      link.classList.add('bg-[#1193d4]', 'text-white');
    }
  });

  // Mobile menu toggle
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    menuBtn.classList.toggle('active'); // hover only works when active
  });

  // Mobile search toggle
  const mobileSearchBtn = document.getElementById('mobile-search-btn');
  const mobileSearchBar = document.getElementById('mobile-search-bar');

  mobileSearchBtn.addEventListener('click', () => {
    mobileSearchBar.classList.toggle('hidden');
    mobileSearchBtn.classList.toggle('active'); // hover only works when active
  });

  // Mobile menu links: active + hover behavior
  const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');

  mobileMenuLinks.forEach(link => {
    link.addEventListener('click', () => {
      mobileMenuLinks.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
      mobileMenu.classList.add('hidden');
    });

    link.addEventListener('mouseenter', () => {
      if(!link.classList.contains('active')) link.classList.add('hover-active');
    });
    link.addEventListener('mouseleave', () => {
      link.classList.remove('hover-active');
    });
  });

  // Topbar hide/show on scroll
  const topbar = document.getElementById('topbar');
  const navbar = document.getElementById('navbar');

  function updateNavbar() {
    const topbarHeight = topbar.offsetHeight;
    if(window.scrollY > topbarHeight){
      topbar.style.transform = `translateY(-${topbarHeight}px)`;
      navbar.style.top = '0';
    } else {
      topbar.style.transform = 'translateY(0)';
      navbar.style.top = topbarHeight + 'px';
    }
  }

  window.addEventListener('scroll', updateNavbar);
  window.addEventListener('load', updateNavbar);
</script>


<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
