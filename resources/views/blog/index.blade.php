<x-layout metaTitle="Savitri Arts and Advertisement | Blog Page"
    metaDescription="Stay updated with the latest trends in interior design and architecture. Explore our blog for design tips, project insights, and creative inspiration from the experts at Savitri Arts."
    metaKeywords="interior design blog, architecture trends, home decor tips, design insights, furniture styling, architecture news">
    <x-breadcrumb title="Our Blogs" />
    <x-scrolling />

    <!-- Blogs Section -->
    <section class="py-4">
        <div class="container">
            <div class="row g-4">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <x-blog-card image="{{ asset('uploads/' . $blog->image) }}"
                            date="{{ $blog->created_at->format('F j, Y') }}" author="{{ $blog->author }}"
                            title="{{ $blog->title }}" excerpt="{{ Str::limit(strip_tags($blog->description), 150) }}"
                            link="{{ route('blog.show', $blog->slug) }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <x-how-section />

    <!-- Faq Section -->
    <x-faq />

    <!-- Testimonial Section -->
    <x-testimonial />
</x-layout>