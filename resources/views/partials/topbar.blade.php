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

<script>
function setLang(lang) {
  alert('Language set to ' + lang);
  document.getElementById('langMenu').classList.add('hidden');
}
window.addEventListener('click', function(e){
  const langBtn = document.querySelector('[onclick*="langMenu"]');
  const langMenu = document.getElementById('langMenu');
  if (!langBtn.contains(e.target) && !langMenu.contains(e.target)) {
    langMenu.classList.add('hidden');
  }
});
</script>


<!-- Bootstrap Icons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
