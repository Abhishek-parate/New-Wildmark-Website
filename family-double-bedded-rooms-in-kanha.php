<?php 
$pageTitle = "Family Double Bedded Rooms - Wildmark Resort Kanha";
include 'includes/header.php'; 
?>

<style>
/* Only minimal CSS that Tailwind can't do — animations & FAQ accordion logic */
@keyframes slideIn {
  from { opacity: 0; transform: scale(0.9) translateY(20px); }
  to   { opacity: 1; transform: scale(1)   translateY(0);    }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }

.tab-content         { display: none; }
.tab-content.active  { display: block; }

.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  align-items: start;
}
.faq-col { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
.faq-question { min-height: 64px; height: 64px; }
.faq-question span { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block; font-size: 15px !important; }

@media screen and (max-width: 860px) {
  .faq-grid { grid-template-columns: 1fr !important; }
  .faq-question { height: auto !important; min-height: unset !important; }
  .faq-question span { white-space: normal !important; overflow: visible !important; text-overflow: unset !important; font-size: 14px !important; }
}

/* Gallery hover */
.gallery-item { position: relative; overflow: hidden; border-radius: 1rem; cursor: pointer; transition: transform 0.3s ease; }
.gallery-item:hover { transform: scale(1.02); }
.gallery-item img { transition: transform 0.5s ease; }
.gallery-item:hover img { transform: scale(1.1); }
</style>

<!-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/Tiger.webp') center/cover no-repeat">
  <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</header>

<!-- ═══════════════════════════════════════════
     DESCRIPTION  — bg: #F8EEDF  text: #000
═══════════════════════════════════════════ -->
<section class="py-12 md:py-20" style="background-color:#F8EEDF">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">

    <div class="text-center mb-12">
      <p class="text-xs tracking-widest mb-4 font-light" style="color:#8E1616" data-aos="fade-down">
        SPACIOUS &amp; COMFORTABLE
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6 text-black" data-aos="zoom-in">
        Family Double Bedded Rooms
      </h2>
    </div>

    <!-- Row 1 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center mb-12">
      <div class="space-y-6" data-aos="fade-right">
        <p class="text-black/75 text-sm md:text-base leading-relaxed text-justify">
          Family Double Bedded Room are designed to offer relax able space, comfort and suitable for small families and groups traveling together for a memorable Stay. The well-equipped rooms are thoughtfully planned and well-appointed for a relax able atmosphere for everyone The rooms comes with two double beds, a sofa set to sit and relax and accommodate four to six guests, making it ideal for parents traveling with children, groups of friends, or extended family members on a nature getaway.
        </p>
        <p class="text-black/75 text-sm md:text-base leading-relaxed text-justify">
          The room is fully air conditioned ensuring a pleasant indoor atmosphere throughout the year. The layout allows for easy movement, with enough space for luggage, personal belongings, and shared living. The interiors are practical and inviting, combining comfort with simple elegance. The rooms are with enough natural light filters in through large windows, offering peaceful views of the surrounding gardens and greenery.
        </p>
      </div>
      <div class="relative" data-aos="fade-left">
        <div class="rounded-2xl overflow-hidden shadow-2xl border" style="border-color:rgba(142,22,22,0.2)">
          <img src="https://wildmarkresort.com/images/family1.jpeg" alt="Family Double Bedded Room Interior"
               class="w-full h-[200px] md:h-[300px] object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
      <div class="relative order-2 lg:order-1" data-aos="fade-right">
        <div class="rounded-2xl overflow-hidden shadow-2xl border" style="border-color:rgba(142,22,22,0.2)">
          <img src="https://wildmarkresort.com/images/double-beded.jpeg" alt="Family Room Outdoor Sitout"
               class="w-full h-[450px] md:h-[560px] object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>
      <div class="space-y-6 order-1 lg:order-2" data-aos="fade-left">
        <p class="text-black/75 text-sm md:text-base leading-relaxed text-justify">
          Family Double Bedded Room includes a outdoor sit-out area that extends your living space outdoors. This is a perfect spot for morning tea, casual conversations, or quiet moments while children play nearby in the play area. The garden and nature views create a calm setting where guests can unwind after a day of sightseeing or safari excursions.
        </p>
        <p class="text-black/75 text-sm md:text-base leading-relaxed text-justify">
          Modern conveniences are thoughtfully included to make your stay smooth and enjoyable. A tea and coffee maker is provided in the room, along with the necessary essentials, allowing guests to prepare a warm beverage at any time. Complimentary high-speed WiFi ensures you can stay connected, whether for sharing travel photos, catching up on work, or planning the next day's activities.
        </p>
        <p class="text-black/75 text-sm md:text-base leading-relaxed text-justify">
          The resort is wheelchair accessible in and around the property, ensuring that specially and differently abled guests can move comfortably between rooms, common areas to the restaurant. Overall, the Family Double Bedded Rooms offer a balanced combination of space, comfort, and essential amenities in the midst of nature.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════
     ROOM HIGHLIGHTS — bg: #F8EEDF  cards: #E8C999
═══════════════════════════════════════════ -->
<section class="py-12 md:py-20" style="background-color:#F8EEDF">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-5xl font-serif mb-4 text-black" data-aos="zoom-in">Room Highlights</h2>
      <h3 class="text-base md:text-lg font-serif tracking-wide" style="color:#8E1616" data-aos="fade-up" data-aos-delay="100">
        Experience comfort blended with thoughtful design in our meticulously crafted Super Deluxe Family Room.
      </h3>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

      <!-- Card macro via repeated blocks -->
      <!-- Highlight 1 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-snowflake text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Luxurious AC Room</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          Luxurious air-conditioned and comfortable room designed for your ultimate relaxation and a memorable family stay.
        </p>
      </div>

      <!-- Highlight 2 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="200">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-couch text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Cozy Sofa Seating</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          A cozy sofa set for a comfortable seating area — perfect to unwind, relax, and spend quality time with family.
        </p>
      </div>

      <!-- Highlight 3 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="300">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-leaf text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Peaceful Garden View</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          Room overlooking a peaceful garden — wake up to lush greenery and soothing natural views every morning.
        </p>
      </div>

      <!-- Highlight 4 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-door-open text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Spacious Dressing Area</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          Spacious dressing area with wardrobes to keep your belongings organized and your space clutter-free.
        </p>
      </div>

      <!-- Highlight 5 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="200">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-spa text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Premium Bathroom Amenities</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          Modern bathroom equipped with premium amenities for a truly luxurious and refreshing experience.
        </p>
      </div>

      <!-- Highlight 6 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="300">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-tree text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Tranquil Garden-Facing Room</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          Surrounded by tranquil greenery, this luxurious garden-facing room is designed to offer a relaxed, private, and rejuvenating stay.
        </p>
      </div>

      <!-- Highlight 7 -->
      <div class="rounded-2xl p-8 hover:-translate-y-1 transition-all duration-300 border"
           style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)"
           data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6"
             style="background-color:#8E1616">
          <i class="fas fa-wheelchair text-2xl text-white"></i>
        </div>
        <h4 class="text-xl font-serif font-semibold mb-3 text-black">Wheelchair Accessible</h4>
        <p class="text-black/70 text-sm leading-relaxed text-justify">
          All rooms and resort surroundings are fully accessible by wheelchair for our differently &amp; specially abled guests.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     WHAT WE OFFER — bg: #F8EEDF  tab active: #8E1616
