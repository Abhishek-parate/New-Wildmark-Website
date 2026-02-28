<?php
/* ============================================================
   BASE URL — Auto-detects localhost subfolder OR live domain.
   Works for both: localhost/wildmarkresort/ AND wildmarkresort.com/
   ============================================================ */
$protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host      = $_SERVER['HTTP_HOST'];
// Remove /includes if header is called from includes/ subfolder
$script    = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$script    = ($script === '/' || $script === '.') ? '' : rtrim($script, '/');
define('BASE_URL', $protocol . '://' . $host . $script);

/* ============================================================
   HTML MINIFICATION — output buffer (compresses ALL pages)
   ============================================================ */
function minify_html_output($buffer) {
    $buffer = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $buffer);
    $buffer = preg_replace_callback('/<style[^>]*>(.*?)<\/style>/si', function ($m) {
        $css = preg_replace('/\s+/', ' ', $m[1]);
        $css = preg_replace('/\s*([:;,{}>\+~])\s*/', '$1', $css);
        $css = preg_replace('/;+\}/', '}', $css);
        return '<style>'.trim($css).'</style>';
    }, $buffer);
    $buffer = preg_replace_callback('/<script(?:[^>]*)>(.*?)<\/script>/si', function ($m) {
        if (strpos($m[0], 'type="application/json"') !== false) return $m[0];
        $js = preg_replace('/\s+/', ' ', $m[1]);
        return str_replace($m[1], $js, $m[0]);
    }, $buffer);
    $buffer = preg_replace('/>\s+</', '><', $buffer);
    $buffer = preg_replace('/ {2,}/', ' ', $buffer);
    return trim($buffer);
}
ob_start('minify_html_output');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Wildmark Resort Kanha'; ?></title>

    <!-- DNS Prefetch & Preconnect -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <link rel="dns-prefetch" href="//unpkg.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Site CSS — dynamic path works on localhost AND live server -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/main.css" />

    <!-- ✅ FIX 1: Google Analytics needs BOTH tags — async src loads the library,
         inline script configures it. Without the inline script, GA won't track. -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G072G84M0P"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-G072G84M0P');
    </script>

</head>

