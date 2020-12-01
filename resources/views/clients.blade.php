@extends('layouts.app')

@section('title' , 'clients')
@section('pageName' , 'Clients')

@section('content')
<!--======================================
        START COUNTER AREA
======================================-->
<section class="our-clients section--padding text-center">
    <div class="container">
        <div class="row counter-wrap mt-5">
            @foreach ($clients as $client)
            <div class="col-lg-4 col-sm-6">
                <div class="client-logo-item-div">
                <img src="{{$client->logo}}" alt="{{$client->seo}}">
                </div>
               
            </div><!-- end col-lg-4 col-sm-6 -->
            @endforeach
        </div><!-- end row -->
        <div class="row card-wrap navs">
            {{ $clients->links() }}
        </div>
    </div><!-- end container -->
</section><!-- end counter-area -->
<!--======================================
        END COUNTER AREA
======================================-->

@endsection