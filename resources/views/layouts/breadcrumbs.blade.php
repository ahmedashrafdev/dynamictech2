<!--================================
         START BREADCRUMB AREA
=================================-->
<section class="breadcrumb-area">
    <div class="breadcrumb-shape breadcrumb-shape1"></div>
    <div class="breadcrumb-shape breadcrumb-shape2"></div>
    <div class="breadcrumb-shape breadcrumb-shape3"></div>
    <div class="breadcrumb-shape breadcrumb-shape4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb__titles">
                        <h2 class="breadcrumb__title">@yield('pageName')</h2>
                    </div>
                    {{-- <ul class="breadcrumb__list">
                        <li class="breadcrumb__list-active"><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                        @yield('breadcrumb')
                        <li>@yield('pageName')</li>
                    </ul> --}}
                </div><!-- breadcrumb-content -->
            </div><!-- col-lg-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- end breadcrumb-area -->
<!--================================
        END BREADCRUMB AREA
=================================-->