═══════════════════════════════════════════ -->
<section id="amenities" class="py-12 md:py-20" style="background-color:#F8EEDF">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <p class="text-xs tracking-widest mb-4 font-light" style="color:#8E1616" data-aos="fade-down">
        COMPLETE EXPERIENCE
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-8 text-black" data-aos="zoom-in">What We Offer</h2>
    </div>

    <!-- Tabs Nav -->
    <div class="flex justify-center overflow-x-auto mb-12 border-b-2" style="border-color:#E8C999" data-aos="fade-up">
      <button class="tab-button relative px-6 py-4 font-semibold text-sm md:text-base whitespace-nowrap transition-all duration-300 border-b-4 border-transparent text-black/50 hover:text-black active"
              id="tab-btn-activities" data-tab="activities"
              style="border-bottom-color:#8E1616;color:#8E1616">
        Activities at Resort
      </button>
      <button class="tab-button relative px-6 py-4 font-semibold text-sm md:text-base whitespace-nowrap transition-all duration-300 border-b-4 border-transparent text-black/50 hover:text-black"
              id="tab-btn-amenitiesTab" data-tab="amenitiesTab">
        Room Amenities
      </button>
    </div>

    <!-- Activities Tab -->
    <div class="tab-content active" id="activities">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php
        $activities = [
          ["fa-solid fa-binoculars",              "Jungle Safaris",               "Guided jungle safaris with night drive options",          "50"],
          ["fa-solid fa-dove",                    "Birdwatching &amp; Nature Walks","Early morning birdwatching tours with naturalists",      "100"],
          ["fa-solid fa-fire",                    "Bonfire Evenings",             "Private dining with bonfire under the stars",             "150"],
          ["fa-solid fa-utensils",                "Bush-Style Outdoor Meals",     "Authentic outdoor dining experience in nature",           "200"],
          ["fa-solid fa-table-tennis-paddle-ball","Indoor &amp; Outdoor Games",   "Sports facilities and recreational activities",           "250"],
          ["fa-solid fa-person-swimming",         "Swimming Pool",                "Kids' play area and swimming pool facilities",            "300"],
          ["fa-solid fa-map-location-dot",        "Nearby Attractions",           "Guided visits to local villages and attractions",         "350"],
        ];
        foreach ($activities as $a): ?>
        <div class="flex items-start gap-3 mb-4" data-aos="fade-up" data-aos-delay="<?= $a[3] ?>">
          <i class="<?= $a[0] ?> text-xl mt-0.5 flex-shrink-0" style="color:#8E1616"></i>
          <div>
            <h4 class="font-semibold text-black mb-1"><?= $a[1] ?></h4>
            <p class="text-sm text-black/60"><?= $a[2] ?></p>
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
          ["fa-solid fa-bed",         "Spacious AC Rooms",            "Comfortable rooms with private sit-outs",            "50"],
          ["fa-solid fa-wifi",        "Wi-Fi Available",              "Stay connected with high-speed internet",            "100"],
          ["fa-solid fa-bath",        "Modern Washrooms",             "Clean, well-maintained bathrooms with hot water",    "150"],
          ["fa-solid fa-wine-bottle", "Mini-Bar Available",           "Select rooms equipped with mini-bar facilities",     "200"],
          ["fa-solid fa-user-doctor", "Doctor on Call",               "24/7 medical assistance available",                  "250"],
          ["fa-solid fa-wheelchair",  "Accessible &amp; Pet-Friendly","Wheelchair-accessible and pet-friendly rooms",       "300"],
          ["fa-solid fa-bowl-food",   "Multi-Cuisine Restaurant",     "In-house restaurant with diverse menu options",      "350"],
          ["fa-solid fa-route",       "Safari Assistance",            "Safari booking and pick-up/drop services",           "400"],
        ];
        foreach ($amenities as $a): ?>
        <div class="flex items-start gap-3 mb-4" data-aos="fade-up" data-aos-delay="<?= $a[3] ?>">
          <i class="<?= $a[0] ?> text-xl mt-0.5 flex-shrink-0" style="color:#8E1616"></i>
          <div>
            <h4 class="font-semibold text-black mb-1"><?= $a[1] ?></h4>
            <p class="text-sm text-black/60"><?= $a[2] ?></p>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════
     GALLERY — black bg for image contrast
