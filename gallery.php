<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <title>Resort Gallery - Wildmark Resort Kanha | Luxury Wildlife Resort Photos</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- AOS Library -->
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    /* CRITICAL OVERFLOW FIXES */
    * {
      box-sizing: border-box;
    }

    html,
    body {
      max-width: 100vw;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Roboto Mono", monospace;
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

    /* Responsive Container */
    .container {
      width: 100%;
      max-width: 100%;
      margin-left: auto;
      margin-right: auto;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    @media (min-width: 640px) {
      .container {
        max-width: 640px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 768px;
      }
    }

    @media (min-width: 1024px) {
      .container {
        max-width: 1024px;
      }
    }

    @media (min-width: 1280px) {
      .container {
        max-width: 1200px;
      }
    }

    /* IMPROVED DROPDOWN */
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
    }

    /* Mobile menu */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }

    .mobile-menu.active {
      max-height: 800px;
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

    /* Hero Section */
    .hero-banner {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('image/1-4.png');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 500px;
    }

    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Gallery Filter Buttons */
    .filter-btn {
      position: relative;
      transition: all 0.3s ease;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.875rem;
      letter-spacing: 0.05em;
      overflow: hidden;
    }

    .filter-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .filter-btn:hover::before {
      left: 100%;
    }

    .filter-btn.active {
      background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
      color: white;
      box-shadow: 0 8px 20px rgba(245, 158, 11, 0.4);
      transform: translateY(-2px);
    }

    /* EQUAL-SIZED GRID GALLERY - FIXED */
    .gallery-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }

    @media (min-width: 640px) {
      .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .gallery-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (min-width: 1536px) {
      .gallery-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      height: 300px;
      width: 100%;
    }

    .gallery-item:hover {
      transform: scale(1.02);
      box-shadow: 0 20px 40px rgba(245, 158, 11, 0.3);
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      border-radius: 1rem;
    }

    .gallery-item:hover img {
      transform: scale(1.1);
      filter: brightness(1.1);
    }

    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 50%);
      opacity: 0;
      transition: opacity 0.4s ease;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 1.5rem;
      border-radius: 1rem;
    }

    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }

    .gallery-title {
      color: white;
      font-size: 1rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
      transform: translateY(20px);
      transition: transform 0.4s ease;
    }

    .gallery-category {
      color: #fbbf24;
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      transform: translateY(20px);
      transition: transform 0.4s ease 0.1s;
    }

    .gallery-item:hover .gallery-title,
    .gallery-item:hover .gallery-category {
      transform: translateY(0);
    }

    /* Lightbox Modal */
    .lightbox {
      display: none;
      position: fixed;
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.95);
      backdrop-filter: blur(10px);
      align-items: center;
      justify-content: center;
      animation: fadeIn 0.3s ease;
    }

    .lightbox.active {
      display: flex;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .lightbox-content {
      max-width: 90%;
      max-height: 90%;
      position: relative;
      animation: zoomIn 0.3s ease;
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.8);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    .lightbox-content img {
      max-width: 100%;
      max-height: 90vh;
      border-radius: 0.5rem;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    }

    .lightbox-close {
      position: absolute;
      top: -50px;
      right: 0;
      background: rgba(245, 158, 11, 0.9);
      color: white;
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 1.5rem;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .lightbox-close:hover {
      background: #d97706;
      transform: rotate(90deg);
    }

    .lightbox-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(245, 158, 11, 0.9);
      color: white;
      border: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 1.5rem;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .lightbox-nav:hover {
      background: #d97706;
      transform: translateY(-50%) scale(1.1);
    }

    .lightbox-prev {
      left: 20px;
    }

    .lightbox-next {
      right: 20px;
    }

    /* Stats Counter */
    .stat-item {
      text-align: center;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 1rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
    }

    .stat-item:hover {
      background: rgba(245, 158, 11, 0.1);
      border-color: rgba(245, 158, 11, 0.3);
      transform: translateY(-5px);
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Category Icons */
    .category-icon {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
      transition: all 0.3s ease;
    }

    .category-icon i {
      font-size: 1.75rem;
      color: #2d5a47;
    }

    .category-card:hover .category-icon {
      transform: scale(1.1) rotate(5deg);
    }

    /* Loading Animation */
    .loading {
      display: inline-block;
      width: 20px;
      height: 20px;
      border: 3px solid rgba(245, 158, 11, 0.3);
      border-radius: 50%;
      border-top-color: #f59e0b;
      animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    /* Fade In Animation */
    .fade-in {
      animation: fadeInUp 0.6s ease forwards;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body class="bg-neutral-900 text-white overflow-x-hidden">
  <!-- Navigation -->
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

        <!-- Center Logo on Mobile -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
          <a href="home.php" class="flex items-center">
            <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo" class="h-14 w-auto object-contain" />
          </a>
        </div>

        <!-- Right Side - Only Book Now Button -->
        <div class="flex items-center">
          <a href="contact.php" class="bg-amber-600 hover:bg-amber-700 px-3 py-2 transition text-xs font-semibold">
            BOOK NOW
          </a>
        </div>
      </div>

      <!-- Desktop Layout -->
      <div class="hidden md:flex justify-between items-center">
        <!-- Left - Logo Desktop -->
        <div class="flex items-center">
          <a href="home.php" class="flex items-center">
            <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo"
              class="h-12 md:h-14 lg:h-16 w-auto object-contain" />
          </a>
        </div>

        <!-- Center - Menu Items Desktop -->
        <div class="flex-1 flex justify-center">
          <div class="flex space-x-4 lg:space-x-8 text-xs lg:text-sm font-light tracking-wider items-center">
            <a href="home.php" class="hover:text-amber-500 transition">Home</a>
            <a href="How-to-Reach.php" class="hover:text-amber-500 transition">How to Reach</a>
            <a href="about.php" class="hover:text-amber-500 transition">About</a>
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
            <div id="mobilePackagesDropdown" class="mobile-packages-dropdown">
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
<header class="relative h-[70vh] md:h-[80vh] lg:h-[90vh] flex items-end"
        style="background: url('images/home3.webp') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>
  <!-- Hero Banner Section -->
  


  <!-- Gallery Filter Section -->
  <section class="py-12 md:py-16 bg-[#121212]">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <!-- Section Header -->
      <div class="text-center mb-10 md:mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          BROWSE BY CATEGORY
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Photo Gallery
        </h2>
      </div>

      <!-- Filter Buttons -->
      <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-12" data-aos="fade-up" data-aos-delay="200">
        <button class="filter-btn active" data-filter="all">
          <i class="fas fa-th mr-2"></i>All Photos
        </button>
        <button class="filter-btn bg-neutral-800 text-gray-300 border border-neutral-700" data-filter="wildlife">
          <i class="fas fa-paw mr-2"></i>Wildlife
        </button>
        <button class="filter-btn bg-neutral-800 text-gray-300 border border-neutral-700" data-filter="resort">
          <i class="fas fa-hotel mr-2"></i>Resort
        </button>
        
      </div>

      <!-- Equal-Sized Gallery Grid -->
      <div class="gallery-grid" id="galleryGrid">
        <!-- Wildlife Photos -->
        <div class="gallery-item fade-in" data-category="wildlife" data-index="0">
          <img src="images/about3.webp" alt="Bengal Tiger in Kanha" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Bengal Tiger</div>
            <div class="gallery-category">Wildlife</div>
          </div>
        </div>

        <div class="gallery-item fade-in" data-category="wildlife" data-index="1">
          <img src="images/tour2.png" alt="Tiger Sighting" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Majestic Tiger</div>
            <div class="gallery-category">Wildlife</div>
          </div>
        </div>

        <div class="gallery-item fade-in" data-category="wildlife" data-index="2">
          <img src="images/home3.webp" alt="Wildlife Safari" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Wildlife Safari</div>
            <div class="gallery-category">Wildlife</div>
          </div>
        </div>
         <div class="gallery-item fade-in" data-category="rooms" data-index="3">
          <img src="images/beded2.webp" alt="Premium Room" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Premium Suite</div>
            <div class="gallery-category">Rooms</div>
          </div>
        </div>
         <div class="gallery-item fade-in" data-category="rooms" data-index="4">
          <img src="images/tour3.png" alt="Premium Room" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Premium Suite</div>
            <div class="gallery-category">Rooms</div>
          </div>
        </div>
         <div class="gallery-item fade-in" data-category="rooms" data-index="5">
          <img src="images/tour4.png" alt="Premium Room" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Premium Suite</div>
            <div class="gallery-category">Rooms</div>
          </div>
        </div>
         <div class="gallery-item fade-in" data-category="rooms" data-index="6">
          <img src="images/tour5.png" alt="Premium Room" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Premium Suite</div>
            <div class="gallery-category">Rooms</div>
          </div>
        </div>

        <!-- Resort Photos -->
        <div class="gallery-item fade-in" data-category="resort" data-index="3">
          <img src="images/wildmark1.JPG" alt="Resort Exterior" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Resort Entrance</div>
            <div class="gallery-category">Resort</div>
          </div>
        </div>

        <div class="gallery-item fade-in" data-category="resort" data-index="4">
          <img src="images/wildmark2.jpg" alt="Resort Aerial View" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Aerial View</div>
            <div class="gallery-category">Resort</div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-category="resort" data-index="5">
          <img src="images/wildmark6.jpg" alt="Resort Aerial View" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Aerial View</div>
            <div class="gallery-category">Resort</div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-category="resort" data-index="6">
          <img src="images/wildmark7.JPG" alt="Resort Aerial View" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Aerial View</div>
            <div class="gallery-category">Resort</div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-category="resort" data-index="6">
          <img src="images/home7.webp" alt="Resort Aerial View" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Aerial View</div>
            <div class="gallery-category">Resort</div>
          </div>
        </div>

        <!-- Room Photos -->
        <div class="gallery-item fade-in" data-category="rooms" data-index="5">
          <img src="images/wildmark9.jpg" alt="Super Deluxe Room" loading="lazy" />
          <div class="gallery-overlay">
            <div class="gallery-title">Super Deluxe Room</div>
            <div class="gallery-category">Rooms</div>
          </div>
        </div>

       

        

       
        

       


      <!-- Load More Button -->
      
    </div>
  </section>

  <!-- Lightbox Modal -->
  <div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightboxClose">
      <i class="fas fa-times"></i>
    </button>
    <button class="lightbox-nav lightbox-prev" id="lightboxPrev">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="lightbox-nav lightbox-next" id="lightboxNext">
      <i class="fas fa-chevron-right"></i>
    </button>
    <div class="lightbox-content">
      <img src="" alt="" id="lightboxImage" />
    </div>
  </div>

  <!-- Call to Action -->
  <section class="py-16 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
      <div class="category-icon" data-aos="zoom-in">
        <i class="fas fa-camera"></i>
      </div>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6" data-aos="fade-up">
        Create Your Own Memories
      </h2>
      <p class="text-base md:text-lg text-gray-300 mb-8 leading-relaxed max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        Every photograph tells a story. Come experience the magic of Kanha and create your own unforgettable moments at Wildmark Resort.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
        <a href="contact.php" class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg transition font-semibold text-base shadow-lg">
          <i class="fas fa-calendar-check mr-2"></i>BOOK YOUR STAY
        </a>
        <a href="home.php" class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-3 rounded-lg transition font-semibold text-base">
          <i class="fas fa-home mr-2"></i>BACK TO HOME
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
<!-- FAQs Section - Wildmark Resort Gallery -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        GALLERY INFORMATION
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Gallery FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Everything you need to know about our photo gallery
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">
      
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How many photos are there in the Wildmark Resort gallery?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our gallery features over 200+ stunning photographs showcasing the beauty of Wildmark Resort and Kanha National Park:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>100+ Wildlife Photos:</strong> Featuring majestic tigers, deer, leopards, and other wildlife species</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>50+ Resort Views:</strong> Showcasing our colonial-style bungalows, gardens, and facilities</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>8 Categories:</strong> Wildlife, Resort, Rooms, Dining, Activities, Nature, Sunsets, and more</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Regular Updates:</strong> We continuously add new photos from guest experiences and safari adventures</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What categories are available in the photo gallery?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our gallery is organized into 8 distinct categories for easy browsing:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Wildlife:</strong> Bengal tigers, deer, leopards, and other animals in their natural habitat</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Resort:</strong> Exterior views, gardens, swimming pool, and resort architecture</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Rooms:</strong> Super Deluxe rooms, Family rooms, and interior amenities</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Dining:</strong> Our restaurant, outdoor dining areas, and culinary experiences</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Activities:</strong> Safari experiences, jungle drives, and adventure activities</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Nature:</strong> Kanha forest landscapes, flora, and scenic trails</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Sunsets:</strong> Golden hour photography and evening safari moments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Can I download or use photos from the gallery?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Here's what you need to know about using our gallery photos:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Personal Use:</strong> You can view and share photos for personal reference and trip planning</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Social Media:</strong> Tag us when sharing on social media - we love seeing your enthusiasm!</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Copyright:</strong> All photos are copyrighted property of Wildmark Resort</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Commercial Use:</strong> Please contact us for permission if you need high-resolution images for commercial purposes</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Your Own Photos:</strong> Guests are welcome to take unlimited photos during their stay!</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Are the wildlife photos taken at Wildmark Resort or Kanha National Park?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our wildlife photographs come from both locations:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Kanha National Park:</strong> Most tiger, deer, and leopard photos are captured during safari expeditions inside the park</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Buffer Zone:</strong> Some wildlife sightings occur near the resort in the buffer area</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safari Experiences:</strong> Photos represent real safari experiences available to our guests</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Multiple Zones:</strong> Images from Kanha, Kisli, Sarhi, and Mukki zones</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Professional Quality:</strong> Mix of professional photography and guest captures showcasing authentic wildlife encounters</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Can I submit my photos to be featured in the gallery?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Absolutely! We love showcasing our guests' photography:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Guest Contributions:</strong> Share your best wildlife and resort photos with us via email at <a href="mailto:kanhawildmark@gmail.com" class="text-amber-400 hover:text-amber-300">kanhawildmark@gmail.com</a></span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Social Media:</strong> Tag us on Instagram and Facebook - we regularly feature guest photos on our social channels</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Photo Guidelines:</strong> High-resolution images (minimum 1920x1080px) work best for gallery display</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Credit:</strong> We always credit photographers when featuring guest photos</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Community Building:</strong> Your photos inspire future guests and showcase authentic experiences at Wildmark Resort</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the best time to capture wildlife photographs at Kanha?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Timing is everything for spectacular wildlife photography:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Early Morning Safari:</strong> 6:00 AM - Best light conditions and active wildlife (golden hour photography)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Evening Safari:</strong> 3:00 PM onwards - Sunset shots and animals becoming active again</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Winter Season:</strong> November to February - Best visibility, pleasant weather, peak tiger sighting season</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Summer Months:</strong> April-May - Animals gather near water sources, easier to spot and photograph</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Equipment:</strong> Bring telephoto lens (200-400mm recommended), extra batteries, and memory cards</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Pro Tip:</strong> Our proximity to Khatia Gate means you get maximum safari time and prime photography opportunities!</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How can I view high-resolution versions of the photos?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Viewing larger, higher quality photos is easy:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Lightbox Feature:</strong> Simply click on any photo to open it in full-screen lightbox mode</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Navigation:</strong> Use arrow keys or on-screen buttons to browse through images</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Mobile Friendly:</strong> Gallery is fully optimized for smartphones and tablets</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Zoom Capability:</strong> Lightbox allows you to see photos in maximum detail</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Filter by Category:</strong> Use category buttons to view specific types of photos</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Do these photos accurately represent what I'll experience at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Absolutely! Our gallery reflects authentic experiences:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Real Photos:</strong> All images are genuine, unedited representations of the resort and wildlife</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Actual Accommodations:</strong> Room photos show the exact spaces you'll be staying in</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Wildlife Reality:</strong> Tiger sightings aren't guaranteed, but photos represent genuine safari experiences</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Resort Facilities:</strong> Swimming pool, gardens, and amenities are photographed as they currently appear</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Honest Representation:</strong> We believe in transparency - what you see is what you get!</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Guest Testimonials:</strong> Check our reviews to hear from guests who've experienced everything shown in the gallery</span>
              </li>
            </ul>
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
          <a href="home.php" class="flex items-center">
            <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo"
              class="h-12 md:h-16 lg:h-20 w-auto object-contain" />
          </a>
          <p class="text-gray-400 text-sm mb-4">
            Unforgettable Wildlife Adventure Await at Kanha Jungle Safari. See tigers, deer, leopards & more on a personalized jungle safari.
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
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">Quick Links</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="home.php" class="text-gray-400 hover:text-amber-500 transition">Home</a></li>
            <li><a href="Wildmark.php" class="text-gray-400 hover:text-amber-500 transition">Wildmark</a></li>
            <li><a href="How-to-Reach.php" class="text-gray-400 hover:text-amber-500 transition">How to Reach</a></li>
            <li><a href="contact.php" class="text-gray-400 hover:text-amber-500 transition">Contact Us</a></li>
            <li><a href="gallery.php" class="text-gray-400 hover:text-amber-500 transition">gallery</a></li>
          </ul>
        </div>

        <!-- Help Center -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">Help Center</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="Privacy-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Privacy Policy</a></li>
            <li><a href="Terms-and-Conditions.php" class="text-gray-400 hover:text-amber-500 transition">Terms and Conditions</a></li>
            <li><a href="Cancellation-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Cancellation Policy</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="text-lg font-serif font-bold text-amber-100 mb-4">Contact Info</h4>
          <ul class="space-y-3 text-sm text-gray-400">
            <li class="flex items-start gap-2">
              <i class="fa-solid fa-location-dot text-amber-500 mt-1"></i>
              <span>B.No. 8, Rajlaxmi Apartment Near Bhende Layout, Pannase Layout, Nagpur – 440022.</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-envelope text-amber-500"></i>
              <a href="mailto:kanhawildmark@gmail.com" class="text-gray-400 hover:text-amber-500 transition">kanhawildmark@gmail.com</a>
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
        <p class="text-gray-500 text-xs">© 2025 Wildmark Resort Kanha. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/9405529731" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>

  <!-- AOS Init -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    // Initialize AOS
    AOS.init({
      duration: 900,
      once: true,
      offset: 80,
    });

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
    const mobilePackagesDropdown = document.getElementById("mobilePackagesDropdown");
    const packagesArrow = document.getElementById("packagesArrow");

    if (mobilePackagesBtn && mobilePackagesDropdown) {
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

    // Close mobile menu when clicking outside
    document.addEventListener("click", (e) => {
      if (mobileMenu && mobileMenuBtn) {
        if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
          mobileMenu.classList.remove("active");
          if (mobilePackagesDropdown) {
            mobilePackagesDropdown.classList.remove("active");
            if (packagesArrow) {
              packagesArrow.style.transform = "rotate(0deg)";
            }
          }
        }
      }
    });

    // Gallery Filter Functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');
        
        // Update active button
        filterBtns.forEach(b => {
          b.classList.remove('active');
          b.classList.add('bg-neutral-800', 'text-gray-300', 'border', 'border-neutral-700');
        });
        btn.classList.add('active');
        btn.classList.remove('bg-neutral-800', 'text-gray-300', 'border', 'border-neutral-700');

        // Filter gallery items
        galleryItems.forEach(item => {
          const category = item.getAttribute('data-category');
          
          if (filter === 'all' || category === filter) {
            item.style.display = 'block';
            setTimeout(() => {
              item.style.opacity = '1';
              item.style.transform = 'scale(1)';
            }, 10);
          } else {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.8)';
            setTimeout(() => {
              item.style.display = 'none';
            }, 300);
          }
        });
      });
    });

    // Lightbox Functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    let currentImageIndex = 0;
    let visibleImages = [];

    // Update visible images array
    function updateVisibleImages() {
      visibleImages = Array.from(document.querySelectorAll('.gallery-item'))
        .filter(item => item.style.display !== 'none')
        .map(item => ({
          src: item.querySelector('img').src,
          alt: item.querySelector('img').alt
        }));
    }

    // Open lightbox
    galleryItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        updateVisibleImages();
        const imgSrc = item.querySelector('img').src;
        const imgAlt = item.querySelector('img').alt;
        
        currentImageIndex = visibleImages.findIndex(img => img.src === imgSrc);
        
        lightboxImage.src = imgSrc;
        lightboxImage.alt = imgAlt;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
      });
    });

    // Close lightbox
    lightboxClose.addEventListener('click', () => {
      lightbox.classList.remove('active');
      document.body.style.overflow = 'auto';
    });

    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
      }
    });

    // Navigate images
    lightboxPrev.addEventListener('click', (e) => {
      e.stopPropagation();
      currentImageIndex = (currentImageIndex - 1 + visibleImages.length) % visibleImages.length;
      lightboxImage.src = visibleImages[currentImageIndex].src;
      lightboxImage.alt = visibleImages[currentImageIndex].alt;
    });

    lightboxNext.addEventListener('click', (e) => {
      e.stopPropagation();
      currentImageIndex = (currentImageIndex + 1) % visibleImages.length;
      lightboxImage.src = visibleImages[currentImageIndex].src;
      lightboxImage.alt = visibleImages[currentImageIndex].alt;
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (!lightbox.classList.contains('active')) return;
      
      if (e.key === 'Escape') {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
      } else if (e.key === 'ArrowLeft') {
        lightboxPrev.click();
      } else if (e.key === 'ArrowRight') {
        lightboxNext.click();
      }
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '#book') {
          e.preventDefault();
          const target = document.querySelector(href);
          if (target) {
            const navHeight = document.querySelector('nav')?.offsetHeight || 100;
            const targetPosition = target.offsetTop - navHeight;
            window.scrollTo({
              top: targetPosition,
              behavior: 'smooth',
            });
          }
        }
      });
    });

    // Prevent horizontal scroll
    document.body.style.overflowX = 'hidden';
    document.documentElement.style.overflowX = 'hidden';

    // Initialize visible images on load
    updateVisibleImages();
  </script>
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
</body>

</html>