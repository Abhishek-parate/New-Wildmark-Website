<?php 
// Set page-specific title
$pageTitle = "Wildmark - Wildmark Resort Kanha";

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

    /* Amenities Icon Colors */
    .amenity-icon {
        color: var(--text2) !important;
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
        body { font-size: 14px; }
        h2 { font-size: 1.5rem; }
        h3 { font-size: 1.25rem; }
        p, span, a, li {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    }

    /* Tabs styling */
    .tab-btn {
        position: relative;
        transition: color 0.3s ease;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 0.875rem;
        color: var(--text2);
        padding-bottom: 0.75rem;
        white-space: nowrap;
        cursor: pointer;
    }
    @media (min-width: 768px) {
        .tab-btn { font-size: 1rem; padding-bottom: 1rem; }
    }
    .tab-btn:hover { color: #6e1010; }
    .tab-btn.active { color: var(--text1); }
    .tab-btn.active::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background-color: var(--text2);
    }

    .tab-btn-a {
        position: relative;
        transition: color 0.3s ease;
        font-family: "Roboto Slab", serif;
        font-weight: 700;
        font-size: 0.875rem;
        color: var(--text2);
        padding-bottom: 0.75rem;
        white-space: nowrap;
        cursor: pointer;
    }
    @media (min-width: 768px) {
        .tab-btn-a { font-size: 1rem; padding-bottom: 1rem; }
    }
    .tab-btn-a:hover { color: #6e1010; }
    .tab-btn-a.active { color: var(--text1); }
    .tab-btn-a.active::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background-color: var(--text2);
    }

    /* FAQ */
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
        .faq-grid { grid-template-columns: 1fr !important; }
        .faq-question { height: auto !important; min-height: unset !important; }
        .faq-question span {
            white-space: normal !important;
            overflow: visible !important;
            text-overflow: unset !important;
            font-size: 14px !important;
        }
    }

    /* ===== GLOBAL THEME OVERRIDES ===== */

    /* Section backgrounds */
    section.bg-neutral-900 {
        background-color: var(--bg2) !important;
    }
    section.bg-black {
        background-color: var(--bg1) !important;
    }

    /* Headings */
    h1, h2, h3, h4 {
        color: var(--text2) !important;
    }
    .text-amber-100 {
        color: var(--text2) !important;
    }

    /* Body text */
    .text-gray-300 {
        color: var(--text1) !important;
    }
    p { color: var(--text1); }

    /* Amber accents */
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
    .border-amber-600 {
        border-color: var(--text2) !important;
    }

    /* Sticky tab bar background */
    .sticky.bg-neutral-900 {
        background-color: var(--bg2) !important;
        border-bottom-color: rgba(142, 22, 22, 0.2) !important;
    }

    /* Know More / Book Now buttons */
    .bg-amber-600, .bg-amber-500 {
        background-color: var(--text2) !important;
        color: var(--bg2) !important;
    }
    .bg-amber-600:hover, .bg-amber-500:hover,
    .hover\:bg-amber-700:hover, .hover\:bg-amber-600:hover {
        background-color: #6e1010 !important;
        color: var(--bg2) !important;
    }

    /* FAQ Cards */
    .faq-item.bg-black {
        background-color: var(--bg2) !important;
        border-color: rgba(142, 22, 22, 0.25) !important;
        box-shadow: 0 2px 8px rgba(142, 22, 22, 0.07);
    }
    .faq-question:hover {
        background-color: rgba(232, 201, 153, 0.5) !important;
    }
    .faq-answer > div {
        background-color: rgba(232, 201, 153, 0.3) !important;
        border-top-color: rgba(142, 22, 22, 0.2) !important;
    }
    .faq-icon { color: var(--text2) !important; }
    .faq-question span { color: var(--text1) !important; }

    /* Travel method / content cards */
    .bg-black.rounded-xl {
        background-color: var(--bg2) !important;
    }

    /* Info card */
    .info-card {
        background-color: rgba(232, 201, 153, 0.2) !important;
        border-color: rgba(142, 22, 22, 0.3) !important;
    }

    /* li > strong text */
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
    #specialOfferPopup h4.text-white {
        color: var(--text1) !important;
    }
    #specialOfferPopup .text-amber-500 {
        color: var(--text2) !important;
    }
    #specialOfferPopup .bg-amber-500\/10 {
        background-color: rgba(232, 201, 153, 0.3) !important;
    }
    #specialOfferPopup .text-amber-100 {
        color: var(--bg2) !important;
    }
    #specialOfferPopup .text-gray-400.line-through {
        color: rgba(0,0,0,0.4) !important;
    }
    #specialOfferPopup .text-gray-400 {
        color: rgba(0,0,0,0.5) !important;
    }

    /* Floating special offer button */
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

    /* Popup close button */
    #specialOfferPopup button.text-white {
        color: var(--text1) !important;
    }
    #specialOfferPopup button.hover\:text-amber-500:hover {
        color: var(--text2) !important;
    }

    /* Offer badges */
    .bg-green-500:not(.hover\:bg-green-600) { background-color: #2a6e3f !important; }
    .bg-blue-500 { background-color: #1a4a7a !important; }

    /* WhatsApp stays green */
    a.bg-green-500.hover\:bg-green-600 {
        background-color: #25D366 !important;
    }
    a.bg-green-500.hover\:bg-green-600:hover {
        background-color: #1ebe5d !important;
    }
</style>

    <!-- Spacer -->
    <div class="h-[60px] md:h-[80px]"></div>

    <!-- Hero Banner -->
    <header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/Tiger.webp') center/cover no-repeat">
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
                </div>

                <!-- Right Column - Images -->
                <div class="space-y-4" data-aos="fade-left">
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://wildmarkresort.com/images/delux3.JPG" class="w-full h-64 object-cover" alt="Resort Interior" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://wildmarkresort.com/images/delux5.JPG" class="w-full h-40 object-cover" alt="Room" />
                        </div>
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://wildmarkresort.com/images/delux7.JPG" class="w-full h-40 object-cover" alt="Dining" />
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
                    <img src="https://wildmarkresort.com/images/family1.jpeg" class="w-full h-80 md:h-96 object-cover rounded-xl"
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

    <!-- Rooms Section -->
    <section id="rooms" class="py-12 md:py-16 bg-neutral-900">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-100">
                    Explore Our Accommodation Options
                </h2>
            </div>

            <!-- Tabs - Sticky -->
            <div class="sticky top-[60px] md:top-[80px] z-40 bg-neutral-900 border-b border-neutral-800 py-4 mb-8">
                <div class="flex justify-center gap-4 md:gap-8 overflow-x-visible">
                    <button class="tab-btn active" data-tab="machaan">
                        Super Deluxe Rooms
                    </button>
                    <button class="tab-btn" data-tab="superdeluxe">
                        Family Double Bedded Rooms
                    </button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="grid md:grid-cols-2 gap-8 md:gap-12">
                <!-- Machaan -->
                <div class="panel" data-tab="machaan">
                    <img src="https://wildmarkresort.com/images/beded3.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Machaan" />
                </div>
                <div class="panel" data-tab="machaan">
                    <h5 class="text-xl md:text-xl lg:text-xl text-amber-500 font-serif font-light tracking-wide hero-title mt-4"
                        data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                        Super Deluxe Rooms with Open Shower
                    </h5>
                    <p class="text-sm md:text-base text-gray-300 mb-2 md:mb-4 leading-relaxed text-justify mt-4">
                        The Super Deluxe Room with Private Sit-Outs offers a refined
                        retreat blending comfort with natural elegance. This
                        well-appointed room features a private outdoor seating area, plush
                        bedding, modern furnishings, and air conditioning for a relaxing
                        stay. Enjoy contemporary decor, thoughtful amenities, and a serene
                        view for an unforgettable escape.
                    </p>
                </div>

                <!-- Know More Button for Super Deluxe Rooms -->
                <div class="panel md:col-span-2 text-center mt-8" data-tab="machaan">
                    <div class="flex justify-center">
                        <a href="https://wildmarkresort.com/kanha-super-deluxe-rooms-in-kanha/"
                            class="bg-amber-600 hover:bg-amber-700 text-white px-10 py-3 transition font-semibold text-base rounded-lg shadow-lg">
                            KNOW MORE
                        </a>
                    </div>
                </div>

                <!-- Super Deluxe - Family Double Bedded Rooms Tab -->
                <div class="panel hidden" data-tab="superdeluxe">
                    <img src="https://wildmarkresort.com/images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Super Deluxe" />
                </div>
                <div class="panel hidden" data-tab="superdeluxe">
                    <h5 class="text-xl md:text-xl lg:text-xl text-amber-500 font-serif font-light tracking-wide hero-title mt-4"
                        data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                        Family Double Bedded Rooms
                    </h5>
                    <p class="text-sm md:text-base text-gray-300 mb-2 md:mb-4 leading-relaxed text-justify mt-4">
                        The Super Deluxe Family Room is designed to comfortably
                        accommodate families, offering spacious living areas and extra
                        sleeping options. This room features elegant decor, modern
                        amenities, and air conditioning to ensure a relaxing stay. Enjoy a
                        harmonious blend of style and functionality, perfect for memorable
                        family getaways.
                    </p>
                </div>

                <!-- Know More Button for Family Double Bedded Rooms -->
                <div class="panel hidden md:col-span-2 text-center mt-8" data-tab="superdeluxe">
                    <div class="flex justify-center">
                        <a href="https://wildmarkresort.com/family-double-bedded-rooms-in-kanha/"
                            class="bg-amber-600 hover:bg-amber-700 text-white px-10 py-3 transition font-semibold text-base rounded-lg shadow-lg">
                            KNOW MORE
                        </a>
                    </div>
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
                    <h3 class="text-lg md:text-xl lg:text-2xl font-serif font-bold text-amber-100 mb-6 border-b border-amber-600 pb-3">
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
                    <h3 class="text-lg md:text-xl lg:text-2xl font-serif font-bold text-amber-100 mb-6 border-b border-amber-600 pb-3">
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
                    <h3 class="text-lg md:text-xl lg:text-2xl font-serif font-bold text-amber-100 mb-6 border-b border-amber-600 pb-3">
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0234567890123!2d80.5118205!3d22.315946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section overflow-hidden">
        <div class="container mx-auto max-w-7xl">
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

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
                <!-- Award Card 1 - 2020 -->
                <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                        <img src="https://wildmarkresort.com/images/testimonials1.png  " alt="TripAdvisor Travellers' Choice Award 2020"
                            class="w-full h-auto max-w-[280px] object-contain award-image">
                    </div>
                </div>
                <!-- Award Card 2 - 2021 -->
                <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                        <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021"
                            class="w-full h-auto max-w-[280px] object-contain award-image">
                    </div>
                </div>
                <!-- Award Card 3 - 2022 -->
                <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                        <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022"
                            class="w-full h-auto max-w-[280px] object-contain award-image">
                    </div>
                </div>
                <!-- Award Card 4 - 2025 -->
                <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                    style="background-color: #39DCA1;border-radius: 9px;">
                    <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                        <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
                            class="w-full h-full object-cover rounded-2xl award-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
        <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

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

            <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

                <!-- LEFT COLUMN -->
                <div class="faq-col">
                    <!-- FAQ 1 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort booking?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort stay?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 6 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">What types of rooms are available at Wildmark Resort Kanha?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark Resort?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 8 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate Kanha?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 9 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 10 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">The resort remains open, and Buffer safaris are available during monsoon season.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END LEFT COLUMN -->

                <!-- RIGHT COLUMN -->
                <div class="faq-col">
                    <!-- FAQ 11 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 12 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop services?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 13 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 14 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 15 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view rooms?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 16 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 17 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">What documents are required at check-in for Kanha resorts?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Guests must carry a valid government issued photo ID at the time of check in.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 18 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle safari?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 19 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 20 -->
                    <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                        <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                            <span class="font-serif text-white">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
                            <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed">Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END RIGHT COLUMN -->

            </div><!-- END FAQ GRID -->
        </div>
    </section>




    <!-- ═══════════════════════════════ JAVASCRIPT ═══ -->
    <script>
    // FAQ Toggle
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(button => {
            button.addEventListener('click', function() {
                const faqItem = this.closest('.faq-item');
                const answer = faqItem.querySelector('.faq-answer');
                const icon = this.querySelector('.faq-icon');
                const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                        item.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
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

    // Room Tabs
    const roomTabs = document.querySelectorAll("#rooms .tab-btn");
    const roomPanels = document.querySelectorAll("#rooms .panel");
    roomTabs.forEach((btn) => {
        btn.addEventListener("click", () => {
            const tab = btn.dataset.tab;
            roomTabs.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            roomPanels.forEach((p) => {
                p.classList.toggle("hidden", p.dataset.tab !== tab);
            });
        });
    });

    // Experience Tabs
    const expTabs = document.querySelectorAll("#experiencesA .tab-btn-a");
    const expPanels = document.querySelectorAll("#experiencesA .experience-panel-a");
    expTabs.forEach((btn) => {
        btn.addEventListener("click", () => {
            const tab = btn.dataset.tabA;
            expTabs.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            expPanels.forEach((p) => {
                p.classList.toggle("hidden", p.dataset.tabA !== tab);
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
        if (event.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
    }
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const popup = document.getElementById('specialOfferPopup');
            if (!popup.classList.contains('hidden')) toggleSpecialOfferPopup();
        }
    });
    </script>

    <script>
    function handleFaqResize() {
        var grid = document.querySelector('.faq-grid');
        if (!grid) return;
        grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
    }
    window.addEventListener('load', handleFaqResize);
    window.addEventListener('resize', handleFaqResize);
    </script>

<?php 
include 'includes/footer.php'; 
?>