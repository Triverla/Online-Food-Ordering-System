<!DOCTYPE html>
<html lang="en">

<head>
  <!-- 
    More Templates Visit ==> Free-Template.co
    -->
  <title>@yield('title') ~ Puzzo </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="puzzo" />
  <meta name="keywords"
    content="food, drink, restaurant, fastfood, pizza, cake, jollof, bread, shakes" />
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


<style>
  .pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.pace-inactive {
  display: none;
}

.pace .pace-progress {
  background: #ffa74f;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 2px;
}

.pace .pace-progress-inner {
  display: block;
  position: absolute;
  right: 0px;
  width: 100px;
  height: 100%;
  box-shadow: 0 0 10px #ffa74f, 0 0 5px #ffa74f;
  opacity: 1.0;
  -webkit-transform: rotate(3deg) translate(0px, -4px);
  -moz-transform: rotate(3deg) translate(0px, -4px);
  -ms-transform: rotate(3deg) translate(0px, -4px);
  -o-transform: rotate(3deg) translate(0px, -4px);
  transform: rotate(3deg) translate(0px, -4px);
}

.pace .pace-activity {
  display: block;
  position: fixed;
  z-index: 2000;
  top: 15px;
  right: 15px;
  width: 14px;
  height: 14px;
  border: solid 2px transparent;
  border-top-color: #ffa74f;
  border-left-color: #ffa74f;
  border-radius: 10px;
  -webkit-animation: pace-spinner 400ms linear infinite;
  -moz-animation: pace-spinner 400ms linear infinite;
  -ms-animation: pace-spinner 400ms linear infinite;
  -o-animation: pace-spinner 400ms linear infinite;
  animation: pace-spinner 400ms linear infinite;
}

@-webkit-keyframes pace-spinner {
  0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
}
@-moz-keyframes pace-spinner {
  0% { -moz-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -moz-transform: rotate(360deg); transform: rotate(360deg); }
}
@-o-keyframes pace-spinner {
  0% { -o-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -o-transform: rotate(360deg); transform: rotate(360deg); }
}
@-ms-keyframes pace-spinner {
  0% { -ms-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -ms-transform: rotate(360deg); transform: rotate(360deg); }
}
@keyframes pace-spinner {
  0% { transform: rotate(0deg); transform: rotate(0deg); }
  100% { transform: rotate(360deg); transform: rotate(360deg); }
}

  </style>
  <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
<div id="wrapper">
@include('layouts.shared.headerweb')
<section id="section-home" style="min-height: 500px; background-image: url('{{asset('images/bg10.jpg')}}'); background-size: cover; background-repeat: no-repeat;">
</section>
@if (Session::has('alert.config'))
    @if(config('sweetalert.animation.enable'))
        <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
    @endif
    <script src="{{ $cdn?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
    <script>
        Swal.fire({!! Session::pull('alert.config') !!});
    </script>
@endif

@yield('content')

<hr>
@include('layouts.shared.footerweb')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
      stroke="#F96D00" /></svg></div>


<!-- JS FILES -->
<script>
  const BASE_URL = "{{ url('/') }}";
  const REQUEST_URL = "<?=Request::url()?>";
  let CSRF = "{{ csrf_token() }}";
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/pace.min.js')}}"></script>
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
  $(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('.toast').toast('show');
})
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>

  <script src="{{asset('js/main.js')}}"></script>
  @yield('js')
</div>
</body>
</html>