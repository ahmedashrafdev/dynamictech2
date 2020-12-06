@extends('admin.layouts.app')

@section('title' , 'Home')


@section('content')
<!--================================
         START SLIDER AREA
=================================-->
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<section class="banner-area home-page-2">
   <h1> <a href="">edit</a></h1>
    <div class="homepage-slide1 banner-item-wrap">
        @foreach($sliders as $index => $slider)
        <div class="single-slide-item single-slide-item{{$index + 1}}">
            <span class="banner-number">0{{$index+1}}</span>
            <div class="slide-item-table">
                <div class="slide-item-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-content">
                                    <div class="section-heading">
                                        <p class="section__meta">{{$slider->tag}}</p>
                                        <h2 class="section__title">{!!$slider->heading!!}</h2>

                                    </div><!-- section-heading -->
                                    <div class="section-description">
                                        <p class="section__desc">
                                            {!!$slider->content!!}
                                        </p>
                                    </div><!-- section-description -->
                                    <div class="btn-box">
                                        <a href="{{route('demo')}}" class="theme-btn">let's start now <span class="la la-caret-right"></span></a>
                                        <a href="{{route('about')}}" class="theme-btn">learn more <span class="la la-caret-right"></span></a>
                                    </div><!-- btn-box -->
                                </div><!-- banner-content -->
                            </div><!-- col-lg-12 -->
                        </div><!-- row -->
                        <div class="row banner-action-wrap">
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- slide-item-tablecell -->
            </div><!-- slide-item-table -->
        </div>
        @endforeach
    </div><!-- end homepage-slides -->
</section><!-- end slider-area -->
<!--================================
        END SLIDER AREA
=================================-->


