@extends('layouts.app')
@section('title' , 'about')
@section('pageName' , 'About us')
@section('content')
<!--================================
        END TEAM AREA
=================================-->
<section class="team-area team-member-area2 bg-gray section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="section-icon mx-auto"></div>
                    <h5 class="section__meta">{{__('main.expert_people')}}</h5>
                    <h2 class="section__title">{{__('main.our_team')}}</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row team-content-wrap">
            @foreach ($team as $member)
                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{loadImage($member->image)}}" alt="">
                        </div>
                        <div class="team-titles">
                        <h3 class="team__title"><a href="">{{$member->name}}</a></h3>
                        <p class="team__meta">{{$member->title}}</p>
                            <ul class="team__profile">
                                <li><a href="{$member->twitter}}" target="_blank"><i class="la la-twitter"></i></a></li>
                            <li><a href="{{$member->fb}}" target="_blank"><i class="la la-facebook"></i></a></li>
                               
                            </ul>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->
                
            @endforeach
            
        </div><!-- end row -->
      
    </div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
        END TEAM AREA
======================================-->

@endsection