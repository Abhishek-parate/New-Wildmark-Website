<?php 
// Set page-specific title
$pageTitle = "About Us - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

<style>

/* ===== ROOT COLOR VARIABLES (same as index) ===== */
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

@media (min-width: 640px)  { .container { max-width: 640px; } }
@media (min-width: 768px)  { .container { max-width: 768px; } }
@media (min-width: 1024px) { .container { max-width: 1024px; } }
@media (min-width: 1280px) { .container { max-width: 1200px; } }

/* ===== GLOBAL THEME ===== */
body { background-color: var(--bg2); }

h1, h2, h3, h4, h5 { color: var(--text2) !important; }
p, li  { color: var(--text1); }
.text-amber-500, .text-amber-400, .text-amber-100 { color: var(--text2) !important; }
.text-gray-300, .text-gray-400 { color: var(--text1) !important; }
.text-white { color: var(--text1) !important; }

/* bg overrides */
.bg-neutral-900, section.bg-neutral-900 { background-color: var(--bg2) !important; }
.bg-black,       section.bg-black       { background-color: var(--bg1) !important; }
.bg-neutral-800  { background-color: #d4ae7a !important; }

/* borders */
.border-neutral-800 { border-color: rgba(142,22,22,0.25) !important; }
.border-neutral-700 { border-color: rgba(142,22,22,0.2)  !important; }

/* Buttons */
.bg-amber-600, .hover\:bg-amber-700 { background-color: var(--text2) !important; color: var(--bg2) !important; }
.bg-amber-600:hover { background-color: #6e1010 !important; }
.border-2.border-white { border-color: var(--text2) !important; color: var(--text2) !important; }
.border-2.border-white:hover { background-color: var(--text2) !important; color: var(--bg2) !important; }

/* ===== HERO SECTION ===== */
.hero-banner {
    background: linear-gradient(rgba(142,22,22,0.35), rgba(0,0,0,0.45)), url('image/8-5.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    min-height: 500px;
    margin-bottom: 30px;
}

/* ===== STAT COUNTER ===== */
.stat-number {
    font-size: 3rem;
    font-weight: 700;
    color: var(--text2);
}

/* ===== TIMELINE ===== */
.timeline-item {
    position: relative;
    padding-left: 2rem;
    border-left: 2px solid var(--text2);
}
.timeline-item::before {
    content: '';
    position: absolute;
    left: -8px;
    top: 0;
    width: 14px;
    height: 14px;
    background: var(--text2);
    border-radius: 50%;
}

/* ===== FEATURE CARDS ===== */
.feature-card {
    transition: all 0.3s ease;
    background: rgba(232,201,153,0.5);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(142,22,22,0.2);
}
.feature-card:hover {
    transform: translateY(-8px);
    border-color: rgba(142,22,22,0.5);
    box-shadow: 0 20px 40px rgba(142,22,22,0.15);
}

.icon-wrapper {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    box-shadow: 0 8px 20px rgba(142,22,22,0.3);
}
.icon-wrapper i { font-size: 1.75rem; color: var(--bg2); }

/* ===== CORE VALUES CARDS ===== */
.bg-neutral-800.rounded-2xl {
    background-color: #d4ae7a !important;
    border-color: rgba(142,22,22,0.3) !important;
}
.bg-amber-500\/20 { background-color: rgba(142,22,22,0.15) !important; }
.text-amber-500.text-3xl { color: var(--text2) !important; }

/* ===== AWARDS ===== */
.award-card { transition: transform 0.3s ease; }
.award-card:hover { transform: translateY(-4px); }
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }

/* ===== FAQ ===== */
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

.faq-item { background-color: var(--bg2) !important; border-color: rgba(142,22,22,0.25) !important; }
.faq-question:hover { background-color: rgba(232,201,153,0.5) !important; }
.faq-answer > div { background-color: rgba(232,201,153,0.3) !important; border-top-color: rgba(142,22,22,0.2) !important; }
.faq-icon { color: var(--text2) !important; }
.faq-question span { color: var(--text1) !important; }

/* ===== SPECIAL OFFER POPUP ===== */
@keyframes slideIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to   { opacity: 1; transform: scale(1)   translateY(0);    }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }

#specialOfferBtn { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
#specialOfferBtn:hover { background: linear-gradient(to right, #6e1010, var(--text2)) !important; }

/* rating stars keep amber */
.text-amber-400.text-2xl, .text-amber-400.text-3xl, .text-amber-400.text-lg { color: #d97706 !important; }

/* Section backgrounds explicitly */
.section-bg1 { background-color: var(--bg1) !important; }
.section-bg2 { background-color: var(--bg2) !important; }
.section-bg-dark { background-color: #c9a96e !important; }
</style>


<!-- HERO -->
 <header class="relative h-[50vh] md:h-[60vh] lg:h-[120vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/Tiger2.webp') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </header>

<!-- About Wildmark Kanha Resort -->
<section class="py-16 md:py-24 section-bg2" style="padding-bottom: 30px;">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">

        <div class="text-center mb-12">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">
                ABOUT WILDMARK KANHA
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
                Wildmark Resort, Kanha
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Text -->
            <div class="text-sm md:text-base leading-relaxed space-y-4" style="color: var(--text1);" data-aos="fade-right">
                <p>Wildmark Resort is an iconic stay located near the famous Khatiya Gate in Kanha Tiger Reserve. The resort is surrounded by the Khatiya Buffer Zone, where visitors can witness the wild marks of wildlife in the mornings and wake up with the melodious calls of birds.</p>
                <p>The resort is surrounded by tranquil forests and offers guests a choice between Super Deluxe Rooms and Family Rooms, each providing stunning garden views, private sit-outs, and exclusive open shower amenities.</p>
                <p>The resort is pet-friendly, accessible for differently and specially abled guests with wheelchair support, and features a variety of activities for adventure enthusiasts and wildlife photographers, as well as relaxation options for leisure travelers.</p>
                <p>Perfect for those in search of a tranquil escape near Kanha Tiger Reserve, Wildmark Kanha Resort ensures comfort, luxury, and convenience — especially for guests planning a tiger safari tour in India.</p>
            </div>

            <!-- Right Image -->
            <div data-aos="fade-left">
                <img src="https://wildmarkresort.com/images/small_tiger.webp" alt="Wildmark Resort Kanha"
                    class="rounded-2xl shadow-2xl w-full h-[400px] md:h-[500px] object-cover" />
            </div>
        </div>
    </div>
</section>

<!-- OUR ESSENCE -->
<section class="py-16 md:py-24 section-bg2">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">OUR ESSENCE</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Attachment to a Place is Something We All Feel!
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div data-aos="fade-right" data-aos-duration="1000">
                <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Wildmark Resort" class="rounded-2xl shadow-2xl w-full h-[400px] md:h-[500px] object-cover" />
            </div>
            <div data-aos="fade-left" data-aos-duration="1000">
                <h3 class="text-2xl md:text-3xl font-serif mb-6">A Unique Resort Experience</h3>
                <p class="text-sm md:text-base mb-4 leading-relaxed text-justify" style="color: var(--text1);">Wild Mark Resort is a unique resort that can make you enjoy the wilderness of nature. This is a one-of-a-kind experience to cherish every time in Kanha. The Kanha-Kisli national park is nestled in the Maikal range of Satpuras in Madhya Pradesh.</p>
                <p class="text-sm md:text-base mb-4 leading-relaxed text-justify" style="color: var(--text1);">Spread across the area of 940 square kms, you can see the most beautiful source of nature's inspiration. The Kanha National Park has large varieties of fauna and this is best known for the Barasingha - a deer known as 'the jewel of Kanha'.</p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color: var(--text1);">Since 1955, the Kanha tiger reserve is majestically spread across the Satpura range with all the amazing sightings. This pristine wilderness has been a sanctuary for wildlife enthusiasts, photographers, and nature lovers from around the world.</p>
            </div>
        </div>

        <!-- Second Content Block -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="text-2xl md:text-3xl font-serif mb-6">Drive to This Dream Place to Discover and Delight</h3>
                <p class="text-sm md:text-base mb-4 leading-relaxed text-justify" style="color: var(--text1);">Wild Mark Resort Accommodation - Wake up to this symphony of nature and wilderness, that can solely cherish an enthusiastic person. This is a place where you can feel relaxed, and can look for more intimate experiences in nature.</p>
                <p class="text-sm md:text-base mb-4 leading-relaxed text-justify" style="color: var(--text1);">A full-on-luxury is what you can expect in our resort booking for Kanha. We provide you a room with fully accommodated space with all the amenities and a blend of premium architecture. With the touch of modern design and space, we give you all the staying facilities with an exciting recreation.</p>
                <p class="text-sm md:text-base leading-relaxed text-justify" style="color: var(--text1);">Wild Mark Kanha resort is one of the magnificent locations for all the nature lovers. Our commitment to excellence ensures that every guest experiences the perfect balance of adventure and comfort during their stay.</p>
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                <img src="https://wildmarkresort.com/images/bear.webp" alt="Kanha Wildlife" class="rounded-2xl shadow-2xl w-full h-[400px] md:h-[500px] object-cover" />
            </div>
        </div>
    </div>
</section>

<!-- NATURAL SETTING -->
<section class="py-8 md:py-12 section-bg1">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
        <div class="text-center mb-12">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">NATURAL SURROUNDINGS</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">In a Natural Setting</h2>
        </div>
        <div class="rounded-2xl p-8 md:p-12 shadow-2xl" style="background-color: #c9a96e;" data-aos="fade-up" data-aos-duration="1000">
            <p class="text-sm md:text-base mb-6 leading-relaxed text-justify" style="color: var(--text1);">The resort is placed amidst green and lush surroundings, that will cherish upon. Make your stay here in the most refreshing and rejuvenating atmosphere, as this will be an essential gear in your life. The Wild Mark Kanha resort gives a right blend of staying facilities and the most relaxing environment for your friends and family.</p>
            <p class="text-sm md:text-base mb-6 leading-relaxed text-justify" style="color: var(--text1);">Adopt the pace of nature as it will please you and your loved ones with simplicity. A beautiful spectacle of nature can be seen from our Wild Mark Kanha resort, and this is the right way to look into. Our location offers unparalleled views of the surrounding forest, where you can witness the changing colors of the sky during sunrise and sunset.</p>
            <p class="text-sm md:text-base leading-relaxed text-justify" style="color: var(--text1);">Trust our Wild Mark Resort accommodations, where you can't get enough of nature and the stay! Every corner of our resort is designed to bring you closer to the wilderness while ensuring you enjoy all modern comforts and amenities.</p>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-16 md:py-24 section-bg2">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">OUR EXCELLENCE</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">Why Choose Wildmark Resort</h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto leading-relaxed" style="color: var(--text1);" data-aos="fade-up" data-aos-delay="200">We offer an unmatched combination of luxury, nature, and authentic wildlife experiences</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-wrapper"><i class="fas fa-mountain"></i></div>
                <h4 class="text-xl font-serif font-bold mb-4">Prime Location</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">Located at the doorstep of Kanha National Park, offering easy access to all safari zones and wildlife experiences.</p>
            </div>
            <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-wrapper"><i class="fas fa-bed"></i></div>
                <h4 class="text-xl font-serif font-bold mb-4">Luxury Accommodation</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">Premium rooms with modern amenities, comfortable bedding, and private sit-outs with stunning garden views.</p>
            </div>
            <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-wrapper"><i class="fas fa-utensils"></i></div>
                <h4 class="text-xl font-serif font-bold mb-4">Multi-Cuisine Dining</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">Enjoy delicious multi-cuisine meals prepared by expert chefs using fresh, local ingredients in our restaurant.</p>
            </div>
            <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-wrapper"><i class="fas fa-binoculars"></i></div>
                <h4 class="text-xl font-serif font-bold mb-4">Expert Safari Guidance</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">Professional naturalists and safari booking assistance to maximize your wildlife sighting opportunities.</p>
            </div>
        </div>
    </div>
</section>

<!-- JOURNEY TIMELINE -->
<section class="py-16 md:py-24 section-bg1">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">OUR LEGACY</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">Our Journey of Excellence</h2>
        </div>

        <div class="space-y-8">
            <div class="timeline-item" data-aos="fade-right" data-aos-delay="100">
                <div class="rounded-xl p-6 md:p-8" style="background-color: #c9a96e;">
                    <h4 class="text-xl md:text-2xl font-serif mb-3">Establishment</h4>
                    <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);">Wildmark Resort was founded with a vision to create a luxury wilderness retreat that brings guests closer to nature while providing world-class hospitality and comfort.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-right" data-aos-delay="200">
                <div class="rounded-xl p-6 md:p-8" style="background-color: #c9a96e;">
                    <h4 class="text-xl md:text-2xl font-serif mb-3">Recognition & Awards</h4>
                    <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);">Over the years, we've been honored with multiple TripAdvisor Travellers' Choice Awards (2020, 2021, 2022, 2025), recognizing our commitment to exceptional guest experiences.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-right" data-aos-delay="300">
                <div class="rounded-xl p-6 md:p-8" style="background-color: #c9a96e;">
                    <h4 class="text-xl md:text-2xl font-serif mb-3">Conservation Commitment</h4>
                    <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);">We actively participate in wildlife conservation efforts and sustainable tourism practices, ensuring that future generations can experience Kanha's natural beauty.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-right" data-aos-delay="400">
                <div class="rounded-xl p-6 md:p-8" style="background-color: #c9a96e;">
                    <h4 class="text-xl md:text-2xl font-serif mb-3">Continuous Innovation</h4>
                    <p class="text-sm md:text-base leading-relaxed" style="color: var(--text1);">We continuously upgrade our facilities and services, incorporating guest feedback and modern amenities while maintaining our connection to nature and traditional hospitality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="py-16 md:py-20 section-bg2">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-number mb-2">50+</div>
                <p class="text-sm md:text-base font-light tracking-wider" style="color: rgba(0,0,0,0.6);">Years of Conservation</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-number mb-2">940</div>
                <p class="text-sm md:text-base font-light tracking-wider" style="color: rgba(0,0,0,0.6);">Square Kms of Reserve</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-number mb-2">4.8</div>
                <p class="text-sm md:text-base font-light tracking-wider" style="color: rgba(0,0,0,0.6);">Guest Rating</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-number mb-2">4</div>
                <p class="text-sm md:text-base font-light tracking-wider" style="color: rgba(0,0,0,0.6);">Awards Won</p>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="py-16 md:py-24 section-bg1">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16">
            <p class="text-xs tracking-widest mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">WHAT DRIVES US</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">Our Core Values</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-2xl p-8 text-center border" style="background-color: #c9a96e; border-color: rgba(142,22,22,0.3);" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6" style="background-color: rgba(142,22,22,0.15);">
                    <i class="fas fa-leaf text-3xl" style="color: var(--text2);"></i>
                </div>
                <h4 class="text-xl font-serif font-bold mb-4">Sustainability</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">We are committed to eco-friendly practices, minimizing our environmental footprint while maximizing guest comfort and supporting local conservation efforts.</p>
            </div>
            <div class="rounded-2xl p-8 text-center border" style="background-color: #c9a96e; border-color: rgba(142,22,22,0.3);" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6" style="background-color: rgba(142,22,22,0.15);">
                    <i class="fas fa-heart text-3xl" style="color: var(--text2);"></i>
                </div>
                <h4 class="text-xl font-serif font-bold mb-4">Hospitality</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">Our guests are family. We provide warm, personalized service that makes every visitor feel welcomed, valued, and cared for throughout their stay.</p>
            </div>
            <div class="rounded-2xl p-8 text-center border" style="background-color: #c9a96e; border-color: rgba(142,22,22,0.3);" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6" style="background-color: rgba(142,22,22,0.15);">
                    <i class="fas fa-shield-alt text-3xl" style="color: var(--text2);"></i>
                </div>
                <h4 class="text-xl font-serif font-bold mb-4">Authenticity</h4>
                <p class="text-sm leading-relaxed" style="color: var(--text1);">We offer genuine wildlife experiences and stay true to our roots, providing authentic connections with nature and local culture.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 md:py-20 section-bg2">
    <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6" data-aos="fade-up">
            Ready to Experience Wildmark Resort?
        </h2>
        <p class="text-base md:text-lg mb-8 leading-relaxed max-w-2xl mx-auto" style="color: var(--text1);" data-aos="fade-up" data-aos-delay="200">
            Join us for an unforgettable journey into the heart of Kanha's wilderness. Book your stay today and create memories that will last a lifetime.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="https://wildmarkresort.com/contact/" class="px-8 py-3 rounded-lg transition font-semibold text-base shadow-lg text-white" style="background-color: var(--text2);">
                BOOK YOUR STAY
            </a>
            <a href="https://wildmarkresort.com/kanha-accommodation/" class="border-2 px-8 py-3 rounded-lg transition font-semibold text-base" style="border-color: var(--text2); color: var(--text2);"
                onmouseover="this.style.backgroundColor='var(--text2)';this.style.color='var(--bg2)';"
                onmouseout="this.style.backgroundColor='transparent';this.style.color='var(--text2)';">
                EXPLORE ROOMS
            </a>
        </div>
    </div>
