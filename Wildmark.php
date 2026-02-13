<?php 
// Set page-specific title
$pageTitle = "Wildmark - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>

    /* Amenities Icon Colors */
    .amenity-icon {
        color: #d4a574;
    }

    /* Gallery Hover Effect */
    .gallery-item {
        position: relative;
        overflow: hidden;
    }

    .gallery-item img {
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-item::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.5));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover::after {
        opacity: 1;
    }

    /* Map responsive */
    .map-container {
        position: relative;
        width: 100%;
        height: 400px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Fix container overflow */
    section {
        overflow-x: hidden;
    }

    /* Responsive text */
    @media (max-width: 768px) {
        body {
            font-size: 14px;
        }

        h2 {
            font-size: 1.5rem;
        }

        h3 {
            font-size: 1.25rem;
        }

        /* Ensure all text wraps properly */
        p,
        span,
        a,
        li {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    }
    </style>


    <!-- Spacer -->
    <div class="h-[60px] md:h-[80px]"></div>

    <!-- Hero Banner -->
    <header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
        style="background: url('images/wildmark1.JPG') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </header>

    <!-- Main Content Section -->
    <section class="py-12 md:py-16 bg-neutral-900">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-start">
                <!-- Left Column - Text Content -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-serif font-bold text-amber-100 mb-4">
                        Wild Mark Resort – Kanha Accommodation
                    </h2>

                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        Less than a kilometer from the main Khatia Gate, Wildmark Resort
                        is the best resort in Kanha.
                    </p>

                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        Once you arrive at Wildmark Kanha, you are greeted by a spacious
                        lawn and colonial-style bungalows. The rooms have all the modern
                        amenities like air conditioning, changing area, hot and cold water
                        facilities.
                    </p>

                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        A sprawling luxurious bungalow with 7 luxurious and spacious rooms
                        and private sit out areas and swimming pool. A common area to sit
                        down and relax with kids and maybe play a game of carrom. It is
                        the true budget friendly option at Kanha Tiger Reserve.
                    </p>

                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        With rates as inviting as Rs. 7999 for a super deluxe stay and Rs.
                        11999 for a family room, you'll be glad you took the plunge.
                    </p>
                </div>

                <!-- Right Column - Images -->
                <div class="space-y-4" data-aos="fade-left">
                    <div class="rounded-xl overflow-hidden">
                        <img src="images/delux3.JPG" class="w-full h-64 object-cover" alt="Resort Interior" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-xl overflow-hidden">
                            <img src="images/delux5.JPG" class="w-full h-40 object-cover" alt="Room" />
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="images/delux7.JPG" class="w-full h-40 object-cover" alt="Dining" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Showcase Section -->
    <section class="py-12 md:py-16 bg-black">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <!-- Room Image -->
                <div data-aos="fade-right">
                    <img src="images/family1.jpeg" class="w-full h-80 md:h-96 object-cover rounded-xl"
                        alt="Deluxe Room" />
                </div>

                <!-- Room Description -->
                <div data-aos="fade-left">
                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        It's a home away from home where you can give a lot of time with
                        the family. There will be no phone calls or internet to drag you
                        to work on a holiday. You will not be cut off from the world but
                        will be tied up to your near and dear ones.
                    </p>
                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        In the evening you can go for a small drive to the sunset point
                        and also go to the waterfalls. These are just a few options if you
                        are not opting for too many tiger safaris at Kanha Tiger Reserve.
                    </p>

                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        There are many who like to keep it to a few safaris and more of
                        rest and recreation. And if you are a keen photographer then the
                        open Jeep safaris and the Kanha landscape is all yours.
                    </p>

                    <p class="text-gray-300 mb-3 leading-relaxed text-sm md:text-base text-justify">
                        At Wild Mark Kanha, we arrange wildlife safaris in Kanha Zone,
                        Kisli Zone, Sarhi Zone & Mukki Zone and Buffer areas.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base text-justify">
                        If you want to beat the heat, then you have the option of night
                        safaris. The thrill of the night safaris is higher, and you must
                        come to Wild Mark Kanha to experience it.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities & Activities Section -->
    <section class="py-12 md:py-16 bg-neutral-900">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-serif font-bold text-amber-100 mb-8 text-center"
                data-aos="fade-up">
                Amenities & Activities
            </h2>

            <div class="grid md:grid-cols-3 gap-6 md:gap-8">
                <!-- Room Amenities - Column 1 -->
                <div data-aos="fade-up">
                    <h3
                        class="text-lg md:text-xl lg:text-2xl font-serif font-bold text-amber-100 mb-6 border-b border-amber-600 pb-3">
                        Room Amenities
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>6 SUPER DELUXE ROOM</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>1 FAMILY ROOM</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>COMFORTABLE DOUBLE BEDS</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>AC ROOMS</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>TELEVISION WITH MULTICHANNELS</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>24 HRS POWER BACK UP</span>
                        </li>
                    </ul>
                </div>

                <!-- Room Amenities - Column 2 -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3
                        class="text-lg md:text-xl lg:text-2xl font-serif font-bold text-amber-100 mb-6 border-b border-amber-600 pb-3">
                        &nbsp;
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>RUNNING HOT AND COLD WATER</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>MULTI CUISINE RESTAURANT</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>TEA / COFFEE MAKER</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>CAR PARKING</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-check amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>DOCTOR ON CALL</span>
                        </li>
                    </ul>
                </div>

                <!-- Activities - Column 3 -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <h3
                        class="text-lg md:text-xl lg:text-2xl font-serif font-bold text-amber-100 mb-6 border-b border-amber-600 pb-3">
                        Activities
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-binoculars amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>MORNING AND AFTERNOON JUNGLE SAFARI</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-moon amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>NIGHT SAFARI BUFFER AREA</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-star amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>STAR GAZING</span>
                        </li>
                        <li class="flex items-start gap-2 text-gray-300 text-xs md:text-sm">
                            <i class="fa-solid fa-fire amenity-icon mt-1 flex-shrink-0 text-sm"></i>
                            <span>CANDLELIGHT DINNERS</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-12 md:py-16 bg-black">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-serif font-bold text-amber-100 mb-8 text-center" data-aos="fade-up">
                Find Us
            </h2>
            <div class="map-container rounded-xl overflow-hidden" data-aos="zoom-in">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.220005091278!2d79.0379329739557!3d21.103793280564318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf2474ce0d7f%3A0x95dab1ef413d9efc!2sRajlaxmi%20bunglows!5e0!3m2!1sen!2sin!4v1766644414426!5m2!1sen!2sin"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-12 md:py-16 bg-neutral-900">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-serif font-bold text-amber-100 mb-8 text-center" data-aos="fade-up">
                Wildmark Resort - Best Resort in Kanha
            </h2>

            <!-- Main Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 mb-12">
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up">
                    <img src="images/wildmark1.JPG" class="w-full h-full object-cover" alt="Resort Exterior" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="images/wildmark2.jpg" class="w-full h-full object-cover" alt="Resort Building" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="images/wildmark3.jpeg" class="w-full h-full object-cover" alt="Resort Pool" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="300">
                    <img src="images/wildmark4.JPG" class="w-full h-full object-cover" alt="Resort Garden" />
                </div>
            </div>

            <!-- Room Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 mb-12">
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up">
                    <img src="images/wildmark5.JPG" class="w-full h-full object-cover" alt="Deluxe Room" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="images/wildmark6.jpg" class="w-full h-full object-cover" alt="Room Interior" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="images/wildmark7.JPG" class="w-full h-full object-cover" alt="Living Area" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="300">
                    <img src="images/wildmark8.jpeg" class="w-full h-full object-cover" alt="Bedroom" />
                </div>
            </div>

            <!-- Nature Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 mb-12">
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up">
                    <img src="images/wildmark9.jpg" class="w-full h-full object-cover" alt="Forest View" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="images/beded1.webp" class="w-full h-full object-cover" alt="Wildlife" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="images/beded2.webp" class="w-full h-full object-cover" alt="Nature" />
                </div>
                <div class="gallery-item rounded-lg overflow-hidden h-48 md:h-64" data-aos="fade-up"
                    data-aos-delay="300">
                    <img src="images/card1.webp" class="w-full h-full object-cover" alt="Landscape" />
                </div>
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
                <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed"
                    data-aos="fade-up" data-aos-delay="200">
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
                <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                    style="background-color: #39DCA1;border-radius: 9px;">
                    <div
                        class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                        <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
                            class="w-full h-full object-cover rounded-2xl award-image">
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- FAQs Section - Wildmark Resort Kanha -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        RESORT INFORMATION
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Wildmark Resort FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about Wildmark Resort - Best Resort in Kanha
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">
      
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What makes Wildmark Resort the best resort in Kanha?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Wildmark Resort stands out as the best resort in Kanha for several reasons:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Prime Location:</strong> Less than a kilometer from the main Khatia Gate, offering easy access to early morning safaris</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Colonial Charm:</strong> Spacious lawn with colonial-style bungalows providing authentic wilderness experience</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Luxurious Yet Affordable:</strong> 7 spacious rooms with modern amenities at budget-friendly rates starting from Rs. 7,999</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Premium Facilities:</strong> Swimming pool, private sit-out areas, AC rooms, and multi-cuisine restaurant</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Family-Friendly:</strong> Common areas for relaxation, games like carrom, perfect for quality family time</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
<!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What amenities and facilities does Wildmark Resort offer?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our resort is equipped with comprehensive amenities for your comfort:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Room Facilities:</strong> Air conditioning, comfortable double beds, television with multiple channels, tea/coffee maker, running hot and cold water 24/7</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Dining:</strong> Multi-cuisine restaurant serving delicious meals throughout the day</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Leisure:</strong> Swimming pool, spacious lawn, private sit-out areas, common recreation area with games like carrom</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Essential Services:</strong> 24-hour power backup, car parking, doctor on call, laundry service</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safety & Security:</strong> Round-the-clock security and emergency medical assistance</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What types of rooms are available at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We offer two categories of luxurious and spacious accommodations:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>6 Super Deluxe Rooms:</strong> Starting at Rs. 7,999 per night, featuring comfortable double beds, AC, television with multiple channels, private sit-outs, and modern bathrooms with hot/cold water</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>1 Family Room:</strong> Priced at Rs. 11,999 per night, ideal for families or groups, offering more space and privacy with all premium amenities</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              All rooms feature colonial-style architecture blended with modern comfort, ensuring a memorable stay in the heart of Kanha.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is Wildmark Resort safe for solo travelers?
</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.

            </p>
            
          </div>
        </div>
      </div>
      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Does Wildmark Resort offer activities besides jungle safari?
</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
             Yes, guests can enjoy nature walks, bird watching, and village visits arranged by the resort.


            </p>
            
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What safari options are available from Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We arrange comprehensive safari experiences across multiple zones:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Morning & Afternoon Jungle Safaris:</strong> In Kanha Zone, Kisli Zone, Sarhi Zone, and Mukki Zone</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Night Safari:</strong> Experience thrilling buffer area safaris after sunset - a unique adventure!</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Open Jeep Safaris:</strong> Perfect for keen photographers wanting unobstructed views and shots</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Customized Packages:</strong> From single safari to multi-day packages, we tailor experiences to your preferences</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Pro Tip:</strong> Our proximity to Khatia Gate (less than 1 km) means you can maximize safari time and return quickly for meals and rest!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How far is Wildmark Resort from Kanha National Park gates?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Location is one of our biggest advantages:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Khatia Gate (Main Entrance):</strong> Less than 1 kilometer - approximately 2-3 minutes drive</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Early Safari Advantage:</strong> Be among the first to enter the park for morning safaris starting at 6:00 AM</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Quick Returns:</strong> After morning safari, return in minutes for breakfast and relaxation before afternoon activities</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Strategic Position:</strong> Close enough for convenience, positioned perfectly in the buffer zone for occasional wildlife sightings near the property</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is Wildmark Resort suitable for families with children?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Absolutely! Wildmark Resort is a perfect family destination:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Family Room:</strong> Spacious accommodation designed specifically for families</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Kid-Friendly Activities:</strong> Swimming pool, spacious lawns for play, indoor games like carrom</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Common Recreation Area:</strong> A dedicated space where families can sit, relax, and spend quality time together</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Home Away from Home:</strong> Disconnect from phones and internet, reconnect with family in a peaceful natural setting</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Educational Experience:</strong> Safaris offer children unforgettable wildlife learning opportunities</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safe Environment:</strong> 24/7 security and doctor on call ensure peace of mind for parents</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What activities can we do besides safaris at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Wildmark Resort offers diverse experiences beyond wildlife safaris:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Star Gazing:</strong> Experience spectacular night skies away from city lights - perfect for astronomy enthusiasts</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Candlelight Dinners:</strong> Romantic dining experiences under the stars</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Sunset Point Drives:</strong> Evening drives to nearby scenic viewpoints</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Waterfall Visits:</strong> Explore nearby waterfalls for a refreshing nature experience</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Swimming Pool:</strong> Relax by or take a dip in our pool</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Rest & Recreation:</strong> Perfect for those who prefer fewer safaris and more relaxation time</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Photography:</strong> Capture the beautiful Kanha landscape and resort architecture</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are the room rates at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We offer competitive and budget-friendly rates:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Super Deluxe Room:</strong> Starting at Rs. 7,999 per night (ideal for couples and solo travelers)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Family Room:</strong> Rs. 11,999 per night (perfect for families or groups)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Package Deals:</strong> Special tour packages combining accommodation + safaris + meals available at discounted rates</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Seasonal Rates:</strong> Weekend vs. weekday pricing may vary - contact us for current rates</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Budget-Friendly:</strong> True budget-friendly option at Kanha Tiger Reserve without compromising on luxury</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Contact us at <a href="tel:9405529731" class="text-amber-400 hover:text-amber-300">+91 9405529731</a> for current rates, special offers, and package deals!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is internet/Wi-Fi available at the resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We offer a balanced approach to connectivity:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Limited Connectivity:</strong> Internet and phone services are available but intentionally limited to encourage digital detox</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Emergency Access:</strong> Essential connectivity maintained for emergencies and urgent work needs</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Reconnect with Nature:</strong> Our philosophy is to help you disconnect from work and reconnect with family and nature</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Not Cut Off:</strong> You won't be completely isolated, but free from constant phone calls and emails dragging you back to work</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Embrace this unique opportunity for a true vacation - quality time with loved ones in nature!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How do I book my stay at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Booking your stay at Wildmark Resort is simple:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Phone Booking:</strong> Call us directly at <a href="tel:9405529731" class="text-amber-400 hover:text-amber-300">+91 9405529731</a> or <a href="tel:7719806444" class="text-amber-400 hover:text-amber-300">+91 7719806444</a></span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Email Inquiry:</strong> Write to us at <a href="mailto:kanhawildmark@gmail.com" class="text-amber-400 hover:text-amber-300">kanhawildmark@gmail.com</a></span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>WhatsApp:</strong> Quick booking via WhatsApp at +91 9405529731</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Online Form:</strong> Visit our <a href="contact.html" class="text-amber-400 hover:text-amber-300">Contact Page</a> to fill the booking inquiry form</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Package Deals:</strong> Check our <a href="Kanha-Safari-Tour-Package.html" class="text-amber-400 hover:text-amber-300">Tour Packages</a> for complete packages with accommodation + safaris</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Pro Tip:</strong> Book 45-60 days in advance during peak season (November-February) to secure the best rates and room availability!
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/9405529731" target="_blank"
        class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
        data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
        </svg>
    </a>

  

    <!-- ═══════════════════════════════════════════ FAQ JAVASCRIPT ═══ -->
    <script>
    // FAQ Toggle Functionality - Fixed Version
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(button => {
            button.addEventListener('click', function() {
                const faqItem = this.closest('.faq-item');
                const answer = faqItem.querySelector('.faq-answer');
                const icon = this.querySelector('.faq-icon');
                const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

                // Close all other FAQs
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        const otherAnswer = item.querySelector('.faq-answer');
                        const otherIcon = item.querySelector('.faq-icon');
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

include 'includes/footer.php'; 
?>