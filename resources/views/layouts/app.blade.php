<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" sizes="16x16" href="{{asset('storage/images/icon.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    @if (App::isLocale('ar'))
    <link rel="stylesheet" href="{{ mix('css/rtl.css') }}">
        
    @endif
    <title>
        @yield('title')
    </title>
</head>
<body>
  {{-- <!-- start loading -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div> --}}
@include('layouts.navbar')

@if (\Request::route()->getName() !== 'home')
    @include('layouts.breadcrumbs')
@endif
@yield('content')
@include('layouts.footer')
<!-- end loading -->
</body>
<script src="{{asset('js/all.js')}}"></script>

</html>