═══════════════════════════════════════════ -->
<section id="gallery" class="py-12 md:py-20 bg-#E8C999">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">
    <div class="text-center mb-12">
      <p class="text-xs tracking-widest mb-4 font-light" style="color:#8E1616" data-aos="fade-down">VISUAL TOUR</p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" style="color:#8E1616" data-aos="zoom-in">Room Gallery</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
        <img src="https://wildmarkresort.com/images/family2.jpeg" alt="Family Room View"    class="w-full h-80 object-cover"/>
      </div>
      <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
        <img src="https://wildmarkresort.com/images/family1.jpeg" alt="Resort Exterior"     class="w-full h-80 object-cover"/>
      </div>
      <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
        <img src="https://wildmarkresort.com/images/family4.jpg"  alt="Resort Gardens"      class="w-full h-80 object-cover"/>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     CTA — deep red gradient
═══════════════════════════════════════════ -->
<section class="py-16 md:py-24" style="background:linear-gradient(to right,#8E1616,#5a0e0e)">
  <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
    <h2 class="text-3xl md:text-5xl font-serif mb-6 text-white" data-aos="fade-up">
      Create Unforgettable Family Memories
    </h2>
    <p class="text-lg md:text-xl mb-8" style="color:#E8C999" data-aos="fade-up" data-aos-delay="200">
      Book your Family Double Bedded Room now and experience the perfect blend of comfort and adventure
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
      <a href="https://wildmarkresort.com/contact/"
         class="px-10 py-4 font-semibold text-lg transition hover:opacity-90"
         style="background-color:#F8EEDF;color:#8E1616">
        BOOK NOW
      </a>
      <a href="tel:+918830996719"
         class="px-10 py-4 font-semibold text-lg border-2 transition hover:opacity-90"
         style="border-color:#F8EEDF;color:#F8EEDF">
        CALL US
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     AWARDS — bg: #F8EEDF
═══════════════════════════════════════════ -->
<section class="py-12 md:py-20 px-4 md:px-6 overflow-hidden" style="background-color:#F8EEDF">
  <div class="container mx-auto max-w-7xl">
    <div class="text-center mb-10 md:mb-16">
      <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color:#8E1616" data-aos="fade-down">
        EXCELLENCE • RECOGNITION • TRUST
      </p>
      <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6 text-black"
          data-aos="zoom-in" data-aos-duration="1000">
        Awards and Recognitions
      </h2>
      <p class="text-sm md:text-base text-black/70 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed"
         data-aos="fade-up" data-aos-delay="200">
        Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
      </p>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
      <div class="group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 group-hover:shadow-[0_12px_30px_rgba(142,22,22,0.2)] flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Award 2020" class="w-full h-auto max-w-[280px] object-contain transition-transform duration-300 group-hover:scale-105">
        </div>
      </div>
      <div class="group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 group-hover:shadow-[0_12px_30px_rgba(142,22,22,0.2)] flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Award 2021" class="w-full h-auto max-w-[280px] object-contain transition-transform duration-300 group-hover:scale-105">
        </div>
      </div>
      <div class="group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 group-hover:shadow-[0_12px_30px_rgba(142,22,22,0.2)] flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Award 2022" class="w-full h-auto max-w-[280px] object-contain transition-transform duration-300 group-hover:scale-105">
        </div>
      </div>
      <div class="group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
           style="background-color:#39DCA1;border-radius:9px">
        <div class="rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
          <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Award 2025" class="w-full h-full object-cover rounded-2xl">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     FAQ — bg: #F8EEDF  cards: white
