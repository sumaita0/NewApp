<!-- Include Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<style>
  /* Make pagination dots appear below the slider */
  .swiper-pagination {
    position: relative !important;
    bottom: 0 !important;
    margin-top: 20px;
    text-align: center;
  }
</style>

<section class="py-12 px-2 sm:px-4 md:px-12 lg:px-44 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-3xl font-monospace mb-8 text-center">Latest from the Blog</h2>

    <!-- Swiper Slider -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Blog Slide 1 -->
        <div class="swiper-slide relative">
          <div class="absolute top-2 left-2 bg-white text-center rounded shadow px-2 py-1 z-10">
            <span class="block font-bold text-sm">22</span>
            <span class="block text-xs text-gray-500">May</span>
          </div>
          <img src="images/blog1.jpg" alt="Blog 1" class="w-full h-48 object-cover mb-2">
          <h3 class="font-monospace text-xl mb-1 text-center">Blog Title 1</h3>
          <p class="text-gray-600 text-sm text-center">Detail goes here</p>
        </div>

        <!-- Blog Slide 2 -->
        <div class="swiper-slide relative">
          <div class="absolute top-2 left-2 bg-white text-center rounded shadow px-2 py-1 z-10">
            <span class="block font-bold text-sm">15</span>
            <span class="block text-xs text-gray-500">Jun</span>
          </div>
          <img src="images/blog2.jpg" alt="Blog 2" class="w-full h-48 object-cover mb-2">
          <h3 class="font-monospace text-xl mb-1 text-center">Blog Title 2</h3>
          <p class="text-gray-600 text-sm text-center">Detail goes here</p>
        </div>

        <!-- Blog Slide 3 -->
        <div class="swiper-slide relative">
          <div class="absolute top-2 left-2 bg-white text-center rounded shadow px-2 py-1 z-10">
            <span class="block font-bold text-sm">08</span>
            <span class="block text-xs text-gray-500">Jul</span>
          </div>
          <img src="images/blog3.jpg" alt="Blog 3" class="w-full h-48 object-cover mb-2">
          <h3 class="font-monospace text-xl mb-1 text-center">Blog Title 3</h3>
          <p class="text-gray-600 text-sm text-center">Detail goes here</p>
        </div>

        <!-- Blog Slide 4 -->
        <div class="swiper-slide relative">
          <div class="absolute top-2 left-2 bg-white text-center rounded shadow px-2 py-1 z-10">
            <span class="block font-bold text-sm">22</span>
            <span class="block text-xs text-gray-500">May</span>
          </div>
          <img src="images/blog1.jpg" alt="Blog 4" class="w-full h-48 object-cover mb-2">
          <h3 class="font-monospace text-xl mb-1 text-center">Blog Title 4</h3>
          <p class="text-gray-600 text-sm text-center">Detail goes here</p>
        </div>

        <!-- Blog Slide 5 -->
        <div class="swiper-slide relative">
          <div class="absolute top-2 left-2 bg-white text-center rounded shadow px-2 py-1 z-10">
            <span class="block font-bold text-sm">15</span>
            <span class="block text-xs text-gray-500">Jun</span>
          </div>
          <img src="images/blog2.jpg" alt="Blog 5" class="w-full h-48 object-cover mb-2">
          <h3 class="font-monospace text-xl text-center mb-1">Blog Title 5</h3>
          <p class="text-gray-600 text-sm text-center">Detail goes here</p>
        </div>

      </div>
    </div>

    <!-- Pagination BELOW slider -->
    <div class="swiper-pagination"></div>

  </div>
</section>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    slidesPerGroup: 3,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: { slidesPerView: 1, slidesPerGroup: 1 },
      768: { slidesPerView: 2, slidesPerGroup: 2 },
      1024: { slidesPerView: 3, slidesPerGroup: 3 },
    },
  });
</script>
