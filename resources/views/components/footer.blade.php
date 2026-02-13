<!-- Footer Section -->
<footer class="footer py-5 border-top border-secondary border-opacity-10">
    <div class="footer-technical-bg"></div>
    <div class="container position-relative z-1">
        <!-- Footer Top: Logo & Socials -->
        <div class="footer-top-bar d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset('assets/images/logo.webp') }}" alt="Luxine Logo" class="footer-logo">
            </div>
            <div class="social-icons">
                <a href="#" class="btn-social text-decoration-none"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="btn-social text-decoration-none"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="btn-social text-decoration-none"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="btn-social text-decoration-none"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="row g-5">
            <!-- Newsletter Column -->
            <div class="col-lg-4">
                <h4 class="fs-4 fw-semibold mb-4">Subscribe for Architecture & Interior Updates</h4>
                <p class="text-white-50 mb-4">Absolutely. We can incorporate your existing furniture, décor, and layout
                    preferences into the new design</p>
                <div class="sub-form">
                    <input type="email" placeholder="Enter Email Address*" required>
                    <button type="submit" class="btn-sub">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="{{ route('home') }}">Home</a></li>
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="{{ route('about') }}">About Us</a></li>
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <!-- Our Services -->
            <div class="col-lg-3 col-md-4">
                <h5 class="footer-title">Our Services</h5>
                <ul class="footer-links">
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="#">3D Visualization</a></li>
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="#">Interior Design & Styling</a></li>
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="#">Residential Architecture</a></li>
                    <li><i class="fa-solid fa-star-of-life x-small text-warning" style="font-size: 8px;"></i><a
                            href="#">Commercial Architecture</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-4">
                <h5 class="footer-title">Get In Touch</h5>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div>
                        <p class="mb-0 fw-bold">E-mail Us</p>
                        <a href="mailto:savitriartskh@gmail.com"
                            class="text-white-50 text-decoration-none small">savitriartskh@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <p class="mb-0 fw-bold">Urgent Inquiries</p>
                        <a href="tel:+91-7050720820" class="text-white-50 text-decoration-none small">+91-7050720820</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center">
            <p class="mb-0">Copyright © 2026 All Rights Reserved.</p>
            <div class="d-flex align-items-center">
                <a href="#">Privacy Policy</a>
                <span class="mx-2">•</span>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>
        <div class="text-center mt-3 text-white-50 small">
            Designed and Developed by <a href="https://webzyro.com" target="_blank"
                class="text-warning text-decoration-none fw-bold">Webzyro Technologies PVT. LTD.</a>
        </div>
    </div>
</footer>