═══════════════════════════════════════════ -->
<section class="py-12 md:py-20 px-4 md:px-6" style="background-color:#F8EEDF">
  <div class="mx-auto w-full" style="max-width:1280px;padding:0 24px">

    <div class="text-center mb-10 md:mb-14">
      <p class="text-xs tracking-widest mb-3 font-light" style="color:#8E1616" data-aos="fade-down">GUEST INFORMATION</p>
      <h2 class="text-3xl md:text-5xl font-serif mb-4 text-black" data-aos="zoom-in">Wildmark Resort FAQs</h2>
      <p class="text-sm md:text-base text-black/70 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
      </p>
    </div>

    <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

      <!-- LEFT COLUMN -->
      <div class="faq-col">
        <?php
        $faqs = [
          ["Where is Wildmark Resort located near Khatiya Gate in Kanha?",
           "Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris."],
          ["Why is Khatiya Gate preferred for Kanha resort booking?",
           "Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate."],
          ["How far is Wildmark Resort from Khatiya Safari Gate?",
           "Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning & evening safaris."],
          ["Is Wildmark Resort suitable for Kanha jungle safari bookings?",
           "Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services."],
          ["Can I book Kanha safari along with Wildmark Resort stay?",
           "Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together."],
          ["What types of rooms are available at Wildmark Resort Kanha?",
           "Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly & has provisions for differently & specially abled guests with wheel chair access inside the resort premises."],
          ["Are meals included in Kanha resort booking at Wildmark Resort?",
           "Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan."],
          ["What is the best time to book a resort near Khatiya Gate Kanha?",
           "The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available."],
          ["Is advance booking required for Kanha resorts near Khatiya Gate?",
           "Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season."],
          ["Is Wildmark Resort open during the monsoon season?",
           "The resort remains open, and Buffer safaris are available during monsoon season."],
        ];
        foreach ($faqs as $faq): ?>
        <div class="faq-item bg-white border rounded-xl overflow-hidden" style="border-color:rgba(142,22,22,0.18)">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition hover:bg-[#E8C999]">
            <span class="font-serif text-black"><?= $faq[0] ?></span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color:#8E1616"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)">
              <p class="text-sm md:text-base text-black/80 leading-relaxed"><?= $faq[1] ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="faq-col">
        <?php
        $faqs2 = [
          ["Is Wildmark Resort family friendly?",
           "Yes, Wildmark Resort is family & pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently & specially abled guests."],
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
        foreach ($faqs2 as $faq): ?>
        <div class="faq-item bg-white border rounded-xl overflow-hidden" style="border-color:rgba(142,22,22,0.18)">
          <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition hover:bg-[#E8C999]">
            <span class="font-serif text-black"><?= $faq[0] ?></span>
            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color:#8E1616"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color:#E8C999;border-color:rgba(142,22,22,0.15)">
              <p class="text-sm md:text-base text-black/80 leading-relaxed"><?= $faq[1] ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     SPECIAL OFFER FLOATING BUTTON
═══════════════════════════════════════════ -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    style="background:linear-gradient(to right,#8E1616,#6b1010)"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd"
        d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
        clip-rule="evenodd"/>
    </svg>
    <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">New</span>
</button>

<!-- ═══════════════════════════════════════════
     SPECIAL OFFER POPUP
═══════════════════════════════════════════ -->
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

<!-- ═══════════════════════════════════════════
     WHATSAPP
═══════════════════════════════════════════ -->
<a href="https://wa.me/8830996719" target="_blank"
   class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110">
  <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>

<!-- ═══════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════ -->
<script>
// ── Tabs ──
document.querySelectorAll('.tab-button').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var target = this.getAttribute('data-tab');
    // reset all
    document.querySelectorAll('.tab-button').forEach(function(b) {
      b.style.color          = '';
      b.style.borderBottomColor = 'transparent';
      b.classList.remove('active');
    });
    document.querySelectorAll('.tab-content').forEach(function(c) { c.classList.remove('active'); });
    // activate clicked
    this.classList.add('active');
    this.style.color             = '#8E1616';
    this.style.borderBottomColor = '#8E1616';
    document.getElementById(target).classList.add('active');
  });
});

