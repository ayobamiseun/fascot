<?php

include('./include/connect.php');

   
?>
 <?php
              $sqlprice = mysqli_query($con, "select btc,usdt,eth, steam, amazon, itunes, ebay, val, pay from prices ORDER BY id DESC LIMIT 1 ");
            
              while ($rowprice = mysqli_fetch_array($sqlprice)) {
                $namebtc = $rowprice['btc'];
                $eth = $rowprice['usdt'];
                $usdt = $rowprice['eth'];
                $steam = $rowprice['steam'];
                $amazon = $rowprice['amazon'];
                $itunes = $rowprice['itunes'];
                $ebay = $rowprice['ebay'];
                $val = $rowprice['val'];
                $pay = $rowprice['pay'];
              }

              ?>
              <?php 
                $news = "";
                if( isset( $_REQUEST['news'])) {
                  $news = $_REQUEST['news']; 
                } 
              // $news =  $_REQUEST['news'];
       
          
              // Performing insert query execution
              // here our table name is college
              $sql = "INSERT INTO newsletter (email) VALUE ('$news')";
                
              if(mysqli_query($con, $sql)){
                  // header("index.php");
              } else{
                  echo "ERROR: Hush! Sorry $sql. " 
                      . mysqli_error($con);
              }
                
              // Close co$conection
              mysqli_close($con);
              ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fascot</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/floating-wpp.css">
    <script type="text/javascript" src="assets/css/floating-wpp.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<div class="floating-wpp"></div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>Bootslander</span></a></h1> -->
        <a href="index.html"> <img src="assets/img/20220118_141305.png" alt="" height="200px"></a>  
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Welcome to  Fascot Exchange</h1>
            <h2>We Buy and Sell All kind Of crypto And GiftCards</h2>
            <div class="text-center text-lg-start">
              <a href="https://wa.me/2349093677318" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/details-1.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Why you Should choose Fascot Exchange</h3>
            <p>Chief, Are you tired of been ripped off or getting very low rates when trading your Steam, Google, iTunes, Walmart, Visa, Vanilla, Amex giftcards, etc.?
              Worry no more because we’re here to make the difference.</p>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Secure Trading</a></h4>
              <p class="description">Your money back is 100% sure!</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Unbeatable Rate</a></h4>
              <p class="description">Fascot Exchange bids price at best rate for the benefits of our customers.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">24/7 Availability</a></h4>
              <p class="description">Connect directly with the CEO, Fascot exchange for questions, enquiries and tutorships perpetually!</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Trade Your Digital Assets</h2>
          <p>Swift Payment</p>
        </div>

        <div class="row" data-aos="fade-left">
             <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <img height="70px" src="assets/img/btc." alt="">
           
              <!-- <i class="ri-file-list-3-line" style="color: #11dbcf;"></i> -->
             <?php
             
             echo '
             <h3><a href="">'.$btc.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
             <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <img height="70px" src="assets/img/usdt.png" alt="">
           
              <!-- <i class="ri-file-list-3-line" style="color: #11dbcf;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$usdt.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
             <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <img height="70px" src="assets/img/Ethereum-Icon-Purple-Logo.wine.svg" alt="">
           
              <!-- <i class="ri-file-list-3-line" style="color: #11dbcf;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$eth.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <img height="80px" width="100px" src="assets/img/steam.png" alt="">
              <?php
             
             echo '
             <h3><a href="">'.$steam.'/$</a></h3>
           ';
     
              ?>
              <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
              <!-- <h3><a href="">Steam</a></h3> -->
            </div>
           
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <img height="70px" src="assets/img/kisspng-amazon-com-amazon-appstore-at-home-on-the-kazakh-s-amazon-icon-5b496b9adb4d32.7911243015315383308983.jpg" alt="">
           
              <!-- <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$amazon.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <img height="70px" width="130px" src="assets/img/itunes.png" alt="">
           
              <!-- <i class="ri-calendar-todo-line" style="color: #e80368;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$usdt.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <!-- <i class="ri-paint-brush-line" style="color: #e361ff;"></i> -->
              <img height="70px" src="assets/img/ebay.png" alt="">
              <?php
             
             echo '
             <h3><a href="">'.$itunes.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <img height="70px" src="assets/img/vanilla.jpeg" alt="">
           
              <!-- <i class="ri-database-2-line" style="color: #47aeff;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$ebay.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <img height="70px" src="assets/img/png-transparent-paypal-logo-text-line-blue.png" alt="">
           
              <!-- <i class="ri-gradienter-line" style="color: #ffa76e;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$val.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
         
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <img height="70px" src="assets/img/sephora.png" alt="">
           
              <!-- <i class="ri-price-tag-2-line" style="color: #4233ff;"></i> -->
              <?php
             
             echo '
             <h3><a href="">'.$pay.'/$</a></h3>
           ';
     
              ?>
            </div>
          </div>
         
         
          
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="5232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Transactions</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="3521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Customers</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0" class="purecounter"></span>
              <p>Complains</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    
    <!-- ======= Testimonials Section ======= -->
   <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/murphy.jpeg" class="testimonial-img" alt="">
                <h3>@Murphy_millie50</h3>
                <!-- <h4>Ceo &amp; Founder</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fascot exchange has been a great help to me trading fast and at best rates without stress <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/victor.jpeg" class="testimonial-img" alt="">
                <h3>@just_vicktour</h3>
                <!-- <h4>Designer</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fascot exchange rates are superb!!!
                  I recommend Fascot exchange any time, anyday.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/sophie.jpeg" class="testimonial-img" alt="">
                <h3>Sophie</h3>
                <!-- <h4>Store Owner</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I follow Fascot exchange on YouTube and it has really helped me in trades as he gives perfect signals on how to trade Cryptocurency.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/veecky.jpeg" class="testimonial-img" alt="">
                <h3>@veecky_yung</h3>
                <!-- <h4>Freelancer</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  My Gee.... Fascot, thank you for your customer care. I like how you treat your customers
  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/hassan.jpeg" class="testimonial-img" alt="">
                <h3>Hassan Ishola</h3>
                <!-- <h4>Entrepreneur</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fascot exchange has been my trusted and reliable crypto vendor.
