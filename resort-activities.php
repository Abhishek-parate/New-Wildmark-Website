<?php 
// Set page-specific title
$pageTitle = "Resort Activities - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

<style>
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
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
}

#specialOfferPopup > div::-webkit-scrollbar {
    display: none; /* Chrome/Safari/Opera */
}


#specialOfferPopup > div::-webkit-scrollbar-track {
    background: #1c1917;
}

#specialOfferPopup > div::-webkit-scrollbar-thumb {
    background: #d97706;
    border-radius: 3px;
}
/* Activity Cards Styling */
.activity-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: linear-gradient(135deg, #1a1a1a 0%, #262626 100%);
    border: 1px solid rgba(217, 119, 6, 0.2);
}

.activity-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(217, 119, 6, 0.3);
    border-color: rgba(217, 119, 6, 0.5);
}

.activity-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    box-shadow: 0 8px 20px rgba(217, 119, 6, 0.3);
    transition: transform 0.3s ease;
}

.activity-card:hover .activity-icon {
    transform: scale(1.1) rotate(5deg);
}

.activity-icon i {
    font-size: 2rem;
    color: #000;
}

/* FAQ Styling */
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

/* Awards Card Styling */
.award-card {
    transition: transform 0.3s ease;
}

.award-card:hover {
    transform: translateY(-4px);
}

.award-image {
    transition: transform 0.3s ease;
}

.award-card:hover .award-image {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .award-card>div {
        min-height: 280px !important;
    }

    .award-image {
        max-width: 220px;
    }
}
</style>
  <header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('images/home3.webp') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </header>

