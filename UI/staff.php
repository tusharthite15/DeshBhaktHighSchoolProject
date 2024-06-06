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


      
  <style>
  /* Add border and hover effect to the container */
  .staff-info {
    border: 1px solid #ccc; /* Add border */
    transition: border-color 0.3s ease; /* Smooth transition for hover effect */
  }

  .staff-info:hover {
    border-color: #007bff; /* Change border color on hover */
  }

  /* Optionally, add padding to the container for better appearance */
  .staff-body {
    padding: 20px;
  }
</style>

  <title>DRK Highschool | Staff</title>
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
        
            <li class="active"><a href="staff.php">Our Staff</a></li>
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

  

  <div class="untree_co-hero overlay" style="background-image: url('images/img-school-3-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Meet Our Dedicated Staff</h1>
              <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                <p>Explore the profiles below to learn more about their qualifications and experience.</p>
              </div>
              
              
              </div>
            </div>


          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->

  <div class="untree_co-section bg-light" id="staffinfo">
    <div class="container">

    <h1 class="staff-name">Teaching Staff</h1>
      <div class="row">

      <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/SUNITA SANDEEP KALKHAMB.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">SUNITA SANDEEP KALKHAMB</h3>
              <!-- <span class="d-block position mb-4">Teacher in Math</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
      
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/PRIYADARSHANI RAVINDRA MANE.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">PRIYADARSHANI RAVINDRA MANE</h3>
              <!-- <span class="d-block position mb-4">Teacher in Music</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/RAJAGONDA BABAGONDA PATIL.jpeg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">RAJAGONDA BABAGONDA PATIL</h3>
              <!-- <span class="d-block position mb-4">Teacher English</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/RAJIV KISAN MUNDE .jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">RAJIV KISAN MUNDE </h3>
              <!-- <span class="d-block position mb-4">Teacher in Math</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/SHARAD MAHADEV GANGADHARE.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">SHARAD MAHADEV GANGADHARE</h3>
              <!-- <span class="d-block position mb-4">Teacher in Music</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/SUNITA RAVINDRA MOTHE.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">SUNITA RAVINDRA MOTHE</h3>
              <!-- <span class="d-block position mb-4">Teacher English</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>


      
      <div class="row">
      <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/TEACHING/JYOTI BABASAHEB SHINDE.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">JYOTI BABASAHEB SHINDE</h3>
              <!-- <span class="d-block position mb-4">Teacher in Math</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
      
       
      </div>


      <h1 class="staff-name">Non Teaching Staff</h1>

      <div class="row">
      <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/NON TEACHING/APPASO KALLAPPA TELI.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">APPASO KALLAPPA TELI</h3>
              <!-- <span class="d-block position mb-4">Teacher in Math</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
      
       
     

        
      <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img src="images/NON TEACHING/DILIP SADASHIV SAGAONKAR.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">DILIP SADASHIV SAGAONKAR</h3>
              <!-- <span class="d-block position mb-4">Teacher in Math</span>
              <p class="mb-4">Explore the profiles below to learn more about their qualifications and experience.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        </div>
       
      </div>
     
      
    </div>

    <div class="untree_co-section" id="galleryinfo">
            <div class="container">
            <h1 class="staff-name">Teaching Staff</h1>
    <div class="row">

<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. राजगोंडा बाबगोंडा पाटील</h3>
      <span class="d-block position mb-4">हुद्दा :- मुख्याध्यापक </span>
      <p class="mb-4">पत्ता :- पी. डी. भोसले नगर प्लॉट नंबर ३ मोरेवाडी<br/>
      शिक्षण :- बी. ए. बी. एड.<br/>
      नोकरी सुरू दिनांक :- २०/०६/१९८८  <br/>
      अनुभव :- ३६ वर्षे  <br/>
      मोबाईल नंबर :- ९४२११७५७२८<br/>
      Email:- patil.rajgonda@gmail.com</p>
    </div>
  </div>
</div>

<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. वर्षा प्रकाश बिर्जे</h3>
      <span class="d-block position mb-4">हुद्दा :- पर्यवेक्षक </span>
      <p class="mb-4">पत्ता :- सोसायटी नंबर १ प्लॉट नंबर आर के नगर<br/>
      शिक्षण :- बी. एस.सी.बी.एड.<br/>
      नोकरी सुरू दिनांक :- ०१/०७/१९९३ <br/>
      अनुभव :- ३१ वर्षे <br/>
      मोबाईल नंबर:- ९८६०२६२७२४<br/>
      Email :- vpbirje@gmail.com</p>
    </div>
  </div>
</div>



