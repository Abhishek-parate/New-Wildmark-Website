<?php 
// Set page-specific title
$pageTitle = "Super Delux Rooms- Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
@keyframes slideIn {
    from {
        opacity: 0;
        transform: scale(0.9) translateY(20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.animate-slideIn {
    animation: slideIn 0.3s ease-out;
}

/* Smooth scroll for popup content */
#specialOfferPopup > div {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
}

#specialOfferPopup > div::-webkit-scrollbar {
    display: none; /* Chrome/Safari/Opera */
}


#specialOfferPopup > div::-webkit-scrollbar-track {
    background: #1c1917;
}

#specialOfferPopup > div::-webkit-scrollbar-thumb {
    background: #d97706;
    border-radius: 3px;
}
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

<header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
    style="background: url('images/about3.webp') center/cover no-repeat">
    <div class="absolute inset-0 to-transparent"></div>
  </header>



<!-- Super Deluxe Rooms with Open Shower Description Section -->
<section class="py-12 md:py-20 bg-black">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        LUXURY & NATURE COMBINED
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Super Deluxe Rooms with Open Shower
      </h2>
    </div>

    <!-- Content Grid with Images and Text -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start mb-12">
      
      <!-- Left Content -->
      <div class="space-y-6" data-aos="fade-right">
        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          The rooms offer a refined blend of comfort and natural elegance, thoughtfully created for guests who appreciate both modern convenience and a peaceful atmosphere. The rooms are air conditioned and well appointed, each room is designed with clear attention to its detail. The simple interiors feature contemporary furnishings, tasteful décor and essential amenities that ensures for a comfortable and seamless stay.
        </p>
        
        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          The resort is located inside the buffer zone and allows the guests to enjoy the tranquil garden landscapes and serene forest surroundings. The landscape setting provides a quiet and relaxed atmosphere, where all mornings begin with natural light and melodies sounds of the birds from the outdoors, and evenings settle into calm surroundings.
        </p>

        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          Every room includes a private sit-out area overlooking the open skies. The outdoor extension of your living space offers a perfect setting to relax with a book, enjoy a cup of tea, or simply unwind after a day of exploration. The open shower concept adds a distinctive touch, bringing a sense of freshness and connection to nature while maintaining privacy. A spacious dressing area enhance convenience, especially for guests preparing for safaris or evening gatherings.
        </p>
      </div>

      <!-- Right Image -->
      <div class="relative" data-aos="fade-left">
        <div class="rounded-2xl overflow-hidden shadow-2xl border border-amber-500/20">
          <img src="images/delux2.jpeg" alt="Super Deluxe Room Interior with Open Shower" 
               class="w-full h-[400px] md:h-[450px] object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>

    </div>

    <!-- Second Row - Image Left, Content Right -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start">
      
      <!-- Left Image -->
      <div class="relative order-2 lg:order-1" data-aos="fade-right">
        <div class="rounded-2xl overflow-hidden shadow-2xl border border-amber-500/20">
          <img src="images/delux3.jpg" alt="Super Deluxe Room Garden View and Sitout" 
               class="w-full h-[450px] md:h-[550px] object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>

      <!-- Right Content -->
      <div class="space-y-6 order-1 lg:order-2" data-aos="fade-left">
        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          Inside the room, a cozy lounge seating area creates a comfortable space to rest or review photographs from your safaris. A mini fridge is provided for added convenience, along with premium bathroom amenities that enhance the overall experience. The layout is generous and practical, allowing guests to move comfortably and feel at ease throughout their stay.
        </p>
        
        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          These rooms are particularly well suited for couples, honeymooners, solo travelers, nature enthusiasts, and wildlife photographers. The tranquil garden views and proximity to the forest create an ideal environment for relaxation and inspiration.
        </p>

        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          The property is also pet friendly, allowing guests to travel with their furry companions without compromise. Open green spaces and thoughtful planning ensure a comfortable stay for both pets and their owners.
        </p>

        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          Accessibility has been given high priority. All rooms are designed with wheelchair access, and guests can move easily from their rooms to the restaurant and throughout the property. Specially and differently abled guests can experience the same level of comfort and independence, ensuring a welcoming and inclusive environment for everyone.
        </p>

        <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
          Overall, the stay combines thoughtful design, natural surroundings, and practical comfort to create a relaxing and rejuvenating experience.
        </p>
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
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-snowflake text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Luxurious & AC Rooms</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Enjoy the comfort of well-ventilated, air-conditioned rooms designed for your ultimate relaxation and luxury.
          </p>
        </div>

        <!-- Highlight 2 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-temperature-low text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Mini Fridge</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Mini fridge for added convenience — keep your drinks and snacks fresh at any hour of your stay.
          </p>
        </div>

        <!-- Highlight 3 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-couch text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Cozy Lounge Seating Area</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            A cozy lounge seating area to unwind, read, or simply enjoy the peaceful ambience of your private space.
          </p>
        </div>

        <!-- Highlight 4 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-star text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Private Sit-Out</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Private sit-out overlooking the starry skies — your perfect spot for magical evenings under the open sky.
          </p>
        </div>

        <!-- Highlight 5 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-shower text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Open Shower Concept</h4>
          <p class="text-gray-300 text-sm leading-relaxed">
            Open shower concept for a refreshing experience — connecting you with nature while maintaining full privacy.
          </p>
        </div>

        <!-- Highlight 6 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-door-open text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Spacious Dressing Area</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Spacious dressing area with wardrobes to keep your belongings organized and your space clutter-free.
          </p>
        </div>

        <!-- Highlight 7 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-spa text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Premium Bathroom Amenities</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Bathrooms equipped with modern & premium amenities for a truly luxurious and refreshing experience.
          </p>
        </div>

        <!-- Highlight 8 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-leaf text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Tranquil Garden Views</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Surrounded by tranquil greenery, wake up to lush garden-facing views that soothe the mind and soul.
          </p>
        </div>

        <!-- Highlight 9 -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-2xl p-8 hover:border-amber-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-6">
            <i class="fas fa-moon text-2xl text-neutral-800"></i>
          </div>
          <h4 class="text-xl font-serif font-semibold mb-3 text-white">Relaxed & Rejuvenating Stay</h4>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Designed to offer guests a relaxed, private, and rejuvenating stay amidst nature's finest beauty.
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
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <!-- Price Tag Icon -->
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd"></path>
    </svg>
    <span
        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">
        New
    </span>
