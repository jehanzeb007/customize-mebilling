{{-- <footer class="footer-bg footer-p">
    <div class="overly"><img src="{{asset('assets/images/footer-bg.png')}}" alt="rest"></div>
    <div class="footer-top pb-30" style="background-color: #ECF1FA;">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="flog mb-35">
                            <a href="#"><img src="{{ asset('storage/' . $logoPath ) }}" alt="logo"></a>
                        </div>
                        <div class="footer-text mb-20">
                            <p> {{ $footerText }} </p>
                        </div>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Our Links</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="{{route('home')}}"><i class="fas fa-chevron-right"></i> Home</a></li>
                                <li><a href="{{ route('services.revenu_optimzation')}}"><i class="fas fa-chevron-right"></i> Our Services</a></li>
                                <li><a href="{{ route('billing.physician')}}"><i class="fas fa-chevron-right"></i> Billing Solutions</a></li>
                                <li><a href="{{ route('blog.index') }}"><i class="fas fa-chevron-right"></i> Blog</a></li>
                                <li><a href="{{ route('contact-us.index') }}"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                                <li><a href="{{asset('/about_us')}}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Contact Us</h5>
                        </div>
                        <div class="footer-link">
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span class="d-flex align-items-center">346-616-0008</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span class="d-flex align-items-center"><a href="mailto:info@mebilling.com">info@mebilling.com</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>100 Glenborough Dr,<br>Suite 400 Houston, TX 77067</span>
                                    </li>

                                    <li>
                                    <div class="col-md-12 p-0 newslater-area mb-0">
                                        <h6 class="mb-3">Subscribe To Our Newsletter</h6>
                                        <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater pb-0">
                                            <div class="form-group">
                                                <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required="">
                                           <button type="submit" class="btn ss-btn" id="send2">Subscribe</button>
                                        </div>
                                        <!-- /Form-email -->
                                    </form>
                                </div>
                            </li>
                            </ul>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>&copy; 2025 MeBilling.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}

{!! $footerText !!}
