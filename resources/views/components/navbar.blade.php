<nav class="navbar navbar-expand-lg navbar-dark fixed-top-custom py-2">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" style="width: 100px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        SERVICES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('service.index') }}">All Services</a></li>
                        @foreach ($services as $service)
                            <li><a class="dropdown-item"
                                    href="{{ route('service.show', $service->slug) }}">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('blogs') }}">BLOGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('gallery') }}">GALLERY</a>
                </li>
                <li class="d-lg-none nav-item">
                    <a class="nav-link text-white" href="{{ route('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block">
            <a href="{{ route('contact') }}" class="text-decoration-none btn-contact px-4 py-3 rounded-pill">Contact Us
                <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
        </div>
    </div>
</nav>