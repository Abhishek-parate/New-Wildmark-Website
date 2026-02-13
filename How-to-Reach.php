<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>How to Reach Kanha National Park - Wildmark Resort</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Roboto Mono", monospace;
            overflow-x: hidden;
            width: 100%;
            max-width: 100vw;
        }

        .font-serif {
            font-family: "Roboto Slab", serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto Slab", serif;
        }

        html {
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Dropdown */
        .dropdown {
            position: relative;
        }

        .dropdown:hover .mega-menu,
        .dropdown .mega-menu:hover {
            display: block;
        }

        .mega-menu {
            display: none;
            position: absolute;
            padding-top: 1rem;
            margin-top: -1rem;
            min-width: 200px;
        }

        /* Mobile menu */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            width: 100%;
        }

        .mobile-menu.active {
            max-height: 800px;
            overflow-y: auto;
        }

        /* Mobile Packages Dropdown */
        .mobile-packages-dropdown {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .mobile-packages-dropdown.active {
            max-height: 500px;
        }

        .mobile-menu a,
        .mobile-menu button,
        .mobile-menu span {
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word;
            hyphens: auto;
            max-width: 100%;
        }

        section {
            overflow-x: hidden;
        }

        /* Custom styling */
        .hero-section {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)),
                url("https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?w=1600");
            background-size: cover;
            background-position: center;
        }

        .info-card {
            background: rgba(212, 165, 116, 0.1);
            border: 1px solid rgba(212, 165, 116, 0.3);
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
    </style>
</head>

<body class="bg-black text-white">
<nav class="fixed w-full bg-black z-50 py-3 md:py-2 border-b border-neutral-800" data-aos="fade-down"
  data-aos-duration="800">
  <div class="container mx-auto px-3 md:px-6">

    <!-- Mobile Layout -->
    <div class="flex md:hidden justify-between items-center relative">
      <!-- Mobile Hamburger -->
      <button id="mobileMenuBtn" class="text-white hover:text-amber-500 transition z-20 p-1">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Center Logo on Mobile - INCREASED SIZE -->
      <div class="absolute left-1/2 transform -translate-x-1/2">
        <a href="home.php" class="flex items-center">
          <img 
            src="images/WILD.png" 
            alt="Wildmark Resort Kanha Logo" 
            class="h-14 w-auto object-contain"
          />
        </a>
      </div>

      <!-- Right Side - Only Book Now Button -->
      <div class="flex items-center">
        <!-- Book Now Button -->
        <a href="contact.php" class="bg-amber-600 hover:bg-amber-700 px-3 py-2 transition text-xs font-semibold" title="Book Now">
          BOOK NOW
        </a>
      </div>
    </div>

    <!-- Desktop Layout -->
    <div class="hidden md:flex justify-between items-center">
      
      <!-- Left - Logo Desktop -->
      <div class="flex items-center">
        <a href="home.php" class="flex items-center">
          <img 
            src="images/WILD.png" 
            alt="Wildmark Resort Kanha Logo" 
            class="h-12 md:h-14 lg:h-16 w-auto object-contain"
          />
        </a>
      </div>

      <!-- Center - Menu Items Desktop -->
      <div class="flex-1 flex justify-center">
        <div class="flex space-x-4 lg:space-x-8 text-xs lg:text-sm font-light tracking-wider items-center">
          <a href="home.php" class="hover:text-amber-500 transition">Home</a>
          <a href="about.php" class="hover:text-amber-500 transition">About</a>
          <a href="How-to-Reach.php" class="hover:text-amber-500 transition">How to Reach</a>
          <a href="kanha.php" class="hover:text-amber-500 transition">Kanha</a>
          
          <!-- Packages Dropdown -->
          <div class="relative dropdown group">
            <button class="hover:text-amber-500 transition flex items-center">
              Packages
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="mega-menu absolute left-0 top-full bg-black border border-neutral-800 shadow-2xl w-64">
              <div class="p-6 space-y-3">
                <a href="Kanha-Tour-Package.php"
                  class="block text-white hover:text-amber-500 transition py-2">Kanha Tour Package</a>
                <a href="Kanha-Safari-Tour-Package.php"
                  class="block text-white hover:text-amber-500 transition py-2">Kanha Safari Tour Package</a>
                <a href="Kanha-Kisli-Tour-Package.php"
                  class="block text-white hover:text-amber-500 transition py-2">Kanha Kisli Tour Package</a>
                <a href="Mukki-Zone-Tour-Package.php"
                  class="block text-white hover:text-amber-500 transition py-2">Mukki Zone Tour Package</a>
                <a href="Kanha-Tiger-Safari-Tour-Package.php"
                  class="block text-white hover:text-amber-500 transition py-2">Kanha Tiger Safari Tour Package</a>
                 
              </div>
            </div>
          </div>

          <a href="Wildmark.php" class="hover:text-amber-500 transition">Wildmark</a>
        </div>
      </div>

      <!-- Right - Book Now Button Desktop -->
      <div class="flex items-center">
        <a href="contact.php"
          class="text-sm font-light tracking-wider bg-amber-600 hover:bg-amber-700 px-6 py-2 transition whitespace-nowrap">BOOK NOW</a>
      </div>
      
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu md:hidden mt-4">
      <div class="flex flex-col space-y-3 py-4">
        <a href="home.php" class="text-white hover:text-amber-500 py-2 border-b border-neutral-800">Home</a>
        <a href="How-to-Reach.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">How to Reach</a>
        <a href="about.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">About</a>
        <a href="kanha.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">Kanha</a>
        
        <!-- Packages Dropdown -->
        <div class="border-b border-neutral-800">
          <button id="mobilePackagesBtn"
            class="w-full text-left text-white hover:text-amber-500 py-2 flex justify-between items-center">
            <span>Packages</span>
            <svg id="packagesArrow" class="w-5 h-5 transition-transform duration-300" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- Dropdown Content -->
          <div id="mobilePackagesDropdown"
            class="mobile-packages-dropdown overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
            <div class="flex flex-col pl-4 space-y-2 pb-3 pt-2">
              <a href="Kanha-Tour-Package.php"
                class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                Kanha Tour Package
              </a>
              <a href="Kanha-Safari-Tour-Package.php"
                class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                Kanha Safari Tour Package
              </a>
              <a href="Kanha-Kisli-Tour-Package.php"
                class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                Kanha Kisli Tour Package
              </a>
              <a href="Mukki-Zone-Tour-Package.php"
                class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                Mukki Zone Tour Package
              </a>
              <a href="Kanha-Tiger-Safari-Tour-Package.php"
                class="text-gray-300 hover:text-amber-400 py-2 text-sm border-l-2 border-neutral-700 pl-3 hover:border-amber-500 transition">
                Kanha Tiger Safari Tour Package
              </a>
            </div>
          </div>
        </div>
        
        <a href="Wildmark.php" class="hover:text-amber-500 transition py-2 border-b border-neutral-800">Wildmark</a>
      </div>
    </div>

  </div>
</nav>

    <!-- Spacer -->
    <div class="h-[60px] md:h-[80px]"></div>

    <!-- Hero Banner -->
    <header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
        style="background: url('images/hiran.webp') center/cover no-repeat">
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
                    <img src="images/card2.webp"
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
                        <img src="images/card1.webp"
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
                    data-aos-delay="300">
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
<!-- FAQs Section - How to Reach Page -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        TRAVEL GUIDE
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Travel FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Essential travel information to help you reach Wildmark Resort and Kanha National Park
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are the two main entrance gates to Kanha National Park?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Kanha National Park has two main entrance gates, each providing access to different zones:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Khatia Gate:</strong> Located in Mandla district, this gate provides access to Kisli, Kanha, and Sarhi zones. Wildmark Resort is located near Khatia Gate, making it the preferred entrance for our guests. It's well connected to Jabalpur and Nagpur.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Mukki Gate:</strong> Located in Balaghat district, this gate covers the Mukki range of the national park. It offers scenic landscapes and is also connected to Jabalpur, Raipur, and Nagpur, providing easy access for visitors from these cities.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the distance from major cities to Kanha National Park?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Here are the approximate distances from major cities to Kanha National Park:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Nagpur to Kanha:</strong> 250 km (approximately 5-6 hours by road)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Gondia to Kanha:</strong> 145 km (closest railway station)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Jabalpur to Kanha:</strong> 170-190 km (approximately 4-5 hours by road)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Raipur to Kanha:</strong> 220 km (approximately 5-6 hours by road)</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              These distances help you plan your journey better. All routes pass through beautiful landscapes and well-maintained roads.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Which is the nearest airport to Kanha National Park?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              There are three main airports that serve as gateways to Kanha National Park:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Jabalpur Airport (DUMNA) - Closest:</strong> Located 130 km from Kanha National Park, this is the nearest airport. The new airport at Dumna offers better facilities and connectivity.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Nagpur Airport (Dr. Babasaheb Ambedkar International Airport):</strong> Located approximately 265 km from Kanha, takes around 5-6 hours by road. This is a major airport with excellent connectivity to most Indian cities.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Raipur Airport (Swami Vivekananda Airport):</strong> Also well-connected to Kanha via road. The airport at Gondia (GDB) is connected to Raipur as well.</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              We can arrange pick-up services from any of these airports. Please inform us in advance for hassle-free transportation.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Which is the nearest railway station to reach Kanha National Park?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              The main railway stations serving Kanha National Park are:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Jabalpur Railway Station (Primary Option):</strong> The nearest and most major railway station to Kanha, located approximately 170 km away. Jabalpur is well-connected by train routes to various parts of India including Delhi, Mumbai, and Kolkata. The journey from Jabalpur Railway Station to Kanha takes about 4-5 hours by road.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Gondia Railway Station (Closest):</strong> Located approximately 145 km from Kanha, this is the closest railway station, though it has fewer direct train connections compared to Jabalpur.</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              After reaching the railway station, you can hire a taxi or pre-book our transportation service. We provide Innova/Sedan cars for comfortable transfers to Wildmark Resort.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How can I reach Kanha National Park by road from major cities?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Kanha Tiger Reserve is easily accessible by road. Here are the main routes:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Nagpur (250 km, 5-6 hours):</strong> Take NH 44 and then local roads leading to the park. The route passes through beautiful landscapes and well-maintained highways.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Jabalpur (190 km, 4-5 hours):</strong> Travel via NH 30. This scenic route offers panoramic views of the countryside and is well-marked.</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Raipur (220 km, 5-6 hours):</strong> Take NH 30 and enjoy beautiful landscapes throughout the journey.</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              You can drive your own car, hire a taxi, or use state transport buses. We recommend starting early to reach during daylight hours for better road visibility and safety.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How can I reach Kanha National Park from Delhi?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              There are multiple options to reach Kanha from Delhi:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Option 1 - Via Raipur:</strong> Take metro to IGI Airport → Fly from Delhi (DEL) to Raipur (RPR) → Hire taxi to Kanha National Park (220 km, 5-6 hours)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Option 2 - Via Gondia:</strong> Take metro to IGI Airport → Fly from Delhi (DEL) to Gondia (GDB) → Hire taxi to Kanha (145 km)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Option 3 - Via Jabalpur:</strong> Fly to Jabalpur or take a direct train from Delhi to Jabalpur → Hire taxi to Kanha (170 km, 4-5 hours)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Option 4 - By Train:</strong> Take overnight trains from Delhi to Jabalpur Railway Station, which offers comfortable sleeper and AC coach options</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              We can arrange complete pick-up services from any of these points. Contact us in advance to coordinate your arrival.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Does Wildmark Resort provide pick-up and drop services from airports and railway stations?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Yes! Wildmark Resort provides comprehensive transportation services to make your journey comfortable and hassle-free:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Pick-up Services:</strong> Available from Jabalpur Airport, Nagpur Airport, Raipur Airport, and all major railway stations</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Vehicle Options:</strong> We arrange Innova or Sedan cars based on your needs and number of persons</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Drop Services:</strong> Return transportation to airports/railway stations after your stay</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Luggage Handling:</strong> We take care of transporting you and your luggage safely</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Important:</strong> Please inform us of your arrival details (flight/train number, arrival time) at least 24-48 hours in advance. Additional charges apply for transportation services. Contact us at +91 9405529731 or +91 7719806444 for bookings and rates.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the road condition like when traveling to Kanha National Park?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              The road conditions to Kanha National Park are generally good:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>National Highways:</strong> Major routes like NH 44 and NH 30 are well-maintained, smooth, and safe for travel</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>State Roads:</strong> The final approach roads to the park are decent but may have occasional rough patches</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Scenic Routes:</strong> All routes pass through beautiful countryside, forests, and small villages</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Monsoon Season:</strong> Roads can be slippery during heavy rains (July-September), so drive carefully</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Travel Tips:</strong> Start early morning for comfortable daytime travel. Carry drinking water and snacks. GPS navigation works well on all routes. If driving yourself, ensure your vehicle is well-serviced before the journey.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Which gate should I choose - Khatia or Mukki - if staying at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              If you're staying at Wildmark Resort, Khatia Gate is the recommended choice:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-3 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Proximity:</strong> Wildmark Resort is located very close to Khatia Gate, making it convenient for early morning safaris (5:30 AM) and evening safaris</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Zone Access:</strong> Khatia Gate provides access to three zones - Kisli, Kanha, and Sarhi - offering variety in safari experiences</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Wildlife Sightings:</strong> The Kanha zone accessible via Khatia is famous for Tigress Neelam and excellent Barahsingha sightings</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Time Saving:</strong> You can reach the gate within minutes from the resort, allowing you to maximize safari time</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              However, Mukki Gate safaris can also be arranged if you prefer to explore the Mukki zone. Our team can help you book safaris at either gate based on availability and your preferences.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How much time should I allocate for traveling from the airport/railway station to Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Here's a time breakdown for travel from major transportation hubs to Wildmark Resort:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Jabalpur Airport:</strong> 4-5 hours (130 km) - Plan to arrive by 2-3 PM if you have an evening safari</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Nagpur Airport:</strong> 5-6 hours (265 km) - Recommended to arrive a day before your first safari</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Jabalpur Railway Station:</strong> 4-5 hours (170 km) - Morning trains allow afternoon arrival</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>From Gondia Railway Station:</strong> 3-4 hours (145 km) - Closest railway option</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Pro Tip:</strong> If you have a morning safari (5:30 AM start), arrive the previous evening. Add 30-60 minutes buffer time for breaks, traffic, and check-in. Evening safaris start at 3:00 PM, so plan accordingly.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Footer -->
  <footer class="bg-black py-12 border-t border-neutral-800">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        <!-- About -->
        <div>
               <!-- Center Logo Desktop -->
        <a href="home.php" class="flex items-center">
          <img 
            src="images/WILD.png" 
            alt="Wildmark Resort Kanha Logo" 
            class="h-12 md:h-16 lg:h-20 w-auto object-contain"
          />
        </a>
          <p class="text-gray-400 text-sm mb-4">
            Unforgettable Wildlife Adventure Await at Kanha Jungle Safari. See tigers, deer, leopards & more on a
            personalized jungle safari. Visit & book online.
          </p>
          <div class="flex gap-3">
            <a href="#" class="text-gray-400 hover:text-amber-500 transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-amber-500 transition">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-amber-500 transition">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">
            Quick Links
          </h4>
          <ul class="space-y-2 text-sm">
            <li>
              <a href="home.php" class="text-gray-400 hover:text-amber-500 transition">Home</a>
            </li>
           
            <li>
              <a href="Wildmark.php" class="text-gray-400 hover:text-amber-500 transition">Wildmark</a>
            </li>
            <li>
              <a href="How-to-Reach.php" class="text-gray-400 hover:text-amber-500 transition">How to Reach</a>
            </li>
            <li>
              <a href="gallery.php" class="text-gray-400 hover:text-amber-500 transition">Gallery</a>
            </li>
            <li>
              <a href="contact.php" class="text-gray-400 hover:text-amber-500 transition">Contact Us</a>
            </li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">
            Help Center
          </h4>
          <ul class="space-y-2 text-sm">
            <li>
              <a href="Privacy-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Privacy Policy
              </a>
            </li>
            <li>
              <a href="Terms-and-Conditions.php" class="text-gray-400 hover:text-amber-500 transition">
                Terms and Conditions</a>
            </li>
            <li>
              <a href="Cancellation-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Cancellation Policy</a>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">
            Contact Info
          </h4>
          <ul class="space-y-3 text-sm text-gray-400">
            <li class="flex items-start gap-2">
              <i class="fa-solid fa-location-dot text-amber-500 mt-1"></i>
              <span>B.No. 8, Rajlaxmi Apartment Near Bhende Layout, Pannase Layout, Nagpur – 440022.</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-envelope text-amber-500"></i>
              <a href="mailto:kanhawildmark@gmail.com"
                class="text-gray-400 hover:text-amber-500 transition">kanhawildmark@gmail.com</a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-amber-500"></i>
              <a href="tel:9405529731" class="text-gray-400 hover:text-amber-500 transition">+91 9405529731</a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-amber-500"></i>
              <a href="tel:7719806444" class="text-gray-400 hover:text-amber-500 transition">+91 7719806444</a>
            </li>
          </ul>
        </div>


      </div>

      <!-- Bottom Bar -->
      <div class="border-t border-neutral-800 pt-6 text-center">
        <p class="text-gray-500 text-xs">
          © 2025 Wildmark Resort Kanha. All Rights Reserved.
        </p>
      </div>
    </div>
  </footer>
  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/9405529731" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>


    <!-- AOS & Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById("mobileMenuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                mobileMenu.classList.toggle("active");
            });
        }

        // Mobile Packages Dropdown
        const mobilePackagesBtn = document.getElementById("mobilePackagesBtn");
        const mobilePackagesDropdown = document.getElementById(
            "mobilePackagesDropdown"
        );
        const packagesArrow = document.getElementById("packagesArrow");

        if (mobilePackagesBtn && mobilePackagesDropdown && packagesArrow) {
            mobilePackagesBtn.addEventListener("click", (e) => {
                e.preventDefault();
                e.stopPropagation();
                mobilePackagesDropdown.classList.toggle("active");

                if (mobilePackagesDropdown.classList.contains("active")) {
                    packagesArrow.style.transform = "rotate(180deg)";
                } else {
                    packagesArrow.style.transform = "rotate(0deg)";
                }
            });
        }

        // Close menu on outside click
        document.addEventListener("click", (e) => {
            if (mobileMenu && mobileMenuBtn) {
                if (
                    !mobileMenu.contains(e.target) &&
                    !mobileMenuBtn.contains(e.target)
                ) {
                    mobileMenu.classList.remove("active");
                    if (mobilePackagesDropdown) {
                        mobilePackagesDropdown.classList.remove("active");
                    }
                    if (packagesArrow) {
                        packagesArrow.style.transform = "rotate(0deg)";
                    }
                }
            }
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
</body>

</html>