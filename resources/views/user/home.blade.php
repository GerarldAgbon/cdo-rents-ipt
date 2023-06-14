<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>CDO-Rents | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="admin/assets/images/logof.png">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="navbar-brand" href="{{url('index')}}">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <img id="nav-image" src="assets/images/logofinal.png" alt="">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('home')}}">HOME
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#listings">LISTINGS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">CONTACT US</a>
              </li>
              <li class="nav-item">
                    @if (Route::has('login'))
                            @auth

                            <li class="nav-item">
                              <a class="nav-link" href="{{url('showbookmark')}}"><i class="fa fa-bookmark fa-1x fa-fw"></i>Bookmarks [{{$count}}]</a>
                            </li>

                            <x-app-layout>

                            </x-app-layout>
                            @else
                                <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                                @if (Route::has('register'))
                                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                    @endif
               </li>
            </ul>
          </div>
        </div>
      </nav>
      @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
      @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Affordable Rental Places!</h4>
            <h2>New Listings Available</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Rentals Available Everytime</h4>
            <h2>Get your best place to rent</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Bookmark a place</h4>
            <h2>Grab your desired rental accomodation</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    @include('user.product')

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About CDO-Rents</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best place to rent??</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This website</a> is for those who wants to find a rental accomodations. However, this is exclusively for Cagayan De Oro City only. Find the best place at the tip of your hand! <a rel="nofollow" href="contact.html">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Find best places in Cagayan De Oro</a></li>
                <li><a href="#">Rent your desired places to be!</a></li>
                <li><a href="#">Open for students, travellers and employees!</a></li>
                <li><a href="#">Experience city life at the City of Golden Friendship</a></li>
                <li><a href="#">One click reservation for hassle-free transaction</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/logofinal.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Scroll &amp; Find <em>Rentals</em> Here!</h4>
                  <p>Cagayan De Oro's finest rental places, now at the tip of your hand.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Add to Bookmark Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2023 CDO-Rents Co. Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