They upload weekly signals on Digital curency which help a lot whenever i want to trade BITCOIN.
  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <!-- <h3>Fascot</h3>
              <p class="pb-3"><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, omnis..</em></p> -->
              <p>
                Ijaye <br>
                Lagos 535022, Nigeria<br><br>
                <strong>Phone:</strong> +2349093677318<br>
                <strong>Email:</strong> support@fascotexchange.com.ng<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/Fascotexchange?t=22EBsYqUbobiH-rB3_7zOw&s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/fascotexchange/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/invites/contact/?i=andxvgt24g2s&utm_content=mnv72u1" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://youtube.com/channel/UC7ZvEN9QwuGMIhgIpplx_aQ" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <!--<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="fascotexchange.com.ng/contact.html">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Gift Cards</a></li>
              <li> <a href="#">Crypto</a></li>
              <li> <a href="#">Foreign Exchange</a></li>
              <li><a href="#">Digital Currency Exchange</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Anything<</a></li> -->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Be the first to get update on change in rate subscribe to our newsletter</p>
            <form action="" method="post">
              <input type="email" require name="news"><input id="subc" type="submit" value="news">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fascot Exchange</span>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
         Designed by <a href="https://wa.me/2348145933039">Ayobam</a> 
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script>
  $('.floating-wpp').floatingWhatsApp({

    // phone number
    phone: '+2349093677318',
  
    // message to send
    message: '',
  
    // icon size
    size: '72px',
  
    // background color
    backgroundColor: '#25D366',
  
    // or right
    position: 'left', 
  
    // message in popup
    popupMessage: 'Welcome to Fascot Exchange',
  
    // show a chat popup on hover
    showPopup: true,
  
    // show on IE
    showOnIE: true,
    
    // in milliseconds
    autoOpenTimer: 0,
  
    // header color
    headerColor: '#128C7E',
  
    // header title
    headerTitle: '',
  
    // z-index property
    zIndex: 10000000000000,
  
    // custom icon
    // buttonImage: '<img src="whatsapp.svg" />'
    buttonImage: '<img src="whatsapp.svg" />'
    
       });
       $('#subc').submit(function() {
 alert('subscribed');
});
  
</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>