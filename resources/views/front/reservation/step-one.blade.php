@extends('front.index')
@section('content')

@section('style')
<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

<link rel="stylesheet" href="{{asset('front/form/css/style.css')}}">

@endsection


<body class="sub_page">

    <div class="hero_area">
      <div class="bg-box">
        <img src="{{asset('front/images/hero-bg.jpg')}}" alt="">
      </div>
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
            @include('front.nav')
        </div>
      </header>
      <!-- end header section -->
    </div>


@endsection
@section('script')

<script src="{{asset('front/form/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('front/form/js/jquery.steps.js')}}"></script>

<script src="{{asset('front/form/js/main.js')}}"></script>
@endsection
