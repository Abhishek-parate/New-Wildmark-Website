<?php 
// Set page-specific title
$pageTitle = "Terms And Conditions - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
/* ===================================================
   ROOT COLOR VARIABLES (Same as Kanha Safari Package)
   =================================================== */
:root {
    --bg1:  #E8C999;   /* warm golden */
    --bg2:  #F8EEDF;   /* cream white */
    --text1: #000000;  /* pure black  */
    --text2: #8E1616;  /* deep red    */
}

/* ===================================================
   ANIMATIONS
   =================================================== */
@keyframes slideIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to   { opacity: 1; transform: scale(1)   translateY(0);    }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }
#specialOfferPopup > div::-webkit-scrollbar-track { background: var(--bg2); }
#specialOfferPopup > div::-webkit-scrollbar-thumb { background: var(--text2); border-radius: 3px; }

section { overflow-x: hidden; }

/* Hero Section */
.hero-section {
    position: relative;
    background: var(--bg1);
}
/* Parallax */
.promotion-section { position: relative; overflow: hidden; }
.parallax-bg {
    position: absolute; top: 0; left: 0;
    width: 100%; height: 120%;
    background: url('https://images.unsplash.com/photo-1551918120-9739cb430c6d?w=1600');
    background-size: cover; background-position: center;
    transform: translateZ(0); will-change: transform;
}
@media (max-width: 768px) {
    .parallax-bg { height: 100%; }
    body { font-size: 14px; }
    h2 { font-size: 1.5rem; }
    h3 { font-size: 1.25rem; }
    p, span, a, li { word-wrap: break-word; overflow-wrap: break-word; }
}

