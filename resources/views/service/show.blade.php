<x-layout :metaTitle="$service->meta_title" :metaDescription="$service->meta_description"
    :metaKeywords="$service->meta_keywords">
    <x-breadcrumb title="{{ $service->title }}" />
    <x-scrolling />

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Sidebar -->
                <div class="col-md-4 order-2 order-md-1">
                    <!-- Explore Our Services Card -->
                    <div class="sidebar-card service-list-card shadow-sm">
                        <div class="card-header">
                            <h5>Explore Our Services</h5>
                        </div>
                        <div class="service-list-group">
                            @foreach ($allServices as $s)
                                <a href="{{ route('service.show', $s->slug) }}" class="service-list-item">
                                    <span>{{ $s->title }}</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Contact CTA Card -->
                    <div class="sidebar-card contact-cta-card shadow-sm"
                        style="background-image: url('{{ asset('assets/images/service4.avif') }}');">
                        <div class="contact-cta-content">
                            <div class="contact-icon-circle">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <h3>Contact Us Now!</h3>
                            <p>Have a project in mind or need expert advice on architecture and interior design?</p>
                            <div class="contact-cta-footer">
                                Call At: +(123) 456 - 789
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main content -->
                <div class="col-lg-8 order-1 order-md-2">
                    <div class="service-detail-content">
                        <div class="service-image mb-4">
                            <img src="{{ Storage::disk('uploads')->url($service->image) }}" alt="{{ $service->title }}"
                                class="img-fluid rounded-4 shadow-sm w-100"
                                style="max-height: 400px; object-fit: cover;">
                        </div>
                        <h1 class="fw-bold mb-2" style="color: #a49464;">{{ $service->title }}</h1>
                        <div class="service-description">
                            {!! $service->description !!}
                        </div>

                        <div class="mt-3">
                            <h4 class="text-uppercase">Why Choose us for the Residential</h4>
                            <p>Choosing us for your residential architecture means partnering with a team that truly
                                understands how a home should look, feel, and function. We combine thoughtful design,
                                technical expertise, and personalized service to create homes that perfectly match your
                                lifestyle.</p>
                        </div>


                        <!-- Why choose us cards -->
                        <div class="row g-4 mt-3">
                            <!-- item 1 -->
                            <div class="col-md-6">
                                <div class="why-choose-item">
                                    <div class="why-choose-icon">
                                        <i class="fa-solid fa-shapes"></i>
                                    </div>
                                    <h5 class="why-choose-title">Tailored Home Designs</h5>
                                    <p class="why-choose-text">We create homes that truly reflect your lifestyle,
                                        preferences, and future needs—ensuring every space feels personal.</p>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="col-md-6">
                                <div class="why-choose-item">
                                    <div class="why-choose-icon">
                                        <i class="fa-solid fa-layer-group"></i>
                                    </div>
                                    <h5 class="why-choose-title">Expert Craft & Detailing</h5>
                                    <p class="why-choose-text">From structural elements to finishing touches, our team
                                        delivers exceptional quality with meticulous attention.</p>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="col-md-6">
                                <div class="why-choose-item">
                                    <div class="why-choose-icon">
                                        <i class="fa-solid fa-vector-square"></i>
                                    </div>
                                    <h5 class="why-choose-title">Customized Planning</h5>
                                    <p class="why-choose-text">We manage the entire residential design process, ensuring
                                        smooth communication, timely updates.</p>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="col-md-6">
                                <div class="why-choose-item">
                                    <div class="why-choose-icon">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <h5 class="why-choose-title">Sustainable Future Solutions</h5>
                                    <p class="why-choose-text">Our designs integrate smart planning, energy efficiency,
                                        and sustainable materials to create homes.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Our Process -->
                        <div class="mt-5">
                            <h2 class="text-uppercase fw-bold mb-3">Our Process</h2>
                            <p class="mb-5">Our process is designed to guide you smoothly from concept to completion.
                                With structured
                                steps, transparent communication, and expert coordination, we ensure your project moves
                                forward efficiently and stress-free. Every phase is handled with care, precision, and a
                                commitment to delivering exceptional results.</p>

                            <div class="row g-4">
                                <!-- Step 01 -->
                                <div class="col-md-4">
                                    <div class="process-card-service shadow-sm p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <i class="fa-solid fa-globe process-card-icon"></i>
                                            <span class="process-card-number">01.</span>
                                        </div>
                                        <h5 class="process-card-title">Initial Consultation</h5>
                                        <p class="process-card-text">Understanding your need, style preference, budget.
                                        </p>
                                        <hr class="opacity-10 my-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="process-card-bullet"></span>
                                            <span class="process-card-text fw-semibold">We understand your vision</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 02 -->
                                <div class="col-md-4">
                                    <div class="process-card-service shadow-sm p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <i class="fa-solid fa-bezier-curve process-card-icon"></i>
                                            <span class="process-card-number">02.</span>
                                        </div>
                                        <h5 class="process-card-title">Design Development</h5>
                                        <p class="process-card-text">Finalizing detailed drawings, materials, etc.</p>
                                        <hr class="opacity-10 my-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="process-card-bullet"></span>
                                            <span class="process-card-text fw-semibold">We develop creative
                                                layouts</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 03 -->
                                <div class="col-md-4">
                                    <div class="process-card-service shadow-sm p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <i class="fa-solid fa-briefcase process-card-icon"></i>
                                            <span class="process-card-number">03.</span>
                                        </div>
                                        <h5 class="process-card-title">Execution Support</h5>
                                        <p class="process-card-text">Coordinating with contractors and providing design.
                                        </p>
                                        <hr class="opacity-10 my-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="process-card-bullet"></span>
                                            <span class="process-card-text fw-semibold">We provide realistic
                                                support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>