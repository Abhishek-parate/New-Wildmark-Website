<?php 
// Set page-specific title
$pageTitle = "Gallery - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>


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
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" >
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
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" >
                Awards and Recognitions
            </h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  >
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"   style="background-color: #39DCA1; border-radius: 9px;">
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

        <div class="faq-grid" data-aos="fade-up" >

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