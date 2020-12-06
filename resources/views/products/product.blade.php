@extends('layouts.app')

@section('title' ,$product->title)

@section('pageName' , $product->title)
@section('breadcrumb')
<li class="breadcrumb__list-active"><a href="{{route('products')}}">{{__('main.products')}}</a></li>
@endsection
@section('content')
<!--======================================
        START ABOUT AREA
 ======================================-->
 <section class="about-area about-area3 section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-item">
                    <div class="about-heading section-heading about-right">
                        {{-- <div class="section-dot"></div> --}}
                        {{-- <h5 class="section__meta rounded-radius">about us</h5> --}}
                        <h2 class="section__title product-heading">{{$product->title}}</h2>
                    </div><!-- end section-heading -->
                    <ul class="list-items">
                       {!! $product->content !!}
                    </ul>
                    <a href="{{route('demo')}}" class="theme-btn">{{__('main.demo')}}<span class="la la-caret-right"></span></a>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-img">
                <img src="{{loadImage($product->screenshot)}}" alt="{{$seo}}">
                </div><!-- end faq-img -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

@endsection
