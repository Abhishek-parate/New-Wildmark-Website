<?php 
// Set page-specific title
$pageTitle = "Restaurant - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>


<!-- HERO -->
<header class="relative h-[50vh] md:h-[60vh] lg:h-[100vh] flex items-end"
        style="background: url('images/home3.webp') center/cover no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</header>

<!-- INTRO -->
<section class="py-8 md:py-12 bg-[#121212]">
    <div class="container mx-auto max-w-5xl text-center px-4 md:px-6">
        <p class="text-amber-500 text-xs tracking-widest mb-3 font-light" data-aos="fade-down">
            LOCAL CUISINE • MULTI-CUISINE • FRESHLY COOKED
        </p>
        <h2 class="text-3xl md:text-4xl font-serif font-light mb-5 text-white" data-aos="zoom-in">
            Taste the Flavours of India at Wildmark
        </h2>
        <p class="text-sm md:text-base text-gray-300 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up">
            At Wildmark Resort, our restaurant brings you the best of South Indian, North Indian, Chinese, and local cuisine — all freshly prepared by our skilled chefs.
        </p>
    </div>
</section>

<!-- MODERN MENU SECTION -->
<section id="menu" class="py-12 md:py-20 bg-neutral-900">
    <div class="container mx-auto max-w-7xl px-4 md:px-6">
        
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-3">Our Menu</h2>
            <p class="text-gray-400 text-sm">Click on a category to explore</p>
        </div>

        <!-- Modern Tab Layout -->
        <div class="modern-menu-container">
            
            <!-- Vertical Tab Navigation -->
            <div class="modern-tab-nav">
                
                <!-- Tab 1: South Indian -->
                <div class="modern-tab-item active" data-menu="southindian">
                    <div class="modern-tab-icon">
                        <i class="fas fa-pepper-hot"></i>
                    </div>
                    <div class="modern-tab-label">
                        <h4>South Indian</h4>
                        <p>Traditional</p>
                    </div>
                </div>

                <!-- Tab 2: North Indian -->
                <div class="modern-tab-item" data-menu="northindian">
                    <div class="modern-tab-icon">
                        <i class="fas fa-drumstick-bite"></i>
                    </div>
                    <div class="modern-tab-label">
                        <h4>North Indian</h4>
                        <p>Punjabi Style</p>
                    </div>
                </div>

                <!-- Tab 3: Chinese -->
                <div class="modern-tab-item" data-menu="chinese">
                    <div class="modern-tab-icon">
                        <i class="fas fa-bowl-food"></i>
                    </div>
                    <div class="modern-tab-label">
                        <h4>Chinese</h4>
                        <p>Indo-Chinese</p>
                    </div>
                </div>

                <!-- Tab 4: Fast Food -->
                <div class="modern-tab-item" data-menu="fastfood">
                    <div class="modern-tab-icon">
                        <i class="fas fa-burger"></i>
                    </div>
                    <div class="modern-tab-label">
                        <h4>Quick Bites</h4>
                        <p>Snacks</p>
                    </div>
                </div>

                <!-- Tab 5: Eggs -->
                <div class="modern-tab-item" data-menu="eggs">
                    <div class="modern-tab-icon">
                        <i class="fas fa-egg"></i>
                    </div>
                    <div class="modern-tab-label">
                        <h4>Egg Dishes</h4>
                        <p>Protein Rich</p>
                    </div>
                </div>

            </div>

            <!-- Menu Content Panels -->
            <div class="modern-menu-content">
                
                <!-- ===========================
                     SOUTH INDIAN PANEL
                     =========================== -->
                <div class="modern-menu-panel active" data-menu="southindian">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon">
                            <i class="fas fa-pepper-hot"></i>
                        </div>
                        <div class="category-header-text">
                            <h3>South Indian Cuisine</h3>
                            <p>Authentic Traditional Flavours</p>
                        </div>
                    </div>

                    <!-- Veg / Non-Veg Sub Tabs -->
                    <div class="veg-nonveg-tabs" data-panel="southindian">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="si-veg">
                            <span class="dot"></span> Veg
                        </button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="si-nonveg">
                            <span class="dot"></span> Non-Veg
                        </button>
                    </div>

                    <!-- South Indian VEG -->
                    <div class="veg-nonveg-content active" id="si-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="dish-info">
                                    <div class="dish-name">Idli</div>
                                    <div class="dish-desc">Soft steamed rice cakes served with chutney & sambar</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="150">
                                <div class="dish-info">
                                    <div class="dish-name">Dosa</div>
                                    <div class="dish-desc">Crispy fermented crepe served with chutney & sambar</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="dish-info">
                                    <div class="dish-name">Medu Vada</div>
                                    <div class="dish-desc">Crunchy lentil doughnuts served with chutney & sambar</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="250">
                                <div class="dish-info">
                                    <div class="dish-name">Puri & Kizhangu</div>
                                    <div class="dish-desc">Deep-fried puri served with spiced potato curry</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="dish-info">
                                    <div class="dish-name">Vegetable Dum Biryani</div>
                                    <div class="dish-desc">Aromatic slow-cooked South Indian style vegetable biryani</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="350">
                                <div class="dish-info">
                                    <div class="dish-name">Tomato Rice</div>
                                    <div class="dish-desc">Tangy South Indian style tomato rice with tempering</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="400">
                                <div class="dish-info">
                                    <div class="dish-name">Lemon Rice</div>
                                    <div class="dish-desc">Zesty lemon-tempered rice with peanuts and curry leaves</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="450">
                                <div class="dish-info">
                                    <div class="dish-name">Curd Rice</div>
                                    <div class="dish-desc">Creamy curd rice with tempered mustard and ginger — a cooling classic</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="dish-info">
                                    <div class="dish-name">Paruppu Sadham (Dal Rice)</div>
                                    <div class="dish-desc">Comforting South Indian lentil rice with ghee and pickle</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>

                        <div class="buffet-highlight" data-aos="fade-up">
                            <h4><i class="fas fa-utensils"></i> Buffet South Indian Meals</h4>
                            <ul>
                                <li>Steamed White Rice</li>
                                <li>Sambar with seasonal vegetables</li>
                                <li>Rasam varieties</li>
                                <li>Butter Milk</li>
                                <li>Soft Chapathi</li>
                                <li>Vegetable Poriyals</li>
                                <li>Pickle & Appalam</li>
                                <li>Payasam (dessert)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- South Indian NON-VEG -->
                    <div class="veg-nonveg-content" id="si-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="dish-info">
                                    <div class="dish-name">South Indian Chicken Dum Biryani</div>
                                    <div class="dish-desc">Famous slow-cooked South Indian style chicken biryani</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="150">
                                <div class="dish-info">
                                    <div class="dish-name">Fish Curry</div>
                                    <div class="dish-desc">Fresh fish in a spiced South Indian coconut-based curry</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="dish-info">
                                    <div class="dish-name">Tawa Fish Fry</div>
                                    <div class="dish-desc">Spice-marinated fish, shallow-fried on a hot tawa</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="250">
                                <div class="dish-info">
                                    <div class="dish-name">Wide Variety of Chicken Dishes</div>
                                    <div class="dish-desc">Various South Indian chicken preparations — as per availability</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="dish-info">
                                    <div class="dish-name">Mutton Dishes</div>
                                    <div class="dish-desc">Rich & flavorful mutton preparations based on availability</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===========================
                     NORTH INDIAN PANEL
                     =========================== -->
                <div class="modern-menu-panel" data-menu="northindian">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon">
                            <i class="fas fa-drumstick-bite"></i>
                        </div>
                        <div class="category-header-text">
                            <h3>North Indian Cuisine</h3>
                            <p>Rich & Flavorful Punjabi Dishes</p>
                        </div>
                    </div>

                    <!-- Veg / Non-Veg Sub Tabs -->
                    <div class="veg-nonveg-tabs" data-panel="northindian">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="ni-veg">
                            <span class="dot"></span> Veg
                        </button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="ni-nonveg">
                            <span class="dot"></span> Non-Veg
                        </button>
                    </div>

                    <!-- North Indian VEG -->
                    <div class="veg-nonveg-content active" id="ni-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Tari Poha</div>
                                    <div class="dish-desc">Fluffy flattened rice with spices, onions and a tangy gravy base</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Poori Aloo Sabji</div>
                                    <div class="dish-desc">Golden deep-fried pooris with spiced aloo curry — a classic breakfast</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Upma</div>
                                    <div class="dish-desc">Savory semolina upma tempered with mustard, curry leaves & vegetables</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Paneer Butter Masala</div>
                                    <div class="dish-desc">Cottage cheese in rich, creamy tomato-butter gravy</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Various Dal Preparations</div>
                                    <div class="dish-desc">Dal Tadka, Dal Makhani & more slow-simmered classics</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Seasonal Veg Sabji</div>
                                    <div class="dish-desc">Fresh seasonal vegetables cooked in authentic Punjabi style</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Indian Breads (Roti / Naan)</div>
                                    <div class="dish-desc">Freshly made rotis and naan baked in traditional style</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Tandoori Paneer</div>
                                    <div class="dish-desc">Marinated paneer char-grilled in the tandoor</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>

                        <div class="buffet-highlight">
                            <h4><i class="fas fa-utensils"></i> Buffet North Indian Meals</h4>
                            <ul>
                                <li>Fresh Salad</li>
                                <li>Roti (freshly made)</li>
                                <li>Steamed Rice</li>
                                <li>Dal</li>
                                <li>Paneer Dish</li>
                                <li>Seasonal Veg Sabji</li>
                                <li>Starter & Soup</li>
                                <li>Pickle & Papad</li>
                                <li>Dessert</li>
                            </ul>
                        </div>
                    </div>

                    <!-- North Indian NON-VEG -->
                    <div class="veg-nonveg-content" id="ni-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Saoji Chicken</div>
                                    <div class="dish-desc">Bold & fiery Nagpur-style chicken curry — a house specialty</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Tandoori Chicken & Items</div>
                                    <div class="dish-desc">Marinated meats char-grilled in the tandoor with spices</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Egg Curry / Chicken Curry</div>
                                    <div class="dish-desc">Rich onion-tomato gravy with tender chicken or boiled eggs</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Wide Variety of Chicken Dishes</div>
                                    <div class="dish-desc">Multiple chicken preparations based on guest request & ingredient availability</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Mutton Dishes</div>
                                    <div class="dish-desc">Slow-cooked mutton in rich Indian spice gravy — as per availability</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Fish Dishes</div>
                                    <div class="dish-desc">Fresh fish preparations in North Indian style — as per availability</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>

                        <div class="buffet-highlight">
                            <h4><i class="fas fa-utensils"></i> Buffet Non-Veg Additions</h4>
                            <ul>
                                <li>Egg Curry / Chicken Curry</li>
                                <li>Tandoori Items</li>
                                <li>Saoji Chicken</li>
                                <li>Non-Veg Starter</li>
                                <li>Mutton on request</li>
                                <li>Fish on request</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ===========================
                     CHINESE PANEL
                     =========================== -->
                <div class="modern-menu-panel" data-menu="chinese">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon">
                            <i class="fas fa-bowl-food"></i>
                        </div>
                        <div class="category-header-text">
                            <h3>Chinese Cuisine</h3>
                            <p>Popular Indo-Chinese Favorites</p>
                        </div>
                    </div>

                    <!-- Veg / Non-Veg Sub Tabs -->
                    <div class="veg-nonveg-tabs" data-panel="chinese">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="ch-veg">
                            <span class="dot"></span> Veg
                        </button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="ch-nonveg">
                            <span class="dot"></span> Non-Veg
                        </button>
                    </div>

                    <!-- Chinese VEG -->
                    <div class="veg-nonveg-content active" id="ch-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">All Soup Varieties (Veg)</div>
                                    <div class="dish-desc">Hot & sour, sweet corn, manchow soup & more — pure veg</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Paneer Varieties</div>
                                    <div class="dish-desc">Chilli paneer, paneer manchurian & more Indo-Chinese paneer delights</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Veg Noodles</div>
                                    <div class="dish-desc">Hakka & schezwan style noodles tossed with fresh vegetables</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Veg Fried Rice</div>
                                    <div class="dish-desc">Wok-tossed veg fried rice with soy sauce and crunchy veggies</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Veg Manchurian</div>
                                    <div class="dish-desc">Crispy vegetable balls in spicy manchurian gravy</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Chinese NON-VEG -->
                    <div class="veg-nonveg-content" id="ch-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">All Chicken Varieties</div>
                                    <div class="dish-desc">Chilli chicken, chicken manchurian, crispy honey chicken</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Chicken / Egg Noodles</div>
                                    <div class="dish-desc">Chicken & egg noodles — hakka & schezwan style</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Egg & Chicken Fried Rice</div>
                                    <div class="dish-desc">Wok-tossed egg and chicken fried rice with authentic flavour</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Chicken Manchurian</div>
                                    <div class="dish-desc">Juicy chicken in bold manchurian gravy — a crowd favourite</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Non-Veg Soup Varieties</div>
                                    <div class="dish-desc">Chicken hot & sour, chicken manchow and more hearty soups</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===========================
                     FAST FOOD PANEL
                     =========================== -->
                <div class="modern-menu-panel" data-menu="fastfood">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon">
                            <i class="fas fa-burger"></i>
                        </div>
                        <div class="category-header-text">
                            <h3>Quick Bites & Snacks</h3>
                            <p>Fast & Delicious</p>
                        </div>
                    </div>

                    <!-- Veg / Non-Veg Sub Tabs -->
                    <div class="veg-nonveg-tabs" data-panel="fastfood">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="ff-veg">
                            <span class="dot"></span> Veg
                        </button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="ff-nonveg">
                            <span class="dot"></span> Non-Veg
                        </button>
                    </div>

                    <!-- Fast Food VEG -->
                    <div class="veg-nonveg-content active" id="ff-veg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Maggi</div>
                                    <div class="dish-desc">Classic instant noodles — a jungle camp favourite</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Veg Sandwich</div>
                                    <div class="dish-desc">Freshly made veg sandwiches with chutney and sauces</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Chai — Indian Tea</div>
                                    <div class="dish-desc">Freshly brewed spiced masala chai, served piping hot</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>

                            <div class="premium-menu-card veg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Coffee</div>
                                    <div class="dish-desc">Hot brewed coffee — perfect after a morning safari</div>
                                </div>
                                <div class="veg-badge"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Fast Food NON-VEG -->
                    <div class="veg-nonveg-content" id="ff-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Non-Veg Sandwich</div>
                                    <div class="dish-desc">Freshly made non-veg sandwiches with sauces and fillings</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Egg Maggi</div>
                                    <div class="dish-desc">Classic Maggi noodles topped with a fried egg — jungle style</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===========================
                     EGG VARIETIES PANEL
                     =========================== -->
                <div class="modern-menu-panel" data-menu="eggs">
                    <div class="category-header" data-aos="fade-right">
                        <div class="category-header-icon">
                            <i class="fas fa-egg"></i>
                        </div>
                        <div class="category-header-text">
                            <h3>All Egg Varieties</h3>
                            <p>Protein-Packed Goodness</p>
                        </div>
                    </div>

                    <!-- Veg / Non-Veg Sub Tabs -->
                    <div class="veg-nonveg-tabs" data-panel="eggs">
                        <button class="veg-nonveg-tab-btn veg-btn active" data-target="eg-veg">
                            <span class="dot"></span> Veg
                        </button>
                        <button class="veg-nonveg-tab-btn nonveg-btn" data-target="eg-nonveg">
                            <span class="dot"></span> Non-Veg
                        </button>
                    </div>

                    <!-- Egg VEG (note: no veg items in egg section, show message) -->
                    <div class="veg-nonveg-content active" id="eg-veg">
                        <div class="buffet-highlight" style="margin-top:0; margin-bottom:1.5rem;">
                            <h4><i class="fas fa-info-circle"></i> Note</h4>
                            <ul>
                                <li>All egg dishes are non-vegetarian. Please switch to the Non-Veg tab to view all egg preparations.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Egg NON-VEG -->
                    <div class="veg-nonveg-content" id="eg-nonveg">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Omelette</div>
                                    <div class="dish-desc">Plain, masala & cheese omelettes made to order</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Egg Bhurji</div>
                                    <div class="dish-desc">Spiced scrambled eggs with onion, tomato & green chilli</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Egg Curry</div>
                                    <div class="dish-desc">Boiled eggs simmered in a rich onion-tomato gravy</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Boiled Eggs</div>
                                    <div class="dish-desc">Soft or hard boiled, served with seasoning</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>

                            <div class="premium-menu-card nonveg-card">
                                <div class="dish-info">
                                    <div class="dish-name">Fried Egg</div>
                                    <div class="dish-desc">Sunny-side up or double-fried, served with toast</div>
                                </div>
                                <div class="nonveg-badge"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end modern-menu-content -->

        </div><!-- end modern-menu-container -->

    </div>
