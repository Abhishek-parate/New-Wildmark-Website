<?php 
$pageTitle = "Super Delux Rooms - Wildmark Resort Kanha";
include 'includes/header.php'; 
?>
<style>
/* ============================================================
   ROOT CSS VARIABLES — 4 BRAND COLORS
   ============================================================ */
:root {
  --bg1:  #E8C999;
  --bg2:  #F8EEDF;
  --txt1: #000000;
  --txt2: #8E1616;
}

/* ============================================================
   ANIMATIONS
   ============================================================ */
@keyframes slideIn {
  from { opacity: 0; transform: scale(0.9) translateY(20px); }
  to   { opacity: 1; transform: scale(1)   translateY(0);    }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

/* Popup scrollbar hide */
#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }

/* ============================================================
   FEATURE CARDS
   ============================================================ */
.feature-card {
  background: var(--bg1);
  border: 1px solid rgba(142,22,22,0.15);
  border-radius: 1rem;
  padding: 2rem 1.5rem;
  text-align: left;
  height: 100%;
  transition: all 0.3s ease;
}
.feature-card:hover {
  transform: translateY(-5px);
  border-color: rgba(142,22,22,0.4);
  box-shadow: 0 10px 30px rgba(142,22,22,0.15);
}
.feature-card .icon-box {
  width: 60px; height: 60px;
  background: linear-gradient(135deg, var(--txt2) 0%, #5a0e0e 100%);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 1.5rem;
  box-shadow: 0 8px 20px rgba(142,22,22,0.25);
}
.feature-card .icon-box i { font-size: 1.75rem; color: #fff; }

/* ============================================================
   GALLERY
   ============================================================ */
.gallery-item {
  position: relative; overflow: hidden;
  border-radius: 1rem; cursor: pointer;
  transition: transform 0.3s ease;
}
.gallery-item:hover { transform: scale(1.02); }
.gallery-item img { transition: transform 0.5s ease; }
.gallery-item:hover img { transform: scale(1.1); }

/* ============================================================
   AMENITY LIST ITEMS
   ============================================================ */
.amenity-item {
  display: flex; align-items: flex-start;
  gap: 0.75rem; margin-bottom: 1rem;
}
.amenity-item i {
  color: var(--txt2);
  font-size: 1.25rem; margin-top: 0.125rem; flex-shrink: 0;
}
.amenity-item h4 { color: var(--txt1) !important; }
.amenity-item p  { color: var(--txt1) !important; opacity: 0.65; }

/* ============================================================
   TABS
   ============================================================ */
.tab-button {
  position: relative;
  padding: 1rem 1.5rem;
  font-weight: 600;
  transition: all 0.3s ease;
  border-bottom: 3px solid transparent;
  color: var(--txt1);
  opacity: 0.6;
}
.tab-button:hover { opacity: 1; color: var(--txt2); }
.tab-button.active {
  color: var(--txt2);
  border-bottom-color: var(--txt2);
  opacity: 1;
}
.tab-content         { display: none; }
.tab-content.active  { display: block; }

/* ============================================================
   FAQ GRID
   ============================================================ */
.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  align-items: start;
}
.faq-col {
  display: flex; flex-direction: column;
  gap: 14px; width: 100%; min-width: 0;
}
.faq-question { min-height: 64px; height: 64px; }
.faq-question span {
  white-space: nowrap; overflow: hidden;
  text-overflow: ellipsis; display: block;
  font-size: 15px !important;
}
@media screen and (max-width: 860px) {
  .faq-grid { grid-template-columns: 1fr !important; }
  .faq-question { height: auto !important; min-height: unset !important; }
  .faq-question span {
    white-space: normal !important; overflow: visible !important;
    text-overflow: unset !important; font-size: 14px !important;
  }
}

/* ============================================================
   SECTION-LEVEL BACKGROUNDS & TEXT
   ============================================================ */

/* Hero header — keeps image, just overlay tweak */
header.hero-header { background-color: var(--txt1); }

/* Description Section */
.section-desc        { background-color: var(--bg2); }
.section-desc h2     { color: var(--txt1); }
.section-desc p      { color: var(--txt1); opacity: 0.8; }
.section-desc .text-amber-500 { color: var(--txt2) !important; }
.section-desc .border-amber-500\/20 { border-color: rgba(142,22,22,0.2) !important; }

/* Room Highlights */
.section-highlights  { background-color: var(--bg2); }
.section-highlights h2 { color: var(--txt1); }
.section-highlights h3 { color: var(--txt2) !important; }

.highlight-card {
  background-color: var(--bg1) !important;
  border: 1px solid rgba(142,22,22,0.15) !important;
  border-radius: 1rem;
  padding: 2rem;
  transition: all 0.3s ease;
}
.highlight-card:hover { border-color: rgba(142,22,22,0.5) !important; }
.highlight-card .icon-circle {
  background-color: var(--txt2) !important;
}
.highlight-card .icon-circle i { color: #fff !important; }
.highlight-card h4  { color: var(--txt1) !important; }
.highlight-card p   { color: var(--txt1) !important; opacity: 0.75; }

/* What We Offer (Amenities) */
.section-amenities  { background-color: var(--bg2); }
.section-amenities .text-amber-500 { color: var(--txt2) !important; }
.section-amenities h2 { color: var(--txt1); }
.section-amenities .border-neutral-800 {
  border-color: rgba(142,22,22,0.2) !important;
}

/* Gallery */
.section-gallery    { background-color: var(--txt1); }
.section-gallery h2 { color: var(--bg2); }
.section-gallery .text-amber-500 { color: var(--bg1) !important; }

/* CTA */
.section-cta {
  background: linear-gradient(to right, var(--txt2), #5a0e0e) !important;
}
.section-cta h2     { color: #fff; }
.section-cta p      { color: var(--bg1); }
.section-cta .bg-white { background-color: var(--bg2) !important; color: var(--txt2) !important; }
.section-cta .bg-white:hover { background-color: var(--bg1) !important; }
.section-cta .border-white {
  border-color: var(--bg2) !important;
  color: var(--bg2) !important;
}
.section-cta .border-white:hover {
  background-color: var(--bg2) !important;
  color: var(--txt2) !important;
}

/* Awards */
.section-awards     { background-color: var(--bg2); }
.section-awards h2  { color: var(--txt1); }
.section-awards .text-amber-500  { color: var(--txt2) !important; }
.section-awards p.text-gray-300  { color: var(--txt1); opacity: 0.75; }
.award-card > div {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.award-card:hover > div {
  transform: translateY(-6px);
  box-shadow: 0 12px 30px rgba(142,22,22,0.2) !important;
}
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }

/* FAQ */
.section-faq        { background-color: var(--bg2); }
.section-faq .text-amber-500  { color: var(--txt2) !important; }
.section-faq h2     { color: var(--txt1); }
.section-faq p.text-gray-300  { color: var(--txt1); opacity: 0.75; }

.faq-item {
  background-color: #fff !important;
  border: 1px solid rgba(142,22,22,0.2) !important;
}
.faq-question { background-color: transparent; }
.faq-question:hover { background-color: var(--bg1) !important; }
.faq-question span  { color: var(--txt1) !important; }
.faq-icon           { color: var(--txt2) !important; }
.faq-answer > div {
  background-color: var(--bg1) !important;
  border-top-color: rgba(142,22,22,0.2) !important;
}
.faq-answer p { color: var(--txt1) !important; opacity: 0.85; }

/* Special Offer Popup */
#specialOfferBtn {
  background: linear-gradient(to right, var(--txt2), #6b1010) !important;
}
#specialOfferPopup > div {
  background-color: var(--bg2) !important;
  border-color: rgba(142,22,22,0.5) !important;
}
#specialOfferPopup .bg-gradient-to-r {
  background: linear-gradient(to right, var(--txt2), #6b1010) !important;
}
#specialOfferPopup .text-amber-100 { color: var(--bg1) !important; }
#specialOfferPopup .text-amber-500 { color: var(--txt2) !important; }
#specialOfferPopup .bg-black {
  background-color: #fff !important;
  border-color: rgba(142,22,22,0.25) !important;
}
#specialOfferPopup .bg-black:hover { border-color: var(--txt2) !important; }
#specialOfferPopup h4   { color: var(--txt1) !important; }
#specialOfferPopup .text-white  { color: var(--txt1) !important; }
#specialOfferPopup .text-gray-300,
#specialOfferPopup li   { color: var(--txt1) !important; opacity: 0.8; }
#specialOfferPopup .line-through { color: var(--txt1) !important; opacity: 0.45; }
#specialOfferPopup .text-amber-500.font-bold { color: var(--txt2) !important; }
#specialOfferPopup .bg-amber-500 { background-color: var(--txt2) !important; color: #fff !important; }
#specialOfferPopup a.bg-amber-500,
#specialOfferPopup a.flex-1 {
  background-color: var(--txt2) !important;
  color: #fff !important;
}
#specialOfferPopup a.bg-amber-500:hover,
#specialOfferPopup a.flex-1:hover { background-color: #6b1010 !important; }
#specialOfferPopup .bg-amber-500\/10 { background-color: rgba(142,22,22,0.08) !important; }
#specialOfferPopup .border-amber-500\/30 { border-color: rgba(142,22,22,0.3) !important; }
#specialOfferPopup .text-green-500 { color: #1a7a1a !important; }
#specialOfferPopup .text-blue-500  { color: #1a4a8a !important; }
#specialOfferPopup .bg-green-500   { background-color: #1a7a1a !important; }
#specialOfferPopup .bg-blue-500    { background-color: #1a4a8a !important; }
#specialOfferPopup .text-gray-400.text-xs { color: var(--txt1) !important; opacity: 0.55; }
</style>

<!-- ============================================================
     HERO HEADER
     ============================================================ -->
<header class="hero-header relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
    style="background: url('https://wildmarkresort.com/images/Tiger5.webp') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</header>

<!-- ============================================================
     DESCRIPTION SECTION — bg2 background
     ============================================================ -->
<section class="section-desc py-12 md:py-20">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">

    <div class="text-center mb-12">
      <p class="text-xs tracking-widest mb-4 font-light" style="color:var(--txt2)" data-aos="fade-down">
        LUXURY &amp; NATURE COMBINED
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Super Deluxe Rooms with Open Shower
      </h2>
    </div>

    <!-- Row 1 — Text Left, Image Right -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start mb-12">
      <div class="space-y-6" data-aos="fade-right">
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          The rooms offer a refined blend of comfort and natural elegance, thoughtfully created for guests who appreciate both modern convenience and a peaceful atmosphere. The rooms are air conditioned and well appointed, each room is designed with clear attention to its detail. The simple interiors feature contemporary furnishings, tasteful décor and essential amenities that ensures for a comfortable and seamless stay.
        </p>
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          The resort is located inside the buffer zone and allows the guests to enjoy the tranquil garden landscapes and serene forest surroundings. The landscape setting provides a quiet and relaxed atmosphere, where all mornings begin with natural light and melodies sounds of the birds from the outdoors, and evenings settle into calm surroundings.
        </p>
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          Every room includes a private sit-out area overlooking the open skies. The outdoor extension of your living space offers a perfect setting to relax with a book, enjoy a cup of tea, or simply unwind after a day of exploration. The open shower concept adds a distinctive touch, bringing a sense of freshness and connection to nature while maintaining privacy.
        </p>
      </div>
      <div class="relative" data-aos="fade-left">
        <div class="rounded-2xl overflow-hidden shadow-2xl" style="border:1px solid rgba(142,22,22,0.2)">
          <img src="https://wildmarkresort.com/images/delux2.jpeg" alt="Super Deluxe Room Interior with Open Shower"
               class="w-full h-[400px] md:h-[450px] object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>
    </div>

    <!-- Row 2 — Image Left, Text Right -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start">
      <div class="relative order-2 lg:order-1" data-aos="fade-right">
        <div class="rounded-2xl overflow-hidden shadow-2xl" style="border:1px solid rgba(142,22,22,0.2)">
          <img src="https://wildmarkresort.com/images/delux3.jpg" alt="Super Deluxe Room Garden View and Sitout"
               class="w-full h-[450px] md:h-[550px] object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>
      <div class="space-y-6 order-1 lg:order-2" data-aos="fade-left">
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          Inside the room, a cozy lounge seating area creates a comfortable space to rest or review photographs from your safaris. A mini fridge is provided for added convenience, along with premium bathroom amenities that enhance the overall experience. The layout is generous and practical, allowing guests to move comfortably and feel at ease throughout their stay.
        </p>
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          These rooms are particularly well suited for couples, honeymooners, solo travelers, nature enthusiasts, and wildlife photographers. The tranquil garden views and proximity to the forest create an ideal environment for relaxation and inspiration.
        </p>
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          The property is also pet friendly, allowing guests to travel with their furry companions without compromise. Open green spaces and thoughtful planning ensure a comfortable stay for both pets and their owners.
        </p>
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          Accessibility has been given high priority. All rooms are designed with wheelchair access, and guests can move easily from their rooms to the restaurant and throughout the property. Specially and differently abled guests can experience the same level of comfort and independence, ensuring a welcoming and inclusive environment for everyone.
        </p>
        <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
          Overall, the stay combines thoughtful design, natural surroundings, and practical comfort to create a relaxing and rejuvenating experience.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     ROOM HIGHLIGHTS — bg2 background, bg1 cards
     ============================================================ -->
<section class="section-highlights py-12 md:py-20">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Room Highlights</h2>
      <h3 class="text-base md:text-lg font-serif tracking-wide" data-aos="fade-up" data-aos-delay="100"
          style="color:var(--txt2)">
        Experience Luxurious &amp; comfort blended with thoughtful design in our meticulously crafted air-conditioned Super Deluxe Rooms.
      </h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

      <?php
      $highlights = [
        ["fas fa-snowflake",       "Luxurious & AC Rooms",          "Enjoy the comfort of well-ventilated, air-conditioned rooms designed for your ultimate relaxation and luxury.",                                "100"],
        ["fas fa-temperature-low", "Mini Fridge",                   "Mini fridge for added convenience — keep your drinks and snacks fresh at any hour of your stay.",                                           "200"],
        ["fas fa-couch",           "Cozy Lounge Seating Area",      "A cozy lounge seating area to unwind, read, or simply enjoy the peaceful ambience of your private space.",                                  "300"],
        ["fas fa-star",            "Private Sit-Out",               "Private sit-out overlooking the starry skies — your perfect spot for magical evenings under the open sky.",                                  "100"],
        ["fas fa-shower",          "Open Shower Concept",           "Open shower concept for a refreshing experience — connecting you with nature while maintaining full privacy.",                               "200"],
        ["fas fa-door-open",       "Spacious Dressing Area",        "Spacious dressing area with wardrobes to keep your belongings organized and your space clutter-free.",                                      "300"],
        ["fas fa-spa",             "Premium Bathroom Amenities",    "Bathrooms equipped with modern &amp; premium amenities for a truly luxurious and refreshing experience.",                                    "100"],
        ["fas fa-leaf",            "Tranquil Garden Views",         "Surrounded by tranquil greenery, wake up to lush garden-facing views that soothe the mind and soul.",                                        "200"],
        ["fas fa-moon",            "Relaxed &amp; Rejuvenating Stay","Designed to offer guests a relaxed, private, and rejuvenating stay amidst nature's finest beauty.",                                       "300"],
      ];
      foreach ($highlights as $h): ?>
      <div class="highlight-card" data-aos="fade-up" data-aos-delay="<?= $h[3] ?>">
        <div class="w-16 h-16 rounded-full icon-circle flex items-center justify-center mb-6">
          <i class="<?= $h[0] ?> text-2xl"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3"><?= $h[1] ?></h4>
        <p class="text-sm leading-relaxed text-justify"><?= $h[2] ?></p>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- ============================================================
     WHAT WE OFFER — bg2, tabs with txt2 active
     ============================================================ -->
<section id="amenities" class="section-amenities py-12 md:py-20">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <p class="text-xs tracking-widest mb-4 font-light" style="color:var(--txt2)" data-aos="fade-down">
        COMPLETE EXPERIENCE
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-8" data-aos="zoom-in">What We Offer</h2>
    </div>

    <!-- Tabs Nav -->
    <div class="flex justify-center mb-12 overflow-x-auto" style="border-bottom:2px solid var(--bg1)"
         data-aos="fade-up">
      <button class="tab-button active text-sm md:text-base whitespace-nowrap" data-tab="activities">
        Activities at Resort
      </button>
      <button class="tab-button text-sm md:text-base whitespace-nowrap" data-tab="amenitiesTab">
        Room Amenities
      </button>
    </div>

    <!-- Activities Tab -->
    <div class="tab-content active" id="activities">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $activities = [
          ["fa-solid fa-binoculars",           "Jungle Safaris",              "Guided jungle safaris with night drive options",             "50"],
          ["fa-solid fa-dove",                 "Birdwatching &amp; Nature Walks", "Early morning birdwatching tours with naturalists",      "100"],
          ["fa-solid fa-fire",                 "Bonfire Evenings",            "Private dining with bonfire under the stars",                "150"],
          ["fa-solid fa-utensils",             "Bush-Style Outdoor Meals",    "Authentic outdoor dining experience in nature",              "200"],
          ["fa-solid fa-table-tennis-paddle-ball","Indoor &amp; Outdoor Games","Sports facilities and recreational activities",             "250"],
          ["fa-solid fa-person-swimming",      "Swimming Pool",               "Kids' play area and swimming pool facilities",               "300"],
          ["fa-solid fa-map-location-dot",     "Nearby Attractions",          "Guided visits to local villages and attractions",            "350"],
        ];
        foreach ($activities as $a): ?>
        <div class="amenity-item" data-aos="fade-up" data-aos-delay="<?= $a[3] ?>">
          <i class="<?= $a[0] ?>"></i>
          <div>
            <h4 class="font-semibold mb-1"><?= $a[1] ?></h4>
            <p class="text-sm"><?= $a[2] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Amenities Tab -->
    <div class="tab-content" id="amenitiesTab">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $amenities = [
          ["fa-solid fa-bed",          "Spacious AC Rooms",           "Comfortable rooms with private sit-outs",              "50"],
          ["fa-solid fa-wifi",         "Wi-Fi Available",             "Stay connected with high-speed internet",              "100"],
          ["fa-solid fa-bath",         "Modern Washrooms",            "Clean, well-maintained bathrooms with hot water",      "150"],
          ["fa-solid fa-wine-bottle",  "Mini-Bar Available",          "Select rooms equipped with mini-bar facilities",       "200"],
          ["fa-solid fa-user-doctor",  "Doctor on Call",              "24/7 medical assistance available",                    "250"],
          ["fa-solid fa-wheelchair",   "Accessible &amp; Pet-Friendly","Wheelchair-accessible and pet-friendly rooms",        "300"],
          ["fa-solid fa-bowl-food",    "Multi-Cuisine Restaurant",    "In-house restaurant with diverse menu options",        "350"],
          ["fa-solid fa-route",        "Safari Assistance",           "Safari booking and pick-up/drop services",             "400"],
        ];
        foreach ($amenities as $a): ?>
        <div class="amenity-item" data-aos="fade-up" data-aos-delay="<?= $a[3] ?>">
          <i class="<?= $a[0] ?>"></i>
          <div>
            <h4 class="font-semibold mb-1"><?= $a[1] ?></h4>
            <p class="text-sm"><?= $a[2] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     GALLERY — black background
     ============================================================ -->
<section id="gallery" class="section-gallery py-12 md:py-20" style="background-color:var(--bg1)">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <p class="text-xs tracking-widest mb-4 font-light" style="color:var(--txt2)" data-aos="fade-down">
        VISUAL TOUR
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" style="color:var(--txt2)">Room Gallery</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
        <img src="https://wildmarkresort.com/images/delux4.jpeg" alt="Super Deluxe Room View" class="w-full h-80 object-cover"/>
      </div>
      <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
        <img src="https://wildmarkresort.com/images/delux5.JPG"  alt="Room Interior"          class="w-full h-80 object-cover"/>
      </div>
      <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
        <img src="https://wildmarkresort.com/images/delux7.JPG"  alt="Resort View"            class="w-full h-80 object-cover"/>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CALL TO ACTION — deep red gradient
     ============================================================ -->
<section class="section-cta py-16 md:py-24">
  <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
    <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="fade-up">
      Ready for Your Wilderness Retreat?
    </h2>
    <p class="text-lg md:text-xl mb-8" style="color:var(--bg1)" data-aos="fade-up" data-aos-delay="200">
      Book your Super Deluxe Room today and experience luxury in the heart of Kanha
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
      <a href="https://wildmarkresort.com/contact/"
        class="bg-white px-10 py-4 transition font-semibold text-lg"
        style="background-color:var(--bg2);color:var(--txt2)">
        BOOK NOW
      </a>
      <a href="tel:+919405529731/"
        class="border-2 px-10 py-4 transition font-semibold text-lg"
        style="border-color:var(--bg2);color:var(--bg2)">
        CALL US
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     AWARDS — bg2 background
     ============================================================ -->
<section class="section-awards py-12 md:py-20 px-4 md:px-6 overflow-hidden">
  <div class="container mx-auto max-w-7xl">
    <div class="text-center mb-10 md:mb-16">
      <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color:var(--txt2)" data-aos="fade-down">
        EXCELLENCE • RECOGNITION • TRUST
      </p>
      <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">
        Awards and Recognitions
      </h2>
      <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" style="color:var(--txt1);opacity:0.75"
         data-aos="fade-up" data-aos-delay="200">
        Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
      </p>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
      <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Award 2020"
               class="w-full h-auto max-w-[280px] object-contain award-image">
        </div>
      </div>
      <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Award 2021"
               class="w-full h-auto max-w-[280px] object-contain award-image">
        </div>
      </div>
      <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Award 2022"
               class="w-full h-auto max-w-[280px] object-contain award-image">
        </div>
      </div>
      <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
           style="background-color:#39DCA1;border-radius:9px">
        <div class="rounded-2xl overflow-hidden shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Award 2025"
               class="w-full h-full object-cover rounded-2xl award-image">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FAQ SECTION — bg2 background
     ============================================================ -->
<section class="section-faq py-12 md:py-20 px-4 md:px-6">
  <div class="mx-auto w-full" style="max-width:1280px;padding:0 24px">

    <div class="text-center mb-10 md:mb-14">
      <p class="text-xs tracking-widest mb-3 font-light" style="color:var(--txt2)" data-aos="fade-down">
        GUEST INFORMATION
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
      <p class="text-sm md:text-base max-w-3xl mx-auto" style="color:var(--txt1);opacity:0.75"
         data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
      </p>
    </div>

    <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

      <!-- LEFT COLUMN -->
      <div class="faq-col">
        <?php
        $faqs_left = [
          ["Where is Wildmark Resort located near Khatiya Gate in Kanha?",
           "Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris."],
          ["Why is Khatiya Gate preferred for Kanha resort booking?",
           "Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate."],
          ["How far is Wildmark Resort from Khatiya Safari Gate?",
           "Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris."],
          ["Is Wildmark Resort suitable for Kanha jungle safari bookings?",
           "Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services."],
          ["Can I book Kanha safari along with Wildmark Resort stay?",
           "Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together."],
          ["What types of rooms are available at Wildmark Resort Kanha?",
           "Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises."],
          ["Are meals included in Kanha resort booking at Wildmark Resort?",
           "Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan."],
          ["What is the best time to book a resort near Khatiya Gate Kanha?",
           "The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available."],
          ["Is advance booking required for Kanha resorts near Khatiya Gate?",
           "Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season."],
          ["Is Wildmark Resort open during the monsoon season?",
           "The resort remains open, and Buffer safaris are available during monsoon season."],
        ];
        foreach ($faqs_left as $faq): ?>
        <div class="faq-item rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
            <span class="font-serif"><?= $faq[0] ?></span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 border-t">
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
          ["Is Wildmark Resort family friendly?",
           "Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests."],
          ["Does Wildmark Resort provide pickup and drop services?",
           "Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance."],
          ["Is Wildmark Resort budget friendly compared to other Kanha resorts?",
           "Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options."],
          ["Are group bookings allowed at Wildmark Resort Kanha?",
           "Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts."],
          ["Does Wildmark Resort offer forest or jungle view rooms?",
           "Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone."],
          ["Is Wildmark Resort safe for solo travelers?",
           "Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers."],
          ["What documents are required at check-in for Kanha resorts?",
           "Guests must carry a valid government issued photo ID at the time of check in."],
          ["Does Wildmark Resort offer activities besides jungle safari?",
           "Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort."],
          ["How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?",
           "Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate."],
          ["How can I get the best price for Kanha resort booking at Khatiya Gate?",
           "Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price."],
        ];
        foreach ($faqs_right as $faq): ?>
        <div class="faq-item rounded-xl overflow-hidden">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
            <span class="font-serif"><?= $faq[0] ?></span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 border-t">
              <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SPECIAL OFFER FLOATING BUTTON
     ============================================================ -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd"/>
    </svg>
    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">New</span>
</button>

<!-- ============================================================
     SPECIAL OFFER POPUP
     ============================================================ -->
<div id="specialOfferPopup"
    class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[100] hidden items-center justify-center p-4"
    onclick="closeIfClickedOutside(event)">
    <div class="border-2 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative animate-slideIn"
        style="background-color: var(--bg2); border-color: var(--text2);"
        onclick="event.stopPropagation()">

        <button onclick="toggleSpecialOfferPopup()" class="absolute top-4 right-4 transition z-10" style="color: var(--text1);"
            onmouseover="this.style.color='var(--text2)';" onmouseout="this.style.color='var(--text1)';">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="p-6 md:p-8 rounded-t-2xl text-white" style="background: linear-gradient(to right, var(--text2), #b01e1e);">
            <div class="flex items-center gap-3 mb-2">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                </svg>
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white" style="color: var(--bg2) !important;">Special Offers</h3>
            </div>
            <p class="text-sm" style="color: rgba(248,238,223,0.9);">Limited time deals on resort packages & safari tours</p>
        </div>

        <div class="p-6 md:p-8 space-y-6">
            <!-- Offer 1 -->
            <div class="border rounded-xl p-5 transition" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2" style="background-color: var(--text2);">BESTSELLER</span>
                        <h4 class="text-xl font-serif font-bold" style="color: var(--text1) !important;">2N/3D Resort + Safari Package</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-sm line-through" style="color: rgba(0,0,0,0.4);">₹15,000</p>
                        <p class="text-2xl font-bold" style="color: var(--text2);">₹12,499</p>
                    </div>
                </div>
                <ul class="text-sm space-y-2 mb-4" style="color: var(--text1);">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>2 Nights Stay at Wildmark Resort (Near Khatia Gate)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>4 Jungle Safaris (Morning + Evening)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>All Meals Included (Breakfast, Lunch, Dinner)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Complimentary Safari Permit Assistance</li>
                </ul>
                <a href="https://wildmarkresort.com/contact/" class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition" style="background-color: var(--text2);">BOOK NOW</a>
            </div>

            <!-- Offer 2 -->
            <div class="border rounded-xl p-5 transition" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2" style="background-color: #8E1616">EARLY BIRD</span>
                        <h4 class="text-xl font-serif font-bold" style="color: var(--text1) !important;">Advance Booking Discount</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold" style="color: var(--text2);">20% OFF</p>
                    </div>
                </div>
                <p class="text-sm mb-4" style="color: var(--text1);">Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March 31, 2025.</p>
                <a href="https://wildmarkresort.com/contact/" class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition" style="background-color: var(--text2);">BOOK NOW</a>
            </div>

            <!-- Offer 3 -->
            <div class="border rounded-xl p-5 transition" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2" style="background-color: #8E1616;">GROUP OFFER</span>
                        <h4 class="text-xl font-serif font-bold" style="color: var(--text1) !important;">Group Booking Special</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold" style="color: var(--text2);">₹10,999</p>
                        <p class="text-xs" style="color: rgba(0,0,0,0.5);">per person</p>
                    </div>
                </div>
                <p class="text-sm mb-4" style="color: var(--text1);">Special rates for groups of 6+ people. Perfect for families, corporate outings, and wildlife photography tours.</p>
                <a href="https://wildmarkresort.com/contact/" class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition" style="background-color: var(--text2);">Book Now</a>
            </div>
        </div>

        <div class="border-t p-4 text-center rounded-b-2xl" style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.3);">
            <p class="text-sm font-semibold" style="color: var(--text2);">⏰ Offers valid till March 31, 2025 | Terms & Conditions Apply</p>
        </div>
    </div>
