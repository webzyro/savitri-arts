<x-layout>
    <x-breadcrumb title="About Us" />
    <x-scrolling />
    <x-about-section />

    <!-- What We Do -->
    <section class="what-we-do-section py-4">
        <div class="container py-lg-5">
            <div class="text-center mb-5 pb-lg-4">
                <div class="d-flex align-items-center justify-content-center mb-3 text-secondary">
                    <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                    <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">What We
                        Do</span>
                </div>
                <h2 class="display-6 fw-bold text-uppercase">
                    CRAFTING ARCHITECTURE AND<br />INTERIORS WITH PURPOSE
                </h2>
            </div>

            <div class="row align-items-center g-4">
                <!-- Left Column -->
                <div class="col-lg-4 order-2 order-lg-1">
                    <div class="service-item mb-5">
                        <div class="service-icon mb-3">
                            <i class="fa-solid fa-binoculars fs-1 text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Innovative Architectural Design</h4>
                        <p class="text-secondary mb-4">We design buildings that are not just functional but also
                            visually striking & timeless.</p>
                        <div class="d-flex align-items-center text-secondary small">
                            <i class="fa-solid fa-circle-check text-warning me-2"></i>
                            Custom building solutions combining aesthetics
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon mb-3">
                            <i class="fa-solid fa-layer-group fs-1 text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">3D Visualization & Planning</h4>
                        <p class="text-secondary mb-4">We provide realistic 3D models and visual plans that let you
                            experience your space before.</p>
                        <div class="d-flex align-items-center text-secondary small">
                            <i class="fa-solid fa-circle-check text-warning me-2"></i>
                            Realistic 3D models for precise design clarity
                        </div>
                    </div>
                </div>

                <!-- Center Column: Arch Image -->
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="arch-container position-relative mx-auto mb-5 mb-lg-0">
                        <div class="arch-image-wrapper">
                            <img src="{{ asset('assets/images/about1.avif') }}" alt="Interior Design Arch"
                                class="img-fluid arch-img">
                        </div>
                        <div class="circular-badge position-absolute z-3">
                            <div class="rotating-text-box">
                                <svg viewBox="0 0 100 100">
                                    <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"
                                        fill="none" />
                                    <text font-size="10" fill="#fff">
                                        <textPath xlink:href="#circlePath">
                                            Contact Us • Contact Us • Contact Us •
                                        </textPath>
                                    </text>
                                </svg>
                                <div class="badge-icon">
                                    <i class="fa-solid fa-pen-nib text-dark fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-4 order-3">
                    <div class="service-item mb-5 text-lg-start text-start">
                        <div class="service-icon mb-3">
                            <i class="fa-solid fa-magnet fs-1 text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Bespoke Interior Design</h4>
                        <p class="text-secondary mb-4">From furniture layouts to lighting schemes craft spaces that are
                            personalized, and inspiring.</p>
                        <div class="d-flex align-items-center text-secondary small">
                            <i class="fa-solid fa-circle-check text-warning me-2"></i>
                            Personalized interiors blending elegance & style
                        </div>
                    </div>
                    <div class="service-item text-lg-start text-start">
                        <div class="service-icon mb-3">
                            <i class="fa-solid fa-object-ungroup fs-1 text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Comprehensive Project Manage</h4>
                        <p class="text-secondary mb-4">We oversee every aspect of your project, ensuring seamless
                            coordination.</p>
                        <div class="d-flex align-items-center text-secondary small">
                            <i class="fa-solid fa-circle-check text-warning me-2"></i>
                            Seamless coordination from concept completion
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <x-why-choose />

    <!-- Our Features Section -->
    <x-feature-section />

    <!-- How Work Section -->
    <x-how-section />

    <!-- Our Expert Team Section -->
    <section class="team-section py-5">
        <div class="container py-lg-5">
            <div class="text-center mb-5 pb-lg-4">
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                    <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">Our Expert
                        Team</span>
                </div>
                <h2 class="display-6 fw-bold text-uppercase mb-3">
                    CREATIVE MINDS YOU TRUST
                </h2>
                <p class="text-secondary mx-auto" style="max-width: 600px;">
                    Our team brings together innovative thinkers and skilled professionals dedicated to crafting spaces
                    that
                    reflect your style and enhance your everyday living.
                </p>
            </div>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card rounded-5 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2574&auto=format&fit=crop"
                            alt="Brooklyn Simmons" class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        <div class="team-overlay position-absolute bottom-0 start-0 w-100 p-4 text-white">
                            <h5 class="fw-bold mb-0">Brooklyn Simmons</h5>
                            <p class="small mb-0 opacity-75">Interior Design Assistant</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card rounded-5 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2576&auto=format&fit=crop"
                            alt="Kathryn Murphy" class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        <div class="team-overlay position-absolute bottom-0 start-0 w-100 p-4 text-white">
                            <h5 class="fw-bold mb-0">Kathryn Murphy</h5>
                            <p class="small mb-0 opacity-75">Lead Architect</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card rounded-5 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2561&auto=format&fit=crop"
                            alt="Darrell Steward" class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        <div class="team-overlay position-absolute bottom-0 start-0 w-100 p-4 text-white">
                            <h5 class="fw-bold mb-0">Darrell Steward</h5>
                            <p class="small mb-0 opacity-75">Senior Interior Designer</p>
                        </div>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card rounded-5 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2570&auto=format&fit=crop"
                            alt="Jerome Bell" class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        <div class="team-overlay position-absolute bottom-0 start-0 w-100 p-4 text-white">
                            <h5 class="fw-bold mb-0">Jerome Bell</h5>
                            <p class="small mb-0 opacity-75">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA Strip -->
            <div class="text-center mt-5 pt-3">
                <div class="d-inline-flex align-items-center gap-3 bg-white p-2 pe-4 rounded-pill shadow-sm">
                    <div class="avatar-stack d-flex">
                        <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Avatar"
                            class="rounded-circle border-2 border-white"
                            style="width: 32px; height: 32px; object-fit: cover" />
                        <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center border-2 border-white ms-n1"
                            style="width: 32px; height: 32px; z-index: 1;">
                            <i class="fa-solid fa-phone small text-dark" style="font-size: 10px;"></i>
                        </div>
                    </div>
                    <span class="fw-medium text-secondary small">
                        Experience design where vision and precision come together beautifully –
                        <a href="#" class="text-dark fw-bold text-decoration-underline ms-1">Meet Our Team</a>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <x-faq />

    <x-testimonial />
</x-layout>