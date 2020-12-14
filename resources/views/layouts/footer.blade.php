
<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area">
    <svg class="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path  fill-opacity="1" d="M0,64L17.1,64C34.3,64,69,64,103,53.3C137.1,43,171,21,206,21.3C240,21,274,43,309,53.3C342.9,64,377,64,411,85.3C445.7,107,480,149,514,154.7C548.6,160,583,128,617,144C651.4,160,686,224,720,213.3C754.3,203,789,117,823,117.3C857.1,117,891,203,926,218.7C960,235,994,181,1029,149.3C1062.9,117,1097,107,1131,101.3C1165.7,96,1200,96,1234,96C1268.6,96,1303,96,1337,80C1371.4,64,1406,32,1423,16L1440,0L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-item">
                    <div class="logo">
                    <a href="{{route('home')}}" class="foot-logo"><img src="{{asset('storage/images/logo.png')}}" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">
                        {{loadText('footer_about')->value}}
                    </p>
                    <div class="footer-contact">
                        <p class="contact__text">
                            <i style="margin-right:10px" class="la la-map-marker"></i><span class="contact__text-title font-weight-medium text-black-50">{{__('main.address')}}:</span>{{loadText('address')->value}} <br>
                            <i style="margin-right:10px" class="la la-phone"></i><span class="contact__text-title font-weight-medium text-black-50">{{__('main.phone')}}:</span> {{loadText('phone')->value}} <br>
                            <i style="margin-right:10px" class="la la-phone"></i><span class="contact__text-title font-weight-medium text-black-50">{{__('main.sales')}}:</span> {{loadText('sales_phone')->value}} <br>
                            <i style="margin-right:10px" class="la la-envelope"></i><span class="contact__text-title font-weight-medium text-black-50">{{__('main.email')}}:</span>
                        <a href="mailto:{{loadText('email')->value}}">{{loadText('email')->value}}</a>
                        </p>
                    </div>
                    <ul class="social-profile pt-4">
                        <li><a title="{{$seo}}" href="{{loadText('facebook-f')->value}}" target="_blank"><svg class="navbar-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M512 256c0 141.387-114.613 256-256 256S0 397.387 0 256 114.613 0 256 0s256 114.613 256 256zm0 0" fill="#4a7aff"></path><path d="M267.234 511.738C403.406 505.86 512 393.618 512 256c0-.996-.027-1.988-.04-2.984L334.263 75.312l-190 198.594 105.566 105.567-48.676 66.183zm0 0" fill="#0053bf"></path><path d="M334.262 75.313v57.968s-66.555-9.66-66.555 33.278v42.937h60.113l-7.511 65.48h-52.602v170.68h-66.555v-170.68l-56.894-1.074v-64.406h55.82v-49.379s-3.683-73.457 68.703-86.949c30.059-5.605 65.48 2.145 65.48 2.145zm0 0" fill="#fff"></path><path d="M334.262 133.281V75.312s-35.422-7.75-65.48-2.144a101.494 101.494 0 00-13.137 3.348v369.14h12.062v-170.68h52.598l7.515-65.48h-60.113V166.56c0-42.937 66.555-33.278 66.555-33.278zm0 0" fill="#dce1eb"></path></svg></a></li>
                        <li><a title="{{$seo}}" href="{{loadText('linkedin')->value}}" target="_blank"><svg class="navbar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 382 382"><path d="M347.445 0H34.555C15.471 0 0 15.471 0 34.555v312.889C0 366.529 15.471 382 34.555 382h312.889C366.529 382 382 366.529 382 347.444V34.555C382 15.471 366.529 0 347.445 0zM118.207 329.844c0 5.554-4.502 10.056-10.056 10.056H65.345c-5.554 0-10.056-4.502-10.056-10.056V150.403c0-5.554 4.502-10.056 10.056-10.056h42.806c5.554 0 10.056 4.502 10.056 10.056v179.441zM86.748 123.432c-22.459 0-40.666-18.207-40.666-40.666S64.289 42.1 86.748 42.1s40.666 18.207 40.666 40.666-18.206 40.666-40.666 40.666zM341.91 330.654a9.247 9.247 0 01-9.246 9.246H286.73a9.247 9.247 0 01-9.246-9.246v-84.168c0-12.556 3.683-55.021-32.813-55.021-28.309 0-34.051 29.066-35.204 42.11v97.079a9.246 9.246 0 01-9.246 9.246h-44.426a9.247 9.247 0 01-9.246-9.246V149.593a9.247 9.247 0 019.246-9.246h44.426a9.247 9.247 0 019.246 9.246v15.655c10.497-15.753 26.097-27.912 59.312-27.912 73.552 0 73.131 68.716 73.131 106.472v86.846z" fill="#0077b7"/></svg>
                        </a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">{{__('main.company')}}</h4>
                    <div class="section-divider"></div>
                    <ul class="user-links">
                        <li><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                        <li><a href="{{route('about')}}">{{__('main.about')}}</a></li>
                        <li><a href="{{route('products')}}">{{__('main.products')}}</a></li>
                        <li><a href="{{route('blog')}}">{{__('main.blog')}}</a></li>
                        {{-- <li><a href="{{route('products' , ['type' => 'verticals'])}}">vertical solutions</a></li> --}}
                        <li><a href="{{route('clients')}}">{{__('main.clients')}}</a></li>
                        <li><a href="{{route('contact')}}">{{__('main.contact')}}</a></li>
                        <li><a href="{{route('demo')}}">{{__('main.demo')}}</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">{{__('main.products')}}</h4>
                    <div class="section-divider"></div>
                    <ul class="user-links">
                        @foreach ($products as $product)
                    <li><a href="{{route('product' , ['slug' => $product->slug])}}">{{$product->title}}</a></li>
                        @endforeach
                       
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-2 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right">
                    <p class="copy__desc">
                        &copy; {{__('main.copyrights')}} <a href="https://esolve-eg.com" target="_blank">Esolve.</a>
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
