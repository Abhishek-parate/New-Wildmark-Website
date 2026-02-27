<?php 
// Set page-specific title
$pageTitle = "Contact Us - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
/* ===================================================
   ROOT COLOR VARIABLES — same as Kanha-Kisli page
   =================================================== */
:root {
    --bg1: #E8C999;
    /* warm golden — cards / section alternate bg */
    --bg2: #F8EEDF;
    /* cream white — main section backgrounds */
    --text1: #000000;
    /* pure black  — body text */
    --text2: #8E1616;
    /* deep red    — headings / accents / CTAs */
}

/* ===================================================
   ANIMATIONS
   =================================================== */
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

#specialOfferPopup>div {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

#specialOfferPopup>div::-webkit-scrollbar {
    display: none;
}

#specialOfferPopup>div::-webkit-scrollbar-track {
    background: var(--bg2);
}

#specialOfferPopup>div::-webkit-scrollbar-thumb {
    background: var(--text2);
    border-radius: 3px;
}

/* ===================================================
   FAQ Grid
   =================================================== */
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

/* ===================================================
   CONTACT ICON
   =================================================== */
.contact-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--text2), #b01e1e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

/* ===================================================
   GLOBAL THEME OVERRIDES — matching Kanha Kisli
   =================================================== */

/* Section backgrounds */
section.bg-neutral-900 {
    background-color: var(--bg2) !important;
}

section.bg-black {
    background-color: var(--bg1) !important;
}

/* Headings */
h1,
h2,
h3,
h4 {
    color: var(--text2) !important;
}

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

/* Amber accents */
.text-amber-500,
.text-amber-400 {
    color: var(--text2) !important;
}

.text-gray-400 {
    color: rgba(0, 0, 0, 0.55) !important;
}

/* Borders */
.border-neutral-800 {
    border-color: rgba(142, 22, 22, 0.25) !important;
}

.border-neutral-700 {
    border-color: rgba(142, 22, 22, 0.2) !important;
}

/* ── Contact Section ── */
#contactSection {
    background-color: var(--bg2) !important;
}

/* Contact form inputs */
#contactSection input,
#contactSection textarea {
    background-color: #fff !important;
    border-color: rgba(142, 22, 22, 0.25) !important;
    color: var(--text1) !important;
}

#contactSection input::placeholder,
#contactSection textarea::placeholder {
    color: rgba(0, 0, 0, 0.4) !important;
}

#contactSection input:focus,
#contactSection textarea:focus {
    border-color: var(--text2) !important;
    outline: none;
}

/* Send button */
#contactSection button[type="submit"] {
    background-color: var(--text2) !important;
    color: #fff !important;
}

#contactSection button[type="submit"]:hover {
    background-color: #6b1010 !important;
}

/* Contact info card (right side) */
.contact-info-card {
    background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%) !important;
}

.contact-info-card h3,
.contact-info-card h4,
.contact-info-card a,
.contact-info-card span {
    color: #fff !important;
}

/* Social icons in contact card */
.contact-info-card .social-btn {
    background-color: var(--bg2) !important;
}

.contact-info-card .social-btn i {
    color: var(--text2) !important;
}

.contact-info-card .social-btn:hover {
    background-color: var(--bg1) !important;
}

/* ── Map Section ── */
#mapSection {
    background-color: var(--bg1) !important;
}

#mapSection h2 {
    color: var(--text2) !important;
}

#mapSection p {
    color: rgba(0, 0, 0, 0.65) !important;
}

#mapSection .border-amber-500\/30 {
    border-color: rgba(142, 22, 22, 0.3) !important;
}

#mapSection .text-amber-500 {
    color: var(--text2) !important;
}

/* ── Awards Section ── */
.awards-section {
    background-color: var(--bg1) !important;
}

.award-card>div {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.award-card:hover>div {
    transform: translateY(-6px) !important;
    box-shadow: 0 12px 30px rgba(142, 22, 22, 0.2) !important;
}

/* ── FAQ Cards ── */
.faq-item.bg-black {
    background-color: var(--bg2) !important;
    border-color: rgba(142, 22, 22, 0.25) !important;
    box-shadow: 0 2px 8px rgba(142, 22, 22, 0.06);
}

.faq-item.bg-black:hover {
    border-color: var(--text2) !important;
}

.faq-question:hover {
    background-color: rgba(232, 201, 153, 0.5) !important;
}

.faq-answer>div {
    background-color: rgba(232, 201, 153, 0.3) !important;
    border-top-color: rgba(142, 22, 22, 0.2) !important;
}

.faq-icon {
    color: var(--text2) !important;
}

.faq-question span {
    color: var(--text1) !important;
}

/* FAQ section bg */
section.py-12.md\:py-20.px-4.md\:px-6.bg-neutral-900 {
    background-color: var(--bg2) !important;
}

/* ── Special Offer floating button ── */
#specialOfferBtn {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}

#specialOfferBtn:hover {
    background: linear-gradient(to right, #6b1010, var(--text2)) !important;
}

#specialOfferBtn .bg-red-500 {
    background-color: var(--bg1) !important;
    color: var(--text2) !important;
}

