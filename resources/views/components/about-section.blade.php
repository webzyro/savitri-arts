<section class="about-section py-5">
    <div class="container py-lg-4">
        <div class="row gx-lg-5 align-items-center">
            <!-- Left Column: Images -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative about-images-container ps-lg-4">
                    <!-- Vertical Text -->
                    <div class="vertical-text d-none d-lg-block">
                        <span>LUXINE</span>
                    </div>

                    <!-- Main Image (Back) -->
                    <div class="about-img-main position-relative z-1">
                        <img src="{{ asset('assets/images/about1.avif') }}" loading="lazy" alt="Luxury Interior"
                            class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover"
                            style="height: 400px; object-position: center" />
                    </div>

                    <!-- Inset Image (Front) -->
                    <div class="about-img-inset position-absolute z-2 bg-white p-2 rounded-4 shadow">
                        <img src="{{ asset('assets/images/about2.avif') }}" loading="lazy" alt="Detailed Interior"
                            class="img-fluid rounded-3 w-100 h-100 object-fit-cover" />
                    </div>

                    <!-- Decorative Dots -->
                    <div class="dots-pattern position-absolute z-0"></div>
                </div>
            </div>

            <!-- Right Column: Content -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                    <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">About
                        Us</span>
                </div>
                <h2 class="display-6 fw-bold mb-4">
                    DESIGNING SPACES THAT FEEL LIKE LUXURY HOME
                </h2>
                <p class="text-secondary mb-4">
                    We create elegant, high end interiors that reflect comfort,
                    sophistication, and timeless beauty turning everyday living into
                    a luxurious experience.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-3">
                    <div class="d-flex align-items-center text-secondary">
                        <i class="fa-solid fa-circle-check text-warning me-2"></i>
                        We ensuring every project reflects both beauty.
                    </div>
                    <div class="d-flex align-items-center text-secondary">
                        <i class="fa-solid fa-circle-check text-warning me-2"></i>
                        We create spaces that are stylish, and efficient.
                    </div>
                </div>

                <!-- Cards -->
                <div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <h5 class="fw-bold mb-0">Our Mission</h5>
                                <i class="fa-solid fa-layer-group text-warning fs-3"></i>
                            </div>
                            <p class="text-secondary small mb-4">
                                Our mission is to craft refined, elegant & functional
                                living space that redefine.
                            </p>
                            <div class="d-flex align-items-center gap-2 small fw-medium text-warning">
                                <span class="bg-warning rounded-circle"
                                    style="width: 5px; height: 5px; display: inline-block"></span>
                                <span class="text-dark">To Deliver Thoughtfully Crafted and Spaces</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <h5 class="fw-bold mb-0">Our Vision</h5>
                                <i class="fa-solid fa-life-ring text-warning fs-3"></i>
                            </div>
                            <p class="text-secondary small mb-4">
                                Our vision is to become a trusted leader in architecture &
                                interior design.
                            </p>
                            <div class="d-flex align-items-center gap-2 small fw-medium text-warning">
                                <span class="bg-warning rounded-circle"
                                    style="width: 5px; height: 5px; display: inline-block"></span>
                                <span class="text-dark">To Redefine Modern Living Through Design</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-4">
                    <a href="{{ route('about') }}"
                        class="text-decoration-none btn-contact px-4 py-3 rounded-pill d-flex align-items-center gap-2">More
                        About Us
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>