@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h2>Powerful, Reliable, and Cost-effective Medical Coding Solutions</h2>
                    <p><strong>Optimize your revenue cycle with MeBilling's state-of-the-art medical coding services</strong></p>
                    <p>We live in a changing and dynamic world. The healthcare industry in the US is evolving too. The regulations and laws change every year. This is why healthcare providers, small and large, need to stay updated with the latest coding guidelines and rules to stay on top of their game.</p>
                    <p>Medical coding should ideally be a top priority for any healthcare organization, such as a hospital or urgent care center, irrespective of specialty or size. Unfortunately, medical coding services often take a back seat in many healthcare organizations. If you are looking for scalable and reliable medical coding services, you should partner with MeBilling.</p>
                    <p>We offer a variety of medical coding and auditing services to assist hospitals, clinics, emergency care centers, and other organizations with their documentation of professional services.</p>
                </div>
                <div class="col-md-4 img-css">
                    <img src="{{asset('assets/images/coding.jpg')}}" style='width: 100%;display: block;margin: 0 auto;'>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h2>What are Your Top Issues and Challenges?</h2>
            <ul class="list-style-one p-0 mb-0">
                <li>Staying compliant with federal laws and regulations</li>
                <li>Creating and submitting timely and clean claims </li>
                <li>Coder retention and vacancy bottlenecks</li>
                <li>Lowering and managing overheads</li>
            </ul>
        </div>
        <div class="container mt-5">
            <h2>Coding Services You can Rely on</h2>
            <p>Our medical coding experts carefully review documentation in order to make sure that accurate codes are billed. Our professional coders identify and report existing issues and weaknesses within the documentation that might limit the medical necessity of the service. So, enjoy peace of mind and focus on taking care of your patients by hiring our coding services.</p>
            <h2 class="mt-5">Experienced Team of Medical Coders</h2>
            <p>We have a team of dedicated medical coders that helps expedite processes to get claims out to payers fast, considerably reducing the time for payment. </p>
            <p>MeBilling thoroughly reviews all claims before submission and quickly makes all the necessary edits before submitting these claims for payment.</p>
            <h2 class="mt-5">Secure and Quick Workflow</h2>
            <p>Every medical coding professional is assigned a work list based on their knowledge and experience in working with similar claims. Our trained coding specialists abstract clinical information from the healthcare provider's EMR or even scanned paper records. Suitable ICD/CPT codes and modifiers are carefully assigned per instructional notations and conventions. </p>
            <p>All medical codes are sequenced accurately. Clinical indicators and query providers are analyzed in order to capture the severity of patients' illness. We verify all codes for accuracy, specificity, completeness, and appropriateness. </p>
            <h2 class="mt-5">Why Choose MeBilling's Medical Coding Services</h2>
            <ul class="list-style-one p-0 mb-0">
                <li>MeBilling helps maximize revenue collections and boosts revenue substantially</li>
                <li>We have AAPC/ CPC, AHIMA/CCS credentialed medical coding professionals </li>
{{--                <li>We have AAPC/ CPC, AHIMA/CCS credentialed medical coding professionals </li>--}}
                <li>Our experts are familiar with various Clinical Information Systems </li>
                <li>We ensure error-free coding</li>
            </ul>
        </div>
    </section>
@endsection
