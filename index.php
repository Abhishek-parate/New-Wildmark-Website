<?php 
// Set page-specific title
$pageTitle = "Home - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>

/* Responsive Container */
.container {
    width: 100%;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem;
}

@media (min-width: 640px) {
    .container {
        max-width: 640px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 768px;
    }
}

@media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }
}

@media (min-width: 1280px) {
    .container {
        max-width: 1200px;
    }
}



.carousel-dot {
    width: 8px;
    height: 8px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    transition: all 0.3s;
}

.carousel-dot.active {
    background: white;
    width: 10px;
    height: 10px;
}

.testimonial-dot {
    width: 10px;
    height: 10px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    transition: all 0.3s;
    cursor: pointer;
}

.testimonial-dot.active {
    background: white;
}

.destination-card {
    position: relative;
    overflow: hidden;
}

.destination-card img {
    transition: transform 0.7s ease;
}

.destination-card:hover img {
    transform: scale(1.05);
}

/* Hero Carousel Video-like Styles - Enhanced */
.hero-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
    z-index: 0;
}

.hero-slide.active {
    opacity: 1;
    z-index: 1;
}

.hero-image {
    position: absolute;
    inset: 0;
    background-size: cover !important;
    background-position: center !important;
    transform: scale(1);
    transition: transform 8s ease-out;
}

.hero-slide.active .hero-image {
    transform: scale(1.08);
}

.hero-indicator {
    cursor: pointer;
    transition: all 0.3s ease;
}

.hero-indicator.active {
    opacity: 1 !important;
    background: #f59e0b;
    transform: scale(1.3);
}

.hero-carousel {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
}

/* Google Maps Style Testimonial Cards */
.testimonial-card {
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.testimonial-nav-dot {
    cursor: pointer;
    transition: all 0.3s ease;
}

.testimonial-nav-dot:hover {
    transform: scale(1.3);
}

.testimonial-carousel {
    display: flex;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .testimonial-card {
        min-width: 100% !important;
    }
}

@media (min-width: 769px) {
    .testimonial-card {
        min-width: 33.333% !important;
    }
}


/* Profile Avatar Gradients */
.profile-avatar {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

/* Portrait Video Styling */
.conservation-video {
    position: relative;
    overflow: hidden;
}

.conservation-video video {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

/* Ensure video doesn't exceed container */
@media (max-width: 1024px) {
    .conservation-video {
        aspect-ratio: 9/16;
        /* Portrait aspect ratio */
        max-height: 600px;
    }
}

/* Video controls styling */
.conservation-video button:hover svg {
    transform: scale(1.1);
    transition: transform 0.2s;
}

/* Compact About Resort video + layout overrides */
@media (max-width: 1024px) {

    /* Undo earlier portrait aspect that made the section too tall */
    .conservation-video {
        aspect-ratio: auto !important;
    }
}

/* Optional: soften card/video edges and add subtle shadow */
.conservation-video,
.conservation-content-card {
    border-radius: 0.75rem;
    /* rounded-xl */
}


/* Tabs styling */
.tab-btn {
    position: relative;
    transition: color 0.3s ease;
    font-family: "Roboto Slab", serif;
    font-weight: 700;
    font-size: 0.875rem;
    color: #d4a574;
    padding-bottom: 0.75rem;
    white-space: nowrap;
    cursor: pointer;
}

@media (min-width: 768px) {
    .tab-btn {
        font-size: 1rem;
        padding-bottom: 1rem;
    }
}

.tab-btn:hover {
    color: #ca9f66;
}

.tab-btn.active {
    color: #ffffff;
}

.tab-btn.active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background-color: #ca9f66;
}

.tab-btn-a {
    position: relative;
    transition: color 0.3s ease;
    font-family: "Roboto Slab", serif;
    font-weight: 700;
    font-size: 0.875rem;
    color: #d4a574;
    padding-bottom: 0.75rem;
    white-space: nowrap;
    cursor: pointer;
}

@media (min-width: 768px) {
    .tab-btn-a {
        font-size: 1rem;
        padding-bottom: 1rem;
    }
}

.tab-btn-a:hover {
    color: #ca9f66;
}

.tab-btn-a.active {
    color: #ffffff;
}

.tab-btn-a.active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background-color: #ca9f66;
}

/* Why Choose Wildmark Resort Section Styling */
.why-choose-card {
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 1rem;
    padding: 1.5rem 1.5rem;
    text-align: left;
    /* Changed from center to left */
    height: 100%;
    position: relative;
    overflow: hidden;
}

/* Removed all hover effects */

.why-choose-card .icon-wrapper {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 0 1rem 0;
    /* Changed from auto to 0 for left alignment */
    box-shadow: 0 8px 20px rgba(245, 158, 11, 0.2);
}

.why-choose-card .icon-wrapper i {
    font-size: 1.5rem;
    color: #2d5a47;
}

.why-choose-card h4 {
    color: #ffffff;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    font-family: "Roboto Slab", serif;
    line-height: 1.4;
    text-align: left;
}

.why-choose-card p {
    color: rgba(255, 255, 255, 0.85);
    font-size: 0.875rem;
    line-height: 1.6;
    margin-bottom: 0;
    font-family: "Roboto Mono", monospace;
    text-align: left;
}

/* Responsive Adjustments */
@media (max-width: 1023px) {
    .why-choose-card {
        padding: 2rem 1.25rem;
    }
}

@media (max-width: 767px) {
    .why-choose-section {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .why-choose-card {
        padding: 2rem 1.5rem;
    }

    .why-choose-card h4 {
        font-size: 1.125rem;
    }
}


/* Tour Package Cards - Half Image, Half Content Design */
.tour-card {
    background: transparent;
    border-radius: 1rem;
    overflow: hidden;
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
}

.tour-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.7);
}

/* Ensure consistent card heights */
.tour-card {
    height: 520px;
    display: flex;
    flex-direction: column;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .tour-card {
        height: auto;
    }
}

@media (max-width: 768px) {
    .tour-card {
        height: auto;
    }

    .tour-card .h-\[240px\] {
        height: 200px;
    }

    .tour-card .h-\[280px\] {
        height: auto;
        min-height: 240px;
    }
}
.youtube-shorts-card iframe {
    max-width: 100%;
    display: block;
    border:none;
}