</section>

<!-- AWARDS -->
<section class="py-12 md:py-20 px-4 md:px-6 section-bg1 overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color: var(--text2);" data-aos="fade-down">EXCELLENCE • RECOGNITION • TRUST</p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">Awards and Recognitions</h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" style="color: var(--text1);" data-aos="fade-up" data-aos-delay="200">
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

<!-- FAQ -->
<section class="py-12 md:py-20 px-4 md:px-6 section-bg2">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" style="color: var(--text2);" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" style="color: var(--text1);" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

            <!-- LEFT COLUMN: FAQ 1–10 -->
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
                <div class="faq-item border rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- RIGHT COLUMN: FAQ 11–20 -->
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
                <div class="faq-item border rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition">
                        <span class="font-serif"><?= $faq[0] ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t">
                            <p class="text-sm md:text-base leading-relaxed"><?= $faq[1] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<!-- SPECIAL OFFER BUTTON -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="white" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
    <span class="absolute -top-1 -right-1 text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce" style="background-color: var(--bg1); color: var(--text2);">New</span>
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

<!-- WHATSAPP -->
<a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    style="background-color: #25D366;" aria-label="WhatsApp">
    
    <svg class="w-6 h-6 md:w-8 md:h-8" fill="#ffffff" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
    </svg>
