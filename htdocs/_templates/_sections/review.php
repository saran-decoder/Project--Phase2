<section id="reviews" class="reviews-section">
    <div class="container reviews-content">

        <div class="mb-5 d-flex align-items-center justify-content-center">
            <h2 class="m-0">Our Reviews</h2>
            <a href="<?= getConfig('root_path'); ?>review.php" class="p-0 ms-2" title="Upload Your Review">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7.007 12a.75.75 0 0 1 .75-.75h3.493V7.757a.75.75 0 0 1 1.5 0v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1-.75-.75"/>
                    <path fill="currentColor" fill-rule="evenodd" d="M7.317 3.769a42.502 42.502 0 0 1 9.366 0c1.827.204 3.302 1.643 3.516 3.48c.37 3.157.37 6.346 0 9.503c-.215 1.837-1.69 3.275-3.516 3.48a42.5 42.5 0 0 1-9.366 0c-1.827-.205-3.302-1.643-3.516-3.48a40.903 40.903 0 0 1 0-9.503c.214-1.837 1.69-3.276 3.516-3.48m9.2 1.49a41.001 41.001 0 0 0-9.034 0A2.486 2.486 0 0 0 5.29 7.424a39.402 39.402 0 0 0 0 9.154a2.486 2.486 0 0 0 2.193 2.164c2.977.332 6.057.332 9.034 0a2.486 2.486 0 0 0 2.192-2.164a39.401 39.401 0 0 0 0-9.154a2.486 2.486 0 0 0-2.192-2.163" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

        <div id="testimonialCarousel" class="carousel">
            <div class="carousel-inner">
                <?php
                    $reviews = Datas::getReview();
                    if (!empty($reviews)) {
                        foreach ($reviews as $index => $review) {
                            $rv = $review['star'];
                            $active = $index === 0 ? ' active' : '';
                ?>

                            <div class="carousel-item<?= $active; ?>">
                                <div class="card shadow-sm rounded-3">
                                    <div class="quotes display-2 text-body-tertiary">
                                        <i class="bi bi-quote"></i>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><?= htmlspecialchars($review['message']); ?></p>
                                        <div class="d-flex align-items-center pt-2">
                                            <img src="https://www.kindpng.com/picc/m/207-2074624_white-gray-circle-avatar-png-transparent-png.png" alt="User Review Avatar" class="rounded-circle">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="card-title fw-bold m-0"><?= htmlspecialchars($review['name']); ?></h5>
                                                <span class="text-secondary">
                                                    <?php
                                                        $star = '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 128 128"><path fill="#fdd835" d="m68.05 7.23l13.46 30.7a7.047 7.047 0 0 0 5.82 4.19l32.79 2.94c3.71.54 5.19 5.09 2.5 7.71l-24.7 20.75c-2 1.68-2.91 4.32-2.36 6.87l7.18 33.61c.63 3.69-3.24 6.51-6.56 4.76L67.56 102a7.033 7.033 0 0 0-7.12 0l-28.62 16.75c-3.31 1.74-7.19-1.07-6.56-4.76l7.18-33.61c.54-2.55-.36-5.19-2.36-6.87L5.37 52.78c-2.68-2.61-1.2-7.17 2.5-7.71l32.79-2.94a7.047 7.047 0 0 0 5.82-4.19l13.46-30.7c1.67-3.36 6.45-3.36 8.11-.01"/><path fill="#ffff8d" d="m67.07 39.77l-2.28-22.62c-.09-1.26-.35-3.42 1.67-3.42c1.6 0 2.47 3.33 2.47 3.33l6.84 18.16c2.58 6.91 1.52 9.28-.97 10.68c-2.86 1.6-7.08.35-7.73-6.13"/><path fill="#f4b400" d="M95.28 71.51L114.9 56.2c.97-.81 2.72-2.1 1.32-3.57c-1.11-1.16-4.11.51-4.11.51l-17.17 6.71c-5.12 1.77-8.52 4.39-8.82 7.69c-.39 4.4 3.56 7.79 9.16 3.97"/></svg>';
                                                        if (5 >= $rv && 0 !== $rv) {
                                                            for ($i = 1; $i <= $rv; $i++) {
                                                                echo $star;
                                                            }
                                                        } else {
                                                            echo $star;
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    } else {
                        ?>
                            <div class="carousel-item active">
                                <div class="card shadow-sm rounded-3">
                                    <div class="card-body">
                                        <p class="card-text">No Review's Updated Yet.</p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m4 12l6-6m-6 6l6 6m-6-6h10.5m5.5 0h-2.5"/>
                </svg>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h2.5M20 12l-6-6m6 6l-6 6m6-6H9.5"/>
                </svg>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>