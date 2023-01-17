@extends('front.index')
@section('content')

    <body class="sub_page">

        <div class="hero_area">
            <div class="bg-box">
                <img src="{{ asset('front/images/hero-bg.jpg') }}" alt="">
            </div>
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">
                    @include('front.nav')
                </div>
            </header>
            <!-- end header section -->
        </div>

<p>Thank you very match</p>

@endsection