// ── FAQ Accordion ──
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.faq-item').forEach(function(item) {
    var q    = item.querySelector('.faq-question');
    var ans  = item.querySelector('.faq-answer');
    var icon = item.querySelector('.faq-icon');
    q.addEventListener('click', function() {
      var open = ans.style.maxHeight && ans.style.maxHeight !== '0px';
      // close all
      document.querySelectorAll('.faq-item').forEach(function(other) {
        var a = other.querySelector('.faq-answer');
        var i = other.querySelector('.faq-icon');
        if (a) a.style.maxHeight  = '0px';
        if (i) i.style.transform  = 'rotate(0deg)';
      });
      if (!open) {
        ans.style.maxHeight  = ans.scrollHeight + 'px';
        if (icon) icon.style.transform = 'rotate(180deg)';
      }
    });
  });
});

// ── FAQ responsive ──
function handleFaqResize() {
  var grid = document.querySelector('.faq-grid');
  if (!grid) return;
  grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}
window.addEventListener('load',   handleFaqResize);
window.addEventListener('resize', handleFaqResize);

// ── Special Offer Popup ──
function toggleSpecialOfferPopup() {
  var p = document.getElementById('specialOfferPopup');
  var h = p.classList.contains('hidden');
  p.classList.toggle('hidden', !h);
  p.classList.toggle('flex',    h);
  document.body.style.overflow = h ? 'hidden' : '';
}
function closeIfClickedOutside(e) {
  if (e.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
}
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    var p = document.getElementById('specialOfferPopup');
    if (!p.classList.contains('hidden')) toggleSpecialOfferPopup();
  }
});
</script>

<?php include 'includes/footer.php'; ?>