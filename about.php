<?php 
// Set page-specific title
$pageTitle = "About Us - Wildmark Resort Kanha";

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

    /* IMPROVED DROPDOWN */
    .dropdown {
      position: relative;
    }

    .dropdown:hover .mega-menu,
    .dropdown .mega-menu:hover {
      display: block;
    }

    .mega-menu {
      display: none;
      position: absolute;
      padding-top: 1rem;
      margin-top: -1rem;
    }

    /* Mobile menu */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }

    .mobile-menu.active {
      max-height: 800px;
    }

    /* Mobile Packages Dropdown */
    .mobile-packages-dropdown {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }

    .mobile-packages-dropdown.active {
      max-height: 500px;
    }

    /* Hero Section */
    .hero-banner {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/8-5.png');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 500px;
      margin-bottom: 30px;
    }

    /* Stats Counter Animation */
    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      color: #f59e0b;
    }

    /* Timeline Styling */
    .timeline-item {
      position: relative;
      padding-left: 2rem;
      border-left: 2px solid #f59e0b;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: -8px;
      top: 0;
      width: 14px;
      height: 14px;
      background: #f59e0b;
      border-radius: 50%;
    }


    /* Feature Cards */
    .feature-card {
      transition: all 0.3s ease;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .feature-card:hover {
      transform: translateY(-8px);
      border-color: rgba(245, 158, 11, 0.5);
      box-shadow: 0 20px 40px rgba(245, 158, 11, 0.2);
    }

    .icon-wrapper {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
    }

    .icon-wrapper i {
      font-size: 1.75rem;
      color: #2d5a47;
    }
  </style>


<header class="relative h-[90vh] md:h-[80vh] lg:h-[90vh] flex items-end"
        style="background: url('images/about3.webp') center/cover no-repeat">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>
<!-- About Wildmark Kanha Resort -->
<section class="py-16 md:py-24 bg-[#121212]" style="padding-bottom: 30px;">
  <div class="container mx-auto max-w-6xl px-4 md:px-6">

    <div class="text-center mb-12">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        ABOUT WILDMARK KANHA
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Wildmark Resort, Kanha
      </h2>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left Text -->
      <div class="text-gray-300 text-sm md:text-base leading-relaxed space-y-4" data-aos="fade-right">

        <p>
          Wildmark Resort is an iconic stay located near the famous Khatiya Gate in Kanha Tiger Reserve. The resort is surrounded by the Khatiya Buffer Zone, where visitors can witness the wild marks of wildlife in the mornings and wake up with the melodious calls of birds.
        </p>

        <p>
          The resort is surrounded by tranquil forests and offers guests a choice between Super Deluxe Rooms and Family Rooms, each providing stunning garden views, private sit-outs, and exclusive open shower amenities.
        </p>

        <p>
          The resort is pet-friendly, accessible for differently and specially abled guests with wheelchair support, and features a variety of activities for adventure enthusiasts and wildlife photographers, as well as relaxation options for leisure travelers.
        </p>

        <p>
          Perfect for those in search of a tranquil escape near Kanha Tiger Reserve, Wildmark Kanha Resort ensures comfort, luxury, and convenience — especially for guests planning a tiger safari tour in India.
        </p>

      </div>

      <!-- Right Image -->
      <div data-aos="fade-left">
        <img src="images/about3.webp" alt="Wildmark Resort Kanha"
          class="rounded-2xl shadow-2xl w-full h-[400px] md:h-[500px] object-cover" />
      </div>
    </div>

  </div>
</section>

  <!-- Hero Banner Section -->
  
  <!-- Main About Section -->
  <section class="py-16 md:py-24 bg-[#121212]">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
      <div class="text-center mb-12 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          OUR ESSENCE
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in" data-aos-duration="1000">
          Attachment to a Place is Something We All Feel!
        </h2>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div data-aos="fade-right" data-aos-duration="1000">
          <img src="images/about3.webp" alt="Wildmark Resort" class="rounded-2xl shadow-2xl w-full h-[400px] md:h-[500px] object-cover" />
        </div>
        <div data-aos="fade-left" data-aos-duration="1000">
          <h3 class="text-2xl md:text-3xl font-serif text-amber-100 mb-6">
            A Unique Resort Experience
          </h3>
          <p class="text-sm md:text-base text-gray-300 mb-4 leading-relaxed text-justify">
            Wild Mark Resort is a unique resort that can make you enjoy the wilderness of nature. This is a one-of-a-kind experience to cherish every time in Kanha. The Kanha-Kisli national park is nestled in the Maikal range of Satpuras in Madhya Pradesh.
          </p>
          <p class="text-sm md:text-base text-gray-300 mb-4 leading-relaxed text-justify">
            Spread across the area of 940 square kms, you can see the most beautiful source of nature's inspiration. The Kanha National Park has large varieties of fauna and this is best known for the Barasingha - a deer known as 'the jewel of Kanha'.
          </p>
          <p class="text-sm md:text-base text-gray-300 leading-relaxed text-justify">
            Since 1955, the Kanha tiger reserve is majestically spread across the Satpura range with all the amazing sightings. This pristine wilderness has been a sanctuary for wildlife enthusiasts, photographers, and nature lovers from around the world.
          </p>
        </div>
      </div>

      <!-- Second Content Block -->
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
          <h3 class="text-2xl md:text-3xl font-serif text-amber-100 mb-6">
            Drive to This Dream Place to Discover and Delight
          </h3>
          <p class="text-sm md:text-base text-gray-300 mb-4 leading-relaxed text-justify">
            Wild Mark Resort Accommodation - Wake up to this symphony of nature and wilderness, that can solely cherish an enthusiastic person. This is a place where you can feel relaxed, and can look for more intimate experiences in nature.
          </p>
          <p class="text-sm md:text-base text-gray-300 mb-4 leading-relaxed text-justify">
            A full-on-luxury is what you can expect in our resort booking for Kanha. We provide you a room with fully accommodated space with all the amenities and a blend of premium architecture. With the touch of modern design and space, we give you all the staying facilities with an exciting recreation.
          </p>
          <p class="text-sm md:text-base text-gray-300 leading-relaxed text-justify">
            Wild Mark Kanha resort is one of the magnificent locations for all the nature lovers. Our commitment to excellence ensures that every guest experiences the perfect balance of adventure and comfort during their stay.
          </p>
        </div>
        <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
          <img src="images/about4.webp" alt="Kanha Wildlife" class="rounded-2xl shadow-2xl w-full h-[400px] md:h-[500px] object-cover" />
        </div>
      </div>
    </div>
  </section>

  <!-- Natural Setting Section -->
  <section class="py-8 md:py-12 bg-neutral-900">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
      <div class="text-center mb-12">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          NATURAL SURROUNDINGS
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          In a Natural Setting
        </h2>
      </div>

      <div class="bg-neutral-800 rounded-2xl p-8 md:p-12 shadow-2xl" data-aos="fade-up" data-aos-duration="1000">
        <p class="text-sm md:text-base text-gray-300 mb-6 leading-relaxed text-justify">
          The resort is placed amidst green and lush surroundings, that will cherish upon. Make your stay here in the most refreshing and rejuvenating atmosphere, as this will be an essential gear in your life. The Wild Mark Kanha resort gives a right blend of staying facilities and the most relaxing environment for your friends and family.
        </p>
        <p class="text-sm md:text-base text-gray-300 mb-6 leading-relaxed text-justify">
          Adopt the pace of nature as it will please you and your loved ones with simplicity. A beautiful spectacle of nature can be seen from our Wild Mark Kanha resort, and this is the right way to look into. Our location offers unparalleled views of the surrounding forest, where you can witness the changing colors of the sky during sunrise and sunset.
        </p>
        <p class="text-sm md:text-base text-gray-300 leading-relaxed text-justify">
          Trust our Wild Mark Resort accommodations, where you can't get enough of nature and the stay! Every corner of our resort is designed to bring you closer to the wilderness while ensuring you enjoy all modern comforts and amenities.
        </p>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-16 md:py-24 bg-black">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          OUR EXCELLENCE
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Why Choose Wildmark Resort
        </h2>
        <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
          We offer an unmatched combination of luxury, nature, and authentic wildlife experiences
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        <!-- Feature 1 -->
        <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-wrapper">
            <i class="fas fa-mountain"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Prime Location</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            Located at the doorstep of Kanha National Park, offering easy access to all safari zones and wildlife experiences.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-wrapper">
            <i class="fas fa-bed"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Luxury Accommodation</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            Premium rooms with modern amenities, comfortable bedding, and private sit-outs with stunning garden views.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-wrapper">
            <i class="fas fa-utensils"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Multi-Cuisine Dining</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            Enjoy delicious multi-cuisine meals prepared by expert chefs using fresh, local ingredients in our restaurant.
          </p>
        </div>

        <!-- Feature 4 -->
        <div class="feature-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-wrapper">
            <i class="fas fa-binoculars"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Expert Safari Guidance</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            Professional naturalists and safari booking assistance to maximize your wildlife sighting opportunities.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Journey Timeline Section -->
  <section class="py-16 md:py-24 bg-neutral-900">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
      <div class="text-center mb-12 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          OUR LEGACY
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Our Journey of Excellence
        </h2>
      </div>

      <div class="space-y-8">
        <div class="timeline-item" data-aos="fade-right" data-aos-delay="100">
          <div class="bg-neutral-800 rounded-xl p-6 md:p-8">
            <h4 class="text-xl md:text-2xl font-serif text-amber-500 mb-3">Establishment</h4>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              Wildmark Resort was founded with a vision to create a luxury wilderness retreat that brings guests closer to nature while providing world-class hospitality and comfort.
            </p>
          </div>
        </div>

        <div class="timeline-item" data-aos="fade-right" data-aos-delay="200">
          <div class="bg-neutral-800 rounded-xl p-6 md:p-8">
            <h4 class="text-xl md:text-2xl font-serif text-amber-500 mb-3">Recognition & Awards</h4>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              Over the years, we've been honored with multiple TripAdvisor Travellers' Choice Awards (2020, 2021, 2022, 2025), recognizing our commitment to exceptional guest experiences.
            </p>
          </div>
        </div>

        <div class="timeline-item" data-aos="fade-right" data-aos-delay="300">
          <div class="bg-neutral-800 rounded-xl p-6 md:p-8">
            <h4 class="text-xl md:text-2xl font-serif text-amber-500 mb-3">Conservation Commitment</h4>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              We actively participate in wildlife conservation efforts and sustainable tourism practices, ensuring that future generations can experience Kanha's natural beauty.
            </p>
          </div>
        </div>

        <div class="timeline-item" data-aos="fade-right" data-aos-delay="400">
          <div class="bg-neutral-800 rounded-xl p-6 md:p-8">
            <h4 class="text-xl md:text-2xl font-serif text-amber-500 mb-3">Continuous Innovation</h4>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              We continuously upgrade our facilities and services, incorporating guest feedback and modern amenities while maintaining our connection to nature and traditional hospitality.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 md:py-20 bg-black">
    <div class="container mx-auto max-w-6xl px-4 md:px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-number mb-2">50+</div>
          <p class="text-sm md:text-base text-gray-400 font-light tracking-wider">Years of Conservation</p>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-number mb-2">940</div>
          <p class="text-sm md:text-base text-gray-400 font-light tracking-wider">Square Kms of Reserve</p>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-number mb-2">4.8</div>
          <p class="text-sm md:text-base text-gray-400 font-light tracking-wider">Guest Rating</p>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="stat-number mb-2">4</div>
          <p class="text-sm md:text-base text-gray-400 font-light tracking-wider">Awards Won</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Values Section -->
  <section class="py-16 md:py-24 bg-neutral-900">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
      <div class="text-center mb-12 md:mb-16">
        <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
          WHAT DRIVES US
        </p>
        <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
          Our Core Values
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-neutral-800 rounded-2xl p-8 text-center border border-neutral-700" data-aos="fade-up" data-aos-delay="100">
          <div class="w-16 h-16 bg-amber-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-leaf text-3xl text-amber-500"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Sustainability</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            We are committed to eco-friendly practices, minimizing our environmental footprint while maximizing guest comfort and supporting local conservation efforts.
          </p>
        </div>

        <div class="bg-neutral-800 rounded-2xl p-8 text-center border border-neutral-700" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 bg-amber-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-heart text-3xl text-amber-500"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Hospitality</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            Our guests are family. We provide warm, personalized service that makes every visitor feel welcomed, valued, and cared for throughout their stay.
          </p>
        </div>

        <div class="bg-neutral-800 rounded-2xl p-8 text-center border border-neutral-700" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 bg-amber-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-shield-alt text-3xl text-amber-500"></i>
          </div>
          <h4 class="text-xl font-serif font-bold text-white mb-4">Authenticity</h4>
          <p class="text-sm text-gray-300 leading-relaxed">
            We offer genuine wildlife experiences and stay true to our roots, providing authentic connections with nature and local culture.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="py-16 md:py-20 bg-black">
    <div class="container mx-auto max-w-4xl px-4 md:px-6 text-center">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6" data-aos="fade-up">
        Ready to Experience Wildmark Resort?
      </h2>
      <p class="text-base md:text-lg text-gray-300 mb-8 leading-relaxed max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        Join us for an unforgettable journey into the heart of Kanha's wilderness. Book your stay today and create memories that will last a lifetime.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
        <a href="contact.php" class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg transition font-semibold text-base shadow-lg">
          BOOK YOUR STAY
        </a>
        <a href="home.php#rooms" class="border-2 border-white hover:bg-white hover:text-black text-white px-8 py-3 rounded-lg transition font-semibold text-base">
          EXPLORE ROOMS
        </a>
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
        <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up"
          data-aos-delay="200">
          Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
        </p>
      </div>

      <!-- Awards Grid -->
      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">

        <!-- Award Card 1 - 2020 -->
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div
            class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020"
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
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1;border-radius: 9px;">
          <div
            class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
              class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>

      </div>

    </div>
  </section>
<style>
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
  }
  @media (max-width: 768px) {
    .faq-grid {
      grid-template-columns: 1fr;
    }
  }
  .faq-col {
    display: flex;
    flex-direction: column;
    gap: 14px;
    width: 100%;
    min-width: 0;
  }
