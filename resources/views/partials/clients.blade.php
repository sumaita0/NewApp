<section class="py-10 px-6 sm:px-12 lg:px-44 bg-[#1193d4]">
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 text-center 
              divide-y sm:divide-y-0 sm:divide-x divide-white/30">

    <!-- Satisfied Clients -->
    <div class="px-6 py-6">
      <h3 class="text-4xl sm:text-5xl font-bold text-white counter" data-target="16812">0</h3>
      <p class="mt-2 text-white/90">Satisfied Clients</p>
    </div>

    <!-- Millions $ Equity -->
    <div class="px-6 py-6">
      <h3 class="text-4xl sm:text-5xl font-bold text-white counter" data-target="482">0</h3>
      <p class="mt-2 text-white/90">Millions $ Equity</p>
    </div>

    <!-- Partners in Holding -->
    <div class="px-6 py-6">
      <h3 class="text-4xl sm:text-5xl font-bold text-white counter" data-target="92">0</h3>
      <p class="mt-2 text-white/90">Partners in Holding</p>
    </div>

    <!-- Other Stat -->
    <div class="px-6 py-6">
      <h3 class="text-4xl sm:text-5xl font-bold text-white counter" data-target="2980">0</h3>
      <p class="mt-2 text-white/90">Other Stat</p>
    </div>

  </div>
</section>


<script>
  const counters = document.querySelectorAll('.counter');

  const startCounting = (counter) => {
    const target = +counter.getAttribute('data-target');
    const speed = 50;

    const update = () => {
      const current = +counter.innerText;
      const increment = target / 100;

      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(update, speed);
      } else {
        counter.innerText = target;
      }
    };

    update();
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          startCounting(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observer.observe(counter));
</script>

