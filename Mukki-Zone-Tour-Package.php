<?php 
// Set page-specific title
$pageTitle = "Mukki Zone Tour Package- Wildmark Resort Kanha";

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

  <!-- Spacer for fixed nav -->
  <div class="h-[60px] md:h-[80px]"></div>

  <!-- Hero Banner -->
  <header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
    style="background: url('images/about3.webp') center/cover no-repeat">
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
        Mukki Zone Tour Package
      </h1>
      <p class="text-base md:text-lg lg:text-xl font-light mb-2 max-w-7xl mx-auto leading-relaxed text-gray-300">
        Kanha National Park of Madhya Pradesh was established in 1955 and
        covers an area of about 940 square kilometers. Kanha National Park has
        several best safari zones. The park is divided into four Core zones,
        and visitors can explore any of these zones depending on their
        preferences and availability.
      </p>
      <p class="text-base md:text-lg lg:text-xl font-light mb-2 max-w-7xl mx-auto leading-relaxed text-gray-300">
        Mukki gate was famous for its big male tigers like Chota Munna and
        Umarpani Male. Now the dominant tigress of this zone is Dhawajhandi
        Female commonly called as DJ.
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
          <img src="images/delux1.webp" class="rounded-xl w-full h-64 object-cover"
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
          <img src="images/beded1.webp" class="rounded-xl w-full h-64 object-cover"
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
          <img src="images/wildmark2.jpg" class="rounded-xl w-full h-64 object-cover" alt="Family" />
        </div>
        <div class="panel hidden" data-tab="family">
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-2 text-justify">
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Mukki Zone:</strong>This zone is relatively
              less
              crowded and is known for its rugged terrain and high chances of
              spotting tigers and leopards.
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
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark6.jpg" alt="Day 1" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark7.JPG" alt="Day 1" />
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
            <img class="w-full h-32 md:h-40 object-cover rounded-lg" src="images/wildmark8.jpeg" alt="Day 2" />
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

        <!-- Day 1 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 flex gap-3">
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark8.jpeg" alt="Day 1" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="images/wildmark7.JPG" alt="Day 1" />
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
            <img src="images/tour1.png" class="rounded-xl w-full h-64 object-cover" alt="Payment" />
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
            <img src="images/tour2.png" class="rounded-xl w-full h-64 object-cover" alt="Cancellation" />
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
          <!-- Package Card 3 -->
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
                  Kanha Kisli Tour Package
                </h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                  Kanha Kisli tour Package – Kanha National Park of Madhya
                  Pradesh was...
                </p>

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>2N/3D</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-paw"></i>
                    <span>4 Safaris</span>
                  </div>
                  <a href="Kanha-Kisli-Tour-Package.php"
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
                <img src="images/tour5.png"
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
                  Kanha Holiday Tour Package
                </h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                  Kanha National Park of Madhya Pradesh was established in
                  1955 and covers...
                </p>

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-clock"></i>
                    <span>1N/2D</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <i class="fa-solid fa-paw"></i>
                    <span>1 Safaris</span>
                  </div>
                  <a href="Kanha-Holiday-Tour-Package.php"
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
<!-- FAQs Section - Mukki Zone Tour Package -->




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
    aria-label="Special Offer"
    onclick="toggleSpecialOfferPopup()">
    <!-- Price Tag Icon -->
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
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
                        <span class="inline-block bg-amber-500 text-black text-xs font-bold px-3 py-1 rounded-full mb-2">
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
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        2 Nights Stay at Wildmark Resort (Near Khatia Gate)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        4 Jungle Safaris (Morning + Evening)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        All Meals Included (Breakfast, Lunch, Dinner)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Complimentary Safari Permit Assistance
                    </li>
                </ul>
                <div class="flex gap-3">
                    <a href="contact.php" class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>
                    
                </div>
            </div>

            <!-- Offer 2 - Early Bird Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            EARLY BIRD
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Advance Booking Discount</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-500">20% OFF</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March 31, 2025.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php" class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
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
                    Special rates for groups of 6+ people. Perfect for families, corporate outings, and wildlife photography tours.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php" class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        Book Now
                    </a>
                    
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="bg-amber-500/10 border-t border-amber-500/30 p-4 text-center rounded-b-2xl">
            <p class="text-amber-500 text-sm font-semibold">
                ⏰ Offers valid till March 31, 2025 | Terms & Conditions Apply
            </p>
        </div>

    </div>
</div>
  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>

  <!-- AOS & Scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
   

    
    // ===================================
    // Close menu when clicking on a package link
    // ===================================
    const packageLinks = document.querySelectorAll("#mobilePackagesDropdown a");
    if (packageLinks.length > 0) {
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
    }

    // ===================================
    // Room Tabs (Inclusions/Exclusions/Zones)
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
    // Experience Tabs (Terms/Refund Policy)
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
    // Initialize Package Carousel with Auto-Rotate
    // ===================================
    if (typeof Swiper !== 'undefined' && document.querySelector(".packageSwiper")) {
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