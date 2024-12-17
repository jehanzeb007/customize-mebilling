@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')

    <section class="mt-5">
        <div class="container">


            <div class="row">
                <h2>Primary and Specialty Physician Billing Services</h2>
                <h5>You Care, MeBilling Collects </h5>



                <div class="col-md-8">

                    <p>
                        Taking on the full responsibility of administrating your physician practice’s medical billing and
                        revenue cycle process is not a small feat. If you’re a primary or specialty physician dealing with
                        tons of medical claims, staff members, and patients simultaneously, the procedure can be
                        time-consuming and strenuous. It’s extremely tiring and concerning if you’re also constantly worried
                        about the medical billing of your solo practice.
                    </p>
                    <p>
                        However, you can increase your revenue, productivity, profitability, and efficiency by working with
                        a reliable and experienced medical billing service provider, such as MeBilling. Whether you’re a
                        veteran or a new physician, we can help. Outsourcing your medical billing and revenue cycle
                        management is a necessary and hassle-free way to enhance the performance of your medical practice.
                    </p>
                    <p>By leveraging a team of medical billing, coding, and revenue cycle management professionals and using
                        the latest technology in the industry, we can maximize collections and boost revenue for physicians
                        and physician groups of all sizes, such as independent primary care physicians, dermatologists, and
                        gastroenterologists.
                    </p>
                </div>
                <div class="col-md-4 img-css phybill">
                    <img src="{{ asset('assets/images/docter.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing-area pb-0 pt-5">
        <div class="container">


            <div class="exceptional-wrapper">
                <div class="container-fluid">
                    <div class="inner">

                        <div class="row justify-content-center">
                            {{-- <div class="col-xl-8 col-lg-8">
                                <div class="section-title mb-4">
                                    <span>How We Help</span>
                                </div>
                            </div> --}}

                            <h2>How We Help</h2>

                            <div id="our-process" class="owl-carousel exceptional-owl owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1324px, 0px, 0px); transition: all; width: 4635px;">
                                        <div class="owl-item" style="width: 307.053px;">
                                            <div class="exceptional-item">
                                                <div class="image-wrapper">
                                                    <div>
                                                        <img src="{{ asset('assets/images/cre.svg') }}" alt="">
                                                    </div>
                                                </div>
                                                <h4 class="titlee">
                                                    Revenue Cycle Management
                                                </h4>
                                                <p class="subtitlee">MeBilling combines advanced technology with a focus
                                                    on financial independence to provide cost-saving medical billing and
                                                    coding services. Operating in Texas, Michigan, New York, Illinois,
                                                    and New Jersey, they recover aged payments, uncover lost revenue,
                                                    reduce AR times, and manage collections efficiently.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/charge.svg') }}" alt="">
                                                </div>
                                                <h4 class="titlee">
                                                    Financial Analysis and Reporting
                                                </h4>
                                                <p class="subtitlee">MeBilling provides very detailed and comprehensive
                                                    customer reports along with weekly and monthly standard reports.
                                                    MeBilling provides very detailed and comprehensive customer reports
                                                    along with weekly and monthly standard reports.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item " style="width: 307.053px; margin-right: 24px;">
                                            <div class="exceptional-item">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/payment.svg') }}" alt="">
                                                </div>
                                                <h4 class="titlee">
                                                    Account Management
                                                </h4>
                                                <p class="subtitlee">Your dedicated account manager is your single point
                                                    of contact for daily questions and is there for all your needs and
                                                    requirements. We do not place you in a box with other clients, and
                                                    you will receive customized care and tailored solutions.</p>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned"
                                            style="width: 307.053px; padding-bottom: 84px ; margin-right: 24px;">
                                            <div class="exceptional-item">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset('assets/images/followup.svg') }}" alt="">
                                                </div>
                                                <h4 class="titlee">
                                                    Billing Services
                                                </h4>
                                                <p class="subtitlee">MeBilling supports diverse physician practices and
                                                    hospital-owned groups by simplifying medical billing and ensuring
                                                    financial health monitoring. Using advanced tools, they analyze
                                                    trends and key factors affecting practices. Their goal is to provide
                                                    physicians with top-quality medical billing and coding solutions.
                                                </p>
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

@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                $(".exceptional-owl").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        }
                    },
                    center: true,
                    stagePadding: 0,
                    dots: false,
                });
            });
        });
    </script>
@endpush