/* ── Special Offer Popup ── */
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

#specialOfferPopup .text-gray-300 {
    color: var(--text1) !important;
    opacity: 0.85;
}

#specialOfferPopup .text-gray-400.line-through {
    color: rgba(0, 0, 0, 0.4) !important;
}

#specialOfferPopup .text-gray-400 {
    color: rgba(0, 0, 0, 0.5) !important;
}

#specialOfferPopup .text-amber-100 {
    color: var(--bg1) !important;
}

#specialOfferPopup .bg-amber-500\/10 {
    background-color: rgba(232, 201, 153, 0.3) !important;
}

#specialOfferPopup .border-t.border-amber-500\/30 {
    border-color: rgba(142, 22, 22, 0.3) !important;
}

#specialOfferPopup .text-2xl.font-bold.text-amber-500 {
    color: var(--text2) !important;
}

#specialOfferPopup button.text-white {
    color: var(--text1) !important;
}

#specialOfferPopup button.hover\:text-amber-500:hover {
    color: var(--text2) !important;
}

/* Popup Book Now button */
.bg-amber-500.hover\:bg-amber-600 {
    background-color: var(--text2) !important;
    color: var(--bg2) !important;
}

.bg-amber-500.hover\:bg-amber-600:hover {
    background-color: #6b1010 !important;
}

/* Offer badges */
.bg-green-500 {
    background-color: #2a6e3f !important;
}

.bg-blue-500 {
    background-color: #1a4a7a !important;
}

.text-green-500 {
    color: #2a6e3f !important;
}

.text-blue-500 {
    color: #1a4a7a !important;
}
</style>

<!-- Spacer -->
<div class="h-[60px] md:h-[80px]"></div>

<!-- Hero Banner -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
    style="background: url('https://wildmarkresort.com/images/wildmark1.JPG') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>

