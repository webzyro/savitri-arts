<x-layout>
    <x-breadcrumb title="Our Services" />
    <x-scrolling />

    <!-- Our Services Grid Section -->
    <section class="service-grid-section py-4" style="background-color: #fdfbf7;">
        <div class="container">
            <div class="row g-4">
                <!-- Service 1 -->
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item-card rounded-4 p-4 d-flex flex-column"
                            style="background-image: url('{{ Storage::disk('uploads')->url($service->image) }}');">
                            <div class="service-icon mb-4">
                                <i class="fa-solid fa-shapes text-white fs-3"></i>
                            </div>
                            <h4 class="text-white fw-bold mb-3">{{ $service->title }}</h4>
                            <p class="text-white opacity-75 small mb-auto">
                                {{ Str::limit(strip_tags($service->description), 150) }}
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('service.show', $service->slug) }}" class="service-arrow-btn">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <x-feature-section />

    <!-- How It Works -->
    <x-how-section />

    <!-- Faq Section -->
    <x-faq />

    <!-- Testimonial Section -->
    <x-testimonial />
</x-layout>