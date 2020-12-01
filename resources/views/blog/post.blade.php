@extends('layouts.app')

@section('title' , $post->title)
@section('pageName' , $post->title)

@section('breadcrumb')
<li class="breadcrumb__list-active"><a href="{{route('blog')}}">blog</a></li>
@endsection

@section('content')

<!--======================================
        START CARD AREA
======================================-->
<section class="card-area single-service-area single-blog-area section-padding-top">
    <div class="container">
        <div class="row card-wrap">
            <div class="col-lg-12">
                <div class="card-item">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{loadImage($post->image)}}" class="card-img-top" alt="{{$post->seo}}">
                        </div>
                        <div class="card-body">
                            <div class="post-meta">
                                <span class="mr-2">{{$post->created_at}} </span> •
                            </div>
                            <h3 class="card-title card--title">{{$post->title}}</h3>
                            <div class="section-divider"></div>
                            {!!$post->content!!}
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END CARD AREA
======================================-->
@endsection