</style>

<style>
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
  }
  @media (max-width: 768px) {
    .faq-grid {
      grid-template-columns: 1fr;
    }
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
</style>

<style>
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
</style>

<script>
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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
        <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
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


  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>

  <script>

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) { 
        const href = this.getAttribute("href");
        if (href !== "#" && href !== "#book") {
          e.preventDefault();
          const target = document.querySelector(href);
          if (target) {
            const navHeight = document.querySelector("nav")?.offsetHeight || 100;
            const targetPosition = target.offsetTop - navHeight;
            window.scrollTo({
              top: targetPosition,
              behavior: "smooth",
            });
          }
        }
      });
    });

    // Prevent horizontal scroll
    document.body.style.overflowX = "hidden";
    document.documentElement.style.overflowX = "hidden";
  </script>
  <script>
  // FAQ Accordion Functionality
  document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      const icon = item.querySelector('.faq-icon');
      
      question.addEventListener('click', () => {
        const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
        
        // Close all other FAQs
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            const otherAnswer = otherItem.querySelector('.faq-answer');
            const otherIcon = otherItem.querySelector('.faq-icon');
            otherAnswer.style.maxHeight = '0';
            otherIcon.style.transform = 'rotate(0deg)';
          }
        });
        
        // Toggle current FAQ
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
<?php 
// Include footer
include 'includes/footer.php'; 
?>