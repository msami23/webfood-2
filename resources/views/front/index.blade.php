<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('front/images/favicon.png')}}" type="">

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.min.css')}}" />
  <!-- nice select  -->
  <link rel="stylesheet" href="{{asset('front/css/nice-select.min.css')}}" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" />
  @yield('style')

</head>


@yield('content')








    <footer class="footer_section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-col">
              <div class="footer_contact">
                <h4>
                  Contact Us
                </h4>
                <div class="contact_link_box">
                  <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                      Location
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      Call +01 1234567890
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      demo@gmail.com
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <div class="footer_detail">
                <a href="" class="footer-logo">
                  Feane
                </a>
                <p>
                  Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                </p>
                <div class="footer_social">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <h4>
                Opening Hours
              </h4>
              <p>
                Everyday
              </p>
              <p>
                10.00 Am -10.00 Pm
              </p>
            </div>
          </div>
          <div class="footer-info">
            <p>
              &copy; <span id="displayYear"></span> All Rights Reserved By
              <a href="https://html.design/"></a><br><br>
              &copy; <span id="displayYear"></span> Mohammed Alashqur

            </p>
          </div>
        </div>
      </footer>
      <!-- footer section -->

      <!-- jQery -->
      <script src="{{asset('front/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('front/js/popper.min.js')}}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <!-- bootstrap js -->
      <script src="{{asset('front/js/bootstrap.js')}}"></script>
      <!-- owl slider -->
      <script src="{{asset('front/js/owl.carousel.min.js')}}">
      </script>
      <!-- isotope js -->
      <script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
      <!-- nice select -->
      <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('front/js/custom.js')}}"></script>
      <!-- Google Map -->
      <script src="{{asset('front/js/js.js')}}">
      </script>
    @yield('script')

      <!-- End Google Map -->

    </body>

    </html>
