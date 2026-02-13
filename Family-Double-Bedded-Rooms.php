<?php 
// Set page-specific title
$pageTitle = "Family Double Bedded Rooms - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>

    /* Feature Cards with Icons */
    .feature-card {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 1rem;
      padding: 2rem 1.5rem;
      text-align: left;
      height: 100%;
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      border-color: rgba(245, 158, 11, 0.3);
      box-shadow: 0 10px 30px rgba(245, 158, 11, 0.2);
    }

    .feature-card .icon-box {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
    }

    .feature-card .icon-box i {
      font-size: 1.75rem;
      color: #2d5a47;
    }

    /* Gallery Grid */
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover {
      transform: scale(1.02);
    }

    .gallery-item img {
      transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.1);
    }

    /* Amenities List Styling */
    .amenity-item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .amenity-item i {
      color: #f59e0b;
      font-size: 1.25rem;
      margin-top: 0.125rem;
      flex-shrink: 0;
    }

    /* Tabs for different sections */
    .tab-button {
      position: relative;
      padding: 1rem 1.5rem;
      font-weight: 600;
      transition: all 0.3s ease;
      border-bottom: 3px solid transparent;
    }

    .tab-button.active {
      color: #f59e0b;
      border-bottom-color: #f59e0b;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }
  </style>



  <!-- Hero Section -->
  <section class="relative h-[60vh] md:h-[70vh] flex items-center justify-center overflow-hidden pt-16" data-aos="fade">
    <div class="absolute inset-0">
      <img src="image/aDJI_0168.webp" alt="Family Double Bedded Room"
        class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
    </div>

    <div class="relative z-10 text-center px-4 md:px-6 max-w-4xl mx-auto">
      <p class="text-amber-500 text-xs md:text-sm tracking-widest mb-4 font-light" data-aos="fade-down"
        data-aos-delay="200">
        SPACIOUS FAMILY ACCOMMODATION
      </p>
      <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-light mb-6 tracking-wide" data-aos="fade-up"
        data-aos-delay="400">
        Family Double Bedded Rooms
      </h1>
      <h2 class="text-xl md:text-2xl text-amber-400 font-light mb-8" data-aos="fade-up" data-aos-delay="600">
        Perfect for Families & Small Groups
      </h2>
    </div>
  </section>

  <!-- Room Description Section -->
  <section class="py-12 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
      <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center">
        <!-- Left - Content -->
        <div data-aos="fade-right" data-aos-duration="1000">
          <p class="text-amber-500 text-xs tracking-widest mb-4 font-light">
            FAMILY RETREAT
          </p>
          <h2 class="text-3xl md:text-4xl font-serif mb-6 leading-tight">
            Style, Space & Functionality Combined
          </h2>
          <p class="text-sm md:text-base text-gray-300 mb-6 leading-relaxed text-justify">
            The Super Deluxe Family Room is designed to comfortably accommodate families, offering spacious living areas
            and extra sleeping options. This room features elegant decor, modern amenities, and air conditioning to
            ensure a relaxing stay. Enjoy a harmonious blend of style and functionality, perfect for memorable family
            getaways.
          </p>

          <div class="bg-neutral-800 p-6 rounded-xl mb-6">
            <h3 class="text-xl font-serif font-semibold mb-4 text-amber-400">Room Capacity</h3>
            <div class="flex items-center gap-6">
              <div class="flex items-center gap-2">
                <i class="fas fa-users text-amber-500 text-2xl"></i>
                <div>
                  <p class="text-2xl font-bold">4</p>
                  <p class="text-xs text-gray-400">Guests</p>
                </div>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-bed text-amber-500 text-2xl"></i>
                <div>
                  <p class="text-2xl font-bold">2</p>
                  <p class="text-xs text-gray-400">Beds</p>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="contact.php"
              class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 transition font-light text-center">
              Book This Room
            </a>
            <a href="#amenities"
              class="border border-white hover:bg-white hover:text-black text-white px-8 py-3 transition font-light text-center">
              View Amenities
            </a>
          </div>
        </div>

        <!-- Right - Image -->
        <div data-aos="fade-left" data-aos-duration="1000">
          <img src="images/family1.jpeg" alt="Family Room Interior"
            class="w-full h-[400px] md:h-[500px] object-cover rounded-2xl shadow-2xl" />
        </div>
      </div>
    </div>
  </section>

<section class="py-12 md:py-20 bg-black">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      
      <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">
        Room Highlights
      </h2>
      <h3 class="text-amber-500 text-base md:text-lg font-serif tracking-wide" data-aos="fade-up" data-aos-delay="100">
        Experience comfort blended with thoughtful design in our meticulously crafted Super Deluxe Family Room.
      </h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      <!-- Highlight 1 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-snowflake text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Luxurious AC Room</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Luxurious air-conditioned and comfortable room designed for your ultimate relaxation and a memorable family stay.
        </p>
      </div>

      <!-- Highlight 2 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-couch text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Cozy Sofa Seating</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          A cozy sofa set for a comfortable seating area — perfect to unwind, relax, and spend quality time with family.
        </p>
      </div>

      <!-- Highlight 3 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-leaf text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Peaceful Garden View</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Room overlooking a peaceful garden — wake up to lush greenery and soothing natural views every morning.
        </p>
      </div>

      <!-- Highlight 4 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-door-open text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Spacious Dressing Area</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Spacious dressing area with wardrobes to keep your belongings organized and your space clutter-free.
        </p>
      </div>

      <!-- Highlight 5 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-spa text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Premium Bathroom Amenities</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Modern bathroom equipped with premium amenities for a truly luxurious and refreshing experience.
        </p>
      </div>

      <!-- Highlight 6 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-tree text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Tranquil Garden-Facing Room</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Surrounded by tranquil greenery, this luxurious garden-facing room is designed to offer a relaxed, private, and rejuvenating stay.
        </p>
      </div>

      <!-- Highlight 7 -->
      <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
          <i class="fas fa-wheelchair text-2xl text-neutral-800"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Wheelchair Accessible</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          All rooms and resort surroundings are fully accessible by wheelchair for our differently & specially abled guests.
        </p>
      </div>
    </div>
  </div>
</section>
  <!-- Activities, Amenities & Features Section with Tabs -->
  <section id="amenities" class="py-12 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          COMPLETE EXPERIENCE
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-8" data-aos="zoom-in">
          What We Offer
        </h2>
      </div>

      <!-- Tabs Navigation -->
      <div class="flex justify-center border-b border-neutral-800 mb-12 overflow-x-auto" data-aos="fade-up">
        <button class="tab-button active text-sm md:text-base whitespace-nowrap" data-tab="activities">
          Activities at Resort
        </button>
        <button class="tab-button text-sm md:text-base whitespace-nowrap" data-tab="amenitiesTab">
          Room Amenities
        </button>
      </div>

      <!-- Tab Content -->
      <div>
        <!-- Activities Tab -->
        <div class="tab-content active" id="activities">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="amenity-item" data-aos="fade-up" data-aos-delay="50">
              <i class="fa-solid fa-binoculars"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Jungle Safaris</h4>
                <p class="text-sm text-gray-400">Guided jungle safaris with night drive options</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="100">
              <i class="fa-solid fa-dove"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Birdwatching & Nature Walks</h4>
                <p class="text-sm text-gray-400">Early morning birdwatching tours with naturalists</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="150">
              <i class="fa-solid fa-fire"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Bonfire Evenings</h4>
                <p class="text-sm text-gray-400">Private dining with bonfire under the stars</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="200">
              <i class="fa-solid fa-utensils"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Bush-Style Outdoor Meals</h4>
                <p class="text-sm text-gray-400">Authentic outdoor dining experience in nature</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="250">
              <i class="fa-solid fa-table-tennis-paddle-ball"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Indoor & Outdoor Games</h4>
                <p class="text-sm text-gray-400">Sports facilities and recreational activities</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-person-swimming"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Swimming Pool</h4>
                <p class="text-sm text-gray-400">Kids' play area and swimming pool facilities</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="350">
              <i class="fa-solid fa-map-location-dot"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Nearby Attractions</h4>
                <p class="text-sm text-gray-400">Guided visits to local villages and attractions</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Amenities Tab -->
        <div class="tab-content" id="amenitiesTab">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="amenity-item" data-aos="fade-up" data-aos-delay="50">
              <i class="fa-solid fa-bed"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Spacious AC Rooms</h4>
                <p class="text-sm text-gray-400">Comfortable rooms with private sit-outs</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="100">
              <i class="fa-solid fa-wifi"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Wi-Fi Available</h4>
                <p class="text-sm text-gray-400">Stay connected with high-speed internet</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="150">
              <i class="fa-solid fa-bath"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Modern Washrooms</h4>
                <p class="text-sm text-gray-400">Clean, well-maintained bathrooms with hot water</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="200">
              <i class="fa-solid fa-wine-bottle"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Mini-Bar Available</h4>
                <p class="text-sm text-gray-400">Select rooms equipped with mini-bar facilities</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="250">
              <i class="fa-solid fa-user-doctor"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Doctor on Call</h4>
                <p class="text-sm text-gray-400">24/7 medical assistance available</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-wheelchair"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Accessible & Pet-Friendly</h4>
                <p class="text-sm text-gray-400">Wheelchair-accessible and pet-friendly rooms</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="350">
              <i class="fa-solid fa-bowl-food"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Multi-Cuisine Restaurant</h4>
                <p class="text-sm text-gray-400">In-house restaurant with diverse menu options</p>
              </div>
            </div>

            <div class="amenity-item" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-route"></i>
              <div>
                <h4 class="font-semibold text-white mb-1">Safari Assistance</h4>
                <p class="text-sm text-gray-400">Safari booking and pick-up/drop services</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Perfect For Section -->
  <section class="py-12 md:py-20 bg-black">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          IDEAL ACCOMMODATION
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Perfect For Every Type of Traveler
        </h2>
        <p class="text-gray-300 max-w-3xl mx-auto text-sm md:text-base leading-relaxed" data-aos="fade-up">
          Our Family Double Bedded Rooms cater to diverse needs, ensuring comfort and memorable experiences for all
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Family Vacations -->
        <div class="bg-gradient-to-br from-neutral-900 to-neutral-800 p-8 rounded-2xl border border-neutral-700 hover:border-amber-500/50 transition group" data-aos="fade-up" data-aos-delay="100">
          <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-amber-400 to-orange-500 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition">
            <i class="fas fa-users text-white text-3xl"></i>
          </div>
          <h3 class="text-xl font-serif font-bold text-center mb-4 text-white">Family Vacations</h3>
          <p class="text-gray-300 text-sm text-center leading-relaxed mb-4">
            Create lasting memories with your loved ones in spacious comfort. Perfect for families with 2-4 members seeking quality time together.
          </p>
          <ul class="space-y-2 text-gray-400 text-xs">
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Kids-friendly amenities</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Family dining options</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Extra bedding available</span>
            </li>
          </ul>
        </div>

        <!-- Friends Group -->
        <div class="bg-gradient-to-br from-neutral-900 to-neutral-800 p-8 rounded-2xl border border-neutral-700 hover:border-amber-500/50 transition group" data-aos="fade-up" data-aos-delay="200">
          <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition">
            <i class="fas fa-people-group text-white text-3xl"></i>
          </div>
          <h3 class="text-xl font-serif font-bold text-center mb-4 text-white">Friends Getaway</h3>
          <p class="text-gray-300 text-sm text-center leading-relaxed mb-4">
            Share adventures and laughter with your best friends in a comfortable setting designed for bonding and fun.
          </p>
          <ul class="space-y-2 text-gray-400 text-xs">
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Flexible sleeping arrangements</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Group activity coordination</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Bonfire & entertainment</span>
            </li>
          </ul>
        </div>

        <!-- Multi-Generation Travel -->
        <div class="bg-gradient-to-br from-neutral-900 to-neutral-800 p-8 rounded-2xl border border-neutral-700 hover:border-amber-500/50 transition group" data-aos="fade-up" data-aos-delay="300">
          <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-amber-600 to-orange-700 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition">
            <i class="fas fa-house-user text-white text-3xl"></i>
          </div>
          <h3 class="text-xl font-serif font-bold text-center mb-4 text-white">Multi-Gen Families</h3>
          <p class="text-gray-300 text-sm text-center leading-relaxed mb-4">
            Ideal for grandparents traveling with children and grandchildren, offering comfortable space for everyone.
          </p>
          <ul class="space-y-2 text-gray-400 text-xs">
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Accessible room features</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Ground floor options</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Doctor on call facility</span>
            </li>
          </ul>
        </div>

        <!-- Corporate Retreats -->
        <div class="bg-gradient-to-br from-neutral-900 to-neutral-800 p-8 rounded-2xl border border-neutral-700 hover:border-amber-500/50 transition group" data-aos="fade-up" data-aos-delay="400">
          <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-amber-700 to-orange-800 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition">
            <i class="fas fa-briefcase text-white text-3xl"></i>
          </div>
          <h3 class="text-xl font-serif font-bold text-center mb-4 text-white">Team Building</h3>
          <p class="text-gray-300 text-sm text-center leading-relaxed mb-4">
            Perfect for corporate teams seeking a refreshing break with team-building activities in nature's lap.
          </p>
          <ul class="space-y-2 text-gray-400 text-xs">
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Meeting space available</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Wi-Fi connectivity</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-check-circle text-amber-500"></i>
              <span>Group packages</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Complete Day Experience Section -->
  <section class="py-12 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          YOUR PERFECT DAY
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          A Day at Wildmark Resort
        </h2>
        <p class="text-gray-300 max-w-3xl mx-auto text-sm md:text-base leading-relaxed" data-aos="fade-up">
          Experience the perfect blend of adventure, relaxation, and wilderness exploration
        </p>
      </div>

      <!-- Timeline -->
      <div class="relative">
        <!-- Vertical Line (hidden on mobile) -->
        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-amber-500 via-amber-600 to-amber-700"></div>

        <!-- Timeline Items -->
        <div class="space-y-12">
          <!-- 5:30 AM - Morning Safari -->
          <div class="relative" data-aos="fade-right">
            <div class="md:flex items-center">
              <div class="md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                <div class="inline-block bg-neutral-800 px-6 py-8 rounded-2xl shadow-xl border border-neutral-700 hover:border-amber-500/50 transition">
                  <div class="flex items-center gap-4 mb-4 md:flex-row-reverse">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center shadow-lg">
                      <i class="fas fa-sunrise text-white text-2xl"></i>
                    </div>
                    <div>
                      <p class="text-2xl font-bold text-amber-400">5:30 AM</p>
                      <p class="text-sm text-gray-400">Early Start</p>
                    </div>
                  </div>
                  <h4 class="text-xl font-serif font-bold text-white mb-3">Morning Safari Adventure</h4>
                  <p class="text-gray-300 text-sm leading-relaxed">
                    Wake up to nature's alarm clock. Enjoy complimentary tea/coffee before heading out for the thrilling morning safari. The best time to spot tigers and other wildlife as they're most active during dawn.
                  </p>
                </div>
              </div>
              <div class="hidden md:block w-8 h-8 bg-amber-500 rounded-full border-4 border-neutral-900 absolute left-1/2 transform -translate-x-1/2 shadow-lg"></div>
              <div class="md:w-1/2"></div>
            </div>
          </div>

          <!-- 9:00 AM - Breakfast -->
          <div class="relative" data-aos="fade-left">
            <div class="md:flex items-center md:flex-row-reverse">
              <div class="md:w-1/2 md:pl-12 mb-4 md:mb-0">
                <div class="inline-block bg-neutral-800 px-6 py-8 rounded-2xl shadow-xl border border-neutral-700 hover:border-amber-500/50 transition">
                  <div class="flex items-center gap-4 mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center shadow-lg">
                      <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <div>
                      <p class="text-2xl font-bold text-amber-400">9:00 AM</p>
                      <p class="text-sm text-gray-400">Breakfast Time</p>
                    </div>
                  </div>
                  <h4 class="text-xl font-serif font-bold text-white mb-3">Multi-Cuisine Breakfast</h4>
                  <p class="text-gray-300 text-sm leading-relaxed">
                    Return from safari to a hearty breakfast spread. Choose from Indian, Continental, and local specialties. Share your safari stories with fellow travelers in our dining area.
                  </p>
                </div>
              </div>
              <div class="hidden md:block w-8 h-8 bg-amber-500 rounded-full border-4 border-neutral-900 absolute left-1/2 transform -translate-x-1/2 shadow-lg"></div>
              <div class="md:w-1/2"></div>
            </div>
          </div>

          <!-- 11:00 AM - Relaxation -->
          <div class="relative" data-aos="fade-right">
            <div class="md:flex items-center">
              <div class="md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                <div class="inline-block bg-neutral-800 px-6 py-8 rounded-2xl shadow-xl border border-neutral-700 hover:border-amber-500/50 transition">
                  <div class="flex items-center gap-4 mb-4 md:flex-row-reverse">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-600 to-orange-700 rounded-full flex items-center justify-center shadow-lg">
                      <i class="fas fa-swimming-pool text-white text-2xl"></i>
                    </div>
                    <div>
                      <p class="text-2xl font-bold text-amber-400">11:00 AM</p>
                      <p class="text-sm text-gray-400">Leisure Time</p>
                    </div>
                  </div>
                  <h4 class="text-xl font-serif font-bold text-white mb-3">Pool & Recreation</h4>
                  <p class="text-gray-300 text-sm leading-relaxed">
                    Take a refreshing dip in our swimming pool, relax in your air-conditioned room, or explore our beautiful gardens. Perfect time for family bonding or simply unwinding.
                  </p>
                </div>
              </div>
              <div class="hidden md:block w-8 h-8 bg-amber-500 rounded-full border-4 border-neutral-900 absolute left-1/2 transform -translate-x-1/2 shadow-lg"></div>
              <div class="md:w-1/2"></div>
            </div>
          </div>

          <!-- 1:00 PM - Lunch -->
          <div class="relative" data-aos="fade-left">
            <div class="md:flex items-center md:flex-row-reverse">
              <div class="md:w-1/2 md:pl-12 mb-4 md:mb-0">
                <div class="inline-block bg-neutral-800 px-6 py-8 rounded-2xl shadow-xl border border-neutral-700 hover:border-amber-500/50 transition">
                  <div class="flex items-center gap-4 mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-700 to-orange-800 rounded-full flex items-center justify-center shadow-lg">
                      <i class="fas fa-bowl-food text-white text-2xl"></i>
                    </div>
                    <div>
                      <p class="text-2xl font-bold text-amber-400">1:00 PM</p>
                      <p class="text-sm text-gray-400">Lunch Service</p>
                    </div>
                  </div>
                  <h4 class="text-xl font-serif font-bold text-white mb-3">Delicious Lunch Spread</h4>
                  <p class="text-gray-300 text-sm leading-relaxed">
                    Savor authentic local cuisine along with international favorites. Our chefs prepare fresh, flavorful meals using locally sourced ingredients whenever possible.
                  </p>
                </div>
              </div>
              <div class="hidden md:block w-8 h-8 bg-amber-500 rounded-full border-4 border-neutral-900 absolute left-1/2 transform -translate-x-1/2 shadow-lg"></div>
              <div class="md:w-1/2"></div>
            </div>
          </div>

          <!-- 3:00 PM - Evening Safari -->
          <div class="relative" data-aos="fade-right">
            <div class="md:flex items-center">
              <div class="md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                <div class="inline-block bg-neutral-800 px-6 py-8 rounded-2xl shadow-xl border border-neutral-700 hover:border-amber-500/50 transition">
                  <div class="flex items-center gap-4 mb-4 md:flex-row-reverse">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-amber-600 rounded-full flex items-center justify-center shadow-lg">
                      <i class="fas fa-binoculars text-white text-2xl"></i>
                    </div>
                    <div>
                      <p class="text-2xl font-bold text-amber-400">3:00 PM</p>
                      <p class="text-sm text-gray-400">Safari Time</p>
                    </div>
                  </div>
                  <h4 class="text-xl font-serif font-bold text-white mb-3">Afternoon Wildlife Safari</h4>
                  <p class="text-gray-300 text-sm leading-relaxed">
                    Head out for another exciting safari session. Witness different wildlife behavior as animals prepare for the evening. Expert naturalists guide your journey through the forest.
                  </p>
                </div>
              </div>
              <div class="hidden md:block w-8 h-8 bg-amber-500 rounded-full border-4 border-neutral-900 absolute left-1/2 transform -translate-x-1/2 shadow-lg"></div>
              <div class="md:w-1/2"></div>
            </div>
          </div>

          <!-- 7:30 PM - Dinner & Entertainment -->
          <div class="relative" data-aos="fade-left">
            <div class="md:flex items-center md:flex-row-reverse">
              <div class="md:w-1/2 md:pl-12">
                <div class="inline-block bg-neutral-800 px-6 py-8 rounded-2xl shadow-xl border border-neutral-700 hover:border-amber-500/50 transition">
                  <div class="flex items-center gap-4 mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-800 to-orange-900 rounded-full flex items-center justify-center shadow-lg">
                      <i class="fas fa-fire text-white text-2xl"></i>
                    </div>
                    <div>
                      <p class="text-2xl font-bold text-amber-400">7:30 PM</p>
                      <p class="text-sm text-gray-400">Evening Activities</p>
                    </div>
                  </div>
                  <h4 class="text-xl font-serif font-bold text-white mb-3">Bonfire & Dinner</h4>
                  <p class="text-gray-300 text-sm leading-relaxed">
                    Gather around the bonfire for cultural performances and wildlife documentaries. Enjoy a sumptuous dinner under the starlit sky, ending your day on a perfect note.
                  </p>
                </div>
              </div>
              <div class="hidden md:block w-8 h-8 bg-amber-500 rounded-full border-4 border-neutral-900 absolute left-1/2 transform -translate-x-1/2 shadow-lg"></div>
              <div class="md:w-1/2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Room Gallery Section -->
  <section id="gallery" class="py-12 md:py-20 bg-black">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          VISUAL TOUR
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Room Gallery
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
          <img src="images/family2.jpeg" alt="Family Room View"
            class="w-full h-80 object-cover" />
        </div>
        <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
          <img src="images/family1.jpeg" alt="Resort Exterior"
            class="w-full h-80 object-cover" />
        </div>
        <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
          <img src="images/family4.jpg" alt="Resort Gardens"
            class="w-full h-80 object-cover" />
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-16 md:py-24 bg-gradient-to-r from-amber-900 to-amber-700">
    <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="fade-up">
        Create Unforgettable Family Memories
      </h2>
      <p class="text-lg md:text-xl mb-8 text-amber-100" data-aos="fade-up" data-aos-delay="200">
        Book your Family Double Bedded Room now and experience the perfect blend of comfort and adventure
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
        <a href="contact.php"
          class="bg-white text-amber-900 hover:bg-amber-100 px-10 py-4 transition font-semibold text-lg">
          BOOK NOW
        </a>
        <a href="tel:+919405529731"
          class="border-2 border-white hover:bg-white hover:text-amber-900 text-white px-10 py-4 transition font-semibold text-lg">
          CALL US
        </a>
      </div>
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
<!-- FAQs Section - Family Double Bedded Rooms -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light">
        COMMON QUERIES
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6">
        Family Room FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Everything you need to know about our Family Double Bedded Rooms
      </p>
    </div>

    <div class="space-y-4">

      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            How many guests can stay in a Family Double Bedded Room?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Our Family Double Bedded Rooms are designed to comfortably accommodate up to 4 guests. The room includes two spacious beds, making it ideal for families, small groups, or friends traveling together.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Are the Family Rooms air-conditioned?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, all Family Double Bedded Rooms are fully air-conditioned to ensure a comfortable stay in every season.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Do the rooms have a garden view?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, most of our Family Rooms offer a peaceful garden-facing view, allowing you to relax amidst greenery and natural surroundings.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Is extra bedding available for children or additional guests?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, extra bedding can be provided on request for children or additional guests. Please inform us at the time of booking.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Are the Family Rooms suitable for senior citizens?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Absolutely. Our resort is wheelchair accessible and offers ground-floor room options, making it comfortable for senior citizens and differently-abled guests.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Is Wi-Fi available in the Family Rooms?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, complimentary high-speed Wi-Fi is available in all rooms and public areas of the resort.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Are pets allowed in Family Double Bedded Rooms?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, we are a pet-friendly resort. Please inform us in advance if you are traveling with your pet so we can make suitable arrangements.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Is room service available?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, we provide room service for food and beverages during designated hours.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Do the rooms have attached bathrooms?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              Yes, each Family Room has a private attached bathroom with 24/7 hot water and modern amenities.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            How can I book a Family Double Bedded Room?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-gray-300">
              You can book directly through our website, by calling us, or via the contact page. Our team will assist you with availability and packages.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
  
  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/9405529731" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>

  <!-- AOS Init -->
  

  <script>
 
   

   

    

    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
      button.addEventListener('click', () => {
        const targetTab = button.getAttribute('data-tab');

        // Remove active class from all buttons and contents
        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        // Add active class to clicked button and corresponding content
        button.classList.add('active');
        document.getElementById(targetTab).classList.add('active');
      });
    });
  </script>
  <script>
  // FAQ Accordion Functionality (add only if not already present)
  document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      const icon = item.querySelector('.faq-icon');
      
      question.addEventListener('click', () => {
        const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
        
        // Close all other FAQs
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            const otherAnswer = otherItem.querySelector('.faq-answer');
            const otherIcon = otherItem.querySelector('.faq-icon');
            otherAnswer.style.maxHeight = '0';
            otherIcon.style.transform = 'rotate(0deg)';
          }
        });
        
        // Toggle current FAQ
        if (isOpen) {
          answer.style.maxHeight = '0';
          icon.style.transform = 'rotate(0deg)';
        } else {
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