/* FAQ Grid */
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; }
.faq-col  { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
.faq-question { min-height: 64px; height: 64px; }
.faq-question span { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block; font-size: 15px !important; }
@media screen and (max-width: 860px) {
    .faq-grid { grid-template-columns: 1fr !important; }
    .faq-question { height: auto !important; min-height: unset !important; }
    .faq-question span { white-space: normal !important; overflow: visible !important; text-overflow: unset !important; font-size: 14px !important; }
}

/* ===================================================
   GLOBAL THEME OVERRIDES
   =================================================== */

/* Section backgrounds */
section.bg-neutral-900 { background-color: var(--bg2) !important; }
section.bg-black       { background-color: var(--bg1) !important; }

/* Headings */
h1, h2, h3, h4 { color: var(--text2) !important; }
.text-amber-100 { color: var(--text2) !important; }
.text-white     { color: var(--text1) !important; }

/* Body text */
.text-gray-300  { color: var(--text1) !important; }
p               { color: var(--text1); }
span            { color: var(--text1); }

/* Amber / accent colors */
.text-amber-500, .text-amber-400 { color: var(--text2) !important; }
.text-gray-400  { color: rgba(0, 0, 0, 0.55) !important; }
.fa-circle.text-amber-500 { color: var(--text2) !important; }

/* Borders */
.border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
.border-neutral-700 { border-color: rgba(142, 22, 22, 0.2)  !important; }

/* Terms & Conditions card */
.bg-black.rounded-lg {
    background-color: var(--bg2) !important;
    border-color: rgba(142, 22, 22, 0.2) !important;
}

/* Strong / bold text inside terms */
strong.text-white { color: var(--text2) !important; }

/* Sub-bullets amber dots */
span.text-amber-500 { color: var(--text2) !important; }

/* Awards Section */
.awards-section { background-color: var(--bg1) !important; }
.award-card > div { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.award-card:hover > div {
    transform: translateY(-6px) !important;
    box-shadow: 0 12px 30px rgba(142, 22, 22, 0.2) !important;
}

/* FAQ Cards */
.faq-item.bg-black {
    background-color: var(--bg2) !important;
    border-color: rgba(142, 22, 22, 0.25) !important;
    box-shadow: 0 2px 8px rgba(142, 22, 22, 0.06);
}
.faq-item.bg-black:hover { border-color: var(--text2) !important; }
.faq-question:hover { background-color: rgba(232, 201, 153, 0.5) !important; }
.faq-answer > div {
    background-color: rgba(232, 201, 153, 0.3) !important;
    border-top-color: rgba(142, 22, 22, 0.2) !important;
}
.faq-icon  { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* Special Offer floating button */
#specialOfferBtn {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
#specialOfferBtn:hover { background: linear-gradient(to right, #6b1010, var(--text2)) !important; }
#specialOfferBtn .bg-red-500 { background-color: var(--bg1) !important; color: var(--text2) !important; }

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
#specialOfferPopup .border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup .hover\:border-amber-500:hover { border-color: var(--text2) !important; }
#specialOfferPopup h4.text-white          { color: var(--text1) !important; }
#specialOfferPopup h3.text-white          { color: #fff !important; }
#specialOfferPopup .text-amber-500        { color: var(--text2) !important; }
#specialOfferPopup .text-gray-300         { color: var(--text1) !important; opacity: 0.85; }
#specialOfferPopup .text-gray-400.line-through { color: rgba(0,0,0,0.4) !important; }
#specialOfferPopup .text-gray-400         { color: rgba(0,0,0,0.5) !important; }
#specialOfferPopup .text-amber-100        { color: var(--bg1) !important; }
#specialOfferPopup .bg-amber-500\/10      { background-color: rgba(232, 201, 153, 0.3) !important; }
#specialOfferPopup .border-t.border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup button.hover\:text-amber-500:hover { color: var(--text2) !important; }
#specialOfferPopup button svg             { stroke: var(--text1) !important; }

/* Popup Book Now button */
.bg-amber-500 { background-color: var(--text2) !important; color: #fff !important; }
.bg-amber-500:hover, .hover\:bg-amber-600:hover { background-color: #6b1010 !important; }

/* Offer badges */
.bg-amber-500.text-black { color: #fff !important; }
.bg-green-500  { background-color: #2a6e3f !important; }
.bg-blue-500   { background-color: #1a4a7a !important; }
.text-green-500 { color: #2a6e3f !important; }
.text-blue-500  { color: #1a4a7a !important; }

/* WhatsApp stays green */
a[href*="wa.me"].bg-green-500 { background-color: #25D366 !important; }

/* Hero h1 stays white (readable on dark image) */
.hero-section h1 { color: #ffffff !important; }
#specialOfferBtn svg,
a[aria-label="WhatsApp"] svg {
    color: #fff !important;
    fill: #fff !important;
}
/* Floating button icons - keep white */
#specialOfferBtn svg,
a[aria-label="WhatsApp"] svg {
    color: #fff !important;
    fill: #fff !important;
}
</style>

<!-- Spacer -->
<div class="h-[60px] md:h-[80px]"></div>

<!-- Hero Section -->
<section class="hero-section relative h-[40vh] md:h-[50vh] flex items-center justify-center">
    <div class="absolute inset-0"></div>
    <div class="relative text-center px-4 z-10" data-aos="fade-up">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold" style="color: var(--text2) !important;">
            Terms & Conditions
        </h1>
    </div>
</section>

<!-- Terms & Conditions Content -->
<section class="py-12 md:py-16 bg-neutral-900">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div class="bg-black rounded-lg shadow-2xl p-6 md:p-10 lg:p-12 border border-neutral-800">

            <!-- Section 1 -->
            <div class="mb-8" data-aos="fade-up">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    1. Booking, Rates & Payment
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Rate Validity:</strong> Quoted rates apply for specified dates and occupants; seasonal surcharges may apply.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Advance & Balance:</strong> 100% advance payment is required for jungle safari and resort bookings.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 2 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    2. Check-In/Out & Transfers
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Check-In:</strong> 2:00 PM. <strong class="text-white">Check-Out:</strong> 11:00 AM. Early check-in/late check-out is subject to availability.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Transfers:</strong> Must be requested at least 24 hours in advance; same-day requests may not be accommodated.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    3. Identification Requirements
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Foreign Nationals:</strong> Most present a valid passport and visa.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Indian Nationals:</strong> Must present a Passport, Driving Licence, Voter ID card, or PAN card.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 4 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    4. Cancellation & Amendments
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Jungle Safari Bookings:</strong> Once booked, jungle safaris are non-refundable.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Resort Bookings:</strong></span>
                    </li>
                </ul>
                <ul class="space-y-2 text-gray-300 text-sm md:text-base ml-8 mt-2">
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span><strong class="text-white">More than 15 days before arrival:</strong> 25% cancellation charge.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span><strong class="text-white">22-30 days before arrival:</strong> 50% cancellation charge.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span><strong class="text-white">0-21 days before arrival:</strong> 80% cancellation charge.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span><strong class="text-white">7 days or less before arrival:</strong> 100% cancellation charge.</span>
                    </li>
                </ul>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base mt-4">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Special Dates:</strong> Bookings during Christmas, New Year, and long weekends are non-refundable.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Amendments:</strong> Changes within 30 days of arrival are treated as cancellations.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 5 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    5. Child & Extra-Adult Policy
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Children under 5 years:</strong> Complimentary.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Children ages 5-12 years:</strong> 25% of the adult rate.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Guests over 12 years:</strong> 80% of the adult rate; a two-room upgrade is available if a supplement of over 80% is paid, subject to availability.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 6 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="500">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    6. Park Closures and Circumstances Beyond Our Control
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>In the event of park, road, or system closure due to health, we are not liable for Elements beyond our control. Affected components will be rearranged or refunded (at our discretion), excluding government authorities.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>We are not liable for any Default or delay in fulfilling our obligations due to events beyond our reasonable control. Causes include, but are not limited to:</span>
                    </li>
                </ul>
                <ul class="space-y-2 text-gray-300 text-sm md:text-base ml-8 mt-2">
                    <li class="flex items-start gap-3"><span class="text-amber-500">•</span><span>Natural disasters (e.g., floods, earthquakes, landslides)</span></li>
                    <li class="flex items-start gap-3"><span class="text-amber-500">•</span><span>Force majeure events</span></li>
                    <li class="flex items-start gap-3"><span class="text-amber-500">•</span><span>Acts of government, war, or public health emergencies</span></li>
                    <li class="flex items-start gap-3"><span class="text-amber-500">•</span><span>Transportation-related problems</span></li>
                    <li class="flex items-start gap-3"><span class="text-amber-500">•</span><span>Strikes or labor disputes</span></li>
                    <li class="flex items-start gap-3"><span class="text-amber-500">•</span><span>Disruptions in telecommunication or utilities</span></li>
                </ul>
            </div>

            <!-- Section 7 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    7. Liability & Conduct
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Health & Safety:</strong> Guests are responsible for their own implications and fitness, we are not liable for Illnesses beyond our control. Affected components will be rearranged or refunded (at our discretion), excluding government authorities.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Conduct:</strong> Guests must respect wildlife, regulations, and lodge rules; any breach may lead to termination without refund.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 8 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="700">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    8. Age Restriction
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>Guests must be at least 18 years old to book and participate. By booking, you confirm that you meet this requirement.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 9 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="800">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    9. Indemnity
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>You agree to indemnify, defend, and hold harmless Indian Tiger Safaris and its affiliates from any claims, losses, or liabilities arising out of your participation, including negligence.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 10 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="900">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    10. Media Release
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>You grant permission for Indian Tiger Safaris to use photos and videos taken during safaris for promotional purposes without royalties.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 11 -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="1000">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    11. Third-Party Links
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>We are not responsible for the content, accuracy, or practices of external sites linked on our website.</span>
                    </li>
                </ul>
            </div>

            <!-- Section 12 -->
            <div class="mb-0" data-aos="fade-up" data-aos-delay="1100">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    12. Governing Law & Jurisdiction
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span>These terms are governed by the laws of India. Any disputes shall be resolved in the courts of India.</span>
                    </li>
                </ul>
            </div>

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
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Awards and Recognitions
            </h2>
            <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

        <div class="text-center mb-10 md:mb-14">
            <p class="text-amber-500 text-xs tracking-widest mb-3 font-light" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

            <!-- LEFT COLUMN -->
            <div class="faq-col">

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

<!-- Special Offer Button -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">New</span>
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
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
    </svg>
</a>

<script>
// FAQ Toggle
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.closest('.faq-item');
            const answer  = faqItem.querySelector('.faq-answer');
            const icon    = this.querySelector('.faq-icon');
            const isOpen  = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.querySelector('.faq-answer').style.maxHeight = '0';
                    item.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });
            if (isOpen) { answer.style.maxHeight = '0'; icon.style.transform = 'rotate(0deg)'; }
            else        { answer.style.maxHeight = answer.scrollHeight + 'px'; icon.style.transform = 'rotate(180deg)'; }
        });
    });
});
</script>

<script>
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) { popup.classList.remove('hidden'); popup.classList.add('flex'); document.body.style.overflow = 'hidden'; }
    else { popup.classList.add('hidden'); popup.classList.remove('flex'); document.body.style.overflow = ''; }
}
function closeIfClickedOutside(event) { if (event.target.id === 'specialOfferPopup') { toggleSpecialOfferPopup(); } }
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') { const popup = document.getElementById('specialOfferPopup'); if (!popup.classList.contains('hidden')) { toggleSpecialOfferPopup(); } }
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

<script>
// Parallax Effect
let ticking = false;
function updateParallax() {
    const parallaxBg = document.querySelector('.parallax-bg');
    if (parallaxBg) {
        const scrolled = window.pageYOffset;
        const promotionSection = document.getElementById('promotionSection');
        if (promotionSection) {
            const rect = promotionSection.getBoundingClientRect();
            const sectionTop = promotionSection.offsetTop;
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                parallaxBg.style.transform = `translate3d(0, ${-(scrolled - sectionTop) * 0.5}px, 0)`;
            }
        }
    }
    ticking = false;
}
window.addEventListener('scroll', function() {
    if (!ticking) { window.requestAnimationFrame(updateParallax); ticking = true; }
});
updateParallax();
if (typeof AOS !== 'undefined') { AOS.init({ duration: 800, once: true }); }
</script>

<?php include 'includes/footer.php'; ?>