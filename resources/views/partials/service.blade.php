<!-- Services Section -->
<section id="services" class="py-20 bg-gray-50 px-4 lg:px-44">
  <div class="text-center mb-12">
    <h2 class="text-4xl sm:text-5xl font-extrabold">Our Services</h2>
  </div>

  <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8 grid gap-8 sm:grid-cols-1 md:grid-cols-3">

    <!-- Service 1 -->
    <div class="bg-white p-20 rounded-lg group transition flex flex-col items-center text-center hover:bg-[#1193d4]">
      <div class="mb-4">
        <img src="/images/hosting.png" class="h-12 w-12 service-icon transition" alt="Hosting">
      </div>
      <h3 class="text-2xl font-bold mb-2 text-black group-hover:text-white transition">Service One</h3>
      <p class="text-gray-800 group-hover:text-white transition text-center">High-quality service designed to optimize your business processes and increase efficiency.</p>
    </div>

    <!-- Service 2 -->
    <div class="bg-white p-20 rounded-lg group transition flex flex-col items-center text-center hover:bg-[#1193d4]">
      <div class="mb-4">
        <img src="/images/security.png" class="h-12 w-12 service-icon transition" alt="Security">
      </div>
      <h3 class="text-2xl font-bold mb-2 text-black group-hover:text-white transition">Service Two</h3>
      <p class="text-gray-800 group-hover:text-white transition text-center">Expert solutions tailored to meet complex challenges and ensure measurable results.</p>
    </div>

    <!-- Service 3 -->
    <div class="bg-white p-20 rounded-lg group transition flex flex-col items-center text-center hover:bg-[#1193d4]">
      <div class="mb-4">
        <img src="/images/data-analytics.png" class="h-12 w-12 service-icon transition" alt="Data Analytics">
      </div>
      <h3 class="text-2xl font-bold mb-2 text-black group-hover:text-white transition">Service Three</h3>
      <p class="text-gray-800 group-hover:text-white transition text-center">Innovative strategies to help you stay ahead of the competition in a fast-changing market.</p>
    </div>

  </div>
</section>

<style>
/* Icons visible normally and turn white on hover */
.service-icon {
  filter: none; /* visible before hover */
  transition: filter 0.3s ease;
}

.group:hover .service-icon {
  filter: brightness(0) invert(1); /* white on hover */
}
</style>
