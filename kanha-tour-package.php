<?php 
// Set page-specific title
$pageTitle = "Kanha Tour Package - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>


<!-- Spacer for fixed nav -->
<div class="h-[60px] md:h-[80px]"></div>

<!-- Hero Banner -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[80vh] flex items-end"
  style="background: url('https://wildmarkresort.com/images/dear1.webp') center/cover no-repeat">
  <div class="absolute inset-0 to-transparent"></div>
</header>

<!-- Hero Text Section -->
<section class="py-8 md:py-12 bg-black">
  <div class="max-w-7xl mx-auto text-center px-4">
    <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
     <div class="flex gap-1">
  <i class="fas fa-star text-[#8E1616] text-xs"></i>
  <i class="fas fa-star text-[#8E1616] text-xs"></i>
  <i class="fas fa-star text-[#8E1616] text-xs"></i>
  <i class="fas fa-star text-[#8E1616] text-xs"></i>
  <i class="fas fa-star text-[#8E1616] text-xs"></i>
</div>

      <span class="text-xs font-semibold">(4.8/5)</span>
    </div>
    <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
      <div class="flex gap-1 ml-2"><i class="fa-solid fa-clock  text-xs  text-[#8E1616]"></i></div>
      <span class="text-xs font-semibold">1 Night / 2 Days</span>
    </div>
    <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
      <div class="flex gap-1 ml-2"><i class="fa-solid fa-paw  text-xs text-[#8E1616] "></i></div>
      <span class="text-xs font-semibold">Safaris: 1</span>
    </div>
    <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
      <div class="flex gap-1 ml-2"><i class="fa-solid fa-check  text-xs text-[#8E1616]"></i></div>
      <span class="text-xs font-semibold">No of Persons: 2</span>
    </div>

    <h1 class="text-3xl md:text-5xl lg:text-6xl font-serif font-bold mb-4 text-amber-100">
      Kanha Tour Package
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
      <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-100">Nature-Inspired Escapes</h2>
      <p class="mt-3 text-gray-400 max-w-2xl mx-auto text-sm md:text-base">Where Every Stay Tells a Wild Story</p>
    </div>

    <!-- Tabs - Sticky -->
    <div class="sticky top-[60px] md:top-[80px] z-40 bg-neutral-900 border-b border-neutral-800 -mx-4 md:-mx-6 px-4 md:px-6 py-4 mb-8">
      <div class="flex justify-center gap-4 md:gap-8 overflow-x-auto scrollbar-hide">
        <button class="tab-btn active" data-tab="machaan">Inclusions</button>
        <button class="tab-btn" data-tab="superdeluxe">Exclusions</button>
        <button class="tab-btn" data-tab="family">Zones</button>
      </div>
    </div>

    <!-- Tab Content -->
    <div class="grid md:grid-cols-2 gap-8 md:gap-12">
      <!-- Machaan -->
      <div class="panel" data-tab="machaan">
        <img src="https://wildmarkresort.com/images/wildmark1.JPG" class="rounded-xl w-full h-64 object-cover" alt="Machaan" />
      </div>
      <div class="panel" data-tab="machaan">
        <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-8">
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>All meals (Breakfast, Lunch, Hi tea and Dinner)</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Safari is included in the package.</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Daily one bottle of mineral water (500ml) will be given to each guest.</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>In safari the water bottles given will be chargeable basis.</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Pick up and drop to and from Jabalpur is included.</li>
        </ul>
      </div>

      <!-- Super Deluxe -->
      <div class="panel hidden" data-tab="superdeluxe">
        <img src="https://wildmarkresort.com/images/wildmark2.jpg" class="rounded-xl w-full h-64 object-cover" alt="Super Deluxe" />
      </div>
      <div class="panel hidden" data-tab="superdeluxe">
        <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-12">
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Camera charges are not included.</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>All extra food ordered is payable by the guest.</li>
          <li><i class="fa-solid fa-check icon-check mr-2"></i>Anything which is not included in the inclusions is chargeable</li>
        </ul>
      </div>

      <!-- Family -->
      <div class="panel hidden" data-tab="family">
        <img src="https://wildmarkresort.com/images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Family" />
      </div>
      <div class="panel hidden" data-tab="family">
        <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-2 text-justify">
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Kanha Zone:</strong> This is the most popular safari zone and covers a large part of the core area. It is known for its scenic beauty and high chances of spotting tigers, Barahsingha and other wildlife.</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Kisli Zone:</strong> This zone is known for its rich flora and fauna, including the Barahsingha, which is the state animal of Madhya Pradesh. It is also a great place for birdwatching.</li>
          <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Sarhi Zone:</strong> This zone is known for its scenic beauty and is a great place for sighting of Sloth bears, wild dogs, leopards and birdwatching.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Itinerary -->