/* Mobile optimization */
@media (max-width: 768px) {
    .youtube-shorts-card {
        max-width: 400px;
        margin: 0 auto;
    }
}

/* Prevent layout shift */
.youtube-shorts-card>div {
    position: relative;
    overflow: hidden;
}

/* YouTube Shorts Testimonials Styling */
.youtube-shorts-card {
    transition: transform 0.3s ease;
}

.youtube-shorts-card:hover {
    transform: translateY(-4px);
}

/* Aspect ratio for vertical videos (9:16 - YouTube Shorts format) */
.aspect-\[9\/16\] {
    aspect-ratio: 9 / 16;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .youtube-shorts-card {
        max-width: 400px;
        margin: 0 auto;
    }
}

/* Awards and Recognitions Section Styling */
.award-card {
    transition: transform 0.3s ease;
}

.award-card:hover {
    transform: translateY(-4px);
}

/* Ensure consistent card heights */
.award-card>div {
    height: 100%;
    min-height: 380px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .award-card>div {
        min-height: 340px;
    }
}

/* Award logo animation on hover */
.award-card:hover .award-logo {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}


/* Awards and Recognitions Section Styling */
.award-card {
    transition: transform 0.3s ease;
}

.award-card:hover {
    transform: translateY(-4px);
}

/* Award image styling */
.award-image {
    transition: transform 0.3s ease;
}

.award-card:hover .award-image {
    transform: scale(1.05);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .award-card>div {
        min-height: 280px !important;
    }

    .award-image {
        max-width: 220px;
    }
}

/* Smooth transition for all cards */
.award-card>div {
    transition: all 0.3s ease;
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
/* Simple version - Just hide scrollbar */
#specialOfferPopup>div {
    scrollbar-width: none;
    /* Firefox */
    -ms-overflow-style: none;
    /* IE/Edge */
}

#specialOfferPopup>div::-webkit-scrollbar {
    display: none;
    /* Chrome/Safari/Opera */
}

#specialOfferPopup>div::-webkit-scrollbar-track {
    background: #1c1917;
}

#specialOfferPopup>div::-webkit-scrollbar-thumb {
    background: #d97706;
    border-radius: 3px;
}
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
  .carousel-container {
    position: relative;
    overflow: hidden;
    width: 100%;
}

/* Carousel Slides Wrapper */
.carousel-slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
}

/* Individual Slide - IMPORTANT FIX */
.carousel-slide {
    min-width: 100%;
    width: 100%;
    flex-shrink: 0;
    display: block;
}

.carousel-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Carousel Dots */
.carousel-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.carousel-dot.active {
    background-color: #f59e0b;
    width: 30px;
    border-radius: 5px;
}

.carousel-dot:hover {
    background-color: rgba(245, 158, 11, 0.6);
}

