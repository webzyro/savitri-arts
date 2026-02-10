<x-layout title="Testimonials - Savitri Arts">
    <x-breadcrumb title="Testimonials" />
    <x-scrolling />

    <section class="testimonials-page py-5">
        <div class="container py-lg-5">
            <!-- Header -->
            <div class="text-center mb-5">
                <div class="d-flex align-items-center justify-content-center mb-3 text-secondary">
                    <i class="fa-solid fa-star-of-life me-2 text-warning"></i>
                    <span class="text-uppercase fw-semibold" style="font-size: 0.85rem; letter-spacing: 1px">Client
                        Words</span>
                </div>
                <h2 class="display-6 fw-bold text-uppercase">
                    What Our Clients Say About<br />Our Artistic Excellence
                </h2>
            </div>

            <div class="testimonial-list mt-5">
                @foreach($testimonials as $index => $item)
                    <x-testimonial-item :logo="$item['author_img']" :feedback="$item['feedback']" :name="$item['author']"
                        :role="$item['position']" :image="$item['banner_img']" />
                @endforeach
            </div>

            <!-- Bottom Rating Section -->
            <div class="text-center mt-5 pt-4">
                <div class="rating-box">
                    <span class="fw-bold me-2 fs-4">4.9/5</span>
                    <div class="d-inline-flex gap-1 text-warning me-2 fs-5">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p class="text-secondary small fw-medium mt-2">Trusted by 4200+ Happy Customers</p>
            </div>
        </div>
    </section>
</x-layout>