<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Render All Elements Normally -->
  <link rel="stylesheet" href="css/normalize.css" />
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="css/all.min.css" />
  <!-- Main  CSS File -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
  <title>Footwear etc.</title>
   
</head>

<body>
  <!-- start header -->
    <header>
        <div class="container">
          <a href="index.php" class="logo">
            <img decoding="async" src="img/fwe_2x_0b6366fe-afb3-4bd8-a010-cded84912458_450x.avif" alt="Logo" />
          </a>
          <nav>
            <i onclick=showNavBar() class="fas fa-bars toggle-menu"></i>
            <ul class="navItems">
              <span onclick=removeNavBar() class="closeNav">X</span>
              <li><a class="active" href="index.php">Home</a></li>
              <li><a href="#products">Products</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#gallery">gallery</a></li>
              <li><a href="#contact">Call us</a></li>
              <?php
                if(isset($_SESSION['valid'])){
                  echo "<li><a href='UserInformaion.php'>Profile</a></li>";
                } else {
                  echo "<li><a href='./login.php'>Log in</a></li>";
                }
              ?>
            </ul>
           
            <div class="limitedOffer"> 
              <a href="limittedOffer.html">Limited Offer!</a>
          </div>
          </nav>
          
        </div>
      </header>
      <!-- End Header -->
       <!-- start our products -->
       <div class="products" id="products">
        
        <div class="products-container">
          <div class="box">
            <img decoding="async" src="img/air.png" alt="" />
            <div class="caption">
              <h4>air jordan</h4>
              <a href="product.html">more details </a>
            </div>
          </div>
          <div class="box">
            <img decoding="async" src="img/air2.png" alt="" />
            <div class="caption">
              <h4>air jordan2</h4>
              <a href="product.html">more details </a>
            </div>
          </div>
          <div class="box">
            <img decoding="async" src="img/blazer.png" alt="" />
            <div class="caption">
              <h4>blazer</h4>
              <a href="product.html">more details </a>
            </div>
          </div>
          <div class="box">
            <img decoding="async" src="img/hippie.png" alt="" />
            <div class="caption">
              <h4>hippie</h4>
              <a href="product.html">more details </a>
            </div>
          </div>
          <div class="box">
            <img decoding="async" src="img/crater.png" alt="" />
            <div class="caption">
              <h4>crater</h4>
              <a href="product.html">more details </a>
            </div>
          </div>
          <div class="box">
            <img decoding="async" src="img/jordan.png" alt="" />
            <div class="caption">
              <h4>jordan</h4>
              <a href="product.html">more details </a>
            </div>
          </div>
        </div>
        <a href="allproducts.html" class="more">More</a>
      </div>
      
       
       <!-- end our products -->
      <!-- start features -->
      <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle"><a href="#contact">CONTACT US!</a></span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>
    <!-- end features -->
       <!-- Start About -->
       <div id="about" class="about">
        <div class="container">
          <div class="main-heading">
            <h2>About Us</h2>
            <p>
              Thank you for your interest in Footwear etc. Based in California,
               we have been providing 5 star customer service since 1986. 
              We're a family run business, which started as one store, but has grown to 10 locations along with our online store.
               Simply stated, we're old fashioned when it comes to the way we treat our customers. 
              We pride ourselves on making people happy.
            </p>
          </div>
        </div>
      </div>
      <!-- End About -->
    <!-- start gallery -->
    <div id="gallery" class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="img/pexels-photo-9295809.jpeg"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="img/pexels-photo-1040427.webp"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="img/pexels-photo-7856965.webp"
                alt="" class="galleryImg">
        </div>
     </div>
     <div class="newSeason">
        <div class="nsItem">
            <img src="img/newseason/pexels-photo-4753986.webp"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#products">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="img/pexels-photo-7856965.webp"
                alt="" class="nsImg">
        </div>
    </div>
    <!-- end gallery -->
   <!-- start contact -->
<div id="contact" class="contact">
  <div class="containter">
    <div class="main-heading">
      <h2>contact</h2>
    </div>
    <div class="info">
      <div class="label">
        feel free to drop us a call
      </div>
      <a href="mailto:footwearetc@mail.com?subject=Contact" class="link">footwearetc@mail.com</a>
      <div class="social">
        Find Us On Social Networks
        <i class="fab fa-youtube"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
      </div>
    </div>
  </div>
</div>

<!-- end contact -->
 <!-- start footer -->
    <div class="footer">
        <div class="container">
          <a href="./index.php" class="logo">
            <img decoding="async" src="img/fwe_2x_0b6366fe-afb3-4bd8-a010-cded84912458_450x.avif" alt="Logo" />
          </a>
          <p>We Are Social</p>
          <div class="social-icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fas fa-home"></i>
            <i class="fab fa-linkedin"></i>
          </div>
          <p class="copyright">&copy; 2024 <span>footwearetc</span> All Right Reserved</p>
        </div>
      </div>
      <!-- End Footer -->
    <script src="app.js"></script>
</body>

</html>