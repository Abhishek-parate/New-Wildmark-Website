<?php 
// Set page-specific title
$pageTitle = "Contact Us - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

<!-- Spacer -->
<div class="h-[60px] md:h-[80px]"></div>

<!-- Hero Banner -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[70vh] flex items-end"
    style="background: url('image/Kanha (8).jpg') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>

<!-- Contact Section -->
<section class="py-12 md:py-16 bg-neutral-900">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-8 md:gap-12">
            <!-- Left Side - Contact Form -->
            <div data-aos="fade-right">
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fa-solid fa-paw text-amber-500 text-2xl"></i>
                        <span class="text-amber-500 text-xs tracking-widest font-light">CONTACT WITH US</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6 text-white">
                        Send us a Message
                    </h2>
                </div>

                <form class="space-y-4" id="contactForm">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <input type="text" placeholder="Your Name" required
                            class="w-full bg-neutral-800 border border-neutral-700 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-amber-500 transition text-sm md:text-base" />
                    </div>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <input type="email" placeholder="Your Email" required
                            class="w-full bg-neutral-800 border border-neutral-700 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-amber-500 transition text-sm md:text-base" />
                    </div>

                    <div data-aos="fade-up" data-aos-delay="300">
                        <input type="tel" placeholder="Mobile Number" required
                            class="w-full bg-neutral-800 border border-neutral-700 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-amber-500 transition text-sm md:text-base" />
                    </div>

                    <div data-aos="fade-up" data-aos-delay="400">
                        <textarea rows="5" placeholder="Your Message" required
                            class="w-full bg-neutral-800 border border-neutral-700 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-amber-500 transition resize-none text-sm md:text-base"></textarea>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="500">
                        <button type="submit"
                            class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 rounded-lg transition transform hover:scale-105 text-sm md:text-base">
                            SEND
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Side - Contact Info -->
            <div data-aos="fade-left">
                <div class="bg-amber-600 rounded-2xl p-8 md:p-10 lg:p-12 h-full">
                    <h3 class="text-2xl md:text-3xl font-serif font-bold text-white mb-8">
                        Contact Us
                    </h3>

                    <!-- Phone -->
                    <div class="flex items-start gap-4 mb-8" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-light mb-2 tracking-wider">
                                PHONE
                            </h4>
                            <a href="tel:+919405529731"
                                class="text-white text-lg md:text-xl font-semibold hover:underline block">
                                (+91) 9405529731
                            </a>
                            <a href="tel:+919405529731"
                                class="text-white text-lg md:text-xl font-semibold hover:underline block">
                                (+91) 7719806444
                            </a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-light mb-2 tracking-wider">
                                EMAIL
                            </h4>
                            <a href="mailto:kanhawildmark@gmail.com"
                                class="text-white text-lg md:text-xl font-semibold hover:underline block break-all">
                                kanhawildmark@gmail.com
                            </a>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="flex items-start gap-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-light mb-2 tracking-wider">
                                ADDRESS
                            </h4>
                            <span href="mailto:kanhawildmark@gmail.com"
                                class="text-white text-lg md:text-xl font-semibold block break-all">
                                B.No. 8, Rajlaxmi Apartment Near Bhende Layout, Pannase
                                Layout, Nagpur 440022.
                            </span>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-facebook-f text-amber-600 text-lg"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-twitter text-amber-600 text-lg"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-instagram text-amber-600 text-lg"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-linkedin-in text-amber-600 text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-12 md:py-16 bg-black">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="map-container rounded-xl overflow-hidden" data-aos="zoom-in">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.220005091278!2d79.0379329739557!3d21.103793280564318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf2474ce0d7f%3A0x95dab1ef413d9efc!2sRajlaxmi%20bunglows!5e0!3m2!1sen!2sin!4v1766644414426!5m2!1sen!2sin"
                width="1200" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<!-- FAQs Section - Contact Page -->
<section class="py-16 md:py-24 bg-black">
  <div class="container mx-auto max-w-4xl px-4 md:px-6">
    <div class="text-center mb-12 md:mb-16">
      <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
        QUICK ANSWERS
      </p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
        Frequently Asked Questions
      </h2>
      <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Common questions about contacting and booking with Wildmark Resort Kanha
      </p>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">

      <!-- FAQ 1 -->
      <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            How can I contact Wildmark Resort for booking inquiries?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              You can contact us via phone, WhatsApp, email, or by filling out the contact form on this page. Our team will assist you with resort and safari bookings.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            What is the fastest way to get a response?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              Calling us directly or sending a WhatsApp message is the fastest way. These are usually answered within a few hours during working hours.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            How long does it take to reply to emails or form submissions?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              We respond to all emails and contact form messages within 24 hours.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Can you help with Kanha safari bookings through this page?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              Yes, you can contact us here for both resort stay and Mukki Gate safari bookings. We’ll guide you through the full process.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Where is your office located for in-person consultation?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              You can visit our Nagpur office for consultation. Please call us in advance to schedule your visit.
            </p>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
        <button class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
          <span class="text-base md:text-lg font-serif text-white pr-4">
            Can I visit the resort before making a booking?
          </span>
          <svg class="faq-icon w-6 h-6 text-amber-500 flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              Yes, you’re welcome to visit the resort to see the facilities. Please contact us in advance so we can arrange a proper visit or virtual tour.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Page-specific styles -->
<style>
    /* Contact icon styling */
    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #f59e0b, #d97706);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
</style>
<script>
// Contact Form Submission
const contactForm = document.getElementById("contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
        e.preventDefault();
        alert("Thank you for your message! We will get back to you soon.");
        contactForm.reset();
    });
}
</script>
<script>
// FAQ Accordion Functionality (add this if not already present)
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