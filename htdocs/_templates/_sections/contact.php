<section id="contact" class="contact-section">
    <h2 class="mt-5 mb-2">Contact Us</h2>
    <div class="contact-content d-flex align-items-center justify-content-around">
        <div class="contact-img mb-1">
            <img src="https://img.freepik.com/free-vector/flat-design-illustration-customer-support_23-2148887720.jpg?size=338&ext=jpg&ga=GA1.1.1141335507.1717977600&semt=ais_user" alt="contact image logo">
        </div>
        <form class="needs-validation w-50" autocomplete="off" id="contactForm">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                    <div class="invalid-feedback">Please enter your full name.</div>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                </div>
                <div class="col-12 mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="col">
                    <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                    <div class="invalid-feedback">Please enter a message.</div>
                </div>
            </div>
            <button class="btn btn-outline-success my-4" type="submit" id="button">
                <span class="btn-caption" id="value">Send Message</span>
            </button>
        </form>
    </div>
</section>

<!-- Send Mail JS Script -->
<script>
    const btn = document.getElementById('button');
    const value = document.getElementById('value');

    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();

        value.innerHTML = 'Sending...';

        const serviceID = 'default_service';
        const templateID = 'template_project';

        emailjs.sendForm(serviceID, templateID, this)
        .then(() => {
            btn.value = location.reload();
            alert('Email Send Successfully!');
        }, (err) => {
            btn.value = 'Send Email';
            alert(JSON.stringify(err));
        });
    });
</script>