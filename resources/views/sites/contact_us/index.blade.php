@extends('sites.layout.app')

@section('content')
    <!-- contact-area -->
    <section id="contact" class="contact-area contact-bg pb-70 p-relative fix my-4">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-8">
                <h3 >Who We Are</h3>
                <p>Thanks for showing an interest in MeBilling.</p>
                <p>MeBilling takes you and all our clients very seriously. So, if you believe that you need to ask a question or raise an issue, our team would like to hear from you. We offer more than seven years of medical billing, coding, AR management, credentialing, and practice management experience.</p>
                <p>For us, customers are the lifeblood of our medical consulting business, and the best customer service is important. MeBilling is headquartered in Houston, TX, and services clients in many states, including New York, New Jersey, Illinois, and Michigan.</p>
            </div>
            <div class="col-md-3 ">
                <div class="img-css mt-5">
                <img src="{{asset('assets/images/contactsus.png')}}">
                </div>
            </div>
            </div>
            </div><br><br><br>

            @include('sites.form.contact-us')

    </section>
    <!-- contact-area-end -->
@endsection
