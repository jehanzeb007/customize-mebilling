@extends('sites.layout.app')

@section('content')
    <main>
        <!-- slider-area -->
        {{-- <section id="home" class="slider-area p-relative p-0"> --}}
        <section id="home" class="slider-area fix p-relative mb-5">

            <div class="slider-active2">
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="background-image:url(img/an-bg/header-bg.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content s-slider-content text-left">
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Much More Than <span>Billing</span></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Enhance Your Revenue , Empower Your Profit</p>
                                    <div class="slider-btn mt-25">
                                        <a href="{{ asset('/about_us') }}" class="btn ss-btn" data-animation="fadeInRight"
                                            data-delay=".8s">Learn More <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="container">
                                    <div class="slider-active2">
                                        <div class="single-slider slider-bg d-flex align-items-center">
                                            <div id="header" class="owl-carousel  owl-loaded owl-drag">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                        style="transform: translate3d(-2292px, 0px, 0px); transition: all; width: 9168px;">
                                                        <div class="owl-item">
                                                            <div class="row ">

                                                                <div class="col-lg-12">
                                                                    <img src="assets/images/header-img.png" alt="header-img"
                                                                        class="header-img" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item ">
                                                            <div class="row ">
                                                                <div class="col-lg-12">
                                                                    <img src="assets/images/bg1.png" alt="header-img"
                                                                        class="header-img" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item ">
                                                            <div class="row ">
                                                                <div class="col-lg-12">
                                                                    <img src="assets/images/Pic 2.png" alt="header-img"
                                                                        class="header-img" />
                                                                </div>
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
        </section><br>

        <!-- main-area-end -->

        <!-- man area 2 -->

        <section class="department-area cta-bg p-0 fix mt-5 mb-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="p-0">
                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src="{{ asset('assets/images/arrow-increase-icon.png') }}" alt="de-icon">
                                    </div>
                                </div>
                                <div class="text">
                                    <h2 class="mb-0">Better Numbers</h2>
                                </div>
                            </li>
                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src="{{ asset('assets/images/dollar-icon.png') }}" alt="de-icon"></div>
                                </div>
                                <div class="text">
                                    <h2 class="mb-0">Hassle Free Billing</h2>
                                </div>
                            </li>

                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src=" {{ asset('assets/images/analytics-icon.png') }}" alt="de-icon"></div>
                                </div>
                                <div class="text">
                                    <h2 class="mb-0">Killer Analytics</h2>
                                </div>
                            </li>
                            <li class="align-items-center points">
                                <div class="icon">
                                    <div><img src="{{ asset('assets/images/support-icon.png') }}" alt="de-icon"></div>
                                </div>
                                <div class="text">
                                    <h2 class="mb-0">Proactive Support</h2>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class="col-lg-6">
                        <div class="s-d-img p-relative points">
                            <img src="{{ asset('assets/images/de-illustration.png') }}" alt="img">

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
                                <img src="{{ asset('assets/images/Credentaling.jpg') }}" alt="">
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
                                <img src="{{ asset('assets/images/enrollment.jpg') }}" alt="">
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
                                <img src="{{ asset('assets/images/scheduling.jpg') }}" alt="">
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
                                <img src="{{ asset('assets/images/reminder.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/verification.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/insurance.jpg') }}" alt="">
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
                            <img src="assets/images/illlustration.png" alt="img">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title mb-20">
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
                            <h2>Our Special Services For You</h2>
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
                            <h2>What Our Clients Say</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">


                    <div class="col-lg-10">
                        <div class="testimonial-active owl-carousel" id="testimonial">
                            @foreach ($testimonials as $index => $testimonial)
                            <div class="single-testimonial">
                                <div class="testi-img">

                                    @if ($testimonial->image)
{{--                                        <img src="{{ asset('storage/' . $testimonial->image) }}"--}}
{{--                                             alt="{{ $testimonial->name }}" width="50">--}}
                                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" width="50">
                                    @else
                                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" width="50">


                                        {{--                                        <img src="{{ asset('assets/images/meBilling.png') }}" />--}}
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
                                    <p>{{ strip_tags($testimonial->testimonial)}}</p>
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- testimonial-area-end -->


        <!-- contact-area -->
        <section id="contact" class="contact-area contact-bg pb-70 p-relative fix">

            @include('sites.form.contact-us')

        </section>
        <!-- contact-area-end -->

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
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Aliquam varius ligula nec leo tempus porta.</span>
                                <i class="faq-icon eye-toggle"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Suspendisse vitae varius diam, a vulputate urna.</span>
                                <i class="faq-icon eye-toggle"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Suspendisse potenti. Etiam tincidunt nulla id massa faucibus posuere.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Suspendisse vitae varius diam, a vulputate urna.</span>
                                <i class="faq-icon eye-toggle"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Suspendisse potenti. Etiam tincidunt nulla id massa faucibus posuere.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Aliquam aliquet purus eget lacus pretium.</span>
                                <i class="faq-icon eye-toggle"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Aliquam vestibulum orci in augue tincidunt, et malesuada quam convallis.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Aliquam aliquet purus eget lacus pretium.</span>
                                <i class="faq-icon eye-toggle"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Aliquam vestibulum orci in augue tincidunt, et malesuada quam convallis.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{--        <section class="faq-area pt-50 pb-5 fix"> --}}
        {{--            <div class="container"> --}}
        {{--                <div class="row align-items-end"> --}}
        {{--                    <div class="col-lg-12"> --}}
        {{--                        <div class="section-title left-align mb-50"> --}}
        {{--                            <h2>Frequently Asked Questions</h2> --}}
        {{--                            <p>Duis non aliquet tellus, in mollis leo. Phasellus quis posuere dui. Nulla mauris purus, --}}
        {{--                                mattis eget sagittis at, accumsan sed leo.</p> --}}
        {{--                        </div> --}}
        {{--                        <div class="faq-wrap"> --}}
        {{--                            <div class="accordion" id="accordionExample"> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingThree"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseThree" aria-expanded="true" --}}
        {{--                                                aria-controls="collapseThree"> --}}
        {{--                                                Aliquam varius ligula nec leo tempus porta. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingOne"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseOne" aria-expanded="false" --}}
        {{--                                                aria-controls="collapseOne"> --}}
        {{--                                                Suspendisse vitae varius diam, a vulputate urna. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingTwo"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseTwo" aria-expanded="false" --}}
        {{--                                                aria-controls="collapseTwo"> --}}
        {{--                                                Aliquam aliquet purus eget lacus pretium. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingOne"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseOne" aria-expanded="false" --}}
        {{--                                                aria-controls="collapseOne"> --}}
        {{--                                                Suspendisse vitae varius diam, a vulputate urna. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor --}}
        {{--                                            incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi --}}
        {{--                                            ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingTwo"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseTwo" aria-expanded="false" --}}
        {{--                                                aria-controls="collapseTwo"> --}}
        {{--                                                Aliquam aliquet purus eget lacus pretium. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor --}}
        {{--                                            incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi --}}
        {{--                                            ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingOne"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseOne" aria-expanded="false" --}}
        {{--                                                aria-controls="collapseOne"> --}}
        {{--                                                Suspendisse vitae varius diam, a vulputate urna. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor --}}
        {{--                                            incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi --}}
        {{--                                            ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}
        {{--                                <div class="faq-card"> --}}
        {{--                                    <div class="card-header" id="headingTwo"> --}}
        {{--                                        <h2 class="mb-0"> --}}
        {{--                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" --}}
        {{--                                                data-target="#collapseTwo" aria-expanded="false" --}}
        {{--                                                aria-controls="collapseTwo"> --}}
        {{--                                                Aliquam aliquet purus eget lacus pretium. --}}
        {{--                                            </button> --}}
        {{--                                        </h2> --}}
        {{--                                    </div> --}}
        {{--                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" --}}
        {{--                                        data-parent="#accordionExample"> --}}
        {{--                                        <div class="card-body"> --}}
        {{--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod --}}
        {{--                                            tempor --}}
        {{--                                            incididunt ut labore et dolore magna --}}
        {{--                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris --}}
        {{--                                            nisi --}}
        {{--                                            ut aliquip --}}
        {{--                                        </div> --}}
        {{--                                    </div> --}}
        {{--                                </div> --}}


        {{--                            </div> --}}
        {{--                        </div> --}}
        {{--                    </div> --}}


        {{--                </div> --}}
        {{--            </div> --}}
        {{--        </section> --}}
        <!-- faq-aread-end -->

        <!-- blog-area -->
        <section id="blog" class="blog-area  p-relative pt-5 pb-0 fix"
            style="background-image:url(img/an-bg/an-bg10.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-80">
                            <span> OUR LATEST BOLG </span>
                            <h2>Stay Updated To Our Blog & News</h2>
                            {{--                            <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula --}}
                            {{--                                arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="single-post mb-30">
                            <div class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog_img01.jpg" alt="img">
                                    <img src="assets/images/b-link.png" alt="b-link" class="b-link">
                                </a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="b-meta mb-20">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <i class="far fa-calendar-alt"></i> 7 March, 2019
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <i class="fas fa-user"></i> By Jhone Doe
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="blog-details.html">Praesent justo mauris, tincidunt vitae nisi
                                        ultricies.</a>
                                </h4>
                                <p>Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam,
                                    gravida lacus.</p>
                                <div class="blog-btn"><a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="single-post active mb-30">
                            <div class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog_img02.jpg" alt="img">
                                    <img src="assets/images/b-link.png" alt="b-link" class="b-link">
                                </a>

                            </div>
                            <div class="blog-content text-center">
                                <div class="b-meta mb-20">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <i class="far fa-calendar-alt"></i> 7 March, 2019
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <i class="fas fa-user"></i> By Jhone Doe
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="blog-details.html">Monthly eraesent justo mauris, vitae nisi ultricies.</a>
                                </h4>
                                <p>Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam,
                                    gravida lacus.</p>
                                <div class="blog-btn"><a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="single-post mb-30">
                            <div class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog_img03.jpg" alt="img">
                                    <img src="assets/images/b-link.png" alt="b-link" class="b-link">
                                </a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="b-meta mb-20">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <i class="far fa-calendar-alt"></i> 7 March, 2019
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <i class="fas fa-user"></i> By Jhone Doe
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="blog-details.html">User Experience Psychology And Performance Smashing</a>
                                </h4>
                                <p>Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam,
                                    gravida lacus.</p>
                                <div class="blog-btn"><a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
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
        $(document).ready(function() {


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
                autoplay: true,
                margin: 20,
                nav: false,
                autoplayTimeout: 5000,
                items: 1,
                smartSpeed: 1000,
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
                // mouseDrag: false,
                // touchDrag: false,
                // pullDrag: false,
                smartSpeed: 1000,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                onTranslate: function() {
                    $(".owl-item").removeClass("fade-in-up").addClass("fade-out-up inactive");
                },
                onTranslated: function() {
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
