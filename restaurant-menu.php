<?php 
// Set page-specific title
$pageTitle = "Restaurant - Wildmark Resort Kanha";

// Include header
include 'includes/header.php'; 
?>

<style>
     @keyframes slideIn {
    from {
        opacity: 0;
        transform: scale(0.9) translateY(20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.animate-slideIn {
    animation: slideIn 0.3s ease-out;
}

/* Smooth scroll for popup content */
#specialOfferPopup > div {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
}

#specialOfferPopup > div::-webkit-scrollbar {
    display: none; /* Chrome/Safari/Opera */
}


#specialOfferPopup > div::-webkit-scrollbar-track {
    background: #1c1917;
}

#specialOfferPopup > div::-webkit-scrollbar-thumb {
    background: #d97706;
    border-radius: 3px;
}
/* Modern Menu Tab Design */
.modern-menu-container {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 2rem;
    min-height: 600px;
}

@media (max-width: 768px) {
    .modern-menu-container {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}

/* Vertical Tab Navigation */
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
    }
}

.modern-tab-item {
    background: rgba(0, 0, 0, 0.4);
    border: 2px solid rgba(255, 255, 255, 0.1);
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
    }
}

.modern-tab-item:hover {
    border-color: rgba(245, 158, 11, 0.5);
    background: rgba(245, 158, 11, 0.1);
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .modern-tab-item:hover {
        transform: translateY(-3px);
    }
}

.modern-tab-item.active {
    border-color: #f59e0b;
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.2) 0%, rgba(217, 119, 6, 0.1) 100%);
    box-shadow: 0 4px 20px rgba(245, 158, 11, 0.3);
}

.modern-tab-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.modern-tab-icon i {
    font-size: 1.2rem;
    color: #7c2d12;
}

.modern-tab-label {
    display: flex;
    flex-direction: column;
}

.modern-tab-label h4 {
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    margin: 0;
    font-family: "Roboto Slab", serif;
}

.modern-tab-label p {
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.7rem;
    margin: 0;
    margin-top: 0.2rem;
}

/* Menu Content Panel */
.modern-menu-panel {
    display: none;
    animation: fadeInUp 0.5s ease-in-out;
}

.modern-menu-panel.active {
    display: block;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Premium Menu Cards */
.premium-menu-card {
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(20, 20, 20, 0.6) 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-left: 4px solid #f59e0b;
    border-radius: 1rem;
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
    transition: all 0.3s ease;
}

.premium-menu-card:hover {
    border-left-color: #d97706;
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(20, 20, 20, 0.8) 100%);
    transform: translateX(8px);
    box-shadow: 0 8px 24px rgba(245, 158, 11, 0.2);
}

.premium-menu-card .dish-info {
    flex: 1;
}

.premium-menu-card .dish-name {
    font-family: "Roboto Slab", serif;
    font-size: 1.1rem;
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 0.5rem;
    line-height: 1.4;
}

.premium-menu-card .dish-desc {
    font-family: "Roboto Mono", monospace;
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.65);
    line-height: 1.6;
}

/* Veg/Non-veg Badges */
.veg-badge, .nonveg-badge {
    width: 24px;
    height: 24px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.veg-badge {
    border: 2px solid #22c55e;
}

.veg-badge::after {
    content: '';
    width: 10px;
    height: 10px;
    background: #22c55e;
    border-radius: 50%;
}

.nonveg-badge {
    border: 2px solid #ef4444;
}

.nonveg-badge::after {
    content: '';
    width: 10px;
    height: 10px;
    background: #ef4444;
    border-radius: 50%;
}

/* Buffet Highlight Card */
.buffet-highlight {
    background: linear-gradient(135deg, rgba(217, 119, 6, 0.15) 0%, rgba(180, 83, 9, 0.1) 100%);
    border: 2px solid rgba(217, 119, 6, 0.4);
    border-radius: 1.5rem;
    padding: 2rem;
    margin-top: 2rem;
}

.buffet-highlight h4 {
    font-family: "Roboto Slab", serif;
    color: #f59e0b;
    font-size: 1.3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.buffet-highlight ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
}

.buffet-highlight ul li {
    font-family: "Roboto Mono", monospace;
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.8);
    padding-left: 1.5rem;
    position: relative;
}

.buffet-highlight ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #f59e0b;
    font-weight: bold;
}

/* Category Header */
.category-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(245, 158, 11, 0.3);
}

.category-header-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 24px rgba(245, 158, 11, 0.3);
}