<!-- Main Activities Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
    <div class="container mx-auto max-w-7xl">
        
        <!-- Section Header -->
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
                ADVENTURE • CULTURE • RELAXATION
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Experience Wildmark Resort
            </h2>
            <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                From nature trails to cultural experiences, we offer a wide range of activities to make your stay memorable
            </p>
        </div>

        <!-- Activities Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            
            <!-- Activity Card 1: Nature Trails -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="activity-icon">
                    <i class="fas fa-hiking"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Nature Trails</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Explore the pristine beauty of Kanha's buffer zone with guided nature walks through lush forests and scenic landscapes.
                </p>
            </div>

            <!-- Activity Card 2: Bird Watching -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="activity-icon">
                    <i class="fas fa-binoculars"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Bird Watching</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Witness over 300 species of birds in their natural habitat. Perfect for ornithology enthusiasts and nature photographers.
                </p>
            </div>

            <!-- Activity Card 3: Photography Classes -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="activity-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Photography Classes</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Learn wildlife and landscape photography from experienced naturalists. Capture the essence of Kanha's wilderness.
                </p>
            </div>

            <!-- Activity Card 4: Bi-cycling -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="activity-icon">
                    <i class="fas fa-bicycle"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Bi-cycling</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Cycle through village roads and forest paths. Experience the tranquility of rural Madhya Pradesh at your own pace.
                </p>
            </div>

            <!-- Activity Card 5: Baiga Tribal Dance -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="activity-icon">
                    <i class="fas fa-drum"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Baiga Tribal Dance</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Experience the vibrant culture of Baiga tribe through their traditional dance performances and folk music.
                </p>
            </div>

            <!-- Activity Card 6: Tribal Village Walk -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="activity-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Tribal Village Walk</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Visit nearby tribal villages and learn about their unique lifestyle, traditions, and sustainable living practices.
                </p>
            </div>

            <!-- Activity Card 7: Market Walk -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="activity-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Market Walk</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Explore local markets and shop for authentic tribal handicrafts, jewelry, and organic forest produce.
                </p>
            </div>

            <!-- Activity Card 8: Python Spot -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="activity-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Python Spot</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Guided visits to python habitats for wildlife enthusiasts. Safe and educational experience with expert naturalists.
                </p>
            </div>

            <!-- Activity Card 9: Ancient Forts -->
            <div class="activity-card rounded-2xl p-6 md:p-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="activity-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-serif font-bold text-white mb-3 text-center">Ancient Forts</h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed text-center">
                    Explore historical forts and learn about the rich heritage and architectural marvels of central India.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Indoor & Outdoor Games Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black">
    <div class="container mx-auto max-w-7xl">
        
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
                RECREATION • FUN • LEISURE
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" data-aos-duration="1000">
                Indoor & Outdoor Games
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
            
            <!-- Indoor Games -->
            <div class="bg-neutral-900 border border-amber-500/30 rounded-2xl p-6 md:p-8" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white mb-6 text-center">Indoor Games</h3>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-circle-dot text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Carrom Board</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-chess text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Chess & Board Games</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-heart text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Playing Cards</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-table-tennis-paddle-ball text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Table Tennis</span>
                    </li>
                </ul>
            </div>

            <!-- Outdoor Games -->
            <div class="bg-neutral-900 border border-amber-500/30 rounded-2xl p-6 md:p-8" data-aos="fade-left" data-aos-duration="1000">
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white mb-6 text-center">Outdoor Games</h3>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shuttle-space text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Badminton</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-volleyball text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Volleyball</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-baseball-bat-ball text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Cricket</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-person-running text-amber-500 text-lg"></i>
                        </span>
                        <span class="text-base">Outdoor Games Area</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- Mini Library Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
    <div class="container mx-auto max-w-6xl">
        
        <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center">
            
            <!-- Left: Image -->
            <div class="relative h-[350px] md:h-[450px] rounded-2xl overflow-hidden shadow-2xl" data-aos="fade-right" data-aos-duration="1000">
                <img src="images/room5.png" alt="Mini Library" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>

            <!-- Right: Content -->
            <div data-aos="fade-left" data-aos-duration="1000">
                <p class="text-amber-500 text-xs tracking-widest mb-4 font-light uppercase">
                    READ • RELAX • REJUVENATE
                </p>
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6 text-white">
                    Mini Library
                </h2>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-6">
                    Unwind with a good book in our cozy mini library. We have a curated collection of books on wildlife, nature, local history, and fiction to enhance your stay experience.
                </p>
                <ul class="space-y-3 text-gray-300 mb-6">
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book text-amber-500"></i>
                        <span>Wildlife & Nature Books</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book text-amber-500"></i>
                        <span>Local History & Culture</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book text-amber-500"></i>
                        <span>Fiction & Bestsellers</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-book text-amber-500"></i>
                        <span>Comfortable Reading Area</span>
                    </li>
                </ul>
                <a href="contact.php" class="inline-block bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg transition font-semibold">
                    Book Your Stay
                </a>
            </div>

        </div>

    </div>
</section>

<!-- FAQs Section - 20 Questions (From Index Page) -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">

        <!-- Section Header -->
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

        <!-- FAQ Grid: 10 Left + 10 Right -->
        <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">

            <!-- LEFT COLUMN: FAQ 1–10 -->
            <div class="faq-col">

                <!-- FAQ 1 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort booking?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort stay?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What types of rooms are available at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access inside the resort premises.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark Resort?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                The resort remains open, and Buffer safaris are available during monsoon season.
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- END LEFT COLUMN -->

            <!-- RIGHT COLUMN: FAQ 11–20 -->
            <div class="faq-col">

                <!-- FAQ 11 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 12 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop services?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 13 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 14 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 15 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view rooms?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 16 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 17 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What documents are required at check-in for Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Guests must carry a valid government issued photo ID at the time of check in.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 18 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle safari?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 19 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 20 -->
                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- END RIGHT COLUMN -->

        </div><!-- END FAQ GRID -->
    </div>
</section>

<!-- Awards and Recognitions Section (From Index Page) -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900 awards-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <!-- Header -->
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

        <!-- Awards Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">

            <!-- Award Card 1 - 2020 -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <!-- Award Card 2 - 2021 -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <!-- Award Card 3 - 2022 -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <!-- Award Card 4 - 2025 (Green Background) -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1;border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>

        </div>

    </div>
