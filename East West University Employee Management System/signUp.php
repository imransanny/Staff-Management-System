<?php 
  session_start();
  require 'dbcon.php' ;
?>

<!DOCTYPE html>
<html lang="en">

<style>
      .gradient-custom-3 {
    /* fallback for old browsers */
    background: #84fab0;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }
    .gradient-custom-4 {
    /* fallback for old browsers */
    background: #84fab0;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>East West University Staff Management - Sign Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include('message.php'); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <i href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/ewuLogoWhite.png" class = "logo" alt="" > 
         
        
      </i>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">হোম</a></li>
          <li><a href="about.php">অ্যাবাউট</a></li>
          <li><a href="Employee.php">স্টাফ</a></li>
          <li><a href="services.php">সদস্য</a></li>
          <li><a href="notice.php">নোটিস</a></li>
          <li><a href="projects.php">গ্যালারি</a></li>
          <li><a href="blog.php">হেল্পলাইন</a></li>
          <li class="dropdown"><a href="#"><span>ড্রপডাউন</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.php">যোগাযোগ</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('project_photos/jpeg/breadCrums.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>কর্মচারী যোগ</h2>
        <ol>
          <li><a href="index.php">হোম</a></li>
          <li>কর্মচারী যোগ </li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    
    
    
    
      <div class="vh-100 bg-image"
      style="background-image: url('project_photos/jpeg/roof.jpg');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Create an account</h2>
    
                  <form action="code.php" method="POST">
    
                    <div class="form-outline mb-4">
                    <label >National ID</label>
                      <input type="number" name="nid" class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                      <input type="name" name="name" class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Email</label>  
                    <input type="email" name="email" class="form-control form-control-lg" />
                    </div>
    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Phone</label>  
                    <input type="number" name="phone" class="form-control form-control-lg" />
                      
                    </div>
    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>  
                    <input type="password" name="password" class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Designation</label>  
                    <input type="text" name="designation" class="form-control form-control-lg" />
                      
                    </div>
    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Salary Rate</label>  
                    <input type="number" name="salary" class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Date of Birth</label>  
                    <input type="date" name="date" class="form-control form-control-lg" />
                      
                    </div>
    
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="terms" type="checkbox" value=""  />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>
    
                    <div class="d-flex justify-content-center">
                      <button type="submit" name="save_employee"
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign Up</button>
                    </div>
    
                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="loginPage.html"
                        class="fw-bold text-body"><u>Login here</u></a></p>
    
                  </form>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    

  </main><!-- End #main -->

  

  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>