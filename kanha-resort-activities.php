<?php 
// Set page-specific title
$pageTitle = "Resort Activities - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

<style>
/* ===================================================
   ROOT COLOR VARIABLES — Kanha Kisli Theme
   =================================================== */
:root {
    --bg1:   #E8C999;  /* warm golden  */
    --bg2:   #F8EEDF;  /* cream white  */
    --text1: #000000;  /* pure black   */
    --text2: #8E1616;  /* deep red     */
}

/* ===================================================
   GLOBAL OVERFLOW FIX
   =================================================== */
html, body { overflow-x: hidden !important; max-width: 100% !important; }
*, *::before, *::after { box-sizing: border-box; }
section, .container, div { max-width: 100%; }

/* ===================================================
   ANIMATIONS
   =================================================== */
@keyframes slideIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to   { opacity: 1; transform: scale(1) translateY(0); }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }

/* ===================================================
   ACTIVITY CARDS
   =================================================== */
.activity-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    border: 1px solid rgba(142, 22, 22, 0.2);
    width: 100%;
    overflow: hidden;
}

.activity-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(142, 22, 22, 0.2);
    border-color: rgba(142, 22, 22, 0.5);
}

.activity-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    box-shadow: 0 8px 20px rgba(142, 22, 22, 0.3);
    transition: transform 0.3s ease;
    flex-shrink: 0;
}
.activity-card:hover .activity-icon { transform: scale(1.1) rotate(5deg); }
.activity-icon i { font-size: 2rem; color: #fff; }

.activity-card h3 { color: var(--text2) !important; }
.activity-card p  { color: rgba(0,0,0,0.75) !important; }

/* ===================================================
   ACTIVITIES GRID
   =================================================== */
.activities-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    width: 100%;
}
@media (max-width: 1024px) { .activities-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 640px)  { .activities-grid { grid-template-columns: 1fr; } }

/* ===================================================
   INDOOR/OUTDOOR GAMES
   =================================================== */
.games-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    width: 100%;
}
@media (max-width: 768px) { .games-grid { grid-template-columns: 1fr; } }

.games-card {
    background: #fff;
    border: 1px solid rgba(142, 22, 22, 0.25);
    border-radius: 1rem;
    padding: 1.5rem 2rem;
    width: 100%;
    overflow: hidden;
}
.games-card h3 { color: var(--text2) !important; }

.game-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.5rem 0;
    color: var(--text1);
    width: 100%;
}

.game-icon-wrap {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 50%;
    background: rgba(142, 22, 22, 0.1);
    border: 1px solid rgba(142, 22, 22, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
}
.game-icon-wrap i { color: var(--text2) !important; }

/* ===================================================
   MINI LIBRARY
   =================================================== */
.library-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: center;
    width: 100%;
}
@media (max-width: 1024px) { .library-grid { grid-template-columns: 1fr; } }

.library-img-wrap {
    position: relative;
    height: 350px;
    border-radius: 1rem;
    overflow: hidden;
    width: 100%;
}
@media (min-width: 768px) { .library-img-wrap { height: 450px; } }

/* ===================================================
   FAQ GRID
   =================================================== */
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; width: 100%; }
.faq-col  { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
.faq-question { min-height: 64px; height: 64px; }
.faq-question span { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block; font-size: 15px !important; max-width: 100%; }

@media screen and (max-width: 860px) {
    .faq-grid { grid-template-columns: 1fr !important; }
    .faq-question { height: auto !important; min-height: unset !important; }
    .faq-question span { white-space: normal !important; overflow: visible !important; text-overflow: unset !important; font-size: 14px !important; }
}

/* ===================================================
   AWARDS
   =================================================== */
.award-card { transition: transform 0.3s ease; }
.award-card:hover { transform: translateY(-4px); }
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }
@media (max-width: 768px) {
    .award-card > div { min-height: 280px !important; }
    .award-image { max-width: 220px; }
}

/* ===================================================
   GLOBAL SECTION BACKGROUND OVERRIDES
   =================================================== */