/* Prevent text selection on arrows */
button[onclick^="prevSlide"],
button[onclick^="nextSlide"] {
    user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
</style>
<section id="home"
    class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-center justify-center hero-section overflow-hidden">
    <div class="absolute inset-0 hero-carousel">

        <!-- Slide 1 -->
        <div class="hero-slide active">
            <div class="hero-image" style="background: url('images/home.webp') center/cover"></div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <div class="hero-image" style="background: url('images/home2.webp') center/cover"></div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
            <div class="hero-image" style="background: url('images/home3.webp') center/cover"></div>
        </div>

        <!-- Slide 4 -->
        <div class="hero-slide">
            <div class="hero-image" style="background: url('images/home6.webp') center/cover"></div>
        </div>

        <!-- Slide 5 -->
        <div class="hero-slide">
            <div class="hero-image" style="background: url('images/home5.jpg') center/cover"></div>
        </div>

    </div>
</section>

<!-- Intro / Strapline -->
<section id="intro" class="relative py-8 md:py-20 flex items-center bg-[#121212] overflow-hidden">
    <div class="mx-auto w-full max-w-7xl text-center">
        <!-- Hero Content Overlay -->
        <div class="text-center z-10 px-4 md:px-6 w-full max-w-7xl relative mx-auto">
            <h1 class="text-4xl md:text-6xl lg:text-6xl font-serif font-light mb-6 md:mb-8 tracking-wide hero-title"
                data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                Welcome to Wildmark Resort
            </h1>
            <h5 class="text-xl md:text-xl lg:text-xl text-amber-500 font-serif font-light mb-6 md:mb-8 tracking-wide hero-title"
                data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
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
<section class="py-10 md:py-16 bg-neutral-900 conservation-section overflow-hidden">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
        <div class="grid lg:grid-cols-2 items-center gap-6 md:gap-10">
            <!-- Left: Compact local video (autoplay + mute/unmute only) -->
            <div class="conservation-video relative w-full h-[360px] md:h-[460px] lg:h-[520px] overflow-hidden rounded-xl shadow-xl"
                data-aos="fade-right" data-aos-duration="1000">
                <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline
                    preload="metadata" id="conservationVideo">
                    <source src="images/IMG_8309.mp4" type="video/mp4" />
                    <source src="images/IMG_8309.webm" type="video/webm" />
                    <source src="images/IMG_8309.mp4" type="video/quicktime" />
                    Your browser does not support the video tag.
                </video>

                <!-- Mute/Unmute only -->
                <button
                    class="absolute bottom-4 right-4 bg-black/50 hover:bg-black/70 text-white w-12 h-12 rounded-full flex items-center justify-center transition z-10"
                    id="muteToggle" aria-label="Unmute video" aria-pressed="false">
                    <!-- Muted icon (default) -->
                    <svg id="muteIcon" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9 4.804A1 1 0 0110.618 4l3.535 3.536a1 1 0 01-1.414 1.414L11 6.212V13a1 1 0 11-2 0V4.804zM3 8a1 1 0 011-1h2.586l2.707-2.707A1 1 0 0111 5v10a1 1 0 01-1.707.707L6.586 13H4a1 1 0 01-1-1V8z" />
                    </svg>
                    <!-- Sound icon -->
                    <svg id="soundIcon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4a1 1 0 01.894.553L12 8h3a1 1 0 010 2h-3l-2.106 3.447A1 1 0 019 13V4z" />
                        <path
                            d="M14.536 5.464a1 1 0 011.415 1.414 5 5 0 010 7.071 1 1 0 01-1.415-1.414 3 3 0 000-4.243 1 1 0 010-1.414z" />
                    </svg>
                </button>
            </div>

            <!-- Right: Compact content card -->
            <div class="conservation-content-card bg-neutral-800 p-6 md:p-10 lg:p-12" data-aos="fade-left"
                data-aos-duration="1000">
                <p class="text-amber-500 text-xs tracking-widest mb-4 md:mb-6 font-light">
                    About Kanha Tiger Reserve
                </p>
                <h2 class="text-3xl md:text-4xl font-serif mb-5 md:mb-6 leading-tight">
                    The Jewel of Indian Wildlife
                </h2>
                <p class="text-sm md:text-base text-gray-300 mb-2 md:mb-4 leading-relaxed text-justify">
                    Welcome to the wild wonders of Kanha Kisli Tiger Reserve where
                    every turn holds the promise of adventure! Spanning 940 square
                    kilometers, Kanha Tiger Reserve celebrates over 50 years of
                    conservation success and houses a remarkable variety of flora and
                    fauna. At the heart of your journey lies the thrilling tiger
                    safari, a chance to explore four distinct zones: Kanha, Kisli,
                    Mukki & Sarhi.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                    <a href="contact.php"
                        class="bg-amber-600 hover:bg-amber-700 text-white px-6 md:px-8 py-2.5 md:py-3 transition font-light text-sm md:text-base inline-block text-center">
                        Book Your Stay
                    </a>
                    <a href="wildmark.php"
                        class="border border-white hover:bg-white hover:text-black text-white px-6 md:px-8 py-2.5 md:py-3 transition font-light text-sm md:text-base inline-block text-center">
                        View Rooms
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 md:py-20 px-4 md:px-6 bg-black extraordinary-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-8 md:mb-12">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down"
                data-aos-duration="800">
                Best Conservation Efforts | Luxury Accommodation | Travel-Friendly
                Experience
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6 md:mb-8" data-aos="zoom-in" data-aos-duration="1000">
                No matter where you're going from, we take you there.
            </h2>
            <p class="text-sm md:text-base text-gray-300 max-w-6xl mx-auto leading-relaxed mb-2" data-aos="fade-up"
                data-aos-delay="200">
                One of the most remarkable aspects of Kanha Jungle Resort is its
                commitment to conservation.
            </p>
            <p class="text-sm md:text-base text-gray-300 max-w-6xl mx-auto leading-relaxed mb-2" data-aos="fade-up"
                data-aos-delay="300">
                The beauty of a Kanha National Park holiday package is not just in
                its wildlife.
            </p>
            <p class="text-sm md:text-base text-gray-300 max-w-6xl mx-auto leading-relaxed mb-2" data-aos="fade-up"
                data-aos-delay="400">
                Kanha National Park accommodation also offers walking trails in
                designated buffer zones, allowing adventurous visitors to explore
                the forest on foot under the guidance of a naturalist.
            </p>
        </div>

        <!-- FIXED CAROUSEL -->
        <div class="relative mt-10 md:mt-16" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="carousel-container overflow-hidden rounded-lg">
                <div class="carousel-slides flex transition-transform duration-500 ease-in-out" id="carousel">
                    <!-- Slide 1 -->
                    <div class="carousel-slide w-full flex-shrink-0">
                        <img src="images/home5.jpg" alt="Tiger Safari"
                            class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover" />
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide w-full flex-shrink-0">
                        <img src="images/home6.webp" alt="Wildlife Experience"
                            class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover" />
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide w-full flex-shrink-0">
                        <img src="images/home7.webp" alt="Safari Jeep"
                            class="w-full h-[250px] sm:h-[350px] md:h-[450px] lg:h-[550px] object-cover" />
                    </div>
                </div>
            </div>

            <!-- Left Arrow -->
            <button
                class="absolute left-2 md:left-4 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm text-black w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center hover:bg-white transition shadow-lg z-10"
                onclick="prevSlide()" aria-label="Previous slide">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Right Arrow -->
            <button
                class="absolute right-2 md:right-4 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm text-black w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center hover:bg-white transition shadow-lg z-10"
                onclick="nextSlide()" aria-label="Next slide">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Dots Indicator -->
            <div class="flex justify-center mt-6 md:mt-8 gap-2">
                <button class="carousel-dot active" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
                <button class="carousel-dot" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
                <button class="carousel-dot" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
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
        <div
            class="sticky top-[60px] md:top-[80px] z-40 bg-neutral-900 border-b border-neutral-800 -mx-4 md:-mx-6 px-4 md:px-6 py-4 mb-8">
            <div class="flex justify-center gap-4 md:gap-8 overflow-x-auto scrollbar-hide">
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
                <img src="images/beded3.jpeg" class="rounded-xl w-full h-64 object-cover" alt="Machaan" />
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
                    <a href="Wildmark.php"
                        class="bg-amber-600 hover:bg-amber-700 text-white px-10 py-3 transition font-semibold text-base rounded-lg shadow-lg">
                        KNOW MORE
                    </a>
                </div>
            </div>

            <!-- Super Deluxe - Family Double Bedded Rooms Tab -->
            <div class="panel hidden" data-tab="superdeluxe">
                <img src="images/beded1.webp" class="rounded-xl w-full h-64 object-cover" alt="Super Deluxe" />
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

            <!-- Updated Room Highlights Section with 3 Columns -->


            <!-- Know More Button for Family Double Bedded Rooms -->
            <div class="panel hidden md:col-span-2 text-center mt-8" data-tab="superdeluxe">
                <div class="flex justify-center">
                    <a href="Wildmark.php"
                        class="bg-amber-600 hover:bg-amber-700 text-white px-10 py-3 transition font-semibold text-base rounded-lg shadow-lg">
                        KNOW MORE
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Wildmark Resort Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900 why-choose-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
                EXCELLENCE • COMFORT • NATURE
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in" data-aos-duration="1000">
                Why Choose Wildmark Resort
            </h2>
            <p class="text-sm md:text-base text-gray-300 max-w-7xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                Nestled at the doorstep of Kanha's pristine wilderness, Wildmark
                Resort offers the perfect blend of comfort and adventure. Our
                colonial-style cottages, surrounded by lush gardens, provide a
                serene retreat after exhilarating safari experiences.
            </p>
        </div>

        <!-- 4 Cards Grid - All Horizontal -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <!-- Card 1: Suite and Executive Rooms -->
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="icon-wrapper">
                    <i class="fas fa-crown"></i>
                </div>
                <h4>Suite & Executive Rooms</h4>
                <p>
                    We provide you 2 executive rooms, and 2 suite rooms with living
                    area and private balcony facility.
                </p>
            </div>

            <!-- Card 2: Luxury Cottage -->
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="icon-wrapper">
                    <i class="fas fa-mountain"></i>
                </div>
                <h4>Luxury Cottage</h4>
                <p>
                    Enjoy the indoor private swimming pool in the luxury cottage for
                    more connectedness with nature.
                </p>
            </div>

            <!-- Card 3: Lawn View -->
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="icon-wrapper">
                    <i class="fas fa-tree"></i>
                </div>
                <h4>Lawn View</h4>
                <p>
                    Without compromising nature view, we provide you the luxury
                    amenity with 3 lawn view and super deluxe rooms.
                </p>
            </div>

            <!-- Card 4: Family Suite -->
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="icon-wrapper">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Family Suite</h4>
                <p>
                    A more guaranteed connecting room with your parents is available
                    to accommodate in King size bed and bathrooms for an entire family.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Kanha Section -->
<section class="py-0 bg-black roots-section overflow-hidden">
    <div class="w-full">
        <div class="grid lg:grid-cols-2">
            <div class="relative h-[400px] md:h-[600px] roots-image" data-aos="fade-right" data-aos-duration="1200">
                <img src="images/home.webp" alt="Kanha Tiger" class="w-full h-full object-cover" />
            </div>

            <div class="bg-stone-700 flex items-center px-6 md:px-12 lg:px-12 py-12 md:py-12 roots-content"
                data-aos="fade-left" data-aos-duration="1200">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif mb-6 md:mb-8 leading-tight" data-aos="fade-up"
                        data-aos-delay="300">
                        The Jewel of Indian Wildlife
                    </h2>
                    <p class="text-sm md:text-base text-gray-200 mb-6 md:mb-4 leading-relaxed text-justify"
                        data-aos="fade-up" data-aos-delay="400">
                        Welcome to the wild wonders of Kanha Kisli Tiger Reserve where
                        every turn holds the promise of adventure! At the heart of your
                        journey lies the thrilling tiger safari, a chance to explore
                        four distinct zones: Kanha, Kisli, Mukki & Sarhi.
                    </p>
                    <p class="text-sm md:text-base text-gray-200 mb-6 md:mb-10 leading-relaxed text-justify"
                        data-aos="fade-up" data-aos-delay="400">
                        First up, let’s venture into the Kanha Core Zone, a realm of
                        open meadows and bamboo forests where Tigress Neelam rules the
                        land. Known affectionately as the Mataram of Kanha Zone, she’s
                        joined by her fierce companions Sunaina, Mohini, and Neelima.
                        Keep your camera ready for sightings of the regal Barahsingha
                        and elegant black bucks, adding to the excitement of your
                        safari.
                    </p>
                    <div class="flex gap-3 md:gap-4" data-aos="fade-up" data-aos-delay="500">
                        <a href="kanha.php"
                            class="border border-white hover:bg-white hover:text-black text-white px-6 md:px-8 py-2.5 md:py-3 transition font-light w-fit text-sm md:text-base inline-block text-center">
                            Learn About Kanha
                        </a>
                        <a href="contact.php"
                            class="bg-amber-600 hover:bg-amber-700 text-white px-6 md:px-8 py-2.5 md:py-3 transition font-light w-fit text-sm md:text-base inline-block text-center">
                            Safari Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section - Google Maps Style - FIXED -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900 testimonial-section overflow-hidden">
    <div class="w-full max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8 md:mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-serif mb-6">Guest Reviews</h2>
            <div class="flex flex-col md:flex-row items-center justify-center gap-3 md:gap-4 mb-4">
                <span class="text-5xl md:text-6xl font-bold text-white">4.8</span>
                <div class="text-center md:text-left">
                    <div class="flex text-amber-400 text-2xl md:text-3xl mb-1 justify-center md:justify-start">
                        ★★★★★
                    </div>
                    <p class="text-gray-400 text-sm md:text-base">
                        Based on 156 reviews
                    </p>
                </div>
            </div>
        </div>

        <!-- Carousel Container -->
        <div class="relative px-8 md:px-12" data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-hidden rounded-lg">
                <div class="testimonial-carousel flex transition-transform duration-500 ease-in-out"
                    id="testimonialCarousel">
                    <!-- Review Card 1 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">
                                    D
                                </div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg text-gray-900">
                                        Divya Lalwani
                                    </h3>
                                    <p class="text-gray-500 text-xs md:text-sm">
                                        3 weeks ago
                                    </p>
                                </div>
                            </div>
                            <div class="flex text-amber-400 text-lg mb-3">★★★★★</div>
                            <p class="text-gray-700 text-sm md:text-base leading-relaxed flex-grow">
                                Best resort at Kanha near Khatia Gate! The room was very
                                nice and food was also delicious. Staff was very competitive
                                and polite. Highly recommended for families visiting Kanha
                                National Park.
                            </p>
                        </div>
                    </div>

                    <!-- Review Card 2 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">
                                    V
                                </div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg text-gray-900">
                                        Vivek Kumar
                                    </h3>
                                    <p class="text-gray-500 text-xs md:text-sm">
                                        1 month ago
                                    </p>
                                </div>
                            </div>
                            <div class="flex text-amber-400 text-lg mb-3">★★★★★</div>
                            <p class="text-gray-700 text-sm md:text-base leading-relaxed flex-grow">
                                Wild Mark Resort is perfect for family, couples, solo
                                travelers and business meetings. Excellent stay, amazing
                                food at this price is unbelievable. Room was also very neat
                                and clean.
                            </p>
                        </div>
                    </div>

                    <!-- Review Card 3 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">
                                    U
                                </div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg text-gray-900">
                                        Utsav Sharma
                                    </h3>
                                    <p class="text-gray-500 text-xs md:text-sm">
                                        2 months ago
                                    </p>
                                </div>
                            </div>
                            <div class="flex text-amber-400 text-lg mb-3">★★★★★</div>
                            <p class="text-gray-700 text-sm md:text-base leading-relaxed flex-grow">
                                Great property. Should be visited if anyone is planning to
                                visit Kanha National Park. Big lawn, great service,
                                everything was nice. The proximity to the park is
                                unbeatable!
                            </p>
                        </div>
                    </div>

                    <!-- Review Card 4 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">
                                    S
                                </div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg text-gray-900">
                                        Sneha Patel
                                    </h3>
                                    <p class="text-gray-500 text-xs md:text-sm">
                                        2 months ago
                                    </p>
                                </div>
                            </div>
                            <div class="flex text-amber-400 text-lg mb-3">★★★★★</div>
                            <p class="text-gray-700 text-sm md:text-base leading-relaxed flex-grow">
                                Absolutely wonderful experience! The staff went above and
                                beyond to make our honeymoon special. The private sit-out in
                                our room was perfect for morning coffee.
                            </p>
                        </div>
                    </div>

                    <!-- Review Card 5 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-red-400 to-rose-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">
                                    R
                                </div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg text-gray-900">
                                        Rajesh Mehta
                                    </h3>
                                    <p class="text-gray-500 text-xs md:text-sm">
                                        3 months ago
                                    </p>
                                </div>
                            </div>
                            <div class="flex text-amber-400 text-lg mb-3">★★★★★</div>
                            <p class="text-gray-700 text-sm md:text-base leading-relaxed flex-grow">
                                The resort exceeded all expectations! Clean rooms, delicious
                                food, and the swimming pool was a great way to relax after
                                safari. Pet-friendly policy was a bonus!
                            </p>
                        </div>
                    </div>

                    <!-- Review Card 6 -->
                    <div class="testimonial-card w-full md:w-1/3 flex-shrink-0 px-3 md:px-4">
                        <div class="bg-white text-gray-900 rounded-xl p-5 md:p-6 shadow-xl h-full flex flex-col">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center text-white font-bold text-xl md:text-2xl mr-3 flex-shrink-0 shadow-md">
                                    A
                                </div>
                                <div>
                                    <h3 class="font-bold text-base md:text-lg text-gray-900">
                                        Ananya Singh
                                    </h3>
                                    <p class="text-gray-500 text-xs md:text-sm">
                                        4 months ago
                                    </p>
                                </div>
                            </div>
                            <div class="flex text-amber-400 text-lg mb-3">★★★★★</div>
                            <p class="text-gray-700 text-sm md:text-base leading-relaxed flex-grow">
                                Perfect location for Kanha safari! Walking distance to the
                                park entrance. The colonial architecture is beautiful and
                                the gardens are well maintained. Food quality is
                                exceptional!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-white text-gray-900 w-10 h-10 md:w-12 md:h-12 rounded-full shadow-2xl flex items-center justify-center hover:bg-gray-100 transition-all duration-300 hover:scale-110 z-20"
                onclick="prevTestimonial()" aria-label="Previous reviews">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-white text-gray-900 w-10 h-10 md:w-12 md:h-12 rounded-full shadow-2xl flex items-center justify-center hover:bg-gray-100 transition-all duration-300 hover:scale-110 z-20"
                onclick="nextTestimonial()" aria-label="Next reviews">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Dots Indicator -->
        <div class="flex justify-center mt-8 md:mt-10 gap-2.5" id="testimonialDots">
            <button
                class="testimonial-nav-dot w-3 h-3 rounded-full bg-amber-500 transition-all duration-300 hover:scale-125"
                onclick="goToTestimonialSet(0)"></button>
            <button
                class="testimonial-nav-dot w-3 h-3 rounded-full bg-gray-400 transition-all duration-300 hover:scale-125"
                onclick="goToTestimonialSet(1)"></button>
            <button
                class="testimonial-nav-dot w-3 h-3 rounded-full bg-gray-400 transition-all duration-300 hover:scale-125"
                onclick="goToTestimonialSet(2)"></button>
            <button
                class="testimonial-nav-dot w-3 h-3 rounded-full bg-gray-400 transition-all duration-300 hover:scale-125"
                onclick="goToTestimonialSet(3)"></button>
        </div>

        <!-- View All Reviews Button -->
        <div class="text-center mt-8 md:mt-10">
            <a href="https://www.google.com/maps/place/Wild+Mark+Resort,+Kanha" target="_blank"
                class="inline-block border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 md:px-10 py-3 md:py-3.5 rounded-full transition-all duration-300 text-sm md:text-base font-semibold hover:scale-105 shadow-lg">
                View All Reviews on Google
            </a>
        </div>
    </div>
</section>

<!-- Popular Tour Package Section - UPDATED CARD DESIGN -->
<section id="destinations" class="py-12 md:py-20 px-4 md:px-6 bg-black destinations-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <!-- Header -->
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
                BIODIVERSITY • CONSERVATION • NATURE
            </p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in"
                data-aos-duration="1000">
                Popular Tour Package
            </h2>
            <p class="text-sm md:text-base text-gray-300 max-w-5xl mx-auto mb-2 md:mb-3 leading-relaxed"
                data-aos="fade-up" data-aos-delay="200">
                Choose from our curated safari packages designed to give you the
                ultimate Kanha wildlife experience.
            </p>
        </div>

        <!-- Tour Package Cards Grid - 4 Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Kanha Holiday Tour Package -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <!-- Image Section (Top Half) -->
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="images/card1.webp" alt="Kanha Holiday Tour Package"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>

                    <!-- Popular Badge -->
                    <div
                        class="absolute top-3 left-3 bg-amber-500 text-black px-3 py-1 rounded-full text-xs font-bold tracking-wider">
                        Popular
                    </div>

                    <!-- Rating Badge -->
                    <div
                        class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star text-amber-400"></i>
                        <span>5</span>
                    </div>
                </div>

                <!-- Content Section (Bottom Half) -->
                <div class="bg-neutral-900 p-5 rounded-b-2xl h-auto flex flex-col">
                    <!-- Package Title -->
                    <h3 class="text-lg font-serif font-bold mb-3 text-white leading-tight">
                        Kanha Tour Package
                    </h3>

                    <!-- Package Info Icons -->
                    <div class="flex items-center gap-3 mb-3 text-xs text-gray-400">
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Kanha</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-clock"></i>
                            <span>1N/2D</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-binoculars"></i>
                            <span>1 Safari</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-xs text-gray-400 leading-relaxed flex-grow mb-4">
                        Experience the thrill of nature with our Kanha Holiday Tour
                        Package, offering 1 Night / 2 Days stay and 1 exciting jungle...
                    </p>

                    <!-- View Details Button -->
                    <a href="Kanha-Tour-Package.php"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-amber-400 transition-colors group/btn mt-auto">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2: Kanha Safari Tour Package -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="images/card2.webp" alt="Kanha Safari Tour Package"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>

                    <div
                        class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star text-amber-400"></i>
                        <span>5</span>
                    </div>
                </div>

                <div class="bg-neutral-900 p-5 rounded-b-2xl h-auto flex flex-col">
                    <h3 class="text-lg font-serif font-bold mb-3 text-white leading-tight">
                        Kanha Safari Tour Package
                    </h3>

                    <div class="flex items-center gap-3 mb-3 text-xs text-gray-400">
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Kanha</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-clock"></i>
                            <span>2N/3D</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-binoculars"></i>
                            <span>2 Safaris</span>
                        </div>
                    </div>

                    <p class="text-xs text-gray-400 leading-relaxed flex-grow mb-4">
                        Discover the beauty of Kanha with 2 Nights / 3 Days of
                        adventure, including 2 exciting jungle safaris perfect for
                        nature lovers.
                    </p>

                    <a href="Kanha-Safari-Tour-Package.php"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-amber-400 transition-colors group/btn mt-auto">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3: Kanha Kisli Tour Package -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="images/home3.webp" alt="Kanha Kisli Tour Package"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>

                    <div
                        class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star text-amber-400"></i>
                        <span>5</span>
                    </div>
                </div>

                <div class="bg-neutral-900 p-5 rounded-b-2xl h-auto flex flex-col">
                    <h3 class="text-lg font-serif font-bold mb-3 text-white leading-tight">
                        Kanha Kisli Tour Package
                    </h3>

                    <div class="flex items-center gap-3 mb-3 text-xs text-gray-400">
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Kanha</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-clock"></i>
                            <span>2N/3D</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-binoculars"></i>
                            <span>4 Safaris</span>
                        </div>
                    </div>

                    <p class="text-xs text-gray-400 leading-relaxed flex-grow mb-4">
                        This 2 Nights / 3 Days package includes 4 exciting jungle
                        safaris, giving you a chance to see amazing wildlife and enjoy
                        the...
                    </p>

                    <a href="Kanha-Kisli-Tour-Package.php"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-amber-400 transition-colors group/btn mt-auto">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4: Kanha Tiger Safari Package -->
            <div class="tour-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="relative h-[240px] overflow-hidden rounded-t-2xl">
                    <img src="images/home4.webp" alt="Kanha Tiger Safari Package"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>

                    <div
                        class="absolute top-3 left-3 bg-amber-500 text-black px-3 py-1 rounded-full text-xs font-bold tracking-wider">
                        Popular
                    </div>

                    <div
                        class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white px-2.5 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                        <i class="fas fa-star text-amber-400"></i>
                        <span>5</span>
                    </div>
                </div>

                <div class="bg-neutral-900 p-5 rounded-b-2xl h-auto flex flex-col">
                    <h3 class="text-lg font-serif font-bold mb-3 text-white leading-tight">
                        Kanha Tiger Safari Package
                    </h3>

                    <div class="flex items-center gap-3 mb-3 text-xs text-gray-400">
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Kanha</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-clock"></i>
                            <span>3N/4D</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-binoculars"></i>
                            <span>6 Safaris</span>
                        </div>
                    </div>

                    <p class="text-xs text-gray-400 leading-relaxed flex-grow mb-4">
                        Experience the thrill with 3 Nights / 4 Days package including 6
                        exciting jungle safaris to explore Kanha National Park and
                        spot...
                    </p>

                    <a href="Kanha-Tiger-Safari-Tour-Package.php"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-amber-400 transition-colors group/btn mt-auto">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Testimonials - YouTube Shorts Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900 youtube-testimonials-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <!-- Header -->
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">
                REAL EXPERIENCES • HAPPY GUESTS • GENUINE REVIEWS
            </p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in"
                data-aos-duration="1000">
                Guest Testimonials
            </h2>
        </div>

        <!-- YouTube Shorts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

            <!-- Video Card 1 -->
            <div class="youtube-shorts-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div
                    class="relative bg-neutral-800 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/20 group-hover:-translate-y-2">
                    <!-- Video Embed Container - FIXED -->
                    <div class="relative w-full" style="padding-bottom: 177.78%; /* 9:16 aspect ratio */">
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/LKek7gdP15A" title="Guest Testimonial 1" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                    <!-- Guest Info -->
                    <div class="p-4 bg-gradient-to-t from-neutral-900 to-neutral-800">
                        <p class="text-amber-500 text-xs font-semibold mb-1">VERIFIED GUEST</p>
                        <p class="text-white text-sm">Amazing wildlife experience!</p>
                    </div>
                </div>
            </div>

            <!-- Video Card 2 -->
            <div class="youtube-shorts-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div
                    class="relative bg-neutral-800 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/20 group-hover:-translate-y-2">
                    <div class="relative w-full" style="padding-bottom: 177.78%;">
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/dMn3NAYZuQ0" title="Guest Testimonial 2" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                    <div class="p-4 bg-gradient-to-t from-neutral-900 to-neutral-800">
                        <p class="text-amber-500 text-xs font-semibold mb-1">VERIFIED GUEST</p>
                        <p class="text-white text-sm">Perfect resort near Khatia Gate!</p>
                    </div>
                </div>
            </div>

            <!-- Video Card 3 -->
            <div class="youtube-shorts-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div
                    class="relative bg-neutral-800 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/20 group-hover:-translate-y-2">
                    <div class="relative w-full" style="padding-bottom: 177.78%;">
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/IU16dm75W-Y" title="Guest Testimonial 3" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                    <div class="p-4 bg-gradient-to-t from-neutral-900 to-neutral-800">
                        <p class="text-amber-500 text-xs font-semibold mb-1">VERIFIED GUEST</p>
                        <p class="text-white text-sm">Unforgettable jungle safari!</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<!-- Location & Contact Section - Redesigned -->
<section class="location-contact-section bg-black px-0 md:px-12 lg:px-12 overflow-hidden">
    <!-- CONTACT US Section -->
    <div class="grid lg:grid-cols-2">
        <!-- Left Side - Image (Reversed Order) -->
        <div class="relative h-[400px] md:h-[600px] lg:h-auto order-2 lg:order-1" data-aos="fade-right"
            data-aos-duration="1000">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.997060104769!2d80.50924557424511!3d22.31595094232998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1764241282013!5m2!1sen!2sin"
                width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
        </div>

        <!-- Right Side - Content (Reversed Order) -->
        <div class="bg-neutral-800 flex items-center px-4 md:px-4 lg:px-12 py-12 md:py-12 order-1 lg:order-2"
            data-aos="fade-left" data-aos-duration="1000">
            <div class="max-w-xl w-full">
                <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light">
                    RESERVATIONS & INQUIRIES
                </p>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6 md:mb-8 leading-tight">
                    Contact Us
                </h2>

                <!-- Phone -->
                <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start gap-3 md:gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 bg-amber-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-amber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-base md:text-lg mb-2">
                                Phone / WhatsApp
                            </h3>
                            <p class="text-amber-400 text-lg md:text-xl font-bold mb-1">
                                +91 8830996719
                            </p>

                            <a href="tel: +91 8830996719"
                                class="inline-block text-xs md:text-sm text-amber-400 hover:text-amber-300 transition">
                                Click to Call →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start gap-3 md:gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 bg-amber-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-amber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-base md:text-lg mb-2">
                                Email Address
                            </h3>
                            <p class="text-amber-400 text-sm md:text-base font-semibold mb-1">
                                kanhawildmark@gmail.com
                            </p>
                            <a href="mailto:kanhawildmark@gmail.com"
                                class="inline-block text-xs md:text-sm text-amber-400 hover:text-amber-300 transition mt-2">
                                Send Email →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-start gap-3 md:gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 bg-amber-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-amber-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-base md:text-lg mb-2">
                                Resort Address
                            </h3>
                            <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                                Bungalow No. 8, Rajlaxmi Apartment Near Bhende Layout,
                                Pannase Layout, Nagpur – 440022.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Book Now Button -->
                <div class="pt-2 md:pt-4" data-aos="fade-up" data-aos-delay="700">
                    <a href="contact.php"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-600 to-orange-600 hover:from-amber-700 hover:to-orange-700 text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg transition group shadow-lg text-sm md:text-base">
                        <svg class="w-4 h-4 md:w-5 md:h-5 group-hover:scale-110 transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-bold tracking-wider">BOOK NOW</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <!-- Header -->
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

        <!-- Awards Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">

            <!-- Award Card 1 - 2020 -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials1.png  " alt="TripAdvisor Travellers' Choice Award 2020"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <!-- Award Card 2 - 2021 -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <!-- Award Card 3 - 2022 -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div
                    class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022"
                        class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>

            <!-- Award Card 4 - 2025 (Green Background) -->
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                style="background-color: #39DCA1;border-radius: 9px;">
                <div
                    class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
                        class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>

        </div>

    </div>
</section>
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
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
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in
                            Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National
                                Park, offering quick and easy access to jungle safaris.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort
                            booking?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers
                                rich wildlife sightings and has several good resorts like Wildmark Resort nearby to
                                Khatiya Gate.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters),
                                making it ideal for early morning &amp; evening safaris.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari
                            bookings?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to
                                its location and safari assistance services.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort
                            stay?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari
                                bookings together.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What types of rooms are available at Wildmark Resort
                            Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort offers comfortable cottages and well furnished rooms suitable for
                                couples, families, and groups. The resort is Pet friendly &amp; has provisions for
                                differently &amp; specially abled guests with wheel chair access inside the resort
                                premises.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark
                            Resort?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the
                                selected plan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate
                            Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                The best time is from October to June when Kanha National Park is open for safaris.
                                During monsoon season buffer zone safaris are available.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya
                            Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, advance booking is strongly recommended during weekends, holidays, and peak safari
                                season.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
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
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior
                                citizens. The resort also has wheelchair access for differently &amp; specially abled
                                guests.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 12 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop
                            services?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Pickup and drop services from nearby railway stations or airports can be arranged upon
                                request in advance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 13 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha
                            resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Wildmark Resort offers good value for money with comfortable stays and quality services
                                near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food
                                options.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 14 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and
                                wildlife enthusiasts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 15 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view
                            rooms?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as
                                it is constructed inside the Khatiya Buffer zone.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 16 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
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
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What documents are required at check-in for Kanha
                            resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
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
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle
                            safari?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits
                                arranged by the resort.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 19 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near
                            Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay
                                zone near Khatiya Gate.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 20 -->
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How can I get the best price for Kanha resort booking at
                            Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 text-amber-500 flex-shrink-0 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                Booking early, choosing weekday stays, and opting for stay plus safari packages usually
                                gives the best price.
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- END RIGHT COLUMN -->

        </div><!-- END FAQ GRID -->
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
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path
            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
