<style>

/* ================= THEME VARIABLES ================= */
:root{
  --bg1:#E8C999;
  --bg2:#F8EEDF;
  --text1:#000000;
  --text2:#8E1616;
  --border-soft:rgba(0,0,0,0.15);
}

footer{
  background: #E8C999;
  color:var(--text1);
  border-top:2px solid rgba(142,22,22,0.3);
}

footer p,
footer li,
footer span,
footer a{
  color:var(--text1);
}

footer h4{
  color:var(--text2);
  font-size: 0.9rem;
  margin-bottom: 8px;
}

footer a:hover{
  color:var(--text2) !important;
}

footer i{
  color:var(--text1);
  transition:.3s;
}
footer i:hover{
  color:var(--text2);
}

.footer-bottom{
  border-top:1px solid rgba(142,22,22,0.25);
  margin-top: 12px;
  padding-top: 10px;
}

.map-box{
  border:1px solid rgba(142,22,22,0.4);
  border-radius: 10px;
  overflow: hidden;
}

/* Grid */
.footer-grid{
  display: grid;
  grid-template-columns: 1fr;
  gap: 14px;
}

@media (min-width:768px){
  .footer-grid{
    grid-template-columns: 1.4fr 0.8fr 0.75fr 1fr 1.7fr !important;
    gap: 10px !important;
    align-items: start;
  }
  .map-box{ height: 230px !important; width: 100% !important; }
}
@media (max-width:767px){
  .map-box{ height: 200px !important; width: 100% !important; }
}

/* Tighten list spacing */
.footer-list{
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 5px;
}
.footer-list li a,
.footer-list li span,
.footer-list li{
  font-size: 0.8rem;
  line-height: 1.4;
}

/* contact list */
.contact-list{
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 7px;
}
.contact-list li{
  display: flex;
  align-items: flex-start;
  gap: 7px;
  font-size: 0.8rem;
  line-height: 1.4;
}
.contact-list li i{
  margin-top: 2px;
  flex-shrink: 0;
  font-size: 0.75rem;
}

/* Logo */
.footer-logo{
  height: 48px;
  width: auto;
  object-fit: contain;
  margin-bottom: 8px;
}

/* About text */
.footer-about-text{
  font-size: 0.8rem;
  line-height: 1.5;
  margin-bottom: 10px;
}

/* Social icons */
.footer-social{
  display: flex;
  gap: 12px;
  font-size: 0.9rem;
}
</style>

<footer class="py-5">
  <div class="max-w-screen-2xl mx-auto px-4 md:px-6">

    <div class="footer-grid mb-0">

      <!-- About -->
      <div>
        <a href="https://wildmarkresort.com//" class="inline-block">
          <img src="https://wildmarkresort.com/images/WILD.png" alt="Wildmark Resort Kanha Logo" class="footer-logo"/>
        </a>
        <p class="footer-about-text">
          Unforgettable Wildlife Adventure Await at Kanha Jungle Safari.
          See tigers, deer, leopards & more on a personalized jungle safari.
          Visit & book online.
        </p>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f" style="color: var(--text2);"></i></a>
          <a href="#"><i class="fab fa-instagram" style="color: var(--text2);"></i></a>
          <a href="#"><i class="fab fa-youtube" style="color: var(--text2);"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="font-serif font-bold">Quick Links</h4>
        <ul class="footer-list">
          <li><a href="https://wildmarkresort.com/">Home</a></li>
          <li><a href="know-about-kanha-national-park-in-detail/">Kanha</a></li>
          <li><a href="https://wildmarkresort.com/gallery/">Gallery</a></li>
          <li><a href="https://wildmarkresort.com/kanha-resort-activities/">Resort Activities</a></li>
          <li><a href="https://wildmarkresort.com/kanha-accommodation/">Accommodation</a></li>
          <li><a href="https://wildmarkresort.com/kanha-restaurant-menu/">Restaurant Menu</a></li>
        </ul>
      </div>

      <!-- Help Center -->
      <div>
        <h4 class="font-serif font-bold">Help Center</h4>
        <ul class="footer-list">
          <li><a href="https://wildmarkresort.com/contact/">Contact Us</a></li>
          <li><a href="https://wildmarkresort.com/privacy-policy/">Privacy Policy</a></li>
          <li><a href="https://wildmarkresort.com/terms-and-conditions/">Terms and Conditions</a></li>
          <li><a href="https://wildmarkresort.com/cancellation-policy/">Cancellation Policy</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="font-serif font-bold">Contact Info</h4>
        <ul class="contact-list">
          <li>
            <i class="fa-solid fa-location-dot" style="color: var(--text2);"></i>
            <span>Kanha Tiger Reserve, Near Maratha Restaurant, Mocha, Madhya Pradesh 481768</span>
          </li>
          <li>
            <i class="fa-solid fa-envelope" style="color: var(--text2);"></i>
            <a href="mailto:info@wildmarkresort.com/">info@wildmarkresort.com</a>
          </li>
          <li>
            <i class="fa-solid fa-phone" style="color: var(--text2);"></i>
            <a href="tel:8830996719">+91 8830996719</a>
          </li>
        </ul>
      </div>

      <!-- Map -->
      <div>
        <h4 class="font-serif font-bold">Our Location</h4>
        <div class="map-box shadow-md">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0234567890123!2d80.5118205!3d22.315946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2a0b67fb9e449f%3A0xb861ff4ba4e91cb5!2sWild%20Mark%20Resort%2C%20Kanha!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" loading="lazy"></iframe>
        </div>
      </div>

    </div>

    <!-- Bottom -->
    <div class="footer-bottom text-center">
      <p style="font-size:0.75rem; color:var(--text1);">
        © 2026 Wildmark Resort Kanha. All Rights Reserved. |
        Design & Developed by
        <a href="https://techinbox.in/" target="_blank"><b>Techinbox.in</b></a>
      </p>
    </div>

  </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/8830996719" target="_blank"
  class="fixed bottom-4 right-4 md:bottom-8 md:right-8 bg-green-500 hover:bg-green-600 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl z-50 transition transform hover:scale-110"
  data-aos="zoom-in" data-aos-delay="1000" aria-label="WhatsApp">
  <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
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