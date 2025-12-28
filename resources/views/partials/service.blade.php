<!-- Services Section -->
<section id="services" class="py-16 bg-gray-50 px-4 md:px-12 lg:px-44 pb-16">
  <div class="text-center mb-10">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold">Our Services</h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    
    @forelse($services as $service)

      @auth
      @if(Auth::user()->usertype === 'admin')
        <!-- ADMIN CARD (not clickable) -->
        <div class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4]">

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

          <!-- Admin buttons -->
          <div class="flex gap-3 mt-auto">
            <a href="{{ route('services.edit', $service->id) }}"
               class="bg-[#1193d4] text-white px-4 py-1 rounded hover:bg-[#0e7bbd] text-sm">
              Edit
            </a>

            <form action="{{ route('services.destroy', $service->id) }}"
                  method="POST"
                  onsubmit="return confirm('Delete this service?')">
              @csrf
              @method('DELETE')
              <button
                type="submit"
                class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 text-sm">
                Delete
              </button>
            </form>
          </div>
        </div>

      @else
        <!-- USER CARD (clickable) -->
        <a 
          href="{{ route('services.show', $service->slug) }}"
          class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4]"
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

          <p class="text-gray-800 group-hover:text-white transition text-center">
            {{ Str::limit($service->description, 100) }}
          </p>
        </a>
      @endif
      @endauth

      @guest
        <!-- GUEST CARD -->
        <a 
          href="{{ route('services.show', $service->slug) }}"
          class="bg-[rgb(244,240,240)] p-8 sm:p-10 group transition flex flex-col items-center text-center hover:bg-[#1193d4]"
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

          <p class="text-gray-800 group-hover:text-white transition text-center">
            {{ Str::limit($service->description, 100) }}
          </p>
        </a>
      @endguest

    @empty
      <p class="col-span-3 text-center text-gray-500">No services available.</p>
    @endforelse

  </div>
</section>

<style>
.service-icon {
  filter: none;
  transition: filter 0.3s ease;
}
.group:hover .service-icon {
  filter: brightness(0) invert(1);
}
</style>
