<?php
@include 'config.php';
 

if(isset($_POST['add_student']))
{

  $name = mysqli_real_escape_string($link, $_POST['uname']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $pass = mysqli_real_escape_string($link, $_POST['pass']);
        // Prepare an insert statement
        $sql = "INSERT INTO `student`(`Name`, `Email`, `Password`) VALUES (?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $name , $email , $pass);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
                $message[] = 'Student details added successfully';
            } else{
                echo "Oops! Something went wrong. Please try again later.". mysqli_error($link);
                $message[] = 'Could not add the student details';
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    

// Processing form data when form is submitted

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

  <title>DRK Highschool | Register</title>
  <style>
    .button-container {
  display: flex;
  justify-content: space-between; /* Adjust as needed */
}

.btn1 a{
    color:white;
    text-decoration:none;
}

.btn1 {
  padding: 15px 30px;
  margin-bottom:10px;
  border-radius: 30px;
  font-size: 11px;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: 0.05rem;
}

.btn1:active,
.btn1:focus {
  outline: none;
  box-shadow: none;
}

    </style>
</head>




<body>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
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
  $select_contact = mysqli_query($link, "SELECT * FROM `contact` ORDER BY id DESC LIMIT 1");
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
              <span class="icon-person active" class=""></span>
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
            
            <li><a href="achievements.php">Achievements</a></li>
            <li><a href="contact.php">Contact</a></li>
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

  

  <div class="untree_co-hero inner-page overlay"         style="background-image: url('images/HERO_IMAGES/20220626_094437.jpg');">  >
    
      <div class="row align-items-center justify-content-center" style="padding-top:200px;">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Register</h1> 

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
  </div>
  
  <div class="untree_co-section">
    <div class="container">

    
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="" class="form-box registerbox" method="POST">
          
          <div class="button-container">
  <button class="btn1 btn-primary">Student</button>
  <button class="btn1 btn-primary"><a href="admin_login.php">Admin</a></button>
</div>

           <div class="row">
              <div class="col-12 mb-3">
                <input type="Name" class="form-control" placeholder="Full name" name="uname">
              </div>
              <div class="col-12 mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="Password" name="pass">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="Re-type Password" name="cpass">
              </div>
              <div class="col-12">
                <input type="submit" value="Register" class="btn btn-primary" name="add_student">
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

  </body>

  </html>
