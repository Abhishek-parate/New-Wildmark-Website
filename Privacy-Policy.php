
<?php 
// Set page-specific title
$pageTitle = "Privacy Policy - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>

      section {
        overflow-x: hidden;
      }

      /* Hero section */
      .hero-section {
        position: relative;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)),
          url("https://images.unsplash.com/photo-1602491453631-e2a5ad90a631?w=1600");
        background-size: cover;
        background-position: center;
      }

      /* Promotion section */
      .promotion-section {
        position: relative;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
          url("https://images.unsplash.com/photo-1551918120-9739cb430c6d?w=1600");
        background-size: cover;
        background-position: center;
      }

      @media (max-width: 768px) {
        body {
          font-size: 14px;
        }

        h2 {
          font-size: 1.5rem;
        }

        h3 {
          font-size: 1.25rem;
        }

        p,
        span,
        a,
        li {
          word-wrap: break-word;
          overflow-wrap: break-word;
        }
      }
    </style>

    <!-- Spacer -->
    <div class="h-[60px] md:h-[80px]"></div>

    <!-- Hero Section -->
    <section
      class="hero-section relative h-[40vh] md:h-[50vh] flex items-center justify-center"
    >
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative text-center px-4 z-10" data-aos="fade-up">
        <h1
          class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold text-white"
        >
          Privacy Policy
        </h1>
      </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="py-12 md:py-16 bg-neutral-900">
      <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div
          class="bg-black rounded-lg shadow-2xl p-6 md:p-10 lg:p-12 border border-neutral-800"
        >
          <!-- Section 1 -->
          <div class="mb-8" data-aos="fade-up">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              1. Information We Collect
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Personal Identifiers:</strong>
                  Name, postal address, email address, telephone number, ID
                  copies when required.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Booking & Payment Data:</strong>
                  Reservation details, payment method, billing address.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Usage & Technical Data:</strong>
                  IP address, browser type, device identifiers, pages visited,
                  cookies.</span
                >
              </li>
            </ul>
          </div>

          <!-- Section 2 -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="100">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              2. How We Use Your Information
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">To Process Bookings:</strong>
                  Handle reservations, coordinate itineraries, obtain wildlife
                  permits, issue invoices.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">To Communicate:</strong> Send
                  booking confirmations, itinerary changes, special offers,
                  respond to inquiries.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">To Improve Services:</strong>
                  Analyze site usage and feedback to enhance itineraries,
                  website, and marketing.</span
                >
              </li>
            </ul>
          </div>

          <!-- Section 3 -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="200">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              3. Data Sharing & Disclosure
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white"
                    >Affiliates & Service Providers:</strong
                  >
                  Wildlife lodges, park authorities, payment processors,
                  transfer operators.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Legal Compliance:</strong>
                  Disclose to comply with court orders, legal obligations, or
                  protect rights and safety.</span
                >
              </li>
            </ul>
          </div>

          <!-- Section 4 -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="300">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              4. Cookies & Tracking
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  >We use cookies and similar beacons to remember preferences,
                  tailor content, and compile aggregate statistics.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  >You may disable cookies via browser settings, some features
                  may not function properly if you do.</span
                >
              </li>
            </ul>
          </div>

          <!-- Section 5 -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="400">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              5. Security Measures
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Encryption:</strong> SSL
                  encryption for sensitive online transactions.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Access Controls:</strong>
                  Databases and logs restricted to authorized personnel.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Data Retention:</strong> Personal
                  data kept only as long as necessary, then securely deleted or
                  anonymized.</span
                >
              </li>
            </ul>
          </div>

          <!-- Section 6 -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="500">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              6. Your Rights & Choices
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Access & Correction:</strong>
                  Request a copy or corrections by contacting us.</span
                >
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  ><strong class="text-white">Opt-Out:</strong> Unsubscribe from
                  emails via link or email request.</span
                >
              </li>
            </ul>
          </div>

          <!-- Section 7 -->
          <div class="mb-0" data-aos="fade-up" data-aos-delay="600">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              7. Consent & Policy Updates
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span
                  >By using the site, you consent to this policy. Changes will
                  be posted with an updated revision date.</span
                >
              </li>
            </ul>
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
        <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"  style="background-color: #39DCA1;border-radius: 9px;">
          <div
            class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
            <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025"
              class="w-full h-full object-cover rounded-2xl award-image">
          </div>
        </div>

      </div>

    </div>
  </section>
