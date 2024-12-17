<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-briefcase"></i>
                    <span class="nav-text">CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.cms.index') }}">Content</a></li>
                    <li><a href="{{ route('admin.cms.addContent') }}"> Add Content</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Blog</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.blog.blogpage') }}">Blog</a></li>
                    <li><a href="{{ route('admin.blog.add-blog') }}">Add Blog</a></li>
                    {{-- <li><a href="{{ route('admin.blog.blog-category') }}">Blog Category</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Slugs and Keywords</span>

                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.slugs-keywords.addslugscontent') }}">Add Content</a></li>

                    <li><a href="{{ route('admin.slugs-keywords.showslugscontent') }}">Content Listing</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Testimonials</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.testimonials.addtestimonials') }}">Add Testimonials</a></li>
                    <li><a href="{{ route('admin.testimonials.showtestimonials') }}">Show Testimonials</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Slider</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.slider.addslider') }}">Add Content</a></li>
                    <li><a href="{{ route('admin.slider.showslider') }}">Show Content Listing</a></li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-compact-disc-1"></i>
                    <span class="nav-text">FAQS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.faqs.index') }}">FAQs</a></li>
                    <li><a href="{{ route('admin.faqs.addFaq') }}">Add FAQs</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Setting</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.settings.settingpagelist') }}">Site Settings</a></li>
                    <li><a href="{{ route('admin.settings.contactlist') }}">Content us</a></li>
                </ul>


                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Profile Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Post Details</a></li>
                </ul>
            </li> --}}


                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Blog</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.dashboard')}}">Blog</a></li>
                    <li><a href="{{route('admin.dashboard')}}">Add Blog</a></li>
                    <li><a href="{{route('admin.dashboard')}}">Blog Category</a></li>
                </ul>
            </li> --}}
                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Testimonials</span>
                </a>
            </li> --}}
                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">FAQS</span>
                </a>
            </li> --}}
                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Contact Us</a></li>
                </ul>
            </li> --}}
                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Contact Us Query</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="">Error 400</a></li>
                            <li><a href="">Error 403</a></li>
                            <li><a href="">Error 404</a></li>
                            <li><a href="">Error 500</a></li>
                            <li><a href="">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li> --}}
        </ul>
        <div class="copyright">
            <p><strong>{{ $siteName }}</strong> © 2024 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Dev & Design</p>
        </div>
    </div>
</div>