<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. सुनिता रविंद्र मोठे </h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका </span>
      <p class="mb-4">पत्ता :- तुळजाभवानी हौसिंग सोसायटी प्लॉट नंबर ३९ ब सानेगुरुजी वसाहत कोल्हापूर <br/>
      शिक्षण :- बी.एस.सी.बी.एड<br/>नोकरी सुरू दिनांक:- ०१/०७/१९९६ <br/>अनुभव :- २८ वर्षे <br/>
      मोबाईल नंबर:- ८४२१९०५३२०<br/>Email :- sunitamothe29@gmail.com</p>
    </div>
  </div>
</div>

  </div>



  <div class="row">


  <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. संध्या रेणुकादास कुलकर्णी</h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका </span>
      <p class="mb-4">पत्ता :- सोसायटी नंबर १ प्लॉट नंबर ७० जिजामाता उद्यान आर के नगर<br/>
      शिक्षण :- एम. ए. बी. एड.<br/>
      नोकरी सुरू दिनांक:- ०१/१२/१९९७ <br/>
      अनुभव :- २७ वर्षे <br/>
      मोबाईल नंबर:- ९४२२०३२४९९<br/>
      Email :-        kulkarnis46@gmail.com</p>
    </div>
  </div>
</div>



<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. ज्योती बाबासाहेब शिंदे</h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका </span>
      <p class="mb-4">पत्ता :- गैबीपीर हौसिंग सोसायटी प्लॉट नंबर १८७ गहिनीनाथनगर कागल <br/>
      शिक्षण :- बी. ए. बी. एड.<br/>
      नोकरी सुरू दिनांक:- ०१/१०/२००८<br/>
      अनुभव :- १५ वर्षे  <br/>
      मोबाईल नंबर:- ८३७८०४८९७० <br/>
      Email :- jyotishinde9935@gmail.com</p>
    </div>
  </div>
</div>


<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. आण्णाप्पा बाळू भानसे</h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षक </span>
      <p class="mb-4">पत्ता :- मु.पो. मळगे ता. कागल , जि. कोल्हापूर <br/>
      
शिक्षण :- बी.ए.बी.पी.एड.<br/>
      
नोकरी सुरू दिनांक:- १९/०६/२०१०<br/>
अनुभव :- १४ वर्षे <br/>
मोबाईल नंबर:- ८८६७६५१००९<br/>
Email :- annappabhanase89@gmail.com</p>
    </div>
  </div>
</div>



  </div>




  <div class="row">

  <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. संजय भिमगोंडा मुद्दाण्णा</h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षक </span>
      <p class="mb-4">पत्ता :- मु.पो. सुळकुड ता. कागल, जि. कोल्हापूर<br/>
      शिक्षण :- बी. ए.बी.एड.<br/>
      नोकरी सुरू दिनांक:- ०१/१२/२०११<br/>
      अनुभव :- १३ वर्षे  <br/>
      मोबाईल नंबर:- ९९६०२१५१४६<br/>
      Email :- </p>
    </div>
  </div>
</div>


<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ प्रियदर्शनी रविंद्र माने</h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका </span>
      <p class="mb-4">पत्ता:- आसुर्ले पोर्ले ता. पन्हाळा जि. कोल्हापूर<br/>
      शिक्षण :- बी.ए.बी.एड.<br/>
      नोकरी सुरू दिनांक:-  ०१/१२/२०१२<br/>
      अनुभव :- १२ वर्षे  <br/>
      मोबाईल नंबर :- ८६९८५१३६२४<br/>
      Email :- pmane4672@gmail.com</p>
    </div>
  </div>
</div>


<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ कविता सचिन माळी</h3>
      <span class="d-block position mb-4">हुद्दा:-  सहाय्यक शिक्षिका </span>
      <p class="mb-4">पत्ता:-  मु. पो. सुळकुड ता. कागल, जि. कोल्हापूर<br/>
      शिक्षण :- <br/>
      नोकरी सुरू दिनांक :- ०१/१२/२०१४<br/>
      अनुभव :- १० वर्षे <br/>
      मोबाईल नंबर :- ९७६४२६५०३२<br/>
      Email :- </p>
    </div>
  </div>
</div>

  </div>


  <div class="row">


  
<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री किसन पोपट कुवर </h3>
      <span class="d-block position mb-4">हुद्दा :-  सहाय्यक शिक्षक </span>
      <p class="mb-4">पत्ता :-  के.एम.टी कॉलनी पाचगाव<br/>
      शिक्षण :- बी.ए. बी.एड <br/>
      नोकरी सुरू दिनांक :- १४/१२/२०१५<br/>
      अनुभव :- ९ वर्षे <br/>
      मोबाईल नंबर:- ७७९८८४९६४७<br/>
      Email :- kisankuwar1988@gmail.com </p>
    </div>
  </div>
</div>



