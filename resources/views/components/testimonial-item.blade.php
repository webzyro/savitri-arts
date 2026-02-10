@props(['logo', 'feedback', 'name', 'role', 'image'])

<div class="row g-0 testimonial-row mb-5 align-items-center">
    <!-- Left Feedback Card -->
    <div class="col-lg-6">
        <div class="testimonial-item-card p-4 p-lg-5 shadow-sm bg-white position-relative">
            <div class="d-flex justify-content-between align-items-center mb-4">
                @if($logo)
                    <img src="{{ Storage::disk('uploads')->url($logo) }}" alt="{{ $name }}" class="testimonial-logo"
                        style="width: 100px" />
                @endif
                <i class="fa-solid fa-quote-right fs-1 text-secondary opacity-10"></i>
            </div>

            <p class="testimonial-feedback mb-4 lead-sm text-secondary">
                " {{ $feedback }} "
            </p>

            <hr class="opacity-10 mb-4" />

            <div class="client-info">
                <h5 class="fw-bold mb-1">{{ $name }}</h5>
                <p class="text-secondary small mb-0">{{ $role }}</p>
            </div>
        </div>
    </div>

    <!-- Right Image Container -->
    <div class="col-lg-6">
        <div class="testimonial-image-container h-100">
            <img src="{{ Storage::disk('uploads')->url($image) }}" alt="{{ $name }}"
                class="img-fluid w-100 object-fit-cover testimonial-img" />
            <div class="testimonial-img-overlay"></div>
        </div>
    </div>
</div>