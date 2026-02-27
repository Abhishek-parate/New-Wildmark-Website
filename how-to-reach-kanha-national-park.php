<?php 
// Set page-specific title
$pageTitle = "How to Reach - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
        /* ===== ROOT COLOR VARIABLES ===== */
        :root {
            --bg1: #E8C999;
            --bg2: #F8EEDF;
            --text1: #000000;
            --text2: #8E1616;
        }

        /* Custom styling */
        .hero-section {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(102, 86, 86, 0.7)),
                url("https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?w=1600");
            background-size: cover;
            background-position: center;
        }

        .info-card {
            background: rgba(232, 201, 153, 0.15);
            border: 1px solid rgba(232, 201, 153, 0.4);
        }

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

            p,
            span,
            a,
            li {
                word-wrap: break-word;
                overflow-wrap: break-word;
            }
        }
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
    scrollbar-width: none;
    -ms-overflow-style: none;
}

#specialOfferPopup > div::-webkit-scrollbar {
    display: none;
}

#specialOfferPopup > div::-webkit-scrollbar-track {
    background: var(--bg2);
}

#specialOfferPopup > div::-webkit-scrollbar-thumb {
    background: var(--text2);
    border-radius: 3px;
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

  /* ===== GLOBAL THEME OVERRIDES ===== */

  /* Main section backgrounds */
  section.bg-neutral-900 {
      background-color: var(--bg2) !important;
  }
  section.bg-black {
      background-color: var(--bg1) !important;
  }

  /* Headings - h1, h2, h3, h4 */
  h1, h2, h3, h4 {
      color: var(--text2) !important;
  }

  /* Amber headings */
  .text-amber-100 {
      color: var(--text2) !important;
  }

  /* Body text */
  .text-gray-300 {
      color: var(--text1) !important;
  }
  p {
      color: var(--text1);
  }

  /* Amber accents → text2 */
  .text-amber-500, .text-amber-400 {
      color: var(--text2) !important;
  }

  /* Borders */
  .border-neutral-800 {
      border-color: rgba(142, 22, 22, 0.25) !important;
  }
  .border-neutral-700 {
      border-color: rgba(142, 22, 22, 0.2) !important;
  }

  /* FAQ Cards */
  .faq-item.bg-black {
      background-color: var(--bg2) !important;
      border-color: rgba(142, 22, 22, 0.25) !important;
      box-shadow: 0 2px 8px rgba(142, 22, 22, 0.07);
  }
  .faq-item.bg-black:hover {
      border-color: var(--text2) !important;
  }
  .faq-question:hover {
      background-color: rgba(232, 201, 153, 0.5) !important;
  }
  .faq-answer > div {
      background-color: rgba(232, 201, 153, 0.3) !important;
      border-top-color: rgba(142, 22, 22, 0.2) !important;
  }
  .faq-icon {
      color: var(--text2) !important;
  }
  .faq-question span {
      color: var(--text1) !important;
  }

  /* Travel method cards */
  .bg-black.rounded-xl.border.border-neutral-800 {
      background-color: var(--bg2) !important;
  }

  /* Info card */
  .info-card.rounded-xl {
      background-color: rgba(232, 201, 153, 0.2) !important;
      border-color: rgba(142, 22, 22, 0.3) !important;
  }

  /* Route distances list icons */
  .fa-location-dot {
      color: var(--text2) !important;
  }
  .fa-circle {
      color: var(--text2) !important;
  }

  /* Dot list icons */
  li strong.text-white {
      color: var(--text1) !important;
  }

  /* Awards section */
  .awards-section {
      background-color: var(--bg1) !important;
  }

  /* Special Offer Popup */
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
  #specialOfferPopup .border-amber-500\/30 {
      border-color: rgba(142, 22, 22, 0.3) !important;
  }
  #specialOfferPopup .hover\:border-amber-500:hover {
      border-color: var(--text2) !important;
  }
  #specialOfferPopup h4.text-white {
      color: var(--text1) !important;
  }
  #specialOfferPopup .text-amber-500 {
      color: var(--text2) !important;
  }
  #specialOfferPopup .bg-amber-500\/10 {
      background-color: rgba(232, 201, 153, 0.3) !important;
  }
  #specialOfferPopup .border-amber-500\/30 {
      border-color: rgba(142, 22, 22, 0.3) !important;
  }
  #specialOfferPopup .text-amber-100 {
      color: var(--bg2) !important;
  }
  /* Offer price strikethrough */
  #specialOfferPopup .text-gray-400.line-through {
      color: rgba(0,0,0,0.4) !important;
  }
  #specialOfferPopup .text-2xl.text-amber-500 {
      color: var(--text2) !important;
  }
  #specialOfferPopup .text-gray-400 {
      color: rgba(0,0,0,0.5) !important;
  }
  /* Popup Book Now button */
  .bg-amber-500.hover\:bg-amber-600 {
      background-color: var(--text2) !important;
      color: var(--bg2) !important;
  }
  .bg-amber-500.hover\:bg-amber-600:hover {
      background-color: #6e1010 !important;
  }

  /* Special offer button (floating) */
  #specialOfferBtn {
      background: linear-gradient(to right, var(--text2), #b01e1e) !important;
  }
  #specialOfferBtn:hover {
      background: linear-gradient(to right, #6e1010, var(--text2)) !important;
  }
  #specialOfferBtn .bg-red-500 {
      background-color: var(--bg1) !important;
      color: var(--text2) !important;
  }

  /* EXCELLENCE tracking text */
  .text-amber-500.text-xs.tracking-widest {
      color: var(--text2) !important;
  }

  /* Section intro text center */
  .text-center p.text-gray-300 {
      color: var(--text1) !important;
  }

  /* Close button on popup */
  #specialOfferPopup button.text-white {
      color: var(--text1) !important;
  }
  #specialOfferPopup button.hover\:text-amber-500:hover {
      color: var(--text2) !important;
  }

  /* FAQ Section background */
  section.py-12.md\:py-20.px-4.bg-neutral-900 {
      background-color: var(--bg2) !important;
  }

  /* Offer badges keep their identity but refine */
  .bg-green-500 { background-color: #2a6e3f !important; }
  .bg-blue-500 { background-color: #1a4a7a !important; }

  /* WhatsApp button stays green */
  .bg-green-500.hover\:bg-green-600 {
      background-color: #25D366 !important;
  }
    </style>
    <!-- Spacer -->
    <div class="h-[60px] md:h-[80px]"></div>

    <!-- Hero Banner -->
    <header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/Tiger5.webp') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </header>

    <!-- Main Content -->
    <section class="py-12 md:py-16 bg-neutral-900">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <!-- Introduction -->
            <div class="mb-12" data-aos="fade-up">
                <h1 class="text-2xl md:text-5xl font-serif font-bold mb-6 text-amber-100 text-center">
                    How To Reach Kanha Kisli Tiger Reserve
                </h1>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed text-center mb-4">
                    Kanha National Park is located in the Mandla and Balaghat districts
                    of Madhya Pradesh. Kanha Tiger Reserve is easily accessible by air,
                    road, and rail from most parts of the country. Many wildlife lovers,
                    wildlife photographers, and flora lovers come here to see many wild
                    animals and a variety of birds and flora. In such a situation, they
                    should have complete information about the gates of Kanha and
                    transportation by air, road, and rail.
                </p>
            </div>

            <!-- Entrance Gates Section -->
            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 mb-12">
                <div data-aos="fade-right">
                    <h2 class="text-2xl md:text-3xl font-serif font-bold mb-2 text-amber-100">
                        Entrance Gates: Khatia and Mukki
                    </h2>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify mb-4">
                        Kanha National Park has two main entrance gates, Khatia and Mukki
                        entrance gates. It is connected to Jabalpur, Raipur, and Nagpur
                        and is the first choice of tourists.
                    </p>

                    <h3 class="text-xl md:text-xl font-serif font-bold mb-2 text-amber-100">
                        Khatia Gate Kanha:
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify mb-4">
                        This gate is located in the Mandla district. This gate enters
                        Kisli, Kanha, and Sarhi areas. It is the preferred entrance for
                        those staying in lodges and resorts near this gate. This includes
                        Nature Sprout Wildmark Resort, which is one of the best resorts
                        near Khatia Gate. Khatia Gate is connected to major cities like
                        Jabalpur and Nagpur.
                    </p>

                    <h3 class="text-xl md:text-xl font-serif font-bold mb-2 text-amber-100">
                        Mukki Gate Kanha:
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
                        Mukki is in the Balaghat district of Madhya Pradesh state where
                        the Mukki entrance gate covers the Mukki range of the national
                        park. This gate is well connected to Jabalpur, Raipur, and Nagpur,
                        thereby providing easy access for visitors coming from the city.
                    </p>
                </div>

                <div data-aos="fade-left" class="flex items-center justify-center">
                    <img src="https://wildmarkresort.com/images/dear2.webp"
                        class="w-full h-auto rounded-xl shadow-2xl" alt="Kanha National Park Map" />
                </div>
            </div>
        </div>
    </section>

    <!-- How to Reach Section -->
    <section class="py-12 md:py-16 bg-black">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-serif font-bold text-center mb-12 text-amber-100"
                data-aos="fade-up">
                How to Reach Kanha National Park by Air, Train and Road
            </h2>

            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center mb-12">
                <!-- Tiger Image -->
                <div data-aos="fade-right" class="order-2 lg:order-1">
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://wildmarkresort.com/images/card1.webp"
                            class="w-full h-80 md:h-96 object-cover" alt="Bengal Tiger" />
                    </div>
                </div>

                <!-- Route Distances -->
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <div class="info-card rounded-xl p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-serif font-bold mb-6 text-amber-100">
                            Route distance to Kanha Kisli National Park:
                        </h3>
                        <p class="text-gray-300 text-sm md:text-base mb-6">
                            Understanding the distances from major cities can help you plan
                            your journey better. Here are the approximate distances to Kanha
                            National Park from several key locations:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                                <i class="fa-solid fa-location-dot text-amber-500 mt-1 flex-shrink-0"></i>
                                <span><strong class="text-white">Nagpur to kanha distance is 250 km</strong></span>
                            </li>
                            <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                                <i class="fa-solid fa-location-dot text-amber-500 mt-1 flex-shrink-0"></i>
                                <span><strong class="text-white">Gondia to Kanha distance is 250 km</strong></span>
                            </li>
                            <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                                <i class="fa-solid fa-location-dot text-amber-500 mt-1 flex-shrink-0"></i>
                                <span><strong class="text-white">Jabalpur to kanha distance is 190 km</strong></span>
                            </li>
                            <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                                <i class="fa-solid fa-location-dot text-amber-500 mt-1 flex-shrink-0"></i>
                                <span><strong class="text-white">Raipur to Kanha distance is 220 km</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Travel Methods Section -->
    <section class="py-12 md:py-16 bg-neutral-900">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="space-y-8">
                <!-- By Air -->
                <div class="bg-black rounded-xl p-6 md:p-8 border border-neutral-800" data-aos="fade-up">
                    <h3 class="text-xl md:text-2xl font-serif font-bold mb-4 flex items-center gap-3 text-amber-100">
                        <i class="fa-solid fa-plane text-amber-500"></i>
                        Traveling by Air
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
                        The nearest airport is Jabalpur Airport the new airport in
                        <strong class="text-amber-400">(DUMNA)</strong> which is 130 kms
                        from Kanha National Park and from Nagpur it is 265 kms which takes
                        around 5-6 hours and the airport at Gondia (GDB) is also connected
                        to Raipur Airport.
                    </p>
                </div>

                <!-- By Train -->
                <div class="bg-black rounded-xl p-6 md:p-8 border border-neutral-800" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3 class="text-xl md:text-2xl font-serif font-bold mb-4 flex items-center gap-3 text-amber-100">
                        <i class="fa-solid fa-train text-amber-500"></i>
                        Traveling by Train
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
                        If you prefer to travel by train, Jabalpur Railway Station is the
                        nearest and major station to Kanha. Jabalpur is connected by train
                        routes to various parts of India including Delhi, Mumbai and
                        Kolkata. Once you reach Jabalpur Railway Station, you can take a
                        taxi or bus to reach the park. The journey from Jabalpur Railway
                        Station to Kanha National Park takes about 4 to 5 hours.
                    </p>
                </div>

                <!-- By Road -->
                <div class="bg-black rounded-xl p-6 md:p-8 border border-neutral-800" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="text-xl md:text-2xl font-serif font-bold mb-4 flex items-center gap-3 text-amber-100">
                        <i class="fa-solid fa-car text-amber-500"></i>
                        Traveling by Road
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">
                        Kanha Tiger Reserve is easily accessible by road. If you live in a
                        big city, you can go there by car or hire a taxi. Here are some
                        tips for road trips:
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                            <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                            <span><strong class="text-white">From Nagpur:</strong> It takes
                                about 5 to 6 hours. From NH 44, take local roads leading to
                                the park.</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                            <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                            <span><strong class="text-white">From Jabalpur:</strong> It takes
                                about 4 to 5 hours. From NH 30. This route passes through
                                beautiful landscapes.</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-300 text-sm md:text-base">
                            <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                            <span><strong class="text-white">From Raipur:</strong> It takes
                                about 5 to 6 hours to travel by road from Raipur to Kanha,
                                where you can travel via NH 30 and enjoy the panoramic views
                                on the way.</span>
                        </li>
                    </ul>

                    <div class="border-t border-neutral-700 pt-6 mt-6">
                        <h4 class="text-lg md:text-xl font-serif font-bold mb-3 text-amber-100">
                            How to Reach Kanha National Park from Delhi
                        </h4>
                        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                            There is no direct connection between Delhi and Kanha National
                            Park. In any case, you can take the subway to IGI Airport, walk
                            to Delhi (DEL) airport, fly to Raipur (RPR), and then take a
                            taxi to Kanha National Park. Alternatively, you can take the
                            subway to IGI Airport, walk to Delhi (DEL) airport, fly to
                            Gondia (GDB), and then take a taxi to Kanha National Park.
                        </p>
                    </div>
                </div>

                <!-- Transport Services -->
                <div class="info-card rounded-xl p-6 md:p-8 border-2 border-amber-600/30" data-aos="fade-up"
                    >
                    <h3 class="text-xl md:text-2xl font-serif font-bold mb-4 flex items-center gap-3 text-amber-100">
                        <i class="fa-solid fa-car-side text-amber-500"></i>
                        Accommodation and Transport Services
                    </h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
                        If you are looking for a comfortable place to stay near Khatia
                        Gate, we take care of transporting you and your luggage from the
                        above-mentioned places to Nature Sprout
                        <strong class="text-amber-400">Wildmark Resort Kanha</strong>. We
                        arrange Innova / Sedan cars as per your needs and number of
                        persons.
                    </p>
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
          >
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
        <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>

        <!-- Award Card 2 - 2021 -->
        <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>

        <!-- Award Card 3 - 2022 -->
        <div class="award-card group" data-aos="fade-up"  >
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022"
              class="w-full h-auto max-w-[280px] object-contain award-image">
          </div>
        </div>

        <!-- Award Card 4 - 2025 (Green Background) -->
        <div class="award-card group" data-aos="fade-up"   style="background-color: #39DCA1;border-radius: 9px;">
          <div
            class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
              class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>

      </div>
    </div>
  </section>

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
    <div class="faq-grid" data-aos="fade-up" >

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




  

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      const icon = item.querySelector('.faq-icon');
      question.addEventListener('click', () => {
        const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            const otherAnswer = otherItem.querySelector('.faq-answer');
            const otherIcon = otherItem.querySelector('.faq-icon');
            otherAnswer.style.maxHeight = '0';
            otherIcon.style.transform = 'rotate(0deg)';
          }
        });
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
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) {
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        document.body.style.overflow = 'hidden';
    } else {
        popup.classList.add('hidden');
        popup.classList.remove('flex');
        document.body.style.overflow = '';
    }
}
function closeIfClickedOutside(event) {
    if (event.target.id === 'specialOfferPopup') {
        toggleSpecialOfferPopup();
    }
}
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