</section>

<!-- DINING HIGHLIGHTS -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">FRESHNESS • VARIETY • HOSPITALITY</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-4 text-white" data-aos="zoom-in" data-aos-duration="1000">Why Dine at Wildmark</h2>
            <p class="text-sm md:text-base text-gray-300 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Our kitchen is committed to fresh, wholesome cooking — every dish crafted with care and served with warmth in the heart of the jungle.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="icon-wrapper"><i class="fas fa-leaf"></i></div>
                <h4>Fresh Ingredients</h4>
                <p>We use fresh, locally sourced ingredients daily to ensure every meal is flavorful, healthy, and satisfying.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="icon-wrapper"><i class="fas fa-globe-asia"></i></div>
                <h4>Multi-Cuisine Variety</h4>
                <p>From South Indian idlis to Punjabi dals and Chinese noodles — our menu has something for every palate.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="icon-wrapper"><i class="fas fa-fire"></i></div>
                <h4>Made-to-Order</h4>
                <p>Wide variety of Chicken, Mutton & Fish dishes prepared fresh based on guest request & ingredient availability.</p>
            </div>
            <div class="why-choose-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="icon-wrapper"><i class="fas fa-coffee"></i></div>
                <h4>All-Day Dining</h4>
                <p>From early morning chai before your safari to late night snacks — our kitchen stays ready for you all day.</p>
            </div>
        </div>
    </div>
