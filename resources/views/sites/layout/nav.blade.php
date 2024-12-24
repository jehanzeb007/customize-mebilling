
<header class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <!-- Logo Section -->
                    <div class="col-6 col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <div class="col-6 d-lg-none text-right">
                        <button class="mobile-menu-toggle">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="col-lg-8">
                        <div class="main-menu d-none d-lg-block text-right pr-15">
                            <nav id="desktop-menu"
                                class="{{ request()->routeIs('home') ? 'navbar-white' : 'navbar-blue' }}">
                                <ul class="mb-0">
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('home')) active @endif" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('services.*')) active @endif" href="#">Our Services
                                        <span ><svg class="ct-icon" width="8" height="8" viewBox="0 0 15 15">
                                                <path d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z"></path>
                                            </svg></span>
                                        </a>
                                        <ul>
                                            <li><a class="dropdown-item" href="{{ route('services.revenu_optimzation') }}">Revenue Optimization</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services.revenue_cycle_management') }}">Revenue Cycle Management</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services.medical_billing_coding') }}">Medical Billing</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services.medical_coding') }}">Medical Coding</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services.medical_pratice_analytics') }}">Practice Performance Analysis</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services.credentialing_contracting') }}">Credentialing & Contracting</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('billing.*')) active @endif" href="#">Billing Solutions
                                            <span class=""><svg class="ct-icon" width="8" height="8" viewBox="0 0 15 15">
                                                <path d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z"></path>
                                            </svg></span></a>
                                        <ul>
                                            <li><a class="dropdown-item" href="{{ route('billing.physician') }}">Physician Billing</a></li>
                                            <li><a class="dropdown-item" href="{{ route('billing.emergencyRoom') }}">Freestanding Emergency Room</a></li>
                                            <li><a class="dropdown-item" href="{{ route('billing.urgentCare') }}">Urgent Care</a></li>
                                            <li><a class="dropdown-item" href="{{ route('billing.laboratory') }}">Laboratory</a></li>
                                            <li><a class="dropdown-item" href="{{ route('billing.surgicalCenter') }}">Ambulatory Surgical Center</a></li>
                                            <li><a class="dropdown-item" href="{{ route('billing.microHospitals') }}">Micro Hospitals</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('specialties')) active @endif" href="{{ route('specialties') }}">Specialty</a>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('blog.index')) active @endif" href="{{ route('blog.index')}}">Blog</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <div class="col-lg-2 d-none d-lg-block">
                        <a href="{{ route('contact-us.index') }}" class="top-btn">
                            Get in Touch <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="col-12 d-lg-none">
                        <nav id="mobile-menu" class="mobile-menu">
                            <ul class="mb-0">
                                <li class="has-sub">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="has-sub">
                                    <a href="#">Our Services</a>
                                    <ul>
                                        <li><a href="{{ route('services.revenu_optimzation') }}">Revenue Optimization</a></li>
                                        <li><a href="{{ route('services.revenue_cycle_management') }}">Revenue Cycle Management</a></li>
                                        <li><a href="{{ route('services.medical_billing_coding') }}">Medical Billing</a></li>
                                        <li><a href="{{ route('services.medical_coding') }}">Medical Coding</a></li>
                                        <li><a href="{{ route('services.medical_pratice_analytics') }}">Practice Performance Analysis</a></li>
                                        <li><a href="{{ route('services.credentialing_contracting') }}">Credentialing & Contracting</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a href="#">Billing Solutions</a>
                                    <ul>
                                        <li><a href="{{ route('billing.physician') }}">Physician Billing</a></li>
                                        <li><a href="{{ route('billing.emergencyRoom') }}">Freestanding Emergency Room</a></li>
                                        <li><a href="{{ route('billing.urgentCare') }}">Urgent Care</a></li>
                                        <li><a href="{{ route('billing.laboratory') }}">Laboratory</a></li>
                                        <li><a href="{{ route('billing.surgicalCenter') }}">Ambulatory Surgical Center</a></li>
                                        <li><a href="{{ route('billing.microHospitals') }}">Micro Hospitals</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a href="{{ route('specialties') }}">Specialty</a>
                                </li>
                                <li class="has-sub">
                                    <a href="{{ route('blog.index') }}">Blog</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('js')
    <script>
        $(document).ready(function() {
            document.addEventListener('DOMContentLoaded', () => {
                const toggleButton = document.querySelector('.mobile-menu-toggle');
                const mobileMenu = document.querySelector('#mobile-menu');

                if (toggleButton && mobileMenu) {
                    toggleButton.addEventListener('click', () => {
                        mobileMenu.classList.toggle('active');
                    });
                }
            });
        });

@endpush


