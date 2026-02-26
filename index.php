<?php 
// Set page-specific title
$pageTitle = "Home - Wildmark Resort Kanha";

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

/* Responsive Container */
.container {
    width: 100%;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem;
}

@media (min-width: 640px) { .container { max-width: 640px; } }
@media (min-width: 768px) { .container { max-width: 768px; } }
@media (min-width: 1024px) { .container { max-width: 1024px; } }
@media (min-width: 1280px) { .container { max-width: 1200px; } }

.carousel-dot {
    width: 8px;
    height: 8px;
    background: rgba(142, 22, 22, 0.3);
    border-radius: 50%;
    transition: all 0.3s;
}
.carousel-dot.active {
    background: var(--text2);
    width: 10px;
    height: 10px;
}

.testimonial-dot {
    width: 10px;
    height: 10px;
    background: rgba(142, 22, 22, 0.3);
    border-radius: 50%;
    transition: all 0.3s;
    cursor: pointer;
}
.testimonial-dot.active { background: var(--text2); }

.destination-card { position: relative; overflow: hidden; }
.destination-card img { transition: transform 0.7s ease; }
.destination-card:hover img { transform: scale(1.05); }

/* Hero Carousel */
.hero-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
    z-index: 0;
}
.hero-slide.active { opacity: 1; z-index: 1; }
.hero-image {
    position: absolute;
    inset: 0;
    background-size: cover !important;
    background-position: center !important;
    transform: scale(1);
    transition: transform 8s ease-out;
}
.hero-slide.active .hero-image { transform: scale(1.08); }
.hero-indicator { cursor: pointer; transition: all 0.3s ease; }
.hero-indicator.active { opacity: 1 !important; background: var(--text2); transform: scale(1.3); }
.hero-carousel { backface-visibility: hidden; -webkit-backface-visibility: hidden; }

/* Testimonial Cards */
.testimonial-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.testimonial-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(142,22,22,0.15); }
.testimonial-nav-dot { cursor: pointer; transition: all 0.3s ease; }
.testimonial-nav-dot:hover { transform: scale(1.3); }
.testimonial-carousel { display: flex; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1); }

@media (max-width: 768px) { .testimonial-card { min-width: 100% !important; } }
@media (min-width: 769px) { .testimonial-card { min-width: 33.333% !important; } }

/* Conservation Video */
.conservation-video { position: relative; overflow: hidden; }
.conservation-video video { object-fit: cover; width: 100%; height: 100%; }
@media (max-width: 1024px) { .conservation-video { aspect-ratio: 9/16; max-height: 600px; } }
.conservation-video button:hover svg { transform: scale(1.1); transition: transform 0.2s; }
@media (max-width: 1024px) { .conservation-video { aspect-ratio: auto !important; } }
.conservation-video, .conservation-content-card { border-radius: 0.75rem; }