</button>
<!-- Special Offer Popup Modal -->
<div id="specialOfferPopup"
    class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[100] hidden items-center justify-center p-4"
    onclick="closeIfClickedOutside(event)">

    <div class="bg-neutral-900 border-2 border-amber-500/50 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative animate-slideIn"
        onclick="event.stopPropagation()">

        <!-- Close Button -->
        <button onclick="toggleSpecialOfferPopup()"
            class="absolute top-4 right-4 text-white hover:text-amber-500 transition z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Header with Gradient -->
        <div class="bg-gradient-to-r from-amber-600 to-amber-500 p-6 md:p-8 rounded-t-2xl">
            <div class="flex items-center gap-3 mb-2">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                    </path>
                </svg>
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white">Special Offers</h3>
            </div>
            <p class="text-amber-100 text-sm">Limited time deals on resort packages & safari tours</p>
        </div>

        <!-- Offers Content -->
        <div class="p-6 md:p-8 space-y-6">

            <!-- Offer 1 - Resort + Safari Package -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span
                            class="inline-block bg-amber-500 text-black text-xs font-bold px-3 py-1 rounded-full mb-2">
                            BESTSELLER
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">2N/3D Resort + Safari Package</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-400 text-sm line-through">₹15,000</p>
                        <p class="text-2xl font-bold text-amber-500">₹12,499</p>
                    </div>
                </div>
                <ul class="text-gray-300 text-sm space-y-2 mb-4">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        2 Nights Stay at Wildmark Resort (Near Khatia Gate)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        4 Jungle Safaris (Morning + Evening)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        All Meals Included (Breakfast, Lunch, Dinner)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Complimentary Safari Permit Assistance
                    </li>
                </ul>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>

                </div>
            </div>

            <!-- Offer 2 - Early Bird Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span
                            class="inline-block bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            EARLY BIRD
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Advance Booking Discount</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-500">20% OFF</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March
                    31, 2025.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>

                </div>
            </div>

            <!-- Offer 3 - Group Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            GROUP OFFER
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Group Booking Special</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-blue-500">₹10,999</p>
                        <p class="text-xs text-gray-400">per person</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Special rates for groups of 6+ people. Perfect for families, corporate outings, and wildlife
                    photography tours.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        Book Now
                    </a>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="bg-amber-500/10 border-t border-amber-500/30 p-4 text-center rounded-b-2xl">
            <p class="text-amber-500 text-sm font-semibold">
                ⏰ Offers valid till March 31, 2026 | Terms & Conditions Apply
            </p>
        </div>

    </div>
</div>


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
<script>
// Toggle Special Offer Popup
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) {
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Prevent background scroll
    } else {
        popup.classList.add('hidden');
        popup.classList.remove('flex');
        document.body.style.overflow = ''; // Restore scroll
    }
}

// Close popup when clicking outside
function closeIfClickedOutside(event) {
    if (event.target.id === 'specialOfferPopup') {
        toggleSpecialOfferPopup();
    }
}

// Close popup with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const popup = document.getElementById('specialOfferPopup');
        if (!popup.classList.contains('hidden')) {
            toggleSpecialOfferPopup();
        }
    }
});
</script>
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
<?php 
include 'includes/footer.php'; 
?>