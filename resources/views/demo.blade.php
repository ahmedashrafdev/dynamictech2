@extends('layouts.app')

@section('title' , 'request demo')
@section('pageName' , 'Request demo')

@section('content')

<section class="card-area single-service-area section-padding-top">
    <div class="container">
        <div class="row card-wrap">
            <div class="col-lg-12">
                <div class="contact-form-action">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-user form-icon"></i>
                                    <input required class="form-control" type="text" name="name" placeholder="{{__lang('main.name')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-envelope-o form-icon"></i>
                                    <input required class="form-control" type="email" name="email" placeholder="{{__lang('main.email')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-phone form-icon"></i>
                                    <input required class="form-control" type="text" name="phone" placeholder="{{__lang('main.phone')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-pencil-square-o form-icon"></i>
                                    <input required class="form-control" type="text" name="subject" placeholder="{{__lang('main.subject')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group message-group">
                                    <i class="la la-project-diagram form-icon"></i>
                                 <select required class="form-control">
                                     <option disable selected>Choose Product</option>
                                     @foreach ($products as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                     @endforeach
                                 </select>
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la-building la form-icon"></i>
                                    <input required class="form-control" type="text" name="company" placeholder="{{__lang('main.companu')}}">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message-group">
                                    <i class="la la-pencil form-icon"></i>
                                    <textarea required class="form-control message-control" placeholder="{{__lang('main.message')}}textarea>
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <button class="theme-btn" type="button">{{__lang('main.send_message')}}<span class="la la-caret-right"></span></button>
                                </div><!-- end form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
