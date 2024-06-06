<?php

include 'libs/mid.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Techy Software</title>
        <meta name="description" content="Techy Software offers innovative software solutions for businesses of all sizes. Learn more about our services and how we can help your business grow.">
        <meta name="keywords" content="Techy Software, software solutions, business software, innovative software, software development">
        <meta name="author" content="Techy Software">

        <!-- Open Graph Meta Tags for Social Media -->
        <meta property="og:title" content="Techy Software - Innovative Software Solutions">
        <meta property="og:description" content="Techy Software offers innovative software solutions for businesses of all sizes.">
        <meta property="og:image" content="https://example.com/images/og-image.jpg">
        <meta property="og:url" content="https://example.com">
        <meta property="og:type" content="website">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?=getConfig('root_path');?>_assets/$css/style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    </head>
    <body>
        <header class="header">
            <h1 class="logo">Techy Software</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <section id="home" class="home-section">
                <div>
                    <h2>Welcome to Techy Software</h2>
                    <p>The best software and website development company. we provides creative, strategic web design & web application and software development to make your aspiring customers friendly understand your products and services.</p>
                </div>
                <img src="#" alt="Screenshot of our software interface" loading="lazy">
            </section>

            <section id="about" class="about-section">
                <h2>About Us</h2>
                <p>At Techy Software, we specialize in providing top-notch software solutions tailored to meet the needs of businesses of all sizes.</p>
            </section>

            <section id="services" class="services-section">
                <h2>Our Services</h2>
                <p>We offer a wide range of services including custom software development, software consulting, and support and maintenance services.</p>
            </section>

            <section id="review" class="review-section">
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
            <p>© 2024 Techy Software All rights reserved.</p>
            <div class="social-media">
                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank">Instagram</a>
                <a href="#" target="_blank">X</a>
                <a href="#" target="_blank">LinkedIn</a>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <script src="<?=getConfig('root_path');?>_assets/$js/index.js"></script>
</html>