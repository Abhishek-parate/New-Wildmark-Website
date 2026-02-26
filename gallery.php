<?php 
// Set page-specific title
$pageTitle = "Gallery - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
/* ===================================================
   ROOT COLOR VARIABLES — same as Kanha Kisli page
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

@keyframes fadeIn {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@keyframes zoomIn {
    from { transform: scale(0.8); opacity: 0; }
    to   { transform: scale(1);   opacity: 1; }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0);    }
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* ===================================================
   RESPONSIVE CONTAINER
   =================================================== */
.container {
    width: 100%;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem;
}
@media (min-width: 640px)  { .container { max-width: 640px;  } }
@media (min-width: 768px)  { .container { max-width: 768px;  } }
@media (min-width: 1024px) { .container { max-width: 1024px; } }
@media (min-width: 1280px) { .container { max-width: 1200px; } }

/* ===================================================
   GALLERY FILTER BUTTONS
   =================================================== */
.filter-btn {
    position: relative;
    transition: all 0.3s ease;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 0.05em;
    overflow: hidden;
    background-color: #fff;
    color: var(--text1);
    border: 2px solid rgba(142, 22, 22, 0.2);
}

.filter-btn::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    
    background: linear-gradient(90deg, transparent, rgba(142, 22, 22, 0.1), transparent);
    transition: left 0.5s;
}
.filter-btn:hover::before { left: 100%; }

.filter-btn.active {
    background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%);
    color: #fff;
    border-color: transparent;
    box-shadow: 0 8px 20px rgba(142, 22, 22, 0.35);
    transform: translateY(-2px);
}
.filter-btn:hover:not(.active) {
    border-color: var(--text2);
    color: var(--text2);
}

/* ===================================================
   EQUAL-SIZED GALLERY GRID
   =================================================== */
