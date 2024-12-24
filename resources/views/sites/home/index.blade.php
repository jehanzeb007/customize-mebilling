@extends('sites.layout.app')

@section('content')
    <main>

        <!-- Header Section with YouTube Video Background -->
        <section id="home" class="slider-area fix p-relative mb-5">
            <!-- YouTube Video Background -->
            <div class="video-background">
                <video
                src="{{asset('assets/images/mebilling.mp4')}}"
                autoplay loop muted>
                </video>

            </div>

            <!-- Content Overlay -->
            <div class="slider-content-overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="slider-content text-left">
                                <h2 class="animated-box" data-animation="fadeInUp" data-delay=".4s">At MeBillings, we Simplify Care and Amplify Revenue by up to 25%</h2>
                                <p data-animation="fadeInUp" data-delay=".6s">Enhance your practice's revenue, reduce billing errors, and speed up reimbursements with MeBillings' advanced AI-driven medical billing solutions.</p>
                                <div class="slider-btn mt-25">
                                    <a href="{{ asset('/about_us') }}" class="btn ss-btn">Learn More <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- slider-area-end -->

        <!-- main-area -->
        <section class="pt-0 mb-5">
            {{-- <div class="container"> --}}
            <div class="section-title text-center mb-5">
                <span>WHY MeBilling?</span>
                <p class="mb-0">Our state of the art infrastructure will provide you Increased Cash Flow, enhance
                    your
                    revenue,</p>
                <p class="mb-0">empowering your profits and simplifying your medical billing.</p>
                <p class="mb-0">You'll not only see an improvement in your revenue but increased patient
                    satisfaction
                    and less office stress.</p>
            </div>
            <div class="counter-area">
                <div class="container">
                    <div class="row row-equal">
                        <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                            <div class="single-counter text-center box">
                                <img src="assets/images/cunt-icon01.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">5%</span>
                                </div>
                                <p>Less Account Receivable(AR)</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                            <div class="single-counter text-center box">
                                <img src="assets/images/cunt-icon02.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">30%</span>
                                </div>
                                <p>More Revenue</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                            <div class="single-counter text-center box">
                                <img src="assets/images/cunt-icon03.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">55%</span>
                                </div>
                                <p>Less Operational Cost</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                            <div class="single-counter text-center box">
                                <img src="assets/images/cunt-icon04.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">99%</span>
                                </div>
                                <p>Acceptance of Claims in 1st Attempt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </section>
        <br>

        <!-- Hippa Section -->

        <section>
            <div class="hipaa-bg">
            <div class="container mt-5 hipaa">
                <div class="inner">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mt-5">
                            <img src="{{asset('assets/images/hippa.png')}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h2>100% HIPAA Compliant Infrastructure</h2>
                        <p>Protecting patient data is at the core of our operations. Our medical billing platform is
                            built on a secure, HIPAA-compliant infrastructure designed to safeguard sensitive health
                            information at every stage. From encrypted data transmission to secure storage and access
                            controls, we implement robust measures to ensure compliance with federal regulations and
                            industry standards. Our commitment to data security not only protects your practice from
                            breaches and penalties but also fosters trust with your patients. With a solid foundation of
                            compliance and security, you can focus on delivering quality care while we handle your
                            revenue cycle with precision and integrity.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Hippa Section -->

        <!-- main-area-end -->

        <!-- man area 2 -->

        <section class="department-area cta-bg p-0 fix mt-5 mb-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <ul class="p-0">
                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src="{{ asset('assets/images/arrow-increase-icon.png') }}" alt="de-icon">
                                    </div>
                                </div>
                                <div class="text">
                                    <h3 class="mb-0">Better Numbers</h3>
                                </div>
                            </li>
                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src="{{ asset('assets/images/dollar-icon.png') }}" alt="de-icon"></div>
                                </div>
                                <div class="text">
                                    <h3 class="mb-0">Hassle Free Billing</h3>
                                </div>
                            </li>

                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src=" {{ asset('assets/images/analytics-icon.png') }}" alt="de-icon">
                                    </div>
                                </div>
                                <div class="text">
                                    <h3 class="mb-0">Killer Analytics</h3>
                                </div>
                            </li>
                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src="{{ asset('assets/images/support-icon.png') }}" alt="de-icon"></div>
                                </div>
                                <div class="text">
                                    <h3 class="mb-0">Proactive Support</h3>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class="col-lg-6">
                        <div class="s-d-img p-relative">
                            <img src="{{ asset('assets/images/doctor.jpg') }}" alt="img">

                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- mian area 2 end -->

        <!-- core-objective-area -->
        <section class="cta-bg  pt-100 pb-0 fix">

            <div class="solutuons-wrapper">
                <div class="container">
                    <div class="inner">
                        <div class="section-title text-center mb-4">
                            <span>Core Objective</span>
                            <p>Supplying Finest Services at Right Time, in conjunction with best People</p>
                        </div>

                        <div id="core-objectives" class="owl-carousel owl-solution owl-theme">
                            <div class="solution-carousel-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="content">
                                            <h4 class="title-small">
                                                Credentaling
                                            </h4>
                                            <p class="subtitle mb-3">
                                                To provide Quality Service, We can help you with a fully
                                                grasped team of Credentialing and Enrollment.
                                                The team takes the best care of Form Preparation, Enrollment
                                                Formalities, Re-credentialing, electronic submission of
                                                documents, EDI setups and CLIA, CAQH, DEAs, NPI, and TIN
                                                Registrations.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/images/Credental.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="solution-carousel-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="content">
                                            <h4 class="title-small">Patient Enrollment
                                            </h4>
                                            <p class="subtitle mb-3">
                                                By providing enrollment services we are at the epic level of
                                                patient care. Where patients can enroll themselves in just
                                                meantime. When it comes to patient enrollment, the whole
                                                system of verbal exchange among physicians and patients is
                                                quite a time taking. However, MeBilling has established a
                                                team of experts who created a smart and less time taking
                                                enrollment process with maximum ease of visitors.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/images/patient_enrollment.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="solution-carousel-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="content">
                                            <h4 class="title-small">Smart Scheduling
                                            </h4>
                                            <p class="subtitle mb-3">
                                                SMART SCHEDULING
                                                Through the smart scheduling feature, patients can get
                                                coordinated and streamlined appointments at their
                                                convenience. Complete registration off-site before the
                                                visit, so patient must not be delayed at the front desk.
                                                This practice will save their time and reduce confusion.
                                                They will also avail the privilege of automated
                                                pre-appointment reminders and cancellations or reschedule
                                                visits via email and text.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/images/medical-scheduling.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="solution-carousel-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="content">
                                            <h4 class="title-small">
                                                Appointment Reminders
                                            </h4>
                                            <p class="subtitle mb-3">
                                                A dedicated team has been assigned to fulfill the
                                                responsibility of appointment
                                                reminders. Patients are timely prompted for the next visit
                                                to ensure the healthy
                                                outcome.
                                                <br>
                                                1. Real time Phone Reminder.
                                                <br>
                                                2. Reminder Texting System.
                                                <br>
                                                3. Email Reminder System.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/images/appoiment-reminder.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="solution-carousel-wrapper">

                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="content">
                                            <h4 class="title-small">
                                                Eligibility Verification
                                            </h4>
                                            <p class="subtitle mb-3">
                                                According to industry sources,25% of all health care claim
                                                denials are because a patient is not eligible for services
                                                billed to the insurer by the provider. Often, a patient
                                                would be ineligible for benefits because his or her policy
                                                has been terminated or modified etc.Our well-trained staff
                                                verify the eligibility of patient’s benefits coverage (which
                                                are being provided) through software or calls to reduce the
                                                claim denials and expedite the payments at proper rates
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/images/mediacl-verification.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="solution-carousel-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="content">
                                            <h4 class="title-small">
                                                Insurance Authorizations
                                            </h4>
                                            <p class="subtitle mb-3">
                                                Pre-authorization / Pre-Certification is taken well ahead of
                                                the patient’s visit. We ensure less fear of claim denials
                                                and correctly determine the payment flow. Qualified staff
                                                timely authorize the services through Portals, Calls, and
                                                Fax.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/images/medical-insurance.jpg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- core-objective-area-end -->

        <!-- Capability & Strengths-area -->
        <section id="about" class="about-area about-p p-relative pb-0 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative">
                            <img src="assets/images/c&s.jpg" alt="img">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title">
                                <span>Capability & Strengths</span>
                                {{--                                <h3>We Specialize in Medical Billing</h3> --}}
                            </div>
                            <p>
                                MeBilling’s experienced and professional team has the ability to perform in the
                                following
                                areas:</p>
                            <ul>
                                <li class="align-items-center">
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Responsible to provide economical medical billing services.
                                    </div>
                                </li>
                                <li class="align-items-center">
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">MeBilling all the time stays compliant with HIPAA regulations.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Successfully handled Group Practices.
                                    </div>
                                </li>
                                <li class="align-items-center">
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Got fascinating response from individual billers & small
                                        billing
                                        companies.
                                    </div>
                                </li>
                                <li class="align-items-center">
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Worth of working greater than 100 practices simultaneously.
                                    </div>
                                </li>
                                <div></div>
                            </ul>

                            {{--                            <div class="slider-btn mt-30"> --}}
                            {{--                                <a href="{{ asset('/about_us') }}" class="btn ss-btn" data-animation="fadeInRight" --}}
                            {{--                                    data-delay=".8s">Read --}}
                            {{--                                    More <i class="fas fa-chevron-right"></i></a> --}}
                            {{--                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Capability & Strengths-area-end -->

        <!-- services-area -->
        <section id="services" class="services-area services-bg services-two pb-5 mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center pl-40 pr-40 mb-4">
                            <span> our services</span>
                            <h3>Our Special Services For You</h3>
                            <p class="mt-10">Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat.
                                Phasellus
                                nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                        </div>
                    </div>
                </div>
                <div class="row sr-line">
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center active">
                            <div class="services-icon">
                                <img src="assets/images/sr-icon01.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="{{ route('services.revenu_optimzation') }}">Revenue Optimization</a></h5>
                                {{-- <p>Our Revenue Optimization Program focuses on pricing and market strategies. Also,
                                    involve
                                    pre-emptive and analytical ways to have the growth up.</p> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="assets/images/sr-icon02.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="{{ route('services.revenue_cycle_management') }}">Revenue Cycle
                                        Management</a>
                                </h5>
                                {{-- <p>We provide a widespread perception to drive augmented revenue, improved progress in
                                    overall profitability, and arrangement of amplified reimbursement.</p> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="assets/images/sr-icon03.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="{{ route('services.medical_billing_coding') }}">Medical Billing and
                                        Coding</a>
                                </h5>
                                {{-- <p>Our Proactive coders and billing specialists keep your staff away from administrative
                                    barriers to the billing process and low payments.</p> --}}
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row sr-line">
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="assets/images/de-icon03.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="{{ route('services.medical_pratice_analytics') }}">Practice Performance
                                        Analysis</a></h5>
                                {{-- <p>Analytical observation of practice provides a comprehensive insight into performance.
                                    Also, weak areas of work are intimated to intact maximum productivity and
                                    reimbursements.</p> --}}
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="assets/images/cunt-icon04.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="{{ route('services.credentialing_contracting') }}">Crendentialing and
                                        Contracting</a></h5>
                                {{-- <p>lanCredentialing & Contracting are crucial parts amid elements of the billing
                                    process.
                                    Our credentialing staff stays informed with contemporary changes and keeps our
                                    clients
                                    remain compliant with Government, Commercial and Private Entities.</p> --}}
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="assets/images/cunt-icon03.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="{{ route('services.credentialing_contracting') }}">Internal Dispute
                                        Resolution
                                        (IDR)</a></h5>
                                {{-- <p>Internal Dispute Resolution (IDR) refers to the processes and procedures an
                                    organization
                                    establishes to address and resolve conflicts, grievances, or disputes internally
                                    without
                                    external intervention</p> --}}
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- services-area-end -->

        <!-- process area -->
        <section class="mt-5 p-0 mb-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center mb-4">
                            <span>Our Processes</span>
                            <p>Choose us for unparalleled accuracy, efficiency and increase revenue with our
                                advance
                                medical billing solution.</p>
                        </div>
                    </div>
                </div>

                <div id="processSection" class="process-container">

                    <div class="row justify-content-center">
                        <div class="col-md-4 m-auto">
                            <div class="section-title">
                                <h2 class="mb-0">Our</h2>
                                <h2>Processes</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border-container" data-box="1">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-1">
                                        <img src="{{ asset('assets/images/monitor-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-1">
                                    <h4>Credentialing</h4>
                                    <p>It ensures claim payment, alternatives available.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-1">
                                        <span class="number">
                                            01
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="border-container" data-box="2">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-2">
                                        <img src="{{ asset('assets/images/analysis-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-2">
                                    <h4>Charge Entry</h4>
                                    <p>Charge Entry ensures accurate, error-free claims.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-2">
                                        <span class="number">
                                            02
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2"></div>

                    </div>

                    <div class="row justify-content-center mb-100">
                        <div class="col-md-3">
                            <div class="border-container" data-box="3">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-3">
                                        <img src="{{ asset('assets/images/planning-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-3">
                                    <h4>Payment Posting</h4>
                                    <p>It posting manages accounts, adjustment, denials.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-3">
                                        <span class="number">
                                            03
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="border-container" data-box="4">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-4">
                                        <img src="{{ asset('assets/images/implementation-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-4">
                                    <h4>A/R Follow Up</h4>
                                    <p>MeBilling resolves denials, ensures reimbursements.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-4">
                                        <span class="number">
                                            04
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="border-container" data-box="5">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-5">
                                        <img src="{{ asset('assets/images/monitor-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-5">
                                    <h4>Denial Management</h4>
                                    <p>It ensures revenue, maximize reimbursements.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-5">
                                        <span class="number">
                                            05
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="border-container" data-box="6">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-6">
                                        <img src="{{ asset('assets/images/improvement-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-6">
                                    <h4>Reporting</h4>
                                    <p>MeBilling delivers detailed performance report regularly.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-6">
                                        <span class="number">
                                            06
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- mobile view --}}
                <div class="mobile-view-process-section">
                    <div class="row justify-content-center mb-5">

                        <div class="col-md-4">
                            <div class="border-container" data-box="1">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-1">
                                        <img src="{{ asset('assets/images/monitor-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-1">
                                    <h4>Credentialing</h4>
                                    <p>It ensures claim payment, alternatives available.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-1">
                                        <span class="number">
                                            01
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="border-container" data-box="2">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-2">
                                        <img src="{{ asset('assets/images/analysis-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-2">
                                    <h4>Charge Entry</h4>
                                    <p>Charge Entry ensures accurate, error-free claims.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-2">
                                        <span class="number">
                                            02
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="border-container" data-box="3">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-3">
                                        <img src="{{ asset('assets/images/planning-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-3">
                                    <h4>Payment Posting</h4>
                                    <p>It posting manages accounts, adjustment, denials.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-3">
                                        <span class="number">
                                            03
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center mb-100">

                        <div class="col-md-4">
                            <div class="border-container" data-box="4">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-4">
                                        <img src="{{ asset('assets/images/implementation-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-4">
                                    <h4>A/R Follow Up</h4>
                                    <p>MeBilling resolves denials, ensures reimbursements.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-4">
                                        <span class="number">
                                            04
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="border-container" data-box="5">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-5">
                                        <img src="{{ asset('assets/images/monitor-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-5">
                                    <h4>Denial Management</h4>
                                    <p>It ensures revenue, maximize reimbursements.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-5">
                                        <span class="number">
                                            05
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="border-container" data-box="6">
                                <img src="{{ asset('assets/images/arrow-border.png') }}" alt=""
                                     class="arrow-image">
                                <div class="icon">
                                    <div class="inner-icon" id="icon-bg-6">
                                        <img src="{{ asset('assets/images/improvement-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="inner-box-container" id="box-bg-6">
                                    <h4>Reporting</h4>
                                    <p>MeBilling delivers detailed performance report regularly.</p>
                                </div>
                                <div class="banner">
                                    <div class="inner-banner" id="banner-bg-6">
                                        <span class="number">
                                            06
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- process-area-end -->

        <!-- testimonial-area -->
        <section id="testimonios" class="testimonial-area testimonial-p pt-0 pb-0 fix mt-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-8">
                        <div class="section-title center-align mb-4 text-center">
                            <span>TESTIMONIAL</span>
                            <h3>What Our Clients Say</h3>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">


                    <div class="col-lg-10">
                        <div class="testimonial-active owl-carousel" id="testimonial">
                            @if (!empty($testimonials))
                                @foreach ($testimonials as $index => $testimonial)
                                    <div class="single-testimonial">
                                        <div class="testi-img">

                                            @if ($testimonial->image)

                                                <img src="{{ asset($testimonial->image) }}"
                                                     alt="{{ $testimonial->name }}"
                                                     width="50">
                                            @else
                                                <img src="{{ asset($testimonial->image) }}"
                                                     alt="{{ $testimonial->name }}"
                                                     width="50">
                                            @endif


                                        </div>
                                        <div class="single-testimonial-bg">
                                            <div class="com-icon"><img src="{{ asset('assets/images/qutation.png') }}"
                                                                       alt="img"></div>
                                            <div class="testi-author">
                                                <div class="ta-info">
                                                    <h6>{{ $testimonial->name }}</h6>
                                                    <span>{{ $testimonial->position }}</span>

                                                </div>
                                            </div>
                                            <p>{{ strip_tags($testimonial->testimonial) }}</p>
                                        </div>

                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- testimonial-area-end -->


        <!-- contact-area -->
        <section id="contact" class="contact-area contact-bg pb-5 p-relative fix">

            @include('sites.form.contact-us')

        </section>
        <!-- contact-area-end -->

        <section>
            <section id="pricing" class="pricing-area pb-5 mt-5">
                <div class="container mt-5">

                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title center-align mb-4 text-center">
                                <span>It's Integration with Your EHR</span>
{{--                                <h3>What Our Clients Say</h3>--}}
                            </div>
                        </div>
                    </div>
                    <div class="exceptional-wrapper" >
                        <div class="container-fluid p-0">
                            <div class="inner">



                                <div class="owl-carousel exceptional-owl owl-theme owl-loaded owl-drag brand">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                             style="transform: translate3d(-1324px, 0px, 0px); transition: all; width: 4635px;">
                                            <div class="owl-item active" style="width: 204px; margin-right: 24px;">
                                                <div class="logo-wrapper">
                                                    <img src="assets/images/brand1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 204px; margin-right: 24px;">
                                                <div class="logo-wrapper">
                                                    <img src="assets/images/brand2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 204px; margin-right: 24px;">
                                                <div class="logo-wrapper">
                                                    <img src="assets/images/brand3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 204px; margin-right: 24px;">
                                                <div class="logo-wrapper">
                                                    <img src="assets/images/brand4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 204px; margin-right: 24px;">
                                                <div class="logo-wrapper">
                                                    <img src="assets/images/brand5.png" alt="">
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 204px; margin-right: 24px;">
                                                <div class="logo-wrapper">
                                                    <img src="assets/images/brand6.png" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </section>

        <!-- faq-area -->

        <section>

            <div class="container mt-5 mb-5">

                <div class="faq-container">

                    <div class="section-title left-align mb-50">
                        <h2>Frequently Asked Questions</h2>
                        <p>Duis non aliquet tellus, in mollis leo. Phasellus quis posuere dui. Nulla mauris purus,
                            mattis eget sagittis at, accumsan sed leo.</p>
                    </div>
                    <div>
                        <!-- FAQ Item 1 -->
                        @foreach($faqs as $index => $faq)
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>{{$faq->question}}</span>
                                    <i class="faq-icon eye-toggle"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>{{$faq->answer}}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>


        <!-- faq-aread-end -->

        <!-- blog-area -->
        <section id="blog" class="blog-area  p-relative pt-5 pb-0 fix"
                 style="background-image:url(img/an-bg/an-bg10.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-80">
                            <span> OUR LATEST BOLG </span>
                            <h3>Stay Updated To Our Blog & News</h3>
                            {{--                            <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula --}}
                            {{--                                arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach( $blogs as $index => $blog)
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        @if ($blog->image)
                                            <img src="{{ asset('storage/' . $blog->image) }}"
                                                 alt="{{ $blog->name }}" width="50">
                                        @else
                                            <img src="assets/images/blog_img01.jpg" alt="img">
                                        @endif



                                    </a>
                                </div>
                                <div class="blog-content text-center">
                                    <div class="b-meta mb-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('Y-m-d') }}

                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <i class="fas fa-user"></i> {{$blog->author_name}}
                                            </div>
                                        </div>
                                    </div>
                                    <h4><a href="blog-details.html">{{$blog->name}}</a>
                                    </h4>
                                    <p>{{strip_tags($blog->description)}}</p>
                                    <div class="blog-btn"><a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                    @endforeach

                    <div class="" style="padding-left: 480px">
                        <a href="{{ asset('/blog') }}" class="btn ss-btn" data-animation="fadeInRight"
                           data-delay=".8s">More Blog <i class="fas fa-chevron-right"></i></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- blog-area-end -->



    </main>
@endsection

@push('js')
    <script>
        $(document).ready(function () {


            // Select all FAQ questions
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach((question) => {
                question.addEventListener('click', () => {
                    // Toggle the visibility of the answer
                    const answer = question.nextElementSibling;
                    const icon = question.querySelector('.faq-icon');

                    if (answer.style.display === 'block') {
                        answer.style.display = 'none'; // Hide the answer
                        icon.classList.remove('open'); // Change icon to "eye open"
                    } else {
                        answer.style.display = 'block'; // Show the answer
                        icon.classList.add('open'); // Change icon to "eye closed"
                    }
                });
            });


            const processSection = document.getElementById("processSection");
            const arrowImages = document.querySelectorAll(".arrow-image");

            let currentIndex = 0; // Start with the first image
            let intervalTime = 3000; // Time between animations (3 seconds)

            // Function to show the current image and hide the previous one
            function animateImages() {
                // Hide the current image
                arrowImages[currentIndex].classList.remove("show");
                arrowImages[currentIndex].classList.add("hide");

                // Calculate the next index
                currentIndex = (currentIndex + 1) % arrowImages.length;

                // Show the next image
                arrowImages[currentIndex].classList.remove("hide");
                arrowImages[currentIndex].classList.add("show");
            }

            // Start the animation sequence when the section is in view
            let observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Initialize the first image
                        arrowImages[currentIndex].classList.add("show");

                        // Start the animation loop
                        setInterval(animateImages, intervalTime);
                        observer.disconnect(); // Only trigger once
                    }
                });
            }, {
                threshold: 1
            });

            observer.observe(processSection);


            $("#header").owlCarousel({
                loop: true,
                // autoplay: true,
                margin: 20,
                nav: false,
                autoplayTimeout: 5000,
                items: 1,
                smartSpeed: 1000,
            });

            $(".brand").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 20,
                nav: false,
                autoplayTimeout: 3000,
                items: 4,
                smartSpeed: 10000,
            });

            $("#testimonial").owlCarousel({
                loop: true,
                autoplay: true,
                nav: false,
                autoplayTimeout: 5000,
                items: 1,
                smartSpeed: 1000,
            });

            $("#core-objectives").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                // mouseDrag: false,
                // touchDrag: false,
                // pullDrag: false,
                smartSpeed: 1000,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                onTranslate: function () {
                    $(".owl-item").removeClass("fade-in-up").addClass("fade-out-up inactive");
                },
                onTranslated: function () {
                    $(".owl-item.active").removeClass("fade-out-up inactive").addClass("fade-in-up");
                },

                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });

        });
    </script>
@endpush
