<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <title>PBS UNIDA</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      @yield('css')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">

      </div><nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><a href="index.html"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/">Penjadwalan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/">Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/">Mata Kuliah</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/">Dosen</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
                  <button class="donate_btn" type="submit">Donate Now</button>
               </form>
            </div>
         </nav>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">PBS UNIDA</h1>
                           <p class="banner_text">Lihat Penjadwalan mu</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">PBS UNIDA</h1>
                           <p class="banner_text">Lihat Penjadwalan mu</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">PBS UNIDA</h1>
                           <p class="banner_text">Lihat Penjadwalan mu</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="fundraise_section">
            <div class="fundraise_section_main">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="images/icon-1.png"></div>
                        <h4 class="volunteer_text">Penjadwalan</h4>
                        <div class="join_bt"><a href="#">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main active">
                        <div class="icon_1"><img src="images/icon-2.png"></div>
                        <h4 class="volunteer_text">Mahasiswa</h4>
                        <div class="join_bt"><a href="#">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="images/icon-3.png"></div>
                        <h4 class="volunteer_text">Dosen</h4>
                        <div class="join_bt"><a href="#">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="box_main active">
                       <div class="icon_1"><img src="images/icon-2.png"></div>
                       <h4 class="volunteer_text">Mata Kuliah</h4>
                       <div class="join_bt"><a href="#">Join Now</a></div>
                    </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <h2 class="about_taital">about Chrity</h2>
                  <p class="about_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youmany variations of passages of Lorem Ipsum
                     available, but the majority have suffered
                     alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you many
                     variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you
                  </p>
                  <div class="readmore_bt"><a href="#">Read more</a></div>
               </div>
               <div class="col-sm-4">
                  <div class="about_img"><img src="images/about-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="footer_logo"><img src="images/footer-logo.png"></div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NAVIGATION</h4>
                  <div class="footer_menu_main">
                     <div class="footer_menu_left">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="donate.html">Donate</a></li>
                              <li><a href="contact.html">Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="footer_menu_right">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="about.html">About</a></li>
                              <li><a href="news.html">News</a></li>
                              <li><a href="mission.html">Our Mission</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NEWS</h4>
                  <p class="footer_text">Generators on the Internet</p>
                  <p class="footer_text">Tend to repeat predefined</p>
                  <p class="footer_text">Chunks as necessary, making</p>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">address</h4>
                  <p class="footer_text">Ave NW, Washington</p>
                  <p class="footer_text">+01 1234567890</p>
                  <p class="footer_text">demo@gmail.com</p>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-3">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-8 col-md-8 col-lg-9">
                     <input type="text" class="address_text" placeholder="Enter your Enail" name="text">
                     <button type="button" class="get_bt">SUBSCRIBE</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('/js/jquery.min.js')}}"></script>
      <script src="{{asset('/js/popper.min.js')}}"></script>
      <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('/js/custom.js')}}"></script>
      <!-- javascript -->
      <script src="{{asset('/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

