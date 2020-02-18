<!DOCTYPE html>
<html lang="en">

<head>
  <!-- 
    More Templates Visit ==> Free-Template.co
    -->
  <title>Puzzo Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="puzzo" />
  <meta name="keywords"
    content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="Free-Template.co" />
  <link href="images/logo3.png" rel="icon">
  <link href="images/logo3.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">



  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><a href="index.html"><img src="images/logo.png" alt="" title=""
            width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">GALLERY</a></li>
            <li class="nav-item"><a href="{{url('menu#menu')}}" class="nav-link">MENU</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">CONTACT</a></li>
            @guest
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">LOGIN</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">REGISTER</a></li>
            @else
            @if(auth()->user()->is_admin == 1)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               ADMIN
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('cat.index')}}">Categories</a>
                <a class="dropdown-item" href="{{url('food')}}">Products</a>
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('order.index')}}">Manage Orders</a>
              <a class="dropdown-item" href="{{route('order.index')}}">View Payments</a>
              </div>
            </li>
            @endif
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('account')}}">Account</a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
            @endguest
            <li class="nav-item"><a class="btn btn-primary" href="tel: 2348112233689" class="nav-link"><i
                  class="fa fa-phone"></i> +2348112233689</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <!-- END nav -->

  <!--Carousel Wrapper-->
  <section id="section-home" style="min-height: 500px; background-size: cover; background-repeat: no-repeat;">
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox" style="width: 100%; height: 800px;">
        <div class="carousel-item active" style="height: 100%; background-size: cover; background-repeat: no-repeat;">
          <div class="view">
            <img class="block img-responsive bg-image" src="images/bg1.JPG" alt="First slide" style="height: 800px;">
            <div class="mask rgba-black-light"></div>
          </div>
          <div class=" row align-items-center justify-content-center text-center ftco-vh-100 carousel-caption">
            <h1 class="slide"><img src="images/logo3.png" alt="" title="" width="120px"><br><strong>Welcome to PUZZO's
                Restaurant</strong></h1>
          </div>
        </div>
        <div class="carousel-item" style="height: 100%; background-size: cover; background-repeat: no-repeat;">
          <!--Mask color-->
          <div class="view">
            <img class="d-block img-responsive bg-image " src="images/bg13.JPG" alt="Second slide"
              style="height: 800px;">
            <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption row align-items-center justify-content-center text-center ftco-vh-100">
            <h2 class="slide" style="font-weight:bold;"><img src="images/logo3.png" alt="" title=""
                width="120px"><br>Amazing Food, People, Drinks.</h2>
          </div>
        </div>
        <div class="carousel-item" style="height: 100%; background-size: cover; background-repeat: no-repeat;">
          <!--Mask color-->
          <div class="view">
            <img class="d-block img-responsive bg-image " src="images/bg2.JPG" alt="Second slide"
              style="height: 800px;">
            <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption row align-items-center justify-content-center text-center ftco-vh-100">

            <h2 class="slide" style="font-weight:bold;"><img src="images/logo3.png" alt="" title="" width="120px"><br>An
              amazing Environment.</h2>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
  </section>
  <!--/.Carousel Wrapper-->
  <!-- END section -->

  <section class="ftco-section" id="section-about">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ftco-animate mb-5">
          <h4 class="ftco-sub-title">Welcome to</h4>
          <h2 class="ftco-primary-title display-4">PUZZO's</h2>
          <p>Puzzo’s Restaurant is the perfect blend of elevated outdoor area smoking shisha with indoor intimate dining
            experiences accompanied by finest fusion cuisine.
            We provide the perfect ambiance good times with friends, romantic dinner settings and closing business deals
            in our executive private lounges. </p>

          <p class="mb-4">Puzzo's offers the finest fusion kitchen in the capital with Indian, Mediterranean and African
            dishes represented. Our drinks menu is unmatched with cocktails, smoothies and all beverages your heart
            desires. Amazing food, amazing people, amazing drinks in an amazing place. Welcome to Puzzo's Restaurant.
          </p>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
          <img src="images/bg4.JPG" alt="puzzo">
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->


  <section  class="ftco-cover" style="background-image: url(images/val.jpg);"id="section-home">
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Dine, Dance & Love at Puzzo’s Restaurant this Season!</h4>
        <p style="color: black">Couples Package starting from <span style="color: red"><b>N14,999</b></span> Inclusive of:</p>
        <ul style="color: black">
<li>A 3 Course Meal</li>
<li>Free Glasses of Wine and Bottled Water</li>
<li>A Valentine Cake.</li>
<li>Fresh Rose for the Lady.</li>
<li>Access to a Valentine Photo Booth & Picture taken by a professional photographer!</li>
<li>All Couples are automatically eligible for a raffle draw to win</li>
<li>A Romantic Staycation at Caledonian Suites</li>
<li>A Massage Session or Manicure or Pedicure Session</li>
<li>A lovely Valentine themed hamper!</li>
        </ul>
        <p style="color: black" class="text-center"><i>Call <a style="color: red;" href="tel://+2348112233689" class="btn-link">+2348112233689</a> for Reservation<br>
          Ts & Cs Apply!</i></p>

      </div>
      <div class="col-md-4">
        <h4>Puzzo’s Restaurant Breakfast Package.</h4>
        <p style="color: black">Days: Mondays – Saturdays</p>
        <p style="color: black">Price: &#x20A6;3500 Naira Only</p>
        <p style="color: black">We offer you a wide variation of Nigerian & Continental Breakfast on our A la carte
          Menu.
          From Plantains, Yams, Fresh Fruit Platters, Cereals, Fresh Fruit Juices, Eggs, Bacon , Freshly made
          scrumptious pastries(bread slices,cakes,croissant) and lots more! We offer the best breakfast in Abuja with
          unbeatable prices too
          You can call to place your Orders and have your meals delivered to your homes or offices or call to pick up
          your freshly made meals.</p>

      </div>
      <div class="col-md-4" style="background-image: url(images/val1.jpg);">
        <h4>Sunday Brunch at Puzzo’s Restaurant!</h4>
        <p style="color: black">Time: 10a.m -3.p.m</p>
        <p style="color: black">Price : &#x20A6;5000</p>
        <p style="color: black">Our Sunday Brunch offers you the best way to relax and enjoy beautiful moments with
          family and
          friends with great music, breath-taking views and the tastiest variety of meals!
          Enjoy an endless flow of the best Nigerian and Continental Meals all through your visit.</p>

        <h4>Terms and Conditions Apply</h4>
        <ul style="color: black">
          <li>Diners are not allowed to take out after eating.</li>
          <li>Take Away Options are only available on management discretion</li>
          <li>Stated prices are for one person only</li>
        </ul>
      </div>
      <div class="col-md-12">
      <p style="color: black" class="text-center"><i>
        Valentine’s Package.
        Love is in the air!!
