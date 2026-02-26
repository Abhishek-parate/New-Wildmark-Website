<form class="space-y-4" method="POST" action="https://wildmarkresort.com/send-mail.php">

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

    <!-- NOT REQUIRED -->
    <div>
        <textarea name="message" rows="5"
            placeholder="Your Message"
            class="w-full border rounded-lg px-4 py-3 resize-none"></textarea>
    </div>

    <div>
        <button type="submit"
            class="w-full font-semibold py-3 rounded-lg text-white bg-green-600">
            SEND MESSAGE
        </button>
    </div>

</form>