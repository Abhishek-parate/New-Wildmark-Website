function toggleSpecialOfferPopup() {
    const p = document.getElementById('specialOfferPopup');
    if (p.classList.contains('hidden')) {
        p.classList.remove('hidden');
        p.classList.add('flex');
        document.body.style.overflow = 'hidden';
    } else {
        p.classList.add('hidden');
        p.classList.remove('flex');
        document.body.style.overflow = '';
    }
}

function closeIfClickedOutside(e) {
    if (e.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
}
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        const p = document.getElementById('specialOfferPopup');
        if (!p.classList.contains('hidden')) toggleSpecialOfferPopup();
    }
});

AOS.init({
    duration: 600,
    delay: 100,
    easing: 'ease-out',
    once: true,
    mirror: false
});

var mobileMenuBtn = document.getElementById("mobileMenuBtn"),
    mobileMenu = document.getElementById("mobileMenu");
if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        mobileMenu.classList.toggle("active");
    });
}

var mobilePackagesBtn = document.getElementById("mobilePackagesBtn"),
    mobilePackagesDropdown = document.getElementById("mobilePackagesDropdown"),
    packagesArrow = document.getElementById("packagesArrow");
if (mobilePackagesBtn && mobilePackagesDropdown && packagesArrow) {
    mobilePackagesBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        mobilePackagesDropdown.classList.toggle("active");
        packagesArrow.style.transform = mobilePackagesDropdown.classList.contains("active") ? "rotate(180deg)" :
            "rotate(0deg)";
    });
}

var mobileRoomsBtn = document.getElementById("mobileRoomsBtn"),
    mobileRoomsDropdown = document.getElementById("mobileRoomsDropdown"),
    roomsArrow = document.getElementById("roomsArrow");
if (mobileRoomsBtn && mobileRoomsDropdown && roomsArrow) {
    mobileRoomsBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        mobileRoomsDropdown.classList.toggle("active");
        roomsArrow.style.transform = mobileRoomsDropdown.classList.contains("active") ? "rotate(180deg)" :
            "rotate(0deg)";
    });
}

document.addEventListener("click", function (e) {
    if (mobileMenu && mobileMenuBtn) {
        if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            mobileMenu.classList.remove("active");
            if (mobilePackagesDropdown) mobilePackagesDropdown.classList.remove("active");
            if (packagesArrow) packagesArrow.style.transform = "rotate(0deg)";
            if (mobileRoomsDropdown) mobileRoomsDropdown.classList.remove("active");
            if (roomsArrow) roomsArrow.style.transform = "rotate(0deg)";
        }
    }
});

// ============================================================
// SINGLE CLEAN SCRIPT
// ============================================================

// ===== SAFARI IMAGE CAROUSEL =====
var mainSlide = 0;
var mainTotal = 3;

