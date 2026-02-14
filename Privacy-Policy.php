
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
  