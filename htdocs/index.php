<?php

include 'libs/mid.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techy Software - Innovative Software Solutions</title>
    <meta name="description" content="Techy Software offers innovative software solutions for businesses of all sizes. Learn more about our services and how we can help your business grow.">
    <meta name="keywords" content="Techy Software, software solutions, business software, innovative software, software development">
    <meta name="author" content="Techy Software">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="Techy Software - Innovative Software Solutions">
    <meta property="og:description" content="Techy Software offers innovative software solutions for businesses of all sizes.">
    <meta property="og:image" content="https://example.com/images/og-image.jpg">
    <meta property="og:url" content="https://example.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Techy Software - Innovative Software Solutions">
    <meta name="twitter:description" content="Techy Software offers innovative software solutions for businesses of all sizes.">
    <meta name="twitter:image" content="https://example.com/images/twitter-card.jpg">

    <link rel="stylesheet" href="<?=getConfig('root_path');?>_assets/$css/style.css">
</head>
<body>
    <header>
        <h1>Techy Software</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="home">
            <h2>Welcome to Techy Software</h2>
            <p>Your solution for innovative software development.</p>
            <img src="images/software-interface.jpg" alt="Screenshot of our software interface" loading="lazy">
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>At Techy Software, we specialize in providing top-notch software solutions tailored to meet the needs of businesses of all sizes.</p>
        </section>

        <section id="services">
            <h2>Our Services</h2>
            <p>We offer a wide range of services including custom software development, software consulting, and support and maintenance services.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Techy Software. All rights reserved.</p>
        <div class="social-media">
            <a href="https://facebook.com/techysoftware" target="_blank">Facebook</a>
            <a href="https://twitter.com/techysoftware" target="_blank">Twitter</a>
            <a href="https://linkedin.com/company/techysoftware" target="_blank">LinkedIn</a>
        </div>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>