<?php 
// Set page-specific title
$pageTitle = "Restaurant - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

<style>
/* ===== ROOT COLOR VARIABLES - SAME AS HOME PAGE ===== */
:root {
    --bg1: #E8C999;
    --bg2: #F8EEDF;
    --text1: #000000;
    --text2: #8E1616;
}

@keyframes slideIn {
    from { opacity: 0; transform: scale(0.9) translateY(20px); }
    to { opacity: 1; transform: scale(1) translateY(0); }
}
.animate-slideIn { animation: slideIn 0.3s ease-out; }

#specialOfferPopup > div { scrollbar-width: none; -ms-overflow-style: none; }
#specialOfferPopup > div::-webkit-scrollbar { display: none; }

/* ===== MODERN MENU CONTAINER ===== */
.modern-menu-container {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 2rem;
    min-height: 600px;
}
@media (max-width: 768px) {
    .modern-menu-container { grid-template-columns: 1fr; gap: 1rem; }
}

/* ===== VERTICAL TAB NAV ===== */
.modern-tab-nav {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    position: sticky;
    top: 100px;
    height: fit-content;
}
@media (max-width: 768px) {
    .modern-tab-nav {
        position: static;
        flex-direction: row;
        overflow-x: auto;
        gap: 0.5rem;
        padding-bottom: 0.5rem;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .modern-tab-nav::-webkit-scrollbar { display: none; }
}

.modern-tab-item {
    background: rgba(232, 201, 153, 0.5);
    border: 2px solid rgba(142, 22, 22, 0.15);
    border-radius: 1rem;
    padding: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}
@media (max-width: 768px) {
    .modern-tab-item {
        flex-direction: column;
        min-width: 120px;
        padding: 0.75rem;
        text-align: center;
        flex-shrink: 0;
    }
    .modern-tab-item:hover { transform: translateY(-3px); }
}

.modern-tab-item:hover {
    border-color: rgba(142, 22, 22, 0.5);
    background: rgba(142, 22, 22, 0.1);
    transform: translateX(5px);
}

.modern-tab-item.active {
    border-color: var(--text2);
    background: linear-gradient(135deg, rgba(142, 22, 22, 0.15) 0%, rgba(232, 201, 153, 0.4) 100%);
    box-shadow: 0 4px 20px rgba(142, 22, 22, 0.2);
}

.modern-tab-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.modern-tab-icon i { font-size: 1.1rem; color: var(--bg2); }

.modern-tab-label h4 {
    color: var(--text1);
    font-size: 0.9rem;
    font-weight: 600;
    margin: 0;
    font-family: "Roboto Slab", serif;
}
.modern-tab-label p { color: rgba(0,0,0,0.5); font-size: 0.7rem; margin: 0; margin-top: 0.2rem; }

/* ===== MENU PANEL ===== */
.modern-menu-panel { display: none; animation: fadeInUp 0.5s ease-in-out; }
.modern-menu-panel.active { display: block; }

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ===== VEG / NON-VEG SUB-TABS ===== */
.veg-nonveg-tabs {
    display: flex;
    gap: 0;
    margin-bottom: 1.5rem;
    border-radius: 0.75rem;
    overflow: hidden;
    border: 1.5px solid rgba(142, 22, 22, 0.2);
    width: fit-content;
}
.veg-nonveg-tab-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.6rem 1.4rem;
    cursor: pointer;
    font-size: 0.85rem;
    font-weight: 700;
    font-family: "Roboto Slab", serif;
    letter-spacing: 0.03em;
    transition: all 0.25s ease;
    background: rgba(232, 201, 153, 0.3);
    color: rgba(0,0,0,0.5);
    border: none;
    outline: none;
}
.veg-nonveg-tab-btn .dot {
    width: 12px; height: 12px;
    border-radius: 50%;
    display: inline-block;
    flex-shrink: 0;
    border: 2px solid transparent;
}
.veg-nonveg-tab-btn.veg-btn .dot { background: #22c55e; border-color: #22c55e; }
.veg-nonveg-tab-btn.nonveg-btn .dot { background: #ef4444; border-color: #ef4444; }
.veg-nonveg-tab-btn.active.veg-btn { background: rgba(34, 197, 94, 0.12); color: #16a34a; box-shadow: inset 0 -3px 0 #22c55e; }
.veg-nonveg-tab-btn.active.nonveg-btn { background: rgba(239, 68, 68, 0.12); color: #dc2626; box-shadow: inset 0 -3px 0 #ef4444; }
.veg-nonveg-tab-btn:hover:not(.active) { background: rgba(142,22,22,0.08); color: var(--text1); }

.veg-nonveg-content { display: none; animation: fadeInUp 0.35s ease; }
.veg-nonveg-content.active { display: block; }

/* ===== PREMIUM MENU CARDS ===== */
.premium-menu-card {
    background: rgba(248, 238, 223, 0.8);
    border: 1px solid rgba(142, 22, 22, 0.12);
    border-left: 4px solid var(--text2);
    border-radius: 1rem;
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
    transition: all 0.3s ease;
}
.premium-menu-card:hover {
    border-left-color: #b01e1e;
    background: rgba(232, 201, 153, 0.6);
    transform: translateX(8px);
    box-shadow: 0 8px 24px rgba(142, 22, 22, 0.15);
}
.premium-menu-card.veg-card { border-left-color: #22c55e; }
.premium-menu-card.veg-card:hover { border-left-color: #16a34a; background: rgba(34,197,94,0.06); box-shadow: 0 8px 24px rgba(34,197,94,0.12); }
.premium-menu-card.nonveg-card { border-left-color: #ef4444; }
.premium-menu-card.nonveg-card:hover { border-left-color: #dc2626; background: rgba(239,68,68,0.06); box-shadow: 0 8px 24px rgba(239,68,68,0.12); }

.premium-menu-card .dish-info { flex: 1; }
.premium-menu-card .dish-name {
    font-family: "Roboto Slab", serif;
    font-size: 1.05rem;
    color: var(--text1);
    font-weight: 700;
    margin-bottom: 0.4rem;
    line-height: 1.4;
}
.premium-menu-card .dish-desc {
    font-family: "Roboto Mono", monospace;
    font-size: 0.82rem;
    color: rgba(0,0,0,0.6);
    line-height: 1.6;
}

/* ===== VEG / NON-VEG BADGES ===== */
.veg-badge, .nonveg-badge {
    width: 24px; height: 24px;
    border-radius: 4px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.veg-badge { border: 2px solid #22c55e; }
.veg-badge::after { content:''; width:10px; height:10px; background:#22c55e; border-radius:50%; }
.nonveg-badge { border: 2px solid #ef4444; }
.nonveg-badge::after { content:''; width:10px; height:10px; background:#ef4444; border-radius:50%; }

/* ===== BUFFET HIGHLIGHT ===== */
.buffet-highlight {
    background: rgba(232, 201, 153, 0.5);
    border: 2px solid rgba(142, 22, 22, 0.25);
    border-radius: 1.5rem;
    padding: 2rem;
    margin-top: 2rem;
}
.buffet-highlight h4 {
    font-family: "Roboto Slab", serif;
    color: var(--text2);
    font-size: 1.2rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.buffet-highlight ul { list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px,1fr)); gap: 1rem; }
.buffet-highlight ul li { font-family: "Roboto Mono", monospace; font-size: 0.85rem; color: var(--text1); padding-left: 1.5rem; position: relative; }
.buffet-highlight ul li::before { content:'✓'; position:absolute; left:0; color:var(--text2); font-weight:bold; }

/* ===== CATEGORY HEADER ===== */
.category-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 2px solid rgba(142, 22, 22, 0.2); }
.category-header-icon { width:60px; height:60px; background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%); border-radius:50%; display:flex; align-items:center; justify-content:center; box-shadow: 0 8px 24px rgba(142,22,22,0.25); }
.category-header-icon i { font-size:1.8rem; color:var(--bg2); }
.category-header-text h3 { font-family:"Roboto Slab",serif; color:var(--text1); font-size:1.8rem; font-weight:700; margin:0; }
.category-header-text p { color:var(--text2); font-size:0.85rem; margin:0; margin-top:0.25rem; text-transform:uppercase; letter-spacing:1px; }

/* ===== WHY DINE CARDS ===== */
.why-choose-card {
    background: rgba(232, 201, 153, 0.4);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(142, 22, 22, 0.2);
    border-radius: 1rem;
    padding: 1.5rem;
    text-align: left;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.why-choose-card .icon-wrapper { width:50px; height:50px; background: linear-gradient(135deg, var(--text2) 0%, #b01e1e 100%); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 0 1rem 0; box-shadow:0 8px 20px rgba(142,22,22,0.2); }
.why-choose-card .icon-wrapper i { font-size:1.4rem; color:var(--bg2); }
.why-choose-card h4 { color:var(--text2); font-size:1.1rem; font-weight:600; margin-bottom:0.75rem; font-family:"Roboto Slab",serif; line-height:1.4; }
.why-choose-card p { color:var(--text1); font-size:0.85rem; line-height:1.65; font-family:"Roboto Mono",monospace; }

/* ===== AWARD CARDS ===== */
.award-card { transition: transform 0.3s ease; }
.award-card:hover { transform: translateY(-4px); }
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }
@media (max-width: 768px) { .award-card > div { min-height: 280px !important; } .award-image { max-width: 220px; } }

/* ===== FAQ ===== */
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; align-items: start; }
.faq-col { display: flex; flex-direction: column; gap: 14px; width: 100%; min-width: 0; }
.faq-question { min-height: 64px; height: 64px; }
.faq-question span { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block; font-size: 15px !important; }
@media screen and (max-width: 860px) {
    .faq-grid { grid-template-columns: 1fr !important; }
    .faq-question { height: auto !important; min-height: unset !important; }
    .faq-question span { white-space: normal !important; overflow: visible !important; text-overflow: unset !important; font-size: 14px !important; }
}
</style>

<!-- HERO -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('https://wildmarkresort.com/images/deer.webp') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>

</header>

<!-- INTRO -->
<section class="py-10 md:py-16" style="background-color: var(--bg2);">
    <div class="container mx-auto max-w-5xl text-center px-4 md:px-6">
        <p class="text-xs tracking-widest mb-3 font-light" style="color:var(--text2);" data-aos="fade-down">
            LOCAL CUISINE • MULTI-CUISINE • FRESHLY COOKED
        </p>
        
        <h2 class="text-3xl md:text-4xl font-serif font-light mb-5" style="color:var(--text2);" data-aos="zoom-in">
            Our Restaurant

        </h2>
        <p class="text-sm md:text-base leading-relaxed max-w-3xl mx-auto" style="color:var(--text1);" data-aos="fade-up">
            At Wildmark Resort, our restaurant brings you the best of South Indian, North Indian, Chinese, and local cuisine — all freshly prepared by our skilled chefs. Every meal is crafted with care, served with warmth in the heart of the jungle.
        </p>
    </div>
</section>

<!-- MODERN MENU SECTION -->
<section id="menu" class="py-12 md:py-20" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">

        <div class="text-center mb-12">
            <p class="text-xs tracking-widest mb-3 font-light" style="color:var(--text2);" data-aos="fade-down">EXPLORE OUR MENU</p>
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-3" style="color:var(--text2);" data-aos="zoom-in">Our Menu</h2>
            <p style="color:rgba(0,0,0,0.5); font-size:0.9rem;">Click on a category to explore</p>
        </div>

        <div class="modern-menu-container">

            <!-- Vertical Tab Navigation -->
            <div class="modern-tab-nav">

                <div class="modern-tab-item active" data-menu="southindian">
                    <div class="modern-tab-icon"><i class="fas fa-pepper-hot"></i></div>
                    <div class="modern-tab-label"><h4>South Indian</h4><p>Traditional</p></div>
                </div>

                <div class="modern-tab-item" data-menu="northindian">
                    <div class="modern-tab-icon"><i class="fas fa-drumstick-bite"></i></div>
                    <div class="modern-tab-label"><h4>North Indian</h4><p>Punjabi Style</p></div>
                </div>

                <div class="modern-tab-item" data-menu="chinese">
                    <div class="modern-tab-icon"><i class="fas fa-bowl-food"></i></div>
                    <div class="modern-tab-label"><h4>Chinese</h4><p>Indo-Chinese</p></div>
                </div>

                <div class="modern-tab-item" data-menu="fastfood">
                    <div class="modern-tab-icon"><i class="fas fa-burger"></i></div>
                    <div class="modern-tab-label"><h4>Quick Bites</h4><p>Snacks</p></div>
                </div>

                <div class="modern-tab-item" data-menu="eggs">
                    <div class="modern-tab-icon"><i class="fas fa-egg"></i></div>
                    <div class="modern-tab-label"><h4>Egg Dishes</h4><p>Protein Rich</p></div>
                </div>

            </div>

            <!-- Menu Content Panels -->
            <div class="modern-menu-content">

                <!-- ===== SOUTH INDIAN ===== -->
                <div class="modern-menu-panel active" data-menu="southindian">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon"><i class="fas fa-pepper-hot"></i></div>
                        <div class="category-header-text"><h3>South Indian Cuisine</h3><p>Authentic Traditional Flavours</p></div>
                    </div>

                    <div class="veg-nonveg-tabs" data-panel="southindian">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="si-veg"><span class="dot"></span> Veg</button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="si-nonveg"><span class="dot"></span> Non-Veg</button>
                    </div>

                    <div class="veg-nonveg-content active" id="si-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="dish-info"><div class="dish-name">Idli</div><div class="dish-desc">Soft steamed rice cakes served with chutney &amp; sambar</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="150">
                                <div class="dish-info"><div class="dish-name">Dosa</div><div class="dish-desc">Crispy fermented crepe served with chutney &amp; sambar</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="dish-info"><div class="dish-name">Medu Vada</div><div class="dish-desc">Crunchy lentil doughnuts served with chutney &amp; sambar</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="250">
                                <div class="dish-info"><div class="dish-name">Puri &amp; Kizhangu</div><div class="dish-desc">Deep-fried puri served with spiced potato curry</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" >
                                <div class="dish-info"><div class="dish-name">Vegetable Dum Biryani</div><div class="dish-desc">Aromatic slow-cooked South Indian style vegetable biryani</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="350">
                                <div class="dish-info"><div class="dish-name">Tomato Rice</div><div class="dish-desc">Tangy South Indian style tomato rice with tempering</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" >
                                <div class="dish-info"><div class="dish-name">Lemon Rice</div><div class="dish-desc">Zesty lemon-tempered rice with peanuts and curry leaves</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="450">
                                <div class="dish-info"><div class="dish-name">Curd Rice</div><div class="dish-desc">Creamy curd rice with tempered mustard and ginger — a cooling classic</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card" data-aos="fade-up" >
                                <div class="dish-info"><div class="dish-name">Paruppu Sadham (Dal Rice)</div><div class="dish-desc">Comforting South Indian lentil rice with ghee and pickle</div></div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>
                        <div class="buffet-highlight" data-aos="fade-up">
                            <h4><i class="fas fa-utensils"></i> Buffet South Indian Meals</h4>
                            <ul>
                                <li>Steamed White Rice</li><li>Sambar with seasonal vegetables</li>
                                <li>Rasam varieties</li><li>Butter Milk</li>
                                <li>Soft Chapathi</li><li>Vegetable Poriyals</li>
                                <li>Pickle &amp; Appalam</li><li>Payasam (dessert)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="veg-nonveg-content" id="si-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="dish-info"><div class="dish-name">South Indian Chicken Dum Biryani</div><div class="dish-desc">Famous slow-cooked South Indian style chicken biryani</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="150">
                                <div class="dish-info"><div class="dish-name">Fish Curry</div><div class="dish-desc">Fresh fish in a spiced South Indian coconut-based curry</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="dish-info"><div class="dish-name">Tawa Fish Fry</div><div class="dish-desc">Spice-marinated fish, shallow-fried on a hot tawa</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="250">
                                <div class="dish-info"><div class="dish-name">Wide Variety of Chicken Dishes</div><div class="dish-desc">Various South Indian chicken preparations — as per availability</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" >
                                <div class="dish-info"><div class="dish-name">Mutton Dishes</div><div class="dish-desc">Rich &amp; flavorful mutton preparations based on availability</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== NORTH INDIAN ===== -->
                <div class="modern-menu-panel" data-menu="northindian">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon"><i class="fas fa-drumstick-bite"></i></div>
                        <div class="category-header-text"><h3>North Indian Cuisine</h3><p>Rich &amp; Flavorful Punjabi Dishes</p></div>
                    </div>

                    <div class="veg-nonveg-tabs" data-panel="northindian">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="ni-veg"><span class="dot"></span> Veg</button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="ni-nonveg"><span class="dot"></span> Non-Veg</button>
                    </div>

                    <div class="veg-nonveg-content active" id="ni-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Tari Poha</div><div class="dish-desc">Fluffy flattened rice with spices, onions and a tangy gravy base</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Poori Aloo Sabji</div><div class="dish-desc">Golden deep-fried pooris with spiced aloo curry — a classic breakfast</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Upma</div><div class="dish-desc">Savory semolina upma tempered with mustard, curry leaves &amp; vegetables</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Paneer Butter Masala</div><div class="dish-desc">Cottage cheese in rich, creamy tomato-butter gravy</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Various Dal Preparations</div><div class="dish-desc">Dal Tadka, Dal Makhani &amp; more slow-simmered classics</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Seasonal Veg Sabji</div><div class="dish-desc">Fresh seasonal vegetables cooked in authentic Punjabi style</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Indian Breads (Roti / Naan)</div><div class="dish-desc">Freshly made rotis and naan baked in traditional style</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Tandoori Paneer</div><div class="dish-desc">Marinated paneer char-grilled in the tandoor</div></div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>
                        <div class="buffet-highlight">
                            <h4><i class="fas fa-utensils"></i> Buffet North Indian Meals</h4>
                            <ul>
                                <li>Fresh Salad</li><li>Roti (freshly made)</li>
                                <li>Steamed Rice</li><li>Dal</li>
                                <li>Paneer Dish</li><li>Seasonal Veg Sabji</li>
                                <li>Starter &amp; Soup</li><li>Pickle &amp; Papad</li><li>Dessert</li>
                            </ul>
                        </div>
                    </div>

                    <div class="veg-nonveg-content" id="ni-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Saoji Chicken</div><div class="dish-desc">Bold &amp; fiery Nagpur-style chicken curry — a house specialty</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Tandoori Chicken &amp; Items</div><div class="dish-desc">Marinated meats char-grilled in the tandoor with spices</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Egg Curry / Chicken Curry</div><div class="dish-desc">Rich onion-tomato gravy with tender chicken or boiled eggs</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Wide Variety of Chicken Dishes</div><div class="dish-desc">Multiple chicken preparations based on guest request &amp; availability</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Mutton Dishes</div><div class="dish-desc">Slow-cooked mutton in rich Indian spice gravy — as per availability</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Fish Dishes</div><div class="dish-desc">Fresh fish preparations in North Indian style — as per availability</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                        <div class="buffet-highlight">
                            <h4><i class="fas fa-utensils"></i> Buffet Non-Veg Additions</h4>
                            <ul>
                                <li>Egg Curry / Chicken Curry</li><li>Tandoori Items</li>
                                <li>Saoji Chicken</li><li>Non-Veg Starter</li>
                                <li>Mutton on request</li><li>Fish on request</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ===== CHINESE ===== -->
                <div class="modern-menu-panel" data-menu="chinese">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon"><i class="fas fa-bowl-food"></i></div>
                        <div class="category-header-text"><h3>Chinese Cuisine</h3><p>Popular Indo-Chinese Favorites</p></div>
                    </div>

                    <div class="veg-nonveg-tabs" data-panel="chinese">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="ch-veg"><span class="dot"></span> Veg</button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="ch-nonveg"><span class="dot"></span> Non-Veg</button>
                    </div>

                    <div class="veg-nonveg-content active" id="ch-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">All Soup Varieties (Veg)</div><div class="dish-desc">Hot &amp; sour, sweet corn, manchow soup &amp; more — pure veg</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Paneer Varieties</div><div class="dish-desc">Chilli paneer, paneer manchurian &amp; more Indo-Chinese paneer delights</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Veg Noodles</div><div class="dish-desc">Hakka &amp; schezwan style noodles tossed with fresh vegetables</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Veg Fried Rice</div><div class="dish-desc">Wok-tossed veg fried rice with soy sauce and crunchy veggies</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Veg Manchurian</div><div class="dish-desc">Crispy vegetable balls in spicy manchurian gravy</div></div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>
                    </div>

                    <div class="veg-nonveg-content" id="ch-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">All Chicken Varieties</div><div class="dish-desc">Chilli chicken, chicken manchurian, crispy honey chicken</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Chicken / Egg Noodles</div><div class="dish-desc">Chicken &amp; egg noodles — hakka &amp; schezwan style</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Egg &amp; Chicken Fried Rice</div><div class="dish-desc">Wok-tossed egg and chicken fried rice with authentic flavour</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Chicken Manchurian</div><div class="dish-desc">Juicy chicken in bold manchurian gravy — a crowd favourite</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Non-Veg Soup Varieties</div><div class="dish-desc">Chicken hot &amp; sour, chicken manchow and more hearty soups</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== FAST FOOD ===== -->
                <div class="modern-menu-panel" data-menu="fastfood">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon"><i class="fas fa-burger"></i></div>
                        <div class="category-header-text"><h3>Quick Bites &amp; Snacks</h3><p>Fast &amp; Delicious</p></div>
                    </div>

                    <div class="veg-nonveg-tabs" data-panel="fastfood">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="ff-veg"><span class="dot"></span> Veg</button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="ff-nonveg"><span class="dot"></span> Non-Veg</button>
                    </div>

                    <div class="veg-nonveg-content active" id="ff-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Maggi</div><div class="dish-desc">Classic instant noodles — a jungle camp favourite</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Veg Sandwich</div><div class="dish-desc">Freshly made veg sandwiches with chutney and sauces</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Chai — Indian Tea</div><div class="dish-desc">Freshly brewed spiced masala chai, served piping hot</div></div>
                                <div class="veg-badge"></div>
                            </div>
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info"><div class="dish-name">Coffee</div><div class="dish-desc">Hot brewed coffee — perfect after a morning safari</div></div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>
                    </div>

                    <div class="veg-nonveg-content" id="ff-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Non-Veg Sandwich</div><div class="dish-desc">Freshly made non-veg sandwiches with sauces and fillings</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Egg Maggi</div><div class="dish-desc">Classic Maggi noodles topped with a fried egg — jungle style</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== EGG VARIETIES ===== -->
                <div class="modern-menu-panel" data-menu="eggs">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon"><i class="fas fa-egg"></i></div>
                        <div class="category-header-text"><h3>All Egg Varieties</h3><p>Protein-Packed Goodness</p></div>
                    </div>

                    <div class="veg-nonveg-tabs" data-panel="eggs">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="eg-veg"><span class="dot"></span> Veg</button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="eg-nonveg"><span class="dot"></span> Non-Veg</button>
                    </div>

                    <div class="veg-nonveg-content active" id="eg-veg">
                        <div class="buffet-highlight" style="margin-top:0; margin-bottom:1.5rem;">
                            <h4><i class="fas fa-info-circle"></i> Note</h4>
                            <ul><li>All egg dishes are non-vegetarian. Please switch to the Non-Veg tab to view all egg preparations.</li></ul>
                        </div>
                    </div>

                    <div class="veg-nonveg-content" id="eg-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Omelette</div><div class="dish-desc">Plain, masala &amp; cheese omelettes made to order</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Egg Bhurji</div><div class="dish-desc">Spiced scrambled eggs with onion, tomato &amp; green chilli</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Egg Curry</div><div class="dish-desc">Boiled eggs simmered in a rich onion-tomato gravy</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Boiled Eggs</div><div class="dish-desc">Soft or hard boiled, served with seasoning</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info"><div class="dish-name">Fried Egg</div><div class="dish-desc">Sunny-side up or double-fried, served with toast</div></div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end modern-menu-content -->
        </div><!-- end modern-menu-container -->
    </div>
</section>

<!-- WHY DINE AT WILDMARK -->
<section class="py-12 md:py-20 px-4 md:px-6 overflow-hidden" style="background-color: var(--bg2);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color:var(--text2);" data-aos="fade-down">FRESHNESS • VARIETY • HOSPITALITY</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" style="color:var(--text2);" data-aos="zoom-in" >Why Dine at Wildmark</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto leading-relaxed" style="color:var(--text1);" data-aos="fade-up" data-aos-delay="200">
                Our kitchen is committed to fresh, wholesome cooking — every dish crafted with care and served with warmth in the heart of the jungle.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="why-choose-card" data-aos="fade-up"  data-aos-delay="100">
                <div class="icon-wrapper"><i class="fas fa-leaf"></i></div>
                <h4>Fresh Ingredients</h4>
                <p>We use fresh, locally sourced ingredients daily to ensure every meal is flavorful, healthy, and satisfying.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up"  data-aos-delay="200">
                <div class="icon-wrapper"><i class="fas fa-globe-asia"></i></div>
                <h4>Multi-Cuisine Variety</h4>
                <p>From South Indian idlis to Punjabi dals and Chinese noodles — our menu has something for every palate.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up"  >
                <div class="icon-wrapper"><i class="fas fa-fire"></i></div>
                <h4>Made-to-Order</h4>
                <p>Wide variety of Chicken, Mutton &amp; Fish dishes prepared fresh based on guest request &amp; ingredient availability.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up"  >
                <div class="icon-wrapper"><i class="fas fa-coffee"></i></div>
                <h4>All-Day Dining</h4>
                <p>From early morning chai before your safari to late night snacks — our kitchen stays ready for you all day.</p>
            </div>
        </div>
    </div>
</section>

<!-- AWARDS -->
<section class="py-12 md:py-20 px-4 md:px-6 overflow-hidden" style="background-color: var(--bg1);">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-xs tracking-widest mb-3 md:mb-4 font-light" style="color:var(--text2);" data-aos="fade-down">EXCELLENCE • RECOGNITION • TRUST</p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6" style="color:var(--text2);" data-aos="zoom-in" >Awards and Recognitions</h2>
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" style="color:var(--text1);" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials1.png" alt="TripAdvisor Travellers Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials2.png" alt="TripAdvisor Travellers Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"  >
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials3.png" alt="TripAdvisor Travellers Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up"   style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="https://wildmarkresort.com/images/testimonials4.jpeg" alt="TripAdvisor Travelers Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-12 md:py-20 px-4 md:px-6" style="background-color: var(--bg2);">
    <div class="mx-auto w-full" style="max-width: 1280px; padding: 0 24px;">
        <div class="text-center mb-10 md:mb-14">
            <p class="text-xs tracking-widest mb-3 font-light" style="color:var(--text2);" data-aos="fade-down">GUEST INFORMATION</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4" style="color:var(--text2);" data-aos="zoom-in">Wildmark Resort FAQs</h2>
            <p class="text-sm md:text-base max-w-3xl mx-auto" style="color:var(--text1);" data-aos="fade-up" data-aos-delay="200">
                Everything you need to know about Wildmark Resort — Best Resort in Kanha near Khatiya Gate
            </p>
        </div>

        <div class="faq-grid" data-aos="fade-up" >
            <!-- LEFT COLUMN -->
            <div class="faq-col">
                <?php
                $faqs_left = [
                    ["Where is Wildmark Resort located near Khatiya Gate in Kanha?", "Wildmark Resort Kanha is located close near the famous Khatiya Gate of Kanha National Park, offering quick and easy access to jungle safaris."],
                    ["Why is Khatiya Gate preferred for Kanha resort booking?", "Khatiya Gate is preferred because of entry to all the famous Core Zones as it offers rich wildlife sightings and has several good resorts like Wildmark Resort nearby to Khatiya Gate."],
                    ["How far is Wildmark Resort from Khatiya Safari Gate?", "Wildmark Resort is located just a few minutes' drive from Khatiya Gate (950 Meters), making it ideal for early morning & evening safaris."],
                    ["Is Wildmark Resort suitable for Kanha jungle safari bookings?", "Yes, Wildmark Resort is well suited for hassle free Kanha jungle safari bookings due to its location and safari assistance services."],
                    ["Can I book Kanha safari along with Wildmark Resort stay?", "Yes, Wildmark Resort can arrange both Jungle resort stay and Khatiya Gate safari bookings together."],
                    ["What types of rooms are available at Wildmark Resort Kanha?", "Wildmark Resort offers comfortable cottages and well furnished rooms suitable for couples, families, and groups. The resort is Pet friendly & has provisions for differently & specially abled guests with wheel chair access inside the resort premises."],
                    ["Are meals included in Kanha resort booking at Wildmark Resort?", "Most Wildmark Resort packages include breakfast, lunch, and dinner depending on the selected plan."],
                    ["What is the best time to book a resort near Khatiya Gate Kanha?", "The best time is from October to June when Kanha National Park is open for safaris. During monsoon season buffer zone safaris are available."],
                    ["Is advance booking required for Kanha resorts near Khatiya Gate?", "Yes, advance booking is strongly recommended during weekends, holidays, and peak safari season."],
                    ["Is Wildmark Resort open during the monsoon season?", "The resort remains open, and Buffer safaris are available during monsoon season."],
                ];
                foreach ($faqs_left as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden" style="background-color:var(--bg2); border-color:rgba(142,22,22,0.25);">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition"
                        onmouseover="this.style.backgroundColor='rgba(232,201,153,0.5)';" onmouseout="this.style.backgroundColor='transparent';">
                        <span class="font-serif" style="color:var(--text1);"><?= htmlspecialchars($faq[0]) ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color:var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color:rgba(232,201,153,0.3); border-top-color:rgba(142,22,22,0.2);">
                            <p class="text-sm md:text-base leading-relaxed" style="color:var(--text1);"><?= htmlspecialchars($faq[1]) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="faq-col">
                <?php
                $faqs_right = [
                    ["Is Wildmark Resort family friendly?", "Yes, Wildmark Resort is family & pet friendly and suitable for children and senior citizens. The resort also has wheelchair access for differently & specially abled guests."],
                    ["Does Wildmark Resort provide pickup and drop services?", "Pickup and drop services from nearby railway stations or airports can be arranged upon request in advance."],
                    ["Is Wildmark Resort budget friendly compared to other Kanha resorts?", "Wildmark Resort offers good value for money with comfortable stays and quality services near Khatiya Gate. The resort restaurant offers multi-cuisine dining with all food options."],
                    ["Are group bookings allowed at Wildmark Resort Kanha?", "Yes, Wildmark Resort accepts group bookings for corporate tours, school groups, and wildlife enthusiasts."],
                    ["Does Wildmark Resort offer forest or jungle view rooms?", "Some rooms and cottages at Wildmark Resort offer views of the surrounding forest area as it is constructed inside the Khatiya Buffer zone."],
                    ["Is Wildmark Resort safe for solo travelers?", "Yes, Wildmark Resort follows standard safety practices and is safe for solo travelers."],
                    ["What documents are required at check-in for Kanha resorts?", "Guests must carry a valid government issued photo ID at the time of check in."],
                    ["Does Wildmark Resort offer activities besides jungle safari?", "Yes, guests can enjoy nature walks, bird watching, nearby attractions and village visits arranged by the resort."],
                    ["How close are other Kanha resorts to Wildmark Resort near Khatiya Gate?", "Several Kanha resorts are located near Wildmark Resort, creating a well-connected stay zone near Khatiya Gate."],
                    ["How can I get the best price for Kanha resort booking at Khatiya Gate?", "Booking early, choosing weekday stays, and opting for stay plus safari packages usually gives the best price."],
                ];
                foreach ($faqs_right as $faq): ?>
                <div class="faq-item border rounded-xl overflow-hidden" style="background-color:var(--bg2); border-color:rgba(142,22,22,0.25);">
                    <button class="faq-question w-full text-left px-5 md:px-6 py-4 md:py-5 flex justify-between items-center transition"
                        onmouseover="this.style.backgroundColor='rgba(232,201,153,0.5)';" onmouseout="this.style.backgroundColor='transparent';">
                        <span class="font-serif" style="color:var(--text1);"><?= htmlspecialchars($faq[0]) ?></span>
                        <svg class="faq-icon w-5 h-5 md:w-6 md:h-6 flex-shrink-0 transition-transform duration-300" style="color:var(--text2);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="px-5 md:px-6 py-4 md:py-5 border-t" style="background-color:rgba(232,201,153,0.3); border-top-color:rgba(142,22,22,0.2);">
                            <p class="text-sm md:text-base leading-relaxed" style="color:var(--text1);"><?= htmlspecialchars($faq[1]) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>



>

<script>
// ===== MAIN MENU TAB SWITCHING =====
(function() {
    var tabItems = document.querySelectorAll('.modern-tab-item');
    var menuPanels = document.querySelectorAll('.modern-menu-panel');

    function switchMenu(targetMenu) {
        tabItems.forEach(function(t) { t.classList.remove('active'); });
        menuPanels.forEach(function(p) { p.classList.remove('active'); });
        var activeTab = document.querySelector('.modern-tab-item[data-menu="' + targetMenu + '"]');
        if (activeTab) activeTab.classList.add('active');
        var activePanel = document.querySelector('.modern-menu-panel[data-menu="' + targetMenu + '"]');
        if (activePanel) activePanel.classList.add('active');
    }

    tabItems.forEach(function(tab) {
        tab.addEventListener('click', function() {
            switchMenu(this.getAttribute('data-menu'));
        });
    });
})();

// ===== VEG / NON-VEG SUB-TAB SWITCHING =====
(function() {
    var subTabBtns = document.querySelectorAll('.veg-nonveg-tab-btn');
    subTabBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var tabsContainer = this.closest('.veg-nonveg-tabs');
            var targetId = this.getAttribute('data-target');
            tabsContainer.querySelectorAll('.veg-nonveg-tab-btn').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            var parentPanel = tabsContainer.closest('.modern-menu-panel');
            parentPanel.querySelectorAll('.veg-nonveg-content').forEach(function(c) { c.classList.remove('active'); });
            var target = document.getElementById(targetId);
            if (target) target.classList.add('active');
        });
    });
})();

// ===== FAQ ACCORDION =====
document.addEventListener('DOMContentLoaded', function() {
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

    function handleFaqResize() {
        var grid = document.querySelector('.faq-grid');
        if (!grid) return;
        grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
    }
    handleFaqResize();
    window.addEventListener('resize', handleFaqResize);
});

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

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        var popup = document.getElementById('specialOfferPopup');
        if (popup && !popup.classList.contains('hidden')) toggleSpecialOfferPopup();
    }
});
</script>

<?php 
include 'includes/footer.php'; 
?>