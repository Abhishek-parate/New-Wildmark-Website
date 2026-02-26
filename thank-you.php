<?php 
$pageTitle = "Thank You - Wildmark Resort Kanha";
include 'includes/header.php'; 
?>

<style>
:root {
    --bg1:  #E8C999;
    --bg2:  #F8EEDF;
    --text1: #000000;
    --text2: #8E1616;
}

.thank-section {
    background: var(--bg2);
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px 20px;
}

.thank-card {
    background: var(--bg1);
    border-radius: 20px;
    padding: 50px 40px;
    max-width: 700px;
    width: 100%;
    text-align: center;
    box-shadow: 0 20px 40px rgba(142,22,22,0.15);
}

.thank-card h1 {
    color: var(--text2);
    font-size: 38px;
    margin-bottom: 15px;
}

.thank-card p {
    color: var(--text1);
    font-size: 16px;
    margin-bottom: 30px;
}

.primary-btn {
    background: var(--text2);
    color: #fff;
    padding: 12px 28px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
    margin: 8px;
    transition: 0.3s;
}

.primary-btn:hover {
    background: #6b1010;
}

.whatsapp-btn {
    background: #25D366;
}
.whatsapp-btn:hover {
    background: #1ebe5d;
}
</style>

<section class="thank-section">
    <div class="thank-card">

        <h1>Thank You for Contacting Us! 🌿</h1>

        <p>
            Your enquiry has been received successfully.  
            Our Wildmark Resort team will contact you shortly with room availability,
            pricing, and safari package details.
        </p>

        <p style="font-weight:600;">
            For faster response, you can also connect with us directly on WhatsApp.
        </p>

        <a href="https://wa.me/918830996719?text=Hello%20I%20just%20submitted%20an%20enquiry%20on%20Wildmark%20Resort%20website.%20Please%20assist%20me%20with%20booking%20details."
           class="primary-btn whatsapp-btn"
           target="_blank">
            Chat on WhatsApp
        </a>

        <a href="https://wildmarkresort.com/"
           class="primary-btn">
            Back to Home
        </a>

    </div>
</section>

<?php include 'includes/footer.php'; ?>