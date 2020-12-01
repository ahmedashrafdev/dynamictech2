@extends('layouts.app')

@section('title' , 'Blog')
@section('pageName' , 'Blog')

@section('content')

<!--======================================
        START CARD AREA
======================================-->
<section class="card-area blog-area-2 section--padding">
    <div class="container">
        <div class="row card-wrap">
            @foreach ($posts as $post)
            @include('partials.post' , ['post' => $post])
         @endforeach
        </div><!-- end row --> 
        <div class="row card-wrap navs">
            {{ $posts->links() }}
        </div>
    </div><!-- end container -->
</section>
<!--======================================
        END CARD AREA
======================================-->

    
@endsection