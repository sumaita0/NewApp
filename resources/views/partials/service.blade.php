<!-- Services Section -->
<section id="services" class="py-16 bg-gray-50 px-4 md:px-12 lg:px-44 pb-16">
  <div class="text-center mb-10">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold">Our Services</h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <!-- #region -->
      @forelse($services as $service)
        <div 
            class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4] cursor-pointer"
            onclick="openModal('{{ $service->title }}', `{{ $service->description }}`)"
        >
            <div class="mb-4">
                <img 
                    src="{{ $service->icon ? asset('images/' . $service->icon) : '/images/default-service.png' }}" 
                    class="h-12 w-12 service-icon transition" 
                    alt="{{ $service->title }}"
                >
            </div>
            <h3 class="text-xl sm:text-2xl font-bold mb-2 text-black group-hover:text-white transition">
                {{ $service->title }}
            </h3>
            <p class="text-gray-800 group-hover:text-white transition text-center mb-4">
                {{ Str::limit($service->description, 100) }}
            </p>
        </div>
    @empty
        <p class="col-span-3 text-center text-gray-500">No services available.</p>
    @endforelse

   <!-- #endregion -->

  </div>
</section>

<style>
/* Icons visible normally and turn white on hover */
.service-icon {
  filter: none;
  transition: filter 0.3s ease;
}
.group:hover .service-icon {
  filter: brightness(0) invert(1);
}
</style>

<!-- Modal -->
<div id="serviceModal" class="fixed inset-0 bg-black/60 hidden justify-center items-center z-[999]">
  <div class="bg-white rounded-xl shadow-xl max-w-2xl w-full p-8 relative">
    
    <!-- Close Button -->
    <button id="closeModal" class="absolute top-4 right-4 text-3xl font-bold text-gray-600 hover:text-black">&times;</button>
    
    <!-- Modal Content -->
    <h2 id="modalTitle" class="text-3xl font-bold mb-4">Service Title</h2>
    <p id="modalDescription" class="text-gray-700 leading-relaxed mb-6">
      Service description goes here...
    </p>
    
    <!-- Buttons -->
    <div class="flex justify-center gap-4 mt-4">
      <a href="#contact" class="bg-gray-200 text-gray-800 px-6 py-2 rounded hover:bg-[#1193d4] hover:text-white transition">Contact Now</a>
      <a href="{{ route('services.show', $service->slug) }}" class="bg-gray-200 text-gray-800 px-6 py-2 rounded hover:bg-[#1193d4] hover:text-white transition">View Services</a>
    </div>
  </div>
</div>

<script>
function openModal(title, description) {
  document.getElementById("modalTitle").innerText = title;
  document.getElementById("modalDescription").innerText = description;
  document.getElementById("serviceModal").classList.remove("hidden");
  document.body.style.overflow = "hidden"; // disable scroll
}

document.getElementById("closeModal").addEventListener("click", function() {
  document.getElementById("serviceModal").classList.add("hidden");
  document.body.style.overflow = "auto";
});

// Close when clicking outside modal content
document.getElementById("serviceModal").addEventListener("click", function(e) {
  if(e.target === this){
    this.classList.add("hidden");
    document.body.style.overflow = "auto";
  }
});
</script>