/* Tabs */
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
@media (min-width: 768px) { .tab-btn { font-size: 1rem; padding-bottom: 1rem; } }
.tab-btn:hover { color: #6e1010; }
.tab-btn.active { color: var(--text2); }
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

/* Why Choose Cards */
.why-choose-card {
    background: rgba(232, 201, 153, 0.4);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(142, 22, 22, 0.2);
    border-radius: 1rem;
    padding: 1.5rem 1.5rem;
    text-align: left;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.why-choose-card .icon-wrapper {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 0 1rem 0;
    box-shadow: 0 8px 20px rgba(142, 22, 22, 0.2);
}
.why-choose-card .icon-wrapper i { font-size: 1.5rem; color: var(--bg2); }
.why-choose-card h4 { color: var(--text2); font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; font-family: "Roboto Slab", serif; line-height: 1.4; text-align: left; }
.why-choose-card p { color: var(--text1); font-size: 0.875rem; line-height: 1.6; margin-bottom: 0; font-family: "Roboto Mono", monospace; text-align: left; }
@media (max-width: 1023px) { .why-choose-card { padding: 2rem 1.25rem; } }
@media (max-width: 767px) { .why-choose-section { padding-top: 3rem; padding-bottom: 3rem; } .why-choose-card { padding: 2rem 1.5rem; } .why-choose-card h4 { font-size: 1.125rem; } }

/* Tour Cards */
.tour-card {
    background: transparent;
    border-radius: 1rem;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 20px rgba(142,22,22,0.2);
}

.tour-card:hover { transform: translateY(-8px); box-shadow: 0 12px 40px rgba(142,22,22,0.35); }
.tour-card { height: auto; display: flex; flex-direction: column; }
@media (max-width: 1024px) { .tour-card { height: auto; } }
@media (max-width: 768px) { .tour-card { height: auto; } .tour-card .h-\[240px\] { height: 200px; } .tour-card .h-\[280px\] { height: auto; min-height: 240px; } }

.youtube-shorts-card iframe { max-width: 100%; display: block; border: none; }
@media (max-width: 768px) { .youtube-shorts-card { max-width: 400px; margin: 0 auto; } }
.youtube-shorts-card > div { position: relative; overflow: hidden; }
.youtube-shorts-card { transition: transform 0.3s ease; }
.youtube-shorts-card:hover { transform: translateY(-4px); }
.aspect-\[9\/16\] { aspect-ratio: 9 / 16; }

/* Award Cards */
.award-card { transition: transform 0.3s ease; }
.award-card:hover { transform: translateY(-4px); }
.award-card > div { height: 100%; min-height: 380px; display: flex; flex-direction: column; justify-content: center; }
@media (max-width: 768px) { .award-card > div { min-height: 340px; } }
.award-card:hover .award-logo { transform: scale(1.05); transition: transform 0.3s ease; }
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }
@media (max-width: 768px) { .award-card > div { min-height: 280px !important; } .award-image { max-width: 220px; } }
.award-card > div { transition: all 0.3s ease; }

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

.carousel-container { position: relative; overflow: hidden; width: 100%; }
.carousel-slides { display: flex; transition: transform 0.5s ease-in-out; width: 100%; }
.carousel-slide { min-width: 100%; width: 100%; flex-shrink: 0; display: block; }
.carousel-slide img { width: 100%; height: 100%; object-fit: cover; display: block; }
.carousel-dot { width: 10px; height: 10px; border-radius: 50%; background-color: rgba(142,22,22,0.3); transition: all 0.3s ease; border: none; cursor: pointer; }
.carousel-dot.active { background-color: var(--text2); width: 30px; border-radius: 5px; }
.carousel-dot:hover { background-color: rgba(142,22,22,0.6); }
button[onclick^="prevSlide"], button[onclick^="nextSlide"] { user-select: none; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; }

/* ===== GLOBAL THEME OVERRIDES ===== */
section.bg-neutral-900 { background-color: var(--bg2) !important; }
section.bg-black { background-color: var(--bg1) !important; }

h1, h2, h3, h4 { color: var(--text2) !important; }
.text-amber-100 { color: var(--text2) !important; }
.text-gray-300 { color: var(--text1) !important; }
p { color: var(--text1); }
.text-amber-500, .text-amber-400 { color: var(--text2) !important; }

.border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
.border-neutral-700 { border-color: rgba(142, 22, 22, 0.2) !important; }

/* Intro Section */
#intro { background-color: var(--bg2) !important; }
#intro h1, #intro h5 { color: var(--text2) !important; }
#intro h5.text-amber-500 { color: var(--text2) !important; }
#intro p { color: var(--text1) !important; }

/* About Resort Section */
.conservation-section { background-color: var(--bg1) !important; }
.conservation-content-card { background-color: var(--bg2) !important; }
.conservation-content-card p { color: var(--text1) !important; }
.conservation-content-card h2 { color: var(--text2) !important; }
.conservation-content-card .text-amber-500 { color: var(--text2) !important; }
.conservation-content-card a.bg-amber-600 { background-color: var(--text2) !important; color: var(--bg2) !important; }
.conservation-content-card a.bg-amber-600:hover { background-color: #6e1010 !important; }
.conservation-content-card a.border-white { border-color: var(--text2) !important; color: var(--text2) !important; }
.conservation-content-card a.border-white:hover { background-color: var(--text2) !important; color: var(--bg2) !important; }

/* Extraordinary Section */
.extraordinary-section { background-color: var(--bg1) !important; }
.extraordinary-section .text-amber-500 { color: var(--text2) !important; }
.extraordinary-section h2 { color: var(--text2) !important; }
.extraordinary-section p { color: var(--text1) !important; }
.extraordinary-section .text-gray-300 { color: var(--text1) !important; }

/* Carousel Arrows */
button[onclick^="prevSlide"],
button[onclick^="nextSlide"] {
    background: rgba(248,238,223,0.9) !important;
    color: var(--text2) !important;
}
button[onclick^="prevSlide"]:hover,
button[onclick^="nextSlide"]:hover {
    background: var(--bg2) !important;
}

/* Rooms Section */
#rooms { background-color: var(--bg2) !important; }
#rooms h2 { color: var(--text2) !important; }
#rooms .sticky { background-color: var(--bg2) !important; border-bottom-color: rgba(142,22,22,0.2) !important; }
#rooms .tab-btn { color: var(--text2) !important; }
#rooms .tab-btn.active { color: var(--text2) !important; }
#rooms .text-amber-500 { color: var(--text2) !important; }
#rooms .text-gray-300 { color: var(--text1) !important; }
#rooms a.bg-amber-600 { background-color: var(--text2) !important; color: var(--bg2) !important; }
#rooms a.bg-amber-600:hover { background-color: #6e1010 !important; }

/* Why Choose Section */
.why-choose-section { background-color: var(--bg2) !important; }
.why-choose-section .text-amber-500 { color: var(--text2) !important; }
.why-choose-section .text-gray-300 { color: var(--text1) !important; }

/* Roots / About Kanha Section */
.roots-section { background-color: var(--bg1) !important; }
.roots-content { background-color: #c9a96e !important; }
.roots-content h2 { color: var(--text2) !important; }
.roots-content p { color: var(--text1) !important; }
.roots-content .text-gray-200 { color: var(--text1) !important; }
.roots-content a.border-white { border-color: var(--text2) !important; color: var(--text2) !important; }
.roots-content a.border-white:hover { background-color: var(--text2) !important; color: var(--bg2) !important; }
.roots-content a.bg-amber-600 { background-color: var(--text2) !important; color: var(--bg2) !important; }
.roots-content a.bg-amber-600:hover { background-color: #6e1010 !important; }

/* Testimonials Section */
.testimonial-section { background-color: var(--bg2) !important; }
.testimonial-section h2 { color: var(--text2) !important; }
.testimonial-section .text-white { color: var(--text1) !important; }
.testimonial-section .text-gray-400 { color: rgba(0,0,0,0.5) !important; }
/* Testimonial nav arrows */
.testimonial-section button[onclick^="prevTestimonial"],
.testimonial-section button[onclick^="nextTestimonial"] {
    background: var(--bg2) !important;
    color: var(--text2) !important;
    box-shadow: 0 4px 15px rgba(142,22,22,0.2) !important;
}
.testimonial-section button[onclick^="prevTestimonial"]:hover,
.testimonial-section button[onclick^="nextTestimonial"]:hover {
    background: var(--bg1) !important;
}
/* Testimonial dots */
.testimonial-nav-dot { }
/* View all reviews button */
.testimonial-section a[href*="google"] {
    border-color: var(--text2) !important;
    color: var(--text2) !important;
}
.testimonial-section a[href*="google"]:hover {
    background-color: var(--text2) !important;
    color: var(--bg2) !important;
}

/* Destinations / Tour Package Section */
.destinations-section { background-color: var(--bg1) !important; }
.destinations-section .text-amber-500 { color: var(--text2) !important; }
.destinations-section h2 { color: var(--text2) !important; }
.destinations-section .text-gray-300 { color: var(--text1) !important; }
.destinations-section .tour-card .bg-neutral-900 { background-color: var(--bg2) !important; }
.destinations-section .tour-card h3 { color: var(--text2) !important; }
.destinations-section .tour-card .text-gray-400 { color: rgba(0,0,0,0.5) !important; }
.destinations-section .tour-card a { color: var(--text1) !important; }
.destinations-section .tour-card a:hover { color: var(--text2) !important; }
.destinations-section .bg-amber-500 { background-color: var(--text2) !important; color: var(--bg2) !important; }

/* Location Contact Section */
.location-contact-section .bg-neutral-800 { background-color: #c9a96e !important; }
.location-contact-section h2 { color: var(--text2) !important; }
.location-contact-section .text-amber-500 { color: var(--text2) !important; }
.location-contact-section .text-amber-400 { color: var(--text2) !important; }
.location-contact-section .text-gray-300 { color: var(--text1) !important; }
.location-contact-section .text-white { color: var(--text1) !important; }
.location-contact-section .bg-amber-500\/20 { background-color: rgba(142,22,22,0.15) !important; }
.location-contact-section a[href*="contact"] {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
.location-contact-section a[href*="contact"]:hover {
    background: linear-gradient(to right, #6e1010, var(--text2)) !important;
}

/* Awards Section */
.awards-section { background-color: var(--bg1) !important; }
.awards-section .text-amber-500 { color: var(--text2) !important; }
.awards-section h2 { color: var(--text2) !important; }
.awards-section .text-gray-300 { color: var(--text1) !important; }

/* FAQ Section */
section.py-12.md\:py-20.px-4.md\:px-6.bg-neutral-900 { background-color: var(--bg2) !important; }
.faq-item.bg-black { background-color: var(--bg2) !important; border-color: rgba(142,22,22,0.25) !important; box-shadow: 0 2px 8px rgba(142,22,22,0.07); }
.faq-item.bg-black:hover { border-color: var(--text2) !important; }
.faq-question:hover { background-color: rgba(232,201,153,0.5) !important; }
.faq-answer > div { background-color: rgba(232,201,153,0.3) !important; border-top-color: rgba(142,22,22,0.2) !important; }
.faq-icon { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* Special Offer Popup */
#specialOfferPopup .bg-neutral-900 { background-color: var(--bg2) !important; border-color: var(--text2) !important; }
#specialOfferPopup .bg-gradient-to-r { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
#specialOfferPopup .bg-black { background-color: var(--bg1) !important; }
#specialOfferPopup .border-amber-500\/30 { border-color: rgba(142,22,22,0.3) !important; }
#specialOfferPopup h4.text-white { color: var(--text1) !important; }
#specialOfferPopup .text-amber-500 { color: var(--text2) !important; }
#specialOfferPopup .bg-amber-500\/10 { background-color: rgba(232,201,153,0.3) !important; }
#specialOfferPopup .text-amber-100 { color: var(--bg2) !important; }
#specialOfferPopup .text-gray-400.line-through { color: rgba(0,0,0,0.4) !important; }
#specialOfferPopup .text-2xl.text-amber-500 { color: var(--text2) !important; }
#specialOfferPopup .text-gray-400 { color: rgba(0,0,0,0.5) !important; }
#specialOfferPopup .text-gray-300 { color: var(--text1) !important; }

/* Special Offer Button */
#specialOfferBtn { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
#specialOfferBtn:hover { background: linear-gradient(to right, #6e1010, var(--text2)) !important; }
#specialOfferBtn .bg-red-500 { background-color: var(--bg1) !important; color: var(--text2) !important; }

/* Book Now & CTA Buttons */
.bg-amber-600, .hover\:bg-amber-700 { background-color: var(--text2) !important; }
.bg-amber-600:hover { background-color: #6e1010 !important; }
.bg-amber-500.hover\:bg-amber-600 { background-color: var(--text2) !important; color: var(--bg2) !important; }
.bg-amber-500.hover\:bg-amber-600:hover { background-color: #6e1010 !important; }

.bg-green-500.hover\:bg-green-600 { background-color: #25D366 !important; }
.bg-green-500 { background-color: #2a6e3f !important; }
.bg-blue-500 { background-color: #1a4a7a !important; }

/* Rating stars keep amber */
.text-amber-400.text-2xl, .text-amber-400.text-3xl, .text-amber-400.text-lg { color: #d97706 !important; }
</style>

 <header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/Tiger5.webp') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </header>

<!-- Intro / Strapline -->
<section id="intro" class="relative py-8 md:py-20 flex items-center overflow-hidden" style="background-color: var(--bg2);">
    <div class="mx-auto w-full max-w-7xl text-center">
        <div class="text-center z-10 px-4 md:px-6 w-full max-w-7xl relative mx-auto">
            <h1 class="text-4xl md:text-6xl lg:text-6xl font-serif font-light mb-6 md:mb-8 tracking-wide hero-title"
                data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                Welcome to Wildmark Resort
            </h1>
            <h5 class="text-xl md:text-xl lg:text-xl font-serif font-light mb-6 md:mb-8 tracking-wide hero-title"
                data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300" style="color: var(--text2);">
                A Peaceful Safari Stay Near Kanha Tiger Reserve
            </h5>
            <p class="text-lg md:text-xl mb-3 md:mb-4 font-light leading-relaxed hero-text" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="600">
                Wildmark Resort is a thoughtfully designed jungle retreat located
                close to Kanha Tiger Reserve. Surrounded by nature & away from city
                noise, the resort offers a calm and comfortable stay before and
                after your wildlife safaris. Ideal for family Vacay, couple retreat,
                Corporate Tours & wildlife Photography lovers.
            </p>
            <p class="text-lg md:text-xl mb-3 md:mb-4 font-light leading-relaxed hero-text" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="800">
                Whether you're here for tiger sightings, a relaxed forest holiday,
                or a family getaway, Wildmark Resort combines warm hospitality with
                a true jungle atmosphere.
            </p>
        </div>
    </div>
</section>

<!-- About Resort Section -->
<section class="py-10 md:py-16 conservation-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
        <div class="grid lg:grid-cols-2 items-center gap-6 md:gap-10">
            <!-- Left: Video -->
            <div class="conservation-video relative w-full h-[360px] md:h-[460px] lg:h-[520px] overflow-hidden rounded-xl shadow-xl"
                data-aos="fade-right" data-aos-duration="1000">
                <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline
                    preload="metadata" id="conservationVideo">
                    <source src="https://wildmarkresort.com/images/IMG_8309.mp4" type="video/mp4" />
                    <source src="https://wildmarkresort.com/images/IMG_8309.webm" type="video/webm" />
                    <source src="https://wildmarkresort.com/images/IMG_8309.mp4" type="video/quicktime" />
                    Your browser does not support the video tag.
                </video>
                <button
                    class="absolute bottom-4 right-4 bg-black/50 hover:bg-black/70 text-white w-12 h-12 rounded-full flex items-center justify-center transition z-10"
                    id="muteToggle" aria-label="Unmute video" aria-pressed="false">
                    <svg id="muteIcon" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4.804A1 1 0 0110.618 4l3.535 3.536a1 1 0 01-1.414 1.414L11 6.212V13a1 1 0 11-2 0V4.804zM3 8a1 1 0 011-1h2.586l2.707-2.707A1 1 0 0111 5v10a1 1 0 01-1.707.707L6.586 13H4a1 1 0 01-1-1V8z" />
                    </svg>
                    <svg id="soundIcon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4a1 1 0 01.894.553L12 8h3a1 1 0 010 2h-3l-2.106 3.447A1 1 0 019 13V4z" />
                        <path d="M14.536 5.464a1 1 0 011.415 1.414 5 5 0 010 7.071 1 1 0 01-1.415-1.414 3 3 0 000-4.243 1 1 0 010-1.414z" />
                    </svg>
                </button>
            </div>

            <!-- Right: Content Card -->
            <div class="conservation-content-card p-6 md:p-10 lg:p-12 rounded-xl" style="background-color: var(--bg2);"
                data-aos="fade-left" data-aos-duration="1000">
                <p class="text-xs tracking-widest mb-4 md:mb-6 font-light" style="color: var(--text2);">
                    About Kanha Tiger Reserve
                </p>
                <h2 class="text-3xl md:text-4xl font-serif mb-5 md:mb-6 leading-tight">
                    The Jewel of Indian Wildlife
                </h2>
                <p class="text-sm md:text-base mb-2 md:mb-4 leading-relaxed text-justify">
                    Welcome to the wild wonders of Kanha Kisli Tiger Reserve where
                    every turn holds the promise of adventure! Spanning 940 square
                    kilometers, Kanha Tiger Reserve celebrates over 50 years of
                    conservation success and houses a remarkable variety of flora and
                    fauna. At the heart of your journey lies the thrilling tiger
                    safari, a chance to explore four distinct zones: Kanha, Kisli,
                    Mukki & Sarhi.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                    <a href="https://wildmarkresort.com/contact/"
                        class="px-6 md:px-8 py-2.5 md:py-3 transition font-light text-sm md:text-base inline-block text-center text-white"
                        style="background-color: var(--text2);">
                        Book Your Stay
                    </a>
                    <a href="https://wildmarkresort.com/kanha-accommodation/"
                        class="px-6 md:px-8 py-2.5 md:py-3 transition font-light text-sm md:text-base inline-block text-center"
                        style="border: 1px solid var(--text2); color: var(--text2);"
                        onmouseover="this.style.backgroundColor='var(--text2)';this.style.color='var(--bg2)';"
                        onmouseout="this.style.backgroundColor='transparent';this.style.color='var(--text2)';">
                        View Rooms
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Extraordinary Section -->
<section class="py-12 md:py-20 px-4 md:px-6 extraordinary-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-8 md:mb-12">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);"
                data-aos="fade-down" data-aos-duration="800">
                Best Conservation Efforts | Luxury Accommodation | Travel-Friendly Experience
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6 md:mb-8" data-aos="zoom-in" data-aos-duration="1000">
                No matter where you're going from, we take you there.
            </h2>
            <p class="text-sm md:text-base max-w-6xl mx-auto leading-relaxed mb-2" data-aos="fade-up" data-aos-delay="200">
                One of the most remarkable aspects of Kanha Jungle Resort is its commitment to conservation.
            </p>
            <p class="text-sm md:text-base max-w-6xl mx-auto leading-relaxed mb-2" data-aos="fade-up" data-aos-delay="300">
                The beauty of a Kanha National Park holiday package is not just in its wildlife.
            </p>
            <p class="text-sm md:text-base max-w-6xl mx-auto leading-relaxed mb-2" data-aos="fade-up" data-aos-delay="400">
                Kanha National Park accommodation also offers walking trails in designated buffer zones, allowing adventurous visitors to explore the forest on foot under the guidance of a naturalist.
            </p>
        </div>

        <!-- Carousel -->
        <div class="relative mt-10 md:mt-16" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="carousel-container overflow-hidden rounded-lg">
                <div class="carousel-slides flex transition-transform duration-500 ease-in-out" id="carousel">
                    <div class="carousel-slide w-full flex-shrink-0">
                        <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Tiger Safari" class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover" />
                    </div>
                    <div class="carousel-slide w-full flex-shrink-0">
                        <img src="https://wildmarkresort.com/images/deer.webp" alt="Wildlife Experience" class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover" />
                    </div>
                    <div class="carousel-slide w-full flex-shrink-0">
                        <img src="https://wildmarkresort.com/images/Tiger5.webp" alt="Safari Jeep" class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover" />
                    </div>
                </div>
            </div>

            <button class="absolute left-2 md:left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center transition shadow-lg z-10"
                style="background-color: rgba(248,238,223,0.9); color: var(--text2);"
                onclick="prevSlide()" aria-label="Previous slide">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button class="absolute right-2 md:right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center transition shadow-lg z-10"
                style="background-color: rgba(248,238,223,0.9); color: var(--text2);"
                onclick="nextSlide()" aria-label="Next slide">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="flex justify-center mt-6 md:mt-8 gap-2">
                <button class="carousel-dot active" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
                <button class="carousel-dot" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
                <button class="carousel-dot" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section id="rooms" class="py-12 md:py-16" style="background-color: var(--bg2);">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-serif font-bold">
                Explore Our Accommodation Options
            </h2>
        </div>

        <!-- Tabs -->
        <div class="sticky top-[60px] md:top-[80px] z-40 border-b py-4 mb-8"
            style="background-color: var(--bg2); border-bottom-color: rgba(142,22,22,0.2);">
            <div class="flex justify-center gap-4 md:gap-8 overflow-x-visible">
                <button class="tab-btn active" data-tab="machaan">Super Deluxe Rooms</button>
                <button class="tab-btn" data-tab="superdeluxe">Family Double Bedded Rooms</button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="grid md:grid-cols-2 gap-8 md:gap-12">
            <div class="panel" data-tab="machaan">
                <img src="https://wildmarkresort.com/images/beded3.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Machaan" />
            </div>
            <div class="panel" data-tab="machaan">
                <h5 class="text-xl font-serif font-light tracking-wide mt-4" style="color: var(--text2);"
                    data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                    Super Deluxe Rooms with Open Shower
                </h5>
                <p class="text-sm md:text-base mb-2 md:mb-4 leading-relaxed text-justify mt-4">
                    The Super Deluxe Room with Private Sit-Outs offers a refined retreat blending comfort with natural elegance. This well-appointed room features a private outdoor seating area, plush bedding, modern furnishings, and air conditioning for a relaxing stay. Enjoy contemporary decor, thoughtful amenities, and a serene view for an unforgettable escape.
                </p>
            </div>
            <div class="panel md:col-span-2 text-center mt-8" data-tab="machaan">
                <div class="flex justify-center">
                    <a href="https://wildmarkresort.com/kanha-super-deluxe-rooms-in-kanha/"
                        class="px-10 py-3 transition font-semibold text-base rounded-lg shadow-lg text-white"
                        style="background-color: var(--text2);">
                        KNOW MORE
                    </a>
                </div>
            </div>

            <div class="panel hidden" data-tab="superdeluxe">
                <img src="https://wildmarkresort.com/images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Super Deluxe" />
            </div>
            <div class="panel hidden" data-tab="superdeluxe">
                <h5 class="text-xl font-serif font-light tracking-wide mt-4" style="color: var(--text2);"
                    data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                    Family Double Bedded Rooms
                </h5>
                <p class="text-sm md:text-base mb-2 md:mb-4 leading-relaxed text-justify mt-4">
                    The Super Deluxe Family Room is designed to comfortably accommodate families, offering spacious living areas and extra sleeping options. This room features elegant decor, modern amenities, and air conditioning to ensure a relaxing stay. Enjoy a harmonious blend of style and functionality, perfect for memorable family getaways.
                </p>
            </div>
            <div class="panel hidden md:col-span-2 text-center mt-8" data-tab="superdeluxe">
                <div class="flex justify-center">
                    <a href="https://wildmarkresort.com/family-double-bedded-rooms-in-kanha/"
                        class="px-10 py-3 transition font-semibold text-base rounded-lg shadow-lg text-white"
                        style="background-color: var(--text2);">
                        KNOW MORE
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Wildmark Resort Section -->
<section class="py-12 md:py-20 px-4 md:px-6 why-choose-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
                EXCELLENCE • COMFORT • NATURE
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in" data-aos-duration="1000">
                Why Choose Wildmark Resort
            </h2>
            <p class="text-sm md:text-base max-w-7xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Nestled at the doorstep of Kanha's pristine wilderness, Wildmark Resort offers the perfect blend of comfort and adventure. Our colonial-style cottages, surrounded by lush gardens, provide a serene retreat after exhilarating safari experiences.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="icon-wrapper"><i class="fas fa-crown"></i></div>
                <h4>Suite & Executive Rooms</h4>
                <p>We provide you 2 executive rooms, and 2 suite rooms with living area and private balcony facility.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="icon-wrapper"><i class="fas fa-mountain"></i></div>
                <h4>Luxury Cottage</h4>
                <p>Enjoy the indoor private swimming pool in the luxury cottage for more connectedness with nature.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="icon-wrapper"><i class="fas fa-tree"></i></div>
                <h4>Lawn View</h4>
                <p>Without compromising nature view, we provide you the luxury amenity with 3 lawn view and super deluxe rooms.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="icon-wrapper"><i class="fas fa-users"></i></div>
                <h4>Family Suite</h4>
                <p>A more guaranteed connecting room with your parents is available to accommodate in King size bed and bathrooms for an entire family.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Kanha Section -->
<section class="py-0 roots-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="w-full">
        <div class="grid lg:grid-cols-2">
            <div class="relative h-[400px] md:h-[600px] roots-image" data-aos="fade-right" data-aos-duration="1200">
                <img src="https://wildmarkresort.com/images/small_tiger.webp" alt="Kanha Tiger" class="w-full h-full object-cover" />
            </div>
            <div class="flex items-center px-6 md:px-12 lg:px-12 py-12 md:py-12 roots-content"
                style="background-color: #c9a96e;"
                data-aos="fade-left" data-aos-duration="1200">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif mb-6 md:mb-8 leading-tight" data-aos="fade-up" data-aos-delay="300">
                        The Jewel of Indian Wildlife
                    </h2>
                    <p class="text-sm md:text-base mb-6 md:mb-4 leading-relaxed text-justify" data-aos="fade-up" data-aos-delay="400">
                        Welcome to the wild wonders of Kanha Kisli Tiger Reserve where every turn holds the promise of adventure! At the heart of your journey lies the thrilling tiger safari, a chance to explore four distinct zones: Kanha, Kisli, Mukki & Sarhi.
                    </p>
                    <p class="text-sm md:text-base mb-6 md:mb-10 leading-relaxed text-justify" data-aos="fade-up" data-aos-delay="400">
                        First up, let's venture into the Kanha Core Zone, a realm of open meadows and bamboo forests where Tigress Neelam rules the land. Known affectionately as the Mataram of Kanha Zone, she's joined by her fierce companions Sunaina, Mohini, and Neelima. Keep your camera ready for sightings of the regal Barahsingha and elegant black bucks, adding to the excitement of your safari.
                    </p>
                    <div class="flex gap-3 md:gap-4" data-aos="fade-up" data-aos-delay="500">
                        <a href="https://wildmarkresort.com/know-about-kanha-national-park-in-detail/"
                            class="px-6 md:px-8 py-2.5 md:py-3 transition font-light w-fit text-sm md:text-base inline-block text-center"
                            style="border: 1px solid var(--text2); color: var(--text2);"
                            onmouseover="this.style.backgroundColor='var(--text2)';this.style.color='var(--bg2)';"
                            onmouseout="this.style.backgroundColor='transparent';this.style.color='var(--text2)';">
                            Learn About Kanha
                        </a>
                        <a href="https://wildmarkresort.com/contact/"
                            class="px-6 md:px-8 py-2.5 md:py-3 transition font-light w-fit text-sm md:text-base inline-block text-center text-white"
                            style="background-color: var(--text2);">
                            Safari Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-12 md:py-20 px-4 md:px-6 testimonial-section overflow-hidden" style="background-color: var(--bg2);">
    <div class="w-full max-w-7xl mx-auto">
        <div class="text-center mb-8 md:mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-serif mb-6">Guest Reviews</h2>
            <div class="flex flex-col md:flex-row items-center justify-center gap-3 md:gap-4 mb-4">
                <span class="text-5xl md:text-6xl font-bold" style="color: var(--text2);">4.8</span>
                <div class="text-center md:text-left">
                    <div class="flex text-2xl md:text-3xl mb-1 justify-center md:justify-start" style="color: var(--text2);">★★★★★</div>
                    <p class="text-sm md:text-base" style="color: rgba(0,0,0,0.5);">Based on 156 reviews</p>
                </div>
            </div>
        </div>

        <div class="relative px-8 md:px-12" data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-hidden rounded-lg">
                <div class="testimonial-carousel flex transition-transform duration-500 ease-in-out" id="testimonialCarousel">
                    <!-- Review Card 1 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">D</div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg" style="color: #1a1a1a !important;">Divya Lalwani</h3>
                                    <p class="text-xs md:text-sm" style="color: rgba(0,0,0,0.5);">3 weeks ago</p>
                                </div>
                            </div>
                            <div class="flex text-lg mb-3" style="color: var(--text2);">★★★★★</div>
                            <p class="text-sm md:text-base leading-relaxed flex-grow" style="color: #374151;">Best resort at Kanha near Khatia Gate! The room was very nice and food was also delicious. Staff was very competitive and polite. Highly recommended for families visiting Kanha National Park.</p>
                        </div>
                    </div>
                    <!-- Review Card 2 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">V</div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg" style="color: #1a1a1a !important;">Vivek Kumar</h3>
                                    <p class="text-xs md:text-sm" style="color: rgba(0,0,0,0.5);">1 month ago</p>
                                </div>
                            </div>
                            <div class="flex text-lg mb-3" style="color: var(--text2);">★★★★★</div>
                            <p class="text-sm md:text-base leading-relaxed flex-grow" style="color: #374151;">Wild Mark Resort is perfect for family, couples, solo travelers and business meetings. Excellent stay, amazing food at this price is unbelievable. Room was also very neat and clean.</p>
                        </div>
                    </div>
                    <!-- Review Card 3 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">U</div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg" style="color: #1a1a1a !important;">Utsav Sharma</h3>
                                    <p class="text-xs md:text-sm" style="color: rgba(0,0,0,0.5);">2 months ago</p>
                                </div>
                            </div>
                            <div class="flex text-lg mb-3" style="color: var(--text2);">★★★★★</div>
                            <p class="text-sm md:text-base leading-relaxed flex-grow" style="color: #374151;">Great property. Should be visited if anyone is planning to visit Kanha National Park. Big lawn, great service, everything was nice. The proximity to the park is unbeatable!</p>
                        </div>
                    </div>
                    <!-- Review Card 4 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">S</div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg" style="color: #1a1a1a !important;">Sneha Patel</h3>
                                    <p class="text-xs md:text-sm" style="color: rgba(0,0,0,0.5);">2 months ago</p>
                                </div>
                            </div>
                            <div class="flex text-lg mb-3" style="color: var(--text2);">★★★★★</div>
                            <p class="text-sm md:text-base leading-relaxed flex-grow" style="color: #374151;">Absolutely wonderful experience! The staff went above and beyond to make our honeymoon special. The private sit-out in our room was perfect for morning coffee.</p>
                        </div>
                    </div>
                    <!-- Review Card 5 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-red-400 to-rose-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">R</div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg" style="color: #1a1a1a !important;">Rajesh Mehta</h3>
                                    <p class="text-xs md:text-sm" style="color: rgba(0,0,0,0.5);">3 months ago</p>
                                </div>
                            </div>
                            <div class="flex text-lg mb-3" style="color: var(--text2);">★★★★★</div>
                            <p class="text-sm md:text-base leading-relaxed flex-grow" style="color: #374151;">The resort exceeded all expectations! Clean rooms, delicious food, and the swimming pool was a great way to relax after safari. Pet-friendly policy was a bonus!</p>
                        </div>
                    </div>
                    <!-- Review Card 6 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">A</div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg" style="color: #1a1a1a !important;">Ananya Singh</h3>
                                    <p class="text-xs md:text-sm" style="color: rgba(0,0,0,0.5);">4 months ago</p>
                                </div>
                            </div>
                            <div class="flex text-lg mb-3" style="color: var(--text2);">★★★★★</div>
                            <p class="text-sm md:text-base leading-relaxed flex-grow" style="color: #374151;">Perfect location for Kanha safari! Walking distance to the park entrance. The colonial architecture is beautiful and the gardens are well maintained. Food quality is exceptional!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full shadow-2xl flex items-center justify-center transition-all duration-300 hover:scale-110 z-20"
                style="background-color: var(--bg2); color: var(--text2);"
                onclick="prevTestimonial()" aria-label="Previous reviews">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full shadow-2xl flex items-center justify-center transition-all duration-300 hover:scale-110 z-20"
                style="background-color: var(--bg2); color: var(--text2);"
                onclick="nextTestimonial()" aria-label="Next reviews">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Dots -->
        <div class="flex justify-center mt-8 md:mt-10 gap-2.5" id="testimonialDots">
            <button class="testimonial-nav-dot w-3 h-3 rounded-full transition-all duration-300 hover:scale-125"
                style="background-color: var(--text2);" onclick="goToTestimonialSet(0)"></button>
            <button class="testimonial-nav-dot w-3 h-3 rounded-full transition-all duration-300 hover:scale-125"
                style="background-color: rgba(142,22,22,0.3);" onclick="goToTestimonialSet(1)"></button>
            <button class="testimonial-nav-dot w-3 h-3 rounded-full transition-all duration-300 hover:scale-125"
                style="background-color: rgba(142,22,22,0.3);" onclick="goToTestimonialSet(2)"></button>
            <button class="testimonial-nav-dot w-3 h-3 rounded-full transition-all duration-300 hover:scale-125"
                style="background-color: rgba(142,22,22,0.3);" onclick="goToTestimonialSet(3)"></button>
        </div>
    </div>
</section>

<!-- Tour Package Section -->
<section id="destinations" class="py-12 md:py-20 px-4 md:px-6 destinations-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
                BIODIVERSITY • CONSERVATION • NATURE
            </p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Popular Tour Package
            </h2>
            <p class="text-sm md:text-base max-w-5xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Choose from our curated safari packages designed to give you the ultimate Kanha wildlife experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="https://wildmarkresort.com/images/card1.webp" alt="Kanha Holiday Tour Package" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>
                    <div class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-bold tracking-wider text-white" style="background-color: var(--text2);">Popular</div>
                    <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star" style="color: var(--text2);"></i><span>5</span>
                    </div>
                </div>
                <div class="p-5 rounded-b-2xl h-auto flex flex-col" style="background-color: var(--bg2);">
                    <h3 class="text-lg font-serif font-bold mb-3 leading-tight">Kanha Tour Package</h3>
                    <div class="flex items-center gap-3 mb-3 text-xs" style="color: rgba(0,0,0,0.5);">
                        <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt" style="color: var(--text2);"></i><span>Kanha</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-clock" style="color: var(--text2);"></i><span>1N/2D</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-binoculars" style="color: var(--text2);"></i><span>1 Safari</span></div>
                    </div>
                    <p class="text-xs leading-relaxed flex-grow mb-4" style="color: rgba(0,0,0,0.5);">Experience the thrill of nature with our Kanha Holiday Tour Package, offering 1 Night / 2 Days stay and 1 exciting jungle safaris</p>
                    <a href="https://wildmarkresort.com/kanha-tour-package/" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors group/btn mt-auto" style="color: var(--text1);"
                        onmouseover="this.style.color='var(--text2)';" onmouseout="this.style.color='var(--text1)';">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Kanha Safari Tour Package" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>
                    <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star" style="color: var(--text2);"></i><span>5</span>
                    </div>
                </div>
                <div class="p-5 rounded-b-2xl h-auto flex flex-col" style="background-color: var(--bg2);">
                    <h3 class="text-lg font-serif font-bold mb-3 leading-tight">Kanha Safari Tour Package</h3>
                    <div class="flex items-center gap-3 mb-3 text-xs" style="color: rgba(0,0,0,0.5);">
                        <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt" style="color: var(--text2);"></i><span>Kanha</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-clock" style="color: var(--text2);"></i><span>2N/3D</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-binoculars" style="color: var(--text2);"></i><span>2 Safaris</span></div>
                    </div>
                    <p class="text-xs leading-relaxed flex-grow mb-4" style="color: rgba(0,0,0,0.5);">Discover the beauty of Kanha with 2 Nights / 3 Days of adventure, including 2 exciting jungle safaris perfect for nature lovers.</p>
                    <a href="https://wildmarkresort.com/kanha-safari-tour-package/" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors group/btn mt-auto" style="color: var(--text1);"
                        onmouseover="this.style.color='var(--text2)';" onmouseout="this.style.color='var(--text1)';">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="https://wildmarkresort.com/images/Tiger5.webp" alt="Kanha Kisli Tour Package" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>
                    <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star"style="color: var(--text2);"></i><span>5</span>
                    </div>
                </div>
                <div class="p-5 rounded-b-2xl h-auto flex flex-col" style="background-color: var(--bg2);">
                    <h3 class="text-lg font-serif font-bold mb-3 leading-tight">Kanha Kisli Tour Package</h3>
                    <div class="flex items-center gap-3 mb-3 text-xs" style="color: rgba(0,0,0,0.5);">
                        <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt" style="color: var(--text2);"></i><span>Kanha</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-clock" style="color: var(--text2);"></i><span>2N/3D</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-binoculars" style="color: var(--text2);"></i><span>4 Safaris</span></div>
                    </div>
                    <p class="text-xs leading-relaxed flex-grow mb-4" style="color: rgba(0,0,0,0.5);">This 2 Nights / 3 Days package includes 4 exciting jungle safaris, giving you a chance to see amazing wildlife and enjoy the...</p>
                    <a href="https://wildmarkresort.com/kanha-kisli-tour-package/" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors group/btn mt-auto" style="color: var(--text1);"
                        onmouseover="this.style.color='var(--text2)';" onmouseout="this.style.color='var(--text1)';">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="https://wildmarkresort.com/images/home4.webp" alt="Kanha Tiger Safari Package" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>
                    <div class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-bold tracking-wider text-white" style="background-color: var(--text2);">Popular</div>
                    <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star" style="color: var(--text2);"></i><span>5</span>
                    </div>
                </div>
                <div class="p-5 rounded-b-2xl h-auto flex flex-col" style="background-color: var(--bg2);">
                    <h3 class="text-lg font-serif font-bold mb-3 leading-tight">Kanha Tiger Safari Package</h3>
                    <div class="flex items-center gap-3 mb-3 text-xs" style="color: rgba(0,0,0,0.5);">
                        <div class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt" style="color: var(--text2);"></i><span>Kanha</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-clock" style="color: var(--text2);"></i><span>3N/4D</span></div>
                        <div class="flex items-center gap-1.5"><i class="fas fa-binoculars" style="color: var(--text2);"></i><span>6 Safaris</span></div>
                    </div>
                    <p class="text-xs leading-relaxed flex-grow mb-4" style="color: rgba(0,0,0,0.5);">Experience the thrill with 3 Nights / 4 Days package including 6 exciting jungle safaris to explore Kanha National Park and spot...</p>
                    <a href="https://wildmarkresort.com/kanha-tiger-safari-tour-package/" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors group/btn mt-auto" style="color: var(--text1);"
                        onmouseover="this.style.color='var(--text2)';" onmouseout="this.style.color='var(--text1)';">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location & Contact Section -->
<section class="location-contact-section px-0 md:px-12 lg:px-12 overflow-hidden" style="background-color: var(--bg1);">
    <div class="grid lg:grid-cols-2">
        <div class="relative h-[400px] md:h-[600px] lg:h-auto order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.997060104769!2d80.50924557424511!3d22.31595094232998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1764241282013!5m2!1sen!2sin"
                width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
        </div>
        <div class="flex items-center px-4 md:px-4 lg:px-12 py-12 md:py-12 order-1 lg:order-2"
            style="background-color: #c9a96e;"
            data-aos="fade-left" data-aos-duration="1000">
            <div class="max-w-xl w-full">
                <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);">RESERVATIONS & INQUIRIES</p>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6 md:mb-8 leading-tight">Contact Us</h2>

                <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start gap-3 md:gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center" style="background-color: rgba(142,22,22,0.15);">
                                <svg class="w-5 h-5 md:w-6 md:h-6" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-base md:text-lg mb-2">Phone / WhatsApp</h3>
                            <p class="text-lg md:text-xl font-bold mb-1" style="color: var(--text2);">+91 8830996719</p>
                            <a href="tel:+918830996719" class="inline-block text-xs md:text-sm transition" style="color: var(--text2);">Click to Call →</a>
                        </div>
                    </div>
                </div>

                <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start gap-3 md:gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center" style="background-color: rgba(142,22,22,0.15);">
                                <svg class="w-5 h-5 md:w-6 md:h-6" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-base md:text-lg mb-2">Email Address</h3>
                            <p class="text-sm md:text-base font-semibold mb-1" style="color: var(--text2);">wildmarkresort@gmail.com</p>
                            <a href="mailto:wildmarkresort@gmail.com" class="inline-block text-xs md:text-sm transition mt-2" style="color: var(--text2);">Send Email →</a>
                        </div>
                    </div>
                </div>

                <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-start gap-3 md:gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center" style="background-color: rgba(142,22,22,0.15);">
                                <svg class="w-5 h-5 md:w-6 md:h-6" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-base md:text-lg mb-2">Resort Address</h3>
                            <p class="text-sm md:text-base leading-relaxed" style="color: var(--text2);">Kanha Tiger Reserve, Near Maratha Restaurant, Mocha, Madhya Pradesh 481768</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2 md:pt-4" data-aos="fade-up" data-aos-delay="700">
                    <a href="https://wildmarkresort.com/contact/"
                        class="inline-flex items-center gap-2 text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg transition group shadow-lg text-sm md:text-base"
                        style="background: linear-gradient(to right, var(--text2), #b01e1e);">
                        <svg class="w-4 h-4 md:w-5 md:h-5 group-hover:scale-110 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-bold tracking-wider">BOOK NOW</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="py-12 md:py-20 px-4 md:px-6 awards-section overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
                EXCELLENCE • RECOGNITION • TRUST
            </p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Awards and Recognitions
            </h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-20 px-4 md:px-6" style="background-color: var(--bg2);">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">
        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" style="color: var(--text2);" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">
            <!-- LEFT COLUMN -->
            <div class="faq-col">
                <?php
                $faqs_left = [
                    ["Where is Wildmark Resort located near Khatiya Gate in Kanha?", "Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris."],
                    ["Why is Khatiya Gate preferred for Kanha resort booking?", "Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate."],
                    ["How far is Wildmark Resort from Khatiya Safari Gate?", "Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning & evening safaris."],
                    ["Is Wildmark Resort suitable for Kanha jungle safari bookings?", "Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services."],
                    ["Can I book Kanha safari along with Wildmark Resort stay?", "Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together."],
                    ["What types of rooms are available at Wildmark Resort Kanha?", "Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly & has provisions for differently & specially abled guests with wheel chair access inside the resort premises."],
                    ["Are meals included in Kanha resort booking at Wildmark Resort?", "Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan."],
                    ["What is the best time to book a resort near Khatiya Gate Kanha?", "The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available."],
                    ["Is advance booking required for Kanha resorts near Khatiya Gate?", "Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season."],
                    ["Is Wildmark Resort open during the monsoon season?", "The resort remains open, and Buffer safaris are available during monsoon season."],
                ];
                foreach ($faqs_left as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden" style="background-color: var(--bg2); border-color: rgba(142,22,22,0.25);">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition" style="color: var(--text1);"
                        onmouseover="this.style.backgroundColor='rgba(232,201,153,0.5)';" onmouseout="this.style.backgroundColor='transparent';">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.2);">
                            <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="faq-col">
                <?php
                $faqs_right = [
                    ["Is Wildmark Resort family friendly?", "Yes, Wildmark Resort is family & pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently & specially abled guests."],
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
                <div class="faq-item border rounded-xl overflow-hidden" style="background-color: var(--bg2); border-color: rgba(142,22,22,0.25);">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition" style="color: var(--text1);"
                        onmouseover="this.style.backgroundColor='rgba(232,201,153,0.5)';" onmouseout="this.style.backgroundColor='transparent';">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color: var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.2);">
                            <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>





<script>
// ============================================================
// SINGLE CLEAN SCRIPT
// ============================================================

// ===== SAFARI IMAGE CAROUSEL =====
var mainSlide = 0;
var mainTotal = 3;

function updateCarousel() {
    var el = document.getElementById('carousel');
    var dots = document.querySelectorAll('.carousel-dot');
    if (!el) return;
    el.style.transform = 'translateX(-' + (mainSlide * 100) + '%)';
    dots.forEach(function(d, i) { d.classList.toggle('active', i === mainSlide); });
}

function nextSlide() { mainSlide = (mainSlide + 1) % mainTotal; updateCarousel(); }
function prevSlide() { mainSlide = (mainSlide - 1 + mainTotal) % mainTotal; updateCarousel(); }
function goToSlide(i) { mainSlide = i; updateCarousel(); }

// ===== TESTIMONIAL CAROUSEL =====
var tSlide = 0;

function getTotalSets() { return window.innerWidth >= 768 ? 2 : 6; }

function updateTestimonialCarousel() {
    var carousel = document.getElementById('testimonialCarousel');
    var dots = document.querySelectorAll('.testimonial-nav-dot');
    if (!carousel) return;
    var container = carousel.parentElement;
    var containerWidth = container ? container.offsetWidth : window.innerWidth;
    var cardsPerView = window.innerWidth >= 768 ? 3 : 1;
    var cardWidth = containerWidth / cardsPerView;
    var offset = tSlide * cardWidth * cardsPerView;
    carousel.style.transform = 'translateX(-' + offset + 'px)';
    dots.forEach(function(dot, i) {
        dot.style.backgroundColor = i === tSlide ? '#8E1616' : 'rgba(142,22,22,0.3)';
    });
}

function nextTestimonial() { tSlide = (tSlide + 1) % getTotalSets(); updateTestimonialCarousel(); }
function prevTestimonial() { tSlide = (tSlide - 1 + getTotalSets()) % getTotalSets(); updateTestimonialCarousel(); }
function goToTestimonialSet(i) { tSlide = i; updateTestimonialCarousel(); }

// ===== HERO CAROUSEL =====
(function() {
    var slides = document.querySelectorAll('.hero-slide');
    var current = 0;
    if (!slides.length) return;
    function show(index) {
        slides.forEach(function(s) { s.classList.remove('active'); var img = s.querySelector('.hero-image'); if (img) img.style.transform = 'scale(1)'; });
        slides[index].classList.add('active');
    }
    setInterval(function() { current = (current + 1) % slides.length; show(current); }, 5000);
})();

// ===== SPECIAL OFFER POPUP =====
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

// ===== FAQ RESIZE =====
function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}

// ===== INIT =====
document.addEventListener('DOMContentLoaded', function() {
    document.body.style.overflowX = 'hidden';
    document.documentElement.style.overflowX = 'hidden';

    updateCarousel();

    var autoplay = setInterval(nextSlide, 5000);
    var carouselEl = document.getElementById('carousel');
    if (carouselEl) {
        carouselEl.addEventListener('mouseenter', function() { clearInterval(autoplay); });
        carouselEl.addEventListener('mouseleave', function() { autoplay = setInterval(nextSlide, 5000); });
        var tx = 0;
        carouselEl.addEventListener('touchstart', function(e) { tx = e.changedTouches[0].screenX; });
        carouselEl.addEventListener('touchend', function(e) {
            var diff = tx - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) { diff > 0 ? nextSlide() : prevSlide(); }
        });
    }

    setTimeout(function() { updateTestimonialCarousel(); setInterval(nextTestimonial, 6000); }, 200);

    window.addEventListener('resize', function() { tSlide = 0; updateTestimonialCarousel(); handleFaqResize(); });

    handleFaqResize();

    // FAQ Accordion
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        var question = item.querySelector('.faq-question');
        var answer = item.querySelector('.faq-answer');
        var icon = item.querySelector('.faq-icon');
        if (!question || !answer) return;
        question.addEventListener('click', function() {
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(function(other) {
                var a = other.querySelector('.faq-answer');
                var ic = other.querySelector('.faq-icon');
                if (a) a.style.maxHeight = '0px';
                if (ic) ic.style.transform = 'rotate(0deg)';
            });
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // Room Tabs
    var roomTabBtns = document.querySelectorAll('#rooms .tab-btn');
    var roomPanels = document.querySelectorAll('#rooms .panel');

    function showRoomTab(tabName) {
        roomTabBtns.forEach(function(btn) { btn.classList.toggle('active', btn.getAttribute('data-tab') === tabName); });
        roomPanels.forEach(function(panel) { panel.classList.toggle('hidden', panel.getAttribute('data-tab') !== tabName); });
    }

    roomTabBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) { e.preventDefault(); showRoomTab(this.getAttribute('data-tab')); });
    });

    if (roomTabBtns.length > 0) showRoomTab(roomTabBtns[0].getAttribute('data-tab'));

    // Video mute toggle
    var vid = document.getElementById('conservationVideo');
    var muteBtn = document.getElementById('muteToggle');
    var muteIc = document.getElementById('muteIcon');
    var soundIc = document.getElementById('soundIcon');
    if (vid) { vid.muted = true; vid.play().catch(function(){}); }
    if (muteBtn && vid) {
        muteBtn.addEventListener('click', function() {
            vid.muted = !vid.muted;
            if (!vid.muted) { vid.removeAttribute('muted'); vid.volume = 1.0; vid.play().catch(function(){}); }
            if (muteIc) muteIc.classList.toggle('hidden', !vid.muted);
            if (soundIc) soundIc.classList.toggle('hidden', vid.muted);
        });
    }

    // Escape key for popup
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            var popup = document.getElementById('specialOfferPopup');
            if (popup && !popup.classList.contains('hidden')) toggleSpecialOfferPopup();
        }
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var href = this.getAttribute('href');
            if (href !== '#' && href !== '#book' && href !== '#contact') {
                e.preventDefault();
                var target = document.querySelector(href);
                if (target) {
                    var nav = document.querySelector('nav');
                    var navH = nav ? nav.offsetHeight : 100;
                    window.scrollTo({ top: target.offsetTop - navH, behavior: 'smooth' });
                }
            }
        });
    });
});
</script>

<?php 
include 'includes/footer.php'; 
?>