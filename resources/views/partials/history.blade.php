<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company History</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f7f7f7;
    }

    .year-bar {
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 15px;
      background: #f7f7f7;
      color: #333;
      font-weight: bold;
      overflow-x: auto;
      white-space: nowrap;
    }

    .year-item {
      cursor: pointer;
      padding: 8px 14px;
      border-radius: 20px;
      transition: 0.3s;
    }

    .year-item.active,
    .year-item:hover {
      background: #1193d4;
      color: white;
    }

    .swiper {
      width: 80%;

      padding: 140px 0;
    }

    .swiper-slide {
      background: white;
      margin: 0 auto;
      max-width: 1000px;
      padding: 30px;
      border-radius: 15px;
    }

    h2 { margin-top: 0; }

    /* Swiper Navigation Buttons */
    .swiper-button-next,
    .swiper-button-prev {
      color: #111010;
    }
  </style>
</head>
<body>

  <h1 class="text-4xl font-monospace text-left px-4 md:px-12 lg:px-44 mt-10">Our History</h1>
  <div class="px-4 md:px-12 lg:px-44 mt-10 mb-20">

  <!-- YEAR BAR -->
  <div class="year-bar" id="yearBar">
    <div class="year-item" data-slide="0">1907</div>
    <div class="year-item" data-slide="1">1914</div>
    <div class="year-item" data-slide="2">1917</div>
    <div class="year-item" data-slide="3">1948</div>
    <div class="year-item" data-slide="4">1956</div>
  </div>

  <!-- SWIPER SLIDER -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="flex flex-col md:flex-row items-center gap-6">
          <img src="/images/time-line-img.jpg" alt="History Image" class="w-128 h-128 object-cover rounded">
          <div class="text-left md:w-1/2">
            <span class="text-gray-500">October 21, 1907</span>
            <h2 class="text-2xl font-bold mb-2">Jack Sharp is born</h2>
            <p class="text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quos, minus iste eum distinctio illum aliquam perferendis delectus quo voluptatum accusamus velit sequi culpa, quibusdam, temporibus eligendi, doloremque itaque voluptates.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="flex flex-col md:flex-row items-center gap-6">
          <img src="/images/time-line-img.jpg" alt="History Image" class="w-128 h-128  object-cover rounded">
          <div class="text-left md:w-1/2">
            <span class="text-gray-500">April 6, 1914</span>
            <h2 class="text-2xl font-bold mb-2">Significant Event</h2>
            <p class="text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quos, minus iste eum distinctio illum aliquam perferendis delectus quo voluptatum accusamus velit sequi culpa, quibusdam, temporibus eligendi, doloremque itaque voluptates.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="flex flex-col md:flex-row items-center gap-6">
          <img src="/images/time-line-img.jpg" alt="History Image" class="w-128 h-128  object-cover rounded">
          <div class="text-left md:w-1/2">
            <span class="text-gray-500">October 21, 1917</span>
            <h2 class="text-2xl font-bold mb-2">Significant Event</h2>
            <p class="text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quos, minus iste eum distinctio illum aliquam perferendis delectus quo voluptatum accusamus velit sequi culpa, quibusdam, temporibus eligendi, doloremque itaque voluptates.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide">
        <div class="flex flex-col md:flex-row items-center gap-6">
          <img src="/images/time-line-img.jpg" alt="History Image" class="w-128 h-128 object-cover rounded">
          <div class="text-left md:w-1/2">
            <span class="text-gray-500">October 21, 1948</span>
            <h2 class="text-2xl font-bold mb-2">Significant Event</h2>
            <p class="text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quos, minus iste eum distinctio illum aliquam perferendis delectus quo voluptatum accusamus velit sequi culpa, quibusdam, temporibus eligendi, doloremque itaque voluptates.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="swiper-slide">
        <div class="flex flex-col md:flex-row items-center gap-6">
          <img src="/images/time-line-img.jpg" alt="History Image" class="w-128 h-128 object-cover rounded">
          <div class="text-left md:w-1/2">
            <span class="text-gray-500">October 21, 1956</span>
            <h2 class="text-2xl font-bold mb-2">Significant Event</h2>
            <p class="text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quos, minus iste eum distinctio illum aliquam perferendis delectus quo voluptatum accusamus velit sequi culpa, quibusdam, temporibus eligendi, doloremque itaque voluptates.
            </p>
          </div>
        </div>
      </div>

    </div>

    <!-- Navigation Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.mySwiper', {
      speed: 600,
      loop: false,
      slidesPerView: 1,
      centeredSlides: true, // Center the active slide
      spaceBetween: 100,
      navigation: {        // Add navigation arrows
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        slideChange: function() {
          highlightYear(swiper.activeIndex);
        }
      }
    });

    const yearItems = document.querySelectorAll('.year-item');

    yearItems.forEach(item => {
      item.addEventListener('click', () => {
        let slide = item.getAttribute('data-slide');
        swiper.slideTo(slide);
        highlightYear(slide);
      });
    });

    function highlightYear(index) {
      yearItems.forEach(i => i.classList.remove('active'));
      yearItems[index].classList.add('active');
    }

    // Highlight first year by default
    highlightYear(0);
  </script>
  </div>
</body>
</html>

