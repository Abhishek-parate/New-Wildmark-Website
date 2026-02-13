<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kanha Holiday Tour Package</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS -->
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome 6 Free (icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    referrerpolicy="no-referrer" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Roboto Mono", monospace;
      overflow-x: hidden;
      width: 100%;
    }

    .font-serif {
      font-family: "Roboto Slab", serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto Slab", serif;
    }

    /* Fixed dropdown behavior */
    .dropdown {
      position: relative;
    }

    .dropdown:hover .mega-menu,
    .dropdown .mega-menu:hover {
      display: block;
    }

    .mega-menu {
      display: none;
      position: absolute;
      padding-top: 1rem;
      margin-top: -1rem;
      min-width: 200px;
    }

    html {
      scroll-behavior: smooth;
    }

    /* Navbar variables */
    :root {
      --nav-h: 60px;
      --tabs-gap: 0px;
      --tabs-offset: calc(var(--nav-h) + var(--tabs-gap));
      scroll-padding-top: calc(var(--tabs-offset) + 20px);
    }

    @media (min-width: 768px) {
      :root {
        --nav-h: 80px;
      }
    }

    /* Tabs styling */
    .tab-btn {
      position: relative;
      transition: color 0.3s ease;
      font-family: "Roboto Slab", serif;
      font-weight: 700;
      font-size: 0.875rem;
      color: #d4a574;
      padding-bottom: 0.75rem;
      white-space: nowrap;
      cursor: pointer;
    }

    @media (min-width: 768px) {
      .tab-btn {
        font-size: 1rem;
        padding-bottom: 1rem;
      }
    }

    .tab-btn:hover {
      color: #ca9f66;
    }

    .tab-btn.active {
      color: #ffffff;
    }

    .tab-btn.active::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background-color: #ca9f66;
    }

    .tab-btn-a {
      position: relative;
      transition: color 0.3s ease;
      font-family: "Roboto Slab", serif;
      font-weight: 700;
      font-size: 0.875rem;
      color: #d4a574;
      padding-bottom: 0.75rem;
      white-space: nowrap;
      cursor: pointer;
    }

    @media (min-width: 768px) {
      .tab-btn-a {
        font-size: 1rem;
        padding-bottom: 1rem;
      }
    }

    .tab-btn-a:hover {
      color: #ca9f66;
    }

    .tab-btn-a.active {
      color: #ffffff;
    }

    .tab-btn-a.active::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background-color: #ca9f66;
    }

    /* Icon colors */
    .icon-check {
      color: #22c55e;
    }

    .text-jungle {
      color: #d4a574;
    }

    .text-bark {
      color: #e5e5e5;
    }

    /* Mobile Menu */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }

    .mobile-menu.active {
      max-height: 500px;
    }

    /* Prevent horizontal overflow */
    .container {
      width: 100%;
      max-width: 100%;
    }

    section {
      width: 100%;
      overflow-x: hidden;
    }

    /* Swiper Carousel Styles */
    .packageSwiper {
      padding-bottom: 60px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .swiper-slide {
      height: auto;
    }

    .swiper-button-next,
    .swiper-button-prev {
      background: rgba(212, 165, 116, 0.2);
      backdrop-filter: blur(10px);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 2px solid rgba(212, 165, 116, 0.3);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 20px;
      color: #d4a574;
      font-weight: bold;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
      background: rgba(212, 165, 116, 0.4);
      border-color: #ca9f66;
    }

    .swiper-pagination {
      bottom: 20px !important;
    }

    .swiper-pagination-bullet {
      background: #d4a574;
      opacity: 0.4;
      width: 12px;
      height: 12px;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
      background: #ca9f66;
      transform: scale(1.2);
    }

    /* Line clamp utility */
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    @media (max-width: 768px) {

      .swiper-button-next,
      .swiper-button-prev {
        width: 40px;
        height: 40px;
      }

      .swiper-button-next::after,
      .swiper-button-prev::after {
        font-size: 16px;
      }
    }

    /* CRITICAL OVERFLOW FIXES */
    * {
      box-sizing: border-box;
    }

    html,
    body {
      max-width: 100vw;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Roboto Mono", monospace;
    }

    .font-serif {
      font-family: "Roboto Slab", serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto Slab", serif;
    }

    /* IMPROVED DROPDOWN */
    .dropdown {
      position: relative;
    }

    .dropdown:hover .mega-menu,
    .dropdown .mega-menu:hover {
      display: block;
    }

    .mega-menu {
      display: none;
      position: absolute;
      padding-top: 1rem;
      margin-top: -1rem;
      min-width: 200px;
    }

    /* Mobile menu */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }

    .mobile-menu.active {
      max-height: 800px;
      /* Increased to accommodate dropdown */
    }

    /* Mobile Packages Dropdown */
    .mobile-packages-dropdown {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }

    .mobile-packages-dropdown.active {
      max-height: 500px;
    }
  </style>
