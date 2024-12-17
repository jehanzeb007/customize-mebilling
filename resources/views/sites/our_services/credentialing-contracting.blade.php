@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')
    <section>
        <div class="container mt-5">

{{--            <div class="section-title">--}}
{{--                <span>Simplify Medical Credentialing Without Any Hassle</span>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-md-8">
                    <h2>Simplify Medical Credentialing Without Hassle</h2>
{{--                    <p><strong>MeBilling handles all the paperwork so that you can focus on patient care</strong></p>--}}
                    <p>The medical credentialing process helps ensure that the provider meets all the required standards of the healthcare organization as well as its payers. As a medical billing and RCM company, MeBilling understands firsthand the impact provider credentialing has on your organization’s cash flow and profitability. Did you know that lapses or delays in the credentialing process may cause reimbursement to be delayed or denied?</p>
                    <p>MeBilling provides a straightforward and hassle-free credentialing strategy that focuses on improving your repayment rates. Our team of professionals and specialists maintains expertise in the provider credentialing process, including staying on top of industry changes, medical credentialing trends, and changing payer requirements.</p>
                </div>
                <div class="col-md-4 img-css">
                    <img src="{{asset('assets/images/approve.jpg')}}" >
                </div>
            </div>
        </div>

       <div class="container mb-5">
           <h2>Provider Credentialing Service that Saves Time and Money </h2>
           <p>Let the medical credentialing and enrollment professionals at MeBilling help you prepare the paperwork for healthcare providers to be properly credentialed with insurance providers and enjoy the various in-network benefits.</p>
           <ul class="list-style-one mb-0">
           <li><strong>Expect Quick Turnaround</strong></li>
           <p>With several years of involvement in provider enrollment, we are aware of what to do as well as who to contact so that you get the best and quickest results.</p>
               <li><strong>Track the Advancement</strong></li>
           <p>After getting your fortnightly or weekly reports, assess the advancement of each credentialing progress. </p>
           </ul>
       </div>

        <div class="container mt-5">
           <h2>Insurance Credentialing</h2>
            <p>We offer payer contracting and provider enrollment, primary source verification as well as privileging. Our payer credentialing services include the paperwork or electronic application filing via PECOS, CAQH, and others in order to get contracted with insurance firms.</p>
            <p>Our experienced specialists and the proprietary process will handle every step on your behalf to become an in-network provider as well as maintain the required enrollment, privileging, and licensing through our reliable provider credentialing services. </p>
            <p>Rely on MeBilling for your provider and payer credentialing needs in Texas, Michigan, New York, Illinois, and New Jersey. </p>
        </div>
    </section>
@endsection
