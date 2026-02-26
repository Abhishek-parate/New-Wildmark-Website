<?php 
// Set page-specific title
$pageTitle = "Kanha Kisli Tour Package - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

  <style>
/* ===================================================
   ROOT COLOR VARIABLES — same as how-to-reach.php
   =================================================== */
:root {
    --bg1:  #E8C999;   /* warm golden — cards / itinerary / recommended bg */
    --bg2:  #F8EEDF;   /* cream white — main section backgrounds */
    --text1: #000000;  /* pure black  — body text */
    --text2: #8E1616;  /* deep red    — headings / accents / CTAs */
}

/* ===================================================
   ANIMATIONS
   =================================================== */
@keyframes slideIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to   { opacity: 1; transform: scale(1)   translateY(0);    }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }
#specialOfferPopup > div::-webkit-scrollbar-track { background: var(--bg2); }
#specialOfferPopup > div::-webkit-scrollbar-thumb { background: var(--text2); border-radius: 3px; }

/* ===================================================
   TABS STYLING
   =================================================== */
.tab-btn {
    position: relative;
    transition: color 0.3s ease;
    font-family: "Roboto Slab", serif;
    font-weight: 700;
    font-size: 0.875rem;
    color: var(--text2);
    padding-bottom: 0.75rem;
    white-space: nowrap;
    cursor: pointer;
}
@media (min-width: 768px) { .tab-btn { font-size: 1rem; padding-bottom: 1rem; } }
.tab-btn:hover { color: #6b1010; }
.tab-btn.active { color: var(--text1); }
.tab-btn.active::after {
    content: "";
    position: absolute;
    bottom: 0; left: 50%;
    transform: translateX(-50%);
    width: 50px; height: 3px;
    background-color: var(--text2);
}

.tab-btn-a {
    position: relative;
    transition: color 0.3s ease;
    font-family: "Roboto Slab", serif;
    font-weight: 700;
    font-size: 0.875rem;
    color: var(--text2);
    padding-bottom: 0.75rem;
    white-space: nowrap;
    cursor: pointer;
}
@media (min-width: 768px) { .tab-btn-a { font-size: 1rem; padding-bottom: 1rem; } }
.tab-btn-a:hover { color: #6b1010; }
.tab-btn-a.active { color: var(--text1); }
.tab-btn-a.active::after {
    content: "";
    position: absolute;
    bottom: 0; left: 50%;
    transform: translateX(-50%);
    width: 50px; height: 3px;
    background-color: var(--text2);
}

/* Icon colors */
.icon-check { color: #22c55e; }

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Swiper setup */
#recommended { overflow: visible; position: relative; }
.swiper-clip-wrap { overflow: hidden; width: 100%; position: relative; }
.packageSwiper { width: 100%; padding-bottom: 60px !important; overflow: visible; }
.swiper-slide { height: auto; display: flex; }
.swiper-slide > div { width: 100%; display: flex; flex-direction: column; }
.swiper-slide > div > div:last-child { flex: 1; }

/* Swiper nav buttons */
.swiper-button-next,
.swiper-button-prev {
    background: rgba(142, 22, 22, 0.15);
    backdrop-filter: blur(10px);
    width: 50px !important; height: 50px !important;
    border-radius: 50%;
    border: 2px solid rgba(142, 22, 22, 0.3);
}
.swiper-button-next::after,
.swiper-button-prev::after { font-size: 18px !important; color: var(--text2); font-weight: bold; }
.swiper-button-next:hover,
.swiper-button-prev:hover { background: rgba(142, 22, 22, 0.35); border-color: var(--text2); }
.swiper-pagination { bottom: 20px !important; }
.swiper-pagination-bullet { background: var(--text2); opacity: 0.4; width: 12px; height: 12px; transition: all 0.3s ease; }
.swiper-pagination-bullet-active { opacity: 1; background: var(--text2); transform: scale(1.2); }
@media (max-width: 768px) {
    .swiper-button-next, .swiper-button-prev { width: 40px !important; height: 40px !important; }
    .swiper-button-next::after, .swiper-button-prev::after { font-size: 15px !important; }
}

/* FAQ Grid */
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; }
.faq-col  { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
.faq-question { min-height: 64px; height: 64px; }
.faq-question span { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block; font-size: 15px !important; }
@media screen and (max-width: 860px) {
    .faq-grid { grid-template-columns: 1fr !important; }
    .faq-question { height: auto !important; min-height: unset !important; }
    .faq-question span { white-space: normal !important; overflow: visible !important; text-overflow: unset !important; font-size: 14px !important; }
}

/* ===================================================
   GLOBAL THEME OVERRIDES  (same pattern as How-to-Reach)
   =================================================== */

/* Section backgrounds */
section.bg-neutral-900 { background-color: var(--bg2) !important; }
section.bg-black       { background-color: var(--bg1) !important; }

/* Headings */
h1, h2, h3, h4 { color: var(--text2) !important; }
.text-amber-100 { color: var(--text2) !important; }

/* Body text */
.text-gray-300 { color: var(--text1) !important; }
p { color: var(--text1); }

/* Amber accents */
.text-amber-500, .text-amber-400 { color: var(--text2) !important; }
.text-gray-400  { color: rgba(0, 0, 0, 0.55) !important; }

/* Borders */
.border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
.border-neutral-700 { border-color: rgba(142, 22, 22, 0.2)  !important; }

/* ── Hero badges ── */
.bg-amber-600\/20 { background-color: rgba(142, 22, 22, 0.1) !important; }

/* ── Rooms / Tabs sticky bg ── */
#rooms .sticky        { background-color: var(--bg2) !important; }
#experiencesA .sticky { background-color: var(--bg2) !important; }

/* ── Itinerary section (bg-black → bg1) already handled above ── */

/* ── Recommended package cards (bg-neutral-900 inside #recommended) ── */
#recommended { background-color: var(--bg1) !important; }
#recommended .bg-neutral-900.rounded-xl {
    background-color: var(--bg2) !important;
    border: 1px solid rgba(142, 22, 22, 0.15) !important;
}
#recommended .bg-neutral-900.rounded-xl:hover {
    box-shadow: 0 20px 40px rgba(142, 22, 22, 0.1) !important;
}
#recommended .hover\:shadow-amber-500\/10:hover { --tw-shadow-color: rgba(142, 22, 22, 0.1) !important; }

/* View Details button */
.bg-amber-600        { background-color: var(--text2) !important; color: #fff !important; }
.hover\:bg-amber-700:hover { background-color: #6b1010 !important; }

/* ── Enquiry form ── */
#enquire { background-color: var(--bg1) !important; }
#enquire input,
#enquire textarea {
    background-color: #fff !important;
    border-color: rgba(142, 22, 22, 0.25) !important;
    color: var(--text1) !important;
}
#enquire input:focus,
#enquire textarea:focus { border-color: var(--text2) !important; outline: none; }
#enquire label { color: var(--text1) !important; opacity: 0.7; }
#enquire button[type="submit"] { background-color: var(--text2) !important; color: #fff !important; }
#enquire button[type="submit"]:hover { background-color: #6b1010 !important; }

/* ── Awards ── */
.awards-section { background-color: var(--bg1) !important; }
.award-card .group-hover\:shadow-amber-500\/30 { --tw-shadow-color: rgba(142, 22, 22, 0.2) !important; }
.award-card > div { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.award-card:hover > div {
    transform: translateY(-6px) !important;
    box-shadow: 0 12px 30px rgba(142, 22, 22, 0.2) !important;
}

/* ── FAQ Cards ── */
.faq-item.bg-black {
    background-color: var(--bg2) !important;
    border-color: rgba(142, 22, 22, 0.25) !important;
    box-shadow: 0 2px 8px rgba(142, 22, 22, 0.06);
}
.faq-item.bg-black:hover { border-color: var(--text2) !important; }
.faq-question:hover { background-color: rgba(232, 201, 153, 0.5) !important; }
.faq-answer > div {
    background-color: rgba(232, 201, 153, 0.3) !important;
    border-top-color: rgba(142, 22, 22, 0.2) !important;
}
.faq-icon  { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* FAQ section bg */
section.py-12.md\:py-20.px-4.md\:px-6.bg-neutral-900 { background-color: var(--bg2) !important; }

/* ── Special Offer floating button ── */
#specialOfferBtn {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
#specialOfferBtn:hover { background: linear-gradient(to right, #6b1010, var(--text2)) !important; }
#specialOfferBtn .bg-red-500 { background-color: var(--bg1) !important; color: var(--text2) !important; }

/* ── Special Offer Popup ── */
#specialOfferPopup .bg-neutral-900 {
    background-color: var(--bg2) !important;
    border-color: var(--text2) !important;
}
#specialOfferPopup .bg-gradient-to-r {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
#specialOfferPopup .bg-black {
    background-color: var(--bg1) !important;
}
#specialOfferPopup .border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup .hover\:border-amber-500:hover { border-color: var(--text2) !important; }
#specialOfferPopup h4.text-white         { color: var(--text1) !important; }
#specialOfferPopup .text-amber-500       { color: var(--text2) !important; }
#specialOfferPopup .text-gray-300        { color: var(--text1) !important; opacity: 0.85; }
#specialOfferPopup .text-gray-400.line-through { color: rgba(0,0,0,0.4) !important; }
#specialOfferPopup .text-gray-400        { color: rgba(0,0,0,0.5) !important; }
#specialOfferPopup .text-amber-100       { color: var(--bg1) !important; }
#specialOfferPopup .bg-amber-500\/10     { background-color: rgba(232, 201, 153, 0.3) !important; }
#specialOfferPopup .border-t.border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup .text-2xl.text-amber-500 { color: var(--text2) !important; }
#specialOfferPopup .text-2xl.font-bold.text-amber-500 { color: var(--text2) !important; }
#specialOfferPopup button.text-white     { color: var(--text1) !important; }
#specialOfferPopup button.hover\:text-amber-500:hover { color: var(--text2) !important; }

/* Popup Book Now button */
.bg-amber-500.hover\:bg-amber-600         { background-color: var(--text2) !important; color: var(--bg2) !important; }
.bg-amber-500.hover\:bg-amber-600:hover   { background-color: #6b1010 !important; }

/* Offer badges */
.bg-green-500 { background-color: #2a6e3f !important; }
.bg-blue-500  { background-color: #1a4a7a !important; }
.text-green-500 { color: #2a6e3f !important; }
.text-blue-500  { color: #1a4a7a !important; }

/* WhatsApp stays green */
a.bg-green-500.hover\:bg-green-600 { background-color: #25D366 !important; }
  </style>


  <!-- Spacer for fixed nav -->
  <div class="h-[60px] md:h-[80px]"></div>

  <!-- Hero Banner -->
  <header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
    style="background: url('https://wildmarkresort.com/images/deer.webp') center/cover no-repeat">
    <div class="absolute inset-0 to-transparent"></div>
  </header>

  <!-- Hero Text Section -->
  <section class="py-8 md:py-12 bg-black" style="overflow-x:hidden;">
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
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-clock text-[#8E1616] text-xs"></i>
        </div>
        <span class="text-xs font-semibold">2 Night / 3 Days</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-paw text-[#8E1616] text-xs"></i>
        </div>
        <span class="text-xs font-semibold">Safaris: 4</span>
      </div>
      <div class="inline-flex items-center gap-1 bg-amber-600/20 backdrop-blur-sm px-3 md:px-4 py-2 rounded-full mb-4">
        <div class="flex gap-1 ml-2">
          <i class="fa-solid fa-check text-[#8E1616] text-xs"></i>
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
          <img src="https://wildmarkresort.com/images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Machaan" />
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
          <img src="https://wildmarkresort.com/images/beded3.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Super Deluxe" />
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
          <img src="https://wildmarkresort.com/images/family2.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Family" />
        </div>
        <div class="panel hidden" data-tab="family">
          <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm mt-2 text-justify">
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Kanha Zone:</strong>This is the most popular
              safari zone and covers a large part of the core area. It is known for
              its scenic beauty and high chances of spotting tigers,
              Barahsingha and other wildlife.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Kisli Zone:</strong>This zone is known for
              its rich flora and fauna, including the Barahsingha, which is the state
              animal of Madhya Pradesh. It is also a great place for
              birdwatching.
            </li>
            <li>
              <i class="fa-solid fa-check icon-check mr-2 mb-2"></i><strong>Sarhi Zone:</strong>This zone is known for
              its scenic beauty and is a great place for sighting of Sloth bears, wild
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
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/wildmark2.jpg" alt="Day 1" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/wildmark4.JPG" alt="Day 1" />
          </div>
          <div class="md:col-span-6">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 1</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Arrival at Jabalpur Airport / Jabalpur Railway Station and transfers to Kanha Wildmark Resort.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Lunch will be served by 1 PM.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time for afternoon safari in Kanha Core Zone.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>After coming back time for Hi tea.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Dinner will be served by 8.30 PM</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time to go for bed.</li>
            </ul>
          </div>
        </div>

        <!-- Day 2 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 md:order-2">
            <img class="w-full h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/wildmark5.jpg" alt="Day 2" />
          </div>
          <div class="md:col-span-6 md:order-1">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 2</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Morning safari in Kanha Core Zone.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Breakfast will be served in Safari.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Come back relax in the pool.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Lunch will be served by 1 PM.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time for afternoon safari in Kisli Core Zone.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>After coming back time for Hi tea.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Dinner will be served by 8.30 PM</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time to go for bed</li>
            </ul>
          </div>
        </div>

        <!-- Day 3 -->
        <div class="grid md:grid-cols-12 gap-6 items-center">
          <div class="md:col-span-6 flex gap-3">
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/wildmark7.JPG" alt="Day 3" />
            <img class="w-1/2 h-32 md:h-40 object-cover rounded-lg" src="https://wildmarkresort.com/images/wildmark8.jpeg" alt="Day 3" />
          </div>
          <div class="md:col-span-6">
            <h3 class="text-xl md:text-2xl font-serif mb-2">Day 3</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-1 gap-2 text-gray-300 text-sm">
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Morning safari in Sarhi Core Zone.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Breakfast will be served in Safari.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Time to say Good Bye.</li>
              <li><i class="fa-solid fa-check icon-check mr-2 mb-2"></i>Check Out by 11.30 AM.</li>
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
            Terms &amp; Conditions
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
            <img src="https://wildmarkresort.com/images/Tiger.webp" class="rounded-xl w-full h-64 object-cover" alt="Payment" />
            <div>
              <h3 class="text-2xl font-serif font-bold text-amber-100 mb-4">
                Terms &amp; Conditions
              </h3>
              <ul class="space-y-2 text-gray-300 text-sm">
                <li class="mb-2">
                  Safari rates are considered as per weekends. If guest is
                  travelling on weekdays there will be marginal discount on
                  pricing.
                </li>
                <li><i class="fa-solid fa-check icon-check mr-2"></i>100% Advance for booking of the trip and package.</li>
                <li><i class="fa-solid fa-check icon-check mr-2"></i>Check In time: 1.00 PM. Check Out time: 11.30 AM</li>
                <li><i class="fa-solid fa-check icon-check mr-2"></i>No loud music is allowed in the property as it will disturb the Wildlife around the property</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="experience-panel-a hidden" data-tab-a="dining">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <img src="https://wildmarkresort.com/images/Tiger5.webp" class="rounded-xl w-full h-64 object-cover" alt="Cancellation" />
            <div>
              <h3 class="text-2xl font-serif font-bold text-amber-100 mb-4">
                Refund policies:
              </h3>
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
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-100">
          Recommended Packages
        </h2>
        <p class="mt-3 text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
          Explore More Wildlife Adventures
        </p>
      </div>

      <div class="swiper-clip-wrap">
        <div class="swiper packageSwiper">
          <div class="swiper-wrapper">

            <!-- Package Card 1 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="https://wildmarkresort.com/images/deer.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="flex gap-1">
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                    </div>
                    <span class="text-xs text-gray-400">(4.9/5)</span>
                  </div>
                  <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Kanha Safari Tour Package</h3>
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1"><i class="fa-solid fa-clock"  style="color: var(--text2);"></i><span>2N/3D</span></div>
                    <div class="flex items-center gap-1"><i class="fa-solid fa-paw" style="color: var(--text2);"></i><span>2 Safaris</span></div>
                    <a href="https://wildmarkresort.com/kanha-safari-tour-package/" class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Package Card 2 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="https://wildmarkresort.com/images/bear.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="flex gap-1">
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                      <i class="fas fa-star text-[#8E1616]  text-xs"></i>
                    </div>
                    <span class="text-xs text-gray-400">(4.9/5)</span>
                  </div>
                  <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Kanha Tiger Safari Tour Package</h3>
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1"><i class="fa-solid fa-clock"  style="color: var(--text2);"></i><span>3N/4D</span></div>
                    <div class="flex items-center gap-1"><i class="fa-solid fa-paw" style="color: var(--text2);"></i><span>6 Safaris</span></div>
                    <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/" class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Package Card 3 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="https://wildmarkresort.com/images/deer.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="flex gap-1">
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                    </div>
                    <span class="text-xs text-gray-400">(4.9/5)</span>
                  </div>
                  <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Mukki Zone Tour Package</h3>
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1"><i class="fa-solid fa-clock"  style="color: var(--text2);"></i><span>2N/3D</span></div>
                    <div class="flex items-center gap-1"><i class="fa-solid fa-paw" style="color: var(--text2);"></i><span>2 Safaris</span></div>
                    <a href="https://wildmarkresort.com/mukki-zone-tour-package/" class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Package Card 4 -->
            <div class="swiper-slide">
              <div class="bg-neutral-900 rounded-xl overflow-hidden group hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-56 flex-shrink-0">
                  <img src="https://wildmarkresort.com/images/Tiger.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Kanha Package" />
                </div>
                <div class="p-6 flex flex-col flex-1">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="flex gap-1">
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                      <i class="fas fa-star text-[#8E1616] text-xs"></i>
                    </div>
                    <span class="text-xs text-gray-400">(4.9/5)</span>
                  </div>
                  <h3 class="text-xl font-serif font-bold text-amber-100 mb-2">Kanha Holiday Tour Package</h3>
                  <p class="text-gray-400 text-sm mb-4 line-clamp-2 flex-1">Kanha National Park of Madhya Pradesh was established in 1955 and covers...</p>
                  <div class="flex items-center gap-4 text-xs text-gray-400 mt-auto">
                    <div class="flex items-center gap-1"><i class="fa-solid fa-clock" style="color: var(--text2);"></i><span>1N/2D</span></div>
                    <div class="flex items-center gap-1"><i class="fa-solid fa-paw" style="color: var(--text2);"></i><span>1 Safari</span></div>
                    <a href="https://wildmarkresort.com/Kanha-Holiday-Tour-Package/" class="ml-auto bg-amber-600 hover:bg-amber-700 px-5 py-2 text-sm rounded transition text-white">View Details</a>
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

  <!-- Awards Section -->
  <section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section" style="overflow:hidden;">
    <div class="container mx-auto max-w-7xl">
      <div class="text-center mb-10 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
          EXCELLENCE • RECOGNITION • TRUST
        </p>
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">
          Awards and Recognitions
        </h2>
        <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
          Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
        </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1;border-radius: 9px;">
          <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

      <div class="text-center mb-10 md:mb-14">
        <p class="text-amber-500 text-xs tracking-widest mb-3 font-light" data-aos="fade-down">GUEST INFORMATION</p>
        <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
        <p class="text-sm md:text-base text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
          Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
        </p>
      </div>

      <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

        <!-- LEFT COLUMN -->
        <div class="faq-col">

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort booking?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort stay?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">What types of rooms are available at Wildmark Resort Kanha?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark Resort?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate Kanha?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">The resort remains open, and Buffer safaris are available during monsoon season.</p>
              </div>
            </div>
          </div>

        </div><!-- END LEFT COLUMN -->

        <!-- RIGHT COLUMN -->
        <div class="faq-col">

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop services?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view rooms?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">What documents are required at check-in for Kanha resorts?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Guests must carry a valid government issued photo ID at the time of check in.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle safari?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.</p>
              </div>
            </div>
          </div>

          <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
            <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
              <span class="font-serif text-white">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
              <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.</p>
              </div>
            </div>
          </div>

        </div><!-- END RIGHT COLUMN -->

      </div><!-- END FAQ GRID -->
    </div>
  </section>

 

 

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // ── Room Tabs ──
    const roomTabs = document.querySelectorAll("#rooms .tab-btn");
    const roomPanels = document.querySelectorAll("#rooms .panel");
    if (roomTabs.length > 0) {
      roomTabs.forEach((btn) => {
        btn.addEventListener("click", () => {
          const tab = btn.dataset.tab;
          roomTabs.forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");
          roomPanels.forEach((p) => { p.classList.toggle("hidden", p.dataset.tab !== tab); });
        });
      });
    }

    // ── Experience Tabs ──
    const expTabs = document.querySelectorAll("#experiencesA .tab-btn-a");
    const expPanels = document.querySelectorAll("#experiencesA .experience-panel-a");
    if (expTabs.length > 0) {
      expTabs.forEach((btn) => {
        btn.addEventListener("click", () => {
          const tab = btn.dataset.tabA;
          expTabs.forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");
          expPanels.forEach((p) => { p.classList.toggle("hidden", p.dataset.tabA !== tab); });
        });
      });
    }

    // ── Swiper ──
    if (typeof Swiper !== 'undefined' && document.querySelector(".packageSwiper")) {
      new Swiper(".packageSwiper", {
        slidesPerView: 1, spaceBetween: 20, loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
        speed: 800,
        pagination: { el: ".swiper-pagination", clickable: true, dynamicBullets: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        breakpoints: { 320: { slidesPerView: 1, spaceBetween: 15 }, 640: { slidesPerView: 2, spaceBetween: 20 }, 1024: { slidesPerView: 3, spaceBetween: 30 } }
      });
    }

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

  <script>
    function toggleSpecialOfferPopup() {
      const popup = document.getElementById('specialOfferPopup');
      if (popup.classList.contains('hidden')) { popup.classList.remove('hidden'); popup.classList.add('flex'); document.body.style.overflow = 'hidden'; }
      else { popup.classList.add('hidden'); popup.classList.remove('flex'); document.body.style.overflow = ''; }
    }
    function closeIfClickedOutside(event) { if (event.target.id === 'specialOfferPopup') { toggleSpecialOfferPopup(); } }
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') { const popup = document.getElementById('specialOfferPopup'); if (!popup.classList.contains('hidden')) { toggleSpecialOfferPopup(); } }
    });
  </script>

  <script>
    function handleFaqResize() {
      var grid = document.querySelector('.faq-grid');
      if (!grid) return;
      grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
    }
    window.addEventListener('load', handleFaqResize);
    window.addEventListener('resize', handleFaqResize);
  </script>

<?php 
include 'includes/footer.php'; 
?>