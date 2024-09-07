<?php 
@include 'config.php';


if(isset($_POST['add_feedback'])){
   $name = mysqli_real_escape_string($link, $_POST['name']);
   $email = mysqli_real_escape_string($link, $_POST['email']);
   $subject = mysqli_real_escape_string($link, $_POST['subject']);
   $msg = mysqli_real_escape_string($link, $_POST['msg']);
   
   $insert_query = mysqli_prepare($link, "INSERT INTO `feedback`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)");
   mysqli_stmt_bind_param($insert_query, "ssss", $name, $email, $subject, $msg);
   if(mysqli_stmt_execute($insert_query)){
    if(mysqli_stmt_affected_rows($insert_query) > 0){
      echo '<script>alert("Feedback details added successfully");</script>';
    }else{
      echo '<script>alert("Could not add the Feedback details");</script>';
    }
 } else {
  echo '<script>alert("Error: ' . mysqli_error($link) . '");</script>';
 }
}
 ?>


<!doctype html>
<html lang="en">
<head>
<script async defer crossorigin="anonymous" 
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="xyz123">
</script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <title>DRK Highschool | Cantact</title>
</head>

<body>



  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  
  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

        <?php
  $select_contact = mysqli_query($link, "SELECT * FROM `contact` ORDER BY id DESC
  LIMIT 1");
if(mysqli_num_rows($select_contact) > 0){
    while($fetch_contact = mysqli_fetch_assoc($select_contact)){
        ?>
          <div class="col-6 col-lg-9">
            <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span
                class="d-none d-lg-inline-block"><?php echo $fetch_contact['contact'];?></span></a>
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span
                class="d-none d-lg-inline-block"><?php echo $fetch_contact['email'];?></span></a>
          </div>
          <?php
    }
}
?>

          <div class="col-6 col-lg-3 text-right">
            <a href="login.php" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="register.php" class="small">
              <span class="icon-person"></span>
              Register
            </a>
          </div>

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.php" class="logo menu-absolute m-0"><img src="./images/DeshBhakt.png" alt="logo" class="logoM"><span class="text-primary"></span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li><a href="index.php">Home</a></li>
        
            <li><a href="staff.php">Our Staff</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>

          <a href="register.php" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>

  

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/20220626_094437.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1 class="mb-4 heading text-white">
                    <span id="typed-text"></span>
                  </h1>
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      var typed = new Typed('#typed-text', {
                        strings: ['Deshbhakt Ratnappa Kumbhar Highschool'],
                        typeSpeed: 50,
                        backSpeed: 20,
                        startDelay: 500,
                        backDelay: 1500,
                        loop: false,
                      });
                    });
                  </script>
                  <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#info"
                      class="btn btn-secondary">Explore</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Add more swiper-slide divs for additional images -->
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/20220814_085709.jpg');">
      </div>
      <div class="swiper-slide untree_co-hero overlay" style="background-image: url('images/HERO_IMAGES/HERO-1.jpg');">
      </div>
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/IMG-20220506-WA0057.jpg');">
      </div>
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/IMG-20240413-WA0037.jpg');">
      </div>
    </div>
    <!-- Add Pagination if needed -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation if needed -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>




  <div class="untree_co-section" id="contactinfo">
    <div class="container">

      <div class="row mb-5">



      <?php
  $select_contact = mysqli_query($link, "SELECT * FROM `contact` ORDER BY id DESC
  LIMIT 1");
if(mysqli_num_rows($select_contact) > 0){
    while($fetch_contact = mysqli_fetch_assoc($select_contact)){
        ?>
        <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info">

            <div class="address mt-4">
              <i class="icon-room"></i>
              <h4 class="mb-2">Location:</h4>
              <p><?php echo $fetch_contact['location']; ?></p>
            </div>

            <div class="open-hours mt-4">
              <i class="icon-clock-o"></i>
              <h4 class="mb-2">Open Hours:</h4>
              <p>
              <?php echo $fetch_contact['hours']; ?>
              </p>
            </div>

            <div class="email mt-4">
              <i class="icon-envelope"></i>
              <h4 class="mb-2">Email:</h4>
              <p><?php echo $fetch_contact['email']; ?></p>
            </div>

            <div class="phone mt-4">
              <i class="icon-phone"></i>
              <h4 class="mb-2">Call:</h4>
              <p><?php echo $fetch_contact['contact']; ?></p>
            </div>

          </div>
        </div>

        <?php
    }
}
?>




        <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="#" method="post">
            <div class="row">
              <div class="col-6 mb-3">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="col-6 mb-3">
                <input type="email" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="col-12 mb-3">
                <textarea name="msg" id="msg" cols="30" rows="7" class="form-control" placeholder="Message" ></textarea>
              </div>

              <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary" name="add_feedback">
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="site-footer">


<div class="container">

  <div class="row">
    <div class="col-lg-3 mr-auto">
      <div class="fb-page" data-href="https://www.facebook.com/dypcetkolhapur/" data-tabs="timeline"
        data-width="400px" data-height="450px" data-small-header="false" data-adapt-container-width="true"
        data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/YourPageURL" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/dypcetkolhapur/">dypcetkolhapur</a>
        </blockquote>
      </div>
    </div> <!-- /.col-lg-3 -->

    <div class="col-lg-3">
      <div class="col-lg-3">
        <div class="widget">
          <h3 style="font-size: 1rem;white-space: nowrap;">Office Timing:</h3>
          <ul class="list-unstyled links mb-4" style:"whi">
            <li><strong>Monday-Friday:</strong> 9:30am to 5:00pm</li>
            <li><strong>Saturday:</strong> 9:30am to 12:00pm</li>
            <li><strong>Sunday:</strong> Closed</li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-lg-3">

      <div class="widget">
        <h3>Contact:</h3>
        <address>Deshbhakt Ratnappa Kumbhar Highschool, Ratnappa Kumbhar Nagar, Kolhapur, Maharashtra 416013
        </address>
        <ul class="list-unstyled links mb-4">
          <li><a href="tel:+919764548537">Sharad Gangadhare: +919764548537</a></li>
          <li><a href="tel:+917588251617">Ashwajeet Kamble: +917588251617</a></li>
          <li><a href="mailto:dbrkschoolkop@gmail.com">dbrkschoolkop@gmail.com</a></li>
        </ul>
      </div>
      <div class="widget">
        <h3>Connect with us</h3>
        <ul class="list-unstyled social">
          <li><a href="#"><span class="icon-instagram"></span></a></li>
          <li><a href="#"><span class="icon-twitter"></span></a></li>
          <li><a href="#"><span class="icon-facebook"></span></a></li>
          <li><a href="#"><span class="icon-linkedin"></span></a></li>
        </ul>
      </div> <!-- /.widget -->
    </div>
  </div> <!-- /.row -->


  <div class="row mt-5">
    <div class="col-12 text-center">
      <p>Copyright &copy;
        <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love
        by <a href="#">Praramb</a> Developmet Cell - DYPCET<a href="#"></a>
    </div>
  </div>
</div> <!-- /.container -->
</div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        autoplay: {
          delay: 5000,
        },
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
      });

      var typed = new Typed('#typed-text', {
        strings: ['Deshbhakt Ratnappa Kumbhar Highschool'],
        typeSpeed: 50,
        backSpeed: 20,
        startDelay: 500,
        backDelay: 1500,
        loop: false,
      });
    });
  </script>

</body>

</html>