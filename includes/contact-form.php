<form method="POST"
      action="https://wildmarkresort.com/send-mail"
      id="contactForm"
      class="space-y-4">

    <!-- Name -->
    <input type="text"
           name="name"
           placeholder="Your Name"
           required
           class="w-full bg-white border border-gray-300
                  rounded-lg px-4 py-3 text-gray-800
                  placeholder-gray-400
                  focus:outline-none focus:ring-2
                  focus:ring-amber-500 focus:border-amber-500
                  transition duration-200 shadow-sm" />

    <!-- Email -->
    <input type="email"
           name="email"
           placeholder="Your Email"
           required
           class="w-full bg-white border border-gray-300
                  rounded-lg px-4 py-3 text-gray-800
                  placeholder-gray-400
                  focus:outline-none focus:ring-2
                  focus:ring-amber-500 focus:border-amber-500
                  transition duration-200 shadow-sm" />

    <!-- Phone -->
    <input type="tel"
           name="phone"
           placeholder="Mobile Number"
           required
           class="w-full bg-white border border-gray-300
                  rounded-lg px-4 py-3 text-gray-800
                  placeholder-gray-400
                  focus:outline-none focus:ring-2
                  focus:ring-amber-500 focus:border-amber-500
                  transition duration-200 shadow-sm" />

    <!-- Message -->
    <textarea name="message"
              rows="4"
              placeholder="Your Message"
              class="w-full bg-white border border-gray-300
                     rounded-lg px-4 py-3 text-gray-800
                     placeholder-gray-400 resize-none
                     focus:outline-none focus:ring-2
                     focus:ring-amber-500 focus:border-amber-500
                     transition duration-200 shadow-sm"></textarea>

    <!-- Button -->
    <button type="submit"
            id="submitBtn"
            class="w-full bg-red-800 hover:bg-red-900
                   text-white font-semibold py-3
                   rounded-lg flex items-center
                   justify-center gap-2 transition">

        <span id="btnText">Send Message</span>

        <svg id="btnSpinner"
             class="hidden animate-spin h-5 w-5 text-white"
             xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24">
            <circle class="opacity-25"
                    cx="12"
                    cy="12"
                    r="10"
                    stroke="currentColor"
                    stroke-width="4"></circle>
            <path class="opacity-75"
                  fill="currentColor"
                  d="M4 12a8 8 0 018-8v8z"></path>
        </svg>
    </button>

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