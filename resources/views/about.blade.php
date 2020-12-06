@extends('layouts.app')
@section('title' , 'about')
@section('pageName' , 'About us')
@section('content')

<!--======================================
        START ABOUT AREA
 ======================================-->
 <section class="about-area about-area2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-item about-item-left">
                    <ul class="list-items">
                        <li>
                            <span class="la la-eye"></span>
                            <h3>{{__('main.vision')}}</h3>
                            <p>
                                {{loadText('vision')->value}}
                            </p>
                        </li>
                        <li>
                            <span class="la la-dot-circle"></span>
                            <h3>Our Mission</h3>
                            <p>
                                {{loadText('mission')->value}}
                            </p>
                        </li>
                        
                    </ul>
                    <div class="video-image-gallery m-t-5">
                        <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/video-img.jpg" alt="video-img">
                        <div class="preview-video">
                            <a class="video-play-btn" href="https://www.youtube.com/watch?v=NWxMqiFq0Yo" data-fancybox="">
                                <span class="la la-play"></span>
                            </a>
                            <p>{{__('main.mission')}}</p>
                        </div>
                    </div>
                </div><!-- end about-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-item about-item-right">
                    <div class="section-heading about-right">
                        <h5 class="section__meta">#{{__('main.about')}}</h5>
                        <h2 class="section__title">{{loadText('about_section')->value}}</h2>
                        <div class="section-divider"></div>
                    </div><!-- end section-heading -->
                    <div class="section-description">
                        <p class="section__desc">
                           {{{loadText('about')->value}}} 
                        </p>
                    {{-- <div class="video-image-gallery">
                        <img src="http://techydevs.com/demos/themes/html/demo/prizon/images/video-img.jpg" alt="video-img">
                        <div class="preview-video">
                            <a class="video-play-btn" href="https://www.youtube.com/watch?v=NWxMqiFq0Yo" data-fancybox>
                                <span class="la la-play"></span>
                            </a>
                            <p>Watch Preview</p>
                        </div>
                    </div> --}}
                </div><!-- end about-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->

<!--======================================
        END ABOUT AREA
======================================-->

<!-- ================================
       START FAQ AREA
================================= -->
<section class="accordion-area faq-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <div class="section-icon mx-auto"></div>
                    <h5 class="section__meta">{{__('main.documintation')}}</h5>
                    <h2 class="section__title">{{__('main.faq')}}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="accordion-wrap">
                    <div class="accordion accordion-3" id="accordionExample3">
                        @foreach ($faqs as $faq)   
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            <span class="la la-gear"></span> {{$faq->key}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                                    <div class="card-body">
                                       {{$faq->value}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!-- end accordion -->
                </div><!-- end accordion-wrap -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="faq-img">
                <img src="{{loadImage(loadText('faq_image')->value)}}" alt="">
                </div><!-- end faq-img -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
       END FAQ AREA
================================= -->


<div class="section-block"></div>

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo">
                    @foreach ($clients as $client)
                    <div class="client-logo-item">
                        <div class="client-logo-item-div">
                    
                        <img src="{{loadImage($client->logo)}}" alt="{{$client->seo}}">
                        </div>
                    </div><!-- end client-logo-item -->
                        
                    @endforeach
                </div><!-- end client-logo -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!--======================================
        START GET STARTED AREA
======================================-->
<section class="get-start-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="get-start-box">
                    <div class="col-lg-8">
                        <div class="section-heading">
                            <h5 class="section__meta">#{{__('main.get_in_touch')}}</h5>
                            <h2 class="section__title">{{__('main.any_inquires')}}</h2>
                            <p class="section__desc">{{__('main.contact_us_without_hesitate')}}</p>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="button-shared text-right">
                            <a href="{{route('contact')}}" class="theme-btn">
                                {{__('main.contact_us')}} <span class="la la-caret-right"></span>
                            </a>
                        </div><!-- end button-shared -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end get-start-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end get-start-area2 -->
<!--======================================
        END GET STARTED AREA
======================================-->

@endsection