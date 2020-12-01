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
                                    <input class="form-control" type="text" name="text" placeholder="Name">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-envelope-o form-icon"></i>
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-phone form-icon"></i>
                                    <input class="form-control" type="text" name="text" placeholder="Number">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-pencil-square-o form-icon"></i>
                                    <input class="form-control" type="text" name="text" placeholder="Subject">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message-group">
                                    <i class="la la-project-diagram form-icon"></i>
                                 <select class="form-control">
                                     <option disable selected>Choose Service</option>
                                     <option value="1">ERP System</option>
                                     <option value="2">Car Rental Management System</option>
                                     <option value="3"> Real Estate Marketing System</option>
                                     <option value="3">POS (Point of sale) system</option>
                                     <option value="3">Restaurant System</option>
                                     <option value="3">HR </option>
                                 </select>
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message-group">
                                    <i class="la la-pencil form-icon"></i>
                                    <textarea class="form-control message-control" placeholder="Message"></textarea>
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <button class="theme-btn" type="button">send message <span class="la la-caret-right"></span></button>
                                </div><!-- end form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