<!--======================================
        START ABOUT AREA
 ======================================-->
 <section class="about-area about-area3 section--padding">
     <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 realtive">
                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <div class="edit-frame">
                    <div class="col-md-12">
                        <a id="home_about_btn" onclick="toggleInput('home_about')">Edit about us<i class='la la-pen'></i></a>
                    </div>
                </div>
                <div class="about-item">
                    <div class="about-heading section-heading about-right">
                        <div class="section-dot"></div>
                        <h5 class="section__meta rounded-radius">about us</h5>
                    <h2 class="section__title">{{loadText('about_section_title')->value}}</h2>
                    </div><!-- end section-heading -->
                    <div class="section-description">
                        <p class="section__desc editable" id="home_about">
                           {{loadText('home_about')->value}}
                        </p>
                        <form action="{{route('update_text' , ['slug' => 'home_about'])}}" method="POST" id="home_about_form" class="hidden admin-form">
                          
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <i class="la la-pen form-icon"></i>
                                        <textarea class="form-control" type="text" name="value" value="{{loadText('home_about')->value}}" rows="12">{{loadText('home_about')->value}}</textarea>
                                    </div><!-- end form-group -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-0">
                                        <button class="theme-btn" type="submit">Submit <span class="la la-caret-right"></span></button>
                                        <a class="theme-btn" id="home_about_cancel">cancel <span class="la la-caret-right"></span></a>
                                    </div><!-- end form-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                  
                    <a title="{{$seo}}" href="{{route('about')}}" class="theme-btn">know more <span class="la la-caret-right"></span></a>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 editable-actions">
                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <div class="edit-frame">
                    <div class="col-md-12">
                        <a id="home_about_images_btn">Edit Images<i class='la la-pen'></i></a>
                    </div>
                </div>
                <div class="image-box-wrap">
                    <span class="company-logo">NEXT</span>
                    <div class="image-box" id="home_about_images">
                        @foreach (explode("," , loadText('home_about')->images) as $image)
                            <img src="{{loadImage($image)}}" alt="{{$seo}}" class="img__item">
                        @endforeach
                        
                       
                        
                    </div><!-- end about-img-box -->
                    <form action="{{route('update_text_images' , ['slug' => 'home_about'])}}" id="home_about_images_form" method="POST" class="hidden admin-form" enctype="multipart/form-data">
                        
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-10">

                                <input type="file" name="file[]" accept="image/*" multiple="multiple" class="form-control">

                            </div>

                 

                            <div class="col-md-2">
                                <button type="submit" class="theme-btn">Upload</button>
                                <a class="theme-btn" id="home_about_images_cancel">cancel <span class="la la-caret-right"></span></a>
                            </div>

                        </div>

                        <div class="row mt-3">

                            @if ($images = Session::get('files'))

                                @foreach($images as $value)

                                <div class="col-md-2">

                                    <img src="{{ asset('images/'.$value) }}" width="100">

                                </div>

                                @endforeach

                            @endif

                        </div>

                    </form>

                    {{-- <form action="{{route('update_text_images' , ['slug' => 'home_about'])}}" method="POST" class="dropzone" id="home_about_images_form my-awesome-dropzone" enctype="multipart/form-data">
                        @csrf
                            @method('PUT')
                        <div class="row">

                            <div class="col-lg-12">
                            <div class="dropzone-previews"></div> <!-- this is were the previews should be shown. -->
                            </div>
                            <div class="col-lg-12">
                                <button class="theme-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    --}}
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

<div class="section-block"></div>


<!--======================================
        START COUNTER AREA
======================================-->
<section class="funfact-area4 section--padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading pb-3">
                    <div class="section-icon mx-auto"></div>
                    <h5 class="section__meta">funfacts</h5>
                    <h2 class="section__title">{{loadText('facts')->value}}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row counter-wrap mt-5">
            @foreach ($stats as $stat)
            

                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item counter-item-4">
                        <div class="counter-content">
                            {{-- {{dd($stat->icon)}} --}}
                            <span class="{{'counter__icon mx-auto la la-'.$stat->icon}}"></span>
                            <span class="counter counter__numb">{{$stat->value}}</span>
                            <h3 class="counter__title">{{$stat->record}}</h3>
                        </div>
                    </div><!-- end counter-item counter-item-4 -->
                </div><!-- end col-lg-3 col-sm-6 -->
                
            @endforeach
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end counter-area -->
<!--======================================
        END COUNTER AREA
======================================-->


<div class="section-block"></div>



<!--======================================
        START SERVICE AREA
 ======================================-->
 <section class="service-area-2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <div class="section-icon mx-auto"></div><!-- end section-divider -->
                    <p class="section__meta">our products</p>
                    <h2 class="section__title">{!! loadText('our_proucts')->value !!}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row service-wrap">
            <div class="col-lg-4">
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
            <div class="col-lg-7 mr-auto">
                <div class="service-content-wrap">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($products as $index => $product)
                            <div class="tab-pane fade  {{$index === 0 ? 'active show' : ''}}" id="{{$product->slug}}" role="tabpanel" aria-labelledby="{{$product->slug}}">
                                <div class="service-content">
                                    <img class="service__img" src="{{loadImage($product->image)}}" alt="{{$product->seo}}">
                                    <h3 class="service__title">{{$product->title}}</h3>
                                    <p class="service__text">
                                        {{$product->breif}}
                                    </p>
                                    <a title="{{$product->seo}}" href="{{route('product' , ['slug' => $product->slug])}}" class="service__btn">learn more
                                        <span class="la la-caret-right"></span>
                                    </a>
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

<div class="section-block"></div>


<!--======================================
        START WHY CHOOSE US AREA
 ======================================-->
 <section class="about-area about-area2 section-padding why-choose-area2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <div class="section-icon mx-auto"></div>
                    <h5 class="section__meta">why choose us</h5>
                    <h2 class="section__title">{{loadText('why_choose_us')->value}}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row why-choose-wrap">
            <div class="col-lg-7">
                @foreach ($whyChooseUs as $index => $item)
                    
                    <div class="about-item">
                        <span class="choose-number">0{{$index+1}}</span>
                        <ul class="list-items">
                            <li>
                                
                                <span class="{{'la la-'.$item->icon}}"></span>
                                <h3>{{$item->key}}</h3>
                                
                                <p>
                                    {{$item->value}}
                                </p>
                            </li>
                        </ul>
                    </div><!-- end about-item -->
                @endforeach
            </div><!-- end col-lg-8 -->
            <div class="col-lg-5">
                <div class="video-image-gallery">
                <img src="{{loadText('why_choose_us_image')->image}}" alt="{{$seo}}">
                    <div class="preview-video">
                        <a class="video-play-btn" href="{{loadText('why_choose_us_video')->value}}" data-fancybox>
                            <i class="la la-play"></i>
                        </a>
                        <p> Watch Video</p>
                    </div>
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END why coose us AREA
======================================-->




<!--======================================
        START CARD AREA
======================================-->
<section class="card-area blog-area-2 section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <div class="section-icon mx-auto"></div>
                    <h5 class="section__meta">blog posts</h5>
                    <h2 class="section__title">{!!loadText('our_blog')->value!!}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row card-wrap">
            @foreach ($posts as $post)
               @include('partials.post' , ['post' => $post])
            @endforeach
          
        </div><!-- end row -->

        <div class="row car-wap flex justify-center w-full">
            <div class="col-lg-12 text-center">
                <a href="{{route('blog')}}" class="theme-btn">Show all <span class="la la-caret-right"></span></a>

            </div>
        </div>
    </div><!-- end container -->
</section>
<!--======================================
        END CARD AREA
======================================-->

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
@push('js')
<script src={{ asset('js/mine.js') }}></script>
    
@endpush
@endsection