<?php 
$pageTitle = "Super Delux Rooms - Wildmark Resort Kanha";
include 'includes/header.php'; 
?>


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
                    The rooms offer a refined blend of comfort and natural elegance, thoughtfully created for guests who
                    appreciate both modern convenience and a peaceful atmosphere. The rooms are air conditioned and well
                    appointed, each room is designed with clear attention to its detail. The simple interiors feature
                    contemporary furnishings, tasteful décor and essential amenities that ensures for a comfortable and
                    seamless stay.
                </p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    The resort is located inside the buffer zone and allows the guests to enjoy the tranquil garden
                    landscapes and serene forest surroundings. The landscape setting provides a quiet and relaxed
                    atmosphere, where all mornings begin with natural light and melodies sounds of the birds from the
                    outdoors, and evenings settle into calm surroundings.
                </p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    Every room includes a private sit-out area overlooking the open skies. The outdoor extension of your
                    living space offers a perfect setting to relax with a book, enjoy a cup of tea, or simply unwind
                    after a day of exploration. The open shower concept adds a distinctive touch, bringing a sense of
                    freshness and connection to nature while maintaining privacy.
                </p>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="rounded-2xl overflow-hidden shadow-2xl" style="border:1px solid rgba(142,22,22,0.2)">
                    <img src="https://wildmarkresort.com/images/delux2.jpeg"
                        alt="Super Deluxe Room Interior with Open Shower"
                        class="w-full h-[400px] md:h-[450px] object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>

        <!-- Row 2 — Image Left, Text Right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start">
            <div class="relative order-2 lg:order-1" data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-2xl" style="border:1px solid rgba(142,22,22,0.2)">
                    <img src="https://wildmarkresort.com/images/delux3.jpg"
                        alt="Super Deluxe Room Garden View and Sitout"
                        class="w-full h-[450px] md:h-[550px] object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>
            <div class="space-y-6 order-1 lg:order-2" data-aos="fade-left">
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    Inside the room, a cozy lounge seating area creates a comfortable space to rest or review
                    photographs from your safaris. A mini fridge is provided for added convenience, along with premium
                    bathroom amenities that enhance the overall experience. The layout is generous and practical,
                    allowing guests to move comfortably and feel at ease throughout their stay.
                </p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    These rooms are particularly well suited for couples, honeymooners, solo travelers, nature
                    enthusiasts, and wildlife photographers. The tranquil garden views and proximity to the forest
                    create an ideal environment for relaxation and inspiration.
                </p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    The property is also pet friendly, allowing guests to travel with their furry companions without
                    compromise. Open green spaces and thoughtful planning ensure a comfortable stay for both pets and
                    their owners.
                </p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    Accessibility has been given high priority. All rooms are designed with wheelchair access, and
                    guests can move easily from their rooms to the restaurant and throughout the property. Specially and
                    differently abled guests can experience the same level of comfort and independence, ensuring a
                    welcoming and inclusive environment for everyone.
                </p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color:var(--txt1);opacity:0.8">
                    Overall, the stay combines thoughtful design, natural surroundings, and practical comfort to create
                    a relaxing and rejuvenating experience.
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
                Experience Luxurious &amp; comfort blended with thoughtful design in our meticulously crafted
                air-conditioned Super Deluxe Rooms.
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
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" style="color:var(--txt2)">Room Gallery
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="https://wildmarkresort.com/images/delux4.jpeg" alt="Super Deluxe Room View"
                    class="w-full h-80 object-cover" />
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="https://wildmarkresort.com/images/delux5.JPG" alt="Room Interior"
                    class="w-full h-80 object-cover" />
            </div>
            <div class="gallery-item" data-aos="fade-up" >
                <img src="https://wildmarkresort.com/images/delux7.JPG" alt="Resort View"
                    class="w-full h-80 object-cover" />
            </div>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section class="section-cta py-16 md:py-16">
    <div class="container mx-auto max-w-8xl px-4 md:px-6 text-center">
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="fade-up">
            Ready for Your Wilderness Retreat?
        </h2>
        <p class="text-lg md:text-xl mb-8" style="color:var(--bg1)" data-aos="fade-up" data-aos-delay="200">
            Book your Super Deluxe Room today and experience luxury in the heart of Kanha
        </p>
    </div>
    <div class="max-w-7xl mx-auto px-4 md:px-6 pt-4">
        <div class="grid lg:grid-cols-2 gap-8 md:gap-12">

            <!-- Left Side - Contact Form -->
            <div data-aos="fade-right">
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fa-solid fa-paw text-amber-500 text-2xl"></i>
                        <span class="text-amber-500 text-xs tracking-widest font-light">CONTACT WITH US</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
                        Send us a Message
                    </h2>
                </div>

                <?php include 'includes/contact-form.php'; ?>
            </div>

            <!-- Right Side - Contact Info -->
            <div data-aos="fade-left" class="flex">
                <div class="map-container rounded-xl overflow-hidden w-full h-full min-h-[460px] lg:min-h-[440px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0234567890123!2d80.5118205!3d22.315946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                        class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

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
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in"
                >
                Awards and Recognitions
            </h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed"
                style="color:var(--txt1);opacity:0.75" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Award 2020"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Award 2021"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  >
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Award 2022"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  
                style="background-color:#39DCA1;border-radius:9px">
                <div
                    class="rounded-2xl overflow-hidden shadow-2xl flex items-center justify-center min-h-[320px] md:min-h-[380px]">
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
            <p class="text-sm md:text-base max-w-3xl mx-auto" style="color:var(--txt1);opacity:0.75" data-aos="fade-up"
                data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" >

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
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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
     JAVASCRIPT
     ============================================================ -->
<script>
// Tab functionality
document.querySelectorAll('.tab-button').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var target = this.getAttribute('data-tab');
        document.querySelectorAll('.tab-button').forEach(function(b) {
            b.classList.remove('active');
        });
        document.querySelectorAll('.tab-content').forEach(function(c) {
            c.classList.remove('active');
        });
        this.classList.add('active');
        document.getElementById(target).classList.add('active');
    });
});

// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        var question = item.querySelector('.faq-question');
        var answer = item.querySelector('.faq-answer');
        var icon = item.querySelector('.faq-icon');
        question.addEventListener('click', function() {
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(function(other) {
                var a = other.querySelector('.faq-answer');
                var ic = other.querySelector('.faq-icon');
                if (a) a.style.maxHeight = '0px';
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
window.addEventListener('load', handleFaqResize);
window.addEventListener('resize', handleFaqResize);

// Special Offer Popup
function toggleSpecialOfferPopup() {
    var popup = document.getElementById('specialOfferPopup');
    var hidden = popup.classList.contains('hidden');
    popup.classList.toggle('hidden', !hidden);
    popup.classList.toggle('flex', hidden);
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