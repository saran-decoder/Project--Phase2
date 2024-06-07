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

        <!-- toggel Graph Meta Tags for Social Media -->
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
            <h1 class="logo m-0">Techy Software</h1>
            <nav class="res_nav">
                <ul class="res_list">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <button class="nav-icon-toggel position-relative z-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 18c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C3.689 14 4.46 14 6 14s2.31 0 2.876.347c.317.194.583.46.777.777C10 15.689 10 16.46 10 18s0 2.31-.347 2.877c-.194.316-.46.582-.777.776C8.311 22 7.54 22 6 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C2 20.31 2 19.54 2 18m12 0c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 14 16.46 14 18 14s2.31 0 2.877.347c.316.194.582.46.776.777C22 15.689 22 16.46 22 18s0 2.31-.347 2.877a2.36 2.36 0 0 1-.776.776C20.31 22 19.54 22 18 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C14 20.31 14 19.54 14 18M2 6c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C3.689 2 4.46 2 6 2s2.31 0 2.876.347c.317.194.583.46.777.777C10 3.689 10 4.46 10 6s0 2.31-.347 2.876c-.194.317-.46.583-.777.777C8.311 10 7.54 10 6 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C2 8.311 2 7.54 2 6m12 0c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 2 16.46 2 18 2s2.31 0 2.877.347c.316.194.582.46.776.777C22 3.689 22 4.46 22 6s0 2.31-.347 2.876c-.194.317-.46.583-.776.777C20.31 10 19.54 10 18 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C14 8.311 14 7.54 14 6" color="currentColor"/>
                </svg>
            </button>
        </header>
        
        <main>
            <section id="home" class="home-section">
                <div class="container home-content d-flex flex-row align-items-center">
                    <div class="mb-2">
                        <h2>Welcome to Techy Software</h2>
                        <p class="p-2">The best software and website development company. we're provides creative, strategic web design & web application and software development to make your aspiring customers friendly understand your products and services.</p>
                        <a href="#about" type="button" class="btn btn-outline-primary position-relative z-1">About Us</a>
                    </div>
                    <img src="./_assets/$images/Avatar.png" class="image-layer" width="50%" height="50%" alt="Software interface Avatar" loading="lazy">
                </div>
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
    <script>
        var iconToggel = $('button.nav-icon-toggel');

        $(iconToggel).on('click', function() {
            console.log('clicked');
            $('.res_nav, .res_list').toggleClass('active');
        });
    </script>
</html>