.gallery-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}
@media (min-width: 640px)  { .gallery-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .gallery-grid { grid-template-columns: repeat(3, 1fr); } }
@media (min-width: 1536px) { .gallery-grid { grid-template-columns: repeat(4, 1fr); } }

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    height: 300px;
    width: 100%;
    border: 2px solid rgba(142, 22, 22, 0.1);
}
.gallery-item:hover {
    transform: scale(1.02);
    box-shadow: 0 20px 40px rgba(142, 22, 22, 0.25);
    border-color: rgba(142, 22, 22, 0.4);
}
.gallery-item img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    border-radius: 1rem;
}
.gallery-item:hover img {
    transform: scale(1.1);
    filter: brightness(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: linear-gradient(to top, rgba(142, 22, 22, 0.85) 0%, transparent 55%);
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 1.5rem;
    border-radius: 1rem;
}
.gallery-item:hover .gallery-overlay { opacity: 1; }

.gallery-title {
    color: #fff;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}
.gallery-category {
    color: var(--bg1);
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    transform: translateY(20px);
    transition: transform 0.4s ease 0.1s;
}
.gallery-item:hover .gallery-title,
.gallery-item:hover .gallery-category { transform: translateY(0); }

/* ===================================================
   LIGHTBOX MODAL
   =================================================== */
.lightbox {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.95);
    backdrop-filter: blur(10px);
    align-items: center;
    justify-content: center;
    animation: fadeIn 0.3s ease;
}
.lightbox.active { display: flex; }

.lightbox-content {
    max-width: 90%; max-height: 90%;
    position: relative;
    animation: zoomIn 0.3s ease;
}
.lightbox-content img {
    max-width: 100%; max-height: 90vh;
    border-radius: 0.5rem;
    box-shadow: 0 25px 50px rgba(0,0,0,0.5);
}

.lightbox-close {
    position: absolute;
    top: -50px; right: 0;
    background: rgba(142, 22, 22, 0.9);
    color: #fff;
    border: none;
    width: 40px; height: 40px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lightbox-close:hover {
    background: #6b1010;
    transform: rotate(90deg);
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(142, 22, 22, 0.9);
    color: #fff;
    border: none;
    width: 50px; height: 50px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lightbox-nav:hover {
    background: #6b1010;
    transform: translateY(-50%) scale(1.1);
}
.lightbox-prev { left: 20px; }
.lightbox-next { right: 20px; }

/* ===================================================
   CATEGORY ICON
   =================================================== */
.category-icon {
    width: 60px; height: 60px;
    background: linear-gradient(135deg, var(--bg1) 0%, #d4a853 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    box-shadow: 0 8px 20px rgba(142, 22, 22, 0.25);
    transition: all 0.3s ease;
}
.category-icon i { font-size: 1.75rem; color: var(--text2); }
.category-card:hover .category-icon { transform: scale(1.1) rotate(5deg); }

/* ===================================================
   FADE IN
   =================================================== */
.fade-in { animation: fadeInUp 0.6s ease forwards; }

/* ===================================================
   FAQ Grid
   =================================================== */
.faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
}
.faq-col { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
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

/* Gallery filter section */
section.py-12.md\:py-16.bg-\[\#F8EEDF\] { background-color: var(--bg2) !important; }

/* Headings */
h1, h2, h3, h4 { color: var(--text2) !important; }
.text-amber-100 { color: var(--text2) !important; }

/* Body text */
.text-gray-300 { color: var(--text1) !important; }
p { color: var(--text1); }

/* Amber accents → red */
.text-amber-500, .text-amber-400 { color: var(--text2) !important; }
.text-gray-400 { color: rgba(0, 0, 0, 0.55) !important; }

/* Borders */
.border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
.border-neutral-700 { border-color: rgba(142, 22, 22, 0.2)  !important; }

/* ── CTA Section (bg-neutral-900) ── */
#ctaSection { background-color: var(--bg1) !important; }
#ctaSection h2 { color: var(--text2) !important; }
#ctaSection p  { color: rgba(0,0,0,0.7) !important; }

/* Book Your Stay button */
.bg-amber-600        { background-color: var(--text2) !important; color: #fff !important; }
.hover\:bg-amber-700:hover { background-color: #6b1010 !important; }

/* Back to Home button */
#ctaSection a.border-2 {
    border-color: var(--text2) !important;
    color: var(--text2) !important;
}
#ctaSection a.border-2:hover {
    background-color: var(--text2) !important;
    color: #fff !important;
}

/* ── Awards Section ── */
.awards-section { background-color: var(--bg2) !important; }
.award-card > div { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.award-card:hover > div {
    transform: translateY(-6px) !important;
    box-shadow: 0 12px 30px rgba(142, 22, 22, 0.2) !important;
}

/* ── FAQ Cards ── */
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
.faq-icon { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* FAQ section bg */
section.py-12.md\:py-20.px-4.md\:px-6.bg-neutral-900 { background-color: var(--bg2) !important; }

/* ── Special Offer floating button ── */
#specialOfferBtn {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
#specialOfferBtn:hover { background: linear-gradient(to right, #6b1010, var(--text2)) !important; }
#specialOfferBtn .bg-red-500 { background-color: var(--bg1) !important; color: var(--text2) !important; }

/* ── Special Offer Popup ── */
#specialOfferPopup .bg-neutral-900 {
    background-color: var(--bg2) !important;
    border-color: var(--text2) !important;
}
#specialOfferPopup .bg-gradient-to-r {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
#specialOfferPopup .bg-black { background-color: var(--bg1) !important; }
#specialOfferPopup .border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup .hover\:border-amber-500:hover { border-color: var(--text2) !important; }
#specialOfferPopup h4.text-white { color: var(--text1) !important; }
#specialOfferPopup .text-amber-500 { color: var(--text2) !important; }
#specialOfferPopup .text-gray-300 { color: var(--text1) !important; opacity: 0.85; }
#specialOfferPopup .text-gray-400.line-through { color: rgba(0,0,0,0.4) !important; }
#specialOfferPopup .text-gray-400 { color: rgba(0,0,0,0.5) !important; }
#specialOfferPopup .text-amber-100 { color: var(--bg1) !important; }
#specialOfferPopup .bg-amber-500\/10 { background-color: rgba(232, 201, 153, 0.3) !important; }
#specialOfferPopup .border-t.border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup .text-2xl.font-bold.text-amber-500 { color: var(--text2) !important; }
#specialOfferPopup button.text-white { color: var(--text1) !important; }
#specialOfferPopup button.hover\:text-amber-500:hover { color: var(--text2) !important; }

/* Popup Book Now button */
.bg-amber-500.hover\:bg-amber-600       { background-color: var(--text2) !important; color: var(--bg2) !important; }
.bg-amber-500.hover\:bg-amber-600:hover { background-color: #6b1010 !important; }

/* Offer badges */
.bg-green-500 { background-color: #2a6e3f !important; }
.bg-blue-500  { background-color: #1a4a7a !important; }
.text-green-500 { color: #2a6e3f !important; }
.text-blue-500  { color: #1a4a7a !important; }

/* Scroll popup */
#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }
</style>

<!-- Hero Banner -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[80vh] flex items-end"
    style="background: url('https://wildmarkresort.com/images/Tiger.webp') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>

<!-- Gallery Filter Section -->
<section class="py-12 md:py-16 bg-[#F8EEDF]">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">

        <!-- Section Header -->
        <div class="text-center mb-10 md:mb-12">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
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
            <button class="filter-btn" data-filter="wildlife">
                <i class="fas fa-paw mr-2"></i>Wildlife
            </button>
            <button class="filter-btn" data-filter="resort">
                <i class="fas fa-hotel mr-2"></i>Resort
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="galleryGrid">

            <!-- Wildlife -->
            <div class="gallery-item fade-in" data-category="wildlife" data-index="0">
                <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Bengal Tiger in Kanha" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Bengal Tiger</div>
                    <div class="gallery-category">Wildlife</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="wildlife" data-index="1">
                <img src="https://wildmarkresort.com/images/Tiger5.webp" alt="Tiger Sighting" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Majestic Tiger</div>
                    <div class="gallery-category">Wildlife</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="wildlife" data-index="2">
                <img src="https://wildmarkresort.com/images/small_tiger.webp" alt="Wildlife Safari" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Wildlife Safari</div>
                    <div class="gallery-category">Wildlife</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="rooms" data-index="3">
                <img src="https://wildmarkresort.com/images/deer.webp" alt="Premium Room" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Premium Suite</div>
                    <div class="gallery-category">Rooms</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="rooms" data-index="4">
                <img src="https://wildmarkresort.com/images/dear1.webp" alt="Premium Room" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Premium Suite</div>
                    <div class="gallery-category">Rooms</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="rooms" data-index="5">
                <img src="https://wildmarkresort.com/images/Tiger3.webp" alt="Premium Room" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Premium Suite</div>
                    <div class="gallery-category">Rooms</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="rooms" data-index="6">
                <img src="https://wildmarkresort.com/images/Tiger4.webp" alt="Premium Room" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Premium Suite</div>
                    <div class="gallery-category">Rooms</div>
                </div>
            </div>

            <!-- Resort -->
            <div class="gallery-item fade-in" data-category="resort" data-index="7">
                <img src="https://wildmarkresort.com/images/wildmark1.JPG" alt="Resort Exterior" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Resort Entrance</div>
                    <div class="gallery-category">Resort</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="resort" data-index="8">
                <img src="https://wildmarkresort.com/images/wildmark2.jpg" alt="Resort Aerial View" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Aerial View</div>
                    <div class="gallery-category">Resort</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="resort" data-index="9">
                <img src="https://wildmarkresort.com/images/wildmark6.jpg" alt="Resort View" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Resort View</div>
                    <div class="gallery-category">Resort</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="resort" data-index="10">
                <img src="https://wildmarkresort.com/images/wildmark7.JPG" alt="Resort View" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Resort View</div>
                    <div class="gallery-category">Resort</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="resort" data-index="11">
                <img src="https://wildmarkresort.com/images/home7.webp" alt="Resort View" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Resort View</div>
                    <div class="gallery-category">Resort</div>
                </div>
            </div>

            <div class="gallery-item fade-in" data-category="rooms" data-index="12">
                <img src="https://wildmarkresort.com/images/wildmark9.jpg" alt="Super Deluxe Room" loading="lazy" />
                <div class="gallery-overlay">
                    <div class="gallery-title">Super Deluxe Room</div>
                    <div class="gallery-category">Rooms</div>
                </div>
            </div>

        </div>
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
<section id="ctaSection" class="py-16 md:py-20 bg-black">
    <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
        <div class="category-icon" data-aos="zoom-in">
            <i class="fas fa-camera"></i>
        </div>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6" data-aos="fade-up">
            Create Your Own Memories
        </h2>
        <p class="text-base md:text-lg mb-8 leading-relaxed max-w-2xl mx-auto" style="color: rgba(0,0,0,0.7);" data-aos="fade-up" data-aos-delay="200">
            Every photograph tells a story. Come experience the magic of Kanha and create your own unforgettable moments
            at Wildmark Resort.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="https://wildmarkresort.com/contact/"
                class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg transition font-semibold text-base shadow-lg">
                <i class="fas fa-calendar-check mr-2"></i>BOOK YOUR STAY
            </a>
            <a href="https://wildmarkresort.com/index/"
                class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-3 rounded-lg transition font-semibold text-base">
                <i class="fas fa-home mr-2"></i>BACK TO HOME
            </a>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="py-12 md:py-20 px-4 md:px-6 awards-section overflow-hidden" style="background-color: var(--bg2);">
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
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
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
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Why is Khatiya Gate preferred for Kanha resort booking?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Can I book Kanha safari along with Wildmark Resort stay?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">What types of rooms are available at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Are meals included in Kanha resort booking at Wildmark Resort?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">What is the best time to book a resort near Khatiya Gate Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort open during the monsoon season?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">The resort remains open, and Buffer safaris are available during monsoon season.</p>
                        </div>
                    </div>
                </div>
            </div><!-- END LEFT COLUMN -->

            <!-- RIGHT COLUMN -->
            <div class="faq-col">
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort family friendly?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Does Wildmark Resort provide pickup and drop services?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Are group bookings allowed at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Does Wildmark Resort offer forest or jungle view rooms?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort safe for solo travelers?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">What documents are required at check-in for Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Guests must carry a valid government issued photo ID at the time of check in.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Does Wildmark Resort offer activities besides jungle safari?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed">Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.</p>
                        </div>
                    </div>
                </div>
            </div><!-- END RIGHT COLUMN -->

        </div><!-- END FAQ GRID -->
    </div>
</section>

<!-- Scripts -->
<script>
// Gallery Filter
const filterBtns = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');

        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        galleryItems.forEach(item => {
            const category = item.getAttribute('data-category');
            if (filter === 'all' || category === filter) {
                item.style.display = 'block';
                setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.8)';
                setTimeout(() => { item.style.display = 'none'; }, 300);
            }
        });
    });
});

// Lightbox
const lightbox      = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightboxImage');
const lightboxClose = document.getElementById('lightboxClose');
const lightboxPrev  = document.getElementById('lightboxPrev');
const lightboxNext  = document.getElementById('lightboxNext');
let currentImageIndex = 0;
let visibleImages = [];

function updateVisibleImages() {
    visibleImages = Array.from(document.querySelectorAll('.gallery-item'))
        .filter(item => item.style.display !== 'none')
        .map(item => ({ src: item.querySelector('img').src, alt: item.querySelector('img').alt }));
}

galleryItems.forEach(item => {
    item.addEventListener('click', () => {
        updateVisibleImages();
        const imgSrc = item.querySelector('img').src;
        currentImageIndex = visibleImages.findIndex(img => img.src === imgSrc);
        lightboxImage.src = imgSrc;
        lightboxImage.alt = item.querySelector('img').alt;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
});

lightboxClose.addEventListener('click', () => { lightbox.classList.remove('active'); document.body.style.overflow = 'auto'; });
lightbox.addEventListener('click', e => { if (e.target === lightbox) { lightbox.classList.remove('active'); document.body.style.overflow = 'auto'; } });

lightboxPrev.addEventListener('click', e => {
    e.stopPropagation();
    currentImageIndex = (currentImageIndex - 1 + visibleImages.length) % visibleImages.length;
    lightboxImage.src = visibleImages[currentImageIndex].src;
});
lightboxNext.addEventListener('click', e => {
    e.stopPropagation();
    currentImageIndex = (currentImageIndex + 1) % visibleImages.length;
    lightboxImage.src = visibleImages[currentImageIndex].src;
});

document.addEventListener('keydown', e => {
    if (!lightbox.classList.contains('active')) return;
    if (e.key === 'Escape')      { lightbox.classList.remove('active'); document.body.style.overflow = 'auto'; }
    else if (e.key === 'ArrowLeft')  lightboxPrev.click();
    else if (e.key === 'ArrowRight') lightboxNext.click();
});

document.body.style.overflowX = 'hidden';
document.documentElement.style.overflowX = 'hidden';
updateVisibleImages();
</script>

<script>
// FAQ Accordion
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
// Special Offer Popup
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) { popup.classList.remove('hidden'); popup.classList.add('flex'); document.body.style.overflow = 'hidden'; }
    else { popup.classList.add('hidden'); popup.classList.remove('flex'); document.body.style.overflow = ''; }
}
function closeIfClickedOutside(event) { if (event.target.id === 'specialOfferPopup') toggleSpecialOfferPopup(); }
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') { const popup = document.getElementById('specialOfferPopup'); if (!popup.classList.contains('hidden')) toggleSpecialOfferPopup(); }
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