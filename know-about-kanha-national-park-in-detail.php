<?php 
// Set page-specific title
$pageTitle = "Kanha - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>
<style>
    /* ===== ROOT COLOR VARIABLES - Same as How to Reach page ===== */
    :root {
        --bg1: #E8C999;
        --bg2: #F8EEDF;
        --text1: #000000;
        --text2: #8E1616;
    }

    /* ===== GLOBAL THEME OVERRIDES ===== */
    body {
        background-color: var(--bg2);
        color: var(--text1);
    }

    /* Section backgrounds */
    section.bg-neutral-900,
    section.py-16.md\:py-24.bg-neutral-900,
    section.py-12.md\:py-20.px-4.md\:px-6.bg-neutral-900 {
        background-color: var(--bg2) !important;
    }
    section.bg-black,
    section.py-12.md\:py-20.bg-black,
    section.py-16.md\:py-24.bg-black {
        background-color: var(--bg1) !important;
    }
    .stats-strip {
        background: var(--text2) !important;
    }

    /* Headings */
    h1, h2, h3, h4, h5 {
        color: var(--text2) !important;
    }
    .text-amber-100, .text-amber-200 {
        color: var(--text2) !important;
    }
    .text-white {
        color: var(--text1) !important;
    }

    /* Body text */
    .text-gray-300, .text-gray-400 {
        color: var(--text1) !important;
    }
    p { color: var(--text1); }

    /* Amber accents */
    .text-amber-500, .text-amber-400 {
        color: var(--text2) !important;
    }
    .text-amber-300 {
        color: var(--text2) !important;
    }

    /* Section label */
    .section-label {
        font-family: "Roboto Mono", monospace;
        font-size: .65rem;
        letter-spacing: .25em;
        text-transform: uppercase;
        color: var(--text2) !important;
    }

    /* Stats strip text stays white */
    .stats-strip .text-white,
    .stats-strip div {
        color: #fff !important;
    }

    /* Borders */
    .border-neutral-800 { border-color: rgba(142, 22, 22, 0.25) !important; }
    .border-neutral-700 { border-color: rgba(142, 22, 22, 0.2) !important; }
    .border-white\/10 { border-color: rgba(142, 22, 22, 0.2) !important; }

    /* Zone Cards */
   .zone-card {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    cursor: pointer;
    box-shadow: none;  /* 👈 yahi change kar */
}
    .zone-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .7s ease;
    }
    .zone-card:hover img { transform: scale(1.08); }
   .zone-card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.75) 0%, rgba(0,0,0,.1) 60%);
    transition: background .4s ease;
}
.zone-card:hover .zone-card-overlay {
    background: linear-gradient(to top, rgba(0,0,0,.85) 0%, rgba(0,0,0,.3) 60%);
}
    .zone-card-content {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        padding: 1.5rem;
    }
    .zone-card-content h3,
    .zone-card-content p { color: #fff !important; }
    .zone-badge {
        display: inline-block;
        background: var(--text2);
        color: #fff !important;
        font-size: .6rem;
        letter-spacing: .15em;
        text-transform: uppercase;
        padding: .25rem .65rem;
        border-radius: 999px;
        margin-bottom: .6rem;
        font-family: "Roboto Mono", monospace;
    }

    /* Gate Cards */
    .gate-card {
        background: rgba(232, 201, 153, 0.4);
        border: 1px solid rgba(142, 22, 22, 0.3);
        border-radius: 1rem;
        padding: 1.5rem;
        transition: all .3s;
    }
    .gate-card:hover {
        border-color: var(--text2);
        background: rgba(232, 201, 153, 0.6);
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(142,22,22,0.15);
    }
    .gate-card h4, .gate-card h5 { color: var(--text2) !important; }
    .gate-card p { color: var(--text1) !important; }

    /* Tiger Cards */
    .tiger-card {
        background: rgba(232, 201, 153, 0.3);
        border: 1px solid rgba(142, 22, 22, 0.2);
        border-radius: .75rem;
        padding: 1.25rem 1.5rem;
        transition: border-color .3s, background .3s;
    }
    .tiger-card:hover {
        border-color: var(--text2);
        background: rgba(232, 201, 153, 0.5);
    }
    .tiger-card h5 { color: var(--text2) !important; }

    /* Activity Pills */
    .activity-pill {
        display: flex;
        align-items: center;
        gap: .75rem;
        background: rgba(232, 201, 153, 0.3);
        border: 1px solid rgba(142, 22, 22, 0.2);
        border-radius: .75rem;
        padding: 1rem 1.25rem;
        transition: all .3s ease;
    }
    .activity-pill:hover {
        background: rgba(232, 201, 153, 0.6);
        border-color: var(--text2);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(142,22,22,0.1);
    }
    .activity-icon {
        width: 44px; height: 44px;
        background: linear-gradient(135deg, var(--bg1), var(--text2));
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .activity-icon i { color: #fff; font-size: 1rem; }

    /* Flora Fauna Tabs */
    .ff-tab {
        padding: .6rem 1.5rem;
        border-radius: 999px;
        font-family: "Roboto Slab", serif;
        font-size: .875rem;
        font-weight: 600;
        cursor: pointer;
        transition: all .3s;
        border: 1px solid rgba(142, 22, 22, 0.3);
        color: var(--text2);
        background: transparent;
    }
    .ff-tab.active {
        background: var(--text2);
        border-color: var(--text2);
        color: #fff !important;
    }

    /* Zone Gate Tabs */
    .zone-gate-tab {
        padding: .6rem 1.5rem;
        border-radius: 999px;
        font-family: "Roboto Slab", serif;
        font-size: .875rem;
        font-weight: 600;
        cursor: pointer;
        transition: all .3s;
        border: 1px solid rgba(142, 22, 22, 0.3);
        color: var(--text2);
        white-space: nowrap;
        background: transparent;
    }
    .zone-gate-tab.active {
        background: var(--text2);
        border-color: var(--text2);
        color: #fff !important;
    }

    /* Main Safari Tabs */
    .main-safari-tab {
        padding: .75rem 2rem;
        border-radius: 999px;
        font-family: "Roboto Slab", serif;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all .3s;
        border: 2px solid rgba(142,22,22,.3);
        color: var(--text2);
        background: transparent;
    }
    .main-safari-tab.active {
        background: var(--text2);
        border-color: var(--text2);
        color: #fff !important;
        box-shadow: 0 0 24px rgba(142,22,22,.25);
    }
    .main-safari-tab:hover:not(.active) {
        border-color: var(--text2);
        background: rgba(142,22,22,0.08);
    }

    /* Info Card */
    .info-card {
        background: rgba(232, 201, 153, 0.3);
        border: 1px solid rgba(142, 22, 22, 0.2);
        border-radius: 1rem;
        padding: 1.5rem;
    }
    .info-card h4 { color: var(--text2) !important; }

    /* Timeline */
    .timeline-item { position: relative; padding-left: 2rem; }
    .timeline-item::before {
        content: '';
        position: absolute; left: 0; top: .4rem;
        width: 10px; height: 10px;
        border-radius: 50%;
        background: var(--text2);
        box-shadow: 0 0 0 4px rgba(142,22,22,.2);
    }
    .timeline-item::after {
        content: '';
        position: absolute; left: 4px; top: 1.2rem;
        width: 2px; bottom: -1rem;
        background: rgba(142,22,22,.2);
    }
    .timeline-item:last-child::after { display: none; }

    /* Season Table */
    .season-row { border-bottom: 1px solid rgba(142,22,22,.1); }
    .season-row:last-child { border-bottom: none; }
    .season-badge {
        display: inline-block;
        padding: .2rem .7rem;
        border-radius: 999px;
        font-size: .65rem;
        font-family: "Roboto Mono", monospace;
        letter-spacing: .1em;
    }
    .badge-best { background: rgba(34,197,94,.15); color: #166534; border: 1px solid rgba(34,197,94,.3); }
    .badge-good { background: rgba(142,22,22,.1); color: var(--text2); border: 1px solid rgba(142,22,22,.3); }
    .badge-closed { background: rgba(239,68,68,.1); color: #991b1b; border: 1px solid rgba(239,68,68,.2); }

    /* Image overlays - adjust colors */
    [style*="border-left:3px solid #f59e0b"],
    [style*="border-left: 3px solid #f59e0b"] {
        border-left-color: var(--text2) !important;
        background: rgba(248,238,223,0.92) !important;
    }
    [style*="border-left:3px solid #f59e0b"] p,
    [style*="border-left: 3px solid #f59e0b"] p {
        color: var(--text2) !important;
    }

    /* Stat item borders */
    .stat-item { border-right: 1px solid rgba(255,255,255,.25); }
    .stat-item:last-child { border-right: none; }

    /* CTA Banner */
    .cta-banner {
        background: linear-gradient(135deg, #8E1616 0%, #6e1010 40%, #4a0a0a 100%) !important;
        position: relative;
        overflow: hidden;
    }
    .cta-banner::before {
        content: '';
        position: absolute; top: -50%; right: -10%;
        width: 500px; height: 500px;
        border-radius: 50%;
        background: rgba(232,201,153,.08);
    }
    .cta-banner::after {
        content: '';
        position: absolute; bottom: -30%; left: -5%;
        width: 300px; height: 300px;
        border-radius: 50%;
        background: rgba(232,201,153,.05);
    }
    .cta-banner h2, .cta-banner h5 { color: #fff !important; }
    .cta-banner p { color: rgba(248,238,223,.85) !important; }
    .cta-banner .section-label { color: rgba(232,201,153,.8) !important; }

    /* Awards section */
    .awards-section { background-color: var(--bg1) !important; }

    /* FAQ Styles */
    .faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; }
    .faq-col { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
    .faq-answer { transition: max-height 0.35s ease; }
    .faq-icon { transition: transform 0.3s; color: var(--text2) !important; }

    .faq-item.bg-black {
        background-color: var(--bg2) !important;
        border-color: rgba(142,22,22,.25) !important;
        box-shadow: 0 2px 8px rgba(142,22,22,.07);
    }
    .faq-question:hover { background-color: rgba(232,201,153,.5) !important; }
    .faq-question span { color: var(--text1) !important; }
    .faq-answer > div {
        background-color: rgba(232,201,153,.3) !important;
        border-top-color: rgba(142,22,22,.2) !important;
    }

    /* Scrollbar */
    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: var(--bg2); }
    ::-webkit-scrollbar-thumb { background: var(--text2); border-radius: 3px; }

    /* Scrollbar hide */
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    .scrollbar-hide::-webkit-scrollbar { display: none; }

    /* Popup */
    @keyframes slideIn {
        from { opacity: 0; transform: scale(0.9) translateY(20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }
    .animate-slideIn { animation: slideIn 0.3s ease-out; }
    #specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
    #specialOfferPopup > div::-webkit-scrollbar { display: none; }

    #specialOfferPopup .bg-neutral-900 { background-color: var(--bg2) !important; border-color: var(--text2) !important; }
    #specialOfferPopup .bg-gradient-to-r { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
    #specialOfferPopup .bg-black { background-color: var(--bg1) !important; }
    #specialOfferPopup .border-amber-500\/30 { border-color: rgba(142,22,22,.3) !important; }
    #specialOfferPopup h4.text-white { color: var(--text1) !important; }
    #specialOfferPopup .text-amber-500 { color: var(--text2) !important; }
    #specialOfferPopup .bg-amber-500\/10 { background-color: rgba(232,201,153,.3) !important; }
    #specialOfferPopup .text-amber-100 { color: var(--bg2) !important; }
    #specialOfferPopup .text-gray-400.line-through { color: rgba(0,0,0,.4) !important; }
    #specialOfferPopup .text-gray-300 { color: var(--text1) !important; }
    #specialOfferPopup .text-gray-400 { color: rgba(0,0,0,.5) !important; }
    #specialOfferPopup button.text-white { color: var(--text1) !important; }
    .bg-amber-500.hover\:bg-amber-600 { background-color: var(--text2) !important; color: #fff !important; }

    /* Special offer floating button */
    #specialOfferBtn { background: linear-gradient(to right, var(--text2), #b01e1e) !important; }
    #specialOfferBtn .bg-red-500 { background-color: var(--bg1) !important; color: var(--text2) !important; }

    /* Responsive */
    @media screen and (max-width: 860px) {
        .faq-grid { grid-template-columns: 1fr !important; }
    }
    @media (max-width: 767px) {
        .kanha-hero img { height: 250px !important; max-height: 250px !important; }
    }

    /* Token pill tags override */
    span[style*="background:rgba(255,255,255,.1)"] {
        background: rgba(142,22,22,0.1) !important;
        color: var(--text2) !important;
        border: 1px solid rgba(142,22,22,0.2) !important;
    }
    span[style*="background:rgba(245,158,11,0.12)"] {
        background: rgba(142,22,22,0.1) !important;
        color: var(--text2) !important;
        border: 1px solid rgba(142,22,22,0.25) !important;
    }

    /* Overlay image caption boxes */
    [style*="background:rgba(0,0,0,0.75)"],
    [style*="background:rgba(0,0,0,.75)"] {
        background: rgba(248,238,223,0.92) !important;
    }

    /* CTA banner inner boxes */
    .cta-banner [style*="background:rgba(255,255,255,.08)"] {
        background: rgba(232,201,153,0.15) !important;
        border-color: rgba(232,201,153,0.3) !important;
    }
    .cta-banner h5, .cta-banner .fa-map-marker-alt,
    .cta-banner .fa-concierge-bell, .cta-banner .fa-car,
    .cta-banner .fa-award {
        color: var(--bg1) !important;
    }

    /* Decorative border boxes behind images */
    [style*="border:1px solid rgba(245,158,11,0.25)"] {
        border-color: rgba(142,22,22,0.25) !important;
    }

    /* WhatsApp stays green */
    .bg-green-500.hover\:bg-green-600 { background-color: #25D366 !important; }

    /* Season table header */
    .bg-white\/5 { background-color: rgba(142,22,22,0.08) !important; }

    /* #zones padding */
    #zones { padding-bottom: 30px; }

    /* Offer badges */
    .bg-green-500 { background-color: #2a6e3f !important; }
    .bg-blue-500 { background-color: #1a4a7a !important; }
    /* Keep floating button icons white */
#specialOfferBtn svg,
a[aria-label="WhatsApp"] svg {
    color: #fff !important;
    fill: #fff !important;
}
/* Floating button icons - keep white */
#specialOfferBtn svg,
a[aria-label="WhatsApp"] svg {
    color: #fff !important;
    fill: #fff !important;
}
#specialOfferBtn .animate-bounce {
    color: var(--text2) !important;
}
</style>

<!-- Hero Header -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/Tiger2.webp') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>

<!-- ═══════════════════════════════════════════ HISTORY OF KANHA ═══ -->
<section class="py-16 md:py-24 bg-neutral-900 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">

        <!-- Header -->
        <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
            <p class="section-label mb-4">EST. 1879 • TIGER RESERVE SINCE 1973</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4">History of <span style="color:var(--text2);">Kanha</span></h2>
        </div>
        
        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 md:gap-20 items-center mb-16">
            <div data-aos="fade-right" data-aos-duration="1000">
                <p class="section-label mb-4">The Gond Dynasty</p>
                <h3 class="text-2xl md:text-3xl font-serif mb-6 leading-tight">
                    Land of <span style="color:var(--text2);">Gonds</span>
                </h3>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                    Land of Gonds, historically ruled by Gond Dynasty for centuries, before the British Colonial
                    influence. Around 1862, rules were introduced to prevent cutting of valuable timbers of Sal & Teak
                    Trees. Later in 1879 Kanha was declared as Reserve Forest, a Wildlife Sanctuary in 1933, Kanha
                    National Park in 1955 and a Kanha Tiger Reserve in 1973 — it became one of the first areas under
                    Tiger Project.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                    The tribes of Gonds & Baiga inhabited the thick jungles of Kanha. Till today the reserve is occupied
                    by these tribes.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                    The Kanha National Park was formed by merging Halon & Banjar Sanctuaries in 1955 and later in 1973
                    the park became Kanha Tiger Reserve.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                    Earlier, Kanha Tiger Reserve was called as <em style="color:var(--text2);">Kanha–Kisli National
                        Park</em>. It is one of the tiger reserves of India and the largest national park of the state
                    of Madhya Pradesh. It covers a Core area of 940 km² in two districts of Mandla and Balaghat and the
                    surrounding buffer area of 1,067 km². The park is famous for Royal Bengal tigers, Indian leopards,
                    sloth bears, Barasingha and Dhole.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed text-justify">
                    <strong style="color:var(--text2);">Barasingha, the swamp deer,</strong> is the main attraction of Kanha Tiger Reserve.
                </p>
            </div>

            <div class="h-[420px] md:h-[500px]" data-aos="fade-left" data-aos-duration="1000">
                <div class="rounded-xl overflow-hidden h-full shadow-xl" style="border:2px solid rgba(142,22,22,0.2);">
                    <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Kanha History" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div data-aos="fade-up">
            <p class="section-label mb-8 text-center">Conservation Timeline</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">

                <div class="gate-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div style="width:52px;height:52px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
                        <i class="fas fa-tree" style="color:#fff;font-size:1.1rem;"></i>
                    </div>
                    <h4 class="font-serif font-bold text-2xl mb-1" style="color:var(--text2) !important;">1862</h4>
                    <h5 class="font-serif font-semibold text-sm mb-2">Timber Protection</h5>
                    <p class="text-gray-400 text-xs leading-relaxed">Rules introduced to prevent cutting of Sal & Teak trees</p>
                </div>

                <div class="gate-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div style="width:52px;height:52px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
                        <i class="fas fa-shield-alt" style="color:#fff;font-size:1.1rem;"></i>
                    </div>
                    <h4 class="font-serif font-bold text-2xl mb-1" style="color:var(--text2) !important;">1879</h4>
                    <h5 class="font-serif font-semibold text-sm mb-2">Reserve Forest</h5>
                    <p class="text-gray-400 text-xs leading-relaxed">Kanha declared a Reserve Forest</p>
                </div>

                <div class="gate-card text-center" data-aos="fade-up" data-aos-delay="300">
                    <div style="width:52px;height:52px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
                        <i class="fas fa-leaf" style="color:#fff;font-size:1.1rem;"></i>
                    </div>
                    <h4 class="font-serif font-bold text-2xl mb-1" style="color:var(--text2) !important;">1933</h4>
                    <h5 class="font-serif font-semibold text-sm mb-2">Wildlife Sanctuary</h5>
                    <p class="text-gray-400 text-xs leading-relaxed">Elevated to Wildlife Sanctuary status</p>
                </div>

                <div class="gate-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div style="width:52px;height:52px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
                        <i class="fas fa-landmark" style="color:#fff;font-size:1.1rem;"></i>
                    </div>
                    <h4 class="font-serif font-bold text-2xl mb-1" style="color:var(--text2) !important;">1955</h4>
                    <h5 class="font-serif font-semibold text-sm mb-2">National Park</h5>
                    <p class="text-gray-400 text-xs leading-relaxed">Formed by merging Halon & Banjar Sanctuaries</p>
                </div>

                <div class="gate-card text-center" data-aos="fade-up" data-aos-delay="500">
                    <div style="width:52px;height:52px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
                        <i class="fas fa-paw" style="color:#fff;font-size:1.1rem;"></i>
                    </div>
                    <h4 class="font-serif font-bold text-2xl mb-1" style="color:var(--text2) !important;">1973</h4>
                    <h5 class="font-serif font-semibold text-sm mb-2">Tiger Reserve</h5>
                    <p class="text-gray-400 text-xs leading-relaxed">One of India's first Tiger Reserves under Project Tiger</p>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════ STATS STRIP ═══ -->
<div class="stats-strip py-4 md:py-5">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-0">
            <div class="stat-item text-center py-3 px-4">
                <div class="text-2xl md:text-3xl font-serif font-bold text-white">940</div>
                <div style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:rgba(255,255,255,.85);text-transform:uppercase;">Sq. Km Area</div>
            </div>
            <div class="stat-item text-center py-3 px-4">
                <div class="text-2xl md:text-3xl font-serif font-bold text-white">~60</div>
                <div style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:rgba(255,255,255,.85);text-transform:uppercase;">Royal Bengal Tigers</div>
            </div>
            <div class="stat-item text-center py-3 px-4">
                <div class="text-2xl md:text-3xl font-serif font-bold text-white">4</div>
                <div style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:rgba(255,255,255,.85);text-transform:uppercase;">Safari Zones</div>
            </div>
            <div class="text-center py-3 px-4">
                <div class="text-2xl md:text-3xl font-serif font-bold text-white">1973</div>
                <div style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:rgba(255,255,255,.85);text-transform:uppercase;">Tiger Reserve Est.</div>
            </div>
        </div>
    </div>
</div>

<!-- ═══════════════════════════════════════════ INTRO + HISTORY ═══ -->
<section class="py-16 md:py-24 bg-neutral-900 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-12 md:gap-20 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <p class="section-label mb-4">Est. 1955 • Tiger Reserve Since 1973</p>
                <h2 class="text-3xl md:text-5xl font-serif mb-6 leading-tight">
                    The Jewel of<br /><span style="color:var(--text2);">Indian Wildlife</span>
                </h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                    Welcome to Kanha Tiger Reserve — also known as Kanha-Kisli National Park — the jewel of Madhya
                    Pradesh and Central India's largest national park. Established in 1955, it gained prestigious tiger
                    reserve status in 1973, becoming a champion for tiger conservation under Project Tiger.
                </p>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-8 text-justify">
                    Encompassing 940 sq. km across Mandla and Balaghat districts, this magnificent reserve sprawls
                    across the Maikal hills of the Satpura range. Lush Sal forests, emerald meadows, and sparkling
                    streams paint a breathtaking canvas — the very landscape that inspired Rudyard Kipling's <em style="color:var(--text2);">The Jungle Book</em>.
                </p>
                <div class="space-y-5">
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                        <p class="font-serif font-semibold text-sm" style="color:var(--text2);">1955 — National Park Established</p>
                        <p class="text-gray-400 text-xs mt-1">Declared a national park to protect its unique biodiversity</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                        <p class="font-serif font-semibold text-sm" style="color:var(--text2);">1973 — Project Tiger Status</p>
                        <p class="text-gray-400 text-xs mt-1">One of the first reserves under India's landmark Project Tiger initiative</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                        <p class="font-serif font-semibold text-sm" style="color:var(--text2);">Today — 60+ Tigers Thriving</p>
                        <p class="text-gray-400 text-xs mt-1">Celebrating over 50 years of conservation excellence with a growing tiger population</p>
                    </div>
                </div>
            </div>

            <div class="h-[500px] md:h-[600px]" data-aos="fade-left" data-aos-duration="1000">
                <div class="rounded-xl overflow-hidden h-full shadow-xl" style="border:2px solid rgba(142,22,22,0.2);">
                    <img src="https://wildmarkresort.com/images/small_tiger.webp" alt="Bengal Tiger" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ SAFARI ZONES & OPTIONS ═══ -->
<section class="py-12 md:py-20 bg-black overflow-hidden">
  <div class="container mx-auto max-w-7xl px-4 md:px-6">

    <div class="text-center mb-12 md:mb-16">
      <p class="section-label mb-4" data-aos="fade-down">EXPLORE KANHA</p>
      <h2 class="text-3xl md:text-5xl font-serif mb-6" data-aos="zoom-in">Safari Zones & Options</h2>
      <p class="text-sm md:text-base text-gray-300 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
        Discover Kanha's four core zones and choose from our range of safari experiences
      </p>
    </div>

    <div class="flex justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
      <button class="main-safari-tab active" onclick="switchMainTab('zones', this)">
        <i class="fas fa-map-marked-alt mr-2"></i>Safari Zones
      </button>
      <button class="main-safari-tab" onclick="switchMainTab('options', this)">
        <i class="fas fa-binoculars mr-2"></i>Safari Options
      </button>
    </div>

    <!-- PANEL 1: SAFARI ZONES -->
    <div id="panel-zones">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="100">
          <img src="https://wildmarkresort.com/images/card1.webp" alt="Kanha Core Zone" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge">Core Zone</span>
            <h3 class="text-xl font-serif font-bold mb-2">Kanha Zone</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Open meadows and bamboo forests where Tigress Neelam — the legendary "Mataram of Kanha" — rules the land. Famous for Barasingha sightings.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Black Buck</span>
            </div>
          </div>
        </div>
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="200">
          <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Kisli Zone" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge">Core Zone</span>
            <h3 class="text-xl font-serif font-bold mb-2">Kisli Zone</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Graceful Sal forests and scenic grasslands — a safari hotspot where tiger sightings are practically guaranteed. Entry via Khatia Gate.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Gaur</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sloth Bear</span>
            </div>
          </div>
        </div>
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="300">
          <img src="https://wildmarkresort.com/images/Tiger5.webp" alt="Mukki Zone" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge">Core Zone</span>
            <h3 class="text-xl font-serif font-bold mb-2">Mukki Zone</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Renowned for incredible tiger sightings amidst saal, bamboo, and grassland. Heart-pounding encounters in a pristine setting.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Leopard</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Wild Dog</span>
            </div>
          </div>
        </div>
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="400">
          <img src="https://wildmarkresort.com/images/home4.webp" alt="Sarhi Zone" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge">Core Zone</span>
            <h3 class="text-xl font-serif font-bold mb-2">Sarhi Zone</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Dry forests and sprawling meadows — home to the legendary Barasingha at Saunf meadow. Serene and less-crowded experience.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sambar</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Entry Gates -->
      <div class="mt-12 md:mt-16" data-aos="fade-up">
        <p class="section-label mb-6 text-center">3 Entry Gates</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
          <div class="gate-card" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center gap-3 mb-3">
              <div style="width:40px;height:40px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="fas fa-archway" style="color:#fff;font-size:.9rem;"></i>
              </div>
              <h4 class="font-serif font-bold text-lg">Khatia Gate</h4>
            </div>
            <p class="text-sm leading-relaxed">Main entry point — provides access to both Kanha & Kisli zones. <strong>Wildmark Resort is closest to this gate.</strong> Ideal starting point for most visitors.</p>
          </div>
          <div class="gate-card" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center gap-3 mb-3">
              <div style="width:40px;height:40px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="fas fa-archway" style="color:#fff;font-size:.9rem;"></i>
              </div>
              <h4 class="font-serif font-bold text-lg">Mukki Gate</h4>
            </div>
            <p class="text-sm leading-relaxed">Entry to the Mukki zone — southern part of the reserve. Known for dense forest cover and excellent big cat sightings. Best for dedicated wildlife photographers.</p>
          </div>
          <div class="gate-card" data-aos="fade-up" data-aos-delay="300">
            <div class="flex items-center gap-3 mb-3">
              <div style="width:40px;height:40px;background:linear-gradient(135deg,var(--bg1),var(--text2));border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="fas fa-archway" style="color:#fff;font-size:.9rem;"></i>
              </div>
              <h4 class="font-serif font-bold text-lg">Sarhi Gate</h4>
            </div>
            <p class="text-sm leading-relaxed">Entry to Sarhi buffer zone — a quieter, less-commercialised experience. Great for birdwatching and the rare Barasingha — the state animal of Madhya Pradesh.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- PANEL 2: SAFARI OPTIONS -->
    <div id="panel-options" class="hidden">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="100">
          <img src="https://wildmarkresort.com/images/Tiger5.webp" alt="Jeep Safari" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge">Popular</span>
            <h3 class="text-xl font-serif font-bold mb-2">Jeep Safari</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Thrilling morning and evening jeep safaris through Kanha's core zones. 6 passengers per jeep.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">6:00 AM – 11:00 AM</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">3:00 PM – 6:00 PM</span>
            </div>
          </div>
        </div>
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="200">
          <img src="https://wildmarkresort.com/images/Tiger3.webp" alt="Full-Day Jeep Safari" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge" style="background:#2a6e3f;">Best Value</span>
            <h3 class="text-xl font-serif font-bold mb-2">Full-Day Safari</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Complete wildlife experience from dawn to dusk. Packed lunch included. Photography friendly.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">6:00 AM – 6:00 PM</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Lunch Included</span>
            </div>
          </div>
        </div>
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="300">
          <img src="https://wildmarkresort.com/images/wildmark5.jpg" alt="Elephant Safari" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge" style="background:#1a4a7a;">Unique</span>
            <h3 class="text-xl font-serif font-bold mb-2">Elephant Safari</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Get up close to wildlife on elephant back. A traditional and eco-friendly way to explore the forest.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">6:30 AM – 8:30 AM</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Eco-Friendly</span>
            </div>
          </div>
        </div>
        <div class="zone-card h-[420px]" data-aos="fade-up" data-aos-delay="400">
          <img src="https://wildmarkresort.com/images/wildmark8.jpeg" alt="Nature Walk" />
          <div class="zone-card-overlay"></div>
          <div class="zone-card-content">
            <span class="zone-badge" style="background:#5b21b6;">Relaxing</span>
            <h3 class="text-xl font-serif font-bold mb-2">Nature Walk</h3>
            <p class="text-xs leading-relaxed mb-3" style="color:rgba(255,255,255,0.85);">Guided nature walks through buffer zones. Learn about flora, fauna, bird watching and more.</p>
            <div class="flex flex-wrap gap-1">
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">7:00 AM – 9:00 AM</span>
              <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.6rem;padding:.2rem .55rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Bird Watching</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12 md:mt-16" data-aos="fade-up" data-aos-delay="500">
        <p class="text-gray-300 text-sm md:text-base mb-6">Need help choosing the right safari? Our team is here to assist you!</p>
        <a href="https://wildmarkresort.com/contact/" style="background:var(--text2);color:#fff;" class="px-8 py-3 transition font-semibold text-base rounded-lg shadow-lg inline-flex items-center justify-center gap-2 hover:opacity-90">
          <i class="fas fa-calendar-check"></i>
          <span>Book Safari Package</span>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════ SAFARI ZONES & ENTRY GATES ═══ -->
<section id="zones" class="py-16 md:py-24 bg-neutral-900 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="section-label mb-4">EXPLORE KANHA</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4">Safari Zones & Entry Gates</h2>
            <p class="text-gray-400 text-sm max-w-xl mx-auto">Discover Kanha's four core zones and three entry gates — each offering unique wildlife encounters</p>
        </div>

        <div class="mb-10" data-aos="fade-up" data-aos-delay="100">
            <div class="md:flex md:justify-center md:gap-3 overflow-x-auto whitespace-nowrap scrollbar-hide pb-2 md:pb-0" style="-webkit-overflow-scrolling: touch;">
                <button class="zone-gate-tab active inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('kanha',this)">Kanha Zone</button>
                <button class="zone-gate-tab inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('kisli',this)">Kisli Zone</button>
                <button class="zone-gate-tab inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('mukki',this)">Mukki Zone</button>
                <button class="zone-gate-tab inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('sarhi',this)">Sarhi Zone</button>
                <button class="zone-gate-tab inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('khatia',this)">Khatia Gate</button>
                <button class="zone-gate-tab inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('mukki-gate',this)">Mukki Gate</button>
                <button class="zone-gate-tab inline-block mr-2 md:mr-0" onclick="switchZoneGateTab('sarhi-gate',this)">Sarhi Gate</button>
                <button class="zone-gate-tab inline-block" onclick="switchZoneGateTab('buffer',this)">Buffer Zones</button>
            </div>
        </div>

        <!-- Kanha Zone Panel -->
        <div id="tab-kanha" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <p class="section-label mb-3">Core Zone</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Kanha <span style="color:var(--text2);">Core Zone</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Kanha Core zone is one of the most scenic landmark places in Kanha Tiger Reserve. The Kanha jungle supports a rich predator-prey ecosystem with sal forests and grasslands where wildlife movements are unpredictable. Patience and calm observation provide excellent chances for tiger sightings.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Kanha core zone is ideal for Tigers & Sloth Bears. The grasslands are critical feeding grounds for herbivores. The Kanha Interpretation Centre showcases biological samples, preserved skeletons, pugmark impressions, scat & pellet identification, and literature about tiger ecology.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        The scientific foundation of Kanha's management was significantly influenced by research conducted by George Schaller, whose landmark work helped refine predator-prey understanding here. The core zone includes the Schaller Hide research site, Shravan Tal, and Bison Road — a major corridor for tiger and Indian gaur movements.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sloth Bear</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Indian Gaur</span>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;left:16px;right:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/card1.webp" alt="Kanha Core Zone" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;left:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Core Zone</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Rich in Tiger & Sloth Bear Sightings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kisli Zone Panel -->
        <div id="tab-kisli" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;right:16px;left:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Kisli Zone" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;right:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Core Zone</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Classic Heartland of Kanha</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="section-label mb-3">Core Zone</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Kisli <span style="color:var(--text2);">Zone</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Kisli zone is one of the oldest zones for tourists in Kanha Tiger Reserve. The landscapes feature larger open grasslands with dense Sal Forests, bamboo thickets, and seasonal water bodies that play a major role for Royal Bengal Tiger sightings.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        The open grassland meadows provide long visibility, making wildlife sightings more structured and photographically rewarding. This is a hotspot for wildlife photographers and nature lovers.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        The morning mist over these meadows creates dramatic light conditions, especially during winter months. The zone is perfect for capturing stunning wildlife moments and experiencing Kanha's natural beauty at its finest.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Gaur</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sloth Bear</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Photographer's Paradise</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mukki Zone Panel -->
        <div id="tab-mukki" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <p class="section-label mb-3">Core Zone</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Mukki <span style="color:var(--text2);">Zone</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Mukki is a core zone with more Royal Bengal Tiger sightings, making it a major zone for tourists during summers. The presence of numerous water bodies increases tiger sightings and attracts more migratory birds.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Barasingha (swamp deer) sightings are high because of the swampy regions in this core zone. The dense forest wilderness creates perfect conditions for wildlife encounters.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        Heart-pounding tiger encounters in pristine settings make Mukki one of the most exciting zones for wildlife enthusiasts and photographers.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Leopard</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Wild Dog</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Migratory Birds</span>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;left:16px;right:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/Tiger5.webp" alt="Mukki Zone" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;left:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Core Zone</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Dense Forest Wilderness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sarhi Zone Panel -->
        <div id="tab-sarhi" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;right:16px;left:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/home4.webp" alt="Sarhi Zone" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;right:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Core Zone</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Quiet Wilderness Experience</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="section-label mb-3">Core Zone</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Sarhi <span style="color:var(--text2);">Zone</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Sarhi Core Zone is a peaceful, less crowded core zone in Kanha. The zone offers a raw and immersive forest experience where silence, patience, and observation define the safaris.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Sarhi offers undisturbed and scenic photographic frames for wildlife photographers. The zone is occupied by fewer safari vehicles, making it easy to track tigers and observe hard-ground Barasingha herds.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        Capture dramatic golden hour landscapes without tourist disturbance. The ideal zone for wildlife lovers seeking authentic jungle silence.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tiger</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sambar</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Less Crowded</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Khatia Gate Panel -->
        <div id="tab-khatia" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <p class="section-label mb-3">Entry Gate</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Khatia <span style="color:var(--text2);">Gate</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Khatia is the most famous entry gate to all 4 zones of Kanha Tiger Reserve. It serves as the main entry point providing access to both Kanha and Kisli zones.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        <strong style="color:var(--text2);">Wildmark Resort is closest to this gate - less than 1 km away!</strong> This makes it the ideal starting point for most visitors, allowing you to be among the first to enter at 6:00 AM.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        The gate provides convenient access to the Kisli-Kanha tourism belt, making it the most popular choice for safari-goers.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Main Entry Point</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Kanha & Kisli Access</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Wildmark Nearby</span>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;left:16px;right:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/card1.webp" alt="Khatia Gate" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;left:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Entry Gate</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Most Famous & Accessible</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mukki Gate Panel -->
        <div id="tab-mukki-gate" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;right:16px;left:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/bear.webp" alt="Mukki Gate" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;right:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Entry Gate</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Southern Access Point</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="section-label mb-3">Entry Gate</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Mukki <span style="color:var(--text2);">Gate</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Mukki Entry Gate is far away from Khatiya Entry gate and provides access to the Mukki zone in the southern part of the reserve. Known for dense forest cover and excellent big cat sightings.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Best suited for dedicated wildlife photographers seeking immersive forest experiences. Due to numerous water bodies, summer safaris offer exceptional wildlife viewing.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Dense Forest</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Big Cat Sightings</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Photography</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sarhi Gate Panel -->
        <div id="tab-sarhi-gate" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <p class="section-label mb-3">Entry Gate</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Sarhi <span style="color:var(--text2);">Gate</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Sarhi Entry Gate provides entry to the Sarhi buffer zone. This gate offers a quieter, less-commercialized experience compared to other entry points.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        Great for birdwatching and sighting the rare Barasingha — the state animal of Madhya Pradesh. Sarhi is perfect for those seeking authentic jungle silence.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Birdwatching</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Less Crowded</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Quiet Experience</span>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;left:16px;right:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/home4.webp" alt="Sarhi Gate" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;left:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Entry Gate</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Peaceful Wilderness Entry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buffer Zones Panel -->
        <div id="tab-buffer" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;right:16px;left:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/deer.webp" alt="Buffer Zones" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;right:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Buffer Zones</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">Ecological Transition Landscapes</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="section-label mb-3">Conservation Areas</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Buffer <span style="color:var(--text2);">Zones</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        The buffer zones of Kanha Tiger Reserve serve as ecological transitional landscapes surrounding the core zone areas. They play a vital role in wildlife dispersal and community-based conservation.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4 text-justify">
                        <strong style="color:var(--text2);">Khatia Buffer Zone:</strong> Located near the Kisli-Kanha tourism belt with mixed sal forests. Supports strong tiger movement. Leopard, sloth bear, and diverse birdlife are frequently observed.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4 text-justify">
                        <strong style="color:var(--text2);">Sijhora Buffer Zone:</strong> Features dense sal forest and emerging tiger territories. Common sightings of Indian Gaur and wild dogs.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4 text-justify">
                        <strong style="color:var(--text2);">Garhi Buffer Zone:</strong> Forest-village interfaced landscapes with good birding opportunities.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        <strong style="color:var(--text2);">Phen Buffer Zone:</strong> Undulating terrain and mixed forests. Lower tourist pressure with occasional tiger and leopard sightings.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Wildlife Dispersal</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Community Conservation</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Eco-Tourism</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════ TIGERS OF KANHA ═══ -->
<section class="py-16 md:py-24 bg-black overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <p class="section-label mb-4">Meet the Residents</p>
                <h2 class="text-3xl md:text-5xl font-serif mb-6 leading-tight">Tigers of <span style="color:var(--text2);">Kanha</span></h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-8 text-justify">
                    Kanha Tiger Reserve boasts a thriving population of approximately 60 Royal Bengal Tigers. The reserve's tigers are some of the most studied and photographed in the world — many have become legendary among wildlife enthusiasts.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="tiger-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center gap-2 mb-2">
                            <i class="fas fa-paw text-sm" style="color:var(--text2);"></i>
                            <h5 class="font-serif font-bold">T20 — Umarpani</h5>
                        </div>
                        <p class="text-gray-400 text-xs leading-relaxed">Embodies strength and regal grace — one of the most iconic male tigers of Kanha.</p>
                    </div>
                    <div class="tiger-card" data-aos="fade-up" data-aos-delay="150">
                        <div class="flex items-center gap-2 mb-2">
                            <i class="fas fa-paw text-sm" style="color:var(--text2);"></i>
                            <h5 class="font-serif font-bold">Neelam — Mataram</h5>
                        </div>
                        <p class="text-gray-400 text-xs leading-relaxed">The undisputed queen of Kanha zone, known affectionately as the Mataram of Kanha.</p>
                    </div>
                    <div class="tiger-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-2 mb-2">
                            <i class="fas fa-paw text-sm" style="color:var(--text2);"></i>
                            <h5 class="font-serif font-bold">Nilam & Cubs</h5>
                        </div>
                        <p class="text-gray-400 text-xs leading-relaxed">Ever-visible tigress currently raising three cubs — a delight for every safari visitor.</p>
                    </div>
                    <div class="tiger-card" data-aos="fade-up" data-aos-delay="250">
                        <div class="flex items-center gap-2 mb-2">
                            <i class="fas fa-paw text-sm" style="color:var(--text2);"></i>
                            <h5 class="font-serif font-bold">Balwan & Jr. Bajrang</h5>
                        </div>
                        <p class="text-gray-400 text-xs leading-relaxed">Dominant male tigers that command vast territories across the reserve's core zones.</p>
                    </div>
                    <div class="tiger-card sm:col-span-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center gap-2 mb-2">
                            <i class="fas fa-paw text-sm" style="color:var(--text2);"></i>
                            <h5 class="font-serif font-bold">Sunaina, Mohini & Neelima</h5>
                        </div>
                        <p class="text-gray-400 text-xs leading-relaxed">Fierce and graceful companions of Neelam — together they make the Kanha zone one of the most tiger-dense areas in all of India.</p>
                    </div>
                </div>
            </div>
            <div class="relative h-[500px] md:h-[600px]" data-aos="fade-left" data-aos-duration="1000">
                <img src="https://wildmarkresort.com/images/small_tiger.webp" alt="Tiger at Kanha" class="w-full h-full object-cover rounded-2xl shadow-2xl" style="border:2px solid rgba(142,22,22,0.2);" />
                <div style="position:absolute;bottom:1.5rem;left:1.5rem;right:1.5rem;background:rgba(248,238,223,0.93);backdrop-filter:blur(10px);border:1px solid rgba(142,22,22,0.2);border-radius:.75rem;padding:1rem 1.25rem;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p style="font-family:'Roboto Mono',monospace;font-size:.6rem;letter-spacing:.15em;color:var(--text2);text-transform:uppercase;">Tiger Population</p>
                            <p class="font-serif font-bold text-2xl" style="color:var(--text1);">~60 Tigers</p>
                        </div>
                        <div style="text-align:right;">
                            <p style="font-family:'Roboto Mono',monospace;font-size:.6rem;letter-spacing:.15em;color:var(--text2);text-transform:uppercase;">Conservation</p>
                            <p class="font-serif font-bold text-2xl" style="color:var(--text1);">50+ Years</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ FLORA & FAUNA ═══ -->
<section class="py-16 md:py-24 bg-neutral-900 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="section-label mb-4">Biodiversity</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4">Flora & Fauna</h2>
            <p class="text-gray-400 text-sm max-w-xl mx-auto">A rich tapestry of life — over 300 species of birds, rare plants, and iconic mammals</p>
        </div>

        <div class="flex justify-center gap-3 mb-10" data-aos="fade-up" data-aos-delay="100">
            <button class="ff-tab active" onclick="switchFloraFaunaTab('flora',this)">Flora</button>
            <button class="ff-tab" onclick="switchFloraFaunaTab('fauna',this)">Fauna</button>
        </div>

        <!-- Flora Panel -->
        <div id="tab-flora" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <p class="section-label mb-3">Vegetation</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Flora of <span style="color:var(--text2);">Kanha</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        The Kanha Tiger Reserve is a rich, tropical moist dry deciduous forest ecosystem, dominated by Sal Trees, vast meadows, and bamboo thickets. The forest contains over 1000 species of flowering plants.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        The park's vegetation includes significant species like Saja, Lendia, Dhawa, Tendu, Palas, Bija, and Mahua. There are other species of climbers, forbs, and grass — a unique experience only in Kanha Tiger Reserve.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sal Trees</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Bamboo</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Saja</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Lendia</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Dhawa</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Tendu</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Palas</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Bija</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Mahua</span>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;left:16px;right:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/card1.webp" alt="Kanha Flora" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;left:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Flora</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">1000+ Flowering Plant Species</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fauna Panel -->
        <div id="tab-fauna" class="hidden" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div>
                    <div class="relative">
                        <div style="position:absolute;top:16px;right:16px;left:-16px;bottom:-16px;border:1px solid rgba(142,22,22,0.25);border-radius:1rem;z-index:0;"></div>
                        <img src="https://wildmarkresort.com/images/Tiger.webp" alt="Kanha Fauna" class="w-full h-[380px] md:h-[460px] object-cover rounded-2xl shadow-2xl" style="position:relative;z-index:1;" />
                        <div style="position:absolute;bottom:20px;right:20px;z-index:2;background:rgba(248,238,223,0.93);backdrop-filter:blur(8px);border-left:3px solid var(--text2);padding:0.5rem 1rem;">
                            <p style="color:var(--text2);font-size:0.65rem;letter-spacing:0.15em;font-family:'Roboto Mono',monospace;margin:0;text-transform:uppercase;">Fauna</p>
                            <p style="color:var(--text1);font-size:0.6rem;margin:0;font-family:'Roboto Mono',monospace;">300+ Bird Species · ~60 Royal Bengal Tigers</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="section-label mb-3">Wildlife</p>
                    <h3 class="text-2xl md:text-4xl font-serif mb-6 leading-tight">Fauna of <span style="color:var(--text2);">Kanha</span></h3>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-5 text-justify">
                        The main attraction of Kanha is <strong style="color:var(--text2);">Barasingha</strong>, found only in Kanha Tiger Reserve. Kanha is famous for its Royal Bengal Tigers, Indian Leopards, Chital, Sambar, Barasingha, Gaur, Dhole, Sloth Bear, Indian Jackal, and Bengal Fox.
                    </p>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-6 text-justify">
                        The reserve hosts around <strong style="color:var(--text2);">300 species of birds</strong> including Indian Paradise Flycatcher, Black Ibis, Asian Green Bee-eater, Crested Serpent Eagle, Indian Grey Hornbill, Indian Roller, Indian Peafowl, Steppe Eagle, White-breasted Kingfisher, Woodpeckers, Vultures and many more.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Royal Bengal Tiger</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Barasingha</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Indian Leopard</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sloth Bear</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Dhole</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Indian Gaur</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Chital</span>
                        <span style="background:rgba(142,22,22,0.1);border:1px solid rgba(142,22,22,0.3);color:var(--text2);font-size:0.7rem;padding:0.3rem 0.8rem;border-radius:999px;font-family:'Roboto Mono',monospace;">Sambar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ THINGS TO DO ═══ -->
<section class="py-16 md:py-24 bg-black overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="section-label mb-4">Beyond the Safari</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4">Things To Do in Kanha</h2>
            <p class="text-gray-400 text-sm md:text-base max-w-2xl mx-auto">The adventure at Kanha doesn't end when the safari does — there's a whole world to explore.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="50">
                <div class="activity-icon"><i class="fas fa-binoculars"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Jungle Safari</h5>
                    <p class="text-gray-400 text-xs">Guided jeep safaris through all 4 core zones — morning and evening sessions available.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="100">
                <div class="activity-icon"><i class="fas fa-bicycle"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Khatiya Bicycle Trail</h5>
                    <p class="text-gray-400 text-xs">Explore the buffer zone trails by bicycle — a peaceful, eco-friendly morning experience.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="150">
                <div class="activity-icon"><i class="fas fa-mountain-sun"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Bamni Dadar Sunset</h5>
                    <p class="text-gray-400 text-xs">Watch spectacular hues of sky during golden hour at Bamni Dadar — Kanha's sunset point.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="200">
                <div class="activity-icon"><i class="fas fa-landmark"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Kanha Museum</h5>
                    <p class="text-gray-400 text-xs">Step back in time and discover cool artifacts and conservation stories at the forest museum.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="250">
                <div class="activity-icon"><i class="fas fa-dove"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Birdwatching Walks</h5>
                    <p class="text-gray-400 text-xs">Guided nature walks in the buffer zone to spot 200+ species of resident and migratory birds.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="300">
                <div class="activity-icon"><i class="fas fa-house-chimney-window"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Eco-Friendly Village Visits</h5>
                    <p class="text-gray-400 text-xs">Explore authentic mud villages near Kanha and experience the warmth of local tribal culture.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="350">
                <div class="activity-icon"><i class="fas fa-camera"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Wildlife Photography</h5>
                    <p class="text-gray-400 text-xs">Kanha's light and landscape are legendary among photographers — golden hour is unmissable.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="400">
                <div class="activity-icon"><i class="fas fa-fire"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Bonfire Evenings</h5>
                    <p class="text-gray-400 text-xs">Wind down after a thrilling safari with a bonfire, hot chai, and stories of the jungle.</p>
                </div>
            </div>
            <div class="activity-pill" data-aos="fade-up" data-aos-delay="450">
                <div class="activity-icon"><i class="fas fa-person-hiking"></i></div>
                <div>
                    <h5 class="font-serif font-semibold text-sm mb-1">Buffer Zone Walks</h5>
                    <p class="text-gray-400 text-xs">Walk designated buffer trails under expert naturalist guidance — intimate jungle encounters.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ BEST TIME / SEASONS ═══ -->
<section class="py-16 md:py-24 bg-neutral-900 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <div data-aos="fade-right">
                <p class="section-label mb-4">Plan Your Visit</p>
                <h2 class="text-3xl md:text-4xl font-serif mb-6">Best Time to Visit</h2>
                <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-8">
                    Kanha Tiger Reserve is open from October to June. The park closes during monsoon (July–September) for forest regeneration. Each season offers a unique experience.
                </p>
                <div class="overflow-hidden rounded-xl" style="border:1px solid rgba(142,22,22,0.2);">
                    <div class="grid grid-cols-3 gap-0 px-4 py-3" style="background:rgba(142,22,22,0.08);">
                        <span style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:var(--text2);text-transform:uppercase;">Season</span>
                        <span style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:var(--text2);text-transform:uppercase;">Months</span>
                        <span style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.12em;color:var(--text2);text-transform:uppercase;">Status</span>
                    </div>
                    <div class="season-row grid grid-cols-3 gap-0 px-4 py-3.5">
                        <span class="font-serif font-semibold text-sm">Winter</span>
                        <span class="text-gray-400 text-xs self-center">Oct – Feb</span>
                        <span class="season-badge badge-best">Best</span>
                    </div>
                    <div class="season-row grid grid-cols-3 gap-0 px-4 py-3.5">
                        <span class="font-serif font-semibold text-sm">Summer</span>
                        <span class="text-gray-400 text-xs self-center">Mar – Jun</span>
                        <span class="season-badge badge-good">Good</span>
                    </div>
                    <div class="season-row grid grid-cols-3 gap-0 px-4 py-3.5">
                        <span class="font-serif font-semibold text-sm">Monsoon</span>
                        <span class="text-gray-400 text-xs self-center">Jul – Sep</span>
                        <span class="season-badge badge-closed">Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ AWARDS ═══ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black awards-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="section-label mb-3 md:mb-4" data-aos="fade-down">EXCELLENCE • RECOGNITION • TRUST</p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" data-aos="zoom-in" data-aos-duration="1000">Awards and Recognitions</h2>
            <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers' Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers' Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers' Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1;border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers' Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ FAQ ═══ -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">
        <div class="text-center mb-10 md:mb-14">
            <p class="section-label mb-3" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" data-aos-duration="1000">
            <!-- LEFT COLUMN -->
            <div class="faq-col">
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Where is Wildmark Resort located near Khatiya Gate in Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Why is Khatiya Gate preferred for Kanha resort booking?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How far is Wildmark Resort from Khatiya Safari Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning &amp; evening safaris.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort suitable for Kanha jungle safari bookings?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Can I book Kanha safari along with Wildmark Resort stay?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort can arrange both jungle resort stay and Khatiya Gate safari bookings together.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What types of rooms are available at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly &amp; has provisions for differently &amp; specially abled guests with wheel chair access.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are meals included in Kanha resort booking at Wildmark Resort?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What is the best time to book a resort near Khatiya Gate Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is advance booking required for Kanha resorts near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort open during the monsoon season?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">The resort remains open, and Buffer safaris are available during monsoon season.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="faq-col">
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort family friendly?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort is family &amp; pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently &amp; specially abled guests.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort provide pickup and drop services?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort budget friendly compared to other Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Are group bookings allowed at Wildmark Resort Kanha?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer forest or jungle view rooms?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Is Wildmark Resort safe for solo travelers?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">What documents are required at check-in for Kanha resorts?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Guests must carry a valid government issued photo ID at the time of check in.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">Does Wildmark Resort offer activities besides jungle safari?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item bg-black border border-neutral-800 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center hover:bg-neutral-800 transition">
                        <span class="font-serif text-white">How can I get the best price for Kanha resort booking at Khatiya Gate?</span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 bg-neutral-800/50 border-t border-neutral-700">
                            <p class="text-sm md:text-base text-gray-300 leading-relaxed">Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ CTA BANNER ═══ -->
<section class="cta-banner py-16 md:py-24 overflow-hidden" data-aos="fade-up">
    <div class="container mx-auto max-w-7xl px-4 md:px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <p style="font-family:'Roboto Mono',monospace;font-size:.65rem;letter-spacing:.25em;text-transform:uppercase;color:rgba(232,201,153,.8);margin-bottom:1rem;">Wildmark Resort — Near Khatia Gate</p>
                <h2 class="text-3xl md:text-5xl font-serif mb-6 leading-tight" style="color:#fff !important;">
                    Ready to Experience<br />Kanha First-Hand?
                </h2>
                <p style="color:rgba(248,238,223,.8);font-size:.9rem;line-height:1.7;margin-bottom:2rem;max-width:32rem;">
                    Wildmark Resort places you at the doorstep of Kanha's magic. Closest luxury resort to Khatia Gate — wake up to the jungle, step out on safari, return to comfort. We handle everything from safari bookings to transfers.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://wildmarkresort.com/contact/" style="background:#F8EEDF;color:#8E1616;font-weight:700;font-size:.8rem;letter-spacing:.1em;padding:.75rem 2rem;border-radius:.25rem;transition:all .3s;display:inline-block;" onmouseover="this.style.background='#E8C999'" onmouseout="this.style.background='#F8EEDF'">BOOK YOUR STAY</a>
                    <a href="https://wildmarkresort.com/kanha-safari-tour-package/" style="border:2px solid rgba(248,238,223,.5);color:#F8EEDF;font-weight:300;font-size:.8rem;letter-spacing:.1em;padding:.75rem 2rem;border-radius:.25rem;transition:all .3s;display:inline-block;" onmouseover="this.style.borderColor='#F8EEDF'" onmouseout="this.style.borderColor='rgba(248,238,223,.5)'">VIEW PACKAGES</a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div style="background:rgba(232,201,153,.12);border:1px solid rgba(232,201,153,.25);border-radius:.75rem;padding:1.5rem;text-align:center;">
                    <i class="fas fa-map-marker-alt text-2xl mb-3" style="color:var(--bg1);"></i>
                    <h5 class="font-serif font-bold mb-1" style="color:#fff !important;">Closest to Gate</h5>
                    <p style="font-size:.75rem;color:rgba(248,238,223,.7);">Minutes from Khatia Entry</p>
                </div>
                <div style="background:rgba(232,201,153,.12);border:1px solid rgba(232,201,153,.25);border-radius:.75rem;padding:1.5rem;text-align:center;">
                    <i class="fas fa-concierge-bell text-2xl mb-3" style="color:var(--bg1);"></i>
                    <h5 class="font-serif font-bold mb-1" style="color:#fff !important;">Safari Assistance</h5>
                    <p style="font-size:.75rem;color:rgba(248,238,223,.7);">Full booking support</p>
                </div>
                <div style="background:rgba(232,201,153,.12);border:1px solid rgba(232,201,153,.25);border-radius:.75rem;padding:1.5rem;text-align:center;">
                    <i class="fas fa-car text-2xl mb-3" style="color:var(--bg1);"></i>
                    <h5 class="font-serif font-bold mb-1" style="color:#fff !important;">Transfers Available</h5>
                    <p style="font-size:.75rem;color:rgba(248,238,223,.7);">Nagpur & Raipur pickup</p>
                </div>
                <div style="background:rgba(232,201,153,.12);border:1px solid rgba(232,201,153,.25);border-radius:.75rem;padding:1.5rem;text-align:center;">
                    <i class="fas fa-award text-2xl mb-3" style="color:var(--bg1);"></i>
                    <h5 class="font-serif font-bold mb-1" style="color:#fff !important;">Award-Winning</h5>
                    <p style="font-size:.75rem;color:rgba(248,238,223,.7);">TripAdvisor Choice 4x</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Offer Floating Button -->
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
    <span class="absolute -top-1 -right-1 text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce" style="background:var(--bg1);color:var(--text2);">New</span>
</button>


<!-- Special Offer Popup Modal -->
<div id="specialOfferPopup"
    class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[100] hidden items-center justify-center p-4"
    onclick="closeIfClickedOutside(event)">
    <div class="border-2 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative animate-slideIn"
        style="background-color: var(--bg2); border-color: var(--text2);"
        onclick="event.stopPropagation()">

        <button onclick="toggleSpecialOfferPopup()" class="absolute top-4 right-4 transition z-10" style="color: var(--text1);"
            onmouseover="this.style.color='var(--text2)';" onmouseout="this.style.color='var(--text1)';">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="p-6 md:p-8 rounded-t-2xl text-white" style="background: linear-gradient(to right, var(--text2), #b01e1e);">
            <div class="flex items-center gap-3 mb-2">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                </svg>
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white" style="color: var(--bg2) !important;">Special Offers</h3>
            </div>
            <p class="text-sm" style="color: rgba(248,238,223,0.9);">Limited time deals on resort packages & safari tours</p>
        </div>

        <div class="p-6 md:p-8 space-y-6">
            <!-- Offer 1 -->
            <div class="border rounded-xl p-5 transition" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2" style="background-color: var(--text2);">BESTSELLER</span>
                        <h4 class="text-xl font-serif font-bold" style="color: var(--text1) !important;">2N/3D Resort + Safari Package</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-sm line-through" style="color: rgba(0,0,0,0.4);">₹15,000</p>
                        <p class="text-2xl font-bold" style="color: var(--text2);">₹12,499</p>
                    </div>
                </div>
                <ul class="text-sm space-y-2 mb-4" style="color: var(--text1);">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>2 Nights Stay at Wildmark Resort (Near Khatia Gate)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>4 Jungle Safaris (Morning + Evening)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>All Meals Included (Breakfast, Lunch, Dinner)</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 flex-shrink-0" style="color: var(--text2);" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Complimentary Safari Permit Assistance</li>
                </ul>
                <a href="https://wildmarkresort.com/contact/" class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition" style="background-color: var(--text2);">BOOK NOW</a>
            </div>

            <!-- Offer 2 -->
            <div class="border rounded-xl p-5 transition" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2" style="background-color: #8E1616">EARLY BIRD</span>
                        <h4 class="text-xl font-serif font-bold" style="color: var(--text1) !important;">Advance Booking Discount</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold" style="color: var(--text2);">20% OFF</p>
                    </div>
                </div>
                <p class="text-sm mb-4" style="color: var(--text1);">Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March 31, 2025.</p>
                <a href="https://wildmarkresort.com/contact/" class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition" style="background-color: var(--text2);">BOOK NOW</a>
            </div>

            <!-- Offer 3 -->
            <div class="border rounded-xl p-5 transition" style="background-color: var(--bg1); border-color: rgba(142,22,22,0.3);">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block text-white text-xs font-bold px-3 py-1 rounded-full mb-2" style="background-color: #8E1616;">GROUP OFFER</span>
                        <h4 class="text-xl font-serif font-bold" style="color: var(--text1) !important;">Group Booking Special</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold" style="color: var(--text2);">₹10,999</p>
                        <p class="text-xs" style="color: rgba(0,0,0,0.5);">per person</p>
                    </div>
                </div>
                <p class="text-sm mb-4" style="color: var(--text1);">Special rates for groups of 6+ people. Perfect for families, corporate outings, and wildlife photography tours.</p>
                <a href="https://wildmarkresort.com/contact/" class="block text-white font-bold py-2 px-4 rounded-lg text-center text-sm transition" style="background-color: var(--text2);">Book Now</a>
            </div>
        </div>

        <div class="border-t p-4 text-center rounded-b-2xl" style="background-color: rgba(232,201,153,0.3); border-top-color: rgba(142,22,22,0.3);">
            <p class="text-sm font-semibold" style="color: var(--text2);">⏰ Offers valid till March 31, 2025 | Terms & Conditions Apply</p>
        </div>
    </div>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
    aria-label="WhatsApp">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path
            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
</a>

  <script>


// Flora/Fauna Tabs - UPDATED
function switchFloraFaunaTab(tab, btn) {
    // Hide all flora/fauna tabs specifically
    document.querySelectorAll('[id^="tab-flora-"], [id^="tab-fauna-"]').forEach(el => el.classList.add('hidden'));
    // Remove active from flora/fauna buttons only
    document.querySelectorAll('.ff-tab').forEach(b => b.classList.remove('active'));
    // Show selected tab
    document.getElementById('tab-' + tab)?.classList.remove('hidden');
    // Activate button
    btn.classList.add('active');
}

// Flora/Fauna Tabs - RENAMED FUNCTION
function switchFloraFaunaTab(tab, btn) {
    document.querySelectorAll('[id^="tab-"]').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.ff-tab').forEach(b => b.classList.remove('active'));
    document.getElementById('tab-' + tab)?.classList.remove('hidden');
    btn.classList.add('active');
}

// Zones Tabs - SEPARATE FUNCTION
function switchZoneTab(tabId) {
    // Remove active class from all tabs and content
    document.querySelectorAll('.zone-tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.zone-tab-content').forEach(content => content.classList.remove('active'));

    // Add active class to selected tab and content
    event.target.classList.add('active');
    document.getElementById(tabId).classList.add('active');
}

// FAQ Accordion
function toggleFaq(el) {
    const answer = el.nextElementSibling;
    const icon = el.querySelector('.faq-icon');
    const isOpen = answer.classList.contains('open');
    document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
    document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('open'));
    if (!isOpen) {
        answer.classList.add('open');
        icon.classList.add('open');
    }
}
</script>
<script>
// Zone/Gate Tabs Function
function switchZoneGateTab(tab, btn) {
    // Hide all panels
    document.querySelectorAll('[id^="tab-"]').forEach(el => el.classList.add('hidden'));
    // Remove active from all buttons
    document.querySelectorAll('.zone-gate-tab').forEach(b => b.classList.remove('active'));
    // Show selected panel
    document.getElementById('tab-' + tab)?.classList.remove('hidden');
    // Activate clicked button
    btn.classList.add('active');
}
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
<script>
// FAQ Accordion Functionality
// FAQ Accordion Handler
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
<script>
function switchMainTab(tab, btn) {
  document.querySelectorAll('.main-safari-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('panel-zones').classList.add('hidden');
  document.getElementById('panel-options').classList.add('hidden');
  document.getElementById('panel-' + tab).classList.remove('hidden');
}
</script>

<?php 


// Include header
include 'includes/footer.php'; 
?>