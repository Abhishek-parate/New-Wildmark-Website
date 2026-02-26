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

