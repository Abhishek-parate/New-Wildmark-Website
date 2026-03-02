<?php 
$pageTitle = "Gallery - Wildmark Resort Kanha";
include 'includes/header.php'; 
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          bg1:   '#E8C999',
          bg2:   '#F8EEDF',
          text1: '#000000',
          text2: '#8E1616',
          red2:  '#b01e1e',
          red3:  '#6b1010',
        },
        fontFamily: {
          serif:  ['Playfair Display', 'serif'],
          sans:   ['Inter', 'sans-serif'],
        },
        keyframes: {
          fadeInUp: {
            '0%':   { opacity: '0', transform: 'translateY(30px)' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
          },
          zoomIn: {
            '0%':   { opacity: '0', transform: 'scale(0.85)' },
            '100%': { opacity: '1', transform: 'scale(1)' },
          },
          fadeIn: {
            '0%':   { opacity: '0' },
            '100%': { opacity: '1' },
          },
          shimmer: {
            '0%':   { backgroundPosition: '-200% 0' },
            '100%': { backgroundPosition:  '200% 0' },
          },
        },
        animation: {
          fadeInUp: 'fadeInUp 0.6s ease forwards',
          zoomIn:   'zoomIn 0.3s ease',
          fadeIn:   'fadeIn 0.3s ease',
          shimmer:  'shimmer 1.4s infinite',
        },
      },
    },
  };
</script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

<!-- Minimal custom only for things Tailwind cannot do inline -->
<style>
  /* shimmer pseudo-element */
  .gallery-item.loading::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 1rem;
    background: linear-gradient(90deg, #e0c9a0 25%, #f0d9b0 50%, #e0c9a0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.4s infinite;
  }
  /* filter-btn shimmer sweep */
  .filter-btn::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(142,22,22,0.1), transparent);
    transition: left 0.5s;
  }
  .filter-btn:hover::before { left: 100%; }
  /* gallery overlay slide-up text */
  .gallery-title,
  .gallery-category { transform: translateY(20px); transition: transform 0.4s ease; }
  .gallery-item:hover .gallery-title  { transform: translateY(0); }
  .gallery-item:hover .gallery-category { transform: translateY(0); transition-delay: 0.08s; }
  /* thumb strip scrollbar hide */
  #lbThumbs::-webkit-scrollbar { display: none; }
</style>

<body class="font-sans bg-bg2 text-text1 overflow-x-hidden">

<!-- ===================== HERO ===================== -->
<header class="relative h-[100vh] flex items-end overflow-hidden"
        style="background:url('https://wildmarkresort.com/images/Tiger.webp') center/cover no-repeat;">
  <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

</header>



