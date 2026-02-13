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
<!-- FAQs Section - Super Deluxe Rooms -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-5xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        ROOM INFORMATION
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Super Deluxe Room FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about our Super Deluxe Rooms with Open Shower & Private Sit-Outs
      </p>
    </div>

    <div class="space-y-4 max-w-4xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
      
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What makes the Super Deluxe Room unique?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our Super Deluxe Rooms offer a perfect blend of luxury and nature:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Private Sit-Out:</strong> Your own outdoor seating area with stunning garden views for morning coffee or evening relaxation</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Open Shower Experience:</strong> Unique open shower design that connects you with nature while maintaining complete privacy</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Forest-Side Location:</strong> Rooms positioned close to nature's tranquility with lush garden views</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Premium Comfort:</strong> Plush bedding, modern furnishings, and air conditioning for ultimate relaxation</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What amenities are included in the Super Deluxe Room?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our rooms are equipped with premium in-room amenities:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Climate Control:</strong> Premium air conditioning for year-round comfort</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Entertainment:</strong> Smart LED television with premium channels</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Connectivity:</strong> High-speed Wi-Fi throughout the room</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Refreshments:</strong> Tea/Coffee maker with complimentary bottled water</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safety:</strong> Electronic safe for your valuables</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Bathroom:</strong> Premium toiletries, open shower design, hot/cold water 24/7</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Services:</strong> 24/7 room service, laundry service, daily newspaper</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is the Super Deluxe Room suitable for couples and honeymooners?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Absolutely! This room is perfect for romantic getaways:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Private & Intimate:</strong> Your own sit-out for romantic moments amidst nature</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Unique Experience:</strong> Open shower design adds a touch of adventure and romance</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Peaceful Setting:</strong> Forest-side location with garden views for quality time together</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Special Arrangements:</strong> We can arrange special dining, room decoration, and surprises for honeymooners</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Wildlife Romance:</strong> Experience safari adventures together and create unforgettable memories</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Honeymoon Tip:</strong> Contact us at booking to arrange special amenities and romantic surprises!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How does the open shower work? Is it private?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our open shower design offers a unique nature-connected experience:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Complete Privacy:</strong> While "open," the shower is designed with strategic walls and positioning to ensure 100% privacy from outside</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Nature Connection:</strong> Open to the sky above, allowing you to shower under the stars or morning sun</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Fresh Air:</strong> Natural ventilation with the refreshing feel of being connected to nature</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Premium Fixtures:</strong> High-quality shower fittings with both hot and cold water</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safe Design:</strong> Properly enclosed and secured while maintaining the open-air experience</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              It's a perfect balance of adventure and privacy - a truly unique Kanha experience!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What can I do from my private sit-out?</span>
          <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Your private sit-out is perfect for multiple activities:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Morning Ritual:</strong> Enjoy your complimentary tea/coffee while watching the sunrise and listening to exotic birds</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Bird Watching:</strong> Spot colorful birds in the surrounding garden and trees</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Reading Corner:</strong> Perfect peaceful spot to read your favorite book amidst nature</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Evening Relaxation:</strong> Unwind after your safari with a cool drink and garden views</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Stargazing:</strong> On clear nights, enjoy the spectacular star-filled sky away from city lights</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Private Dining:</strong> Request room service to be served on your sit-out for a special meal</span>
              </li>
            </ul>
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