<!-- Contact Section -->
<section id="contactSection" class="py-12 md:py-16 bg-neutral-900">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-8 md:gap-12">

            <!-- Left Side - Contact Form -->
            <div data-aos="fade-right">
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fa-solid fa-paw text-amber-500 text-2xl"></i>
                        <span class="text-amber-500 text-xs tracking-widest font-light">CONTACT WITH US</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
                        Send us a Message
                    </h2>
                </div>

                <?php include 'includes/contact-form.php'; ?>
            </div>

            <!-- Right Side - Contact Info -->
            <div data-aos="fade-left">
                <div class="contact-info-card rounded-2xl p-8 md:p-10 lg:p-12 h-full">
                    <h3 class="text-2xl md:text-3xl font-serif font-bold mb-8">
                        Contact Us
                    </h3>

                    <!-- Phone -->
                    <div class="flex items-start gap-4 mb-8" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-light mb-2 tracking-wider opacity-80">PHONE</h4>
                            <a href="tel:8830996719" class="text-lg md:text-xl font-semibold hover:underline block">
                                (+91) 8830996719
                            </a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-light mb-2 tracking-wider opacity-80">EMAIL</h4>
                            <a href="mailto:wildmarkresort@gmail.com"
                                class="text-lg md:text-xl font-semibold hover:underline block break-all">
                                wildmarkresort@gmail.com
                            </a>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start gap-4 mb-8" data-aos="fade-up" >
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-light mb-2 tracking-wider opacity-80">ADDRESS</h4>
                            <span class="text-lg md:text-xl font-semibold block break-all">

                                Kanha Tiger Reserve, Near Maratha Restaurant, Mocha, Madhya Pradesh 481768
                            </span>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-10" data-aos="fade-up" >
                        <div class="flex gap-4">
                            <a href="#"
                                class="social-btn w-12 h-12 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                            <a href="#"
                                class="social-btn w-12 h-12 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <a href="#"
                                class="social-btn w-12 h-12 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                            <a href="#"
                                class="social-btn w-12 h-12 rounded-full flex items-center justify-center transition">
                                <i class="fab fa-linkedin-in text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section id="mapSection" class="py-12 md:py-16 bg-black">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-8" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-3">
                Find Us Here
            </h2>
            <p class="text-sm md:text-base">
                Wild Mark Resort, Kanha - Your Gateway to Wildlife Adventure
            </p>
        </div>

        <div class="rounded-xl overflow-hidden border-2 border-amber-500/30 shadow-2xl" data-aos="zoom-in">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0234567890123!2d80.5118205!3d22.315946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                width="1200" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="Wild Mark Resort Kanha Location">
            </iframe>
        </div>

        <div class="mt-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <p class="text-sm flex items-center justify-center gap-2">
                <i class="fa-solid fa-location-dot text-amber-500"></i>
                <span>Wild Mark Resort, Kanha National Park, Madhya Pradesh</span>
            </p>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="py-12 md:py-20 px-4 md:px-6 awards-section overflow-hidden" style="background-color: var(--bg2);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);"
                data-aos="fade-down">
                EXCELLENCE • RECOGNITION • TRUST
            </p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in"
                >
                Awards and Recognitions
            </h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png"
                        alt="TripAdvisor Travellers' Choice Award 2020"
                        class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png"
                        alt="TripAdvisor Travellers' Choice Award 2021"
                        class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  >
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png"
                        alt="TripAdvisor Travellers' Choice Award 2022"
                        class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  
                style="background-color: #39DCA1; border-radius: 9px;">
                <div
                    class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg"
                        alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" style="color: var(--text2);" data-aos="fade-down">GUEST
                INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" >

            <!-- LEFT COLUMN -->
            <div class="faq-col">

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in
                            Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort Kanha is located close near
                                the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle
                                safaris.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort
                            booking?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Khatiya Gate is preferred because of entry
                                to all the famous Core Zones as it offers rich wildlife sightings and has several good
                                resorts like Wildmark Resort nearby to Khatiya Gate.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort is located just a few
                                minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp;
                                evening safaris.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari
                            bookings?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort is well suited for
                                hassle free Kanha jungle safari bookings due to its location and safari assistance
                                services.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort
                            stay?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort can arrange both Jungle
                                resort stay and Khatiya Gate safari bookings together.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What types of rooms are available at Wildmark Resort
                            Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort offers comfortable cottages
                                and well furnished rooms suitable for couples, families, and groups. The resort is Pet
                                friendly &amp; has provisions for differently &amp; specially abled guests with wheel
                                chair access inside the resort premises.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark
                            Resort?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Most Wildmark Resort packages include
                                breakfast, lunch, and dinner depending on the selected plan.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate
                            Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">The best time is from October to June when
                                Kanha National Park is open for safaris. During monsoon season buffer zone safaris are
                                available.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya
                            Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, advance booking is strongly recommended
                                during weekends, holidays, and peak safari season.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">The resort remains open, and Buffer safaris
                                are available during monsoon season.</p>
                        </div>
                    </div>
                </div>

            </div><!-- END LEFT COLUMN -->

            <!-- RIGHT COLUMN -->
            <div class="faq-col">

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort is family &amp; pet
                                friendly and suitable for children and senior citizens. The resort also has wheelchair
                                access for differently &amp; specially abled guests.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop
                            services?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Pickup and drop services from nearby railway
                                stations or airports can be arranged upon request in advance.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha
                            resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort offers good value for money
                                with comfortable stays and quality services near Khatiya Gate. The resort restaurant
                                offers multi-cuisine dining with all food options.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort accepts group bookings
                                for corporate tours, school groups, and wildlife enthusiasts.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view
                            rooms?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Some rooms and cottages at Wildmark Resort
                                offer views of the surrounding forest area as it is constructed inside the Khatiya
                                Buffer zone.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort follows standard safety
                                practices and is safe for solo travelers.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What documents are required at check-in for Kanha
                            resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Guests must carry a valid government issued
                                photo ID at the time of check in.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle
                            safari?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, guests can enjoy nature walks, bird
                                watching, nearby attractions and village visits arranged by the resort.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near
                            Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Several Kanha resorts are located near
                                Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How can I get the best price for Kanha resort booking at
                            Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Booking early, choosing weekday stays, and
                                opting for stay plus safari packages usually gives the best price.</p>
                        </div>
                    </div>
                </div>

            </div><!-- END RIGHT COLUMN -->

        </div><!-- END FAQ GRID -->
    </div>
</section>




<script>
// FAQ Accordion
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
                    otherItem.querySelector('.faq-answer').style.maxHeight = '0';
                    otherItem.querySelector('.faq-icon').style.transform =
                        'rotate(0deg)';
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