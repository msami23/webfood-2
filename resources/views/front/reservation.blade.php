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

        {{-- <form action="{{route('admin.reservation.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="first_name">first Name</label>
                <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="first_name" name="first_name" >
                @error('first_name')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="last_name">last Name</label>
                <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="last_name" name="last_name" >
                @error('last_name')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control  @error('name') is-invalid  @enderror" placeholder="email" name="email" >
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="phone" name="phone" >
                @error('phone')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="res_date">Reservation Date</label>
                <input type="datetime-local" class="form-control  @error('name') is-invalid  @enderror" placeholder="res_date" name="res_date" >
                @error('res_date')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="table_id">Table</label>
                <select  class="form-control form-select" id="table_id" name="table_id">
                    <option value="">Select Tables</option>
                    @foreach ($tables as $table)
                    <option value="{{$table->id}}">{{$table->name}} ({{$table->guest_number}} Guests)</option>                    @endforeach
                </select>
                @error('table_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="guest_number">Guest </label>
                <input type="number" class="form-control  @error('name') is-invalid  @enderror" placeholder="guest_number" name="guest_number" value="{{old('guest_number')}}">
                @error('guest_number')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>




            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </div>
          </form> --}}
        <!-- book section -->
        <section class="book_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Book A Table
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form_container">
                            <form action="{{ route('reservations.store') }}" enctype="multipart/form-data"  method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="first Name" name="first_name" >
                                    @error('first_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="last Name" name="last_name" >
                                    @error('last_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <input type="email" class="form-control  @error('name') is-invalid  @enderror" placeholder="Email" name="email" >
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="Phone" name="phone" >
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                  </div>

                                <div class="form-group">
                                    <input type="datetime-local" class="form-control  @error('name') is-invalid  @enderror"
                                        placeholder="res_date" name="res_date" min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                        max="{{ $max_date->format('Y-m-d\TH:i:s') }}">
                                    @error('res_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control  @error('name') is-invalid  @enderror"
                                        placeholder="How many persons?" name="guest_number"
                                        value="{{ $reservation->guest_number ?? '' }}">
                                    @error('guest_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-select" id="table_id" name="table_id">
                                        <option value="">Select Tables</option>
                                        @foreach ($tables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }}
                                                ({{ $table->guest_number }} Guests)</option>
                                        @endforeach
                                    </select>
                                    @error('table_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="btn_box">
                                    <button type="submit">
                                        Book Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map_container ">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end book section -->
    @endsection