/* Activities main section (bg-neutral-900 → cream) */
section.bg-neutral-900 { background-color: var(--bg2) !important; }

/* Indoor/Outdoor games + FAQ (bg-black → golden) */
section.bg-black { background-color: var(--bg1) !important; }

/* Section headings */
h2, h3 { color: var(--text2) !important; }
p { color: var(--text1); }
.text-gray-300 { color: rgba(0,0,0,0.75) !important; }
.text-amber-500, .text-amber-400 { color: var(--text2) !important; }
.text-gray-400 { color: rgba(0,0,0,0.5) !important; }

/* Borders */
.border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
.border-neutral-700 { border-color: rgba(142, 22, 22, 0.2)  !important; }

/* ── Library section book list ── */
.library-content li span { color: var(--text1) !important; }
.library-content i { color: var(--text2) !important; }
.library-content p  { color: rgba(0,0,0,0.75) !important; }
.library-content h2 { color: var(--text2) !important; }

/* Book Your Stay button */
.bg-amber-600, .hover\:bg-amber-700 { background-color: var(--text2) !important; color: #fff !important; }
.bg-amber-600:hover { background-color: #6b1010 !important; }

/* ── FAQ Cards ── */
.faq-item.bg-neutral-900 {
    background-color: var(--bg2) !important;
    border-color: rgba(142, 22, 22, 0.25) !important;
}
.faq-item.bg-neutral-900:hover { border-color: var(--text2) !important; }
.faq-question:hover { background-color: rgba(232, 201, 153, 0.5) !important; }
.faq-answer > div {
    background-color: rgba(232, 201, 153, 0.3) !important;
    border-top-color: rgba(142, 22, 22, 0.2) !important;
}
.faq-icon { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* ── Awards section ── */
.awards-section { background-color: var(--bg2) !important; }
.awards-section h2, .awards-section p { color: var(--text1) !important; }
.awards-section h2 { color: var(--text2) !important; }

/* ── Special Offer Button ── */
#specialOfferBtn {
    background: linear-gradient(to right, var(--text2), #b01e1e) !important;
}
#specialOfferBtn .bg-red-500 { background-color: var(--bg1) !important; color: var(--text2) !important; }

/* ── Special Offer Popup ── */
#specialOfferPopup .bg-neutral-900 {
    background-color: var(--bg2) !important;
    border-color: var(--text2) !important;
}
#specialOfferPopup .bg-gradient-to-r { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
#specialOfferPopup .bg-black { background-color: var(--bg1) !important; }
#specialOfferPopup .border-amber-500\/30 { border-color: rgba(142, 22, 22, 0.3) !important; }
#specialOfferPopup .hover\:border-amber-500:hover { border-color: var(--text2) !important; }
#specialOfferPopup h4.text-white { color: var(--text1) !important; }
#specialOfferPopup h3.text-white { color: #fff !important; }
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
#specialOfferPopup .bg-amber-500 { background-color: var(--text2) !important; color: var(--bg2) !important; }
#specialOfferPopup .bg-amber-500:hover { background-color: #6b1010 !important; }

/* Offer badges */
.bg-green-500 { background-color: #2a6e3f !important; }
.bg-blue-500  { background-color: #1a4a7a !important; }
.text-green-500 { color: #2a6e3f !important; }
.text-blue-500  { color: #1a4a7a !important; }

/* ── Indoor/Outdoor section — force text colors ── */
.games-section h2 { color: var(--text2) !important; }
.games-section .text-amber-500 { color: var(--text2) !important; }
</style>

<!-- HERO -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
    style="background: url('https://wildmarkresort.com/images/Tiger5.webp') center/cover no-repeat; max-width: 100%; overflow: hidden;">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>

<!-- ================================
     MAIN ACTIVITIES SECTION
     ================================ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900" style="overflow: hidden;">
    <div class="container mx-auto max-w-7xl">

        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
                ADVENTURE • CULTURE • RELAXATION
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" >
                Experience Wildmark Resort
            </h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                From nature trails to cultural experiences, we offer a wide range of activities to make your stay memorable
            </p>
        </div>

        <div class="activities-grid">

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  data-aos-delay="100">
                <div class="activity-icon"><i class="fas fa-hiking"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Nature Trails</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Explore the pristine beauty of Kanha's buffer zone with guided nature walks through lush forests and scenic landscapes.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  data-aos-delay="200">
                <div class="activity-icon"><i class="fas fa-binoculars"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Bird Watching</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Witness over 300 species of birds in their natural habitat. Perfect for ornithology enthusiasts and nature photographers.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  >
                <div class="activity-icon"><i class="fas fa-camera"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Photography Classes</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Learn wildlife and landscape photography from experienced naturalists. Capture the essence of Kanha's wilderness.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  data-aos-delay="100">
                <div class="activity-icon"><i class="fas fa-bicycle"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Bi-cycling</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Cycle through village roads and forest paths. Experience the tranquility of rural Madhya Pradesh at your own pace.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  data-aos-delay="200">
                <div class="activity-icon"><i class="fas fa-drum"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Baiga Tribal Dance</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Experience the vibrant culture of Baiga tribe through their traditional dance performances and folk music.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  >
                <div class="activity-icon"><i class="fas fa-home"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Tribal Village Walk</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Visit nearby tribal villages and learn about their unique lifestyle, traditions, and sustainable living practices.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  data-aos-delay="100">
                <div class="activity-icon"><i class="fas fa-shopping-bag"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Market Walk</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Explore local markets and shop for authentic tribal handicrafts, jewelry, and organic forest produce.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  data-aos-delay="200">
                <div class="activity-icon"><i class="fas fa-search"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Python Spot</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Guided visits to python habitats for wildlife enthusiasts. Safe and educational experience with expert naturalists.</p>
            </div>

            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up"  >
                <div class="activity-icon"><i class="fas fa-landmark"></i></div>
                <h3 class="text-xl md:text-2xl font-serif font-bold mb-3 text-center">Ancient Forts</h3>
                <p class="text-sm md:text-base leading-relaxed text-center">Explore historical forts and learn about the rich heritage and architectural marvels of central India.</p>
            </div>

        </div>
    </div>
</section>

<!-- ================================
     INDOOR & OUTDOOR GAMES
     ================================ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black games-section" style="overflow: hidden;">
    <div class="container mx-auto max-w-7xl">

        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
                RECREATION • FUN • LEISURE
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" >
                Indoor &amp; Outdoor Games
            </h2>
        </div>

        <div class="games-grid">

            <div class="games-card" data-aos="fade-right" >
                <h3 class="text-2xl md:text-3xl font-serif font-bold mb-6 text-center">Indoor Games</h3>
                <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:1rem;">
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-circle-dot text-lg"></i></span>
                        <span class="text-base">Carrom Board</span>
                    </li>
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-chess text-lg"></i></span>
                        <span class="text-base">Chess &amp; Board Games</span>
                    </li>
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-heart text-lg"></i></span>
                        <span class="text-base">Playing Cards</span>
                    </li>
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-table-tennis-paddle-ball text-lg"></i></span>
                        <span class="text-base">Table Tennis</span>
                    </li>
                </ul>
            </div>

            <div class="games-card" data-aos="fade-left" >
                <h3 class="text-2xl md:text-3xl font-serif font-bold mb-6 text-center">Outdoor Games</h3>
                <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:1rem;">
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-shuttle-space text-lg"></i></span>
                        <span class="text-base">Badminton</span>
                    </li>
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-volleyball text-lg"></i></span>
                        <span class="text-base">Volleyball</span>
                    </li>
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-baseball-bat-ball text-lg"></i></span>
                        <span class="text-base">Cricket</span>
                    </li>
                    <li class="game-item">
                        <span class="game-icon-wrap"><i class="fas fa-person-running text-lg"></i></span>
                        <span class="text-base">Outdoor Games Area</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ================================
     MINI LIBRARY
     ================================ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900" style="overflow: hidden;">
    <div class="container mx-auto max-w-6xl">
        <div class="library-grid">

            <div class="library-img-wrap" data-aos="fade-right" >
                <img src="https://wildmarkresort.com/images/room5.png" alt="Mini Library" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>

            <div class="library-content" data-aos="fade-left" >
                <p class="text-xs tracking-widest mb-4 font-light uppercase" style="color: var(--text2);">
                    READ • RELAX • REJUVENATE
                </p>
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">
                    Mini Library
                </h2>
                <p class="text-sm md:text-base leading-relaxed mb-6">
                    Unwind with a good book in our cozy mini library. We have a curated collection of books on wildlife, nature, local history, and fiction to enhance your stay experience.
                </p>
                <ul style="list-style:none; padding:0; margin:0 0 1.5rem 0; display:flex; flex-direction:column; gap:0.75rem;">
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book" style="color: var(--text2);"></i>
                        <span>Wildlife &amp; Nature Books</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book" style="color: var(--text2);"></i>
                        <span>Local History &amp; Culture</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book" style="color: var(--text2);"></i>
                        <span>Fiction &amp; Bestsellers</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book" style="color: var(--text2);"></i>
                        <span>Comfortable Reading Area</span>
                    </li>
                </ul>
                <a href="https://wildmarkresort.com/contact/"
                   style="display:inline-block; background-color: var(--text2); color: #fff; padding: 0.75rem 2rem; border-radius: 0.5rem; font-weight: 600; transition: background 0.3s;"
                   onmouseover="this.style.backgroundColor='#6b1010'"
                   onmouseout="this.style.backgroundColor='var(--text2)'">
                    Book Your Stay
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ================================
     FAQs SECTION
     ================================ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black" style="overflow: hidden;">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" style="color: var(--text2);" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" >

            <!-- LEFT COLUMN -->
            <div class="faq-col">

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Why is Khatiya Gate preferred for Kanha resort booking?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Can I book Kanha safari along with Wildmark Resort stay?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">What types of rooms are available at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Are meals included in Kanha resort booking at Wildmark Resort?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">What is the best time to book a resort near Khatiya Gate Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort open during the monsoon season?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">The resort remains open, and Buffer safaris are available during monsoon season.</p></div>
                    </div>
                </div>

            </div><!-- END LEFT COLUMN -->

            <!-- RIGHT COLUMN -->
            <div class="faq-col">

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort family friendly?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Does Wildmark Resort provide pickup and drop services?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Are group bookings allowed at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Does Wildmark Resort offer forest or jungle view rooms?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Is Wildmark Resort safe for solo travelers?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">What documents are required at check-in for Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Guests must carry a valid government issued photo ID at the time of check in.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">Does Wildmark Resort offer activities besides jungle safari?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.</p></div>
                    </div>
                </div>

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t"><p class="text-sm md:text-base leading-relaxed">Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.</p></div>
                    </div>
                </div>

            </div><!-- END RIGHT COLUMN -->

        </div>
    </div>
</section>

<!-- ================================
     AWARDS
     ================================ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900 awards-section" style="overflow: hidden;">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">EXCELLENCE • RECOGNITION • TRUST</p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" >Awards and Recognitions</h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]" style="box-shadow: 0 4px 24px rgba(142,22,22,0.08);">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  >
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"   style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>
        </div>
    </div>
</section>



<script>
// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer   = item.querySelector('.faq-answer');
        const icon     = item.querySelector('.faq-icon');
        question.addEventListener('click', () => {
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(other => {
                other.querySelector('.faq-answer').style.maxHeight = '0px';
                other.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            });
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});

function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}
window.addEventListener('load', handleFaqResize);
window.addEventListener('resize', handleFaqResize);

// Special Offer Popup
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) {
        popup.classList.remove('hidden'); popup.classList.add('flex');
        document.body.style.overflow = 'hidden';
    } else {
        popup.classList.add('hidden'); popup.classList.remove('flex');
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

<?php include 'includes/footer.php'; ?>