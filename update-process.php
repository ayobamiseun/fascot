<?php
ob_start();
session_start();
?>
<?php
if(!isset($_SESSION["valid"])){
    header("location: login.php");
}
include_once 'connect.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE prices set id=1, btc='" . $_POST['btc'] . "', usdt='" . $_POST['usdt'] . "', eth='" . $_POST['eth'] . "' ,steam='" . $_POST['steam'] . "',amazon='" . $_POST['amazon'] . "', itunes='" . $_POST['itunes'] . "',ebay='" . $_POST['ebay'] . "', val='" . $_POST['val'] . "',pay='" . $_POST['pay'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM prices WHERE id=1 ");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Market Price</title>
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
<header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">
    
          <div class="logo">
            <!-- <h1><a href="index.html"><span>Bootslander</span></a></h1> -->
            <img src="assets/img/20220118_141305.png" alt="" height="200px">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <!-- <li><a class="nav-link scrollto" href="#features">Contact</a></li>
              <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
              <!-- <li class="dropdown"><a href="#"><span>Trade</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> -->
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header>
    <div class="container">
    <form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-top:90px;">
 <h2> <a href="index.php">Update Prices</a></h2>
</div>

<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
<br>
BTC Price <br>
<input type="text" name="btc" class="txtField" value="<?php echo $row['btc']; ?>">
<br>
USDT Price<br>
<input type="text" name="usdt" class="txtField" value="<?php echo $row['usdt']; ?>">
<br>
ETH Price<br>
<input type="text" name="eth" class="txtField" value="<?php echo $row['eth']; ?>">
<br>
Steam Price<br>
<input type="text" name="steam" class="txtField" value="<?php echo $row['steam']; ?>">
<br>
Amazon Price<br>
<input type="text" name="amazon" class="txtField" value="<?php echo $row['amazon']; ?>">
<br>
Itunes Price<br>
<input type="text" name="itunes" class="txtField" value="<?php echo $row['itunes']; ?>">
<br>
Ebay Price<br>
<input type="text" name="ebay" class="txtField" value="<?php echo $row['ebay']; ?>">
<br>
Vanilla Price<br>
<input type="text" name="val" class="txtField" value="<?php echo $row['val']; ?>">
<br>
PayPal Price<br>
<input type="text" name="pay" class="txtField" value="<?php echo $row['pay']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>

    </div>
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
                    <strong>Phone:</strong> +234 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                  </p>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
                  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                </ul>
              </div>
    
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Gift Cards</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Crypto</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Foreign Exchange</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Digital Currency Exchange</a></li>
                  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Anything<</a></li> -->
                </ul>
              </div>
    
              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Be the first to get update on change in rate subscribe to our newsletter</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
    
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Fascot</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            
          </div>
        </div>
      </footer>
</body>
</html>