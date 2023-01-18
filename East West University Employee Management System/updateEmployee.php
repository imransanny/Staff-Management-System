<?php
session_start();
require 'dbcon.php';
?>


<!DOCTYPE html>

<html>
    
 
        
        

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>East West University Staff Management - Employee</title>
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>

  <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <i href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/ewuLogoWhite.png" class = "logo" alt="" > 
         
        
      </i>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="employeeHomepage.php" class="active">হোম</a></li>
          <li><a href="about.php">অ্যাবাউট</a></li>
        
          <li><a href="notice.php">নোটিস</a></li>
          <li><a href="projects.php">গ্যালারি</a></li>
          <li><a href="blog.php">হেল্পলাইন</a></li>
          <li class="dropdown"><a href="#"><span>প্রোফাইল</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="index.php">সাইন আউট</a></li>
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

        <h2>আমার প্রোফাইল</h2>
        <ol>
          <li><a href="employeeHomepage.php">হোম</a></li>
          <li>আমার প্রোফাইল</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <div class="container mt-5">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Employee Edit
                    <a href="employeeList.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">

                <?php
                if (isset($_GET['id'])) {
                    $student_id = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM employee WHERE nid='$student_id' ";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        $employe = mysqli_fetch_array($query_run);
                        ?>
                        <form action="code.php" method="POST">
                            <label>Employee NID</label>
                            <input type="id" name="nid" value="<?= $employe['nid']; ?>">

                            <div class="mb-3">
                                <label>Employee Name</label>
                                <input type="text" name="name" value="<?= $employe['name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Employee Email</label>
                                <input type="email" name="email" value="<?= $employe['email']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Employee Phone</label>
                                <input type="int" name="phone" value="<?= $employe['phone']; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Employee Password</label>
                                <input type="text" name="password" value="<?= $employe['password']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Employee Designation</label>
                                <input type="text" name="designation" value="<?= $employe['designation']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Employee Salary</label>
                                <input type="int" name="salary" value="<?= $employe['salaryRate']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Date</label>
                                <input type="text" name="dob" value="<?= $employe['dob']; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="update_student" class="btn btn-primary">
                                    Update Student
                                </button>
                            </div>

                        </form>
                        <?php
                    } else {
                        echo "<h4>No Such Id Found</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>ইস্ট ওয়েস্ট ইউনিভার্সিটি স্টাফ ম্যানেজমেন্ট সিস্টেম </h3>
              <p>
                জহুরুল ইসলাম সিটি <br>
                A/2 Jahurul Islam Ave, Dhaka 1212<br><br>
                <strong>Phone:</strong> 02-55046678<br>
                <strong>Email:</strong> info@ewubd.edu<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>প্রয়োজনীয় লিংক </h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>সার্ভিস সমূহ</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>ইউনিভার্সিটি</h4>
            <ul>
              <li><a href="#">Directory</a></li>
              <li><a href="#">Manager Schedule</a></li>
              <li><a href="#">E-Tender</a></li>
              <li><a href="#">Journals</a></li>
              <li><a href="#">Archieve</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>অন্যান্য </h4>
            <ul>
              <li><a href="#">Jobs at EWU</a></li>
              <li><a href="#"> Applications</a></li>
              <li><a href="#">Administration </a></li>
              <li><a href="#">Management</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>East West Staff Management </span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">Ziaul Haque</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

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