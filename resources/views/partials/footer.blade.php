<!-- Footer -->
<footer class="bg-[#333333] text-gray-200 py-10 px-4 sm:px-8 lg:px-44">

  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
 
    
    <!-- Contact Info -->
    <div class="space-y-4">
      <h3><img src="/images/logo-footer.png" alt="Logo" class="mb-2"></h3>


      <!-- Map with Address Text Overlay -->
      <div class="relative w-full h-20 rounded overflow-hidden">
        <!-- Map Image (transparent, full width) -->
        <img src="/images/map.jpg" alt="Map" class="absolute left-0 top-0 w-full h-full object-cover opacity-10">

        <!-- Text overlay aligned to left -->
        <div class="absolute left-0 top-0 flex flex-col justify-center px-0 h-full">
          <p class="font-monospace text-white ml-2 text-sm sm:text-base">

            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107
          </p>
        </div>
      </div>

      <p class="mt-2">(123) 456-7890</p>
      <p class="mt-2">example@example.com</p>

      <!-- Additional Logo -->
      <div class="mt-4">
        <img src="/images/client-img-1.jpg" alt="Partner Logo" class="h-10">
      </div>
    </div>

    <!-- Twitter Feed -->
    <div class="space-y-4">
      <h3 class="text-xl font-monospace mb-4">Twitter Feed</h3>
      <div class="space-y-4 text-sm">
        <p>“A Guide to Better Brainstorming <a href="http://enva.to/nfNrz" class="text-blue-400 hover:underline">http://enva.to/nfNrz</a> by @jeff_haden”<br><span class="text-gray-400 text-xs">May 22, 2014</span></p>
        <p>“Are you a student? You only have 48 hours left to grab a full year on Tuts+ for just $45! Don't miss out. <a href="http://ow.ly/McvuJ" class="text-blue-400 hover:underline">http://ow.ly/McvuJ</a>”<br><span class="text-gray-400 text-xs">May 22, 2014</span></p>
      </div>
    </div>

    <!-- Photostream -->
    <div class="space-y-4">
      <h3 class="text-xl font-bold mb-4">Photostream</h3>
      <div class="grid grid-cols-3 sm:grid-cols-3 gap-2">

        <!-- Photostream -->
          <img src="{{ asset('images/photo-img-1.jpg') }}" alt="photo-img-1.jpg" class="rounded">
          <img src="{{ asset('images/photo-img-2.jpg') }}" alt="photo-img-2.jpg" class="rounded">
          <img src="{{ asset('images/photo-img-3.jpg') }}" alt="photo-img-3.jpg" class="rounded">
          <img src="{{ asset('images/photo-img-4.jpg') }}" alt="photo-img-4.jpg" class="rounded">
          <img src="{{ asset('images/photo-img-5.jpg') }}" alt="photo-img-5.jpg" class="rounded">
          <img src="{{ asset('images/photo-img-6.jpg') }}" alt="photo-img-6.jpg" class="rounded">
      </div>
    </div>

    <!-- Categories -->
    <div class="space-y-4">
      <h3 class="text-xl font-bold mb-4">Categories</h3>
        <div class="flex flex-wrap gap-2 text-sm sm:text-base">

            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Business</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Envato</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Themes</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Responsiveness</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">SEO</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Mobile</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">IOS</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Design</a>
            <a href="#" class="bg-gray-800 p-2 rounded-lg hover:bg-[#1193d4] hover:text-white transition flex flex-col items-center text-center">Flat</a>
        </div>
    </div>
  </div>
</footer>


  <!-- Footer Bottom -->
<div class="w-full bg-gray-950 py-4">
  <div class="container mx-auto px-4 sm:px-8 lg:px-44 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">


    <!-- Left -->
    <div class="mb-2 md:mb-0 text-center md:text-left font-bold text-white">
      <p>
      © All Rights Reserved <span style="color:#1193d4;">IOD</span>
      </p>
    </div>

    <!-- Right -->
    <div class="flex space-x-4">
      <a href="#" class="hover:text-white transition">Privacy Policy</a>
      <span>|</span>
      <a href="#" class="hover:text-white transition">Terms & Conditions</a>
    </div>

  </div>
</div>

