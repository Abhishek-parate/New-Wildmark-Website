<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Wildmark Resort Kanha'; ?></title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
/* Hide scrollbar for entire body/page */
body {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE and Edge */
}

body::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}

/* Hide scrollbar for all sections */
section {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

section::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for html element too */
html {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

html::-webkit-scrollbar {
    display: none;
}

/* If you have any div with overflow */
div {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

div::-webkit-scrollbar {
    display: none;
}
/* Step 2: Har element ko box-sizing de do */
*, *::before, *::after {
  box-sizing: border-box !important;
}

/* Step 3: Sabhi sections ko contain kar do */
section {
  overflow-x: hidden !important;
  max-width: 100vw !important;
  width: 100% !important;
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
       
      <!-- Center Logo on Mobile -->
      <div class="absolute left-1/2 transform -translate-x-1/2">
        <a href="index.php" class="flex items-center">
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
        <a href="index.php" class="flex items-center">
          <img 
            src="images/WILD.png" 
            alt="Wildmark Resort Kanha Logo" 
            class="h-12 md:h-14 lg:h-16 w-auto object-contain "
          />
        </a>
      </div>
      
      <!-- Center - Menu Items Desktop -->
      <div class="flex-1 flex justify-center">
        <div class="flex space-x-4 lg:space-x-8 text-xs lg:text-sm font-light tracking-wider items-center">
          <a href="index.php" class="hover:text-amber-500 transition">Home</a>
          <a href="about.php" class="hover:text-amber-500 transition">About</a>
          <a href="How-to-Reach.php" class="hover:text-amber-500 transition">How to Reach</a>

          <!-- Packages Dropdown -->
          <div class="dropdown">
            <button class="hover:text-amber-500 transition flex items-center gap-1">
              Packages
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="mega-menu">
              <div class="bg-neutral-900 border border-neutral-800 p-4 shadow-xl">
                <div class="grid gap-2">
                  <a href="Kanha-Tour-Package.php" class="hover:text-amber-500 py-1 text-xs whitespace-nowrap">
                    Kanha Tour Package
                  </a>
                  <a href="Kanha-Tiger-Safari-Tour-Package.php" class="hover:text-amber-500 py-1 text-xs whitespace-nowrap">
                    Kanha Tiger Safari Tour Package
                  </a>
                  <a href="Kanha-Safari-Tour-Package.php" class="hover:text-amber-500 py-1 text-xs whitespace-nowrap">
                    Kanha Safari Tour Package
                  </a>
                  <a href="Mukki-Zone-Tour-Package.php" class="hover:text-amber-500 py-1 text-xs whitespace-nowrap">
                    Mukki Zone Tour Package
                  </a>
                  <a href="Kanha-Kisli-Tour-Package.php" class="hover:text-amber-500 py-1 text-xs whitespace-nowrap">
                    Kanha Kisli Tour Package
                  </a>
                </div>
              </div>
            </div>
          </div>

        

          <a href="Wildmark.php" class="hover:text-amber-500 transition">Wildmark</a>
          <a href="kanha.php" class="hover:text-amber-500 transition">Kanha</a>
          
          
        </div>
      </div>

      <!-- Right - Book Now Button -->
      <div>
        <a href="contact.php" class="bg-amber-600 hover:bg-amber-700 px-4 py-2 text-xs lg:text-sm transition font-semibold">
          BOOK NOW
        </a>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu md:hidden bg-black border-t border-neutral-800 mt-3">
      <div class="py-4 space-y-1">
        <a href="index.php" class="block px-4 py-2 hover:bg-neutral-900 hover:text-amber-500 transition text-sm">
          Home
        </a>
        <a href="about.php" class="block px-4 py-2 hover:bg-neutral-900 hover:text-amber-500 transition text-sm">
          About
        </a>
        <a href="How-to-Reach.php" class="block px-4 py-2 hover:bg-neutral-900 hover:text-amber-500 transition text-sm">
          How to Reach
        </a>

        <!-- Mobile Packages -->
        <div>
          <button id="mobilePackagesBtn"
            class="w-full flex justify-between items-center px-4 py-2 hover:bg-neutral-900 hover:text-amber-500 transition text-sm">
            <span>Packages</span>
            <svg id="packagesArrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="mobilePackagesDropdown" class="mobile-packages-dropdown bg-neutral-900">
            <a href="Kanha-Tour-Package.php"
              class="block px-8 py-2 hover:bg-neutral-800 hover:text-amber-500 transition text-xs">
              Kanha Tour Package
            </a>
            <a href="Kanha-Tiger-Safari-Tour-Package.php"
              class="block px-8 py-2 hover:bg-neutral-800 hover:text-amber-500 transition text-xs">
              Kanha Tiger Safari Tour Package
            </a>
            <a href="Kanha-Safari-Tour-Package.php"
              class="block px-8 py-2 hover:bg-neutral-800 hover:text-amber-500 transition text-xs">
              Kanha Safari Tour Package
            </a>
            <a href="Mukki-Zone-Tour-Package.php"
              class="block px-8 py-2 hover:bg-neutral-800 hover:text-amber-500 transition text-xs">
              Mukki Zone Tour Package
            </a>
            <a href="Kanha-Kisli-Tour-Package.php"
              class="block px-8 py-2 hover:bg-neutral-800 hover:text-amber-500 transition text-xs">
              Kanha Kisli Tour Package
            </a>
          </div>
        </div>

        <!-- Mobile Rooms -->
        

        <a href="Wildmark.php" class="block px-4 py-2 hover:bg-neutral-900 hover:text-amber-500 transition text-sm">
          Wildmark
        </a>
        <a href="kanha.php" class="block px-4 py-2 hover:bg-neutral-900 hover:text-amber-500 transition text-sm">
          Kanha
        </a>
        
        
      </div>
    </div>
  </div>
</nav>