</section>

<!-- AWARDS -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-neutral-900 awards-section overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-10 md:mb-16">
            <p class="text-amber-500 text-xs tracking-widest mb-3 md:mb-4 font-light" data-aos="fade-down">EXCELLENCE • RECOGNITION • TRUST</p>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-4 md:mb-6 text-white" data-aos="zoom-in" data-aos-duration="1000">Awards and Recognitions</h2>
            <p class="text-sm md:text-base text-gray-300 max-w-4xl mx-auto mb-2 md:mb-3 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Honored to receive Travellers' Choice Awards from TripAdvisor for our exceptional hospitality
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials1.png" alt="TripAdvisor Travellers Choice Award 2020" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials2.png" alt="TripAdvisor Travellers Choice Award 2021" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl transition-all duration-300 group-hover:shadow-amber-500/30 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials3.png" alt="TripAdvisor Travellers Choice Award 2022" class="w-full h-auto max-w-[280px] object-contain award-image">
                </div>
            </div>
            <div class="award-card group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="background-color: #39DCA1; border-radius: 9px;">
                <div class="bg-transparent rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 group-hover:shadow-emerald-500/40 group-hover:-translate-y-3 flex items-center justify-center min-h-[320px] md:min-h-[380px]">
                    <img src="images/testimonials4.jpeg" alt="TripAdvisor Travelers Choice Award 2025" class="w-full h-full object-cover rounded-2xl award-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-12 md:py-20 px-4 md:px-6 bg-black">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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

                <div class="faq-item bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden">
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