<body>

    <!-- Special Offer Floating Button -->
    <button onclick="toggleSpecialOfferPopup()"
        class="fixed bottom-24 right-4 md:bottom-28 md:right-8 z-50 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-full shadow-2xl transition transform hover:scale-110"
        style="background-color: var(--txt2); color: #fff;" aria-label="Special Offers">
        <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="absolute -top-1 -right-1 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce"
            style="background-color: var(--bg1); color: var(--txt2);">New</span>
    </button>

    <!-- Special Offer Popup Modal -->
    <div id="specialOfferPopup"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[100] hidden items-center justify-center p-4"
        onclick="closeIfClickedOutside(event)">
        <div class="border-2 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative animate-slideIn"
            style="background-color: var(--bg2); border-color: var(--txt2);" onclick="event.stopPropagation()">

            <button onclick="toggleSpecialOfferPopup()" class="absolute top-4 right-4 transition z-10"
                style="color: var(--txt1);" onmouseover="this.style.color='var(--txt2)';"
                onmouseout="this.style.color='var(--txt1)';">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="p-6 md:p-8 rounded-t-2xl text-white"
                style="background: linear-gradient(to right, var(--txt2), #b01e1e);">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                        </path>
                    </svg>
                    <h3 class="text-2xl md:text-3xl font-serif font-bold text-white"
                        style="color: var(--bg2) !important;">Special Offers</h3>
                </div>
                <p class="text-sm" style="color: rgba(248,238,223,0.9);">Limited time deals on resort packages & safari
                    tours</p>
            </div>

            <div class="p-6 md:p-8 space-y-6">
                <!-- Offer 1 -->
                <div class="border rounded-xl p-5 transition"
                    style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2"
                                style="background-color: var(--txt2);">BESTSELLER</span>
                            <h4 class="text-xl font-serif font-bold" style="color: var(--txt1) !important;">2N/3D Resort
                                + Safari Package</h4>
                        </div>
                        <div class="text-right">
                            <p class="text-sm line-through" style="color: rgba(0,0,0,0.4);">₹15,000</p>
                            <p class="text-2xl font-bold" style="color: var(--txt2);">₹12,499</p>
                        </div>
                    </div>
                    <ul class="text-sm space-y-2 mb-4" style="color: var(--txt1);">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0"
                                style="color: var(--txt2);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>2 Nights Stay at Wildmark Resort (Near Khatia Gate)</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0"
                                style="color: var(--txt2);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>4 Jungle Safaris (Morning + Evening)</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0"
                                style="color: var(--txt2);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>All Meals Included (Breakfast, Lunch, Dinner)</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0"
                                style="color: var(--txt2);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>Complimentary Safari Permit Assistance</li>
                    </ul>
                    <a href="https://wildmarkresort.com/contact/"
                        class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition"
                        style="background-color: var(--txt2);">BOOK NOW</a>
                </div>

                <!-- Offer 2 -->
                <div class="border rounded-xl p-5 transition"
                    style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2"
                                style="background-color: #8E1616">EARLY BIRD</span>
                            <h4 class="text-xl font-serif font-bold" style="color: var(--txt1) !important;">Advance
                                Booking Discount</h4>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold" style="color: var(--txt2);">20% OFF</p>
                        </div>
                    </div>
                    <p class="text-sm mb-4" style="color: var(--txt1);">Book 30 days in advance and save 20% on all
                        resort packages. Valid for bookings made before March 31, 2026.</p>
                    <a href="https://wildmarkresort.com/contact/"
                        class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition"
                        style="background-color: var(--txt2);">BOOK NOW</a>
                </div>

                <!-- Offer 3 -->
                <div class="border rounded-xl p-5 transition"
                    style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2"
                                style="background-color: #8E1616;">GROUP OFFER</span>
                            <h4 class="text-xl font-serif font-bold" style="color: var(--txt1) !important;">Group
                                Booking Special</h4>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold" style="color: var(--txt2);">₹10,999</p>
                            <p class="text-xs" style="color: rgba(0,0,0,0.5);">per person</p>
                        </div>
                    </div>
                    <p class="text-sm mb-4" style="color: var(--txt1);">Special rates for groups of 6+ people. Perfect
                        for families, corporate outings, and wildlife photography tours.</p>
                    <a href="https://wildmarkresort.com/contact/"
                        class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition"
                        style="background-color: var(--txt2);">Book Now</a>
                </div>
            </div>

            <div class="border-t p-4 text-center rounded-b-2xl"
                style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.3);">
                <p class="text-sm font-semibold" style="color: var(--txt2);">⏰ Offers valid till March 31, 2026 | Terms
                    & Conditions Apply</p>
            </div>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/918830996719?text=Hello%20I%20would%20like%20to%20enquire%20about%20room%20availability%20and%20packages%20at%20Wildmark%20Resort.%20Please%20share%20details."
        target="_blank"
        class="fixed bottom-8 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
        data-aos="zoom-in" data-aos-delay="200" aria-label="WhatsApp">
        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
        </svg>
    </a>

    <!-- NAVBAR -->
    <nav class="navbar-root fixed w-full z-50 py-0" data-aos="fade-down">

        <div class="navbar-accent-bar"></div>

        <div class="w-full max-w-[1400px] mx-auto px-3 md:px-6 py-2 md:py-0">

            <!-- MOBILE LAYOUT -->
            <div class="flex md:hidden justify-between items-center relative py-2">
                <button id="mobileMenuBtn" class="hamburger-icon transition z-20 p-1">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="absolute left-1/2 transform -translate-x-1/2">
                    <a href="https://wildmarkresort.com/" class="flex items-center">
                        <img src="https://wildmarkresort.com/images/WILD.png" alt="Wildmark Resort Kanha Logo"
                            class="h-12 w-auto object-contain" loading="eager" />
                    </a>
                </div>
                <a href="https://wildmarkresort.com/contact/" class="btn-book text-xs px-3 py-2">BOOK NOW</a>
            </div>

            <!-- DESKTOP LAYOUT -->
            <div class="hidden md:flex items-center gap-6 py-2">
                <div class="flex-shrink-0" style="width:180px">
                    <a href="https://wildmarkresort.com/" class="flex items-start">
                        <img src="https://wildmarkresort.com/images/WILD.png" alt="Wildmark Resort Kanha Logo"
                            class="h-12 md:h-14 lg:h-16 w-auto object-contain" loading="eager" />
                    </a>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="flex space-x-4 lg:space-x-8 items-center">
                        <a href="https://wildmarkresort.com/" class="nav-link">Home</a>
                        <a href="https://wildmarkresort.com/about/" class="nav-link">About</a>
                        <a href="https://wildmarkresort.com/how-to-reach-kanha-national-park/" class="nav-link">How to
                            Reach</a>

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
                                    <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/">Kanha Tiger
                                        Safari Tour Package</a>
                                    <a href="https://wildmarkresort.com/kanha-safari-tour-package/">Kanha Safari Tour
                                        Package</a>
                                    <a href="https://wildmarkresort.com/mukki-zone-tour-package/">Mukki Zone Tour
                                        Package</a>
                                    <a href="https://wildmarkresort.com/kanha-kisli-tour-package/">Kanha Kisli Tour
                                        Package</a>
                                </div>
                            </div>
                        </div>

                        <!-- Rooms Dropdown -->
                        <div class="dropdown">
                            <button class="dropdown-btn">
                                Rooms
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="mega-menu">
                                <div class="mega-menu-inner">
                                    <ul class="space-y-2">
                                        <li><a href="https://wildmarkresort.com/kanha-super-deluxe-rooms-in-kanha/">Super
                                                Deluxe Rooms</a></li>
                                        <li><a href="https://wildmarkresort.com/family-double-bedded-rooms-in-kanha/">Family
                                                Double Bedded Rooms</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <a href="https://wildmarkresort.com/kanha-accommodation/" class="nav-link">Accommodation</a>
                        <a href="https://wildmarkresort.com/know-about-kanha-national-park-in-detail/"
                            class="nav-link">Kanha</a>
                    </div>
                </div>
                <div class="flex-shrink-0" style="width:150px">
                    <a href="https://wildmarkresort.com/contact/"
                        class="btn-book block w-full text-center text-xs lg:text-sm">BOOK NOW</a>
                </div>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="mobile-menu md:hidden">
            <div class="py-2">
                <a href="https://wildmarkresort.com/" class="mobile-nav-link">Home</a>
                <a href="https://wildmarkresort.com/about/" class="mobile-nav-link">About</a>
                <a href="https://wildmarkresort.com/how-to-reach-kanha-national-park/" class="mobile-nav-link">How to
                    Reach</a>

                <div>
                    <button id="mobilePackagesBtn" class="mobile-pkg-btn">
                        <span>Packages</span>
                        <svg id="packagesArrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="mobilePackagesDropdown" class="mobile-packages-dropdown">
                        <a href="https://wildmarkresort.com/kanha-tour-package/">Kanha Tour Package</a>
                        <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/">Kanha Tiger Safari Tour
                            Package</a>
                        <a href="https://wildmarkresort.com/kanha-safari-tour-package/">Kanha Safari Tour Package</a>
                        <a href="https://wildmarkresort.com/mukki-zone-tour-package/">Mukki Zone Tour Package</a>
                        <a href="https://wildmarkresort.com/kanha-kisli-tour-package/">Kanha Kisli Tour Package</a>
                    </div>
                </div>

                <div>
                    <button id="mobileRoomsBtn" class="mobile-pkg-btn">
                        <span>Rooms</span>
                        <svg id="roomsArrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="mobileRoomsDropdown" class="mobile-packages-dropdown">
                        <a href="https://wildmarkresort.com/kanha-super-deluxe-rooms-in-kanha/">Super Deluxe Rooms</a>
                        <a href="https://wildmarkresort.com/family-double-bedded-rooms-in-kanha/">Family Double Bedded
                            Rooms</a>
                    </div>
                </div>

                <a href="https://wildmarkresort.com/kanha-accommodation/" class="mobile-nav-link">Accommodation</a>
                <a href="https://wildmarkresort.com/know-about-kanha-national-park-in-detail/"
                    class="mobile-nav-link">Kanha</a>
            </div>
        </div>

    </nav>