<!-- ===================== FILTER SECTION ===================== -->
<section class="bg-bg2 py-14">
  <div class="max-w-7xl mx-auto px-5">

    <!-- Section Header -->
    <span class="block text-center text-[0.65rem] tracking-[0.25em] uppercase text-text2 mb-3">Browse by Category</span>
    <h2 class="font-serif text-center text-3xl md:text-5xl text-text2 mb-3">Photo Gallery</h2>
    <p class="text-center text-black/60 text-sm mb-8 max-w-xl mx-auto">
      Explore the beauty of Kanha through our lens — wildlife, nature, resort &amp; rooms
    </p>

    <!-- Search Bar -->
    <div class="flex justify-center mb-7">
      <div id="searchBox"
           class="flex items-center gap-2 bg-white border-2 border-text2/20 rounded-full px-5 py-2.5 w-full max-w-md transition-all duration-300 focus-within:border-text2">
        <i class="fas fa-search text-text2 text-sm"></i>
        <input id="searchInput" type="text" placeholder="Search photos..."
               class="flex-1 bg-transparent outline-none text-sm text-text1" />
        <i id="clearSearch" class="fas fa-times text-text2 text-sm cursor-pointer opacity-0 transition-opacity duration-200"></i>
      </div>
    </div>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-3 mb-8" id="filterBar">
      <button class="filter-btn relative overflow-hidden active
                     px-5 py-2.5 rounded-full font-semibold text-sm tracking-wide cursor-pointer
                     border-2 transition-all duration-300
                     bg-gradient-to-br from-text2 to-red2 text-white border-transparent
                     shadow-[0_8px_20px_rgba(142,22,22,0.35)] -translate-y-0.5"
              data-filter="all">
        <i class="fas fa-th mr-1"></i> All Photos
        <span class="inline-flex items-center justify-center bg-white/25 w-[18px] h-[18px] rounded-full text-[0.6rem] ml-1">13</span>
      </button>
      <button class="filter-btn relative overflow-hidden
                     px-5 py-2.5 rounded-full font-semibold text-sm tracking-wide cursor-pointer
                     bg-white text-text1 border-2 border-text2/20
                     hover:border-text2 hover:text-text2 transition-all duration-300"
              data-filter="wildlife">
        <i class="fas fa-paw mr-1"></i> Wildlife
        <span class="inline-flex items-center justify-center bg-text2/10 text-text2 w-[18px] h-[18px] rounded-full text-[0.6rem] ml-1">5</span>
      </button>
      <button class="filter-btn relative overflow-hidden
                     px-5 py-2.5 rounded-full font-semibold text-sm tracking-wide cursor-pointer
                     bg-white text-text1 border-2 border-text2/20
                     hover:border-text2 hover:text-text2 transition-all duration-300"
              data-filter="rooms">
        <i class="fas fa-bed mr-1"></i> Rooms
        <span class="inline-flex items-center justify-center bg-text2/10 text-text2 w-[18px] h-[18px] rounded-full text-[0.6rem] ml-1">3</span>
      </button>
      <button class="filter-btn relative overflow-hidden
                     px-5 py-2.5 rounded-full font-semibold text-sm tracking-wide cursor-pointer
                     bg-white text-text1 border-2 border-text2/20
                     hover:border-text2 hover:text-text2 transition-all duration-300"
              data-filter="resort">
        <i class="fas fa-hotel mr-1"></i> Resort
        <span class="inline-flex items-center justify-center bg-text2/10 text-text2 w-[18px] h-[18px] rounded-full text-[0.6rem] ml-1">4</span>
      </button>
      <button class="filter-btn relative overflow-hidden
                     px-5 py-2.5 rounded-full font-semibold text-sm tracking-wide cursor-pointer
                     bg-white text-text1 border-2 border-text2/20
                     hover:border-text2 hover:text-text2 transition-all duration-300"
              data-filter="nature">
        <i class="fas fa-leaf mr-1"></i> Nature
        <span class="inline-flex items-center justify-center bg-text2/10 text-text2 w-[18px] h-[18px] rounded-full text-[0.6rem] ml-1">1</span>
      </button>
    </div>

    <!-- Results Row -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-5">
      <p class="text-xs text-black/50">
        Showing <span id="visibleCount" class="font-bold text-text2">13</span> photos
      </p>
      <div class="flex gap-2">
        <button id="gridViewBtn" title="Grid View"
                class="w-8 h-8 rounded-lg border-2 border-text2 bg-text2/5 text-text2 flex items-center justify-center transition-all duration-200">
          <i class="fas fa-th-large text-xs"></i>
        </button>
        <button id="listViewBtn" title="List View"
                class="w-8 h-8 rounded-lg border-2 border-text2/20 bg-white text-black/40 flex items-center justify-center hover:border-text2 hover:text-text2 transition-all duration-200">
          <i class="fas fa-list text-xs"></i>
        </button>
      </div>
    </div>

    <!-- ===================== GALLERY GRID ===================== -->
    <div id="galleryGrid"
         class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

      <!-- WILDLIFE -->
      <?php
      $photos = [
        ['cat'=>'wildlife','title'=>'Bengal Tiger',    'img'=>'Tiger.webp',     'alt'=>'Bengal Tiger in Kanha'],
        ['cat'=>'wildlife','title'=>'Majestic Tiger',  'img'=>'Tiger5.webp',    'alt'=>'Tiger Sighting'],
        ['cat'=>'wildlife','title'=>'Wildlife Safari', 'img'=>'small_tiger.webp','alt'=>'Wildlife Safari'],
        ['cat'=>'wildlife','title'=>'Spotted Deer',    'img'=>'deer.webp',      'alt'=>'Spotted Deer'],
        ['cat'=>'wildlife','title'=>'Deer in Forest',  'img'=>'dear1.webp',     'alt'=>'Deer in Forest'],
        ['cat'=>'rooms',   'title'=>'Premium Suite',   'img'=>'Tiger3.webp',    'alt'=>'Premium Room'],
        ['cat'=>'rooms',   'title'=>'Deluxe Cottage',  'img'=>'Tiger4.webp',    'alt'=>'Deluxe Cottage'],
        ['cat'=>'rooms',   'title'=>'Super Deluxe Room','img'=>'wildmark9.jpg', 'alt'=>'Super Deluxe Room'],
        ['cat'=>'resort',  'title'=>'Resort Entrance', 'img'=>'wildmark1.JPG',  'alt'=>'Resort Exterior'],
        ['cat'=>'resort',  'title'=>'Aerial View',     'img'=>'wildmark2.jpg',  'alt'=>'Resort Aerial View'],
        ['cat'=>'resort',  'title'=>'Resort View',     'img'=>'wildmark6.jpg',  'alt'=>'Resort View'],
        ['cat'=>'resort',  'title'=>'Lush Greenery',   'img'=>'wildmark7.JPG',  'alt'=>'Resort Greenery'],
        ['cat'=>'nature',  'title'=>'Kanha Forest',    'img'=>'home7.webp',     'alt'=>'Kanha Forest'],
      ];
      foreach($photos as $i => $p): ?>
      <div class="gallery-item group relative overflow-hidden rounded-2xl cursor-pointer
                  h-[280px] w-full border-2 border-text2/10 bg-gray-200
                  transition-all duration-400
                  hover:scale-[1.02] hover:shadow-[0_20px_40px_rgba(142,22,22,0.25)] hover:border-text2/40
                  animate-fadeInUp"
           data-category="<?= $p['cat'] ?>"
           data-title="<?= $p['title'] ?>"
           data-index="<?= $i ?>">
        <img src="https://wildmarkresort.com/images/<?= $p['img'] ?>"
             alt="<?= $p['alt'] ?>"
             loading="lazy"
             class="w-full h-full object-cover rounded-2xl transition-all duration-500
                    group-hover:scale-110 group-hover:brightness-105" />
        <!-- Overlay -->
        <div class="gallery-overlay absolute inset-0 rounded-2xl flex flex-col justify-end p-5
                    bg-gradient-to-t from-text2/85 to-transparent
                    opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <!-- Action buttons top-right -->
          <div class="overlay-actions absolute top-3 right-3 flex gap-2
                      opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
            <button class="overlay-btn w-8 h-8 rounded-full flex items-center justify-center
                           bg-white/15 backdrop-blur-md border border-white/30 text-white text-sm
                           hover:bg-white/30 transition-colors duration-200">
              <i class="fas fa-expand"></i>
            </button>
          </div>
          <div class="gallery-title font-serif text-white text-base font-semibold mb-1"><?= $p['title'] ?></div>
          <div class="gallery-category text-bg1 text-[0.65rem] uppercase tracking-widest"><?= ucfirst($p['cat']) ?></div>
        </div>
      </div>
      <?php endforeach; ?>

    </div><!-- /gallery-grid -->

    <!-- No Results -->
    <div id="noResults" class="hidden text-center py-16 text-black/40">
      <i class="fas fa-image text-5xl block mb-4 text-text2/20"></i>
      <p class="text-sm">No photos match your search.</p>
    </div>

    <!-- ===================== CATEGORY CARDS ===================== -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-12 pb-14">
      <?php
      $cats = [
        ['filter'=>'all',     'icon'=>'fa-th',    'label'=>'All Photos', 'count'=>'13'],
        ['filter'=>'wildlife','icon'=>'fa-paw',   'label'=>'Wildlife',   'count'=>'5'],
        ['filter'=>'rooms',   'icon'=>'fa-bed',   'label'=>'Rooms',      'count'=>'3'],
        ['filter'=>'resort',  'icon'=>'fa-hotel', 'label'=>'Resort',     'count'=>'4'],
      ];
      foreach($cats as $c): ?>
      <div class="cat-card <?= $c['filter']==='all' ? 'border-text2 bg-bg1/15' : 'border-text2/10' ?>
                  bg-white rounded-2xl p-6 text-center border-2 cursor-pointer
                  hover:border-text2 hover:shadow-[0_10px_25px_rgba(142,22,22,0.15)] hover:-translate-y-1
                  transition-all duration-300"
           data-filter="<?= $c['filter'] ?>">
        <div class="cat-icon w-14 h-14 rounded-full mx-auto mb-3 flex items-center justify-center
                    bg-gradient-to-br from-bg1 to-[#d4a853]
                    shadow-[0_6px_15px_rgba(142,22,22,0.2)]
                    group-hover:scale-110 transition-transform duration-300">
          <i class="fas <?= $c['icon'] ?> text-text2 text-xl"></i>
        </div>
        <h4 class="text-sm font-semibold text-text1 mb-1"><?= $c['label'] ?></h4>
        <p class="text-xs text-black/45"><?= $c['count'] ?> images</p>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ===================== LIGHTBOX ===================== -->
<div id="lightbox"
     class="hidden fixed inset-0 z-[9999] bg-black/96 backdrop-blur-xl
            flex items-center justify-center animate-fadeIn"
     role="dialog" aria-modal="true">

  <!-- Close -->
  <button id="lightboxClose"
          class="fixed top-5 right-5 w-11 h-11 rounded-full bg-text2/90 text-white border-none
                 flex items-center justify-center text-lg cursor-pointer z-10
                 hover:bg-red3 hover:rotate-90 transition-all duration-300">
    <i class="fas fa-times"></i>
  </button>

  <!-- Prev -->
  <button id="lightboxPrev"
          class="fixed left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-text2/85 text-white
                 flex items-center justify-center text-xl cursor-pointer z-10
                 hover:bg-red3 hover:scale-110 transition-all duration-300">
    <i class="fas fa-chevron-left"></i>
  </button>

  <!-- Next -->
  <button id="lightboxNext"
          class="fixed right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-text2/85 text-white
                 flex items-center justify-center text-xl cursor-pointer z-10
                 hover:bg-red3 hover:scale-110 transition-all duration-300">
    <i class="fas fa-chevron-right"></i>
  </button>

  <!-- Image -->
  <div class="lightbox-content relative max-w-[92%] max-h-[88vh] animate-zoomIn flex items-center justify-center">
    <img id="lightboxImage" src="" alt=""
         class="max-w-full max-h-[82vh] rounded-xl shadow-[0_30px_60px_rgba(0,0,0,0.6)] block" />
    <div class="absolute -bottom-12 left-0 text-white">
      <div id="lbTitle" class="font-serif text-base"></div>
      <div id="lbCat"   class="text-bg1 text-[0.65rem] uppercase tracking-widest"></div>
    </div>
  </div>

  <!-- Thumb Strip -->
  <div id="lbThumbs"
       class="fixed bottom-14 left-1/2 -translate-x-1/2 flex gap-1.5
              max-w-[90vw] overflow-x-auto scrollbar-none px-1 py-1"
       style="scrollbar-width:none;"></div>

  <!-- Counter -->
  <div id="lbCounter"
       class="fixed bottom-6 left-1/2 -translate-x-1/2 text-white/60 text-xs tracking-widest
              bg-black/40 px-4 py-1.5 rounded-full">1 / 13</div>
</div>



<!-- ===================== JAVASCRIPT ===================== -->
<script>
(function () {
  const grid        = document.getElementById('galleryGrid');
  const lightbox    = document.getElementById('lightbox');
  const lbImg       = document.getElementById('lightboxImage');
  const lbTitle     = document.getElementById('lbTitle');
  const lbCat       = document.getElementById('lbCat');
  const lbCounter   = document.getElementById('lbCounter');
  const lbThumbs    = document.getElementById('lbThumbs');
  const noResults   = document.getElementById('noResults');
  const searchInput = document.getElementById('searchInput');
  const clearSearch = document.getElementById('clearSearch');
  const visibleCount= document.getElementById('visibleCount');

  let currentFilter = 'all';
  let currentIndex  = 0;
  let visibleItems  = [];

  // ── helpers ──────────────────────────────────────────
  const allItems = () => Array.from(document.querySelectorAll('.gallery-item'));
  const visible  = () => allItems().filter(el => el.style.display !== 'none');

  function updateCounter() {
    lbCounter.textContent = (currentIndex + 1) + ' / ' + visible().length;
  }

  function buildThumbs() {
    lbThumbs.innerHTML = '';
    visibleItems.forEach((item, i) => {
      const t = document.createElement('img');
      t.src = item.querySelector('img').src;
      t.className = 'h-9 w-12 object-cover rounded flex-shrink-0 cursor-pointer border-2 transition-all duration-200 '
                  + (i === currentIndex ? 'opacity-100 border-text2' : 'opacity-40 border-transparent');
      t.addEventListener('click', () => openLightbox(i));
      lbThumbs.appendChild(t);
    });
  }

  function syncThumbs() {
    Array.from(lbThumbs.children).forEach((t, i) => {
      const on = i === currentIndex;
      t.style.opacity     = on ? '1'           : '0.4';
      t.style.borderColor = on ? '#8E1616'      : 'transparent';
    });
    lbThumbs.children[currentIndex]?.scrollIntoView({behavior:'smooth',block:'nearest',inline:'center'});
  }

  function openLightbox(index) {
    visibleItems  = visible();
    currentIndex  = index;
    const item    = visibleItems[currentIndex];
    lbImg.src                = item.querySelector('img').src;
    lbImg.alt                = item.querySelector('img').alt;
    lbTitle.textContent      = item.dataset.title || '';
    lbCat.textContent        = item.querySelector('.gallery-category').textContent;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.style.overflow = 'hidden';
    updateCounter();
    buildThumbs();
  }

  function closeLightbox() {
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    document.body.style.overflow = '';
  }

  function navigate(dir) {
    visibleItems  = visible();
    currentIndex  = (currentIndex + dir + visibleItems.length) % visibleItems.length;
    const item    = visibleItems[currentIndex];
    lbImg.style.opacity    = '0';
    lbImg.style.transition = 'opacity 0.15s';
    setTimeout(() => {
      lbImg.src = item.querySelector('img').src;
      lbImg.alt = item.querySelector('img').alt;
      lbTitle.textContent = item.dataset.title || '';
      lbCat.textContent   = item.querySelector('.gallery-category').textContent;
      lbImg.style.opacity = '1';
    }, 150);
    updateCounter();
    syncThumbs();
  }

  // ── filter ───────────────────────────────────────────
  function applyFilter(filter, query) {
    query = (query || '').toLowerCase().trim();
    allItems().forEach(item => {
      const cat      = item.dataset.category;
      const title    = (item.dataset.title || '').toLowerCase();
      const catText  = item.querySelector('.gallery-category').textContent.toLowerCase();
      const show     = (filter === 'all' || cat === filter)
                    && (!query || title.includes(query) || catText.includes(query));
      if (show) {
        item.style.display    = 'block';
        item.style.opacity    = '0';
        item.style.transform  = 'scale(0.92)';
        requestAnimationFrame(() => {
          item.style.transition = 'opacity 0.35s, transform 0.35s';
          item.style.opacity    = '1';
          item.style.transform  = 'scale(1)';
        });
      } else {
        item.style.opacity    = '0';
        item.style.transform  = 'scale(0.85)';
        item.style.transition = 'opacity 0.25s, transform 0.25s';
        setTimeout(() => { item.style.display = 'none'; }, 270);
      }
    });
    setTimeout(() => {
      const s = visible().length;
      visibleCount.textContent  = s;
      noResults.classList.toggle('hidden', s > 0);
    }, 310);
  }

  // ── filter buttons ───────────────────────────────────
  const ACTIVE_CLS   = ['bg-gradient-to-br','from-text2','to-red2','text-white','border-transparent',
                         'shadow-[0_8px_20px_rgba(142,22,22,0.35)]','-translate-y-0.5'];
  const INACTIVE_CLS = ['bg-white','text-text1','border-text2/20'];

  function setFilterActive(btn) {
    document.querySelectorAll('.filter-btn').forEach(b => {
      b.classList.remove(...ACTIVE_CLS);
      b.classList.add(...INACTIVE_CLS);
    });
    btn.classList.remove(...INACTIVE_CLS);
    btn.classList.add(...ACTIVE_CLS);
  }

  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      currentFilter = btn.dataset.filter;
      setFilterActive(btn);
      document.querySelectorAll('.cat-card').forEach(c => {
        const on = c.dataset.filter === currentFilter;
        c.classList.toggle('border-text2', on);
        c.classList.toggle('bg-bg1/15', on);
        c.classList.toggle('border-text2/10', !on);
      });
      applyFilter(currentFilter, searchInput.value);
    });
  });

  // ── category cards ───────────────────────────────────
  document.querySelectorAll('.cat-card').forEach(card => {
    card.addEventListener('click', () => {
      const f = card.dataset.filter;
      currentFilter = f;
      document.querySelectorAll('.cat-card').forEach(c => {
        const on = c.dataset.filter === f;
        c.classList.toggle('border-text2', on);
        c.classList.toggle('bg-bg1/15', on);
        c.classList.toggle('border-text2/10', !on);
      });
      const matchBtn = document.querySelector(`.filter-btn[data-filter="${f}"]`);
      if (matchBtn) setFilterActive(matchBtn);
      applyFilter(f, searchInput.value);
      grid.scrollIntoView({behavior:'smooth', block:'start'});
    });
  });

  // ── search ───────────────────────────────────────────
  searchInput.addEventListener('input', () => {
    clearSearch.style.opacity = searchInput.value ? '1' : '0';
    applyFilter(currentFilter, searchInput.value);
  });
  clearSearch.addEventListener('click', () => {
    searchInput.value = '';
    clearSearch.style.opacity = '0';
    applyFilter(currentFilter, '');
  });

  // ── open lightbox on click ───────────────────────────
  allItems().forEach(item => {
    item.addEventListener('click', e => {
      if (e.target.closest('.overlay-btn')) return;
      visibleItems = visible();
      const idx = visibleItems.indexOf(item);
      if (idx >= 0) openLightbox(idx);
    });
  });

  // ── lightbox controls ────────────────────────────────
  document.getElementById('lightboxClose').addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
  document.getElementById('lightboxPrev').addEventListener('click', e => { e.stopPropagation(); navigate(-1); });
  document.getElementById('lightboxNext').addEventListener('click', e => { e.stopPropagation(); navigate(1); });

  document.addEventListener('keydown', e => {
    if (!lightbox.classList.contains('flex')) return;
    if (e.key === 'Escape')      closeLightbox();
    if (e.key === 'ArrowLeft')   navigate(-1);
    if (e.key === 'ArrowRight')  navigate(1);
  });

  // ── touch swipe ─────────────────────────────────────
  let tx = 0;
  lightbox.addEventListener('touchstart', e => { tx = e.touches[0].clientX; }, { passive: true });
  lightbox.addEventListener('touchend',   e => {
    const dx = e.changedTouches[0].clientX - tx;
    if (Math.abs(dx) > 50) navigate(dx < 0 ? 1 : -1);
  });

  // ── view toggle ──────────────────────────────────────
  const gridBtn = document.getElementById('gridViewBtn');
  const listBtn = document.getElementById('listViewBtn');

  gridBtn.addEventListener('click', () => {
    grid.className = grid.className.replace('grid-cols-1!', '');
    grid.classList.remove('grid-cols-1');
    grid.classList.add('sm:grid-cols-2','lg:grid-cols-3','xl:grid-cols-4');
    allItems().forEach(i => { i.style.height = '280px'; });
    gridBtn.classList.add('border-text2','bg-text2/5','text-text2');
    listBtn.classList.remove('border-text2','bg-text2/5','text-text2');
  });

  listBtn.addEventListener('click', () => {
    grid.classList.remove('sm:grid-cols-2','lg:grid-cols-3','xl:grid-cols-4');
    grid.classList.add('grid-cols-1');
    allItems().forEach(i => { i.style.height = '200px'; });
    listBtn.classList.add('border-text2','bg-text2/5','text-text2');
    gridBtn.classList.remove('border-text2','bg-text2/5','text-text2');
  });

  // ── skeleton loader ──────────────────────────────────
  allItems().forEach(item => {
    item.classList.add('loading');
    const img = item.querySelector('img');
    const done = () => item.classList.remove('loading');
    if (img.complete) done();
    else { img.addEventListener('load', done); img.addEventListener('error', done); }
  });

})();
</script>

<?php include 'includes/footer.php'; ?>