<script>
// =============================================
// MAIN MENU TAB SWITCHING (Left side tabs)
// =============================================
(function() {
    'use strict';
    
    const tabItems = document.querySelectorAll('.modern-tab-item');
    const menuPanels = document.querySelectorAll('.modern-menu-panel');
    
    function switchMenu(targetMenu) {
        tabItems.forEach(tab => tab.classList.remove('active'));
        menuPanels.forEach(panel => panel.classList.remove('active'));
        
        const activeTab = document.querySelector(`.modern-tab-item[data-menu="${targetMenu}"]`);
        if (activeTab) activeTab.classList.add('active');
        
        const activePanel = document.querySelector(`.modern-menu-panel[data-menu="${targetMenu}"]`);
        if (activePanel) activePanel.classList.add('active');
    }
    
    tabItems.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetMenu = this.getAttribute('data-menu');
            switchMenu(targetMenu);
        });
    });
})();

// =============================================
// VEG / NON-VEG SUB-TAB SWITCHING
// =============================================
(function() {
    'use strict';

    const subTabBtns = document.querySelectorAll('.veg-nonveg-tab-btn');

    subTabBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            // Find the parent tabs container
            const tabsContainer = this.closest('.veg-nonveg-tabs');
            const targetId = this.getAttribute('data-target');

            // Deactivate all sibling buttons
            tabsContainer.querySelectorAll('.veg-nonveg-tab-btn').forEach(function(b) {
                b.classList.remove('active');
            });

            // Activate clicked button
            this.classList.add('active');

            // Find the parent panel (modern-menu-panel)
            const parentPanel = tabsContainer.closest('.modern-menu-panel');

            // Hide all sub-content inside this panel
            parentPanel.querySelectorAll('.veg-nonveg-content').forEach(function(content) {
                content.classList.remove('active');
            });

            // Show the target sub-content
            const target = document.getElementById(targetId);
            if (target) target.classList.add('active');
        });
    });
})();

