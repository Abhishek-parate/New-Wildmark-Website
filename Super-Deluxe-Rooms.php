<?php 
// Set page-specific title
$pageTitle = "Super Delux Rooms- Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
    
    /* Responsive Container */
    .container {
      width: 100%;
      max-width: 100%;
      margin-left: auto;
      margin-right: auto;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    @media (min-width: 640px) {
      .container {
        max-width: 640px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 768px;
      }
    }

    @media (min-width: 1024px) {
      .container {
        max-width: 1024px;
      }
    }

    @media (min-width: 1280px) {
      .container {
        max-width: 1200px;
      }
    }

    

    /* Room Feature Cards */
    .room-feature-card {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 1rem;
      padding: 2rem 1.5rem;
      text-align: left;
      height: 100%;
      transition: all 0.3s ease;
    }

    .room-feature-card:hover {
      transform: translateY(-5px);
      border-color: rgba(245, 158, 11, 0.3);
      box-shadow: 0 10px 30px rgba(245, 158, 11, 0.2);
    }

    .room-feature-card .icon-wrapper {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 0 1.5rem 0;
      box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
    }

    .room-feature-card .icon-wrapper i {
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
  </style>


  <!-- Hero Section -->
  <section class="relative h-[60vh] md:h-[70vh] flex items-center justify-center overflow-hidden pt-16" data-aos="fade">
    <div class="absolute inset-0">
      <img src="image/WhatsApp-Image-2025-11-19-at-10.18.28-PM.webp" alt="Super Deluxe Room"
        class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
    </div>

    <div class="relative z-10 text-center px-4 md:px-6 max-w-4xl mx-auto">
      <p class="text-amber-500 text-xs md:text-sm tracking-widest mb-4 font-light" data-aos="fade-down"
        data-aos-delay="200">
        LUXURY ACCOMMODATION
      </p>
      <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-light mb-6 tracking-wide" data-aos="fade-up"
        data-aos-delay="400">
        Super Deluxe Rooms
      </h1>
      <h2 class="text-xl md:text-2xl text-amber-400 font-light mb-8" data-aos="fade-up" data-aos-delay="600">
        With Open Shower & Private Sit-Outs
      </h2>
    </div>
  </section>

  <!-- Room Description Section -->
  <section class="py-12 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
      <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center">
        <!-- Left - Image -->
        <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
          <img src="images/delux2.jpeg" alt="Super Deluxe Room Interior"
            class="w-full h-[400px] md:h-[500px] object-cover rounded-2xl shadow-2xl" />
        </div>

        <!-- Right - Content -->
        <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
          <p class="text-amber-500 text-xs tracking-widest mb-4 font-light">
            REFINED RETREAT
          </p>
          <h2 class="text-3xl md:text-4xl font-serif mb-6 leading-tight">
            A Blend of Comfort & Natural Elegance
          </h2>
          <p class="text-sm md:text-base text-gray-300 mb-6 leading-relaxed text-justify">
            The Super Deluxe Room with Private Sit-Outs offers a refined retreat blending comfort with natural
            elegance. This well-appointed room features a private outdoor seating area, plush bedding, modern
            furnishings, and air conditioning for a relaxing stay. Enjoy contemporary decor, thoughtful amenities, and
            a serene view for an unforgettable escape.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 mt-8">
            <a href="contact.php"
              class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 transition font-light text-center">
              Book This Room
            </a>
            <a href="#gallery"
              class="border border-white hover:bg-white hover:text-black text-white px-8 py-3 transition font-light text-center">
              View Gallery
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Room Highlights Section -->
  <section class="py-12 md:py-20 bg-black">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">
        Room Highlights
      </h2>
      <h3 class="text-amber-500 text-base md:text-lg font-serif tracking-wide" data-aos="fade-up" data-aos-delay="100">
  Experience Luxurious & comfort blended with thoughtful design in our meticulously crafted air-conditioned Super Deluxe Rooms.
</h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      <!-- Highlight 1 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-wrapper">
          <i class="fas fa-snowflake"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Luxurious & AC Rooms</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
  Enjoy the comfort of well-ventilated, air-conditioned rooms designed for your ultimate relaxation and luxury.
</p>
      </div>

      <!-- Highlight 2 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-wrapper">
          <i class="fas fa-temperature-low"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Mini Fridge</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Mini fridge for added convenience — keep your drinks and snacks fresh at any hour of your stay.
        </p>
      </div>

      <!-- Highlight 3 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-wrapper">
          <i class="fas fa-couch"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Cozy Lounge Seating Area</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          A cozy lounge seating area to unwind, read, or simply enjoy the peaceful ambience of your private space.
        </p>
      </div>

      <!-- Highlight 4 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-wrapper">
          <i class="fas fa-star"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Private Sit-Out</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Private sit-out overlooking the starry skies — your perfect spot for magical evenings under the open sky.
        </p>
      </div>

      <!-- Highlight 5 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-wrapper">
          <i class="fas fa-shower"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Open Shower Concept</h4>
        <p class="text-gray-300 text-sm leading-relaxed">
          Open shower concept for a refreshing experience — connecting you with nature while maintaining full privacy.
        </p>
      </div>

      <!-- Highlight 6 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-wrapper">
          <i class="fas fa-door-open"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Spacious Dressing Area</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Spacious dressing area with wardrobes to keep your belongings organized and your space clutter-free.
        </p>
      </div>

      <!-- Highlight 7 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-wrapper">
          <i class="fas fa-spa"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Premium Bathroom Amenities</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Bathrooms equipped with modern & premium amenities for a truly luxurious and refreshing experience.
        </p>
      </div>

      <!-- Highlight 8 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-wrapper">
          <i class="fas fa-leaf"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Tranquil Garden Views</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Surrounded by tranquil greenery, wake up to lush garden-facing views that soothe the mind and soul.
        </p>
      </div>

      <!-- Highlight 9 -->
      <div class="room-feature-card" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-wrapper">
          <i class="fas fa-moon"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-white">Relaxed & Rejuvenating Stay</h4>
        <p class="text-gray-300 text-sm leading-relaxed text-justify">
          Designed to offer guests a relaxed, private, and rejuvenating stay amidst nature's finest beauty.
        </p>
      </div>
    </div>
  </div>
</section>

  <!-- Why Choose This Room Section -->
  <section class="py-12 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          UNIQUE FEATURES
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Why Choose Our Super Deluxe Room?
        </h2>
        <p class="text-gray-300 max-w-3xl mx-auto text-sm md:text-base leading-relaxed" data-aos="fade-up">
          Experience the perfect balance of wilderness charm and modern luxury with our thoughtfully designed accommodations
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-8 items-center">
        <!-- Left Side - Image -->
        <div data-aos="fade-right" data-aos-duration="1000">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl">
            <img src="images/delux3.JPG" alt="Luxury Room Features" class="w-full h-[500px] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            <div class="absolute bottom-8 left-8 right-8">
              <h3 class="text-2xl md:text-3xl font-serif text-white mb-2">Unmatched Comfort</h3>
              <p class="text-gray-200 text-sm">Where nature meets luxury living</p>
            </div>
          </div>
        </div>

        <!-- Right Side - Features List -->
        <div data-aos="fade-left" data-aos-duration="1000">
          <div class="space-y-6">
            <!-- Feature 1 -->
            <div class="flex gap-4 bg-neutral-800 p-6 rounded-xl hover:bg-neutral-700 transition">
              <div class="flex-shrink-0">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                  <i class="fas fa-star text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="text-lg font-serif font-semibold text-white mb-2">Premium Location</h4>
                <p class="text-gray-300 text-sm leading-relaxed">
                  Strategically located just minutes from Kanha National Park's Khatia Gate, offering easy access to early morning safaris while maintaining peaceful privacy.
                </p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex gap-4 bg-neutral-800 p-6 rounded-xl hover:bg-neutral-700 transition">
              <div class="flex-shrink-0">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                  <i class="fas fa-spa text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="text-lg font-serif font-semibold text-white mb-2">Wellness & Relaxation</h4>
                <p class="text-gray-300 text-sm leading-relaxed">
                  Experience true rejuvenation with our unique open shower design, connecting you with nature's elements while ensuring complete privacy and luxury.
                </p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex gap-4 bg-neutral-800 p-6 rounded-xl hover:bg-neutral-700 transition">
              <div class="flex-shrink-0">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                  <i class="fas fa-concierge-bell text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="text-lg font-serif font-semibold text-white mb-2">Personalized Service</h4>
                <p class="text-gray-300 text-sm leading-relaxed">
                  Our dedicated staff ensures your stay is memorable with 24/7 assistance, safari booking support, and customized dining experiences upon request.
                </p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex gap-4 bg-neutral-800 p-6 rounded-xl hover:bg-neutral-700 transition">
              <div class="flex-shrink-0">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center">
                  <i class="fas fa-shield-alt text-white text-xl"></i>
                </div>
              </div>
              <div>
                <h4 class="text-lg font-serif font-semibold text-white mb-2">Safety & Hygiene</h4>
                <p class="text-gray-300 text-sm leading-relaxed">
                  Maintaining highest standards of cleanliness and safety protocols, ensuring a worry-free and comfortable stay for all our guests.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Guest Experience & Amenities Showcase -->
  <section class="py-12 md:py-20 bg-black">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          COMPLETE EXPERIENCE
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Your Perfect Jungle Retreat Experience
        </h2>
      </div>

      <!-- Experience Timeline -->
      <div class="grid md:grid-cols-3 gap-8 mb-16">
        <!-- Morning -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-amber-400 to-orange-500 rounded-full flex items-center justify-center shadow-2xl">
            <i class="fas fa-sun text-white text-4xl"></i>
          </div>
          <h3 class="text-2xl font-serif mb-4 text-amber-400">Morning</h3>
          <p class="text-gray-300 text-sm leading-relaxed mb-4">
            Wake up to the melodious chirping of exotic birds. Enjoy your morning tea/coffee on your private sit-out as the jungle comes alive.
          </p>
          <ul class="text-left text-gray-400 text-sm space-y-2">
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Early morning safari at 6:00 AM</li>
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Fresh breakfast at the restaurant</li>
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Bird watching sessions</li>
          </ul>
        </div>

        <!-- Afternoon -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center shadow-2xl">
            <i class="fas fa-cloud-sun text-white text-4xl"></i>
          </div>
          <h3 class="text-2xl font-serif mb-4 text-amber-400">Afternoon</h3>
          <p class="text-gray-300 text-sm leading-relaxed mb-4">
            Relax and rejuvenate in your air-conditioned room or take a refreshing dip in the pool. Explore the resort's lush gardens.
          </p>
          <ul class="text-left text-gray-400 text-sm space-y-2">
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Swimming pool access</li>
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Multi-cuisine lunch</li>
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Nature walks in buffer zones</li>
          </ul>
        </div>

        <!-- Evening -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-amber-600 to-orange-700 rounded-full flex items-center justify-center shadow-2xl">
            <i class="fas fa-moon text-white text-4xl"></i>
          </div>
          <h3 class="text-2xl font-serif mb-4 text-amber-400">Evening</h3>
          <p class="text-gray-300 text-sm leading-relaxed mb-4">
            Experience magical sunset views followed by an evening safari. End your day with a delightful dinner under the stars.
          </p>
          <ul class="text-left text-gray-400 text-sm space-y-2">
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Sunset safari adventures</li>
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Bonfire & cultural programs</li>
            <li><i class="fas fa-check text-amber-500 mr-2"></i>Special dining experiences</li>
          </ul>
        </div>
      </div>

      <!-- In-Room Amenities Grid -->
      <div class="bg-neutral-900 rounded-2xl p-8 md:p-12">
        <h3 class="text-2xl md:text-3xl font-serif text-center mb-10 text-amber-400" data-aos="fade-up">
          In-Room Premium Amenities
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          <!-- Amenity Items -->
          <div class="text-center" data-aos="zoom-in" data-aos-delay="50">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-wifi text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">High-Speed</p>
            <p class="text-gray-400 text-xs">Wi-Fi</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-tv text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Smart LED</p>
            <p class="text-gray-400 text-xs">Television</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="150">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-coffee text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Tea/Coffee</p>
            <p class="text-gray-400 text-xs">Maker</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-wind text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Premium</p>
            <p class="text-gray-400 text-xs">AC</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-lock text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Electronic</p>
            <p class="text-gray-400 text-xs">Safe</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="50">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-bath text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Premium</p>
            <p class="text-gray-400 text-xs">Toiletries</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-phone text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">24/7</p>
            <p class="text-gray-400 text-xs">Room Service</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="150">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-tshirt text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Laundry</p>
            <p class="text-gray-400 text-xs">Service</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-newspaper text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Daily</p>
            <p class="text-gray-400 text-xs">Newspaper</p>
          </div>

          <div class="text-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="w-16 h-16 mx-auto mb-3 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full flex items-center justify-center border border-amber-500/30">
              <i class="fas fa-water text-amber-400 text-2xl"></i>
            </div>
            <p class="text-white text-sm font-semibold mb-1">Bottled</p>
            <p class="text-gray-400 text-xs">Water</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Room Gallery Section -->
  <section id="gallery" class="py-12 md:py-20 bg-neutral-900">
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
          <img src="images/delux4.jpeg" alt="Super Deluxe Room View"
            class="w-full h-80 object-cover" />
        </div>
        <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
          <img src="images/delux5.JPG" alt="Room Interior"
            class="w-full h-80 object-cover" />
        </div>
        <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
          <img src="images/delux7.JPG" alt="Resort View"
            class="w-full h-80 object-cover" />
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-16 md:py-24 bg-gradient-to-r from-amber-900 to-amber-700">
    <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="fade-up">
        Ready for Your Wilderness Retreat?
      </h2>
      <p class="text-lg md:text-xl mb-8 text-amber-100" data-aos="fade-up" data-aos-delay="200">
        Book your Super Deluxe Room today and experience luxury in the heart of Kanha
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
        <a href="contact.php"
          class="bg-white text-amber-900 hover:bg-amber-100 px-10 py-4 transition font-semibold text-lg">
          BOOK NOW
        </a>
        <a href="tel:+918830996719"
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
<!-- FAQs Section - Super Deluxe Rooms -->
<style>
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
  }
  @media (max-width: 768px) {
    .faq-grid {
      grid-template-columns: 1fr;
    }
  }
  .faq-col {
    display: flex;
    flex-direction: column;
    gap: 14px;
    width: 100%;
    min-width: 0;
  }
</style>

<style>
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
  }
  @media (max-width: 768px) {
    .faq-grid {
      grid-template-columns: 1fr;
    }
  }
  .faq-col {
    display: flex;
    flex-direction: column;
    gap: 14px;
    width: 100%;
    min-width: 0;
  }
  .faq-question {
    min-height: 64px;
    height: 64px;
  }
  .faq-question span {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    font-size: 15px !important;
  }