</a>

<!-- AOS Init -->

<script>
// ============================================================
// SINGLE CLEAN SCRIPT — SABHI CONFLICTS REMOVE
// ============================================================

// ===== SAFARI IMAGE CAROUSEL =====
var mainSlide = 0;
var mainTotal = 3;

function updateCarousel() {
    var el = document.getElementById('carousel');
    var dots = document.querySelectorAll('.carousel-dot');
    if (!el) return;
    el.style.transform = 'translateX(-' + (mainSlide * 100) + '%)';
    dots.forEach(function(d, i) {
        d.classList.toggle('active', i === mainSlide);
    });
}

function nextSlide() {
    mainSlide = (mainSlide + 1) % mainTotal;
    updateCarousel();
}

function prevSlide() {
    mainSlide = (mainSlide - 1 + mainTotal) % mainTotal;
    updateCarousel();
}

function goToSlide(i) {
    mainSlide = i;
    updateCarousel();
}

// ===== TESTIMONIAL CAROUSEL =====
var tSlide = 0;

function getTotalSets() {
    return window.innerWidth >= 768 ? 2 : 6;
}

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
        dot.classList.toggle('bg-amber-500', i === tSlide);
        dot.classList.toggle('bg-gray-400', i !== tSlide);
    });
}

function nextTestimonial() {
    tSlide = (tSlide + 1) % getTotalSets();
    updateTestimonialCarousel();
}