.category-header-icon i {
    font-size: 1.8rem;
    color: #7c2d12;
}

.category-header-text h3 {
    font-family: "Roboto Slab", serif;
    color: #ffffff;
    font-size: 1.8rem;
    font-weight: 700;
    margin: 0;
}

.category-header-text p {
    color: #f59e0b;
    font-size: 0.85rem;
    margin: 0;
    margin-top: 0.25rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Dining Highlight Cards */
.why-choose-card {
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 1rem;
    padding: 1.5rem 1.5rem;
    text-align: left;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.why-choose-card .icon-wrapper {
    width: 50px; height: 50px;
    background: linear-gradient(135deg, #ffd4b8 0%, #ffb88c 100%);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 0 1rem 0;
    box-shadow: 0 8px 20px rgba(245, 158, 11, 0.2);
}
.why-choose-card .icon-wrapper i { font-size: 1.4rem; color: #2d5a47; }
.why-choose-card h4 {
    color: #ffffff; font-size: 1.1rem; font-weight: 600;
    margin-bottom: 0.75rem;
    font-family: "Roboto Slab", serif; line-height: 1.4;
}
.why-choose-card p {
    color: rgba(255,255,255,0.8); font-size: 0.85rem;
    line-height: 1.65; font-family: "Roboto Mono", monospace;
}

/* Awards */
.award-card { transition: transform 0.3s ease; }
.award-card:hover { transform: translateY(-4px); }
.award-image { transition: transform 0.3s ease; }
.award-card:hover .award-image { transform: scale(1.05); }
@media (max-width: 768px) {
    .award-card > div { min-height: 280px !important; }
    .award-image { max-width: 220px; }
}

/* FAQ */
.faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: start;
}
.faq-col {
    display: flex; flex-direction: column;
    gap: 14px; width: 100%; min-width: 0;
}
.faq-question { min-height: 64px; height: 64px; }
.faq-question span {
    white-space: nowrap; overflow: hidden;
    text-overflow: ellipsis; display: block; font-size: 15px !important;
}
@media screen and (max-width: 860px) {
    .faq-grid { grid-template-columns: 1fr !important; }
    .faq-question { height: auto !important; min-height: unset !important; }
    .faq-question span {
        white-space: normal !important; overflow: visible !important;
        text-overflow: unset !important; font-size: 14px !important;
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: scale(0.9) translateY(20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.animate-slideIn {
    animation: slideIn 0.3s ease-out;
}

#specialOfferPopup > div {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

#specialOfferPopup > div::-webkit-scrollbar {
    display: none;
}
/* ── Tab Nav ── */
      .modern-menu-container { display: flex; gap: 24px; align-items: flex-start; }
      .modern-tab-nav { display: flex; flex-direction: column; gap: 8px; min-width: 180px; }
      .modern-tab-item {
        display: flex; align-items: center; gap: 12px;
        padding: 12px 16px; border-radius: 12px; cursor: pointer;
        border: 1px solid rgba(255,255,255,0.08);
        transition: all 0.25s ease;
      }
      .modern-tab-item:hover { background: rgba(245,158,11,0.1); border-color: rgba(245,158,11,0.3); }
      .modern-tab-item.active { background: rgba(245,158,11,0.15); border-color: #f59e0b; }
      .modern-tab-icon { font-size: 20px; color: #9ca3af; width: 32px; text-align: center; }
      .modern-tab-item.active .modern-tab-icon { color: #f59e0b; }
      .modern-tab-label h4 { font-size: 14px; font-weight: 600; color: #e5e7eb; margin: 0; }
      .modern-tab-label p  { font-size: 11px; color: #6b7280; margin: 0; }
      .modern-tab-item.active .modern-tab-label h4 { color: #fbbf24; }

      /* ── Content Panel ── */
      .modern-menu-content { flex: 1; min-width: 0; }
      .modern-menu-panel { display: none; }
      .modern-menu-panel.active { display: block; }

      /* ── Category Header ── */
      .category-header {
        display: flex; align-items: center; gap: 16px;
        margin-bottom: 24px; padding-bottom: 16px;
        border-bottom: 1px solid rgba(245,158,11,0.2);
      }
      .category-header-icon {
        width: 52px; height: 52px; border-radius: 14px;
        background: rgba(245,158,11,0.15); display: flex;
        align-items: center; justify-content: center;
        font-size: 22px; color: #f59e0b;
        border: 1px solid rgba(245,158,11,0.3);
      }
      .category-header-text h3 { font-size: 22px; font-weight: 700; color: #fff; margin: 0 0 4px; }
      .category-header-text p  { font-size: 13px; color: #9ca3af; margin: 0; }

      /* ── Veg / Non-Veg Filter Tabs ── */
      .vn-tabs {
        display: flex; gap: 10px; margin-bottom: 20px;
      }
      .vn-tab {
        display: flex; align-items: center; gap: 7px;
        padding: 7px 18px; border-radius: 999px; cursor: pointer;
        font-size: 13px; font-weight: 600; border: 2px solid transparent;
        transition: all 0.2s ease; user-select: none;
      }
      .vn-tab.veg-tab       { color: #4ade80; border-color: rgba(74,222,128,0.35); background: rgba(74,222,128,0.07); }
      .vn-tab.veg-tab.active{ background: rgba(74,222,128,0.2); border-color: #4ade80; }
      .vn-tab.nonveg-tab       { color: #f87171; border-color: rgba(248,113,113,0.35); background: rgba(248,113,113,0.07); }
      .vn-tab.nonveg-tab.active{ background: rgba(248,113,113,0.2); border-color: #f87171; }
      .vn-dot { width: 10px; height: 10px; border-radius: 2px; }
      .vn-dot.green { background: #4ade80; }
      .vn-dot.red   { background: #f87171; }

      /* ── Menu Card ── */
      .premium-menu-card {
        display: flex; align-items: center; justify-content: space-between;
        padding: 14px 16px; border-radius: 12px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.07);
        transition: all 0.2s ease;
      }
      .premium-menu-card:hover { background: rgba(245,158,11,0.06); border-color: rgba(245,158,11,0.2); }
      .dish-name { font-size: 14px; font-weight: 600; color: #f3f4f6; margin-bottom: 3px; }
      .dish-desc { font-size: 12px; color: #6b7280; }
      .veg-badge, .nonveg-badge {
        width: 18px; height: 18px; border-radius: 3px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        margin-left: 12px;
      }
      .veg-badge    { border: 2px solid #4ade80; }
      .nonveg-badge { border: 2px solid #f87171; }
      .veg-badge::after    { content: ''; width: 8px; height: 8px; border-radius: 50%; background: #4ade80; display: block; }
      .nonveg-badge::after { content: ''; width: 8px; height: 8px; border-radius: 50%; background: #f87171; display: block; }

      /* ── Buffet Box ── */
      .buffet-highlight {
        background: rgba(245,158,11,0.05);
        border: 1px solid rgba(245,158,11,0.2);
        border-radius: 14px; padding: 18px 20px; margin-top: 20px;
      }
      .buffet-highlight h4 { font-size: 15px; font-weight: 700; color: #fbbf24; margin-bottom: 12px; }
      .buffet-highlight h4 i { margin-right: 8px; }
      .buffet-highlight ul { display: flex; flex-wrap: wrap; gap: 8px; list-style: none; padding: 0; margin: 0; }
      .buffet-highlight ul li {
        font-size: 12px; color: #d1d5db;
        background: rgba(255,255,255,0.06);
        border-radius: 999px; padding: 4px 12px;
      }

      /* ── Hidden card ── */
      .dish-card-hidden { display: none !important; }

      /* ── Responsive ── */
      @media (max-width: 768px) {
        .modern-menu-container { flex-direction: column; }
        .modern-tab-nav { flex-direction: row; flex-wrap: wrap; min-width: unset; }
        .modern-tab-item { flex: 1; min-width: 130px; }
      }
      /* ── MOBILE TAB SCROLL FIX — PASTE THIS AT END OF YOUR <style> BLOCK ── */
@media (max-width: 768px) {
  .modern-menu-container {
    flex-direction: column !important;
    display: flex !important;
  }
  .modern-tab-nav {
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    overflow-x: auto !important;
    overflow-y: visible !important;
    min-width: unset !important;
    width: 100% !important;
    gap: 10px !important;
    padding-bottom: 10px !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
    display: flex !important;
  }
  .modern-tab-nav::-webkit-scrollbar {
    display: none !important;
  }
  .modern-tab-item {
    flex: 0 0 auto !important;
    min-width: 120px !important;
    max-width: 140px !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
    padding: 12px 10px !important;
  }
  .modern-tab-label h4 { font-size: 12px !important; }
  .modern-tab-label p  { font-size: 10px !important; }
}
 /* ── Tab Nav ── */
      .modern-menu-container { display: flex; gap: 24px; align-items: flex-start; }
      .modern-tab-nav { display: flex; flex-direction: column; gap: 8px; min-width: 180px; }
      .modern-tab-item {
        display: flex; align-items: center; gap: 12px;
        padding: 12px 16px; border-radius: 12px; cursor: pointer;
        border: 1px solid rgba(255,255,255,0.08);
        transition: all 0.25s ease;
      }
      .modern-tab-item:hover { background: rgba(245,158,11,0.1); border-color: rgba(245,158,11,0.3); }
      .modern-tab-item.active { background: rgba(245,158,11,0.15); border-color: #f59e0b; }
      .modern-tab-icon { font-size: 20px; color: #9ca3af; width: 32px; text-align: center; }
      .modern-tab-item.active .modern-tab-icon { color: #f59e0b; }
      .modern-tab-label h4 { font-size: 14px; font-weight: 600; color: #e5e7eb; margin: 0; }
      .modern-tab-label p  { font-size: 11px; color: #6b7280; margin: 0; }
      .modern-tab-item.active .modern-tab-label h4 { color: #fbbf24; }

      /* ── Content Panel ── */
      .modern-menu-content { flex: 1; min-width: 0; }
      .modern-menu-panel { display: none; }
      .modern-menu-panel.active { display: block; }

      /* ── Category Header ── */
      .category-header {
        display: flex; align-items: center; gap: 16px;
        margin-bottom: 24px; padding-bottom: 16px;
        border-bottom: 1px solid rgba(245,158,11,0.2);
      }
      .category-header-icon {
        width: 52px; height: 52px; border-radius: 14px;
        background: rgba(245,158,11,0.15); display: flex;
        align-items: center; justify-content: center;
        font-size: 22px; color: #f59e0b;
        border: 1px solid rgba(245,158,11,0.3);
      }
      .category-header-text h3 { font-size: 22px; font-weight: 700; color: #fff; margin: 0 0 4px; }
      .category-header-text p  { font-size: 13px; color: #9ca3af; margin: 0; }

      /* ── Veg / Non-Veg Filter Tabs ── */
      .vn-tabs {
        display: flex; gap: 10px; margin-bottom: 20px;
      }
      .vn-tab {
        display: flex; align-items: center; gap: 7px;
        padding: 7px 18px; border-radius: 999px; cursor: pointer;
        font-size: 13px; font-weight: 600; border: 2px solid transparent;
        transition: all 0.2s ease; user-select: none;
      }
      .vn-tab.veg-tab       { color: #4ade80; border-color: rgba(74,222,128,0.35); background: rgba(74,222,128,0.07); }
      .vn-tab.veg-tab.active{ background: rgba(74,222,128,0.2); border-color: #4ade80; }
      .vn-tab.nonveg-tab       { color: #f87171; border-color: rgba(248,113,113,0.35); background: rgba(248,113,113,0.07); }
      .vn-tab.nonveg-tab.active{ background: rgba(248,113,113,0.2); border-color: #f87171; }
      .vn-dot { width: 10px; height: 10px; border-radius: 2px; }
      .vn-dot.green { background: #4ade80; }
      .vn-dot.red   { background: #f87171; }

      /* ── Menu Card ── */
      .premium-menu-card {
        display: flex; align-items: center; justify-content: space-between;
        padding: 14px 16px; border-radius: 12px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.07);
        transition: all 0.2s ease;
      }
      .premium-menu-card:hover { background: rgba(245,158,11,0.06); border-color: rgba(245,158,11,0.2); }
      .dish-name { font-size: 14px; font-weight: 600; color: #f3f4f6; margin-bottom: 3px; }
      .dish-desc { font-size: 12px; color: #6b7280; }
      .veg-badge, .nonveg-badge {
        width: 18px; height: 18px; border-radius: 3px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        margin-left: 12px;
      }
      .veg-badge    { border: 2px solid #4ade80; }
      .nonveg-badge { border: 2px solid #f87171; }
      .veg-badge::after    { content: ''; width: 8px; height: 8px; border-radius: 50%; background: #4ade80; display: block; }
      .nonveg-badge::after { content: ''; width: 8px; height: 8px; border-radius: 50%; background: #f87171; display: block; }

      /* ── Buffet Box ── */
      .buffet-highlight {
        background: rgba(245,158,11,0.05);
        border: 1px solid rgba(245,158,11,0.2);
        border-radius: 14px; padding: 18px 20px; margin-top: 20px;
      }
      .buffet-highlight h4 { font-size: 15px; font-weight: 700; color: #fbbf24; margin-bottom: 12px; }
      .buffet-highlight h4 i { margin-right: 8px; }
      .buffet-highlight ul { display: flex; flex-wrap: wrap; gap: 8px; list-style: none; padding: 0; margin: 0; }
      .buffet-highlight ul li {
        font-size: 12px; color: #d1d5db;
        background: rgba(255,255,255,0.06);
        border-radius: 999px; padding: 4px 12px;
      }

      /* ── Hidden card ── */
      .dish-card-hidden { display: none !important; }

      /* ── Responsive ── */
      @media (max-width: 768px) {
        .modern-menu-container { flex-direction: column; }
        .modern-tab-nav {
          flex-direction: row;
          flex-wrap: nowrap;
          overflow-x: auto;
          min-width: unset;
          gap: 10px;
          padding-bottom: 8px;
          -webkit-overflow-scrolling: touch;
          scrollbar-width: none;
        }
        .modern-tab-nav::-webkit-scrollbar { display: none; }
        .modern-tab-item {
          flex: 0 0 auto;
          min-width: 130px;
          flex-direction: column;
          align-items: center;
          text-align: center;
          padding: 12px 10px;
        }
        .modern-tab-label h4 { font-size: 13px; }
        .modern-tab-label p  { font-size: 10px; }
      }
</style>

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

    <div class="modern-menu-container">

      <!-- ═══ LEFT: Category Tabs ═══ -->
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

      <!-- ═══ RIGHT: Content ═══ -->
      <div class="modern-menu-content">

        <!-- ════════ SOUTH INDIAN ════════ -->
        <div class="modern-menu-panel active" data-menu="southindian">
          <div class="category-header">
            <div class="category-header-icon"><i class="fas fa-pepper-hot"></i></div>
            <div class="category-header-text">
              <h3>South Indian Cuisine</h3>
              <p>Authentic Traditional Flavours</p>
            </div>
          </div>

          <!-- Veg / NonVeg Tabs -->
          <div class="vn-tabs">
            <div class="vn-tab veg-tab active" data-panel="southindian" data-filter="veg">
              <span class="vn-dot green"></span> Veg
            </div>
            <div class="vn-tab nonveg-tab" data-panel="southindian" data-filter="nonveg">
              <span class="vn-dot red"></span> Non-Veg
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
            <!-- VEG -->
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Idli</div>
                <div class="dish-desc">Soft steamed rice cakes served with chutney &amp; sambar</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Dosa</div>
                <div class="dish-desc">Crispy fermented crepe served with chutney &amp; sambar</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Medu Vada</div>
                <div class="dish-desc">Crunchy lentil doughnuts with chutney &amp; sambar</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Puri &amp; Kizhangu</div>
                <div class="dish-desc">Fluffy fried bread served with spiced potato curry</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Vegetable Dum Biryani</div>
                <div class="dish-desc">Slow-cooked South Indian style vegetable biryani</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Tomato Rice</div>
                <div class="dish-desc">Tangy South Indian style tomato rice</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Lemon Rice</div>
                <div class="dish-desc">Zesty lemon-flavoured rice with tempering</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Curd Rice</div>
                <div class="dish-desc">Cooling yogurt rice, a South Indian comfort classic</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Paruppu Sadham</div>
                <div class="dish-desc">Soft lentil rice cooked with ghee and spices</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <!-- NON-VEG -->
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">South Indian Chicken Dum Biryani</div>
                <div class="dish-desc">Famous slow-cooked South Indian style chicken biryani</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Fish Curry</div>
                <div class="dish-desc">Fresh fish in a spiced South Indian coconut-based curry</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Tawa Fish Fry</div>
                <div class="dish-desc">Spice-marinated fish, shallow-fried on a hot tawa</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Chicken &amp; Mutton Varieties</div>
                <div class="dish-desc">Wide variety of chicken, mutton &amp; fish dishes on request</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
          </div>

          <div class="buffet-highlight">
            <h4><i class="fas fa-utensils"></i> Buffet South Indian Meals</h4>
            <ul>
              <li>Steamed White Rice</li>
              <li>Sambar with seasonal vegetables</li>
              <li>Rasam varieties</li>
              <li>Butter Milk</li>
              <li>Soft Chapathi</li>
              <li>Vegetable Poriyals</li>
              <li>Pickle &amp; Appalam</li>
              <li>Payasam (dessert)</li>
            </ul>
          </div>
        </div>

        <!-- ════════ NORTH INDIAN ════════ -->
        <div class="modern-menu-panel" data-menu="northindian">
          <div class="category-header">
            <div class="category-header-icon"><i class="fas fa-drumstick-bite"></i></div>
            <div class="category-header-text">
              <h3>North Indian Cuisine</h3>
              <p>Rich &amp; Flavorful Punjabi Dishes</p>
            </div>
          </div>

          <div class="vn-tabs">
            <div class="vn-tab veg-tab active" data-panel="northindian" data-filter="veg">
              <span class="vn-dot green"></span> Veg
            </div>
            <div class="vn-tab nonveg-tab" data-panel="northindian" data-filter="nonveg">
              <span class="vn-dot red"></span> Non-Veg
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
            <!-- VEG -->
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Paneer Butter Masala</div>
                <div class="dish-desc">Cottage cheese in rich, creamy tomato-butter gravy</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Various Dal Preparations</div>
                <div class="dish-desc">Dal Tadka, Dal Makhani &amp; more slow-simmered classics</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Tari Poha</div>
                <div class="dish-desc">Flattened rice in a light, spiced curry gravy</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Poori Aloo Sabji</div>
                <div class="dish-desc">Fluffy deep-fried bread with spiced potato curry</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Upma</div>
                <div class="dish-desc">Savoury semolina breakfast dish with vegetables</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Seasonal Veg Sabji</div>
                <div class="dish-desc">Freshly cooked seasonal vegetable preparations</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Indian Breads</div>
                <div class="dish-desc">Fresh Rotis, Naan &amp; more from the tandoor</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <!-- NON-VEG -->
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Tandoori Items</div>
                <div class="dish-desc">Marinated meats char-grilled in the tandoor</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Saoji Chicken</div>
                <div class="dish-desc">Bold &amp; fiery Nagpur-style chicken curry</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Egg Curry</div>
                <div class="dish-desc">Boiled eggs simmered in a North Indian onion-tomato gravy</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Chicken Curry</div>
                <div class="dish-desc">Classic North Indian style chicken curry</div>
              </div>
              <div class="nonveg-badge"></div>
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
              <li>Egg / Chicken Curry</li>
              <li>Starter &amp; Soup</li>
              <li>Pickle &amp; Papad</li>
              <li>Dessert</li>
            </ul>
          </div>
        </div>

        <!-- ════════ CHINESE ════════ -->
        <div class="modern-menu-panel" data-menu="chinese">
          <div class="category-header">
            <div class="category-header-icon"><i class="fas fa-bowl-food"></i></div>
            <div class="category-header-text">
              <h3>Chinese Cuisine</h3>
              <p>Popular Indo-Chinese Favorites</p>
            </div>
          </div>

          <div class="vn-tabs">
            <div class="vn-tab veg-tab active" data-panel="chinese" data-filter="veg">
              <span class="vn-dot green"></span> Veg
            </div>
            <div class="vn-tab nonveg-tab" data-panel="chinese" data-filter="nonveg">
              <span class="vn-dot red"></span> Non-Veg
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- VEG -->
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">All Soup Varieties</div>
                <div class="dish-desc">Hot &amp; sour, sweet corn, manchow soup &amp; more</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Paneer Varieties</div>
                <div class="dish-desc">Chilli paneer, paneer manchurian &amp; more Indo-Chinese</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Veg Noodles</div>
                <div class="dish-desc">Veg hakka &amp; schezwan noodles wok-tossed to perfection</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Veg Fried Rice</div>
                <div class="dish-desc">Wok-tossed vegetables with fragrant fried rice</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Veg Manchurian</div>
                <div class="dish-desc">Crispy veg balls tossed in spiced Manchurian sauce</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <!-- NON-VEG -->
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">All Chicken Varieties</div>
                <div class="dish-desc">Chilli chicken, chicken manchurian, crispy honey chicken</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Chicken Noodles</div>
                <div class="dish-desc">Chicken hakka &amp; schezwan noodles wok-tossed</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Egg Noodles</div>
                <div class="dish-desc">Egg tossed hakka &amp; schezwan noodles</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Chicken Fried Rice</div>
                <div class="dish-desc">Wok-tossed chicken fried rice with bold flavours</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Egg Fried Rice</div>
                <div class="dish-desc">Classic egg fried rice with wok-tossed flavour</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
          </div>
        </div>

        <!-- ════════ FAST FOOD ════════ -->
        <div class="modern-menu-panel" data-menu="fastfood">
          <div class="category-header">
            <div class="category-header-icon"><i class="fas fa-burger"></i></div>
            <div class="category-header-text">
              <h3>Quick Bites &amp; Snacks</h3>
              <p>Fast &amp; Delicious</p>
            </div>
          </div>

          <div class="vn-tabs">
            <div class="vn-tab veg-tab active" data-panel="fastfood" data-filter="veg">
              <span class="vn-dot green"></span> Veg
            </div>
            <div class="vn-tab nonveg-tab" data-panel="fastfood" data-filter="nonveg">
              <span class="vn-dot red"></span> Non-Veg
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- VEG -->
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Maggi</div>
                <div class="dish-desc">Classic instant noodles — a jungle camp favourite</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Veg Sandwich</div>
                <div class="dish-desc">Freshly made veg sandwich with sauces</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Chai — Indian Tea</div>
                <div class="dish-desc">Freshly brewed spiced masala chai, served piping hot</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="veg">
              <div class="dish-info">
                <div class="dish-name">Coffee</div>
                <div class="dish-desc">Hot brewed coffee — perfect after a morning safari</div>
              </div>
              <div class="veg-badge"></div>
            </div>
            <!-- NON-VEG -->
            <div class="premium-menu-card dish-card-hidden" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Non-Veg Sandwich</div>
                <div class="dish-desc">Freshly made chicken / egg sandwich with sauces</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
          </div>
        </div>

        <!-- ════════ EGG DISHES ════════ -->
        <div class="modern-menu-panel" data-menu="eggs">
          <div class="category-header">
            <div class="category-header-icon"><i class="fas fa-egg"></i></div>
            <div class="category-header-text">
              <h3>All Egg Varieties</h3>
              <p>Protein-Packed Goodness</p>
            </div>
          </div>

          <!-- Eggs are all non-veg; show both tabs but NonVeg active by default -->
          <div class="vn-tabs">
            <div class="vn-tab veg-tab" data-panel="eggs" data-filter="veg">
              <span class="vn-dot green"></span> Veg
            </div>
            <div class="vn-tab nonveg-tab active" data-panel="eggs" data-filter="nonveg">
              <span class="vn-dot red"></span> Non-Veg
            </div>
          </div>

          <!-- No veg items message -->
          <div class="no-items-msg" data-panel="eggs" style="display:none; color:#9ca3af; font-size:13px; padding:16px 0;">
            No vegetarian items in this category.
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="premium-menu-card" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Omelette</div>
                <div class="dish-desc">Plain, masala &amp; cheese omelettes made to order</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Egg Bhurji</div>
                <div class="dish-desc">Spiced scrambled eggs with onion, tomato &amp; green chilli</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Egg Curry</div>
                <div class="dish-desc">Boiled eggs simmered in a rich onion-tomato gravy</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Boiled Eggs</div>
                <div class="dish-desc">Soft or hard boiled, served with seasoning</div>
              </div>
              <div class="nonveg-badge"></div>
            </div>
            <div class="premium-menu-card" data-type="nonveg">
              <div class="dish-info">
                <div class="dish-name">Fried Eggs</div>
                <div class="dish-desc">Sunny side up or double fried to your preference</div>
              </div>
              <div class="nonveg-badge"></div>
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

<!-- FAQs Section - 20 Questions (From Index Page) -->
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

                <!-- FAQ 1 -->
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

                <!-- FAQ 2 -->
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

                <!-- FAQ 3 -->
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

                <!-- FAQ 4 -->
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

                <!-- FAQ 5 -->
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

                <!-- FAQ 6 -->
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

                <!-- FAQ 7 -->
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

                <!-- FAQ 8 -->
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

                <!-- FAQ 9 -->
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

                <!-- FAQ 10 -->
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

                <!-- FAQ 11 -->
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

                <!-- FAQ 12 -->
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

                <!-- FAQ 13 -->
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

                <!-- FAQ 14 -->
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

                <!-- FAQ 15 -->
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

                <!-- FAQ 16 -->
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

                <!-- FAQ 17 -->
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

                <!-- FAQ 18 -->
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

                <!-- FAQ 19 -->
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

                <!-- FAQ 20 -->
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
<button id="specialOfferBtn"
    class="fixed bottom-20 right-4 md:bottom-24 mb-8 md:right-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110 animate-pulse"
    aria-label="Special Offer" onclick="toggleSpecialOfferPopup()">
    <!-- Price Tag Icon -->
    <svg class="w-8 h-8 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd"></path>
    </svg>
    <span
        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full animate-bounce">
        New
    </span>
</button>
<!-- Special Offer Popup Modal -->
<div id="specialOfferPopup"
    class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[100] hidden items-center justify-center p-4"
    onclick="closeIfClickedOutside(event)">

    <div class="bg-neutral-900 border-2 border-amber-500/50 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative animate-slideIn"
        onclick="event.stopPropagation()">

        <!-- Close Button -->
        <button onclick="toggleSpecialOfferPopup()"
            class="absolute top-4 right-4 text-white hover:text-amber-500 transition z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Header with Gradient -->
        <div class="bg-gradient-to-r from-amber-600 to-amber-500 p-6 md:p-8 rounded-t-2xl">
            <div class="flex items-center gap-3 mb-2">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                    </path>
                </svg>
                <h3 class="text-2xl md:text-3xl font-serif font-bold text-white">Special Offers</h3>
            </div>
            <p class="text-amber-100 text-sm">Limited time deals on resort packages & safari tours</p>
        </div>

        <!-- Offers Content -->
        <div class="p-6 md:p-8 space-y-6">

            <!-- Offer 1 - Resort + Safari Package -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span
                            class="inline-block bg-amber-500 text-black text-xs font-bold px-3 py-1 rounded-full mb-2">
                            BESTSELLER
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">2N/3D Resort + Safari Package</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-400 text-sm line-through">₹15,000</p>
                        <p class="text-2xl font-bold text-amber-500">₹12,499</p>
                    </div>
                </div>
                <ul class="text-gray-300 text-sm space-y-2 mb-4">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        2 Nights Stay at Wildmark Resort (Near Khatia Gate)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        4 Jungle Safaris (Morning + Evening)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        All Meals Included (Breakfast, Lunch, Dinner)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Complimentary Safari Permit Assistance
                    </li>
                </ul>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>

                </div>
            </div>

            <!-- Offer 2 - Early Bird Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span
                            class="inline-block bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            EARLY BIRD
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Advance Booking Discount</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-500">20% OFF</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Book 30 days in advance and save 20% on all resort packages. Valid for bookings made before March
                    31, 2025.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        BOOK NOW
                    </a>

                </div>
            </div>

            <!-- Offer 3 - Group Discount -->
            <div class="bg-black border border-amber-500/30 rounded-xl p-5 hover:border-amber-500 transition">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <span class="inline-block bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">
                            GROUP OFFER
                        </span>
                        <h4 class="text-xl font-serif font-bold text-white">Group Booking Special</h4>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-blue-500">₹10,999</p>
                        <p class="text-xs text-gray-400">per person</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Special rates for groups of 6+ people. Perfect for families, corporate outings, and wildlife
                    photography tours.
                </p>
                <div class="flex gap-3">
                    <a href="contact.php"
                        class="flex-1 bg-amber-500 hover:bg-amber-600 text-black font-bold py-2 px-4 rounded-lg text-center text-sm transition">
                        Book Now
                    </a>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="bg-amber-500/10 border-t border-amber-500/30 p-4 text-center rounded-b-2xl">
            <p class="text-amber-500 text-sm font-semibold">
                ⏰ Offers valid till March 31, 2025 | Terms & Conditions Apply
            </p>
        </div>

    </div>
</div>
<!-- WhatsApp Button -->
<a href="https://wa.me/8830996719" target="_blank"
    class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110">
    <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
    </svg>
</a>

<script>
// Modern Menu Tabs Functionality
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

// FAQ Accordion
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
  // ── Category Tab Switch ──
  document.querySelectorAll('.modern-tab-item').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.modern-tab-item').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.modern-menu-panel').forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      const key = tab.dataset.menu;
      document.querySelector(`.modern-menu-panel[data-menu="${key}"]`).classList.add('active');
    });
  });

  // ── Veg / NonVeg Filter ──
  document.querySelectorAll('.vn-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      const panel  = tab.dataset.panel;
      const filter = tab.dataset.filter;

      // Update active tab style inside this panel
      document.querySelectorAll(`.vn-tab[data-panel="${panel}"]`).forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      // Show/hide cards
      const menuPanel = document.querySelector(`.modern-menu-panel[data-menu="${panel}"]`);
      const cards     = menuPanel.querySelectorAll('.premium-menu-card');
      let hasItems    = false;

      cards.forEach(card => {
        if (card.dataset.type === filter) {
          card.classList.remove('dish-card-hidden');
          hasItems = true;
        } else {
          card.classList.add('dish-card-hidden');
        }
      });

      // Show "no items" message if empty
      const noMsg = menuPanel.querySelector('.no-items-msg');
      if (noMsg) noMsg.style.display = hasItems ? 'none' : 'block';
    });
  });
</script>
<?php 
include 'includes/footer.php'; 
?>