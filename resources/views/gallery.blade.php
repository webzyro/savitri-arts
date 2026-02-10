<x-layout metaTitle="Savitri Arts and Advertisement | Gallery Page"
    metaDescription="Explore our portfolio of elegant interior design and architectural projects. Our gallery showcases a collection of high-end design work, from luxury residential to modern commercial spaces."
    metaKeywords="interior design gallery, architecture portfolio, design projects, work showcase, luxury interiors, Savitri Arts portfolio">
    <x-breadcrumb title="Our Gallery" />
    <x-scrolling />

    <!-- Gallery Section -->
    <section class="gallery-section py-5" style="background-color: #fdfbf7;">
        <div class="container">
            <div class="row g-4">
                @foreach ($photos as $photo)
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item rounded-5 overflow-hidden shadow-sm aspect-ratio-box">
                            <img src="{{ Storage::disk('uploads')->url($photo->image) }}" alt="{{ $photo->alt_text }}"
                                class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>