// =============================================
// FAQ ACCORDION
// =============================================
document.addEventListener('DOMContentLoaded', function() {
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        var question = item.querySelector('.faq-question');
        var answer = item.querySelector('.faq-answer');
        var icon = item.querySelector('.faq-icon');
        question.addEventListener('click', function() {
            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
            faqItems.forEach(function(other) {
                other.querySelector('.faq-answer').style.maxHeight = '0px';
                other.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            });
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});

function handleFaqResize() {
    var grid = document.querySelector('.faq-grid');
    if (!grid) return;
    grid.style.gridTemplateColumns = window.innerWidth <= 860 ? '1fr' : '1fr 1fr';
}
window.addEventListener('load', handleFaqResize);
window.addEventListener('resize', handleFaqResize);

// =============================================
// SPECIAL OFFER POPUP
// =============================================
function toggleSpecialOfferPopup() {
    const popup = document.getElementById('specialOfferPopup');
    if (popup.classList.contains('hidden')) {
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        document.body.style.overflow = 'hidden';
    } else {
        popup.classList.add('hidden');
        popup.classList.remove('flex');
        document.body.style.overflow = '';
    }
}

function closeIfClickedOutside(event) {
    if (event.target.id === 'specialOfferPopup') {
        toggleSpecialOfferPopup();
    }
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const popup = document.getElementById('specialOfferPopup');
        if (!popup.classList.contains('hidden')) {
            toggleSpecialOfferPopup();
        }
    }
});
</script>

<?php 
include 'includes/footer.php'; 
?>