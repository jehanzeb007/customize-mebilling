<header class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu text-right pr-15">
                            <nav id="mobile-menu">
                                <ul class="mb-0">
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('home')) active @endif"
                                            href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('services.*')) active @endif" href="#">Our
                                            Services</a>
                                        <ul>
                                            <li><a href="{{ route('services.revenu_optimzation') }}">Revenue
                                                    Optimization</a></li>
                                            <li><a href="{{ route('services.revenue_cycle_management') }}">Revenue Cycle
                                                    Management</a></li>
                                            <li><a href="{{ route('services.medical_billing_coding') }}">Medical Billing
                                                    </a></li>
                                            <li><a href="{{ route('services.medical_coding') }}">Medical Coding</a></li>
                                            <li><a href="{{ route('services.medical_pratice_analytics') }}">Practice
                                                    Performance Analysis</a></li>
                                            <li><a href="{{ route('services.credentialing_contracting') }}">Credentialing
                                                    & Contracting</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('billing.*')) active @endif"
                                            href="#">Billing Solutions</a>
                                        <ul>
                                            <li><a href="{{ route('billing.physician') }}">Physician Billing</a></li>
                                            <li><a href="{{ route('billing.emergencyRoom') }}">Freestanding Emergency
                                                    Room</a></li>
                                            <li><a href="{{ route('billing.urgentCare') }}">Urgent Care</a></li>
                                            <li><a href="{{ route('billing.laboratory') }}">Laboratory</a></li>
                                            <li><a href="{{ route('billing.surgicalCenter') }}">Ambulatory Surgical
                                                    Center</a></li>
                                            <li><a href="{{ route('billing.microHospitals') }}">Micro Hospitals</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('specialties')) active @endif"
                                            href="{{ route('specialties') }}">Speciality</a>
                                    </li>

                                    <li class="has-sub">
                                        <a class="@if (request()->routeIs('blog.index')) active @endif"
                                            href="{{ route('blog.index')}}">Blog</a>
                                        {{-- <ul>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul> --}}
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <a href="{{ route('contact-us.index') }}" class="top-btn">Get in Touch <i
                                class="fas fa-chevron-right"></i></a>

                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