</i>
      </p>
    </div>
    </div>
</div>
  </section>


  <section class="ftco-section bg-light" id="section-offer">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center mb-5 ftco-animate">
          <h4 class="ftco-sub-title"></h4>
          <h2 class="display-4">Our Gallery</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Come dine with us</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image0.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/image0.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image1.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/image1.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image2.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/image2.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image3.jpg" class="ftco-thumbnail image-popup">
            <img src="images/image3.jpg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image4.jpg" class="ftco-thumbnail image-popup">
            <img src="images/image4.jpg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image5.jpg" class="ftco-thumbnail image-popup">
            <img src="images/image5.jpg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/image6.jpg" class="ftco-thumbnail image-popup">
            <img src="images/image6.jpg" alt="puzzo" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4 ftco-animate">
          <a href="images/bg1.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg1.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4 ftco-animate">
          <a href="images/bg10.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg10.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg11.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg11.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4 ftco-animate">
          <a href="images/bg12.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg12.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg13.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg13.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg2.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg2.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg3.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg3.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg4.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg4.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg5.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg5.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg6.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg6.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg7.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg7.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/customers.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/customers.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg8.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg8.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/puzzo3.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/puzzo3.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/bg9.JPG" class="ftco-thumbnail image-popup">
            <img src="images/bg9.JPG" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/front.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/front.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/puzzo1.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/puzzo1.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/puzzo2.jpeg" class="ftco-thumbnail image-popup">
            <img src="images/puzzo2.jpeg" alt="puzzo" class="img-fluid">
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="ftco-section" id="section-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 ftco-animate">
          <h2 class="display-4">MENU</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Our delicaces just for you</p>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">

          <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
            <!-- <li class="nav-item ftco-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Signature Dishes</a>
              </li> -->
            <li class="nav-item ftco-animate">
              <a class="nav-link active" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab"
                aria-controls="pills-lunch" aria-selected="true">Food Menu</a>
            </li>
            <li class="nav-item ftco-animate">
              <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab"
                aria-controls="pills-dinner" aria-selected="false">Drink Menu</a>
            </li>
          </ul>

          <div class="tab-content text-left">
            <!-- <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  
                </div>
              </div> -->
            <div class="tab-pane fade show active" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
              <div class="row">
                <a href="images/food.pdf" target="_blank"><img src="images/menu2.png" alt="puzzo" class="img-fluid"></a>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
              <div class="row">
                <a href="images/drink.pdf" target="_blank"><img src="images/menu1.png" alt="puzzo"
                    class="img-fluid"></a>
              </div>
            </div>
          </div>
          <p>For our full Menu <a href="images/drink.pdf" target="_blank">click here for Drinks Menu</a> and <a
              href="images/food.pdf" target="_blank">click here for Food Menu</a>
          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <!-- END section -->
  <div id="">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.820845045961!2d7.483591814038767!3d9.080079993485441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b1e93d4e15f%3A0x5c55df4aa99d57bf!2sPuzzo%E2%80%99s+Eat+and+Play!5e0!3m2!1sen!2sng!4v1562745463113!5m2!1sen!2sng"
      width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!-- END section -->


  <footer class="ftco-footer ftco-bg-dark ftco-section" id="section-contact">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4 ftco-animate">
              <div class="ftco-footer-widget mb-3">
                <p class="ftco-heading-2"><img src="images/logo.png" alt="" title="" width="180px"></p>
                <p>
                  <h2 class="ftco-heading-2">Location</h2>
                </p>
                <p>Plot 170, Ademola Adetokunbo
                  Crescent (opp. Peniel Apartments)
                  Wuse 2, Abuja</p>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="ftco-footer-widget mb-1">
                <h2 class="ftco-heading-2">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#section-home" class="py-2 d-block">Home</a></li>
                  <li><a href="#section-about" class="py-2 d-block">About</a></li>
                  <li><a href="#section-menu" class="py-2 d-block">Menu</a></li>
                  <li><a href="#section-offer" class="py-2 d-block">Gallery</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="ftco-footer-widget mb-1">
                <h2 class="ftco-heading-2">Hours</h2>
                <ul class="list-unstyled">
                  <li>Monday - Sunday</li>
                  <li>11am - 11pm</li>
                </ul>
                <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.facebook.com/Puzzoeatnplay"><span
                        class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.instagram.com/puzzosrestaurant/"><span
                        class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Facebook</h2>
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPuzzosretaurant&tabs=timeline&width=320&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
              width="320" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
              allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md text-left">
          <p>&copy; Puzzo 2019. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- END Modal -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>

  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>

  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/instafeed.min.js"></script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>

  <script src="js/main.js"></script>

</body>

</html>