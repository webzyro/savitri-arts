@props(['title' => ''])

<section class="w-full breadcrumb-section">
    <div class="container w-100 h-100">
        <div class="bread-wrapper">
            <h2>{{ $title }}</h2>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('home') }}" class="text-decoration-none text-white">Home</a>
                <span class="text-white">/</span>
                <a href="{{ route('about') }}" class="text-decoration-none text-white">{{ $title }}</a>
            </div>
        </div>
    </div>
</section>