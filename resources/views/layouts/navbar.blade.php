
<!--======================================
        START HEADER AREA
    ======================================-->
    <section class="header-menu-area header-menu-area-4 bg-white">
        {{-- <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-top-info header-left-info">
                            <ul class="info-list contacts">
                            <li><a href="tele:{{loadText('phone')->value}}"><i class="la la-phone"></i>{{loadText('phone')->value}}</a></li>
                                <li><i class="la la-map-marker"></i>{{loadText('address')->value}}</li>
                            </ul>
                        </div><!-- end header-top-info -->
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="header-top-info header-right-info">
                            <ul class="info-list ">
                                <li><a title="{{$seo}}" href="{{loadText('facebook-f')->value}}" target="_blank"><svg class="navbar-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M512 256c0 141.387-114.613 256-256 256S0 397.387 0 256 114.613 0 256 0s256 114.613 256 256zm0 0" fill="#4a7aff"></path><path d="M267.234 511.738C403.406 505.86 512 393.618 512 256c0-.996-.027-1.988-.04-2.984L334.263 75.312l-190 198.594 105.566 105.567-48.676 66.183zm0 0" fill="#0053bf"></path><path d="M334.262 75.313v57.968s-66.555-9.66-66.555 33.278v42.937h60.113l-7.511 65.48h-52.602v170.68h-66.555v-170.68l-56.894-1.074v-64.406h55.82v-49.379s-3.683-73.457 68.703-86.949c30.059-5.605 65.48 2.145 65.48 2.145zm0 0" fill="#fff"></path><path d="M334.262 133.281V75.312s-35.422-7.75-65.48-2.144a101.494 101.494 0 00-13.137 3.348v369.14h12.062v-170.68h52.598l7.515-65.48h-60.113V166.56c0-42.937 66.555-33.278 66.555-33.278zm0 0" fill="#dce1eb"></path></svg></a></li>
                                <li><a title="{{$seo}}" href="{{loadText('linkedin')->value}}" target="_blank"><svg class="navbar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 382 382"><path d="M347.445 0H34.555C15.471 0 0 15.471 0 34.555v312.889C0 366.529 15.471 382 34.555 382h312.889C366.529 382 382 366.529 382 347.444V34.555C382 15.471 366.529 0 347.445 0zM118.207 329.844c0 5.554-4.502 10.056-10.056 10.056H65.345c-5.554 0-10.056-4.502-10.056-10.056V150.403c0-5.554 4.502-10.056 10.056-10.056h42.806c5.554 0 10.056 4.502 10.056 10.056v179.441zM86.748 123.432c-22.459 0-40.666-18.207-40.666-40.666S64.289 42.1 86.748 42.1s40.666 18.207 40.666 40.666-18.206 40.666-40.666 40.666zM341.91 330.654a9.247 9.247 0 01-9.246 9.246H286.73a9.247 9.247 0 01-9.246-9.246v-84.168c0-12.556 3.683-55.021-32.813-55.021-28.309 0-34.051 29.066-35.204 42.11v97.079a9.246 9.246 0 01-9.246 9.246h-44.426a9.247 9.247 0 01-9.246-9.246V149.593a9.247 9.247 0 019.246-9.246h44.426a9.247 9.247 0 019.246 9.246v15.655c10.497-15.753 26.097-27.912 59.312-27.912 73.552 0 73.131 68.716 73.131 106.472v86.846z" fill="#0077b7"/></svg>
                                </a></li>
                                
                                
                                <li>
                                    <a title="{{$seo}}" href="{{route('demo')}}" class="theme-btn">
                                        Request Demo <span class="la la-caret-right"></span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end header-top-info -->
                    </div><!-- end col-lg-5 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end header-top --> --}}
        <div class="header-menu-fluid">
            <div class="container">
                <div class="row align-items-center menu-content menu-content-3">
                    <div class="col-lg-3">
                        <div class="logo-box">
                            
                        <a title="{{$seo}}" href="{{route('home')}}" class="logo" title="{{$seo}}"><img src="{{$logo}}" alt="{{$seo}}"></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-9">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a title="Home" href="{{route('home')}}">{{__('main.home')}}</a>
                                    </li>
                                    <li>
                                        <a title="About" href="{{route('about')}}">{{__('main.about')}}</a>
                                    </li>
                                    <li>
                                        <a title="Products" href="{{route('products')}}">{{__('main.products')}}</a>
                                        <ul class="dropdown-menu-item mega-menu">
                                            @foreach ($products as $item)
                                            <li>
                                                <div class="mega-menu-item">
                                                    <h3 class="mega-menu-item-title">{{$item->title}}</h3>
                                                    <div class="section-divider"></div>
                                                    <ul class="mega-menu-inner">
                                                        @foreach ($modoules as $module)
                                                            <li>
                                                                <a title="{{$module->title}}" href="{{route( 'product' ,['slug' => $module->slug])}}">
                                                                    {{$module->title}}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                      
                                    </li>
                                    {{-- <li>
                                        <a title="team" href="{{route('team')}}">{{__('main.team')}}</a>
                                    </li> --}}
                                    <li>
                                        <a title="clients" href="{{route('clients')}}">{{__('main.clients')}}</a>
                                    </li>
                                    <li>
                                        <a title="contact us" href="{{route('contact')}}">{{__('main.contact')}}</a>
                                    </li>
                                    
                                    <li class="sm-icon"><a title="{{$seo}}" href="{{loadText('facebook-f')->value}}" target="_blank"><svg class="navbar-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M512 256c0 141.387-114.613 256-256 256S0 397.387 0 256 114.613 0 256 0s256 114.613 256 256zm0 0" fill="#4a7aff"></path><path d="M267.234 511.738C403.406 505.86 512 393.618 512 256c0-.996-.027-1.988-.04-2.984L334.263 75.312l-190 198.594 105.566 105.567-48.676 66.183zm0 0" fill="#0053bf"></path><path d="M334.262 75.313v57.968s-66.555-9.66-66.555 33.278v42.937h60.113l-7.511 65.48h-52.602v170.68h-66.555v-170.68l-56.894-1.074v-64.406h55.82v-49.379s-3.683-73.457 68.703-86.949c30.059-5.605 65.48 2.145 65.48 2.145zm0 0" fill="#fff"></path><path d="M334.262 133.281V75.312s-35.422-7.75-65.48-2.144a101.494 101.494 0 00-13.137 3.348v369.14h12.062v-170.68h52.598l7.515-65.48h-60.113V166.56c0-42.937 66.555-33.278 66.555-33.278zm0 0" fill="#dce1eb"></path></svg></a></li>
                                    <li class="sm-icon"><a title="{{$seo}}" href="{{loadText('linkedin')->value}}" target="_blank"><svg class="navbar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 382 382"><path d="M347.445 0H34.555C15.471 0 0 15.471 0 34.555v312.889C0 366.529 15.471 382 34.555 382h312.889C366.529 382 382 366.529 382 347.444V34.555C382 15.471 366.529 0 347.445 0zM118.207 329.844c0 5.554-4.502 10.056-10.056 10.056H65.345c-5.554 0-10.056-4.502-10.056-10.056V150.403c0-5.554 4.502-10.056 10.056-10.056h42.806c5.554 0 10.056 4.502 10.056 10.056v179.441zM86.748 123.432c-22.459 0-40.666-18.207-40.666-40.666S64.289 42.1 86.748 42.1s40.666 18.207 40.666 40.666-18.206 40.666-40.666 40.666zM341.91 330.654a9.247 9.247 0 01-9.246 9.246H286.73a9.247 9.247 0 01-9.246-9.246v-84.168c0-12.556 3.683-55.021-32.813-55.021-28.309 0-34.051 29.066-35.204 42.11v97.079a9.246 9.246 0 01-9.246 9.246h-44.426a9.247 9.247 0 01-9.246-9.246V149.593a9.247 9.247 0 019.246-9.246h44.426a9.247 9.247 0 019.246 9.246v15.655c10.497-15.753 26.097-27.912 59.312-27.912 73.552 0 73.131 68.716 73.131 106.472v86.846z" fill="#0077b7"/></svg>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button">
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div><!-- end logo-right-button -->
                            <div class="side-nav-container">
                                <div class="humburger-menu">
                                    <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
                                </div><!-- end humburger-menu -->
                                <div class="side-menu-wrap">
                                    <ul class="side-menu-ul">
                                        <li class="sidenav__item">
                                        <a title="home" href="{{route('home')}}">{{__('main.home')}}</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a title="about" href="{{route('about')}}">{{__('main.about')}}</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a title="products" href="{{route('products')}}">{{__('main.products')}}</a>
                                        <span class="menu-plus-icon"></span>
                                        <ul class="side-sub-menu">
                                            @foreach ($products as $item)
                                            <li><a href="{{route( 'product' ,['slug' => $item->slug])}}">{{$item->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="sidenav__item">
                                        <a title="clients" href="{{route('clients')}}">{{__('main.clients')}}</a>
                                    </li>
                                    <li class="sidenav__item">
                                        <a title="contact" href="{{route('contact')}}">{{__('main.contact')}}</a>
                                    </li>
                                    </ul>
                                    <div class="side-btn-box">
                                        <a title="{{$seo}}" href="{{route('demo')}}" class="theme-btn">{{__('main.demo')}}<span class="la la-caret-right"></span></a>
                                    </div>
                                </div><!-- end side-menu-wrap -->
                            </div><!-- end side-nav-container -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-9 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-fluid -->
    </section><!-- end header-menu-area -->
    <!--======================================
            END HEADER AREA
    ======================================-->
    