</head>

<body class="bg-black text-white">
  <nav class="fixed w-full bg-black z-50 py-3 md:py-2 border-b border-neutral-800" data-aos="fade-down"
    data-aos-duration="800">
    <div class="container mx-auto px-3 md:px-6">
      <!-- Mobile Layout -->
      <div class="flex md:hidden justify-between items-center relative">
        <!-- Mobile Hamburger -->
        <button id="mobileMenuBtn" class="text-white hover:text-amber-500 transition z-20 p-1">
          <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>

        <!-- Center Logo on Mobile - INCREASED SIZE -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
          <a href="home.php" class="flex items-center">
            <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo" class="h-14 w-auto object-contain" />
          </a>
        </div>

        <!-- Right Side - Only Book Now Button -->
        <div class="flex items-center">
          <!-- Book Now Button -->
          <a href="contact.php" class="bg-amber-600 hover:bg-amber-700 px-3 py-2 transition text-xs font-semibold"
            title="Book Now">
            BOOK NOW
          </a>
        </div>
      </div>

      <!-- Desktop Layout -->
      <div class="hidden md:flex justify-between items-center">
        <!-- Left - Logo Desktop -->
        <div class="flex items-center">
          <a href="home.php" class="flex items-center">
            <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo"
              class="h-12 md:h-14 lg:h-16 w-auto object-contain" />
          </a>
        </div>

        <!-- Center - Menu Items Desktop -->
        <div class="flex-1 flex justify-center">
          <div class="flex space-x-4 lg:space-x-8 text-xs lg:text-sm font-light tracking-wider items-center">
            <a href="home.php" class="hover:text-amber-500 transition">Home</a>
            <a href="about.php" class="hover:text-amber-500 transition">About</a>
            <a href="How-to-Reach.php" class="hover:text-amber-500 transition">How to Reach</a>
            <a href="kanha.php" class="hover:text-amber-500 transition">Kanha</a>

            <!-- Packages Dropdown -->
            <div class="relative dropdown group">
              <button class="hover:text-amber-500 transition flex items-center">
                Packages
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div class="mega-menu absolute left-0 top-full bg-black border border-neutral-800 shadow-2xl w-64">
                <div class="p-6 space-y-3">
                  <a href="Kanha-Tour-Package.php"
                    class="block text-white hover:text-amber-500 transition py-2">Kanha Tour Package</a>
                  <a href="Kanha-Safari-Tour-Package.php"
                    class="block text-white hover:text-amber-500 transition py-2">Kanha Safari Tour Package</a>
                  <a href="Kanha-Kisli-Tour-Package.php"
                    class="block text-white hover:text-amber-500 transition py-2">Kanha Kisli Tour Package</a>
                  <a href="Mukki-Zone-Tour-Package.php"
                    class="block text-white hover:text-amber-500 transition py-2">Mukki Zone Tour Package</a>
                  <a href="Kanha-Tiger-Safari-Tour-Package.php"
                    class="block text-white hover:text-amber-500 transition py-2">Kanha Tiger Safari Tour Package</a>
                 
                </div>
              </div>
            </div>

            <a href="Wildmark.php" class="hover:text-amber-500 transition">Wildmark</a>
          </div>
        </div>

        <!-- Right - Book Now Button Desktop -->
        <div class="flex items-center">
          <a href="contact.php"
            class="text-sm font-light tracking-wider bg-amber-600 hover:bg-amber-700 px-6 py-2 transition whitespace-nowrap">BOOK
            NOW</a>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobileMenu" class="mobile-menu md:hidden mt-4">
        <div class="flex flex-col space-y-3 py-4">
          <a href="home.php" class="text-white hover:text-amber-500 py-2 border-b border-neutral-800">Home</a>
          <a href="How-to-Reach.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">How to
            Reach</a>
        
          <a href="about.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">About</a>
          <a href="kanha.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">Kanha</a>

          <!-- Packages Dropdown -->
          <div class="border-b border-neutral-800">
            <button id="mobilePackagesBtn"
              class="w-full text-left text-white hover:text-amber-500 py-2 flex justify-between items-center">
              <span>Packages</span>
              <svg id="packagesArrow" class="w-5 h-5 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            <!-- Dropdown Content -->
            <div id="mobilePackagesDropdown"
              class="mobile-packages-dropdown overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
              <div class="flex flex-col pl-4 space-y-2 pb-3 pt-2">
                <a href="Kanha-Tour-Package.php"
                  class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                  Kanha Tour Package
                </a>
                <a href="Kanha-Safari-Tour-Package.php"
                  class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                  Kanha Safari Tour Package
                </a>
                <a href="Kanha-Kisli-Tour-Package.php"
                  class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                  Kanha Kisli Tour Package
                </a>
                <a href="Mukki-Zone-Tour-Package.php"
                  class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                  Mukki Zone Tour Package
                </a>
                <a href="Kanha-Tiger-Safari-Tour-Package.php"
                  class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                  Kanha Tiger Safari Tour Package
                </a>
              </div>
            </div>
          </div>

          <a href="Wildmark.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">Wildmark</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Spacer for fixed nav -->
  <div class="h-[60px] md:h-[80px]"></div>

  <!-- Hero Banner -->
  <header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
    style="background: url('images/card1.webp') center/cover no-repeat">
    <div class="absolute inset-0 to-transparent"></div>
  </header>

  <!-- Hero Text Section -->
  <section class="py-8 md:py-12 bg-black">
    <div class="max-w-7xl mx-auto text-center px-4">
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1">
          <i class="fas fa-star text-yellow-400 text-xs"></i>
          <i class="fas fa-star text-yellow-400 text-xs"></i>
          <i class="fas fa-star text-yellow-400 text-xs"></i>
          <i class="fas fa-star text-yellow-400 text-xs"></i>
          <i class="fas fa-star text-yellow-400 text-xs"></i>
        </div>
        <span class="text-xs font-semibold">(4.8/5)</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-clock text-yellow-400 text-xs"></i>
        </div>
        <span class="text-xs font-semibold">1 Night / 2 Days</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-paw text-yellow-400 text-xs"></i>
        </div>
        <span class="text-xs font-semibold">Safaris: 1</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-check text-yellow-400 text-xs"></i>
        </div>
        <span class="text-xs font-semibold">No of Persons: 2</span>
      </div>

      <h1 class="text-3xl md:text-5xl lg:text-6xl font-serif font-bold mb-4 text-amber-100">
        Kanha Holiday Tour Package
      </h1>
      <p class="text-base md:text-lg lg:text-xl font-light mb-2 max-w-7xl mx-auto leading-relaxed text-gray-300">
        Kanha National Park of Madhya Pradesh was established in 1955 and
        covers an area of about 940 square kilometers. Kanha National Park has
        several safari zones. The park is divided into four Core zones, and
        visitors can explore any of these zones depending on their preferences
        and availability.
      </p>
      <p class="text-base md:text-lg lg:text-xl font-light mb-2 max-w-7xl mx-auto leading-relaxed text-gray-300">
        Khatia gate of buffer is most popular and tiger sightings are very
        frequent. Kanha tiger reserve covers an area of about 1,009 square
        kilometers, and is divided into several ranges, including Khapa,
        Khatia, Sijhora, and Phen ranges.
      </p>
    </div>
  </section>

  <!-- Rooms Section -->
  <section id="rooms" class="py-12 md:py-16 bg-neutral-900">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
      <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-100">
          Nature-Inspired Escapes
        </h2>
        <p class="mt-3 text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
          Where Every Stay Tells a Wild Story
        </p>
      </div>

      <!-- Tabs - Sticky -->
      <div
        class="sticky top-[60px] md:top-[80px] z-40 bg-neutral-900 border-b border-neutral-800 -mx-4 md:-mx-6 px-4 md:px-6 py-4 mb-8">
        <div class="flex justify-center gap-4 md:gap-8 overflow-x-auto scrollbar-hide">
          <button class="tab-btn active" data-tab="machaan">
            Inclusions
          </button>
          <button class="tab-btn" data-tab="superdeluxe">Exclusions</button>
          <button class="tab-btn" data-tab="family">Zones</button>
        </div>
      </div>

      <!-- Tab Content -->
      <div class="grid md:grid-cols-2 gap-8 md:gap-12">
        <!-- Machaan -->
        <div class="panel" data-tab="machaan">
          <img src="images/wildmark1.JPG" class="rounded-xl w-full h-64 object-cover"
            alt="Machaan" />
        </div>
        <div class="panel" data-tab="machaan">
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-8">
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>All meals
              (Breakfast, Lunch, Hi tea and Dinner)
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Safari is
              included in the package.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Daily one
              bottle of mineral water (500ml) will be given to each guest.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>In safari
              the water bottles given will be chargeable basis.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Pick up
              and drop to and from Jabalpur is included.
            </li>
          </ul>
        </div>

        <!-- Super Deluxe -->
        <div class="panel hidden" data-tab="superdeluxe">
          <img src="images/wildmark2.jpg" class="rounded-xl w-full h-64 object-cover"
            alt="Super Deluxe" />
        </div>
        <div class="panel hidden" data-tab="superdeluxe">
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-12">
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Camera
              charges are not included.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>All extra
              food ordered is payable by the guest.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2"></i>Anything which
              is not included in the inclusions is chargeable
            </li>
          </ul>
        </div>

        <!-- Family -->
        <div class="panel hidden" data-tab="family">
          <img src="images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Family" />
        </div>
        <div class="panel hidden" data-tab="family">
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-2 text-justify">
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Kanha Zone:</strong>This is the most popular
              safari
              zone and covers a large part of the core area. It is known for
              its scenic beauty and high chances of spotting tigers,
              Barahsingha and other wildlife.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Kisli Zone:</strong>This zone is known for
              its rich
              flora and fauna, including the Barahsingha, which is the state
              animal of Madhya Pradesh. It is also a great place for
              birdwatching.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Sarhi Zone:</strong>This zone is known for
              its scenic
              beauty and is a great place for sighting of Sloth bears, wild
              dogs, leopards and birdwatching.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Itinerary -->
  <section id="itinerary" class="bg-black py-12 md:py-16">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
      <h2 class="text-2xl md:text-3xl font-serif mb-8">
        Day – Wise Itinerary
      </h2>
      <div class="space-y-10">
        <!-- Day 1 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 flex gap-3">
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/home6.webp" alt="Day 1" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/beded1.webp" alt="Day 2" />
          </div>
          <div class="md:col-span-6">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 1</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Arrival
                at Jabalpur Airport / Jabalpur Railway Station and transfers
                to Kanha Wildmark Resort.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Afternoon you can relax and enjoy the resort
                amenities.
              </li>
            </ul>
          </div>
        </div>

        <!-- Day 2 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 md:order-2">
            <img class="w-full h-32 md:h-40 object-cover rounded-lg" src="images/wildmark4.JPG"
              alt="Day 2" />
          </div>
          <div class="md:col-span-6 md:order-1">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 2</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Morning
                Safari in Kanha, Kisli or Sarhi Core/ Khatiya buffer zone
                followed by check out formalities.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Terms -->
  <section id="experiencesA" class="py-6 md:pb-12 bg-neutral-900">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
      <!-- Tabs -->
      <div class="sticky z-40 bg-neutral-900 border-b border-neutral-800 -mx-4 md:-mx-6 px-4 md:px-6 py-4 mb-4">
        <div class="flex justify-center gap-4 md:gap-4">
          <button class="tab-btn-a active" data-tab-a="curated">
            Terms & Conditions
          </button>
          <button class="tab-btn-a" data-tab-a="dining">
            Refund policies
          </button>
        </div>
      </div>
      <!-- Content -->
      <div>
        <div class="experience-panel-a" data-tab-a="curated">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <img src="images/wildmark5.JPG" class="rounded-xl w-full h-64 object-cover" alt="Payment" />
            <div>
              <h3 class="text-2xl font-serif font-bold text-amber-100 mb-4">
                Terms & Conditions
              </h3>
              <ul class="space-y-2 text-gray-300 text-sm">
                <li class="mb-2">
                  Safari rates are considered as per weekends. If guest is
                  travelling on weekdays there will be marginal discount on
                  pricing.
                </li>
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>100%
                  Advance for booking of the trip and package.
                </li>
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>Check In
                  time: 1.00 PM. Check Out time: 11.30 AM
                </li>
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>No loud
                  music is allowed in the property as it will disturb the
                  Wildlife around the property
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="experience-panel-a hidden" data-tab-a="dining">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <img src="images/wildmark7.JPG" class="rounded-xl w-full h-64 object-cover" alt="Cancellation" />
            <div>
              <h3 class="text-2xl font-serif font-bold text-amber-100 mb-4">
                Refund policies:
              </h3>
              <ul class="space-y-2 text-gray-300 text-sm">
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>No refund
                  in Safari booking as this is a package booking.
                </li>
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>50% Refund
                  on accommodation if cancelled 30 days before the trip.
                </li>
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>25% Refund
                  on accommodation if cancelled 15 days before the trip.
                </li>
                <li>
                  <i class="fa-solid fa-check icon-check mr-2"></i>Zero Refund
                  on accommodation if cancelled within 15 days before the
                  trip.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recommended Packages Carousel -->
  <section id="recommended" class="py-12 md:py-16 bg-black">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-100">
          Recommended Packages
        </h2>
        <p class="mt-3 text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
          Explore More Wildlife Adventures
        </p>
      </div>

      <!-- Swiper Container -->
      <div class="swiper packageSwiper relative">
        <div class="swiper-wrapper">
          <!-- Package Card 1 -->
          <div class="swiper-slide">
            <div
              class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
              <div class="relative overflow-hidden h-56">
                <img src="images/tour1.png"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                  alt="Kanha Package" />
              </div>
              <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                  <div class="flex gap-1">
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                  </div>
                  <span class="text-xs text-gray-400">(4.9/5)</span>
                </div>
                <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">
                  Kanha Safari Tour Package
                </h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                  Kanha National Park of Madhya Pradesh was established in
                  1955 and covers...
                </p>

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>2N/3D</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-paw"></i>
                    <span>2 Safaris</span>
                  </div>
                  <a href="Kanha-Safari-Tour-Package.php"
                    class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">
                    View Details
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Package Card 2 -->
          <div class="swiper-slide">
            <div
              class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
              <div class="relative overflow-hidden h-56">
                <img src="images/tour2.png"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                  alt="Kanha Package" />
              </div>
              <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                  <div class="flex gap-1">
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                  </div>
                  <span class="text-xs text-gray-400">(4.9/5)</span>
                </div>
                <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">
                  Kanha Kisli Tour Package
                </h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                  Kanha Kisli tour Package – Kanha National Park of Madhya
                  Pradesh...
                </p>

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>2N/3D</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-paw"></i>
                    <span>2 Safaris</span>
                  </div>
                  <a href="Kanha-Kisli-Tour-Package.php"
                    class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">
                    View Details
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Package Card 3 -->
          <div class="swiper-slide">
            <div
              class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
              <div class="relative overflow-hidden h-56">
                <img src="images/tour3.png"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                  alt="Kanha Package" />
              </div>
              <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                  <div class="flex gap-1">
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                  </div>
                  <span class="text-xs text-gray-400">(4.9/5)</span>
                </div>
                <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">
                  Mukki Zone Tour Package
                </h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                  Kanha National Park of Madhya Pradesh was established in
                  1955 and covers...
                </p>

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>2N/3D</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-paw"></i>
                    <span>2 Safaris</span>
                  </div>
                  <a href="Mukki-Zone-Tour-Package.php"
                    class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">
                    View Details
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Package Card 4 -->
          <div class="swiper-slide">
            <div
              class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
              <div class="relative overflow-hidden h-56">
                <img src="images/tour4.png"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                  alt="Kanha Package" />
              </div>
              <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                  <div class="flex gap-1">
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                  </div>
                  <span class="text-xs text-gray-400">(4.9/5)</span>
                </div>
                <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">
                  Kanha Safari Tour Package
                </h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                  Kanha National Park of Madhya Pradesh was established in
                  1955 and covers...
                </p>

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>3N/4D</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-paw"></i>
                    <span>6 Safaris</span>
                  </div>
                  <a href="Kanha-Tiger-Safari-Tour-Package.php"
                    class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">
                    View Details
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- Enquiry Form -->
  <section id="enquire" class="bg-black py-12 md:py-16">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
      <h2 class="text-2xl md:text-3xl font-serif mb-6">Enquire Now</h2>
      <form class="space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm text-gray-400 mb-2">Full Name</label>
            <input type="text"
              class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm"
              required />
          </div>
          <div>
            <label class="block text-sm text-gray-400 mb-2">Email</label>
            <input type="email"
              class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm"
              required />
          </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm text-gray-400 mb-2">Phone</label>
            <input type="tel"
              class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
          </div>
          <div>
            <label class="block text-sm text-gray-400 mb-2">Guests</label>
            <input type="number"
              class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
          </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm text-gray-400 mb-2">Check-in</label>
            <input type="date"
              class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
          </div>
          <div>
            <label class="block text-sm text-gray-400 mb-2">Check-out</label>
            <input type="date"
              class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
          </div>
        </div>
        <div>
          <label class="block text-sm text-gray-400 mb-2">Special Requests</label>
          <textarea rows="4"
            class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm"></textarea>
        </div>
        <div class="text-right">
          <button type="submit" class="bg-amber-600 hover:bg-amber-700 px-8 py-3 text-sm w-full md:w-auto">
            Submit
          </button>
        </div>
      </form>
    </div>
  </section>
  <section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
      <!-- Header -->
      <div class="text-center mb-10 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
          EXCELLENCE • RECOGNITION • TRUST
        </p>
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in"
          data-aos-duration="1000">
          Awards and Recognitions
        </h2>
        <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up"
          data-aos-delay="200">
          Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
        </p>
      </div>

      <!-- Awards Grid -->
      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">

        <!-- Award Card 1 - 2020 -->
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials1.png  " alt="TripAdvisor Travellers' Choice Award 2020"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>

        <!-- Award Card 2 - 2021 -->
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>

        <!-- Award Card 3 - 2022 -->
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>

        <!-- Award Card 4 - 2025 (Green Background) -->
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"  style="background-color: #39DCA1;border-radius: 9px;">
          <div
            class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
              class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>

      </div>

    </div>
  </section>
