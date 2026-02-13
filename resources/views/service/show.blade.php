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
                                Call At: <a href="tel:+91-7050720820"
                                    class="text-white text-decoration-none">+91-7050720820</a>
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
                            <h4 class="text-uppercase">{{ $service->sub_title }}</h4>
                            <p>{{ $service->sub_desc }}</p>
                        </div>


                        <!-- Why choose us cards -->
                        @if ($service->features->count() > 0)
                            <div class="row g-4 mt-3">
                                @foreach ($service->features as $feature)
                                    <div class="col-md-6">
                                        <div class="why-choose-item">
                                            <div class="why-choose-icon">
                                                <i class="{{ $feature->icon }}"></i>
                                            </div>
                                            <h5 class="why-choose-title">{{ $feature->title }}</h5>
                                            <p class="why-choose-text">{{ $feature->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Our Process -->
                        <div class="mt-5">
                            <h2 class="text-uppercase fw-bold mb-3">Our Process</h2>
                            <p class="mb-5">{{ $service->process_text }}</p>

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