<x-layout :metaTitle="$blog->meta_title" :metaDescription="$blog->meta_description"
    :metaKeywords="$blog->meta_keywords">
    <x-breadcrumb title="{{ $blog->title }}" />
    <x-scrolling />

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-detail-content">
                        <div class="service-image mb-4">
                            <img src="{{ Storage::disk('uploads')->url($blog->image) }}" alt="{{ $blog->title }}"
                                class="img-fluid rounded-4 shadow-sm w-100"
                                style="max-height: 400px; object-fit: cover;">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <span class="me-3 text-muted"><i
                                    class="far fa-calendar-alt text-warning me-2"></i>{{ $blog->created_at->format('M d, Y') }}</span>
                            <span class="text-muted"><i class="far fa-user text-warning me-2"></i>By
                                {{ $blog->author }}</span>
                        </div>
                        <h1 class="fw-bold mb-4" style="color: #a49464;">{{ $blog->title }}</h1>
                        <div class="service-description fs-5">
                            {!! $blog->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>