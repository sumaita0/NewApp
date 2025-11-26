<!-- Include Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<section class="py-12 px-2 sm:px-4 md:px-12 lg:px-44 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-8 text-center">Latest from the Blog</h2>

    <!-- Swiper Slider -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Blog Slide 1 -->
        <div class="swiper-slide bg-white shadow overflow-hidden">
          <img src="images/blog1.jpg" alt="Blog 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Blog Title 1</h3>
            <p class="text-gray-600 text-sm mb-2">detail</p>
            <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
          </div>
        </div>

        <!-- Blog Slide 2 -->
        <div class="swiper-slide bg-white shadow overflow-hidden">
          <img src="images/blog2.jpg" alt="Blog 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Blog Title 2</h3>
            <p class="text-gray-600 text-sm mb-2">detail</p>
            <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
          </div>
        </div>

        <!-- Blog Slide 3 -->
        <div class="swiper-slide bg-white shadow overflow-hidden">
          <img src="images/blog3.jpg" alt="Blog 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Blog Title 3</h3>
            <p class="text-gray-600 text-sm mb-2">detail</p>
            <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
          </div>
        </div>

        <!-- Blog Slide 4 (same image as 1) -->
        <div class="swiper-slide bg-white shadow overflow-hidden">
          <img src="images/blog1.jpg" alt="Blog 4" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Blog Title 4</h3>
            <p class="text-gray-600 text-sm mb-2">detail</p>
            <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
          </div>
        </div>

        <!-- Blog Slide 5 (same image as 2) -->
        <div class="swiper-slide bg-white shadow overflow-hidden">
          <img src="images/blog2.jpg" alt="Blog 5" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Blog Title 5</h3>
            <p class="text-gray-600 text-sm mb-2">detail</p>
            <a href="#" class="text-blue-500 font-semibold hover:underline">Read More</a>
          </div>
        </div>
      </div> <!-- /.swiper-wrapper -->

      <!-- Navigation & Pagination -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      
    </div>
  </div>
  
</section>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    slidesPerGroup: 3, // Group slides so only 2 dots appear (5 slides / 3 per group = 2 dots)
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: { slidesPerView: 1, slidesPerGroup: 1 },
      768: { slidesPerView: 2, slidesPerGroup: 2 },
      1024: { slidesPerView: 3, slidesPerGroup: 3 },
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
</script>
