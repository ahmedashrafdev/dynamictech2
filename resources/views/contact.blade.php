@extends('layouts.app')

@section('title' , 'contact')
@section('pageName' , 'Contact us')

@section('content')

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area">
    <div class="container">
        <div class="row contact-address">
            <div class="col-lg-12">
                <div class="contact-heading">
                    <h3 class="contact__heading">{{__('main.contacts')}}</h3>
                </div>
            </div><!-- end col-lg-12 -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-card">
                    <h5 class="contact__subheding">{{__('main.email')}}</h5>
                    <p class="contact__text">
                        <span><i class="la la-envelope-o"></i>{{loadText('email')->value}}</span>
                    </p>
                    <h5 class="contact__subheding">{{__('main.address')}}</h5>
                    <p class="contact__text">
                        <span><i class="la la-map-marker"></i>{{loadText('address')->value}}</span>
                    </p>
                    <h5 class="contact__subheding">{{__('main.phone')}}</h5>
                    <p class="contact__text">
                        <span><i class="la la-phone"></i> <a href="tel:{{loadText('phone')->value}}">{{loadText('phone')->value}}</a></span>
                    </p>
                    <h5 class="contact__subheding">{{__('main.sales')}}</h5>
                    <p class="contact__text">
                        <span><i class="la la-phone"></i> <a href="tel:{{loadText('sales_phone')->value}}">{{loadText('sales_phone')->value}}</a></span>
                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe src="{{loadText('location')->value}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
            </div><!-- end col-lg-4 col-sm-6 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="section__meta">{{__('main.get_touch')}}</p>
                    <h2 class="section__title">{{loadText('contact_get_in_touch')->value}}</h2>
                </div><!-- end section-heading -->
                <div class="contact-form-action contact-form-item">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-user form-icon"></i>
                                    <input class="form-control" type="text" name="name" placeholder="{{__('main.name')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-envelope-o form-icon"></i>
                                    <input class="form-control" type="email" name="email" placeholder="{{__('main.email')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-phone form-icon"></i>
                                    <input class="form-control" type="text" name="subject" placeholder="{{__('main.number')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-pencil-square form-icon"></i>
                                    <input class="form-control" type="text" name="text" placeholder="{{__('main.subject')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <i class="la la-building form-icon"></i>
                                    <input class="form-control" type="text" name="company" placeholder="{{__('main.company')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message-group">
                                    <i class="la la-pencil form-icon"></i>
                                    <textarea class="form-control message-control" placeholder="{{__('main.msg')}}"></textarea>
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <button class="theme-btn" type="button">{{__('main.send_msg')}} <span class="la la-caret-right"></span></button>
                                </div><!-- end form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col-lg-7 -->
            <div class="col-lg-4 ml-auto">
                <div class="contact-img contact-tilt">
                    <img src="{{loadImage(loadText('contact_image')->value)}}" alt="">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
       
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->

@endsection
