@props([
    'image' => 'https://placehold.co/600x400',
    'date' => 'Jan 09, 2026',
    'author' => 'Admin',
    'title' => 'Top Reasons to Choose Our Taxi Service for Your Next Trip',
    'excerpt' => 'Darbhanga is a historic city with rich culture and a perfect base for exploring many beautiful destinations in Bihar. If you’re',
    'link' => '#'
])

<div class="blog-card">
    <div class="blog-card-image">
        <img src="{{ $image }}" alt="{{ $title }}">
    </div>
    <div class="blog-card-body">
        <div class="blog-meta">
            <span><i class="far fa-calendar-alt me-1"></i> {{ $date }}</span>
            <span class="ms-3"><i class="far fa-user me-1"></i> {{ $author }}</span>
        </div>
        <a href="{{ $link }}" class="blog-title-link">
            <h4 class="blog-title">{{ $title }}</h4>
        </a>
        <p class="blog-excerpt">{{ $excerpt ?? '' }}</p>
        <a href="{{ $link }}" class="read-more-btn">
            Read More <i class="fas fa-arrow-right ms-1"></i>
        </a>
    </div>
</div>