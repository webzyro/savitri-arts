<x-layout :metaTitle="$service->meta_title" :metaDescription="$service->meta_description"
    :metaKeywords="$service->meta_keywords">
    <x-breadcrumb title="{{ $service->title }}" />
    <x-scrolling />

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-detail-content">
                        <div class="service-image mb-4">
                            <img src="{{ Storage::disk('uploads')->url($service->image) }}" alt="{{ $service->title }}"
                                class="img-fluid rounded-4 shadow-sm w-100"
                                style="max-height: 400px; object-fit: cover;">
                        </div>
                        <h1 class="fw-bold mb-4" style="color: #a49464;">{{ $service->title }}</h1>
                        <div class="service-description fs-5">
                            {!! $service->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>