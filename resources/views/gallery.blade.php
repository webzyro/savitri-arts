<x-layout metaTitle="Savitri Arts and Advertisement | Gallery Page"
    metaDescription="We create elegant, high end interiors that reflect comfort, sophistication, and timeless beauty turning everyday living into a luxurious experience."
    metaKeywords="interior design, architecture, high-end interiors, luxury living, Savitri Arts and Advertisement">
    <x-breadcrumb title="Our Gallery" />
    <x-scrolling />

    <!-- Gallery Section -->
    <section class="gallery-section py-5" style="background-color: #fdfbf7;">
        <div class="container">
            <div class="row g-4">
                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?q=80&w=2664&auto=format&fit=crop"
                            alt="Interior Design 1" class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2600&auto=format&fit=crop"
                            alt="Interior Design 2" class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                        <img src="{{ asset('assets/images/category1.webp') }}" alt="Interior Design 3"
                            class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <!-- Gallery Item 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                        <img src="{{asset('assets/images/category2.webp')}}" alt="Interior Design 4"
                            class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <!-- Gallery Item 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                        <img src="{{asset('assets/images/category3.jfif')}}" alt="Interior Design 5"
                            class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <!-- Gallery Item 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                        <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?q=80&w=2664&auto=format&fit=crop"
                            alt="Interior Design 6" class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>