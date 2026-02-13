<?php 
// Set page-specific title
$pageTitle = "Terms And Conditions - Wildmark Resort Kanha";

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

      /* Parallax Effect */
      .promotion-section {
        position: relative;
        overflow: hidden;
      }

      .parallax-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 120%;
        background: url('https://images.unsplash.com/photo-1551918120-9739cb430c6d?w=1600');
        background-size: cover;
        background-position: center;
        transform: translateZ(0);
        will-change: transform;
      }

      /* For mobile devices - simpler parallax */
      @media (max-width: 768px) {
        .parallax-bg {
          height: 100%;
        }
        
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
          Terms & Conditions
        </h1>
      </div>
    </section>

    <!-- Terms & Conditions Content -->
    <section class="py-12 md:py-16 bg-neutral-900">
      <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div
          class="bg-black rounded-lg shadow-2xl p-6 md:p-10 lg:p-12 border border-neutral-800"
        >
          
          <!-- Section 1: Booking, Rates & Payment -->
          <div class="mb-8" data-aos="fade-up">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              1. Booking, Rates & Payment
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Rate Validity:</strong> Quoted rates apply for specified dates and occupants; seasonal surcharges may apply.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Advance & Balance:</strong> 100% advance payment is required for jungle safari and resort bookings.</span>
              </li>
            </ul>
          </div>

          <!-- Section 2: Check-In/Out & Transfers -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="100">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              2. Check-In/Out & Transfers
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Check-In:</strong> 2:00 PM. <strong class="text-white">Check-Out:</strong> 11:00 AM. Early check-in/late check-out is subject to availability.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Transfers:</strong> Must be requested at least 24 hours in advance; same-day requests may not be accommodated.</span>
              </li>
            </ul>
          </div>

          <!-- Section 3: Identification Requirements -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="200">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              3. Identification Requirements
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Foreign Nationals:</strong> Most present a valid passport and visa.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Indian Nationals:</strong> Must present a Passport, Driving Licence, Voter ID card, or PAN card.</span>
              </li>
            </ul>
          </div>

          <!-- Section 4: Cancellation & Amendments -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="300">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              4. Cancellation & Amendments
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Jungle Safari Bookings:</strong> Once booked, jungle safaris are non-refundable.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Resort Bookings:</strong></span>
              </li>
            </ul>
            <ul class="space-y-2 text-gray-300 text-sm md:text-base ml-8 mt-2">
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span><strong class="text-white">More than 15 days before arrival:</strong> 25% cancellation charge.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span><strong class="text-white">22-30 days before arrival:</strong> 50% cancellation charge.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span><strong class="text-white">0-21 days before arrival:</strong> 80% cancellation charge.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span><strong class="text-white">7 days or less before arrival:</strong> 100% cancellation charge.</span>
              </li>
            </ul>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base mt-4">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Special Dates:</strong> Bookings during Christmas, New Year, and long weekends are non-refundable.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Amendments:</strong> Changes within 30 days of arrival are treated as cancellations.</span>
              </li>
            </ul>
          </div>

          <!-- Section 5: Child & Extra-Adult Policy -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="400">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              5. Child & Extra-Adult Policy
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Children under 5 years:</strong> Complimentary.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Children ages 5-12 years:</strong> 25% of the adult rate.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Guests over 12 years:</strong> 80% of the adult rate; a two-room upgrade is available if a supplement of over 80% is paid, subject to availability.</span>
              </li>
            </ul>
          </div>

          <!-- Section 6: Park Closures -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="500">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              6. Park Closures and Circumstances Beyond Our Control
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>In the event of park, road, or system closure due to health, we are not liable for Elements beyond our control. Affected components will be rearranged or refunded (at our discretion), excluding government authorities.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>We are not liable for any Default or delay in fulfilling our obligations due to events beyond our reasonable control Causes include, but are not limited to:</span>
              </li>
            </ul>
            <ul class="space-y-2 text-gray-300 text-sm md:text-base ml-8 mt-2">
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span>Natural disasters (e.g., floods, earthquakes, landslides)</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span>Force majeure events</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span>Acts of government, war, or public health emergencies</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span>Transportation-related problems</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span>Strikes or labor disputes</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-amber-500">•</span>
                <span>Disruptions in telecommunication or utilities</span>
              </li>
            </ul>
          </div>

          <!-- Section 7: Liability & Conduct -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="600">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              7. Liability & Conduct
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Health & Safety:</strong> Guests are responsible for their own implications and fitness, we are not liable for Illnesses beyond our control. Affected components will be rearranged or refunded (at our discretion), excluding government authorities.</span>
              </li>
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span><strong class="text-white">Conduct:</strong> Guests must respect wildlife, regulations, and lodge rules; any breach may lead to termination without refund.</span>
              </li>
            </ul>
          </div>

          <!-- Section 8: Age Restriction -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="700">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              8. Age Restriction
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>Guests must be at least 18 years old to book and participate. By booking, you confirm that you meet this requirement.</span>
              </li>
            </ul>
          </div>

          <!-- Section 9: Indemnity -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="800">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              9. Indemnity
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>You agree to indemnify, defend, and hold harmless Indian Tiger Safaris and its affiliates from any claims, losses, or liabilities arising out of your participation, including negligence.</span>
              </li>
            </ul>
          </div>

          <!-- Section 10: Media Release -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="900">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              10. Media Release
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>You grant permission for Indian Tiger Safaris to use photos and videos taken during safaris for promotional purposes without royalties.</span>
              </li>
            </ul>
          </div>

          <!-- Section 11: Third-Party Links -->
          <div class="mb-8" data-aos="fade-up" data-aos-delay="1000">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              11. Third-Party Links
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>We are not responsible for the content, accuracy, or practices of external sites linked on our website.</span>
              </li>
            </ul>
          </div>

          <!-- Section 12: Governing Law & Jurisdiction -->
          <div class="mb-0" data-aos="fade-up" data-aos-delay="1100">
            <h2
              class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100"
            >
              12. Governing Law & Jurisdiction
            </h2>
            <ul class="space-y-3 text-gray-300 text-sm md:text-base">
              <li class="flex items-start gap-3">
                <i
                  class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"
                ></i>
                <span>These terms are governed by the laws of India. Any disputes shall be resolved in the courts of India.</span>
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
<!-- FAQs Section - Terms and Conditions -->
<section class="py-16 md:py-24 bg-neutral-900">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        BOOKING POLICIES
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Terms & Conditions FAQs
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Common questions about our booking policies and terms
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">
      
      <!-- FAQ 1 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What payment is required to confirm my booking at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              To confirm your booking at Wildmark Resort, we require:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>100% Advance Payment:</strong> Full payment is required for both resort accommodation and jungle safari bookings</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Rate Validity:</strong> Quoted rates apply only for the specified dates and number of occupants mentioned at booking</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Seasonal Charges:</strong> Additional seasonal surcharges may apply during peak periods</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Payment Methods:</strong> We accept bank transfers, UPI, and credit/debit cards</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Contact us at <a href="tel:9405529731" class="text-amber-400 hover:text-amber-300">+91 9405529731</a> for payment details and booking confirmation.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are the check-in and check-out times at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our standard check-in and check-out times are:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Check-In Time:</strong> 2:00 PM</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Check-Out Time:</strong> 11:00 AM</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Early Check-In:</strong> Subject to room availability and may incur additional charges</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Late Check-Out:</strong> Subject to availability; please request at the front desk</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Luggage Storage:</strong> Available for early arrivals and late departures</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Pro Tip:</strong> Our proximity to Khatia Gate means you can maximize your safari time even with standard check-in/out times!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What identification documents do I need to provide at check-in?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Valid identification is mandatory for all guests:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Foreign Nationals Must Present:</strong></span>
              </li>
            </ul>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-8 mt-2">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">→</span>
                <span>Valid passport</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">→</span>
                <span>Valid visa for India</span>
              </li>
            </ul>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4 mt-3">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Indian Nationals Must Present ONE of:</strong></span>
              </li>
            </ul>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-8 mt-2">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">→</span>
                <span>Passport</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">→</span>
                <span>Driving License</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">→</span>
                <span>Voter ID Card</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">→</span>
                <span>PAN Card</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Important:</strong> Photocopies are not accepted. Original documents must be presented at check-in.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the cancellation policy for resort bookings?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our cancellation policy for resort bookings is as follows:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>More than 30 days before arrival:</strong> 25% cancellation charge</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>22-30 days before arrival:</strong> 50% cancellation charge</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>0-21 days before arrival:</strong> 80% cancellation charge</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>7 days or less before arrival:</strong> 100% cancellation charge (no refund)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Special Dates (Christmas, New Year, Long Weekends):</strong> 100% non-refundable</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Booking Amendments:</strong> Changes made within 30 days of arrival are treated as cancellations</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Important:</strong> All cancellation requests must be made in writing via email to <a href="mailto:kanhawildmark@gmail.com" class="text-amber-400 hover:text-amber-300">kanhawildmark@gmail.com</a>
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Can I get a refund if my jungle safari booking is cancelled?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Jungle safari bookings have a strict policy:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Non-Refundable:</strong> Once booked, jungle safaris are 100% non-refundable under any circumstances</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>No Amendments:</strong> Safari bookings cannot be changed to different dates or zones</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Government Regulations:</strong> This policy is in line with Kanha National Park's booking system and regulations</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Park Closures:</strong> If the park is closed by government authorities due to force majeure, we will arrange alternative safaris or provide refunds at our discretion</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Recommendation:</strong> Book safaris only when you're certain of your travel dates to avoid loss of payment.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What are the charges for children staying at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our child and extra-adult policy is structured as follows:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Children Under 5 Years:</strong> Complimentary (free of charge)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Children Ages 5-12 Years:</strong> 25% of the adult rate</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Guests Over 12 Years:</strong> Charged at 80% of the adult rate</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Room Upgrade Option:</strong> If paying more than 80% supplement, you may upgrade to a two-room arrangement (subject to availability)</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Extra Bedding:</strong> Additional charges apply for extra mattresses or rollaway beds</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              <strong>Family Tip:</strong> Consider booking our Family Room for better value when traveling with children!
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What happens if Kanha National Park is closed during my stay?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              In case of park closures or circumstances beyond our control:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Not Our Liability:</strong> We are not responsible for park closures due to government orders, natural disasters, or force majeure events</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Alternative Arrangements:</strong> Affected safari components will be rearranged to alternative dates or zones when possible</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Refunds:</strong> Refunds for cancelled safaris are provided at our discretion, excluding government authority fees</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Force Majeure Includes:</strong> Natural disasters (floods, earthquakes, landslides), acts of government, war, public health emergencies, transportation problems, strikes, or utility disruptions</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Resort Stays:</strong> Accommodation charges remain valid even if safaris are cancelled due to park closures</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Do I need to arrange my own transportation to the resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              We offer transfer services for your convenience:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Advance Booking Required:</strong> Transfer requests must be made at least 24 hours before your arrival</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Same-Day Requests:</strong> May not be accommodated depending on vehicle availability</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Pick-Up Points:</strong> We can arrange transfers from Jabalpur Airport, Jabalpur Railway Station, or Nagpur</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Additional Charges:</strong> Transfer services are charged separately based on distance</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Self-Drive Option:</strong> You can also drive to the resort - we're less than 1 km from Khatia Gate</span>
              </li>
            </ul>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mt-3">
              Contact us at <a href="tel:9405529731" class="text-amber-400 hover:text-amber-300">+91 9405529731</a> to arrange transfers when booking.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">What is the minimum age requirement to book at Wildmark Resort?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Age restrictions for booking and participation:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Minimum Age:</strong> Primary booking guest must be at least 18 years old</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Legal Requirement:</strong> This is a legal requirement for hotel bookings in India</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Minor Guests:</strong> Guests under 18 must be accompanied by a parent or legal guardian</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Safari Participation:</strong> Children of all ages can participate in jungle safaris with adult supervision</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Booking Confirmation:</strong> By making a booking, you confirm that you meet the age requirement</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">Can Wildmark Resort use my photos and videos for promotional purposes?</span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-3">
              Our media release policy is as follows:
            </p>
            <ul class="text-sm md:text-base text-gray-300 space-y-2 ml-4">
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Media Permission:</strong> By booking with us, you grant permission for Wildmark Resort to use photos and videos taken during your safari and stay</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Promotional Use:</strong> Images may be used on our website, social media, brochures, and other marketing materials</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>No Royalties:</strong> Usage rights are granted without any payment or royalties to guests</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Opt-Out Option:</strong> If you prefer not to be photographed or featured, please inform our staff upon arrival</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-amber-500">•</span>
                <span><strong>Guest Privacy:</strong> We respect guest privacy and will remove any images upon request</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
// FAQ Toggle Functionality - Fixed Version
document.addEventListener('DOMContentLoaded', function() {
  const faqQuestions = document.querySelectorAll('.faq-question');
  
  faqQuestions.forEach(button => {
    button.addEventListener('click', function() {
      const faqItem = this.closest('.faq-item');
      const answer = faqItem.querySelector('.faq-answer');
      const icon = this.querySelector('.faq-icon');
      const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
      
      // Close all other FAQs
      document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
          const otherAnswer = item.querySelector('.faq-answer');
          const otherIcon = item.querySelector('.faq-icon');
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
      // Parallax Effect for Promotion Section
      let ticking = false;
      
      function updateParallax() {
        const parallaxBg = document.querySelector('.parallax-bg');
        if (parallaxBg) {
          const scrolled = window.pageYOffset;
          const promotionSection = document.getElementById('promotionSection');
          
          if (promotionSection) {
            const rect = promotionSection.getBoundingClientRect();
            const sectionTop = promotionSection.offsetTop;
            const windowHeight = window.innerHeight;
            
            // Check if section is in viewport
            if (rect.top < windowHeight && rect.bottom > 0) {
              const yPos = -(scrolled - sectionTop) * 0.5;
              parallaxBg.style.transform = `translate3d(0, ${yPos}px, 0)`;
            }
          }
        }
        ticking = false;
      }
      
      window.addEventListener('scroll', function() {
        if (!ticking) {
          window.requestAnimationFrame(updateParallax);
          ticking = true;
        }
      });
      
      // Initial call
      updateParallax();

      AOS.init({ duration: 800, once: true });

      

    </script>
<?php 


// Include header
include 'includes/footer.php'; 
?>
