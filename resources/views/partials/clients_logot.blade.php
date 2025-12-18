<!-- Include Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-2 sm:px-4 md:px-12 lg:px-44">
    <h2 class="text-3xl font-monospace mb-8 text-center">Our Amazing Clients</h2>
    <p class="text-center text-gray-600 mb-12">
      We trust in longlasting partnerships with the most important brands on the market
    </p>

    <!-- Swiper Slider -->
    <div class="swiper myClientSwiper">
      <div class="swiper-wrapper">

        <!-- Client Logos -->
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-1.jpg" alt="Client 1" class="h-20 sm:h-24 object-contain">
        </div>
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-2.jpg" alt="Client 2" class="h-20 sm:h-24 object-contain">
        </div>
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-3.jpg" alt="Client 3" class="h-20 sm:h-24 object-contain">
        </div>
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-4.jpg" alt="Client 4" class="h-20 sm:h-24 object-contain">
        </div>
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-5.jpg" alt="Client 5" class="h-20 sm:h-24 object-contain">
        </div>
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-2.jpg" alt="Client 6" class="h-20 sm:h-24 object-contain">
        </div>
        <div class="swiper-slide flex justify-center items-center p-4">
          <img src="images/client-img-3.jpg" alt="Client 7" class="h-20 sm:h-24 object-contain">
        </div>

      </div> <!-- /.swiper-wrapper -->
    </div>
  </div>
</section>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const clientSwiper = new Swiper(".myClientSwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    speed: 3000,
    breakpoints: {
      320: { slidesPerView: 2, spaceBetween: 10 },
      480: { slidesPerView: 2, spaceBetween: 15 },
      640: { slidesPerView: 3, spaceBetween: 15 },
      768: { slidesPerView: 4, spaceBetween: 20 },
      1024: { slidesPerView: 5, spaceBetween: 30 },
    },
  });
</script>
