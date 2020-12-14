@extends('layouts.app')

@section('title' , 'products')
@section('pageName' , 'products')
@section('content')

<!--======================================
        START SERVICE AREA
 ======================================-->
 <section class="service-area-2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="section__title">{!! loadText('our_proucts')->value !!}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row service-wrap">
            <div class="col-lg-12">
                <div class="service-nav">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach ($products as $index =>  $product)
                            <li class="nav-item">
                                <a title="{{$product->seo}}" class="nav-link {{$index == 0 ? 'active' : ''}}" id="nav-{{$product->slug}}" data-toggle="tab" href="#{{$product->slug}}" role="tab" aria-controls="{{$product->slug}}"
                                    aria-selected="true">
                                    <i class="las la-{{$product->icon}}"></i>    
                                    <span class="nav-link__text">{{$product->title}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- end service-nav -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-12 mr-auto">
                <div class="service-content-wrap">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($products as $index => $product)
                            <div class="tab-pane fade  {{$index === 0 ? 'active show' : ''}}" id="{{$product->slug}}" role="tabpanel" aria-labelledby="{{$product->slug}}">
                                <div class="service-content">
                                    {{-- <img class="service__img" src="{{loadImage($product->image)}}" alt="{{$product->seo}}"> --}}
                                    <h3 class="service__title">{{$product->title}}</h3>
                                    <p class="service__text">
                                        {{$product->breif}}
                                    </p>
                                    <div class="row feature-content-wrap">
                                        @foreach ($modoules as $modoule)
                                        <div class="col-lg-4 col-sm-6">
                                            <a href="{{route('product' , ['slug' => $modoule->slug])}}">
                                            <div class="feature-item feature-item-2 feature-box-color">
                                                <div class="hover-overlay"></div>
                                                <div class="feature__icon">
                                                    @if ($modoule->icon === 'salesforce')
                                                    <i class="lab la-{{$modoule->icon}}"></i>
                                                    @else
                                                    <i class="la la-{{$modoule->icon}}"></i>
                                                    @endif
                                                </div>
                                                <h3 class="feature__title"><a href="{{route('product' , ['slug' => $modoule->slug])}}">{{$modoule->title}}</a></h3>
                                            </div><!-- end feature-item -->
                                        </a>
                                        </div><!-- end col-lg-3 -->
                                        
                                            
                                        @endforeach
                                    </div><!-- end row -->
                                    {{-- <a title="{{$product->seo}}" href="{{route('product' , ['slug' => $product->slug])}}" class="service__btn">learn more
                                        <span class="la la-caret-right"></span>
                                    </a> --}}
                                </div>
                            </div>
                        @endforeach
                      
                    </div>
                </div>
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end service-area -->
<!--======================================
        END SERVICE AREA
======================================-->
@endsection
