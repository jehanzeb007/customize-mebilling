@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)
@section('content')

    <section >
        <div class="container mt-5">
{{--            <h3 class="text-center section-title" style="font-size: 25px;margin:0"><span>About Us</span></h3>--}}
{{--            <small class="text-center" style="display: block; margin: 0 0 20px; font-size: 16px;">MeBilling is Committed to Offering the Best Practice Management Assistance </small>--}}
{{--            <br>--}}
            <div class="row">
            <div class="col-md-8">
            <h3>Brief Overview</h3>
            <p>Keep your medical billing and coding processes accurate, fast, and secure with our tailored and comprehensive revenue cycle management services to boost revenue and profitability.</p>
            <p>MeBilling's medical practice management and medical billing and coding operation services are second to none. We are a team of highly trained and experienced experts based in Texas that is committed to the growth and success of your medical practice and its financial health.</p>
            <p>While we are based in Texas, we provide billing and coding services in several states, including New York, New Jersey, Illinois, and Michigan as well.</p>
            <p>Our services are customized to meet the unique needs of your healthcare practice. We serve small and large practices, such as hospitals, clinics, laboratories, urgent care and home health, and multi-specialty practices or groups with an unrelenting focus on improving profitability and streamlining operations. Our clients enjoy high collection rates.</p>
            </div>
            <div class="col-md-4 ">
                <div class="mt-5 img-css">
                <img src="{{asset('assets/images/aboutt.jpg')}}">
            </div>
            </div>
            </div>
        </div>
        <div class="container">
            <h3>Who We Are</h3>
            <p>Founded in 2015, MeBilling provides growth opportunities for medical practices, such as clinics, hospitals, laboratories, urgent care centers, plastic surgeons, ENT specialists, and dermatologists, by developing and supporting the business end of their practices. </p>
            <p>We provide professional, affordable, and expert medical billing, coding, collection, credentialing, and other administrative services for medical practitioners. Whether you are looking for a complete turnkey medical billing service or need temporary staffing, the experienced medical billing, coding, and collection team at MeBilling will impress you.</p>
            <p>At MeBilling, our medical billing and RCM services make sure that nothing comes in the way of transparency. Our proven medical billing solutions in Houston can reduce claim denials and rejections.</p>
            <p>We also offer exceptional management solutions that automate billing problems, posting, and collection processes, making everything simpler for you. </p>
        </div>

{{--    <div class="why-us" >--}}
{{--        <div class="container">--}}
{{--            <div class="row ml-5">--}}
{{--                <div class="col-lg-10 col-md-10 push-md-2 push-lg-0 ml-lg-5">--}}
{{--                    <div class="aboutPeople wow fadeIn">--}}
{{--                        <div class="imgSection" style="display: block;padding-top: 10px;">--}}
{{--                            <h2 class="text-center">Our Mission</h2>--}}
{{--                            <p>We aim to deliver high-quality and affordable medical billing and coding services and revenue cycle management solutions to achieve maximum reimbursement while maintaining strict HIPAA compliance.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
        <div class="container">
            <h3>Services </h3>
            <p>MeBilling offers a wide range of practice management services catered to each client specifically.  At MeBilling, we are aware of the limitations and time constraints faced by doctors and medical practitioners daily. Keeping this in mind, we offer professional billing services to help you manage bills efficiently and effectively.</p>
            <p>We can successfully address all aspects of revenue cycle management, from credentialing, compliance, coding, and claims processing to clearinghouse edits, claim denial management, financial analyses, reporting, and more.</p>            <p>MeBilling is currently operating 5 days a week with more than 150 employees. The company is also providing job opportunities for young professionals and allows them to work in an innovative and healthy atmosphere. </p>
            <p>We also provide auditing services, including reviewing coding documentation, evaluating reimbursements by payers, checking fee schedules, and educating your in-house billing staff.</p>
            <h3>Professional Medical Billing and Practice Management Solutions</h3>
            <p>MeBilling understands how important it is to optimize and streamline your practice's RCM process. With our end-to-end dependable medical billing, credentialing, AR follow-up, payment processing, and other administrative services, you can focus on patients' health and well-being as we take care of your tedious administrative work. </p>
            <p>We guarantee a smooth and seamless billing and coding process where inconsistent codes are not multiplying or claims getting piled up because of multiple denials. </p>
            <p>Regardless of the size of your medical practice, our talented and experienced staff handles the administrative burden on your behalf to expedite the collection process.</p>
            <ul>
                <li>We streamline your RCM process and help you maintain HIPAA compliance</li>
                <li>Hundreds of satisfied physicians and dentists speak of our knowledge and expertise</li>
            </ul>
            <h3>Our Experts </h3>
            <p>MeBilling is a team of motivated, diligent, honest, and forward-thinking professionals that have come together to develop a better approach to medical billing, coding, and consulting. MeBilling knows the value of the tireless work and countless hours our clients put into their medical practices as small business owners, and our goal is to match it with our own. </p>
            <h3>Get in Touch </h3>
            <p>Improve efficiency, streamline processes, and optimize your workflow. MeBilling's medical billing, coding, and practice management services take your revenue and profitability to the next level. Please click the button below to call us for a quick consultation.  </p>
        </div>
    </section>
@endsection
