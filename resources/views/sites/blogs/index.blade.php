@extends('sites.layout.app')
@section('heading', $heading)
@section('breadcrumb', $breadcrumb)

@section('content')
    <section class="inner-blog pt-5 pb-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mr-5">
                    @foreach($blogs as $index => $blog)
                    <div class="bsingle__post mb-50">
                        <div class="bsingle__post-thumb">
                            @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}"
                                     alt="{{ $blog->name }}" width="50">
                            @else
                                <img src="assets/images/blog_img01.jpg" alt="img">
                            @endif
                        </div>
                        <div class="bsingle__content">
                            <div class="meta-info">
                                <ul>
                                    <li><a href="#"> <i class="far fa-calendar-alt"></i> {{$blog->created_at->format('Y-m-d')}}</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>{{$blog->author_name}}</a></li>
{{--                                    <li><i class="far fa-comments"></i>35 Comments</li>--}}
                                </ul>
                            </div>
                            <h2><a href="blog-details.html">{{$blog->name}}</a></h2>
                            <p>{{strip_tags($blog->description)}}</p>
{{--                            <div class="slider-btn">--}}
{{--                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More--}}
{{--                                    <i class="fas fa-chevron-right"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    @endforeach
                    <div class="pagination-wrap mb-50">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item active"><a href="#">1</a></li>
                                <li class="page-item"><a href="#">2</a></li>
                                <li class="page-item"><a href="#">3</a></li>
                                <li class="page-item"><a href="#">...</a></li>
                                <li class="page-item"><a href="#">10</a></li>
                                <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-5">
                    <aside>
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Search</h4>
                            </div>
                            <div class="slidebar__form">
                                <form action="#">
                                    <input type="text" placeholder="Search your keyword...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Instagram</h4>
                            </div>
                            <ul class="widget-insta-post">
                                <li><a href="#"><img src="img/blog/aside/insta_01.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_02.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_03.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_04.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_05.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_06.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_07.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_08.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_09.jpg" alt="img"></a></li>
                            </ul>
                        </div> --}}
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Follow Us</h4>
                            </div>
                            <div class="widget-social text-center">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-wordpress"></i></a>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Categories</h4>
                            </div>
                            <ul class="cat__list">
                                <li><a href="#">Lifestyle <span>(05)</span></a></li>
                                <li><a href="#">Travel <span>(34)</span></a></li>
                                <li><a href="#">Fashion <span>(89)</span></a></li>
                                <li><a href="#">Music <span>(92)</span></a></li>
                                <li><a href="#">Branding <span>(56)</span></a></li>
                            </ul>
                        </div>
{{--                        <div class="widget mb-40">--}}
{{--                            <div class="widget-title text-center">--}}
{{--                                <h4>Feeds</h4>--}}
{{--                            </div>--}}
{{--                            <div class="widget__post">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <div class="widget__post-thumb">--}}
{{--                                            <img src="img/blog/aside/post_01.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="widget__post-content">--}}
{{--                                            <h6><a href="#">Alonso kelina falao asiano pero</a></h6>--}}
{{--                                            <span><i class="far fa-clock"></i>1 Hours ago</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="widget__post-thumb">--}}
{{--                                            <img src="img/blog/aside/post_02.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="widget__post-content">--}}
{{--                                            <h6><a href="#">It is a long established fact that a reader</a></h6>--}}
{{--                                            <span><i class="far fa-clock"></i>3 Hours ago</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="widget__post-thumb">--}}
{{--                                            <img src="img/blog/aside/post_03.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="widget__post-content">--}}
{{--                                            <h6><a href="#">Many desktop publish packages and web</a></h6>--}}
{{--                                            <span><i class="far fa-clock"></i>5 Hours ago</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="widget__post-thumb">--}}
{{--                                            <img src="img/blog/aside/post_04.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="widget__post-content">--}}
{{--                                            <h6><a href="#">Various versions have evolved over the years</a></h6>--}}
{{--                                            <span><i class="far fa-clock"></i>6 Hours ago</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="widget__post-thumb">--}}
{{--                                            <img src="img/blog/aside/post_05.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="widget__post-content">--}}
{{--                                            <h6><a href="#">Photo booth anim 8-bit PBR 3 wolf moon.</a></h6>--}}
{{--                                            <span><i class="far fa-clock"></i>8 Hours ago</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget mb-40">--}}
{{--                            <div class="widget-title text-center">--}}
{{--                                <h4>Tags</h4>--}}
{{--                            </div>--}}
{{--                            <div class="widget__tag">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Travel</a></li>--}}
{{--                                    <li><a href="#">Lifestyle</a></li>--}}
{{--                                    <li><a href="#">Photo</a></li>--}}
{{--                                    <li><a href="#">Adventures</a></li>--}}
{{--                                    <li><a href="#">Musician</a></li>--}}
{{--                                    <li><a href="#">08</a></li>--}}
{{--                                    <li><a href="#">Travel</a></li>--}}
{{--                                    <li><a href="#">Lifestyle</a></li>--}}
{{--                                    <li><a href="#">Photo</a></li>--}}
{{--                                    <li><a href="#">Adventures</a></li>--}}
{{--                                    <li><a href="#">Musician</a></li>--}}
{{--                                    <li><a href="#">08</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
