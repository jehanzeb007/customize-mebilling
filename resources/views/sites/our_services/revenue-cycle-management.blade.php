@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')

    <section>
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-6">
                    <h2>Smart and Reliable RCM Solutions for Modern Health System</h2>
                    <br>
                    <p>A comprehensive and robust billing and payment management solution for your modern healthcare practice.</p>
                    <p>Clinicians, physicians, and other healthcare professionals in hospitals, clinics, emergency care centers, and other organizations work tirelessly in order to serve patients and tackle the administrative burden. If you are looking to reduce the administrative load on your staff and optimize your revenue cycle, rely on MeBilling to look into all areas that meaningfully enhance the workflow of your hospital, lab, or urgent care center for high collections.</p>
                    <p>With several years in the industry, MeBilling has helped countless health providers in Texas, Michigan, New York, Illinois, and New Jersey bill more efficiently and attain financial transparency. </p>
                    <p>Our dedicated and friendly team of medical billing service experts is here to answer any questions or concerns you may have about billing and revenue cycle management, whether you operate an urgent care center, a lab, a skilled nursing facility, a hospital, a clinic, or a provider group!</p>
                    <p>Our revenue cycle management services keep you on top of appointments, patient accounts, and claims processing. This means you receive payments from insurance companies as soon as possible.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-css" src="{{asset('assets/images/cycle.jpg')}}" style='width: 100%;display: block;margin: 0 auto;'>
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



                            <div id="cycle" class="owl-carousel exceptional-owl owl-theme owl-loaded owl-drag">
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
                                                    Increase Revenue
                                                </h3>
                                                <p class="subtitlee">With a team of dedicated and passionate experts at the helm, MeBilling’s all-inclusive approach to revenue cycle management offers a seamless payment cycle to boost your profit margin.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/charge.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Reduce Account Receivable
                                                </h3>
                                                <p class="subtitlee">Our team regularly follows up on all claims to ensure timely reimbursements, and we specialize in aging A/R recovery.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/payment.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    High Clean Claims Rate
                                                </h3>
                                                <p class="subtitlee">Our expert claim scrubbing team ensures clean and error-free medical claims for faster reimbursement and considerably reduces the risks of denials and rejections.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned"
                                             style="width: 307.053px; padding-bottom: 84px ; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/followup.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Analytics and Reporting
                                                </h3>
                                                <p class="subtitlee">Make sound and prudent decisions with our data-driven and in-depth reports that offer complete healthcare analytics so you can gain a new level of insight into your hospital operations.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                </div>
                </div>



{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="section-title text-center mb-4">--}}
{{--                    <span>How We Help</span>--}}
{{--                    <p>MeBilling simplifies the process to deliver streamlined, valuable services that others can't. We are transparent, honest, responsive, and always put our clients first: excellent communication, no long-term contracts, and top-quality customer service.</p>--}}
{{--                </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card">--}}
{{--                    <div class="front">--}}
{{--                        <h3>Increase Revenue </h3>--}}
{{--                    </div>--}}
{{--                    <div class="back">--}}
{{--                        <p>With a team of dedicated and passionate experts at the helm, MeBilling’s all-inclusive approach to revenue cycle management offers a seamless payment cycle to boost your profit margin.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card">--}}
{{--                    <div class="front">--}}
{{--                        <h3>Reduce Account Receivable </h3>--}}
{{--                    </div>--}}
{{--                    <div class="back">--}}
{{--                        <p>Our team regularly follows up on all claims to ensure timely reimbursements, and we specialize in aging A/R recovery.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card">--}}
{{--                    <div class="front">--}}
{{--                        <h3>High Clean Claims Rate</h3>--}}
{{--                    </div>--}}
{{--                    <div class="back">--}}
{{--                        <p>Our expert claim scrubbing team ensures clean and error-free medical claims for faster reimbursement and considerably reduces the risks of denials and rejections.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card">--}}
{{--                    <div class="front">--}}
{{--                        <h3>Analytics and Reporting</h3>--}}
{{--                    </div>--}}
{{--                    <div class="back">--}}
{{--                        <p>Make sound and prudent decisions with our data-driven and in-depth reports that offer complete healthcare analytics so you can gain a new level of insight into your hospital operations.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}



        <div class="container">
            <h2>Critical Revenue Cycle Solutions</h2>
            <p>Whether it is ICD-10 training, meaningful use adoption, transitions to different payer payment models, or electronic charge capture, hospitals, physicians, and other healthcare providers must be equipped with the tools and information to respond to changes in the industry effectively and quickly.</p>
            <p>MeBilling is an expert in all these areas, and we are here to help you prepare and equip you for the future of the industry.</p>
            <h2 class="mt-5">Our Innovative and Secure RCM Solutions Combine Human Experts and Technology</h2>
            <p>Take control of patient data and the financial health of your organization. Plug security holes and get claims paid faster. </p>
            </div>
    </section>

@endsection

@push('js')

    <script>
        $(document).ready(function () {
            $(document).ready(function () {
                $("#cycle").owlCarousel({
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

