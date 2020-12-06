@extends('layouts.app')

@section('title' , 'products')
@section('pageName' , 'products')
@section('content')

<!--======================================
        START INFO AREA 4
======================================-->
<section class="info-box-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">#{{__('main.products')}}</h5>
                    <h2 class="section__title">{{__('main.what_we_offer')}}</h2>
                    <div class="section-divider mx-auto"></div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row info-box-wrap">
            @forelse ($allProducts as $product)
                <div class="col-lg-4 col-sm-6">
                    <div class="info-box-item info-box-item-4">
                        <div class="info-header">
                            <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(300,300)">
                                    <path d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                                </g>
                            </svg>
                            @if ($product->icon !== 'salesforce')
                                <i class="la la-{{$product->icon}} info__svg service-icon"></i>
                            @else
                                <i class="lab la-{{$product->icon}} info__svg service-icon"></i>
                            @endif

                        </div>
                        <div class="info-body">
                            <h3 class="info__title"><a href="{{route('product' , ['slug' => $product->slug])}}">{{$product->title}}</a> </h3>
                            <p class="info__text">
                                {{$product->breif}}
                            </p>
                    </div>
                </div><!-- end info-box-item info-box-item-4 -->
            </div><!-- end col-lg-4 -->
            @empty
            <p class="no-products">{{__('main.no_products_avilable')}}</p>
            @endforelse
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!--======================================
        END INFO AREA
======================================-->
@endsection
