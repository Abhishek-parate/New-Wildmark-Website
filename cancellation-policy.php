<?php 
// Set page-specific title
$pageTitle = "Cancellation Policy - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>x`
/* ===== ROOT COLOR VARIABLES (Same as Index) ===== */
:root {
    --bg1: #E8C999;
    --bg2: #F8EEDF;
    --text1: #000000;
    --text2: #8E1616;
}

/* Hero section */
.hero-section {
    position: relative;
    background: #E8C999;
}

/* Parallax Effect */
.promotion-section {
    position: relative;
    overflow: hidden;
}

.parallax-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background: url('https://images.unsplash.com/photo-1551918120-9739cb430c6d?w=1600');
    background-size: cover;
    background-position: center;
    transform: translateZ(0);
    will-change: transform;
}

@media (max-width: 768px) {
    .parallax-bg { height: 100%; }
    body { font-size: 14px; }
    h2 { font-size: 1.5rem; }
    h3 { font-size: 1.25rem; }
    p, span, a, li { word-wrap: break-word; overflow-wrap: break-word; }
}

@keyframes slideIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to { opacity: 1; transform: scale(1) translateY(0); }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }
#specialOfferPopup > div::-webkit-scrollbar-track { background: var(--bg2); }
#specialOfferPopup > div::-webkit-scrollbar-thumb { background: var(--text2); border-radius: 3px; }

.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; }
.faq-col { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
.faq-question { min-height: 64px; height: 64px; }
.faq-question span { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block; font-size: 15px !important; }

@media screen and (max-width: 860px) {
    .faq-grid { grid-template-columns: 1fr !important; }
    .faq-question { height: auto !important; min-height: unset !important; }
    .faq-question span { white-space: normal !important; overflow: visible !important; text-overflow: unset !important; font-size: 14px !important; }
}

/* ===== GLOBAL THEME OVERRIDES ===== */
body { background-color: var(--bg2); }

h1, h2, h3, h4 { color: var(--text2) !important; }
.text-amber-100 { color: var(--text2) !important; }
.text-gray-300 { color: var(--text1) !important; }
p { color: var(--text1); }
.text-amber-500, .text-amber-400 { color: var(--text2) !important; }

.border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
.border-neutral-700 { border-color: rgba(142, 22, 22, 0.2) !important; }

/* Cancellation Content Section */
section.py-12.bg-neutral-900,
section.py-12.md\:py-16.bg-neutral-900 {
    background-color: var(--bg2) !important;
}

/* Policy card */
.policy-card {
    background-color: var(--bg1) !important;
    border-color: rgba(142, 22, 22, 0.3) !important;
}

/* Policy list items */
.policy-card li span { color: var(--text1) !important; }
.policy-card li strong { color: var(--text2) !important; }
.policy-card p { color: var(--text1) !important; }
.policy-card p strong { color: var(--text2) !important; }

/* Awards Section */
.awards-section { background-color: var(--bg1) !important; }
.awards-section .text-amber-500 { color: var(--text2) !important; }
.awards-section h2 { color: var(--text2) !important; }
.awards-section .text-gray-300 { color: var(--text1) !important; }
.award-card { transition: transform 0.3s ease; }
.award-card:hover { transform: translateY(-4px); }
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }
@media (max-width: 768px) {
    .award-card > div { min-height: 280px !important; }
    .award-image { max-width: 220px; }
}

