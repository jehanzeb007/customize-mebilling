@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')
    <section>
        <div class="container my-5">

            <div class="row mb-4">
                <div class="col-md-8">
                    <h2 class="mb-4">Professional Revenue Optimization Services for Your Hospital or Health Center</h2>
                    <p>MeBilling provides revenue optimization services for hospitals, clinics, labs, and other health centers. MeBilling partners with you in order to seize revenue opportunities and avoid obstacles. We can help keep you on the path to stable and steady cash flow to optimize revenue and increase profitability.</p>
                    <p>Whether you run a hospital, lab, emergency room, or specialty practice, our revenue optimization services can make your medical practice more efficient, streamlined, and profitable by improving your revenue cycle.</p>
                </div>
                <div class="col-md-4">
                    <img class="img-css my-0" src="{{asset('assets/images/ro.jpg')}}">
                </div>
            </div>

            <h2>Revenue Optimization Services that Deliver on Your Mission</h2>
            <p>MeBilling's revenue optimization services in Texas, Michigan, New York, Illinois, and New Jersey focus on increasing cash flow through effective accounts receivable and denial management to ensure your receive the amounts rightfully due to your organization through payment analytics. </p>
        </div>

        <section id="pricing" class="pricing-area pb-0">
            <div class="container">


                <div class="exceptional-wrapper" >
                    <div class="container-fluid p-0">
                        <div class="inner">

                            <div class="row">
                                <div class="mb-3">
                                    <h2>Payment Variance and Accounts Receivable Management </h2>
{{--                                    <p>Choose us for unparalleled accuracy, efficiency and increase revenue with our advance medical billing solution.</p>--}}
                                    <!-- <div class="subtitle">
                                        Wanologicalsolutions is a prominent name in the NFT-based game ecosystem development. Do you have plans to launch a blockchain gaming platform?
                                    </div> -->
                                </div>
                            </div>

                            <div id="revenue" class="owl-carousel exceptional-owl owl-theme owl-loaded owl-drag">
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
                                                    Lost Revenue Assessment
                                                </h3>
                                                <p class="subtitlee">MeBilling can help you identify contractual underpayments by performing a comprehensive analysis of all medical services against the contracts. </p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/charge.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Underpayment Recovery Services
                                                </h3>
                                                <p class="subtitlee">Our team analyzes payments against contracts in order to identify underpaid claims and appeals with payers to collect all due amounts.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/payment.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Retrospective Underpayment Review
                                                </h3>
                                                <p class="subtitlee">MeBilling also looks at historic underpayments to identify and assess the overall impact of underpaid medical claims to optimize revenue. </p>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned"
                                             style="width: 307.053px; padding-bottom: 84px ; margin-right: 24px;">
                                            <div class="exceptional-item revenue">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/followup.svg') }}" alt="">
                                                </div>
                                                <h3 class="titlee">
                                                    Effective Action Plans
                                                </h3>
                                                <p class="subtitlee">Our team does not just get and track the status of medical claims but also goes a step further to refile claims as well as appeals with due documentation. </p>
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


        <div class="key-strategies mb-5">
            <div class="container">
                <h2>Revenue Cycle and Optimization Experts</h2>
                <p>We provide specialized billing, coding, and collection solutions to optimize your payment cycle and boost profitability. Our health revenue optimization services are customized to the unique demands and needs of public and private health organizations.</p>
                <p>Whether your organization is in distress or performing well and is looking to optimize further, MeBilling's deep experience and expertise make us uniquely qualified to help.</p>


                <h5>1. Revenue Leakage</h5>
                <p>We help you decrease lost revenue by implementing needed changes across the revenue cycle. Identification of revenue leakage starts on day one.</p>


                <h5>2. Adapt to Industry Trends and Changes</h5>
                <p>Our dedicated account managers and experts provide reliable advice to optimize your revenue cycle management. This will help you navigate the rapidly changing and dynamic healthcare landscape in the US with confidence and support.  </p>

                <br>
                <h2>Beyond the Standard Metrics –Process, People, and Technology</h2>
                <p>An efficient and optimized revenue cycle and a sound set of internal policies ensure reliable and smooth healthcare billing processes and a high collection rate on medical services rendered. </p>
                <p>Our professionals and subject matter experts review workflows and claim filing to identify pitfalls affecting financial success.</p>
                <br>
                <h2>Gain Financial Control of Your Hospital or Medical Practice with MeBilling</h2>
                <p>Our RCM and billing professional submit clean medical claims, reducing the risk of rejections. This will help you optimize the revenue cycle process and take complete financial control of your health organization. </p>

            </div>
        </div>
    </section>

@endsection

@push('js')

<script>
    $(document).ready(function () {
        $(document).ready(function () {
            $(".exceptional-owl").owlCarousel({
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
