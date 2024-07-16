<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
@include 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet">


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

  <title>DRK Highschool | About</title>
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
            <li class="active"><a href="about.php">About</a></li>
          
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


  <div class="untree_co-hero overlay" style="background-image: url('images/img-school-1-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">About Us</h1>
              <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                <p>Welcome to Deshbhakt Ratnappa Kumbhar High School R K Nagar Pachgaon , that has been established not only to provide education but also to enable each student to emerge on the top his/her career. I strongly believe that true education teaches the valuable virtues of self-knowledge, self-control and self-confidence”.</p>

                  <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#aboutinfo" class="btn btn-secondary">Explore</a></p>

              </div>

              <!-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p> -->

            </div>
          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->




  <div class="services-section" id="aboutinfo">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">President</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">I feel, an institution can not be created single handedly or without any devotion or guidance. I must say that this was only possible due to team work of ‘Ghali Family’ under the esteemed officials.
We plan to upgrade the existing school as per new requirements so that it may emerge as an
ideal institution. We are solely dedicated to the welfare and better education to one and all so as to bring us at par the intellectual and educated sections of our society.
We have been considering all aspects of child development and tried its best to enable children to meet the challenges of life. Not only this, we help children to build up their character and help them with moral education.
</p>

          <!-- <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Providing quality education.</li>
            <li>Social contributor.</li>
            <li>Man behind organiztion.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p> -->

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img
              src="./images/President/PRESIDENT.JPEG"
              alt="Image" class="img-fluid img-size">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>


  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Head Of School</h2>
          <p>Welcome to Deshbhakt Ratnappa Kumbhar High School R K Nagar Pachgaon , that has been established not only to provide education but also to enable each student to emerge on the top his/her career. I strongly believe that true education teaches the valuable virtues of self-knowledge, self-control and self-confidence”.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img
                src="https://th.bing.com/th/id/OIP.Mr8emaqK_6VcKG81Ng7JPQAAAA?w=308&h=180&c=7&r=0&o=5&pid=1.7"
                alt="Image" class="img-fluid staff-img"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mrs.Arati Magdum</h3>
              <span class="d-block position mb-4">Principle</span>
              <p class="mb-4">
              I Extend a warm welcome to you and your family. I am very proud to be the Principal of this wonderful School. It is a privilege for me to work with our students, our staff and our families to make our school they best it can be. My aim is to lead our school community to enable us to work together to achieve our goals.
We aim to create a safe, nurturing yet challenging environment that is built on positive relationships, developing the whole student - emotionally, socially and academically. We care for and appreciate each of our students as the unique individuals that they are, each with distinct differing learning styles.
We want each of our students to leave school with the values of respect, cooperation, persistence and striving for excellence underpinning all that they do.
Our students develop responsibility for their own behavior and the choices they make, and also a communal responsibility to assist their peers to do the same. Our students become strong in self-esteem and personal expectation and develop a healthy and respectful tolerance.

              </p>
              <!-- <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="staff text-center">
            <div class="mb-4"><img
                src="https://th.bing.com/th/id/OIP.JK7_s12IJGwAdXgvtd33rAHaEK?w=265&h=180&c=7&r=0&o=5&pid=1.7"
                alt="Image" class="img-fluid staff-img"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mr.Suraj Patil</h3>
              <span class="d-block position mb-4">Scretary</span>
              <p class="mb-4">Scretary

              Our aim is not to just provide a good academic education but one that is value based. The world has become a very competitive place but our aim is not to prepare students to merely compete with others but to discover themselves first.

True to the Indian philosophy the more one knows about one self the better one can compete with others. We lay a substantial stress on the development of physical and mental skills, the enhancement of the power of concentration. Emphasis is laid on the building of strong characters to withstand the inevitable pressures of tomorrow's world. We have always aimed high and have achieved our goals without sparing any efforts. Our highly reputed institution has already instilled confidence in the parent’s community.

Moreover, we are open to valuable suggestions from parents and experts through regular interaction with the faculty members, and strive to improve with an effective system of self-assessment. Our record spells out that for our mission the sky alone is the limit.


              </p>
              <!-- <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div> <!-- /.untree_co-section -->



  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Vision</h2>
          <p>We aspire to transform each student into a multifaceted personality. We also aspire & desire that each of our students should set an example for others to follow, by the virtue of his positive deeds & optimistic approach towards life.</p>
        </div>
      </div>
    </div> <!-- /.container -->



    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Our Objectives </h2>
          <p>
          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li> To Provide stimulating environment to develop inquisitive mind and discover true potential.</li>
            <li>To encourage students to develop a sense of social responsibility and responsibility towards the environment.</li>
            <li>To create awareness about maintaining good physical and mental health.</li>
            <li>To enhance the quality of teaching and learning by means of innovative practices and learning edge technology.</li>
            <li>To help grow grit and resilience in every individual.</li>
          </ul>  
          
</p>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->


 

  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

       
        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>Deshbhakt Ratnappa Kumbhar Highschool, R. K. Nagar</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">9421175728</a></li>
              <li><a href="tel://11234567890">9421175728</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

     
      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love
            by <a href="#">Praramb</a> Developmet Cell - DYPCET<a href="#"></a>
        </div>
      </div>
    </div> <!-- /.container -->
  </div>  <!-- /.site-footer -->

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