<section id="itinerary" class="bg-black py-12 md:py-16">
  <div class="max-w-6xl mx-auto px-4 md:px-6">
    <h2 class="text-2xl md:text-3xl font-serif mb-8">Day – Wise Itinerary</h2>
    <div class="space-y-10">
      <!-- Day 1 -->
      <div class="grid md:grid-cols-12 gap-6 items-center">
        <div class="md:col-span-6 flex gap-3">
          <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/Tiger.webp" alt="Day 1" />
          <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/beded1.webp" alt="Day 1" />
        </div>
        <div class="md:col-span-6">
          <h3 class="text-xl md:text-2xl font-serif mb-2">Day 1</h3>
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
            <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Arrival at Jabalpur Airport / Jabalpur Railway Station and transfers to Kanha Wildmark Resort.</li>
            <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Afternoon you can relax and enjoy the resort amenities.</li>
          </ul>
        </div>
      </div>

      <!-- Day 2 -->
      <div class="grid md:grid-cols-12 gap-6 items-center">
        <div class="md:col-span-6 md:order-2">
          <img class="w-full h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/wildmark4.JPG" alt="Day 2" />
        </div>
        <div class="md:col-span-6 md:order-1">
          <h3 class="text-xl md:text-2xl font-serif mb-2">Day 2</h3>
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
            <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Morning Safari in Kanha, Kisli or Sarhi Core/ Khatiya buffer zone followed by check out formalities.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Payment Terms -->
