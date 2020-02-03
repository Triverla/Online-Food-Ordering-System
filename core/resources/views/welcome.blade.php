@extends('layouts.masterpageweb')
@section('content')

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


  <section class="ftco-cover" style="background-image: url(images/puzzo-c.jpg);" id="section-home">
    <div class="container">
      <div class="row ftco-vh-80">
        <div class="col-md-12">
          <h1 class="ftco-heading align-items-center justify-content-center text-center ftco-animate mb-3">Puzzo's
            Christmas package</h1>
          <p style="color: rgb(255, 255, 255);" class="align-items-center justify-content-center text-center">Dine,
            Celebrate and Be Merry this Festive
            season at Puzzo’s Restaurant, Abuja’s home of Multi cuisine!
            To Celebrate the Festive season we have created the most amazing Packages for you and your family to relax,
            enjoy & create lasting memories.
          </p>
          <p style="color: white;" class="align-items-center justify-content-center text-center">Packages are as
            follows: </p>
          <div class="row" style="color: white;">
            <div class="col-md-6">
              <h6>COUPLES - N15, 000</h6>
              <ol>
                <li>A 3 Course Meal</li>
                <li>Glasses of Red or White Wine</li>
                <li>Water</li>
                <li>A chance to participate in a Raffle draw to win mind blowing prizes!!!</li>
              </ol>
            </div>
            <div class="col-md-6">
              <h6>FAMILY OF FIVE -N25, 000</h6>
              <ol>
                <li>A 3 Course Meal</li>
                <li>Glasses of Red or White Wine</li>
                <li>Water</li>
                <li>Scoops of Ice Cream for the Kids</li>
                <li>A chance to participate in a Raffle draw to win mind blowing prizes!!!</li>
              </ol>
            </div>
          </div>
          <h4 class="text-center" style="color: white">Enjoy the above Packages from <span style="color: white;">21st
              December, 2019 – 25th December
              2019</span>.</h4>
          <div class="row" style="color: white;">
            <div class="col-md-6">
              <h5 style="color: white">Prizes to be won are as follows</h5 style="color: white">
              <p style="color: white;"><b>1st Prize</b> - Couples Getaway at the Luxurious Caledonian Suites Abuja</p
                style="color: black;">
              <p style="color: white;"><b>2nd Prize</b> - A Moet Infused Gift Hamper</p style="color: black;">
              <p style="color: white;"><b>3rd Prize</b> - A Gift Hamper from MultiPro, producers/distributors of Power
                Oil, Indomie Noodles, Minimie Chin Chin etc </p style="color: black;">
            </div>
            <div class="col-md-6">
              <h5 style="color: white">Terms and Conditions</h5>
              <ul>
                <li>Package is not to be applied with other discounts.</li>
                <li>Package is “ONLY” applicable within the stated dates.</li>
                <li> Package only covers items listed on the Christmas Package Menu; however usual orders can be taken,
                  exclusive of the package benefits.</li>
                <li>Family Package entertains only Two Adults i:e Two Adults & 3 Children.</li>
                <li> To participate in the raffle draw you must dine using the Christmas Package.</li>

              </ul>
            </div>
          </div>
          <h2 style="color: rgb(255, 255, 255)" class="text-center">Official Sponsors</h2>
          <div class="row">
            <div class="col-md-6 text-center">
              <img src="images/caledoni.jpg" class="img-responsive" alt="" width="250" height="150">
            </div>
            <div class="col-md-6 text-center">
              <img src="images/moet.jpg" class="img-responsive" alt="" width="250" height="150">
            </div>
          </div>

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
        <div class="col-md-6">
          <div class="row">
            <div class="col-md ftco-animate">
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
            <div class="col-md ftco-animate">
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
            <div class="col-md ftco-animate">
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
        <div class="col-md-6">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Facebook</h2>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPuzzosretaurant&tabs=timeline&width=320&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="320" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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

  @endsection