function prevTestimonial() {
    tSlide = (tSlide - 1 + getTotalSets()) % getTotalSets();
    updateTestimonialCarousel();
}

function goToTestimonialSet(i) {
    tSlide = i;
    updateTestimonialCarousel();
}

// ===== HERO CAROUSEL =====
(function() {
    var slides = document.querySelectorAll('.hero-slide');
    var current = 0;
    if (!slides.length) return;

    function show(index) {
        slides.forEach(function(s) {
            s.classList.remove('active');
            var img = s.querySelector('.hero-image');
            if (img) img.style.transform = 'scale(1)';
        });
        slides[index].classList.add('active');
    }

    setInterval(function() {
        current = (current + 1) % slides.length;
        show(current);
    }, 5000);
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
    if (event.target.id === 'specialOfferPopup') {
        toggleSpecialOfferPopup();
    }
}

// ===== FAQ RESIZE =====
function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}

// ===== INIT ON DOM READY =====
document.addEventListener('DOMContentLoaded', function() {

    // Prevent horizontal scroll
    document.body.style.overflowX = 'hidden';
    document.documentElement.style.overflowX = 'hidden';

    // Safari carousel init
    updateCarousel();

    // Autoplay safari carousel
    var autoplay = setInterval(nextSlide, 5000);
    var carouselEl = document.getElementById('carousel');
    if (carouselEl) {
        carouselEl.addEventListener('mouseenter', function() { clearInterval(autoplay); });
        carouselEl.addEventListener('mouseleave', function() { autoplay = setInterval(nextSlide, 5000); });

        // Touch swipe
        var tx = 0;
        carouselEl.addEventListener('touchstart', function(e) { tx = e.changedTouches[0].screenX; });
        carouselEl.addEventListener('touchend', function(e) {
            var diff = tx - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) { diff > 0 ? nextSlide() : prevSlide(); }
        });
    }

    // Testimonial carousel init + autoplay
    setTimeout(function() {
        updateTestimonialCarousel();
        setInterval(nextTestimonial, 6000);
    }, 200);

    window.addEventListener('resize', function() {
        tSlide = 0;
        updateTestimonialCarousel();
        handleFaqResize();
    });

    // FAQ resize init
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
        roomTabBtns.forEach(function(btn) {
            btn.classList.toggle('active', btn.getAttribute('data-tab') === tabName);
        });
        roomPanels.forEach(function(panel) {
            panel.classList.toggle('hidden', panel.getAttribute('data-tab') !== tabName);
        });
    }

    roomTabBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            showRoomTab(this.getAttribute('data-tab'));
        });
    });

    if (roomTabBtns.length > 0) {
        showRoomTab(roomTabBtns[0].getAttribute('data-tab'));
    }

    // Video mute toggle
    var vid = document.getElementById('conservationVideo');
    var muteBtn = document.getElementById('muteToggle');
    var muteIc = document.getElementById('muteIcon');
    var soundIc = document.getElementById('soundIcon');

    if (vid) { vid.muted = true; vid.play().catch(function(){}); }

    if (muteBtn && vid) {
        muteBtn.addEventListener('click', function() {
            vid.muted = !vid.muted;
            if (!vid.muted) {
                vid.removeAttribute('muted');
                vid.volume = 1.0;
                vid.play().catch(function(){});
            }
            if (muteIc) muteIc.classList.toggle('hidden', !vid.muted);
            if (soundIc) soundIc.classList.toggle('hidden', vid.muted);
        });
    }

    // Mobile menu
    var mobileMenuBtn = document.getElementById('mobileMenuBtn');
    var mobileMenu = document.getElementById('mobileMenu');
    var mobilePackagesBtn = document.getElementById('mobilePackagesBtn');
    var mobilePackagesDropdown = document.getElementById('mobilePackagesDropdown');
    var packagesArrow = document.getElementById('packagesArrow');
    var mobileRoomsBtn = document.getElementById('mobileRoomsBtn');
    var mobileRoomsDropdown = document.getElementById('mobileRoomsDropdown');
    var roomsArrow = document.getElementById('roomsArrow');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('active');
        });
    }

    if (mobilePackagesBtn && mobilePackagesDropdown) {
        mobilePackagesBtn.addEventListener('click', function(e) {
            e.preventDefault(); e.stopPropagation();
            mobilePackagesDropdown.classList.toggle('active');
            if (packagesArrow) packagesArrow.style.transform = mobilePackagesDropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    }

    if (mobileRoomsBtn && mobileRoomsDropdown) {
        mobileRoomsBtn.addEventListener('click', function(e) {
            e.preventDefault(); e.stopPropagation();
            mobileRoomsDropdown.classList.toggle('active');
            if (roomsArrow) roomsArrow.style.transform = mobileRoomsDropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    }

    document.addEventListener('click', function(e) {
        if (mobileMenu && mobileMenuBtn) {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileMenu.classList.remove('active');
                if (mobilePackagesDropdown) mobilePackagesDropdown.classList.remove('active');
                if (packagesArrow) packagesArrow.style.transform = 'rotate(0deg)';
                if (mobileRoomsDropdown) mobileRoomsDropdown.classList.remove('active');
                if (roomsArrow) roomsArrow.style.transform = 'rotate(0deg)';
            }
        }
    });

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
// Include footer
include 'includes/footer.php'; 
?>