</style>

<style>
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
  }
  .faq-col {
    display: flex;
    flex-direction: column;
    gap: 14px;
    width: 100%;
    min-width: 0;
  }
  .faq-question {
    min-height: 64px;
    height: 64px;
  }
  .faq-question span {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    font-size: 15px !important;
  }
  @media screen and (max-width: 860px) {
    .faq-grid {
      grid-template-columns: 1fr !important;
    }
    .faq-question {
      height: auto !important;
      min-height: unset !important;
    }
    .faq-question span {
      white-space: normal !important;
      overflow: visible !important;
      text-overflow: unset !important;
      font-size: 14px !important;
    }
  }
</style>

<script>
  function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    if (window.innerWidth <= 860) {
      grid.style.gridTemplateColumns = '1fr';
    } else {
      grid.style.gridTemplateColumns = '1fr 1fr';
    }
  }
  window.addEventListener('load', handleFaqResize);
  window.addEventListener('resize', handleFaqResize);
</script>

<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
  <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

    <!-- Section Header -->
    <div class="text-center mb-10 md:mb-14">
      <p class="text-amber-500 text-xs tracking-widest mb-3 font-light" data-aos="fade-down">
        GUEST INFORMATION
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">
        Wildmark Resort FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
      </p>
    </div>

    <!-- FAQ Grid: 10 Left + 10 Right -->
    <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

      <!-- LEFT COLUMN: FAQ 1–10 -->
      <div class="faq-col">

        <!-- FAQ 1 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort booking?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort stay?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">What types of rooms are available at Wildmark Resort Kanha?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark Resort?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 8 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate Kanha?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 9 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 10 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                The resort remains open, and Buffer safaris are available during monsoon season.
              </p>
            </div>
          </div>
        </div>

      </div><!-- END LEFT COLUMN -->

      <!-- RIGHT COLUMN: FAQ 11–20 -->
      <div class="faq-col">

        <!-- FAQ 11 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 12 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop services?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 13 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 14 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 15 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view rooms?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 16 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 17 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">What documents are required at check-in for Kanha resorts?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Guests must carry a valid government issued photo ID at the time of check in.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 18 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle safari?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 19 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ 20 -->
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
            <span class="font-serif text-white">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
              <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.
              </p>
            </div>
          </div>
        </div>

      </div><!-- END RIGHT COLUMN -->

    </div><!-- END FAQ GRID -->
  </div>
</section>

  

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>



  
  <script>
// FAQ Toggle Functionality
document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const faqItem = button.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('.faq-icon');
    
    // Close all other FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
      if (item !== faqItem) {
        item.querySelector('.faq-answer').style.maxHeight = '0';
        item.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
      }
    });
    
    // Toggle current FAQ
    if (answer.style.maxHeight && answer.style.maxHeight !== '0px') {
      answer.style.maxHeight = '0';
      icon.style.transform = 'rotate(0deg)';
    } else {
      answer.style.maxHeight = answer.scrollHeight + 'px';
      icon.style.transform = 'rotate(180deg)';
    }
  });
});
</script>
<?php 

include 'includes/footer.php'; 
?>