</section>
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <!-- Price Tag Icon -->
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd"></path>
    </svg>
    <span
        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">
        New
    </span>
</button>
<!-- Special Offer Popup Modal -->
<div id="specialOfferPopup"
    class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[100] hidden items-center justify-center p-4"
    onclick="closeIfClickedOutside(event)">

    <div class="bg-neutral-900 border-2 border-amber-500/50 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative animate-slideIn"
        onclick="event.stopPropagation()">

        <!-- Close Button -->
        <button onclick="toggleSpecialOfferPopup()"
            class="absolute top-4 right-4 text-white hover:text-amber-500 transition z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Header with Gradient -->
        <div class="bg-gradient-to-r from-amber-600 to-amber-500 p-6 md:p-8 rounded-t-2xl">
            <div class="flex items-center gap-3 mb-2">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                    </path>
                </svg>
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white">Special Offers</h3>
            </div>
            <p class="text-amber-100 text-sm">Limited time deals on resort packages & safari tours</p>
        </div>

        <!-- Offers Content -->
        <div class="p-6 md:p-8 space-y-6">

            <!-- Offer 1 - Resort + Safari Package -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span
                            class="inline-block bg-amber-500 text-black text-xs font-bold px-3 py-1 rounded-full mb-2">
                            BESTSELLER
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">2N/3D Resort + Safari Package</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-400 text-sm line-through">₹15,000</p>
                        <p class="text-2xl font-bold text-amber-500">₹12,499</p>
                    </div>
                </div>
                <ul class="text-gray-300 text-sm space-y-2 mb-4">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        2 Nights Stay at Wildmark Resort (Near Khatia Gate)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        4 Jungle Safaris (Morning + Evening)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        All Meals Included (Breakfast, Lunch, Dinner)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Complimentary Safari Permit Assistance
                    </li>
                </ul>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>

                </div>
            </div>

            <!-- Offer 2 - Early Bird Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span
                            class="inline-block bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            EARLY BIRD
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Advance Booking Discount</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-500">20% OFF</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March
                    31, 2025.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>

                </div>
            </div>

            <!-- Offer 3 - Group Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            GROUP OFFER
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Group Booking Special</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-blue-500">₹10,999</p>
                        <p class="text-xs text-gray-400">per person</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Special rates for groups of 6+ people. Perfect for families, corporate outings, and wildlife
                    photography tours.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        Book Now
                    </a>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="bg-amber-500/10 border-t border-amber-500/30 p-4 text-center rounded-b-2xl">
            <p class="text-amber-500 text-sm font-semibold">
                ⏰ Offers valid till March 31, 2025 | Terms & Conditions Apply
            </p>
        </div>

    </div>
</div>

<!-- JavaScript -->
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

            // Close all
            faqItems.forEach(other => {
                other.querySelector('.faq-answer').style.maxHeight = '0px';
                other.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            });

            // Open current if it was closed
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});

// FAQ Grid Responsive Handler
function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    if (window.innerWidth <= 860) {
        grid.style.gridTemplateColumns = '1fr';
    } else {
        grid.style.gridTemplateColumns = '1fr 1fr';
    }
}
window.addEventListener('load', handleFaqResize);
window.addEventListener('resize', handleFaqResize);
</script>
<script>
// Toggle Special Offer Popup
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) {
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Prevent background scroll
    } else {
        popup.classList.add('hidden');
        popup.classList.remove('flex');
        document.body.style.overflow = ''; // Restore scroll
    }
}

// Close popup when clicking outside
function closeIfClickedOutside(event) {
    if (event.target.id === 'specialOfferPopup') {
        toggleSpecialOfferPopup();
    }
}

// Close popup with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const popup = document.getElementById('specialOfferPopup');
        if (!popup.classList.contains('hidden')) {
            toggleSpecialOfferPopup();
        }
    }
});
</script>

<?php 
// Include footer
include 'includes/footer.php'; 
?>