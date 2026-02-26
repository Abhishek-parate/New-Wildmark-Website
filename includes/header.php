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

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G072G84M0P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G072G84M0P');
</script>
    <style>
    /* ============================================================
       ROOT CSS VARIABLES — 4 BRAND COLORS
       ============================================================ */
    :root {
        --bg1:  #E8C999;   /* warm golden */
        --bg2:  #F8EEDF;   /* cream white */
        --txt1: #000000;   /* pure black  */
        --txt2: #8E1616;   /* deep red    */
    }

    /* ============================================================
       GLOBAL SCROLLBAR HIDE
       ============================================================ */
    html, body, section, div {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    html::-webkit-scrollbar,
    body::-webkit-scrollbar,
    section::-webkit-scrollbar,
    div::-webkit-scrollbar { display: none; }

    /* ============================================================
       BOX SIZING & OVERFLOW
       ============================================================ */
    *, *::before, *::after { box-sizing: border-box !important; }
    section {
        overflow-x: hidden !important;
        max-width: 100vw !important;
        width: 100% !important;
    }

    /* ============================================================
       TYPOGRAPHY
       ============================================================ */
    .font-serif,
    h1, h2, h3, h4, h5, h6 {
        font-family: "Roboto Slab", serif;
    }

    /* ============================================================
       NAVBAR — bg2 background, txt1 links, txt2 accents
       ============================================================ */
    .navbar-root {
        background-color: var(--bg2);
        border-bottom: 2px solid var(--bg1);
    }

    /* Nav links */
    .nav-link {
        color: var(--txt1);
        font-size: 0.8rem;
        letter-spacing: 0.05em;
        font-weight: 500;
        transition: color 0.2s;
        text-decoration: none;
    }
    .nav-link:hover { color: var(--txt2); }

    /* Active / current page link */
    .nav-link.active { color: var(--txt2); font-weight: 700; }

    /* Book Now button */
    .btn-book {
        background-color: var(--txt2);
        color: #fff;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        padding: 0.5rem 1rem;
        transition: background-color 0.2s;
        display: inline-block;
        text-align: center;
        text-decoration: none;
    }
    .btn-book:hover { background-color: #6b1010; }

    /* Hamburger icon */
    .hamburger-icon { color: var(--txt1); }
    .hamburger-icon:hover { color: var(--txt2); }

    /* ============================================================
       DROPDOWN MEGA MENU
       ============================================================ */
    .dropdown { position: relative; }

    .dropdown:hover .mega-menu,
    .dropdown .mega-menu:hover { display: block; }

    .mega-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        padding-top: 0.75rem;
        min-width: 220px;
        z-index: 100;
    }

    .mega-menu-inner {
        background-color: var(--bg2);
        border: 1.5px solid var(--bg1);
        border-top: 3px solid var(--txt2);
        padding: 1rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }

    .mega-menu-inner a {
        display: block;
        padding: 0.4rem 0;
        font-size: 0.75rem;
        color: var(--txt1);
        white-space: nowrap;
        text-decoration: none;
        border-bottom: 1px solid rgba(232,201,153,0.4);
        transition: color 0.2s, padding-left 0.2s;
    }
    .mega-menu-inner a:last-child { border-bottom: none; }
    .mega-menu-inner a:hover {
        color: var(--txt2);
        padding-left: 0.5rem;
    }

    /* Dropdown arrow button */
    .dropdown-btn {
        display: flex;
        align-items: center;
        gap: 4px;
        background: none;
        border: none;
        cursor: pointer;
        color: var(--txt1);
        font-size: 0.8rem;
        letter-spacing: 0.05em;
        font-weight: 500;
        transition: color 0.2s;
        padding: 0;
    }
    .dropdown-btn:hover { color: var(--txt2); }
    .dropdown-btn svg { width: 12px; height: 12px; }

    /* ============================================================
       MOBILE MENU
       ============================================================ */
    .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease-out;
        width: 100%;
        background-color: var(--bg2);
    }
    .mobile-menu.active {
        max-height: 800px;
        overflow-y: auto;   
        border-top: 2px solid var(--bg1);
    }

    .mobile-nav-link {
        display: block;
        padding: 0.6rem 1rem;
        font-size: 0.875rem;
        color: var(--txt1);
        text-decoration: none;
        border-bottom: 1px solid rgba(232,201,153,0.3);
        transition: background-color 0.2s, color 0.2s;
    }
    .mobile-nav-link:hover {
        background-color: var(--bg1);
        color: var(--txt2);
    }

    /* Mobile packages toggle button */
    .mobile-pkg-btn {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 1rem;
        font-size: 0.875rem;
        color: var(--txt1);
        background: none;
        border: none;
        border-bottom: 1px solid rgba(232,201,153,0.3);
        cursor: pointer;
        transition: background-color 0.2s, color 0.2s;
    }
    .mobile-pkg-btn:hover {
        background-color: var(--bg1);
        color: var(--txt2);
    }

    /* Mobile packages dropdown inner */
    .mobile-packages-dropdown {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
        background-color: var(--bg1);
    }
    .mobile-packages-dropdown.active { max-height: 500px; }

    .mobile-packages-dropdown a {
        display: block;
        padding: 0.5rem 2rem;
        font-size: 0.75rem;
        color: var(--txt1);
        text-decoration: none;
        border-bottom: 1px solid rgba(0,0,0,0.06);
        transition: color 0.2s, background-color 0.2s;
    }
    .mobile-packages-dropdown a:hover {
        color: var(--txt2);
        background-color: rgba(142,22,22,0.06);
    }

    /* Mobile word wrap */
    .mobile-menu a,
    .mobile-menu button,
    .mobile-menu span {
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-word;
        hyphens: auto;
        max-width: 100%;
    }

    /* ============================================================
       TOP ACCENT BAR (optional thin red line at very top)
       ============================================================ */
    .navbar-accent-bar {
        height: 3px;
        background: linear-gradient(to right, var(--txt2), var(--bg1), var(--txt2));
        width: 100%;
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
        body { font-size: 14px; }
        h2   { font-size: 1.5rem; }
        h3   { font-size: 1.25rem; }
        p, span, a, li {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    }

    /* AOS init guard */
    [data-aos] { pointer-events: none; }
    [data-aos].aos-animate { pointer-events: auto; }
    </style>
</head>

<body style="background-color:var(--bg2);color:var(--txt1)">

<!-- SPECIAL OFFER BUTTON -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="white" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
    <span class="absolute -top-1 -right-1 text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce" style="background-color: var(--bg1); color: var(--text2);">Offers</span>
</button>

<!-- SPECIAL OFFER POPUP -->
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
                <svg class="w-8 h-8 text-white" fill="#ffffff" stroke="currentColor" viewBox="0 0 24 24">
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
                <p class="text-sm mb-4" style="color: var(--text1);">Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March 31, 2026.</p>
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
            <p class="text-sm font-semibold" style="color: var(--text2);">⏰ Offers valid till March 31, 2026 | Terms & Conditions Apply</p>
        </div>
    </div>
</div>

<!-- WhatsApp Floating Chat Button -->
<a href="https://wa.me/918830996719?text=Hello%20I%20would%20like%20to%20enquire%20about%20room%20availability%20and%20packages%20at%20Wildmark%20Resort.%20Please%20share%20details."
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat on WhatsApp"
   class="fixed bottom-5 right-5 md:bottom-8 md:right-8 
          w-14 h-14 md:w-16 md:h-16 
          rounded-full flex items-center justify-center 
          shadow-xl z-50 
          transition-transform duration-300 hover:scale-110"
   style="background-color:#25D366;">

    <!-- Official WhatsApp Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" 
         viewBox="0 0 32 32" 
         width="28" height="28" 
         fill="white">
        <path d="M16.001 3C9.373 3 4 8.373 4 15c0 2.646.862 5.092 2.326 7.07L4 29l7.13-2.29A11.944 11.944 0 0016 27c6.627 0 12-5.373 12-12S22.628 3 16.001 3zm0 21.8c-1.91 0-3.702-.507-5.25-1.393l-.375-.222-4.234 1.36 1.385-4.123-.243-.399A9.773 9.773 0 016.2 15c0-5.411 4.39-9.8 9.801-9.8 5.41 0 9.8 4.389 9.8 9.8 0 5.41-4.39 9.8-9.8 9.8zm5.376-7.274c-.293-.146-1.73-.854-1.997-.951-.268-.098-.463-.147-.658.147-.195.293-.756.951-.927 1.146-.17.195-.342.22-.634.073-.293-.146-1.236-.455-2.355-1.453-.87-.775-1.457-1.732-1.627-2.025-.17-.293-.018-.451.128-.597.131-.13.293-.342.439-.512.146-.171.195-.293.293-.488.098-.195.049-.366-.024-.512-.073-.146-.658-1.585-.902-2.172-.238-.57-.48-.493-.658-.502l-.561-.01c-.195 0-.512.073-.78.366-.268.293-1.024 1-1.024 2.439 0 1.439 1.049 2.83 1.195 3.025.146.195 2.064 3.152 5.002 4.417.699.302 1.243.482 1.668.617.701.223 1.338.191 1.842.116.562-.083 1.73-.707 1.974-1.39.244-.683.244-1.268.17-1.39-.073-.122-.268-.195-.561-.341z"/>
    </svg>

</a>

<!-- ============================================================
     NAVBAR
     ============================================================ -->
<nav class="navbar-root fixed w-full z-50 py-0" data-aos="fade-down" data-aos-duration="800">

    <!-- Thin accent bar at very top -->
    <div class="navbar-accent-bar"></div>

    <div class="w-full max-w-[1400px] mx-auto px-3 md:px-6 py-2 md:py-0">

        <!-- ── MOBILE LAYOUT ── -->
        <div class="flex md:hidden justify-between items-center relative py-2">

            <!-- Hamburger -->
            <button id="mobileMenuBtn" class="hamburger-icon transition z-20 p-1">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Center Logo -->
            <div class="absolute left-1/2 transform -translate-x-1/2">
                <a href="https://wildmarkresort.com/" class="flex items-center">
                    <img src="https://wildmarkresort.com/images/WILD.png" alt="Wildmark Resort Kanha Logo"
                        class="h-12 w-auto object-contain" />
                </a>
            </div>

            <!-- Book Now -->
            <a href="https://wildmarkresort.com/contact/" class="btn-book text-xs px-3 py-2">BOOK NOW</a>
        </div>

        <!-- ── DESKTOP LAYOUT ── -->
        <div class="hidden md:flex items-center gap-6 py-2">

            <!-- Logo -->
            <div class="flex-shrink-0" style="width:180px">
                <a href="https://wildmarkresort.com/" class="flex items-start">
                    <img src="https://wildmarkresort.com/images/WILD.png" alt="Wildmark Resort Kanha Logo"
                        class="h-12 md:h-14 lg:h-16 w-auto object-contain" />
                </a>
            </div>

            <!-- Nav Links -->
            <div class="flex-1 flex justify-center">
                <div class="flex space-x-4 lg:space-x-8 items-center">

                    <a href="https://wildmarkresort.com/"       class="nav-link">Home</a>
                    <a href="https://wildmarkresort.com/about/"       class="nav-link">About</a>
                    <a href="https://wildmarkresort.com/how-to-reach-kanha-national-park/" class="nav-link">How to Reach</a>

                    <!-- Packages Dropdown -->
                    <div class="dropdown">
                        <button class="dropdown-btn">
                            Packages
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="mega-menu">
                            <div class="mega-menu-inner">
                                <a href="https://wildmarkresort.com/kanha-tour-package/">Kanha Tour Package</a>
                                <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/">Kanha Tiger Safari Tour Package</a>
                                <a href="https://wildmarkresort.com/kanha-safari-tour-package/">Kanha Safari Tour Package</a>
                                <a href="https://wildmarkresort.com/mukki-zone-tour-package/">Mukki Zone Tour Package</a>
                                <a href="https://wildmarkresort.com/kanha-kisli-tour-package/">Kanha Kisli Tour Package</a>
                            </div>
                        </div>
                    </div>



                                        <!-- Packages Dropdown -->
                    <div class="dropdown">
                        <button class="dropdown-btn">
                            Packages
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="mega-menu">
                            <div class="mega-menu-inner">
                                <a href="https://wildmarkresort.com/kanha-tour-package/">Kanha Tour Package</a>
                                <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/">Kanha Tiger Safari Tour Package</a>
                                <a href="https://wildmarkresort.com/kanha-safari-tour-package/">Kanha Safari Tour Package</a>
                                <a href="https://wildmarkresort.com/mukki-zone-tour-package/">Mukki Zone Tour Package</a>
                                <a href="https://wildmarkresort.com/kanha-kisli-tour-package/">Kanha Kisli Tour Package</a>
                            </div>
                        </div>
                    </div>

                    <a href="https://wildmarkresort.com/kanha-accommodation/" class="nav-link">Accommodation</a>
                    <a href="https://wildmarkresort.com/know-about-kanha-national-park-in-detail/"    class="nav-link">Kanha</a>

                </div>
            </div>

            <!-- Book Now Button -->
            <div class="flex-shrink-0" style="width:150px">
                <a href="https://wildmarkresort.com/contact/" class="btn-book block w-full text-center text-xs lg:text-sm">
                    BOOK NOW
                </a>
            </div>
        </div>
    </div>

    <!-- ── MOBILE MENU ── -->
    <div id="mobileMenu" class="mobile-menu md:hidden">
        <div class="py-2">
            <a href="https://wildmarkresort.com/"        class="mobile-nav-link">Home</a>
            <a href="https://wildmarkresort.com/about/"        class="mobile-nav-link">About</a>
            <a href="https://wildmarkresort.com/how-to-reach-kanha-national-park/" class="mobile-nav-link">How to Reach</a>

            <!-- Mobile Packages Toggle -->
            <div>
                <button id="mobilePackagesBtn" class="mobile-pkg-btn">
                    <span>Packages</span>
                    <svg id="packagesArrow" class="w-4 h-4 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobilePackagesDropdown" class="mobile-packages-dropdown">
                    <a href="https://wildmarkresort.com/kanha-tour-package/">Kanha Tour Package</a>
                    <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/">Kanha Tiger Safari Tour Package</a>
                    <a href="https://wildmarkresort.com/kanha-safari-tour-package/">Kanha Safari Tour Package</a>
                    <a href="https://wildmarkresort.com/mukki-zone-tour-package/">Mukki Zone Tour Package</a>
                    <a href="https://wildmarkresort.com/kanha-kisli-tour-package/">Kanha Kisli Tour Package</a>
                </div>
            </div>
            
            <a href="https://wildmarkresort.com/kanha-accommodation/" class="mobile-nav-link">Accommodation</a>
            <a href="https://wildmarkresort.com/know-about-kanha-national-park-in-detail/"    class="mobile-nav-link">Kanha</a>
        </div>
    </div>

</nav>