/* FAQ Section */
.faq-section { background-color: var(--bg2) !important; }
.faq-item { background-color: var(--bg2) !important; border-color: rgba(142,22,22,0.25) !important; box-shadow: 0 2px 8px rgba(142,22,22,0.07); }
.faq-item:hover { border-color: var(--text2) !important; }
.faq-question:hover { background-color: rgba(232,201,153,0.5) !important; }
.faq-answer > div { background-color: rgba(232,201,153,0.3) !important; border-top-color: rgba(142,22,22,0.2) !important; }
.faq-icon { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* Special Offer Popup */
#specialOfferPopup .popup-inner { background-color: var(--bg2) !important; border-color: var(--text2) !important; }
#specialOfferPopup .popup-header { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
#specialOfferPopup .offer-card { background-color: var(--bg1) !important; border-color: rgba(142,22,22,0.3) !important; }
#specialOfferPopup .offer-card:hover { border-color: var(--text2) !important; }
#specialOfferPopup .popup-footer { background-color: rgba(232,201,153,0.3) !important; border-top-color: rgba(142,22,22,0.3) !important; }

/* Special Offer Floating Button */
#specialOfferBtn { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
#specialOfferBtn:hover { background: linear-gradient(to right, #6e1010, var(--text2)) !important; }
#specialOfferBtn .badge { background-color: var(--bg1) !important; color: var(--text2) !important; }

/* Book Now Buttons */
.btn-primary {
    background-color: var(--text2) !important;
    color: var(--bg2) !important;
    transition: background-color 0.2s;
}
.btn-primary:hover { background-color: #6e1010 !important; }

/* Section accent dots */
.accent-dot { color: var(--text2) !important; }

/* Intro block */
.intro-bullet i { color: var(--text2) !important; }
.intro-bullet strong { color: var(--text2) !important; }
.intro-bullet { color: var(--text1) !important; }

/* Section heading accent */
.section-tag { color: var(--text2) !important; }

/* WhatsApp button */
.whatsapp-btn { background-color: #25D366 !important; }

/* Safari list items */
.safari-list li span { color: var(--text1) !important; }
.safari-bullet { color: var(--text2) !important; }
</style>

<!-- Spacer -->
<div class="h-[60px] md:h-[80px]"></div>

<!-- Hero Section -->
<section class="hero-section relative h-[40vh] md:h-[50vh] flex items-center justify-center">
    <div class="absolute inset-0" style="background: rgba(142,22,22,0.10);"></div>
    <div class="relative text-center px-4 z-10" data-aos="fade-up">
        <p class="text-xs tracking-widest mb-3 font-light" style="color: var(--bg1);"></p>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold" style="color: var(--text2) !important;">
            Cancellation Policy
        </h1>
        <div class="mt-4 w-16 h-1 mx-auto" style="background-color: var(--bg1);"></div>
    </div>
</section>

<!-- Cancellation Policy Content -->
<section class="py-12 md:py-16" style="background-color: var(--bg2);">
    <div class="max-w-5xl mx-auto px-4 md:px-6">

        <!-- Section Header -->
        <div class="text-center mb-10" data-aos="fade-up">
            <p class="text-xs tracking-widest mb-3 font-light section-tag">POLICIES & GUIDELINES</p>
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4" style="color: var(--text2);">
                Booking & Cancellation Terms
            </h2>
            <p class="text-sm md:text-base max-w-2xl mx-auto" style="color: var(--text1);">
                Please read the following policies carefully before making your reservation at Wildmark Resort.
            </p>
        </div>

        <div class="policy-card rounded-xl shadow-lg p-6 md:p-10 lg:p-12 border" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">

            <!-- Introduction -->
            <div class="mb-10" data-aos="fade-up">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-6 pb-3" style="color: var(--text2); border-bottom: 2px solid rgba(142,22,22,0.2);">
                    General Terms
                </h2>

                <div class="space-y-4">
                    <div class="flex items-start gap-3 intro-bullet">
                        <i class="fa-solid fa-circle accent-dot text-xs mt-2 flex-shrink-0"></i>
                        <p class="text-sm md:text-base leading-relaxed">
                            <strong>Making changes to your booking within 35 days of your arrival?</strong>
                            Consider it like pressing the reset button – we'll treat it as a cancellation. We understand plans
                            can shift like sand dunes in the desert, but this ensures we can keep the wheels turning smoothly.
                        </p>
                    </div>
                    <div class="flex items-start gap-3 intro-bullet">
                        <i class="fa-solid fa-circle accent-dot text-xs mt-2 flex-shrink-0"></i>
                        <p class="text-sm md:text-base leading-relaxed">
                            <strong>The cancellation fee will be calculated based on the total booking
                                amount, not just the advance payment.</strong> It's like trying to unscramble eggs – once it's
                            done, there's no turning back. But hey, we'll need to consider the whole omelet, not just the
                            cracked shell.
                        </p>
                    </div>
                    <div class="flex items-start gap-3 intro-bullet">
                        <i class="fa-solid fa-circle accent-dot text-xs mt-2 flex-shrink-0"></i>
                        <p class="text-sm md:text-base leading-relaxed">
                            <strong>Please note, bookings for Christmas, New Year, and those beloved long
                                weekends are non-refundable.</strong> It's like getting tickets to the hottest show in town –
                            once you're in, you're committed to this performance.
                        </p>
                    </div>
                    <div class="flex items-start gap-3 intro-bullet">
                        <i class="fa-solid fa-circle accent-dot text-xs mt-2 flex-shrink-0"></i>
                        <p class="text-sm md:text-base leading-relaxed">
                            <strong>By using our site, you're giving us the nod to play by these
                                rules.</strong> It's like signing on the dotted line, acknowledging that we're all on the same
                            page.
                        </p>
                    </div>
                    <div class="flex items-start gap-3 intro-bullet">
                        <i class="fa-solid fa-circle accent-dot text-xs mt-2 flex-shrink-0"></i>
                        <p class="text-sm md:text-base leading-relaxed">
                            <strong>If we decide to switch things up, we'll keep you in the loop by posting
                                any changes right here.</strong> It's like keeping you plugged in without any tangled wires!
                            Your peace of mind is our priority, and we want to ensure you're always in the know.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-full h-px my-8" style="background-color: rgba(142,22,22,0.2);"></div>

            <!-- On Accommodation -->
            <div class="mb-10" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-6 pb-3" style="color: var(--text2); border-bottom: 2px solid rgba(142,22,22,0.2);">
                    On Accommodation
                </h2>

                <!-- Timeline-style layout -->
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="flex items-start gap-4 p-4 rounded-lg" style="background-color: rgba(248,238,223,0.7); border-left: 4px solid var(--text2);">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm" style="background-color: var(--text2); color: var(--bg2);">1</div>
                        </div>
                        <div>
                            <p class="font-bold text-sm md:text-base mb-1" style="color: var(--text2);">Before 30 Days</p>
                            <p class="text-sm md:text-base" style="color: var(--text1);">55% of the total package will be applicable as cancellation fee.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start gap-4 p-4 rounded-lg" style="background-color: rgba(248,238,223,0.7); border-left: 4px solid var(--text2);">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm" style="background-color: var(--text2); color: var(--bg2);">2</div>
                        </div>
                        <div>
                            <p class="font-bold text-sm md:text-base mb-1" style="color: var(--text2);">Between 30 Days – 15 Days</p>
                            <p class="text-sm md:text-base" style="color: var(--text1);">75% of the total package is applicable as cancellation fee.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start gap-4 p-4 rounded-lg" style="background-color: rgba(248,238,223,0.7); border-left: 4px solid var(--text2);">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm" style="background-color: var(--text2); color: var(--bg2);">3</div>
                        </div>
                        <div>
                            <p class="font-bold text-sm md:text-base mb-1" style="color: var(--text2);">Between 15 Days – No Refund</p>
                            <p class="text-sm md:text-base" style="color: var(--text1);">No refund will be provided in case of cancellation or a hospitalization certificate.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="flex items-start gap-4 p-4 rounded-lg" style="background-color: rgba(232,201,153,0.5); border-left: 4px solid #b01e1e;">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm" style="background-color: #b01e1e; color: var(--bg2);">
                                <i class="fa-solid fa-heart-pulse text-xs"></i>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold text-sm md:text-base mb-1" style="color: #b01e1e;">In Case of Serious Medical Emergency</p>
                            <p class="text-sm md:text-base" style="color: var(--text1);">Credit note of <strong style="color: var(--text2);">100%</strong> will be issued. Strictly no cash refunds.</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="flex items-start gap-4 p-4 rounded-lg" style="background-color: rgba(232,201,153,0.5); border-left: 4px solid #b01e1e;">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm" style="background-color: #b01e1e; color: var(--bg2);">
                                <i class="fa-solid fa-flag text-xs"></i>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold text-sm md:text-base mb-1" style="color: #b01e1e;">National Emergency</p>
                            <p class="text-sm md:text-base" style="color: var(--text1);">A credit note will be issued for any cancellation due to National Emergency.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-full h-px my-8" style="background-color: rgba(142,22,22,0.2);"></div>

            <!-- Safaris -->
            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 pb-3" style="color: var(--text2); border-bottom: 2px solid rgba(142,22,22,0.2);">
                    Safaris
                </h2>
                <div class="p-4 rounded-lg mb-6" style="background-color: rgba(248,238,223,0.7); border-left: 4px solid var(--text2);">
                    <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);">
                        As this is an additional service, <strong style="color: var(--text2);">we provide no refund against any Safari bookings.</strong>
                        Guests have the option to book the safaris by themselves. No binding from our side.
                    </p>
                </div>

                <p class="text-sm font-semibold mb-3" style="color: var(--text2);">Available Safari Destinations:</p>
                <ul class="safari-list grid grid-cols-1 md:grid-cols-2 gap-2">
                    <?php
                    $safaris = [
                        "Sitabani Buffer Zone",
                        "Village Machaan Perch",
                        "Nature's Sprout Bidhwasan Jungle Camp",
                        "Nature's Sprout Tadoba Safari Stay",
                        "Nature's Sprout Wild Mark Kanha",
                        "Nature's Sprout Singi Estate Kolsa Zari",
                        "Nature's Sprout Nilmital Willows",
                        "Nature's Sprout Shurmaas Resort Satpura",
                        "Nature's Sprout Bandhavgarh Meadows",
                    ];
                    foreach ($safaris as $safari): ?>
                    <li class="flex items-center gap-2 py-2 px-3 rounded-lg" style="background-color: rgba(248,238,223,0.5);">
                        <span class="safari-bullet text-lg leading-none" style="color: var(--text2);">•</span>
                        <span class="text-sm md:text-base" style="color: var(--text1);"><?= $safari ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div><!-- end policy card -->
    </div>
</section>

<!-- Awards Section -->
<section class="py-12 md:py-20 px-4 md:px-6 awards-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl">
        <!-- Header -->
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down" style="color: var(--text2);">
                EXCELLENCE • RECOGNITION • TRUST
            </p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Awards and Recognitions
            </h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200" style="color: var(--text1);">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>

        <!-- Awards Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">

            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
                        class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-12 md:py-20 px-4 md:px-6" style="background-color: var(--bg2);">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

        <!-- Section Header -->
        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" data-aos="fade-down" style="color: var(--text2);">
                GUEST INFORMATION
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">
                Wildmark Resort FAQs
            </h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200" style="color: var(--text1);">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <!-- FAQ Grid: 10 Left + 10 Right -->
        <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

            <!-- LEFT COLUMN -->
            <div class="faq-col">

                <?php
                $faqs_left = [
                    ["Where is Wildmark Resort located near Khatiya Gate in Kanha?", "Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris."],
                    ["Why is Khatiya Gate preferred for Kanha resort booking?", "Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate."],
                    ["How far is Wildmark Resort from Khatiya Safari Gate?", "Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris."],
                    ["Is Wildmark Resort suitable for Kanha jungle safari bookings?", "Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services."],
                    ["Can I book Kanha safari along with Wildmark Resort stay?", "Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together."],
                    ["What types of rooms are available at Wildmark Resort Kanha?", "Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises."],
                    ["Are meals included in Kanha resort booking at Wildmark Resort?", "Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan."],
                    ["What is the best time to book a resort near Khatiya Gate Kanha?", "The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available."],
                    ["Is advance booking required for Kanha resorts near Khatiya Gate?", "Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season."],
                    ["Is Wildmark Resort open during the monsoon season?", "The resort remains open, and Buffer safaris are available during monsoon season."],
                ];
                foreach ($faqs_left as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
                        <span class="font-serif" style="color: var(--text1);"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div><!-- END LEFT COLUMN -->

            <!-- RIGHT COLUMN -->
            <div class="faq-col">

                <?php
                $faqs_right = [
                    ["Is Wildmark Resort family friendly?", "Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests."],
                    ["Does Wildmark Resort provide pickup and drop services?", "Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance."],
                    ["Is Wildmark Resort budget friendly compared to other Kanha resorts?", "Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options."],
                    ["Are group bookings allowed at Wildmark Resort Kanha?", "Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts."],
                    ["Does Wildmark Resort offer forest or jungle view rooms?", "Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone."],
                    ["Is Wildmark Resort safe for solo travelers?", "Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers."],
                    ["What documents are required at check-in for Kanha resorts?", "Guests must carry a valid government issued photo ID at the time of check in."],
                    ["Does Wildmark Resort offer activities besides jungle safari?", "Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort."],
                    ["How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?", "Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate."],
                    ["How can I get the best price for Kanha resort booking at Khatiya Gate?", "Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price."],
                ];
                foreach ($faqs_right as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
                        <span class="font-serif" style="color: var(--text1);"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div><!-- END RIGHT COLUMN -->

        </div><!-- END FAQ GRID -->
    </div>
</section>

<!-- Special Offer Floating Button -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd"></path>
    </svg>
    <span class="badge absolute -top-1 -right-1 text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">New</span>
</button>

<!-- Special Offer Popup Modal -->
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
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <p class="text-sm mb-4" style="color: var(--text1);">Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March 31, 2025.</p>
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
            <p class="text-sm font-semibold" style="color: var(--text2);">⏰ Offers valid till March 31, 2025 | Terms & Conditions Apply</p>
        </div>
    </div>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/8830996719" target="_blank"
    class="whatsapp-btn fixed bottom-4 right-4 md:bottom-8 md:right-8 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
</a>

<script>
// Parallax
var ticking = false;
function updateParallax() {
    var parallaxBg = document.querySelector('.parallax-bg');
    if (parallaxBg) {
        var scrolled = window.pageYOffset;
        var section = document.getElementById('promotionSection');
        if (section) {
            var rect = section.getBoundingClientRect();
            var sectionTop = section.offsetTop;
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                parallaxBg.style.transform = 'translate3d(0,' + (-(scrolled - sectionTop) * 0.5) + 'px,0)';
            }
        }
    }
    ticking = false;
}
window.addEventListener('scroll', function() {
    if (!ticking) { window.requestAnimationFrame(updateParallax); ticking = true; }
});
updateParallax();

// AOS
AOS.init({ duration: 800, once: true });

// FAQ Accordion — safe init (works whether DOM ready or not)
function initFaqAccordion() {
    var faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;

    faqItems.forEach(function(item) {
        var question = item.querySelector('.faq-question');
        var answer   = item.querySelector('.faq-answer');
        var icon     = item.querySelector('.faq-icon');
        if (!question || !answer) return;

        // Reset to closed state explicitly
        answer.style.maxHeight = '0px';
        answer.style.overflow  = 'hidden';
        if (icon) icon.style.transform = 'rotate(0deg)';

        question.addEventListener('click', function(e) {
            e.stopPropagation();
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Close all others
            faqItems.forEach(function(other) {
                var a  = other.querySelector('.faq-answer');
                var ic = other.querySelector('.faq-icon');
                if (a)  { a.style.maxHeight = '0px'; }
                if (ic) { ic.style.transform = 'rotate(0deg)'; }
            });

            // Toggle current
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

// Run immediately + fallback for slow DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initFaqAccordion);
} else {
    initFaqAccordion();
}

// Special Offer Popup
function toggleSpecialOfferPopup() {
    var popup = document.getElementById('specialOfferPopup');
    if (!popup) return;
    var hidden = popup.classList.contains('hidden');
    popup.classList.toggle('hidden', !hidden);
    popup.classList.toggle('flex', hidden);
    document.body.style.overflow = hidden ? 'hidden' : '';
}
function closeIfClickedOutside(event) {
    if (event.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
}
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        var popup = document.getElementById('specialOfferPopup');
        if (popup && !popup.classList.contains('hidden')) toggleSpecialOfferPopup();
    }
});

// FAQ Resize
function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}
window.addEventListener('load', handleFaqResize);
window.addEventListener('resize', handleFaqResize);
</script>
<script>
// ── FAQ Accordion ──
    document.addEventListener('DOMContentLoaded', function() {
      const faqItems = document.querySelectorAll('.faq-item');
      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer   = item.querySelector('.faq-answer');
        const icon     = item.querySelector('.faq-icon');
        question.addEventListener('click', () => {
          const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
          faqItems.forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.querySelector('.faq-answer').style.maxHeight = '0';
              otherItem.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            }
          });
          if (isOpen) { answer.style.maxHeight = '0'; icon.style.transform = 'rotate(0deg)'; }
          else        { answer.style.maxHeight = answer.scrollHeight + 'px'; icon.style.transform = 'rotate(180deg)'; }
        });
      });
    });
  </script>
</script>  

<?php 
include 'includes/footer.php'; 
?>