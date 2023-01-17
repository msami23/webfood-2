@extends('front.index')
@section('content')
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

    <!-- about section -->

    <section class="about_section layout_padding">
      <div class="container  ">

        @foreach ($abouts as  $about)
        <div class="row">
          <div class="col-md-6 ">
            <div class="img-box">
                <img src="{{Storage::url($about->image)}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  {{$about->name}}
                </h2>
              </div>
              <p>
               {{$about->description}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

    <!-- end about section -->

@endsection
