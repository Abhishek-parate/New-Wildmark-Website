<?php 
// Set page-specific title
$pageTitle = "Cancellation Policy - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
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
<section class="hero-section relative h-[40vh] md:h-[50vh] flex items-center justify-center">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative text-center px-4 z-10" data-aos="fade-up">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold text-white">
            Cancellation Policy
        </h1>
    </div>
</section>

<!-- Cancellation Policy Content -->
<section class="py-12 md:py-16 bg-neutral-900">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div class="bg-black rounded-lg shadow-2xl p-6 md:p-10 lg:p-12 border border-neutral-800">

            <!-- Introduction -->
            <div class="mb-8" data-aos="fade-up">
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">
                    <i class="fa-solid fa-circle text-amber-500 text-xs mr-3"></i>
                    <strong class="text-white">Making changes to your booking within 35 days of your arrival?</strong>
                    Consider it like pressing the reset button – we'll treat it as a cancellation. We understand plans
                    can shift like sand dunes in the desert, but this ensures we can keep the wheels turning smoothly.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">
                    <i class="fa-solid fa-circle text-amber-500 text-xs mr-3"></i>
                    <strong class="text-white">The cancellation fee will be calculated based on the total booking
                        amount, not just the advance payment.</strong> It's like trying to unscramble eggs – once it's
                    done, there's no turning back. But hey, we'll need to consider the whole omelet, not just the
                    cracked shell.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">
                    <i class="fa-solid fa-circle text-amber-500 text-xs mr-3"></i>
                    <strong class="text-white">Please note, bookings for Christmas, New Year, and those beloved long
                        weekends are non-refundable.</strong> It's like getting tickets to the hottest show in town –
                    once you're in, you're committed to this performance.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">
                    <i class="fa-solid fa-circle text-amber-500 text-xs mr-3"></i>
                    <strong class="text-white">By using our site, you're giving us the nod to play by these
                        rules.</strong> It's like signing on the dotted line, acknowledging that we're all on the same
                    page.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                    <i class="fa-solid fa-circle text-amber-500 text-xs mr-3"></i>
                    <strong class="text-white">If we decide to switch things up, we'll keep you in the loop by posting
                        any changes right here.</strong> It's like keeping you plugged in without any tangled wires!
                    Your peace of mind is our priority, and we want to ensure you're always in the know.
                </p>
            </div>

            <!-- On Accommodation -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    On Accommodation :
                </h2>
                <ul class="space-y-3 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Before 30 days</strong> 55% of the total package will be
                            applicable.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Between 30 days – 15 days</strong> 75% of the total package is
                            applicable.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">Between 15 days – no refund</strong> in case of cancellation or
                            a hospitalization certificate.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">In case of a serious medical emergency</strong> credit note of
                            100% will be issued. Strictly no refunds.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle text-amber-500 text-xs mt-2 flex-shrink-0"></i>
                        <span><strong class="text-white">A credit note will be issued</strong> for any cancellation or
                            National Emergency.</span>
                    </li>
                </ul>
            </div>

            <!-- Safaris -->
            <div class="mb-8" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl md:text-2xl font-serif font-bold mb-4 text-amber-100">
                    Safaris:
                </h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">
                    As this is an additional service, we are providing no refund against any Safari bookings. Guests
                    have the option to book the safaris by themselves. No binding from our side.
                </p>
                <ul class="space-y-2 text-gray-300 text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Sitabani Buffer Zone.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Village Machaan Perch.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Bidhwasan Jungle Camp.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Tadoba Safari Stay.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Wild Mark Kanha.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Singi Estate Kolsa Zari.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Nilmital Willows.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Shurmaas Resort Satpura.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500">•</span>
                        <span>Nature's Sprout Bandhavgarh Meadows.</span>
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
<!-- FAQs Section - Cancellation Policy Related -->
<section class="py-16 md:py-24 bg-[#121212]">
    <div class="container mx-auto max-w-4xl px-4 md:px-6">
        <div class="text-center mb-12 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-4 font-light" data-aos="fade-down">
                CLARIFYING YOUR CONCERNS
            </p>
            <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">
                Cancellation Policy FAQs
            </h2>
            <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up"
                data-aos-delay="200">
                Important questions about cancellations, refunds, and safari bookings
            </p>
        </div>

        <div class="space-y-4" data-aos="fade-up" data-aos-duration="1000">

            <!-- FAQ 1 -->
            <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                <button
                    class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                    <span class="text-base md:text-lg font-serif text-white pr-4">What happens if I modify my booking
                        within 35 days of arrival?</span>
                    <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
                        <p class="text-gray-300">Any modification within 35 days is treated as a cancellation and
                            charged as per policy.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                <button
                    class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                    <span class="text-base md:text-lg font-serif text-white pr-4">How is the cancellation charge
                        calculated?</span>
                    <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
                        <p class="text-gray-300">
                            Charges are based on the total package amount:
                            <br>• Before 30 days – 55%
                            <br>• 30–15 days – 75%
                            <br>• Within 15 days – No refund
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                <button
                    class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                    <span class="text-base md:text-lg font-serif text-white pr-4">Are Christmas & New Year bookings
                        refundable?</span>
                    <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
                        <p class="text-gray-300">No, peak season bookings (Christmas, New Year, long weekends) are
                            non-refundable.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                <button
                    class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                    <span class="text-base md:text-lg font-serif text-white pr-4">What if there is a medical
                        emergency?</span>
                    <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
                        <p class="text-gray-300">In case of hospitalization, a 100% credit note is issued. No cash
                            refunds.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                <button
                    class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                    <span class="text-base md:text-lg font-serif text-white pr-4">Are safari bookings refundable?</span>
                    <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
                        <p class="text-gray-300">No refunds are provided for safari bookings as they are third-party
                            services.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
                <button
                    class="faq-question w-full text-left px-6 py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                    <span class="text-base md:text-lg font-serif text-white pr-4">What is a credit note?</span>
                    <svg class="faq-icon w-6 h-6 text-amber-500 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 py-5 bg-neutral-800/50 border-t border-neutral-700">
                        <p class="text-gray-300">A credit note is a future booking voucher issued instead of a cash
                            refund.</p>
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

AOS.init({
    duration: 800,
    once: true
});
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