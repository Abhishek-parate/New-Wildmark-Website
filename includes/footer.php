   <style>
      @media (min-width: 768px) {
        .footer-grid {
          grid-template-columns: 1.4fr 0.85fr 0.75fr 1fr 1.8fr !important;
          gap: 20px !important;
        }
        .map-box { height: 260px !important; width: 100% !important; }
      }
      @media (max-width: 767px) {
        .map-box { height: 220px !important; width: 100% !important; }
      }
    </style>
<!-- Footer -->
<footer class="bg-black py-10 border-t border-neutral-800">
  <div class="max-w-screen-2xl mx-auto px-3 md:px-5">
       <div style="display: grid; grid-template-columns: 1fr; gap: 28px;" class="mb-8 footer-grid">

      <!-- About -->
      <div>
        <a href="index.php" class="flex items-center mb-4">
          <img src="images/WILD.png" alt="Wildmark Resort Kanha Logo" class="h-14 w-auto object-contain"/>
        </a>
        <p class="text-gray-400 text-sm leading-relaxed mb-5">
          Unforgettable Wildlife Adventure Await at Kanha Jungle Safari.
          See tigers, deer, leopards &amp; more on a personalized jungle safari.
          Visit &amp; book online.
        </p>
        <div class="flex gap-4 text-base">
          <a href="#" class="text-gray-400 hover:text-amber-500 transition"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-gray-400 hover:text-amber-500 transition"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-400 hover:text-amber-500 transition"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-base font-serif font-bold text-amber-100 mb-4">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="index.php" class="text-gray-400 hover:text-amber-500 transition">Home</a></li>
          <li><a href="about.php" class="text-gray-400 hover:text-amber-500 transition">About</a></li>
          <li><a href="How-to-Reach.php" class="text-gray-400 hover:text-amber-500 transition">How to Reach</a></li>
          <li><a href="Wildmark.php" class="text-gray-400 hover:text-amber-500 transition">Wildmark</a></li>
          <li><a href="kanha.php" class="text-gray-400 hover:text-amber-500 transition">Kanha</a></li>
          <li><a href="gallery.php" class="text-gray-400 hover:text-amber-500 transition">Gallery</a></li>
          <li><a href="resort-activities.php" class="text-gray-400 hover:text-amber-500 transition">Resort Activities</a></li>
          <li><a href="restaurant-menu.php" class="text-gray-400 hover:text-amber-500 transition">Restaurant Menu</a></li>
        </ul>
      </div>

      <!-- Help Center -->
      <div>
        <h4 class="text-base font-serif font-bold text-amber-100 mb-4">Help Center</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="contact.php" class="text-gray-400 hover:text-amber-500 transition">Contact Us</a></li>
          <li><a href="Privacy-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Privacy Policy</a></li>
          <li><a href="Terms-and-Conditions.php" class="text-gray-400 hover:text-amber-500 transition">Terms and Conditions</a></li>
          <li><a href="Cancellation-Policy.php" class="text-gray-400 hover:text-amber-500 transition">Cancellation Policy</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="text-base font-serif font-bold text-amber-100 mb-4">Contact Info</h4>
        <ul class="space-y-3 text-sm text-gray-400">
          <li class="flex items-start gap-2">
            <i class="fa-solid fa-location-dot text-amber-500 mt-1 flex-shrink-0"></i>
            <span>B.No. 8, Rajlaxmi Apartment Near Bhende Layout, Pannase Layout, Nagpur – 440022.</span>
          </li>
          <li class="flex items-center gap-2">
            <i class="fa-solid fa-envelope text-amber-500 flex-shrink-0"></i>
            <a href="mailto:info@wildmarkresort.com" class="hover:text-amber-500 transition break-all">info@wildmarkresort.com</a>
          </li>
          <li class="flex items-center gap-2">
            <i class="fa-solid fa-phone text-amber-500 flex-shrink-0"></i>
            <a href="tel:8830996719" class="hover:text-amber-500 transition">+91 8830996719</a>
          </li>
        </ul>
      </div>

      <!-- Map -->
      <div>
        <h4 class="text-base font-serif font-bold text-amber-100 mb-4">Our Location</h4>
        <div class="map-box rounded-xl overflow-hidden border border-amber-500/30 shadow-lg hover:scale-[1.02] transition duration-300" style="height: 260px; width: 100%;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0234567890123!2d80.5118205!3d22.315946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-neutral-800 pt-5 text-center">
      <p class="text-gray-500 text-xs">© 2025 Wildmark Resort Kanha. All Rights Reserved.</p>
    </div>

  </div>
</footer>


<!-- WhatsApp Floating Button -->
<a href="https://wa.me/8830996719" target="_blank"
  class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
  data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
  <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
    <path
      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
  </svg>
</a>

<!-- AOS & Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });

  const mobileMenuBtn = document.getElementById("mobileMenuBtn");
  const mobileMenu = document.getElementById("mobileMenu");
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      mobileMenu.classList.toggle("active");
    });
  }

  const mobilePackagesBtn = document.getElementById("mobilePackagesBtn");
  const mobilePackagesDropdown = document.getElementById("mobilePackagesDropdown");
  const packagesArrow = document.getElementById("packagesArrow");
  if (mobilePackagesBtn && mobilePackagesDropdown && packagesArrow) {
    mobilePackagesBtn.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      mobilePackagesDropdown.classList.toggle("active");
      packagesArrow.style.transform = mobilePackagesDropdown.classList.contains("active") ? "rotate(180deg)" : "rotate(0deg)";
    });
  }

  const mobileRoomsBtn = document.getElementById("mobileRoomsBtn");
  const mobileRoomsDropdown = document.getElementById("mobileRoomsDropdown");
  const roomsArrow = document.getElementById("roomsArrow");
  if (mobileRoomsBtn && mobileRoomsDropdown && roomsArrow) {
    mobileRoomsBtn.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      mobileRoomsDropdown.classList.toggle("active");
      roomsArrow.style.transform = mobileRoomsDropdown.classList.contains("active") ? "rotate(180deg)" : "rotate(0deg)";
    });
  }

  document.addEventListener("click", (e) => {
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
</script>
</body>
</html>