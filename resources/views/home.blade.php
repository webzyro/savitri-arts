<x-layout metaTitle="Savitri Arts and Advertisement | Home Page"
    metaDescription="Experience the perfect blend of technical precision and artistic expression. Savitri Arts specializes in innovative architecture and elegant interior design crafted for modern living."
    metaKeywords="architecture design, interior styling, luxury home design, modern office spaces, Savitri Arts home, design consultancy">
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center position-relative">
        <div class="overlay"></div>
        <div class="container position-relative z-2 text-center text-white">
            <div class="subheading mb-3 d-inline-block">
                <i class="fa-solid fa-star-of-life me-2 text-warning"></i> Designing
                Spaces That Inspire Everyday Living
            </div>
            <h1 class="display-3 fw-bold mb-4 text-uppercase">
                Architecture & Interiors<br />Crafted With Precision
            </h1>
            <p class="lead mb-5 mx-auto" style="max-width: 800px; font-size: 1rem; opacity: 0.9">
                Driven by innovation and guided by craftsmanship, we design
                architecture and interiors that seamlessly combine technical
                precision with artistic expression to shape spaces built for modern
                living.
            </p>
            <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                <a href="tel:+91-7050720820"
                    class="text-decoration-none btn-quote px-4 py-3 rounded-pill d-flex align-items-center gap-2">Get
                    Free Quote
                    <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a href="{{ route('testimonials') }}"
                    class="btn btn-video d-flex align-items-center gap-2 text-white text-decoration-none">
                    <div
                        class="play-icon d-flex align-items-center justify-content-center rounded-circle bg-warning text-dark">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    Watch Our Video
                </a>
            </div>
        </div>
    </section>

    <!-- Scrolling Text Section -->
    <x-scrolling />

    <!-- About Us Section -->
    <x-about-section />

    <!-- Categories Section -->
    <section class="category-section py-5 bg-white">
        <div class="container">
            <!-- Header -->
            <div class="row g-4 align-items-center mb-3">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                        <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">Our
                            Categories</span>
                    </div>
                    <h4 class="display-6 fw-semibold text-center">
                        EXPLORE OUR WIDE RANGE OF INTERIOR DESIGN CATEGORIES
                    </h4>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/category1.webp') }}" alt="category image" />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">Lorem ipsum</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/category2.webp') }}" alt="category image" />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">Lorem ipsum</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/category3.jfif') }}" alt="category image" />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">Lorem ipsum</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/category4.webp') }}" alt="category image" />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">Lorem ipsum</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-5 bg-white">
        <div class="container py-lg-4">
            <!-- Header -->
            <div class="row align-items-end mb-5">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                        <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">Our
                            Services</span>
                    </div>
                    <h2 class="display-6 fw-bold">
                        EXPERT DESIGN SERVICE THAT<br />SHAPE BEAUTIFUL SPACES
                    </h2>
                </div>
                <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <p class="text-secondary mb-4 ms-auto" style="max-width: 400px; text-align: left">
                        We provide end-to-end architectural and interior design
                        solutions focused on enhancing aesthetics, improving
                        functionality, and bringing your ideas to life.
                    </p>
                    <a href="{{ route('service.index') }}"
                        class="btn btn-contact px-4 py-2 rounded-pill d-inline-flex align-items-center gap-2">View All
                        Services
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="row g-4 mb-5">

                @foreach ($services as $service)
                    <!-- Service 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div
                            class="service-card p-4 rounded-4 h-100 position-relative overflow-hidden d-flex flex-column justify-content-between">
                            <div class="service-bg-img position-absolute top-0 start-0 w-100 h-100" style="
                                                        background-image: url('{{ Storage::disk('uploads')->url($service->image) }}');
                                                      "></div>
                            <div class="position-relative z-1 content-wrapper">
                                <div class="icon-box mb-4">
                                    <i class="fa-solid fa-vector-square fs-1 text-outline"></i>
                                </div>
                                <h4 class="fw-bold mb-3 service-title">
                                    {{ $service->title }}
                                </h4>
                                <p class="text-secondary small mb-0 service-desc">
                                    {{ Str::limit(strip_tags($service->description), 60) }}
                                </p>
                            </div>
                            <div class="position-relative z-1 mt-4">
                                <a href="{{ route('service.show', $service->slug) }}"
                                    class="btn-arrow text-decoration-none rounded-circle d-flex align-items-center justify-content-center border">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Bottom Strip -->
            <div class="text-center pt-3">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill me-2">Free</span>
                <span class="fw-medium text-secondary">Discover Our Tailored Architecture & Interior Services -
                    <a href="tel:+91-7050720820" class="text-dark fw-bold text-decoration-underline">Where Style Meets
                        Structure</a></span>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <x-why-choose />

    <!-- How It Works Section -->
    <x-how-section />

    <!-- Our Projects Section -->
    <section class="projects-section py-5 position-relative overflow-hidden">
        <div class="technical-bg"></div>
        <div class="container py-lg-5 position-relative z-1">
            <!-- Header -->
            <div class="row align-items-end mb-5">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center mb-3 text-white">
                        <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                        <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">Our
                            Projects</span>
                    </div>
                    <h2 class="display-6 fw-bold text-white text-uppercase">
                        EXPERT DESIGN SERVICE THAT<br />SHAPE BEAUTIFUL SPACES
                    </h2>
                </div>
                <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <p class="text-white-50 mb-4 ms-lg-auto" style="max-width: 500px">
                        We provide end-to-end architectural and interior design
                        solutions focused on enhancing aesthetics, improving
                        functionality, and bringing your ideas to life.
                    </p>
                    <a href="{{ route('testimonials') }}"
                        class="text-decoration-none btn-contact px-5 py-3 rounded-pill d-inline-flex align-items-center gap-2">
                        View All Projects
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>

            <!-- Projects Carousel -->
            <div id="projects-carousel" class="owl-carousel owl-theme mb-5">
                <!-- Project 1 -->
                <div class="item">
                    <div class="project-card rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=2653&auto=format&fit=crop"
                            alt="Scenic Rooftop Garden" class="img-fluid" />
                        <div class="project-overlay p-4 w-100">
                            <h4 class="text-white fw-bold mb-1">Scenic Rooftop Garden</h4>
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot" style="background-color: #a49464"></span>
                                <span class="text-white-50 small">Luxury Interiors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="item">
                    <div class="project-card rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2500&auto=format&fit=crop"
                            alt="Luxe Penthouse Makeover" class="img-fluid" />
                        <div class="project-overlay p-4 w-100">
                            <h4 class="text-white fw-bold mb-1">
                                Luxe Penthouse Makeover
                            </h4>
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot" style="background-color: #a49464"></span>
                                <span class="text-white-50 small">Luxury Interiors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="item">
                    <div class="project-card rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2500&auto=format&fit=crop"
                            alt="Modern Luxury Villa" class="img-fluid" />
                        <div class="project-overlay p-4 w-100">
                            <h4 class="text-white fw-bold mb-1">Modern Luxury Villa</h4>
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot" style="background-color: #a49464"></span>
                                <span class="text-white-50 small">Residential Interior</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="item">
                    <div class="project-card rounded-4 overflow-hidden position-relative">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?q=80&w=2670&auto=format&fit=crop"
                            alt="Boutique Hotel Interiors" class="img-fluid" />
                        <div class="project-overlay p-4 w-100">
                            <h4 class="text-white fw-bold mb-1">
                                Boutique Hotel Interiors
                            </h4>
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot" style="background-color: #a49464"></span>
                                <span class="text-white-50 small">Commercial Interior</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trusted By / Logo Carousel -->
            <div
                class="trusted-bar d-flex flex-column flex-lg-row align-items-center gap-4 py-4 border-top border-secondary">
                <div class="trusted-text pe-4 border-end border-secondary">
                    <h6 class="text-white fw-bold mb-1 text-uppercase small" style="letter-spacing: 1px">
                        Trusted By More Than
                    </h6>
                    <span class="text-white fw-bold text-uppercase">100+ Companies</span>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <div id="logo-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="/assets/images/google-cloud.png" alt="logo" class="logo-img filter-white" />
                        </div>
                        <div class="item">
                            <img src="assets/images/mysql.png" alt="logo" class="logo-img filter-white" />
                        </div>
                        <div class="item">
                            <img src="assets/images/node.png" alt="logo" class="logo-img filter-white" />
                        </div>
                        <div class="item">
                            <img src="assets/images/php.png" alt="logo" class="logo-img filter-white" />
                        </div>
                        <div class="item">
                            <img src="assets/images/google-cloud.png" alt="logo" class="logo-img filter-white" />
                        </div>
                        <div class="item">
                            <img src="assets/images/mysql.png" alt="logo" class="logo-img filter-white" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <x-testimonial />

    <!-- Contact Section -->
    <section class="contact-section py-3" style="background-color: #fdfbf7;">
        <div class="container py-lg-5">
            <div class="row g-5">
                <!-- Left Column: Contact Info -->
                <div class="col-lg-5">
                    <div class="contact-info-card bg-white p-4 p-lg-5 rounded-5 shadow-sm h-100">
                        <h3 class="fw-bold mb-3">Get In Touch</h3>
                        <p class="text-secondary small mb-5">
                            We'd love to hear from you! Whether you have questions, need a consultation, or want to
                            discuss
                            a new project.
                        </p>

                        <div class="contact-info-item d-flex align-items-center gap-3 mb-5">
                            <div class="icon-box-md rounded-circle border d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-phone text-warning"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Phone Number</h6>
                                <p class="text-secondary small mb-0">+91-8664521195</p>
                            </div>
                        </div>

                        <div class="contact-info-item d-flex align-items-center gap-3 mb-5">
                            <div class="icon-box-md rounded-circle border d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-envelope text-warning"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Email Address</h6>
                                <p class="text-secondary small mb-0">info@domainname.com</p>
                            </div>
                        </div>

                        <div class="contact-info-item d-flex align-items-center gap-3">
                            <div class="icon-box-md flex-shrink-0 rounded-circle border d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-location-dot text-warning"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Our Location</h6>
                                <p class="text-secondary small mb-0">2118 Thornridge Cir. Syracuse, Connecticut 35624
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="col-lg-7">
                    <div class="contact-form-card bg-white p-4 p-lg-5 rounded-5 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-star-of-life me-2 text-warning" style="font-size: 0.8rem;"></i>
                            <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">Get
                                In
                                Touch</span>
                        </div>
                        <h2 class="display-6 fw-bold text-uppercase mb-3">SEND US A MESSAGE</h2>
                        <p class="text-secondary small mb-3">
                            Have a question, project idea, or design inquiry? We'd love to hear from you! Whether you're
                            looking for expert advice, a consultation, or just want to explore design possibilities.
                        </p>

                        <form action="{{ route('contact.store') }}" method="POST" id="contactForm" class="row g-4">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">First Name*</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}"
                                    class="form-control bg-light border-0 py-3" placeholder="Enter Your First Name">
                                @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Last Name</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}"
                                    class="form-control bg-light border-0 py-3" placeholder="Enter Your Last Name">
                                @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Phone Number*</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="form-control bg-light border-0 py-3" placeholder="Enter Your Phone Number">
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control bg-light border-0 py-3" placeholder="Enter Your Email Address">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold small">Message*</label>
                                <textarea name="message" class="form-control bg-light border-0 py-3" rows="2"
                                    placeholder="Any Additional Message..">{{ old('message') }}</textarea>
                                @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-submit px-5 py-3 rounded-pill text-white fw-bold">
                                    Submit Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <x-faq />

</x-layout>