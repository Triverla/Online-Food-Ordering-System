<!DOCTYPE html>
<html lang="en">

<head>
  <!-- 
    More Templates Visit ==> Free-Template.co
    -->
  <title>Puzzo Restaurant ~ @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="puzzo" />
  <meta name="keywords"
    content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="Free-Template.co" />
  <link href="images/logo3.png" rel="icon">
  <link href="images/logo3.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/bootstrap.mind.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">



  <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
<div id="wrapper">
@include('layouts.shared.headerweb')
<section id="section-home" style="min-height: 500px; background-image: url('images/bg10.jpg'); background-size: cover; background-repeat: no-repeat;">
  @if ($message = Session::get('success'))
  <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <!-- Position it -->
    <div style="position: absolute; bottom: 0; right: 0;">
  
      <!-- Then put toasts within --> 
      <div class="toast" role="alert" aria-live="assertive"  aria-atomic="true" data-delay="10000">
        <div class="toast-header">
        <i class="fa fa-info-o"></i>&nbsp;
          <strong class="mr-auto">Puzzo's Alert</strong>
          <small class="text-muted">{{\Carbon\Carbon::now()->format('h i:a')}}</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
        
              {{ $message }}
        
        </div>
      </div>
     
    </div>
  </div>
  @endif
</section>
@yield('content')

<hr>
@include('layouts.shared.footerweb')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
      stroke="#F96D00" /></svg></div>


<!-- JS FILES -->
<script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.mind.js')}}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>

  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/instafeed.min.js')}}"></script>
<script>
  $('.toast').toast('show');
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>

  <script src="{{asset('js/main.js')}}"></script>
  @yield('js')
</div>
</body>
</html>