<!-- FAQs Section - Kanha Holiday Tour Package -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        PACKAGE GUIDE
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Package FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about the Kanha Holiday Tour Package
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is included in the Kanha Holiday Tour Package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              This 1 Night / 2 Days package includes:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>All meals - Breakfast, Lunch, Hi-tea, and Dinner</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>One jungle safari in Kanha, Kisli, or Sarhi Core/Khatiya buffer zone</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Daily one bottle of mineral water (500ml) per guest</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Pick-up and drop from/to Jabalpur Airport or Railway Station</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Comfortable accommodation at Wildmark Resort</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How many safaris are included in this package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              This package includes <strong>one morning safari</strong> on Day 2 in either Kanha, Kisli, or Sarhi Core zone, or the Khatiya buffer zone. The safari starts early morning (around 5:30-6:00 AM) and lasts approximately 3-4 hours, giving you the best chance to spot tigers, Barahsingha, and other wildlife in their natural habitat.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are the check-in and check-out timings?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Check-in Time:</strong> 1:00 PM on Day 1</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Check-out Time:</strong> 11:30 AM on Day 2 (after morning safari)</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Early check-in or late check-out may be available on request, subject to room availability.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the cancellation and refund policy for this package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our cancellation policy is as follows:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safari Booking:</strong> No refund on safari booking as this is a package booking</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>30+ Days Before:</strong> 50% refund on accommodation charges</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>15-30 Days Before:</strong> 25% refund on accommodation charges</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Within 15 Days:</strong> Zero refund on accommodation</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Which safari zones can I explore with this package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              You can explore any one of these zones during your safari:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Kanha Zone:</strong> Known for scenic beauty and high tiger sighting chances, including the famous Tigress Neelam and Barahsingha</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Kisli Zone:</strong> Rich flora and fauna, excellent for Barahsingha (state animal of MP) and birdwatching</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Sarhi Zone:</strong> Known for scenic beauty, sloth bear sightings, wild dogs, leopards, and birdwatching</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Khatiya Buffer Zone:</strong> Most popular for frequent tiger sightings</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Zone allocation is subject to forest department availability at the time of booking.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What additional charges should I be aware of?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Items not included in the package and charged separately:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Camera Charges:</strong> Forest department fees for cameras (still/video)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safari Water Bottles:</strong> Additional water bottles in safari vehicle</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Extra Food/Beverages:</strong> Any food or drinks ordered beyond the meal plan</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Personal Expenses:</strong> Laundry, telephone calls, tips, etc.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How much advance payment is required to book this package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              <strong>100% advance payment</strong> is required for booking this package. This is because safari permits need to be booked in advance with the forest department, and they require full payment upfront. Once you confirm your booking and make the payment, we will immediately process your safari permits and accommodation reservation.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is this package suitable for families with children?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Yes! This package is perfect for families:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Children above 5 years are allowed in safaris</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Resort amenities are family-friendly with spacious rooms</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Short 2-day duration is ideal for introducing kids to wildlife</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span>Relaxed afternoon on Day 1 for rest after travel</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Note:</strong> Please inform us if traveling with children so we can make appropriate arrangements.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the best time to book this package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Kanha National Park is open from <strong>October to June</strong>. The best times are:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>November to February (Winter):</strong> Pleasant weather, excellent for safaris, high tiger sighting probability</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>March to June (Summer):</strong> Best for tiger sightings as animals gather near water sources</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>October to November (Post-Monsoon):</strong> Lush greenery, good for photography</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Booking Tip:</strong> Book at least 30-45 days in advance, especially for peak season (December-March) and weekends.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Can I extend my stay or add more safaris to this package?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Absolutely! You can customize this package:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Add Extra Nights:</strong> Extend your stay at Wildmark Resort</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Add More Safaris:</strong> Include evening safari on Day 1 or additional morning/evening safaris</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Explore Different Zones:</strong> Book safaris in multiple zones</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Upgrade to Longer Packages:</strong> Check our 2N/3D or 3N/4D packages</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Contact us at <strong>+91 9405529731</strong> or <strong>+91 7719806444</strong> for customized package pricing and availability.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Footer -->
  <footer class="bg-black py-12 border-t border-neutral-800">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        <!-- About -->
        <div>
          <!-- Center Logo Desktop -->
          <a href="home.php" class="flex items-center">
            <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo"
              class="h-12 md:h-16 lg:h-20 w-auto object-contain" />
          </a>
          <p class="text-gray-400 text-sm mb-4">
            Unforgettable Wildlife Adventure Await at Kanha Jungle Safari. See
            tigers, deer, leopards & more on a personalized jungle safari.
            Visit & book online.
          </p>
          <div class="flex gap-3">
            <a href="#" class="text-gray-400 hover:text-amber-500 transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-amber-500 transition">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-amber-500 transition">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">
            Quick Links
          </h4>
          <ul class="space-y-2 text-sm">
            <li>
              <a href="home.php" class="text-gray-400 hover:text-amber-500 transition">Home</a>
            </li>
           
            <li>
              <a href="Wildmark.php" class="text-gray-400 hover:text-amber-500 transition">Wildmark</a>
            </li>
            <li>
              <a href="How-to-Reach.php" class="text-gray-400 hover:text-amber-500 transition">How to Reach</a>
            </li>
            <li>
              <a href="gallery.php" class="text-gray-400 hover:text-amber-500 transition">Gallery</a>
            </li>
            <li>
              <a href="contact.php" class="text-gray-400 hover:text-amber-500 transition">Contact Us</a>
            </li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">
            Help Center
          </h4>
          <ul class="space-y-2 text-sm">
            <li>
              <a href="Privacy-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Privacy Policy
              </a>
            </li>
            <li>
              <a href="Terms-and-Conditions.php" class="text-gray-400 hover:text-amber-500 transition">
                Terms and Conditions</a>
            </li>
            <li>
              <a href="Cancellation-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Cancellation
                Policy</a>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">
            Contact Info
          </h4>
          <ul class="space-y-3 text-sm text-gray-400">
            <li class="flex items-start gap-2">
              <i class="fa-solid fa-location-dot text-amber-500 mt-1"></i>
              <span>B.No. 8, Rajlaxmi Apartment Near Bhende Layout, Pannase
                Layout, Nagpur – 440022.</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-envelope text-amber-500"></i>
              <a href="mailto:kanhawildmark@gmail.com"
                class="text-gray-400 hover:text-amber-500 transition">kanhawildmark@gmail.com</a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-amber-500"></i>
              <a href="tel:9405529731" class="text-gray-400 hover:text-amber-500 transition">+91 9405529731</a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-amber-500"></i>
              <a href="tel:7719806444" class="text-gray-400 hover:text-amber-500 transition">+91 7719806444</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="border-t border-neutral-800 pt-6 text-center">
        <p class="text-gray-500 text-xs">
          © 2025 Wildmark Resort Kanha. All Rights Reserved.
        </p>
      </div>
    </div>
  </footer>
  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/9405529731" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>

  <!-- AOS & Scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // ===================================
    // Initialize AOS
    // ===================================
    AOS.init({
      duration: 800,
      once: true,
    });

    // ===================================
    // Mobile Menu Toggle
    // ===================================
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        mobileMenu.classList.toggle("active");
      });
    }

    // ===================================
    // Mobile Packages Dropdown Toggle
    // ===================================
    const mobilePackagesBtn = document.getElementById("mobilePackagesBtn");
    const mobilePackagesDropdown = document.getElementById(
      "mobilePackagesDropdown"
    );
    const packagesArrow = document.getElementById("packagesArrow");

    if (mobilePackagesBtn && mobilePackagesDropdown) {
      mobilePackagesBtn.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();

        // Toggle dropdown
        mobilePackagesDropdown.classList.toggle("active");

        // Rotate arrow
        if (mobilePackagesDropdown.classList.contains("active")) {
          packagesArrow.style.transform = "rotate(180deg)";
        } else {
          packagesArrow.style.transform = "rotate(0deg)";
        }
      });
    }

    // ===================================
    // Close mobile menu when clicking outside
    // ===================================
    document.addEventListener("click", (e) => {
      if (mobileMenu && mobileMenuBtn) {
        if (
          !mobileMenu.contains(e.target) &&
          !mobileMenuBtn.contains(e.target)
        ) {
          mobileMenu.classList.remove("active");

          // Also close packages dropdown
          if (mobilePackagesDropdown) {
            mobilePackagesDropdown.classList.remove("active");
            if (packagesArrow) {
              packagesArrow.style.transform = "rotate(0deg)";
            }
          }
        }
      }
    });

    // ===================================
    // Close menu when clicking on a package link
    // ===================================
    const packageLinks = document.querySelectorAll(
      "#mobilePackagesDropdown a"
    );
    packageLinks.forEach((link) => {
      link.addEventListener("click", () => {
        if (mobileMenu) {
          mobileMenu.classList.remove("active");
        }
        if (mobilePackagesDropdown) {
          mobilePackagesDropdown.classList.remove("active");
        }
        if (packagesArrow) {
          packagesArrow.style.transform = "rotate(0deg)";
        }
      });
    });

    // ===================================
    // Room Tabs (Inclusions/Exclusions/Zones)
    // ===================================
    const roomTabs = document.querySelectorAll("#rooms .tab-btn");
    const roomPanels = document.querySelectorAll("#rooms .panel");

    roomTabs.forEach((btn) => {
      btn.addEventListener("click", () => {
        const tab = btn.dataset.tab;
        roomTabs.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        roomPanels.forEach((p) => {
          p.classList.toggle("hidden", p.dataset.tab !== tab);
        });
      });
    });

    // ===================================
    // Experience Tabs (Terms/Refund Policy)
    // ===================================
    const expTabs = document.querySelectorAll("#experiencesA .tab-btn-a");
    const expPanels = document.querySelectorAll(
      "#experiencesA .experience-panel-a"
    );

    expTabs.forEach((btn) => {
      btn.addEventListener("click", () => {
        const tab = btn.dataset.tabA;
        expTabs.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        expPanels.forEach((p) => {
          p.classList.toggle("hidden", p.dataset.tabA !== tab);
        });
      });
    });

    // ===================================
    // Initialize Package Carousel with Auto-Rotate
    // ===================================
    if (document.querySelector(".packageSwiper")) {
      const packageSwiper = new Swiper(".packageSwiper", {
        // Show 3 slides at once on desktop
        slidesPerView: 1,
        spaceBetween: 20,

        // Enable loop for continuous rotation
        loop: true,
        loopedSlides: 6, // Total number of slides

        // Auto-rotate configuration
        autoplay: {
          delay: 3000, // 3 seconds per slide
          disableOnInteraction: false, // Continue after user interaction
          pauseOnMouseEnter: true, // Pause when hovering
        },

        // Smooth transition speed
        speed: 800,

        // Pagination dots
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // Responsive breakpoints
        breakpoints: {
          // Mobile: 1 card
          320: {
            slidesPerView: 1,
            spaceBetween: 15,
          },
          // Tablet: 2 cards
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          // Desktop: 3 cards
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    }
  </script>
  <!-- FAQ JavaScript -->
<script>
  // FAQ Accordion Functionality
  document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      const icon = item.querySelector('.faq-icon');
      
      question.addEventListener('click', () => {
        const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
        
        // Close all other FAQs
        document.querySelectorAll('.faq-answer').forEach(ans => {
          ans.style.maxHeight = '0px';
        });
        document.querySelectorAll('.faq-icon').forEach(ic => {
          ic.style.transform = 'rotate(0deg)';
        });
        
        // Toggle current FAQ
        if (!isOpen) {
          answer.style.maxHeight = answer.scrollHeight + 'px';
          icon.style.transform = 'rotate(180deg)';
        }
      });
    });
  });
</script>
</body>

</html>