<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ प्रतिभा संजय खेडकर</h3>
      <span class="d-block position mb-4">हुद्दा:-  सहाय्यक शिक्षिका</span>
      <p class="mb-4"> पत्ता:-  सोसायटी नंबर ६ प्लॉट नंबर आर के नगर<br/>
      शिक्षण:-  बी.ए.बी.एड <br/>
      नोकरी सुरू दिनांक:- ०५/११/१९९८ <br/>
      अनुभव :- २६ वर्षे <br/>
      मोबाईल नंबर :- ८७६६००२५३२<br/>
      Email :- khedkarpra15@gmail.com</p>
    </div>
  </div>
</div>



<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. सुजाता सुभाष भोसले</h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका</span>
      <p class="mb-4">पत्ता :- गणेशनगर प्लॉट नंबर. रूमाले माळ, आर के नगर<br/>
      शिक्षण:-  बी.ए.बी.एड <br/>
      नोकरी सुरू दिनांक:- ०८/०६/१९९२ <br/>
      अनुभव :- ३२ वर्षे <br/>
      मोबाईल नंबर:- ९४२३६३२५६३<br/>
      Email :- sujatabhosale63@gmail.com</p>
    </div>
  </div>
</div>

  </div>


  <div class="row">

  <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. सुनीता संदीप कलखांब    </h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका</span>
      <p class="mb-4">पत्ता :-सांगली नाका , इंचलकरंजी<br/>
      शिक्षण:-  बी.ए.बी.एड <br/>
      नोकरी सुरू दिनांक :- २१/११/२०२३<br/>
      अनुभव :- ५ वर्षे <br/>
      मोबाइल नंबर :- ७२१८१५१२३५  <br/>
      Email:- sunitakalkhamb1306@gmail.com</p>
    </div>
  </div>
</div>



<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. राजीव किसन मुंडे       </h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका</span>
      <p class="mb-4">पत्ता :-शिंगणापूर रोड चंबुखडी कोर्ट कॉलनी<br/>
      शिक्षण:-  एच. एस. सी. डी. एड.<br/>
      नोकरी सुरू दिनांक :- १५/०२/२००८<br/>
      अनुभव :- १६ वर्षे <br/>
      मोबाइल नंबर :- ९०११९००३७८  <br/>
      Email:- rajivmunde0378@gmail.com</p>
    </div>
  </div>
</div>




<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. शरद महादेव गंगाधरे    </h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका</span>
      <p class="mb-4">पत्ता :-मु.पो. आनुर ता. कागल , जि. कोल्हापूर <br/>
      शिक्षण:-  एच. एस. सी. डी .एड.<br/>
      नोकरी सुरू दिनांक :- २१/०६/२०१२ <br/>
      अनुभव :- १२ वर्षे <br/>
      मोबाइल नंबर :-  ९७६४५४८५३७  <br/>
      Email :- sharadgangadhare2292@gmail.com</p>
    </div>
  </div>
</div>



  </div>


  <div class="row">

  <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. सुरज उत्तम कांबळे    </h3>
      <span class="d-block position mb-4">हुद्दा :- सहाय्यक शिक्षिका</span>
      <p class="mb-4">पत्ता :-मु. पो. सुळकुड , ता. कागल, जि. कोल्हापूर  <br/>
      शिक्षण:-  एच. एस. सी. डी. एड.   <br/>
      नोकरी सुरू दिनांक :- ०२/१२/२०१३    <br/>
      अनुभव :- ११ वर्षे <br/>
      मोबाइल नंबर :-  ७०८३०२०९७५      <br/>
      Email :- surajkamble975@gmail.com</p>
    </div>
  </div>
</div>


  </div>





      </div>
    
      </div>



      <div class="untree_co-section" id="galleryinfo">
            <div class="container">
            <h1 class="staff-name">Non Teaching Staff</h1>
            <div class="row">

            <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. विनायक राणकू कांबळे      </h3>
      <span class="d-block position mb-4">हुद्दा :- वरिष्ठ लिपिक  </span>
      <p class="mb-4">पत्ता :- शुक्रतारा प्लॉट नंबर  सी-४१ धन्वंतरी नगर मोरेवाडी  , ता. करवीर , जि. कोल्हापूर <br/>
      शिक्षण:-  बी. ए. <br/>
      नोकरी सुरू दिनांक :-  १३/०६/१९९७<br/>
      अनुभव :- २६ वर्षे <br/>
      मोबाइल नंबर :-  ९९२१९०३१७०  <br/>
      Email :-  vrk1972@gmail.com</p>
    </div>
  </div>
</div>

