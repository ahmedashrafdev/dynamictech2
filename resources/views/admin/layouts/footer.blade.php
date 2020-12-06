
<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area">
    <svg class="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path  fill-opacity="1" d="M0,64L17.1,64C34.3,64,69,64,103,53.3C137.1,43,171,21,206,21.3C240,21,274,43,309,53.3C342.9,64,377,64,411,85.3C445.7,107,480,149,514,154.7C548.6,160,583,128,617,144C651.4,160,686,224,720,213.3C754.3,203,789,117,823,117.3C857.1,117,891,203,926,218.7C960,235,994,181,1029,149.3C1062.9,117,1097,107,1131,101.3C1165.7,96,1200,96,1234,96C1268.6,96,1303,96,1337,80C1371.4,64,1406,32,1423,16L1440,0L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-item">
                    <div class="logo">
                    <a href="{{route('home')}}" class="foot-logo"><img src="{{asset('storage/images/logo.png')}}" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">
                        {{loadText('footer_about')->value}}
                    </p>
                    <div class="footer-contact">
                        <p class="contact__text">
                            <span class="contact__text-title font-weight-medium text-black-50">Address:</span> {{loadText('address')->value}} <br>
                            <span class="contact__text-title font-weight-medium text-black-50">Phone:</span> {{loadText('phone')->value}} <br>
                            <span class="contact__text-title font-weight-medium text-black-50">Email:</span>
                        <a href="mailto:{{loadText('email')->value}}">{{loadText('email')->value}}</a>
                        </p>
                    </div>
                    <ul class="social-profile pt-4">
                        @foreach ($socialMedia as $link)
                    <li><a target="_blank" href="{{$link->value}}"><i class="lab la-{{$link->key}}"></i></a></li>
                        @endforeach
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">Company</h4>
                    <div class="section-divider"></div>
                    <ul class="user-links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">about</a></li>
                        <li><a href="{{route('products')}}">products</a></li>
                        <li><a href="{{route('blog')}}">blog</a></li>
                        {{-- <li><a href="{{route('products' , ['type' => 'verticals'])}}">vertical solutions</a></li> --}}
                        <li><a href="{{route('clients')}}">our clients</a></li>
                        <li><a href="{{route('contact')}}">contact</a></li>
                        <li><a href="{{route('demo')}}">Request Demo</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-2 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">Products</h4>
                    <div class="section-divider"></div>
                    <ul class="user-links">
                        @foreach ($products as $product)
                    <li><a href="{{route('product' , ['slug' => $product->slug])}}">{{$product->title}}</a></li>
                        @endforeach
                       
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-4 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">Testemonials</h4>
                    <div class="section-divider"></div>
                    <div class="contact-form-action">
                        <div class="testimonial-item-wrap-2 testimonial-carousel text-left">
                            @foreach ($testemonials as $testemonial)
                                <div class="testimonial-item">
                                    <div class="testimonial-desc">
                                        <p class="testimonial__desc">
                                           {{$testemonial->content}}
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <img src="{{loadImage($testemonial->image)}}" alt="{{$testemonial->seo}}">
                                        <div class="author-detail">
                                        <h3 class="author__title">{{$testemonial->name}}</h3>
                                            <span class="author__meta">{{$testemonial->title}}</span>
                                            <span class="author__rating">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                            </span>
                                        </div>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-item --> 
                            @endforeach
                            <div class="testimonial-item">
                                <div class="testimonial-desc">
                                    <p class="testimonial__desc">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                        spring which I enjoy with my whole heart.
                                    </p>
                                </div><!-- end testimonial__desc -->
                                <div class="testimonial-author">
                                    <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/team2.jpg" alt="small-avatar">
                                    <div class="author-detail">
                                        <h3 class="author__title">Josh Purdila</h3>
                                        <span class="author__meta">Product Manager</span>
                                        <span class="author__rating">
                                             <i class="la la-star"></i>
                                             <i class="la la-star"></i>
                                             <i class="la la-star"></i>
                                             <i class="la la-star"></i>
                                             <i class="la la-star"></i>
                                        </span>
                                    </div>
                                </div><!-- end testimonial-author -->
                            </div><!-- end testimonial-item -->
                        </div><!-- end testimonial-wrap -->
                    </div><!-- end contact-form-action -->
                </div><!-- end footer-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right">
                    <p class="copy__desc">
                        &copy; All Copyrights Reserved To <a href="https://esolve-eg.com" target="_blank">Esolve.</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->
