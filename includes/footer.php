<style>
/* ================= THEME VARIABLES ================= */
:root {
    --bg1: #E8C999;
    --bg2: #F8EEDF;
    --text1: #000000;
    --text2: #8E1616;
    --border-soft: rgba(0, 0, 0, 0.15);
}

footer {
    background: #E8C999;
    color: var(--text1);
    border-top: 2px solid rgba(142, 22, 22, 0.3);
}

footer p,
footer li,
footer span,
footer a {
    color: var(--text1);
}

footer h4 {
    color: var(--text2);
    font-size: 0.9rem;
    margin-bottom: 8px;
}

footer a:hover {
    color: var(--text2) !important;
}

footer i {
    color: var(--text1);
    transition: .3s;
}

footer i:hover {
    color: var(--text2);
}

.footer-bottom {
    border-top: 1px solid rgba(142, 22, 22, 0.25);
    margin-top: 12px;
    padding-top: 10px;
}

.map-box {
    border: 1px solid rgba(142, 22, 22, 0.4);
    border-radius: 10px;
    overflow: hidden;
}

/* Grid */
.footer-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 14px;
}

@media (min-width:768px) {
    .footer-grid {
        grid-template-columns: 1.4fr 0.8fr 0.75fr 1fr 1.7fr !important;
        gap: 10px !important;
        align-items: start;
    }

    .map-box {
        height: 230px !important;
        width: 100% !important;
    }
}

@media (max-width:767px) {
    .map-box {
        height: 200px !important;
        width: 100% !important;
    }
}

/* Tighten list spacing */
.footer-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.footer-list li a,
.footer-list li span,
.footer-list li {
    font-size: 0.8rem;
    line-height: 1.4;
}

/* contact list */
.contact-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 7px;
}

.contact-list li {
    display: flex;
    align-items: flex-start;
    gap: 7px;
    font-size: 0.8rem;
    line-height: 1.4;
}

.contact-list li i {
    margin-top: 2px;
    flex-shrink: 0;
    font-size: 0.75rem;
}

/* Logo */
.footer-logo {
    height: 48px;
    width: auto;
    object-fit: contain;
    margin-bottom: 8px;
}

/* About text */
.footer-about-text {
    font-size: 0.8rem;
    line-height: 1.5;
    margin-bottom: 10px;
}

/* Social icons */
.footer-social {
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
                    <img src="https://wildmarkresort.com/images/WILD.png" alt="Wildmark Resort Kanha Logo"
                        class="footer-logo" />
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
                        <a href="mailto:wildmarkresort@gmail.com">wildmarkresort@gmail.com</a>
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



<!-- AOS & Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
    duration: 600, // Faster animation
    delay: 100, // Small delay
    easing: 'ease-out',
    once: true, // Animation happens only once
    mirror: false
});

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
        packagesArrow.style.transform = mobilePackagesDropdown.classList.contains("active") ? "rotate(180deg)" :
            "rotate(0deg)";
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
        roomsArrow.style.transform = mobileRoomsDropdown.classList.contains("active") ? "rotate(180deg)" :
            "rotate(0deg)";
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