<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. सुहास शिवाजीराव चव्हाण       </h3>
      <span class="d-block position mb-4">हुद्दा :- प्रयोगशाळा सहाय्यक   </span>
      <p class="mb-4">पत्ता :- ९४ ए वॉर्ड राजोपाध्येनगर , कोल्हापूर<br/>
      शिक्षण:-  एच. एस. सी <br/>
      नोकरी सुरू दिनांक :-  ०१/०८/२०२१<br/>
      अनुभव :- २४ वर्षे <br/>
      मोबाइल नंबर :-  ९८९०९०६८८५  <br/>
      Email :-  suhaschavan2001@gmail.com</p>
    </div>
  </div>
</div>


<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. सदाशिव शिवाप्पा औरनाळे      </h3>
      <span class="d-block position mb-4">हुद्दा :- प्रयोगशाळा परिचर    </span>
      <p class="mb-4">पत्ता :- प्रथमेश कॉलनी प्लॉट नंबर २ श्री हॉटेलजवळ पाचगाव       <br/>
      शिक्षण:-  एच. एस. सी <br/>
      नोकरी सुरू दिनांक :-  ११/०६/१९९०<br/>
      अनुभव :- ३४ वर्षे <br/>
      मोबाइल नंबर :-  ९५२७८०९१२०  <br/>
      Email :-  </p>
    </div>
  </div>
</div>

            
            </div>


            <div class="row">

            <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. आप्पासो कल्लाप्पा तेली      </h3>
      <span class="d-block position mb-4">हुद्दा :- नाईक शिपाई  </span>
      <p class="mb-4">पत्ता :- मु. पो. सुळकुड  , ता. कागल, जि. कोल्हापूर       <br/>
      शिक्षण:-  एच. एस. सी <br/>
      नोकरी सुरू दिनांक :-  ०८/०९/१९९२    <br/>
      अनुभव :- ३२ वर्षे <br/>
      मोबाइल नंबर :-  ९६६५३५४०७८  <br/>
      Email :-   appasoteli7@gmail.com</p>
    </div>
  </div>
</div>

<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. पांडुरंग आकाराम सोरटे     </h3>
      <span class="d-block position mb-4">हुद्दा :- नाईक शिपाई      </span>
      <p class="mb-4">पत्ता :-नेबापूर ता. पन्हाळा , जि. कोल्हापूर       <br/>
      शिक्षण:-   नववी <br/>
      नोकरी सुरू दिनांक :-  ०१/१०/१९९०    <br/>
      अनुभव :- ३४ वर्षे <br/>
      मोबाइल नंबर :-  ९७६५७५७८९५  <br/>
      Email :-  </p>
    </div>
  </div>
</div>


<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. दिलीप सदाशिव सागावकर    </h3>
      <span class="d-block position mb-4">हुद्दा :- शिपाई      </span>
      <p class="mb-4">पत्ता :-  प्लॉट नंबर १३० वैभवलक्ष्मी निवास अष्टविनायक पार्क मोरेवाडी , आर के नगर        <br/>
      शिक्षण:- एस. एस. सी  <br/>
      नोकरी सुरू दिनांक :-  १३/०६/१९९७    <br/>
      अनुभव :- २७ वर्षे <br/>
      मोबाइल नंबर :-  ९८६०७८०२९८  <br/>
      Email :-  dilipsagaonkar26@gmail.com </p>
    </div>
  </div>
</div>

            </div>

            <div class="row">

  
<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">श्री. शिवाजी सदाशिव कोरवी   </h3>
      <span class="d-block position mb-4">हुद्दा :- शिपाई      </span>
      <p class="mb-4">पत्ता :-  मू. पो. सुळकुड , त. कागल ,जि. कोल्हापूर    <br/>
      शिक्षण:- एस. एस. सी  <br/>
      नोकरी सुरू दिनांक :-  १३/०६/१९९७     <br/>
      अनुभव :- २७ वर्षे <br/>
      मोबाइल नंबर :-  ८८०६६७०५६२  <br/>
      Email :-  </p>
    </div>
  </div>
</div>          

<div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
  <div class="staff-info text-center staff">
    <div class="staff-body">
      <h3 class="staff-name">सौ. सुजाता अमर पाटील   </h3>
      <span class="d-block position mb-4">हुद्दा :- अर्धवेळ ग्रंथपाल      </span>
      <p class="mb-4">पत्ता :-   पाण्याचा खजिना जवळ मंगळवार पेठ, कोल्हापूर <br/>
      शिक्षण:- एस. एस. सी  <br/>
      नोकरी सुरू दिनांक :-  १३/०६/१९९७     <br/>
      अनुभव :- २७ वर्षे <br/>
      मोबाइल नंबर :-  ९६०४१६४५२२  <br/>
      Email :-  sujatapatilsp97@gmail.com</p>
    </div>
  </div>
</div>   
            </div>



            </div>
      </div>


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