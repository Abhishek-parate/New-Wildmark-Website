<!-- contact-form.php -->
<form method="POST" action="https://wildmarkresort.com/send-mail" id="contactForm">

    <div>
        <input type="text" name="name" placeholder="Your Name" required
            class="w-full border rounded-lg px-4 py-3" />
    </div>

    <div>
        <input type="email" name="email" placeholder="Your Email" required
            class="w-full border rounded-lg px-4 py-3" />
    </div>

    <div>
        <input type="tel" name="phone" placeholder="Mobile Number" required
            class="w-full border rounded-lg px-4 py-3" />
    </div>

    <div>
        <textarea name="message" rows="5"
            placeholder="Your Message"
            class="w-full border rounded-lg px-4 py-3 resize-none"></textarea>
    </div>

    <div>
        <button type="submit" id="submitBtn"
            class="w-full font-semibold py-3 rounded-lg text-white bg-green-600 flex items-center justify-center gap-2 transition-all duration-200">

            <span id="btnText">SEND MESSAGE</span>

            <svg id="btnSpinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
            </svg>

        </button>
    </div>

</form>

<script>
document.getElementById('contactForm').addEventListener('submit', function () {
    const btn     = document.getElementById('submitBtn');
    const text    = document.getElementById('btnText');
    const spinner = document.getElementById('btnSpinner');
    text.textContent = 'Sending...';
    spinner.classList.remove('hidden');
    btn.disabled = true;
    btn.classList.add('opacity-75', 'cursor-not-allowed');
});
</script>