</div>

<!-- ============================================================
     WHATSAPP BUTTON
     ============================================================ -->
<a href="https://wa.me/9405529731/" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
    </svg>
</a>

<!-- ============================================================
     JAVASCRIPT
     ============================================================ -->
<script>
// Tab functionality
document.querySelectorAll('.tab-button').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var target = this.getAttribute('data-tab');
    document.querySelectorAll('.tab-button').forEach(function(b) { b.classList.remove('active'); });
    document.querySelectorAll('.tab-content').forEach(function(c) { c.classList.remove('active'); });
    this.classList.add('active');
    document.getElementById(target).classList.add('active');
  });
});

// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
  var faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function(item) {
    var question = item.querySelector('.faq-question');
    var answer   = item.querySelector('.faq-answer');
    var icon     = item.querySelector('.faq-icon');
    question.addEventListener('click', function() {
      var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
      faqItems.forEach(function(other) {
        var a  = other.querySelector('.faq-answer');
        var ic = other.querySelector('.faq-icon');
        if (a)  a.style.maxHeight  = '0px';
        if (ic) ic.style.transform = 'rotate(0deg)';
      });
      if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        if (icon) icon.style.transform = 'rotate(180deg)';
      }
    });
  });
});

// FAQ responsive resize
function handleFaqResize() {
  var grid = document.querySelector('.faq-grid');
  if (!grid) return;
  grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}
window.addEventListener('load',   handleFaqResize);
window.addEventListener('resize', handleFaqResize);

// Special Offer Popup
function toggleSpecialOfferPopup() {
  var popup = document.getElementById('specialOfferPopup');
  var hidden = popup.classList.contains('hidden');
  popup.classList.toggle('hidden', !hidden);
  popup.classList.toggle('flex',    hidden);
  document.body.style.overflow = hidden ? 'hidden' : '';
}
function closeIfClickedOutside(event) {
  if (event.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
}
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    var popup = document.getElementById('specialOfferPopup');
    if (!popup.classList.contains('hidden')) toggleSpecialOfferPopup();
  }
});
</script>

<?php include 'includes/footer.php'; ?>