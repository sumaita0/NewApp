  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[100vh]" style="background-image: url('/images/createimg.png');" >
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="container mx-auto h-full flex items-center justify-center relative z-10 px-4 sm:px-8 md:px-24 lg:px-44 m-1">
      <div class="max-w-2xl text-center lg:text-left text-white space-y-6">
        <h1 class="text-4xl text-center sm:text-5xl md:text-6xl font-extrabold leading-tight">
          Lets create a Service {{ Auth::user()->name ?? 'Admin' }} !!
        </h1>
        <p class="text-lg text-center sm:text-xl md:text-2xl">
            Provide the details below to add a new service to the platform.
        </p>    
      </div>
    </div>
  </section>