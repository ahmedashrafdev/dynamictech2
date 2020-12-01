@extends('layouts.app')

@section('title' , $parent->title)

@section('pageName' , $parent->title)
@section('breadcrumb')
<li class="breadcrumb__list-active"><a href="{{route('products')}}">products</a></li>
@endsection
@section('content')
<!--======================================
        START FEATURE AREA
 ======================================-->
 <section class="text-center section--padding">
    <div class="container">
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
    </div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
        END FEATURE AREA
======================================-->


@endsection