</a>

<script>
// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
        var href = this.getAttribute('href');
        if (href !== '#' && href !== '#book') {
            e.preventDefault();
            var target = document.querySelector(href);
            if (target) {
                var navH = (document.querySelector('nav') || {}).offsetHeight || 100;
                window.scrollTo({ top: target.offsetTop - navH, behavior: 'smooth' });
            }
        }
    });
});
document.body.style.overflowX = 'hidden';
document.documentElement.style.overflowX = 'hidden';

// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        var question = item.querySelector('.faq-question');
        var answer   = item.querySelector('.faq-answer');
        var icon     = item.querySelector('.faq-icon');
        if (!question || !answer) return;
        question.addEventListener('click', function() {
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(function(other) {
                var a  = other.querySelector('.faq-answer');
                var ic = other.querySelector('.faq-icon');
                if (a)  a.style.maxHeight = '0px';
                if (ic) ic.style.transform = 'rotate(0deg)';
            });
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});

// Special Offer Popup
function toggleSpecialOfferPopup() {
    var popup = document.getElementById('specialOfferPopup');
    var hidden = popup.classList.contains('hidden');
    popup.classList.toggle('hidden', !hidden);
    popup.classList.toggle('flex', hidden);
    document.body.style.overflow = hidden ? 'hidden' : '';
}
function closeIfClickedOutside(event) {
    if (event.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        var popup = document.getElementById('specialOfferPopup');
        if (popup && !popup.classList.contains('hidden')) toggleSpecialOfferPopup();
    }
});

// FAQ grid resize
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