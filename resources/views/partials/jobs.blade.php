<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Job Listings</title>
</head>
<body class="bg-gray-50 text-gray-900">
  <div class="px-2 sm:px-4 md:px-12 lg:px-44 py-10">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- LEFT COLUMN -->
      <div class="bg-[rgb(244,240,240)] p-6 space-y-6 h-fit">
        <h2 class="text-xl font-bold mb-4">Search</h2>
        
        <input type="text" placeholder="Location" class="w-full p-2 border rounded" />
        <input type="text" placeholder="Industry / Role" class="w-full p-2 border rounded" />
        <div class="text-start mt-12">
          <button class="inline-flex items-stretch bg-[#1193d4] text-white font-semibold rounded hover:bg-black transition">
            <span class="px-6 py-2 flex items-center">Search</span>
            <span class="flex items-center justify-center w-12 bg-black hover:bg-[#1193d4]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </button>
        </div>

        <h3 class="text-lg font-semibold mt-6">Filter Results</h3>

        <!-- REGION -->
        <div>
          <h4 class="font-semibold">By Region:</h4>
          <ul class="text-gray-700 space-y-1">
            <li>Australia and New Zealand (1)</li>
            <li>Eastern Africa (1)</li>
            <li>Melanesia (1)</li>
            <li>Northern America (1)</li>
            <li>Southern Asia (1)</li>
            <li>Southern Europe (1)</li>
          </ul>
        </div>

        <!-- INDUSTRY -->
        <div>
          <h4 class="font-semibold">By Industry:</h4>
          <ul class="text-gray-700 space-y-1">
            <li>Accounting / Finance (1)</li>
            <li>Technology / IT Jobs (1)</li>
          </ul>
        </div>

        <!-- TYPE -->
        <div>
          <h4 class="font-semibold">By Type:</h4>
          <ul class="text-gray-700 space-y-1">
            <li>Accounting / Banking / Finance Jobs (1)</li>
            <li>Art / Design / Creative Jobs (1)</li>
            <li>Technology / IT Jobs (1)</li>
          </ul>
        </div>

        <!-- WORK EXPERIENCE -->
        <div>
        <h4 class="font-semibold">Work Experience (Years):</h4>
        <input type="range" min="0" max="50" value="1" class="w-full" data-display="workMin" />
        <p class="text-sm text-gray-600">
            <span id="workMin">1</span> – <span id="workMax">50</span> years
        </p>
        </div>

        <!-- DATE POSTED -->
        <div>
          <h4 class="font-semibold">Date Posted:</h4>
          <p class="text-sm text-gray-600">Date</p>
        </div>

        <!-- SALARY RANGE -->
        <div>
          <h4 class="font-semibold">Salary Range:</h4>
          <input type="range" min="600" max="8000" value="2992" class="w-full" data-display="salaryMin" />
          <input type="range" min="600" max="8000" value="8000" class="w-full mt-2" data-display="salaryMax" />
          <p class="text-sm text-gray-600">
            $<span id="salaryMin">2992</span>.00 – $<span id="salaryMax">8000</span>.00
          </p>
        </div>

      </div>

      <!-- RIGHT COLUMN -->
      <div class="lg:col-span-2 space-y-10">
        <h2 class="text-2xl font-bold">Available Jobs</h2>

        <!-- Pagination -->
        <div class="flex space-x-2 text-sm">
          <span class="px-3 py-1 hover:bg-[#1193d4] border rounded">1</span>
          <span class="px-3 py-1 hover:bg-[#1193d4] border rounded">2</span>
          <span class="px-3 py-1 hover:bg-[#1193d4] border rounded">3</span>
          <span class="px-3 py-1 hover:bg-[#1193d4] border rounded">4</span>
        </div>

        <!-- JOBS LIST WITH FULL DETAILS -->
        <div class="space-y-6">

          <!-- Example Job Item -->
          <div class="bg-[rgb(244,240,240)] p-6 shadow rounded-xl job-item">
            <div class="text-sm font-bold text-[#1193d4]">19 MAY</div>
            <h3 class="text-xl font-semibold">HTML Developer</h3>
            <p class="text-gray-700">California, United States</p>

            <div class="job-details hidden mt-4">
              <p class="text-gray-700">Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci...</p>
              <ul class="list-disc pl-6 text-gray-700 mt-2 space-y-1">
                <li>Reiciendis laborum mollitia ad vel?</li>
                <li>Velit voluptates neque perspiciatis suscipit?</li>
                <li>Facere, sequi quo iste odio.</li>
                <li>A culpa libero tempora ut.</li>
              </ul>

              <h4 class="font-semibold mt-2">Required Skills</h4>
              <div class="flex gap-2 flex-wrap">
                <span class="px-3 py-1 bg-gray-200 rounded">HTML</span>
                <span class="px-3 py-1 bg-gray-200 rounded">CSS</span>
                <span class="px-3 py-1 bg-gray-200 rounded">JavaScript</span>
              </div>

              <p class="text-gray-700 mt-2">Preferred languages are Arabic, French & Italian...</p>

              <h4 class="font-semibold mt-2">Additional Requirements</h4>
              <p class="text-gray-700">WORK PERMIT • 5 Years Experience • MBA • Magento Certified • English Proficient</p>

              <div class="flex gap-4 pt-4">
                <button class="px-4 py-2 bg-[#1193d4] hover:bg-[#0e7ac1] text-white rounded">Apply for this Job</button>
                <button class="px-4 py-2 bg-[#1193d4] hover:bg-[#0e7ac1] text-white rounded">Share</button>
              </div>
            </div>

            <button class="mt-4 px-4 py-2 bg-[#1193d4] hover:bg-[#0e7ac1] text-white rounded toggle-details">More Info</button>
          </div>

          <!-- Repeat for other jobs -->
          <div class="bg-[rgb(244,240,240)] p-6 shadow rounded-xl job-item">
            <div class="text-sm font-bold text-[#1193d4]">19 MAY</div>
            <h3 class="text-xl font-semibold">Front End Developer</h3>
            <p class="text-gray-700">California, United States</p>

            <div class="job-details hidden mt-4">
              <p class="text-gray-700">Full description for Front End Developer...</p>
              <ul class="list-disc pl-6 text-gray-700 mt-2 space-y-1">
                <li>Experience with React.js</li>
                <li>Responsive design skills</li>
                <li>Team collaboration</li>
              </ul>
              <h4 class="font-semibold mt-2">Required Skills</h4>
              <div class="flex gap-2 flex-wrap">
                <span class="px-3 py-1 bg-gray-200 rounded">React</span>
                <span class="px-3 py-1 bg-gray-200 rounded">CSS</span>
                <span class="px-3 py-1 bg-gray-200 rounded">UI/UX</span>
              </div>
              <h4 class="font-semibold mt-2">Additional Requirements</h4>
              <p class="text-gray-700">WORK PERMIT • 3 Years Experience • English Proficient</p>
              <div class="flex gap-4 pt-4">
                <button class="px-4 py-2 bg-[#1193d4] hover:bg-[#0e7ac1] text-white rounded">Apply for this Job</button>
                <button class="px-4 py-2 bg-[#1193d4] hover:bg-[#0e7ac1] text-white rounded">Share</button>
              </div>
            </div>

            <button class="mt-4 px-4 py-2 bg-[#1193d4] hover:bg-[#0e7ac1] text-white rounded toggle-details">More Info</button>
          </div>

          <!-- Add other jobs here in the same format as above -->

        </div>
      </div>
    </div>
  </div>

    <script>
        // Toggle job details
        document.querySelectorAll('.toggle-details').forEach(button => {
        button.addEventListener('click', () => {
            const jobDetails = button.previousElementSibling;
            jobDetails.classList.toggle('hidden');
            button.textContent = jobDetails.classList.contains('hidden') ? 'More Info' : 'Less Info';
        });
        });
    
        // Update range slider display values
        document.querySelectorAll('input[type="range"]').forEach(slider => {
        slider.addEventListener('input', () => {
            const displayId = slider.getAttribute('data-display');
            document.getElementById(displayId).textContent = slider.value;
        });
        });
    </script>
    <script>
  const workMin = document.querySelector('input[data-display="workMin"]');
  const workMax = document.querySelector('input[data-display="workMax"]');
  const workMinDisplay = document.getElementById('workMin');
  const workMaxDisplay = document.getElementById('workMax');

  workMin.addEventListener('input', () => {
    let minVal = parseInt(workMin.value);
    let maxVal = parseInt(workMax.value);
    if(minVal > maxVal) {
      workMin.value = maxVal; // prevent min > max
      minVal = maxVal;
    }
    workMinDisplay.textContent = minVal;
  });

  workMax.addEventListener('input', () => {
    let minVal = parseInt(workMin.value);
    let maxVal = parseInt(workMax.value);
    if(maxVal < minVal) {
      workMax.value = minVal; // prevent max < min
      maxVal = minVal;
    }
    workMaxDisplay.textContent = maxVal;
  });
</script>
</body>
</html>