<section id="experiencesA" class="py-6 md:pb-12 bg-neutral-900">
  <div class="max-w-6xl mx-auto px-4 md:px-6">
    <div class="sticky z-40 bg-neutral-900 border-b border-neutral-800 -mx-4 md:-mx-6 px-4 md:px-6 py-4 mb-4">
      <div class="flex justify-center gap-4 md:gap-4">
        <button class="tab-btn-a active" data-tab-a="curated">Terms & Conditions</button>
        <button class="tab-btn-a" data-tab-a="dining">Refund policies</button>
      </div>
    </div>
    <div>
      <div class="experience-panel-a" data-tab-a="curated">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <img src="https://wildmarkresort.com/images/wildmark5.JPG" class="rounded-xl w-full h-64 object-cover" alt="Payment" />
          <div>
            <h3 class="text-2xl font-serif font-bold text-amber-100 mb-4">Terms & Conditions</h3>
            <ul class="space-y-2 text-gray-300 text-sm">
              <li class="mb-2">Safari rates are considered as per weekends. If guest is travelling on weekdays there will be marginal discount on pricing.</li>
              <li><i class="fa-solid fa-check icon-check mr-2"></i>100% Advance for booking of the trip and package.</li>
              <li><i class="fa-solid fa-check icon-check mr-2"></i>Check In time: 1.00 PM. Check Out time: 11.30 AM</li>
              <li><i class="fa-solid fa-check icon-check mr-2"></i>No loud music is allowed in the property as it will disturb the Wildlife around the property</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="experience-panel-a hidden" data-tab-a="dining">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <img src="https://wildmarkresort.com/images/wildmark7.JPG" class="rounded-xl w-full h-64 object-cover" alt="Cancellation" />
          <div>
            <h3 class="text-2xl font-serif font-bold text-amber-100 mb-4">Refund policies:</h3>
            <ul class="space-y-2 text-gray-300 text-sm">
              <li><i class="fa-solid fa-check icon-check mr-2"></i>No refund in Safari booking as this is a package booking.</li>
              <li><i class="fa-solid fa-check icon-check mr-2"></i>50% Refund on accommodation if cancelled 30 days before the trip.</li>
              <li><i class="fa-solid fa-check icon-check mr-2"></i>25% Refund on accommodation if cancelled 15 days before the trip.</li>
              <li><i class="fa-solid fa-check icon-check mr-2"></i>Zero Refund on accommodation if cancelled within 15 days before the trip.</li>
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
      <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-100">Recommended Packages</h2>
      <p class="mt-3 text-gray-400 max-w-2xl mx-auto text-sm md:text-base">Explore More Wildlife Adventures</p>
    </div>

    <div class="swiper packageSwiper relative">
      <div class="swiper-wrapper">
        <!-- Card 1 -->
        <div class="swiper-slide">
          <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
            <div class="relative overflow-hidden h-56">
              <img src="https://wildmarkresort.com/images/Tiger.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <div class="flex gap-1"><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616]  text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i></div>
                <span class="text-xs text-gray-400">(4.9/5)</span>
              </div>
              <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Kanha Safari Tour Package</h3>
              <p class="text-gray-400 text-sm mb-4 line-clamp-2">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
              <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                <div class="flex items-center gap-1"><i class="fa-solid fa-clock text-[#8E1616] "></i><span>2N/3D</span></div>
                <div class="flex items-center gap-1"><i class="fa-solid fa-paw text-[#8E1616] "></i><span>2 Safaris</span></div>
                <a href="https://wildmarkresort.com/kanha-safari-tour-package/" class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
            <div class="relative overflow-hidden h-56">
              <img src="https://wildmarkresort.com/images/Tiger5.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <div class="flex gap-1"><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616]  text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i></div>
                <span class="text-xs text-gray-400">(4.9/5)</span>
              </div>
              <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Kanha Kisli Tour Package</h3>
              <p class="text-gray-400 text-sm mb-4 line-clamp-2">Kanha Kisli tour Package – Kanha National Park of Madhya Pradesh...</p>
              <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                <div class="flex items-center gap-1"><i class="fa-solid fa-clock text-[#8E1616] "></i><span>2N/3D</span></div>
                <div class="flex items-center gap-1"><i class="fa-solid fa-paw text-[#8E1616] "></i><span>2 Safaris</span></div>
                <a href="https://wildmarkresort.com/kanha-kisli-tour-package/" class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="swiper-slide">
          <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
            <div class="relative overflow-hidden h-56">
              <img src="https://wildmarkresort.com/images/bear.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <div class="flex gap-1"><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616]  text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i></div>
                <span class="text-xs text-gray-400">(4.9/5)</span>
              </div>
              <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Mukki Zone Tour Package</h3>
              <p class="text-gray-400 text-sm mb-4 line-clamp-2">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
              <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                <div class="flex items-center gap-1"><i class="fa-solid fa-clock text-[#8E1616] "></i><span>2N/3D</span></div>
                <div class="flex items-center gap-1"><i class="fa-solid fa-paw text-[#8E1616] "></i><span>2 Safaris</span></div>
                <a href="https://wildmarkresort.com/mukki-zone-tour-package/" class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="swiper-slide">
          <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full">
            <div class="relative overflow-hidden h-56">
              <img src="https://wildmarkresort.com/images/Tiger3.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <div class="flex gap-1"><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i><i class="fas fa-star text-[#8E1616]  text-xs"></i><i class="fas fa-star text-[#8E1616] text-xs"></i></div>
                <span class="text-xs text-gray-400">(4.9/5)</span>
              </div>
              <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Kanha Safari Tour Package</h3>
              <p class="text-gray-400 text-sm mb-4 line-clamp-2">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
              <div class="flex items-center gap-4 text-xs text-gray-400 mb-4">
                <div class="flex items-center gap-1"><i class="fa-solid fa-clock text-[#8E1616] "></i><span>3N/4D</span></div>
                <div class="flex items-center gap-1"><i class="fa-solid fa-paw text-[#8E1616] "></i><span>6 Safaris</span></div>
                <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/" class="bg-amber-600 hover:bg-amber-700 px-6 py-2 text-sm rounded transition">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
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
          <input type="text" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" required />
        </div>
        <div>
          <label class="block text-sm text-gray-400 mb-2">Email</label>
          <input type="email" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" required />
        </div>
      </div>
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm text-gray-400 mb-2">Phone</label>
          <input type="tel" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
        </div>
        <div>
          <label class="block text-sm text-gray-400 mb-2">Guests</label>
          <input type="number" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
        </div>
      </div>
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm text-gray-400 mb-2">Check-in</label>
          <input type="date" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
        </div>
        <div>
          <label class="block text-sm text-gray-400 mb-2">Check-out</label>
          <input type="date" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm" />
        </div>
      </div>
      <div>
        <label class="block text-sm text-gray-400 mb-2">Special Requests</label>
        <textarea rows="4" class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-3 focus:outline-none focus:border-amber-500 text-sm"></textarea>
      </div>
      <div class="text-right">
        <button type="submit" class="bg-amber-600 hover:bg-amber-700 px-8 py-3 text-sm w-full md:w-auto">Submit</button>
      </div>
    </form>
  </div>
</section>


<section class="py-12 md:py-20 px-4 md:px-6" style="background-color: var(--bg2);">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">
        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" style="color: var(--text2);" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" >
            <!-- LEFT COLUMN -->
            <div class="faq-col">
                <?php
                $faqs_left = [
                    ["Where is Wildmark Resort located near Khatiya Gate in Kanha?", "Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris."],
                    ["Why is Khatiya Gate preferred for Kanha resort booking?", "Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate."],
                    ["How far is Wildmark Resort from Khatiya Safari Gate?", "Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning & evening safaris."],
                    ["Is Wildmark Resort suitable for Kanha jungle safari bookings?", "Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services."],
                    ["Can I book Kanha safari along with Wildmark Resort stay?", "Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together."],
                    ["What types of rooms are available at Wildmark Resort Kanha?", "Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly & has provisions for differently & specially abled guests with wheel chair access inside the resort premises."],
                    ["Are meals included in Kanha resort booking at Wildmark Resort?", "Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan."],
                    ["What is the best time to book a resort near Khatiya Gate Kanha?", "The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available."],
                    ["Is advance booking required for Kanha resorts near Khatiya Gate?", "Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season."],
                    ["Is Wildmark Resort open during the monsoon season?", "The resort remains open, and Buffer safaris are available during monsoon season."],
                ];
                foreach ($faqs_left as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden" style="background-color: var(--bg2); border-color: rgba(142,22,22,0.25);">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition" style="color: var(--text1);"
                        onmouseover="this.style.backgroundColor='rgba(232,201,153,0.5)';" onmouseout="this.style.backgroundColor='transparent';">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.2);">
                            <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="faq-col">
                <?php
                $faqs_right = [
                    ["Is Wildmark Resort family friendly?", "Yes, Wildmark Resort is family & pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently & specially abled guests."],
                    ["Does Wildmark Resort provide pickup and drop services?", "Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance."],
                    ["Is Wildmark Resort budget friendly compared to other Kanha resorts?", "Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options."],
                    ["Are group bookings allowed at Wildmark Resort Kanha?", "Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts."],
                    ["Does Wildmark Resort offer forest or jungle view rooms?", "Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone."],
                    ["Is Wildmark Resort safe for solo travelers?", "Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers."],
                    ["What documents are required at check-in for Kanha resorts?", "Guests must carry a valid government issued photo ID at the time of check in."],
                    ["Does Wildmark Resort offer activities besides jungle safari?", "Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort."],
                    ["How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?", "Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate."],
                    ["How can I get the best price for Kanha resort booking at Khatiya Gate?", "Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price."],
                ];
                foreach ($faqs_right as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden" style="background-color: var(--bg2); border-color: rgba(142,22,22,0.25);">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition" style="color: var(--text1);"
                        onmouseover="this.style.backgroundColor='rgba(232,201,153,0.5)';" onmouseout="this.style.backgroundColor='transparent';">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.2);">
                            <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
  <!-- Awards Section -->
  <section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section" style="overflow:hidden;">
    <div class="container mx-auto max-w-7xl">
      <div class="text-center mb-10 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
          EXCELLENCE • RECOGNITION • TRUST
        </p>
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" >
          Awards and Recognitions
        </h2>
        <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
          Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
        </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
        <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up"  >
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up"   style="background-color: #39DCA1;border-radius: 9px;">
          <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>
      </div>
    </div>
  </section>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // ── Room Tabs ──
    const roomTabs = document.querySelectorAll("#rooms .tab-btn");
    const roomPanels = document.querySelectorAll("#rooms .panel");
    roomTabs.forEach((btn) => {
        btn.addEventListener("click", () => {
            const tab = btn.dataset.tab;
            roomTabs.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            roomPanels.forEach((p) => { p.classList.toggle("hidden", p.dataset.tab !== tab); });
        });
    });

    // ── Experience Tabs ──
    const expTabs = document.querySelectorAll("#experiencesA .tab-btn-a");
    const expPanels = document.querySelectorAll("#experiencesA .experience-panel-a");
    expTabs.forEach((btn) => {
        btn.addEventListener("click", () => {
            const tab = btn.dataset.tabA;
            expTabs.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            expPanels.forEach((p) => { p.classList.toggle("hidden", p.dataset.tabA !== tab); });
        });
    });

    // ── Swiper ──
    if (document.querySelector(".packageSwiper")) {
        new Swiper(".packageSwiper", {
            slidesPerView: 1, spaceBetween: 20, loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
            speed: 800,
            pagination: { el: ".swiper-pagination", clickable: true, dynamicBullets: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
            breakpoints: {
                320: { slidesPerView: 1, spaceBetween: 15 },
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 }
            }
        });
    }

</script>
<script>
// ── FAQ Accordion ──
    document.addEventListener('DOMContentLoaded', function() {
      const faqItems = document.querySelectorAll('.faq-item');
      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer   = item.querySelector('.faq-answer');
        const icon     = item.querySelector('.faq-icon');
        question.addEventListener('click', () => {
          const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
          faqItems.forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.querySelector('.faq-answer').style.maxHeight = '0';
              otherItem.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            }
          });
          if (isOpen) { answer.style.maxHeight = '0'; icon.style.transform = 'rotate(0deg)'; }
          else        { answer.style.maxHeight = answer.scrollHeight + 'px'; icon.style.transform = 'rotate(180deg)'; }
        });
      });
    });
    </script>  

<?php include 'includes/footer.php'; ?>