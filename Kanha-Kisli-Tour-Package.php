<?php 
// Set page-specific title
$pageTitle = "Kanha Kisli Tour Package - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

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

    /* Prevent horizontal overflow — BUT NOT on swiper section */
    .container {
      width: 100%;
      max-width: 100%;
    }

    /* FIX: Remove overflow-x:hidden from section globally — it breaks Swiper */
    /* Instead apply it only where needed */

    /* CRITICAL OVERFLOW FIXES */
    html,
    body {
      max-width: 100vw;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
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

    /* Line clamp utility */
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    /* ================================================
       SWIPER FIX — THE ROOT CAUSE OF THE BROKEN CARDS
       ================================================
       Problem: section { overflow-x: hidden } was
       clipping Swiper slides that extend outside bounds.
       
       Solution:
       1. The #recommended section must NOT have overflow hidden
       2. Wrap swiper in a clip container instead
       3. Swiper itself needs overflow: visible to render slides
    ================================================ */

    /* The section containing swiper — no overflow:hidden here */
    #recommended {
      overflow: visible;
      position: relative;
    }

    /* Clip container wraps ONLY the swiper — not the heading */
    .swiper-clip-wrap {
      overflow: hidden;
      width: 100%;
      position: relative;
    }

    /* Swiper container */
    .packageSwiper {
      width: 100%;
      padding-bottom: 60px !important;
      overflow: visible; /* let Swiper manage its own clipping */
    }

    .swiper-slide {
      height: auto;
      display: flex;
    }

    /* Card must fill full slide height */
    .swiper-slide > div {
      width: 100%;
      display: flex;
      flex-direction: column;
    }

    .swiper-slide > div > div:last-child {
      flex: 1;
    }

    /* Navigation buttons */
    .swiper-button-next,
    .swiper-button-prev {
      background: rgba(212, 165, 116, 0.2);
      backdrop-filter: blur(10px);
      width: 50px !important;
      height: 50px !important;
      border-radius: 50%;
      border: 2px solid rgba(212, 165, 116, 0.3);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 18px !important;
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

    @media (max-width: 768px) {
      .swiper-button-next,
      .swiper-button-prev {
        width: 40px !important;
        height: 40px !important;
      }

      .swiper-button-next::after,
      .swiper-button-prev::after {
        font-size: 15px !important;
      }
    }
  </style>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Spacer for fixed nav -->
  <div class="h-[60px] md:h-[80px]"></div>

  <!-- Hero Banner -->
  <header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
    style="background: url('images/home3.webp') center/cover no-repeat">
    <div class="absolute inset-0 to-transparent"></div>
  </header>

  <!-- Hero Text Section -->
  <section class="py-8 md:py-12 bg-black" style="overflow-x:hidden;">
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
        <span class="text-xs font-semibold">2 Night / 3 Days</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-paw text-yellow-400 text-xs"></i>
        </div>
        <span class="text-xs font-semibold">Safaris: 4</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-check text-yellow-400 text-xs"></i>
        </div>
        <span class="text-xs font-semibold">No of Persons: 2</span>
      </div>

      <h1 class="text-3xl md:text-5xl lg:text-6xl font-serif font-bold mb-4 text-amber-100">
        Kanha Kisli Tour Package
      </h1>
      <p class="text-base md:text-lg lg:text-xl font-light mb-2 max-w-7xl mx-auto leading-relaxed text-gray-300">
        Kanha Kisli tour Package – Kanha National Park of Madhya Pradesh was
        established in 1955 and covers an area of about 940 square kilometers.
        Kanha National Park has several safari zones. The park is divided into
        four Core zones, and visitors can explore any of these zones depending
        on their preferences and availability.
      </p>
    </div>
  </section>

  <!-- Rooms Section -->
  <section id="rooms" class="py-12 md:py-16 bg-neutral-900" style="overflow-x:hidden;">
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
          <img src="images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Machaan" />
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
          <img src="images/beded3.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Super Deluxe" />
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
          <img src="images/family2.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Family" />
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
  <section id="itinerary" class="bg-black py-12 md:py-16" style="overflow-x:hidden;">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
      <h2 class="text-2xl md:text-3xl font-serif mb-8">
        Day – Wise Itinerary
      </h2>
      <div class="space-y-10">
        <!-- Day 1 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 flex gap-3">
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark2.jpg" alt="Day 1" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark4.JPG" alt="Day 1" />
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
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Lunch
                will be served by 1 PM.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time for
                afternoon safari in Kanha Core Zone.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>After
                coming back time for Hi tea.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Dinner
                will be served by 8.30 PM
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time to
                go for bed.
              </li>
            </ul>
          </div>
        </div>

        <!-- Day 2 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 md:order-2">
            <img class="w-full h-32 md:h-40 object-cover rounded-lg" src="images/wildmark5.jpg" alt="Day 2" />
          </div>
          <div class="md:col-span-6 md:order-1">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 2</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Morning
                safari in Kanha Core Zone.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Breakfast will be served in Safari.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Come
                back relax in the pool.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Lunch
                will be served by 1 PM.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time for
                afternoon safari in Kisli Core Zone.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>After
                coming back time for Hi tea.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Dinner
                will be served by 8.30 PM
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time to
                go for bed
              </li>
            </ul>
          </div>
        </div>

        <!-- Day 3 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 flex gap-3">
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark7.JPG" alt="Day 3" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark8.jpeg" alt="Day 3" />
          </div>
          <div class="md:col-span-6">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 3</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Morning
                safari in Sarhi Core Zone.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Breakfast will be served in Safari.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time to
                say Good Bye.
              </li>
              <li>
                <i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Check
                Out by 11.30 AM.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Payment Terms -->
  <section id="experiencesA" class="py-6 md:pb-12 bg-neutral-900" style="overflow-x:hidden;">
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
            <img src="images/wildlife.jpg" class="rounded-xl w-full h-64 object-cover" alt="Payment" />
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
            <img src="images/about3.webp" class="rounded-xl w-full h-64 object-cover" alt="Cancellation" />
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
  <!-- NOTE: No overflow-x:hidden on this section — it breaks Swiper -->
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

      <!-- swiper-clip-wrap clips cards properly without breaking Swiper internals -->
      <div class="swiper-clip-wrap">
        <div class="swiper packageSwiper">
          <div class="swiper-wrapper">

            <!-- Package Card 1 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="images/tour1.png"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
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
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">
                    Kanha National Park of Madhya Pradesh was established in
                    1955 and covers...
                  </p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-clock"></i>
                      <span>2N/3D</span>
                    </div>
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-paw"></i>
                      <span>2 Safaris</span>
                    </div>
                    <a href="Kanha-Safari-Tour-Package.php"
                      class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Package Card 2 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="images/tour2.png"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
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
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">
                    Kanha National Park of Madhya Pradesh was established in
                    1955 and covers...
                  </p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-clock"></i>
                      <span>3N/4D</span>
                    </div>
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-paw"></i>
                      <span>6 Safaris</span>
                    </div>
                    <a href="Kanha-Tiger-Safari-Tour-Package.php"
                      class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Package Card 3 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="images/tour3.png"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
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
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">
                    Kanha National Park of Madhya Pradesh was established in
                    1955 and covers...
                  </p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-clock"></i>
                      <span>2N/3D</span>
                    </div>
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-paw"></i>
                      <span>2 Safaris</span>
                    </div>
                    <a href="Mukki-Zone-Tour-Package.php"
                      class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Package Card 4 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="images/tour5.png"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
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
                    Kanha Holiday Tour Package
                  </h3>
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">
                    Kanha National Park of Madhya Pradesh was established in
                    1955 and covers...
                  </p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-clock"></i>
                      <span>1N/2D</span>
                    </div>
                    <div class="flex items-center gap-1">
                      <i class="fa-solid fa-paw"></i>
                      <span>1 Safari</span>
                    </div>
                    <a href="Kanha-Holiday-Tour-Package.php"
                      class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">
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
      </div><!-- end swiper-clip-wrap -->

    </div>
  </section>

  <!-- Enquiry Form -->
  <section id="enquire" class="bg-black py-12 md:py-16" style="overflow-x:hidden;">
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

  <!-- Awards Section -->
  <section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section" style="overflow:hidden;">
    <div class="container mx-auto max-w-7xl">
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

      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1;border-radius: 9px;">
          <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
              class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
<section class="py-16 md:py-24 bg-neutral-900" style="overflow-x:hidden;">
  <div class="container mx-auto max-w-5xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        PACKAGE GUIDE
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Package FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about the Kanha Kisli Tour Package
      </p>
    </div>

    <div class="space-y-4 max-w-4xl mx-auto" data-aos="fade-up" data-aos-duration="1000">

      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What makes the Kanha Kisli Tour Package special?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              This is our most comprehensive 2 Night / 3 Days package featuring <strong>4 jungle safaris</strong> across all three major zones:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Day 1:</strong> Afternoon safari in Kanha Core Zone</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Day 2:</strong> Morning safari in Kanha + Afternoon safari in Kisli Zone</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Day 3:</strong> Morning safari in Sarhi Core Zone</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is included in this 2N/3D package?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Accommodation:</strong> 2 nights at Wildmark Resort</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Meals:</strong> All meals - Breakfast, Lunch, Hi-tea, and Dinner</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Safaris:</strong> 4 jungle safaris across three zones</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Water:</strong> Daily 500ml mineral water per guest</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Transportation:</strong> Pick-up and drop from/to Jabalpur</span></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are the unique features of each zone covered in this package?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Kanha Zone (2 safaris):</strong> Most popular, high tiger & Barahsingha sighting probability</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Kisli Zone (1 safari):</strong> Rich flora, home to state animal Barahsingha, great birdwatching</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Sarhi Zone (1 safari):</strong> Sloth bears, wild dogs, leopards, scenic landscapes</span></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the cancellation and refund policy?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Safari:</strong> No refund on safari booking</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>30+ Days Before:</strong> 50% refund on accommodation</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>15–30 Days Before:</strong> 25% refund on accommodation</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Within 15 Days:</strong> Zero refund</span></li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3"><strong>Note:</strong> 100% advance payment required for booking.</p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What wildlife can I expect to see during the safaris?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Big Cats:</strong> Royal Bengal Tiger, Leopards</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Unique Species:</strong> Barahsingha (hard-ground swamp deer)</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Other Mammals:</strong> Sloth bears, Wild dogs, Spotted deer, Sambar deer, Indian Gaur</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span><strong>Birds:</strong> 300+ species</span></li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3"><strong>Note:</strong> Wildlife sightings depend on nature and cannot be guaranteed.</p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is this package suitable for first-time visitors to Kanha?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">Absolutely! This is our most recommended package for first-time visitors because:</p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span>All three major zones (Kanha, Kisli, Sarhi) in one trip</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span>4 safaris for maximum wildlife sighting chances</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span>Balanced schedule — adventure + relaxation (pool on Day 2)</span></li>
              <li class="flex items-start gap-2"><span class="text-amber-500">•</span><span>All-inclusive — no stress about meals or transportation</span></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- AOS & Swiper Scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
  


   

    // ===================================
    // Room Tabs (Inclusions / Exclusions / Zones)
    // ===================================
    const roomTabs = document.querySelectorAll("#rooms .tab-btn");
    const roomPanels = document.querySelectorAll("#rooms .panel");

    if (roomTabs.length > 0) {
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
    }

    // ===================================
    // Experience Tabs (Terms / Refund Policy)
    // ===================================
    const expTabs = document.querySelectorAll("#experiencesA .tab-btn-a");
    const expPanels = document.querySelectorAll("#experiencesA .experience-panel-a");

    if (expTabs.length > 0) {
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
    }

    // ===================================
    // Swiper — Package Carousel
    // ===================================
    if (typeof Swiper !== 'undefined' && document.querySelector(".packageSwiper")) {
      const packageSwiper = new Swiper(".packageSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        speed: 800,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 15,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    }

    // ===================================
    // FAQ Accordion
    // ===================================
    document.addEventListener('DOMContentLoaded', function() {
      const faqItems = document.querySelectorAll('.faq-item');

      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        question.addEventListener('click', () => {
          const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

          document.querySelectorAll('.faq-answer').forEach(ans => {
            ans.style.maxHeight = '0px';
          });
          document.querySelectorAll('.faq-icon').forEach(ic => {
            ic.style.transform = 'rotate(0deg)';
          });

          if (!isOpen) {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            icon.style.transform = 'rotate(180deg)';
          }
        });
      });
    });
  </script>

<?php 
// Include footer
include 'includes/footer.php'; 
?>