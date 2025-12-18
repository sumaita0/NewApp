<head>
  <!-- Font Awesome & Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<section class="py-16 px-2 sm:px-4 md:px-12 lg:px-44 bg-[rgb(244,240,240)]">
  <div class="container mx-auto">
    <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">Our Team</h2>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center sm:justify-start gap-2 mb-10">
      <button class="filter-btn active px-3 py-1 text-sm hover:bg-[#1193d4] hover:text-white text-gray-700 rounded-md" data-filter="all">All</button>
      <button class="filter-btn px-3 py-1 text-sm hover:bg-[#1193d4] hover:text-white text-gray-700 rounded-md" data-filter="CEO">CEO</button>
      <button class="filter-btn px-3 py-1 text-sm hover:bg-[#1193d4] hover:text-white text-gray-700 rounded-md" data-filter="Human Resources">Human Resources</button>
      <button class="filter-btn px-3 py-1 text-sm hover:bg-[#1193d4] hover:text-white text-gray-700 rounded-md" data-filter="New Manager">New Manager</button>
      <button class="filter-btn px-3 py-1 text-sm hover:bg-[#1193d4] hover:text-white text-gray-700 rounded-md" data-filter="Marketing Head">Marketing Head</button>
      <button class="filter-btn px-3 py-1 text-sm hover:bg-[#1193d4] hover:text-white text-gray-700 rounded-md" data-filter="Lead Developer">Lead Developer</button>
    </div>

    <!-- Team Members Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">

      <!-- Team Member 1 -->
      <div class="team-member flex flex-col md:flex-row items-center gap-4 sm:gap-6" data-category="CEO">
        <img src="images/team-img-1-1.jpg" alt="Jeff Walsh" class="w-full md:w-64 h-64 md:h-64 object-cover rounded-lg mb-4 md:mb-0">
        <div class="text-center md:text-left md:w-1/2">
          <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
          <p class="text-blue-500 font-semibold mb-2">CEO</p>
          <p class="text-gray-600 text-sm mb-3 sm:mb-5">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
          <div class="flex justify-center md:justify-start space-x-4 mt-2">
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="team-member flex flex-col md:flex-row items-center gap-4 sm:gap-6" data-category="CEO">
        <img src="images/team-img-1-2.jpg" alt="Jeff Walsh" class="w-full md:w-64 h-64 md:h-64 object-cover rounded-lg mb-4 md:mb-0">
        <div class="text-center md:text-left md:w-1/2">
          <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
          <p class="text-blue-500 font-semibold mb-2">CEO</p>
          <p class="text-gray-600 text-sm mb-3 sm:mb-5">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
          <div class="flex justify-center md:justify-start space-x-4 mt-2">
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="team-member flex flex-col md:flex-row items-center gap-4 sm:gap-6" data-category="New Manager">
        <img src="images/team-img-1-3.jpg" alt="Jeff Walsh" class="w-full md:w-64 h-64 md:h-64 object-cover rounded-lg mb-4 md:mb-0">
        <div class="text-center md:text-left md:w-1/2">
          <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
          <p class="text-blue-500 font-semibold mb-2">New Manager</p>
          <p class="text-gray-600 text-sm mb-3 sm:mb-5">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
          <div class="flex justify-center md:justify-start space-x-4 mt-2">
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 4 -->
      <div class="team-member flex flex-col md:flex-row items-center gap-4 sm:gap-6" data-category="Human Resources">
        <img src="images/team-img-1-4.jpg" alt="Jeff Walsh" class="w-full md:w-64 h-64 md:h-64 object-cover rounded-lg mb-4 md:mb-0">
        <div class="text-center md:text-left md:w-1/2">
          <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
          <p class="text-blue-500 font-semibold mb-2">Human Resources</p>
          <p class="text-gray-600 text-sm mb-3 sm:mb-5">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
          <div class="flex justify-center md:justify-start space-x-4 mt-2">
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 5 -->
      <div class="team-member flex flex-col md:flex-row items-center gap-4 sm:gap-6" data-category="Marketing Head">
        <img src="images/team-img-1-5.jpg" alt="Jeff Walsh" class="w-full md:w-64 h-64 md:h-64 object-cover rounded-lg mb-4 md:mb-0">
        <div class="text-center md:text-left md:w-1/2">
          <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
          <p class="text-blue-500 font-semibold mb-2">Marketing Head</p>
          <p class="text-gray-600 text-sm mb-3 sm:mb-5">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
          <div class="flex justify-center md:justify-start space-x-4 mt-2">
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 6 -->
      <div class="team-member flex flex-col md:flex-row items-center gap-4 sm:gap-6" data-category="Lead Developer">
        <img src="images/team-img-1-6.jpg" alt="Jeff Walsh" class="w-full md:w-64 h-64 md:h-64 object-cover rounded-lg mb-4 md:mb-0">
        <div class="text-center md:text-left md:w-1/2">
          <h3 class="text-xl font-bold mb-1">Jeff Walsh</h3>
          <p class="text-blue-500 font-semibold mb-2">Lead Developer</p>
          <p class="text-gray-600 text-sm mb-3 sm:mb-5">
            Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
          </p>
          <div class="flex justify-center md:justify-start space-x-4 mt-2">
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  const filterButtons = document.querySelectorAll(".filter-btn");
  const teamMembers = document.querySelectorAll(".team-member");

  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      const filter = button.getAttribute("data-filter");

      // Active button styling
      filterButtons.forEach(btn => btn.classList.remove("active", "bg-blue-500", "text-white"));
      button.classList.add("active", "bg-blue-500", "text-white");

      teamMembers.forEach(member => {
        const category = member.getAttribute("data-category");
        if (filter === "all" || category === filter) {
          member.style.display = "flex";
        } else {
          member.style.display = "none";
        }
      });
    });
  });
</script>

<style>
  .filter-btn.active {
    background-color: #1193d4;
    color: white;
  }
</style>
