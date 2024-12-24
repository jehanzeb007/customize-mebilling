@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')

    <section>
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-8">
                    <h2>Efficient, Reliable, and Advanced Medical Billing Services</h2>
                    <br>
                    <p>Keep your hospital or clinic's billing process secure, accurate, and fast with MeBilling's tailored medical billing services to boost your organization's revenue and profitability.</p>
                    <p>MeBilling understands how essential it is to optimize and streamline your practice's RCM process. With our end-to-end, affordable, and professional medical billing services in Texas, New York, New Jersey, Illinois, and Michigan, you can focus on your patient's health and well-being as our team takes care of your administrative work.</p>
                    <p>MeBilling simplifies your medical billing, lowers administrative burden, and boosts your revenue. Our dedication and commitment toward efficient and streamlined billing can be seen in the form of more income and better profit margins for your hospital, clinic, urgent care center, or lab.</p>
                    <p>MeBilling understands your organization's needs and gives you the best possible return on investment by focusing on important areas of billing and revenue cycle in order to get rid of revenue leaks, so you can focus more on delivering top-quality care to patients.</p>
                    <p>Being a professional and cost-effective medical billing company, we have the expertise and experience to deliver institutional and professional medical billing services.</p>
                </div>
                <div class="col-md-4">
                    <div class="rotate-img">
                    <img src="{{asset('assets/images/Medical.png')}}" style='display: block;margin: 0 auto;'>

                    </div>
                </div>
            </div>

        </div>

        <div class="container">

            <div class="exceptional-wrapper" >
                <div class="container-fluid">
                    <div class="inner">

                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8">
                                <div class="section-title text-center mb-4">
                                    <span>How We Help</span>
                                </div>
                            </div>



                            <div id="medical_billing" class="owl-carousel exceptional-owl owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-1324px, 0px, 0px); transition: all; width: 4635px;">
                                        <div class="owl-item " style="width: 307.053px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <div>
                                                        <img src="{{asset('assets/images/cre.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <h3 class="titlee">
                                                    Patient Preauthorization
                                                </h3>
                                                <p class="subtitlee">With our medical billing services, you'll receive prior authorization from the insurance provider to perform a medical procedure and receive reimbursement accordingly.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/charge.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Real-Time Insurance Verification
                                                </h3>
                                                <p class="subtitlee">MeBilling confirms every patient's insurance eligibility to optimize and streamline your process, avoid denials, and shorten account receivable days.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/payment.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Claim Submission & Scrubbing
                                                </h3>
                                                <p class="subtitlee">Our experts and scrubbing process ensure clean claims are submitted. If there are any rejections, we re-submit the same day after corrections.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/payment.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Medical Billing Audit
                                                </h3>
                                                <p class="subtitlee">Our medical billing audit will help you track and optimize medical claim processing and payment posting in order to maximize your revenue.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/payment.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Patient Statements
                                                </h3>
                                                <p class="subtitlee">We confirm payment from all payers. And if a patient owes a remaining balance, a detailed patient statement is generated and sent to the patient showing their due balance.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned"
                                             style="width: 307.053px; padding-bottom: 84px ; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/followup.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Payment Posting
                                                </h3>
                                                <p class="subtitlee">Our billing experts proactively post insurance payments. We can also update patient payments in your medical billing software to boost cash flow.</p>
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

        <div class="key-strategies">
            <div class="container">
                <div class="section-title text-center mb-4 mt-5">
                    <span>Partners You Can Trust</span>
                    <p>Suitable for all specialties and trusted by thousands of organizations and providers</p>
                </div>

                <p>Your hospital, emergency care center, or lab relies on your billing software and service for timely and accurate information, as well as responsive and efficient services. </p>
                <p>However, when your billing software or service is inefficient, it usually leads to numerous issues like increased claim denials and an increase in accounts receivable. You may also face a shortage of cash flow.</p>
                <p>With several years of industry experience, knowledge, and a national presence, we leverage our experience, current knowledge, and foresight to create customized and reliable services and solutions that help you manage your practice.</p>
            </div>
        </div>
    </section>

@endsection

@push('js')

    <script>
        $(document).ready(function () {
            $(document).ready(function () {
                $("#medical_billing").owlCarousel({
                    loop: true, // Enable infinite looping
                    margin: 10, // Space between items
                    nav: true, // Show navigation arrows
                    autoplay: true, // Enable autoplay
                    autoplayTimeout: 3000, // Delay between slides
                    autoplayHoverPause: true, // Pause on hover
                    responsive: {
                        0: {items: 1},   // 1 item on small screens
                        600: {items: 1}, // 2 items on medium screens
                        1000: {items: 3} // 3 items on large screens
                    },
                    center: true, // Ensures proper alignment without spaces
                    stagePadding: 0, // Optional: Add padding if necessary
                    dots: false, // Optional: Remove dots if not needed
                });
            });
        });

    </script>
@endpush
