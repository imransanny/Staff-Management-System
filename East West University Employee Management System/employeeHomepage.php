<!DOCTYPE html>
<html lang="en">

<Style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

        html {
          box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
          box-sizing: border-box;
        }

        body {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          background-color: #f9fafb;
          font-size: 70%;
          line-height: 1.4;
          font-family: "Inter", sans-serif;
          color: #6b7280;
          font-weight: 400;

          @media only screen and (min-width: 600px) {
            justify-content: center;
            align-items: center;
            display: flex;
            height: 100vh;
            font-size: 100%;
          }
        }

        // -------------- BUTTON

        .button {
          appearance: none;
          background: #16a34a;
          border-radius: 0.25em;
          color: white;
          cursor: pointer;
          display: inline-block;
          font-weight: 500;
          height: 3em;
          line-height: 3em;
          padding: 0 1em;

          &:hover {
            background-color: lighten(#16a34a, 2%);
          }
        }

        // -------------- DETAILS MODAL

        .details-modal {
          background: #ffffff;
          border-radius: 0.5em;
          box-shadow: 0 10px 20px rgba(black, 0.2);
          left: 50%;
          max-width: 90%;
          pointer-events: none;
          position: absolute;
          top: 50%;
          transform: translate(-50%, -50%);
          width: 30em;
          text-align: left;
          max-height: 90vh;
          display: flex;
          flex-direction: column;

          // -------------- CLOSE

          .details-modal-close {
            align-items: center;
            color: #111827;
            display: flex;
            height: 4.5em;
            justify-content: center;
            pointer-events: none;
            position: absolute;
            right: 0;
            top: 0;
            width: 4.5em;

            svg {
              display: block;
            }
          }

          // -------------- TITLE

          .details-modal-title {
            color: #111827;
            padding: 1.5em 2em;
            pointer-events: all;
            position: relative;
            width: calc(100% - 4.5em);

            h1 {
              font-size: 1.25rem;
              font-weight: 600;
              line-height: normal;
            }
          }

          // -------------- CONTENT

          .details-modal-content {
            border-top: 1px solid #e0e0e0;
            padding: 2em;
            pointer-events: all;
            overflow: auto;
          }
        }

        // -------------- OVERLAY

        .details-modal-overlay {
          transition: opacity 0.2s ease-out;
          pointer-events: none;
          background: rgba(#0f172a, 0.8);
          position: fixed;
          opacity: 0;
          bottom: 0;
          right: 0;
          left: 0;
          top: 0;

          details[open] & {
            pointer-events: all;
            opacity: 0.5;
          }
        }

        // -------------- DETAILS

        details {
          summary {
            list-style: none;
              
            &:focus {
              outline: none;
            }
            &::-webkit-details-marker {
              display: none;
            }
          }
        }

        // -------------- OTHER

        code {
          font-family: Monaco, monospace;
          line-height: 100%;
          background-color: #2d2d2c;
          padding: 0.1em 0.4em;
          letter-spacing: -0.05em;
          word-break: normal;
          border-radius: 7px;
          color: white;
          font-weight: normal;
          font-size: 1.75rem;
          position: relative;
          top: -2px;
        }

        .container {
          text-align: center;
          max-width: 40em;
          padding: 2em;

          > h1 {
            font-weight: 700;
            font-size: 2rem;
            line-height: normal;
            color: #111827;
          }

          > p {
            margin-top: 2em;
            margin-bottom: 2em;
          }

          sup {
            font-size: 1rem;
            margin-left: 0.25em;
            opacity: 0.5;
            position: relative;
          }
        }

</Style>

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

        <h2>স্টাফ</h2>
        <ol>
          <li><a href="employeeHomepage.php">হোম</a></li>
          <li>স্টাফ</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>স্টাফ</h2>
          <p>কর্মচারী সম্পর্কিত তথ্য এবং ডাটাবেজ</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-user"></i>
              </div>
              <h3>আমার প্রোফাইল</h3>
              <p>বিভিন্ন ধরণভেদে সকল কর্মচারীর তালিকা এখানে সেভ থাকবে। </p>
              <a href="employeeProfile.php" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-money-bills"></i>
              </div>
              <h3>আমার স্যালারি</h3>
              <p>প্রত্যেক কর্মচারীর কাজের ধরণভেদে ঘন্টায় একটি স্যালারি রেট থাকবে, সম্পন্ন কাজের সময় থেকে তাদের স্যালারি হিসেব করা হবে। </p>
              <a href="employeeSalary.php" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-business-time"></i>
              </div>
              <h3>কাজের সময়</h3>
              <p>কর্মচারীদের চেকইন চেকআউট এর একটি রেকর্ড থাকবে, এর থেকে তাদের কাজের মোট সময় পাওয়া যাবে। </p>
              <a href="worktime.php" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>



          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-address-card"></i>
              </div>
              <h3>স্টেটাস</h3>
              <p>প্রত্যেক কর্মচারীর একটি করে আলাদা প্রোফাইল থাকবে। এই প্রোফাইলে কর্মচারীর ব্যক্তিগত সব তথ্য সেভ করা থাকবে। </p>
              <a href="service-details.html" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-plane-departure"></i>
              </div>
              <h3>ছুটি </h3>
              <p>কোনো কর্মচারী ছুটিতে থাকলেও ডেটাবেজ তার রেকর্ড রাখবে। </p>
              <a href="service-details.html" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-database"></i>
              </div>
              <h3>অভিযোগ</h3>
              <p>ডেটাবেজলিস্টে প্রতিটি কর্মচারীর অভিযোগ  সবকিছুর রেকর্ড থাকবে। </p>
              <a href="blog.php" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    

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