function updateCarousel() {
    var el = document.getElementById('carousel');
    var dots = document.querySelectorAll('.carousel-dot');
    if (!el) return;
    el.style.transform = 'translateX(-' + (mainSlide * 100) + '%)';
    dots.forEach(function (d, i) {
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
    dots.forEach(function (dot, i) {
        dot.style.backgroundColor = i === tSlide ? '#8E1616' : 'rgba(142,22,22,0.3)';
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
(function () {
    var slides = document.querySelectorAll('.hero-slide');
    var current = 0;
    if (!slides.length) return;

    function show(index) {
        slides.forEach(function (s) {
            s.classList.remove('active');
            var img = s.querySelector('.hero-image');
            if (img) img.style.transform = 'scale(1)';
        });
        slides[index].classList.add('active');
    }
    setInterval(function () {
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
    if (event.target.id === 'specialOfferPopup') toggleSpecialOfferPopup();
}

// ===== FAQ RESIZE =====
function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}

// ===== INIT =====
document.addEventListener('DOMContentLoaded', function () {
    document.body.style.overflowX = 'hidden';
    document.documentElement.style.overflowX = 'hidden';

    updateCarousel();

    var autoplay = setInterval(nextSlide, 5000);
    var carouselEl = document.getElementById('carousel');
    if (carouselEl) {
        carouselEl.addEventListener('mouseenter', function () {
            clearInterval(autoplay);
        });
        carouselEl.addEventListener('mouseleave', function () {
            autoplay = setInterval(nextSlide, 5000);
        });
        var tx = 0;
        carouselEl.addEventListener('touchstart', function (e) {
            tx = e.changedTouches[0].screenX;
        });
        carouselEl.addEventListener('touchend', function (e) {
            var diff = tx - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) {
                diff > 0 ? nextSlide() : prevSlide();
            }
        });
    }

    setTimeout(function () {
        updateTestimonialCarousel();
        setInterval(nextTestimonial, 6000);
    }, 200);

    window.addEventListener('resize', function () {
        tSlide = 0;
        updateTestimonialCarousel();
        handleFaqResize();
    });

    handleFaqResize();

    // FAQ Accordion
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function (item) {
        var question = item.querySelector('.faq-question');
        var answer = item.querySelector('.faq-answer');
        var icon = item.querySelector('.faq-icon');
        if (!question || !answer) return;
        question.addEventListener('click', function () {
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(function (other) {
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
        roomTabBtns.forEach(function (btn) {
            btn.classList.toggle('active', btn.getAttribute('data-tab') === tabName);
        });
        roomPanels.forEach(function (panel) {
            panel.classList.toggle('hidden', panel.getAttribute('data-tab') !== tabName);
        });
    }

    roomTabBtns.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            showRoomTab(this.getAttribute('data-tab'));
        });
    });

    if (roomTabBtns.length > 0) showRoomTab(roomTabBtns[0].getAttribute('data-tab'));

    // Video mute toggle
    var vid = document.getElementById('conservationVideo');
    var muteBtn = document.getElementById('muteToggle');
    var muteIc = document.getElementById('muteIcon');
    var soundIc = document.getElementById('soundIcon');
    if (vid) {
        vid.muted = true;
        vid.play().catch(function () { });
    }
    if (muteBtn && vid) {
        muteBtn.addEventListener('click', function () {
            vid.muted = !vid.muted;
            if (!vid.muted) {
                vid.removeAttribute('muted');
                vid.volume = 1.0;
                vid.play().catch(function () { });
            }
            if (muteIc) muteIc.classList.toggle('hidden', !vid.muted);
            if (soundIc) soundIc.classList.toggle('hidden', vid.muted);
        });
    }

    // Escape key for popup
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            var popup = document.getElementById('specialOfferPopup');
            if (popup && !popup.classList.contains('hidden')) toggleSpecialOfferPopup();
        }
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var href = this.getAttribute('href');
            if (href !== '#' && href !== '#book' && href !== '#contact') {
                e.preventDefault();
                var target = document.querySelector(href);
                if (target) {
                    var nav = document.querySelector('nav');
                    var navH = nav ? nav.offsetHeight : 100;
                    window.scrollTo({
                        top: target.offsetTop - navH,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        var href = this.getAttribute('href');
        if (href !== '#' && href !== '#book') {
            e.preventDefault();
            var target = document.querySelector(href);
            if (target) {
                var navH = (document.querySelector('nav') || {}).offsetHeight || 100;
                window.scrollTo({
                    top: target.offsetTop - navH,
                    behavior: 'smooth'
                });
            }
        }
    });
});
document.body.style.overflowX = 'hidden';
document.documentElement.style.overflowX = 'hidden';

// FAQ Accordion
document.addEventListener('DOMContentLoaded', function () {
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function (item) {
        var question = item.querySelector('.faq-question');
        var answer = item.querySelector('.faq-answer');
        var icon = item.querySelector('.faq-icon');
        if (!question || !answer) return;
        question.addEventListener('click', function () {
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(function (other) {
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
document.addEventListener('keydown', function (e) {
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