<!-- FAQs Section - Privacy Policy -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        YOUR PRIVACY MATTERS
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Privacy Policy FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Common questions about how we protect and handle your personal information
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">
      
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What personal information do you collect from guests?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We collect the following types of information to process your booking and provide our services:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Personal Identifiers:</strong> Your name, postal address, email address, telephone number, and ID copies when required for permits</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Booking Details:</strong> Reservation information, payment method, billing address, and travel preferences</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Technical Data:</strong> IP address, browser type, device identifiers, pages visited, and cookies for website functionality</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              All information collected is used solely for booking purposes and improving your experience at Wildmark Resort Kanha.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How do you use my personal information?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We use your information for the following purposes:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Process Bookings:</strong> Handle reservations, coordinate safari itineraries, obtain wildlife permits from forest authorities, and issue invoices</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Communication:</strong> Send booking confirmations, itinerary updates, special offers, and respond to your inquiries</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Service Improvement:</strong> Analyze website usage and guest feedback to enhance our packages, facilities, and overall guest experience</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Marketing:</strong> Send you updates about new packages, seasonal offers, and wildlife experiences (you can opt-out anytime)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Do you share my information with third parties?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We share your information only when necessary to provide our services:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Service Providers:</strong> Wildlife park authorities for safari permits, payment processors for transactions, and transfer operators for airport pickups</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Legal Requirements:</strong> When required by law, court orders, or to protect our rights and ensure guest safety</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Never for Sale:</strong> We do NOT sell, rent, or trade your personal information to any third parties for marketing purposes</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              All third-party service providers are contractually required to protect your data and use it only for the specified purposes.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are cookies and how do you use them?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Cookies are small text files stored on your device that help us improve your browsing experience:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Essential Cookies:</strong> Remember your preferences, login status, and booking cart items</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Analytics Cookies:</strong> Help us understand how visitors use our website to improve content and navigation</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Marketing Cookies:</strong> Track which pages you visit to show you relevant offers and packages</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Your Control:</strong> You can disable cookies through your browser settings, though some website features may not work properly</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How do you protect my personal information?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We implement multiple security measures to protect your data:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>SSL Encryption:</strong> All sensitive transactions are encrypted using industry-standard SSL technology</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Access Controls:</strong> Personal data stored in databases is accessible only to authorized personnel who need it for their work</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Secure Servers:</strong> Our servers are protected with firewalls and regular security updates</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Data Retention:</strong> We keep your personal information only as long as necessary, then securely delete or anonymize it</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              While we implement strong security measures, no system is 100% secure. We continuously update our practices to maintain the highest security standards.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What rights do I have regarding my personal data?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              You have several rights regarding your personal information:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Right to Access:</strong> Request a copy of the personal data we hold about you</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Right to Correction:</strong> Ask us to correct any inaccurate or incomplete information</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Right to Deletion:</strong> Request deletion of your data (subject to legal and contractual obligations)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Right to Opt-Out:</strong> Unsubscribe from marketing emails at any time using the unsubscribe link or by contacting us</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Right to Object:</strong> Object to processing of your data for marketing purposes</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              To exercise any of these rights, contact us at <a href="mailto:kanhawildmark@gmail.com" class="text-amber-400 hover:text-amber-300">kanhawildmark@gmail.com</a> or call <a href="tel:9405529731" class="text-amber-400 hover:text-amber-300">+91 9405529731</a>
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How can I opt-out of marketing communications?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              You can stop receiving marketing emails in two easy ways:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Unsubscribe Link:</strong> Click the "Unsubscribe" link at the bottom of any marketing email we send you</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Email Request:</strong> Send us an email at kanhawildmark@gmail.com with "Unsubscribe" in the subject line</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Call Us:</strong> Contact us at +91 9405529731 or +91 7719806444</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Note:</strong> Even if you opt-out of marketing emails, we'll still send you important transactional emails about your bookings, confirmations, and account updates.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">How long do you keep my personal information?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We retain your information based on the following criteria:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Active Bookings:</strong> Throughout your stay and for a reasonable period afterward for customer service purposes</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Financial Records:</strong> As required by tax and accounting laws (typically 7 years)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Marketing Database:</strong> Until you opt-out or request deletion</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>After Retention Period:</strong> Data is securely deleted or anonymized so it can no longer identify you</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              We never keep personal data longer than necessary for the purposes it was collected.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Is my payment information secure?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Yes! We take payment security very seriously:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Encrypted Transactions:</strong> All payment information is transmitted using SSL encryption technology</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Trusted Payment Processors:</strong> We use secure, PCI-compliant payment gateways that meet international security standards</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>No Storage:</strong> We do NOT store your complete credit/debit card details on our servers</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Bank Transfer Option:</strong> Direct bank transfers are available for those who prefer not to use online payment methods</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Your financial data is protected by multiple layers of security throughout the transaction process.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Will this Privacy Policy ever change?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our Privacy Policy may be updated from time to time:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Updates:</strong> We may revise this policy to reflect changes in our practices, legal requirements, or website features</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Notification:</strong> Any changes will be posted on this page with an updated "Last Revised" date</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Material Changes:</strong> For significant changes, we may notify you via email or website announcement</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Your Consent:</strong> By continuing to use our website after updates, you consent to the revised policy</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              We encourage you to review this Privacy Policy periodically to stay informed about how we protect your information.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

 
  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/9405529731" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
  </a>


   
    
    <script>
// FAQ Toggle Functionality
document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const faqItem = button.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('.faq-icon');
    
    // Close all other FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
      if (item !== faqItem) {
        item.querySelector('.faq-answer').style.maxHeight = '0';
        item.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
      }
    });
    
    // Toggle current FAQ
    if (answer.style.maxHeight && answer.style.maxHeight !== '0px') {
      answer.style.maxHeight = '0';
      icon.style.transform = 'rotate(0deg)';
    } else {
      answer.style.maxHeight = answer.scrollHeight + 'px';
      icon.style.transform = 'rotate(180deg)';
    }
  });
});
</script>
<?php 

// Include header
include 'includes/footer.php'; 
?>
  