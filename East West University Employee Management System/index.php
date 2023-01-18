<?php 
  session_start();
  require 'dbcon.php' ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>East West University Staff Management - Index</title>
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

<style>
  .logo{
    width: auto;
    opacity: 1000%
  }
</style>

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
          <li><a href="index.php" class="active">হোম</a></li>
          <li><a href="about.php">অ্যাবাউট</a></li>
          
          
          <li><a href="notice.php">নোটিস</a></li>
          <li><a href="projects.php">গ্যালারি</a></li>
          <li><a href="blog.php">হেল্পলাইন</a></li>
          
              
             
          
          <li><a href="contact.php">যোগাযোগ</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down"> <span>ইস্ট ওয়েস্ট ইউনিভার্সিটি স্টাফ ম্যানেজমেন্ট সিস্টেম</span> </h2>
            <p data-aos="fade-up">ইস্ট ওয়েস্ট ইউনিভার্সিটি স্টাফ ম্যানেজমেন্ট সিস্টেম সকল স্টাফের যাবতীয় তথ্যাদি, কাজের সময় এবং অন্যান্য সকল ডেটা ম্যানেজ করে। </p>
            <a data-aos="fade-up" data-aos-delay="200" href="loginPage.php" class="btn-get-started">অ্যাডমিন</a>
            <a data-aos="fade-up" data-aos-delay="200" href="loginPageEmployee.php" class="btn-get-started">কর্মী</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1700">

      <div class="carousel-item active" style="background-image: url(assets/img/homepageBackground.jpg)"></div>
      <div class="carousel-item" style="background-image: url(project_photos/jpeg/carosel/breadCrums.jpg)"></div>
      <div class="carousel-item" style="background-image: url(project_photos/jpeg/carosel/department.jpg)"></div>
      <div class="carousel-item" style="background-image: url(project_photos/jpeg/carosel/mujib1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(project_photos/jpeg/carosel/Event2.jpg)"></div>
      

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>কেন স্টাফ ম্যানেজমেন্ট সিস্টেম?</h3>
              <p>ইস্ট ওয়েস্ট ইউনিভার্সিটি স্টাফ ম্যানেজমেন্ট সিস্টেম (ESMS) একটি সফ্টওয়্যার, যা আমাদের প্রতিষ্ঠানের লক্ষ্য অর্জনের জন্য কর্মীদের প্রতিদিন তাদের সর্বোত্তম প্রচেষ্টা দিতে সহায়তা করে। এটি সঠিক পথে কর্মচারীদের প্রচেষ্টা পরিচালনা করে এবং প্রয়োজনীয় নির্দেশনা প্রদান করে।
              <p>এটি কর্মীদের জন্য ব্যক্তিগত এবং অন্যান্য কাজের-সম্পর্কিত বিবরণ নিরাপদে সঞ্চয় ও পরিচালনা করে। প্রয়োজন এর সময় সিস্টেমটি ডেটা সংরক্ষণ এবং অ্যাক্সেস করা সহজ করে তোলে। স্টাফ ম্যানেজমেন্ট সিস্টেমে, প্রশাসক কার্যক্রম একটি সহজ এবং দ্রুত উপায়ে পরিচালনা করা যেতে পারে। </p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>ম্যাসেজ পাঠান</h3>
              <p> কোন প্রশ্ন আছে? এখানে একটি ম্যাসেজ পাঠান। </p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="নাম" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="ইমেইল" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="ফোন নাম্বার" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="ম্যাসেজ" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">আপনার ম্যাসেজটি সফলভাবে পাঠানো হয়েছে। ধন্যবাদ!</div>

                  <button type="submit">পাঠান</button>
                </div>

              </div>
            </form>
          </div><!-- End Query Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    

    <!-- ======= Notice Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>নোটিস</h2>
          <p>সমস্ত নোটিস এবং ইভেন্ট সমুহ এবং স্টাফদের জন্য নির্দেশিকা এখানে আপলোড করা হবে।</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>নতুন ইভেন্ট</h3>
              <p>নতুন ইভেন্ট এর সময়সূচী ও প্রস্তুতি </p>
              <a href="displayEvent.php" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>নোটিস</h3>
              <p>স্টাফদের জন্য যা যা নোটিস। </p>
              <a href="displayNotice.php" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>নির্দেশিকা</h3>
              <p>EWU স্টাফ ম্যানেজমেন্ট সিস্টেম এর একটি নির্দেশিকা প্রদান করে যা সিস্টেমটিকে আরও ভালভাবে জানতে এবং এটি দ্রুততার সাথে বুঝতে সাহায্য করে।</p>
              <a href="service-details.html" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>হেল্পলাইন</h3>
              <p>যেকোনো সমস্যা দেখা দিলে, হেল্পলাইন অতি দ্রুততার সাথে তা সমাধান করে দেয়।</p>
              <a href="service-details.html" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>স্টাফ মিটিং</h3>
              <p>কর্তৃপক্ষ স্টাফদের সাথে সরাসরি যোগাযোগ স্থাপনের জন্য একটি স্টাফ মিটিং ডাকতে পারেন। </p>
              <a href="service-details.html" class="readmore stretched-link">আরও দেখুন <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/campView.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>লক্ষ্য এবং উদ্দেশ্য</h3>
            <p>স্টাফ ম্যানেজমেন্ট সিস্টেমের সামগ্রিক লক্ষ্য হল প্রশিক্ষণার্থীদের তাদের কাছে উপলব্ধ মানব সম্পদের সর্বোত্তম ব্যবহার করতে এবং কর্মীদের কর্মসংস্থান সংক্রান্ত সমস্ত আনুষ্ঠানিক ও আইনী পদ্ধতির অনুশীলন করতে সক্ষম করা। </p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">কার্যকারিতা </a></h4>
                <p>সিস্টেমটি অর্গানাইজেশনের এর জন্য ব্যবস্থাপনাকে আরও দক্ষ করতে সহায়তা করে। ম্যানেজারদের এক এক করে প্রতি স্টাফ এর রেকর্ড রাখতে হবে না, সিস্টেমই একাজ করে দিবে।</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">সুবিধাপূর্ণ</a></h4>
                <p>EWU স্টাফ ম্যানেজমেন্ট সিস্টেম ব্যবহারকারীদের কাছে খুবই সুবিধাপূর্ণ কারণ এটি ব্যবহার করা সহজ এবং সবসময় অনলাইনে যোগাযোগ করার সুযোগ থাকে যা সময় এবং শক্তিও বাঁচায়।</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">ব্যবহার-বান্ধব</a></h4>
                <p>এই সিস্টেম ব্যবহার করতে কোনো এক্সট্রা প্রশিক্ষণের দরকার পড়ে না। তাই, অপ্রশিক্ষণপ্রাপ্ত স্টাফদের পক্ষেও সহজে ব্যবহার্য এটি।</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">সময় স্বল্পতা</a></h4>
                <p>প্রতিদিন ম্যানুয়ালি অ্যাটেন্ডেন্স দেয়ার জন্য লাইনে দাঁড়ানোর ঝামেলায় স্টাফদের আর পড়তে হয় না, সময় বাঁচে। </p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>তাৎপর্য </h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>ফলাফল</h4>
            </a><!-- End tab nav item -->
        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>তারা সবচেয়ে মূল্যবান পরিতোষ প্রদান করে </h3>
                <p class="fst-italic">
                  তাদের পরিশ্রম সম্পূর্ন অর্গানাইজেশনের জন্য অপরিহার্য। তারা অর্গানাইজেশনের বাহ্যিক রুপ সুন্দর এবং পরিচ্ছন্ন রাখে।  
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> সংশয় বা বিরক্তিকর যন্ত্রণার তিরস্কারে সে যে আনন্দ চায় তা।</li>
                  <li><i class="bi bi-check2-all"></i> এটা অবশ্যই প্রত্যেক ইউজার এবং অর্গানাইজেশনের জন্য ফলপ্রসু। </li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/effective-employee-management.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>সময় অনুযায়ি কাজ এবং একটি স্যালারি রেটিং অনুসরণ করা হবে।</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> কতটুকু সময় কাজ করা হলো তার যথাযথ একটা রেকর্ড থাকবে।</li>
                  <li><i class="bi bi-check2-all"></i> একটা স্ট্যান্ডার্ড স্যালারি রেট ফলো করে সময় অনুযায়ী স্যালারি কাউন্ট করা হবে। </li>
                  <li><i class="bi bi-check2-all"></i> ওভারটাইম কাজ করলে তার জন্য বোনাস কাউন্ট করা হবে</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/effective-employee-management.jpg" alt="" class="img-fluid">
              </div>
              
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>গ্যালারি</h2>
          <p>EWU ক্যাম্পাসের বেশকিছু জায়গার ছবি </p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">সব</li>
            <li data-filter=".filter-remodeling">ক্যাম্পাস</li>
            <li data-filter=".filter-construction">ডিপার্টমেন্ট</li>
            <li data-filter=".filter-repairs">লাইব্রেরি</li>
            <li data-filter=".filter-design">হলওয়ে</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/campus/Event1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ক্যাম্পাস ১</h4>
                  <p>ক্যাম্পাসের গ্রাইন্ডে অনুষ্ঠিত ইকো ফেয়ার ২.০ </p>
                  <a href="project_photos/jpeg/campus/Event1.jpg" title="Campus 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/departement/department3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ডিপার্টমেন্ট ১</h4>
                  <p>সিএসই ডিপার্টমেন্ট</p>
                  <a href="project_photos/jpeg/departement/department3.jpg" title="Department 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/library/Library.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>লাইব্রেরি</h4>
                  <p>EWU লাইব্রেরি</p>
                  <a href="project_photos/jpeg/library/Library.jpg" title="Library 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/hallway/hallway.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>হলওয়ে</h4>
                  <p>EWU হলওয়ে</p>
                  <a href="project_photos/jpeg/hallway/hallway.jpg" title="Hallway 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/campus/ground.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ক্যাম্পাস ২</h4>
                  <p>ছাদ থেকে EWU ক্যাম্পাস </p>
                  <a href="project_photos/jpeg/campus/ground.jpg" title="Campus 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/departement/department.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ডিপার্টমেন্ট ২</h4>
                  <p>ডিপার্টমেন্ট থেকে আকাশের দৃশ্য </p>
                  <a href="project_photos/jpeg/departement/department.jpg" title="Department 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/library/library3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>লাইব্রেরি ২</h4>
                  <p>লাইব্রেরি রিডিং রুম</p>
                  <a href="project_photos/jpeg/library/library3.jpg" title="Library 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/hallway/hallway2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>হলওয়ে ২</h4>
                  <p> ডিপার্টমেন্ট হলওয়ে </p>
                  <a href="project_photos/jpeg/hallway/hallway2.jpg" title="Hallway 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/campus/ground1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ক্যাম্পাস ৩</h4>
                  <p>ক্যাম্পাসের ছাদ</p>
                  <a href="project_photos/jpeg/campus/ground1.jpg" title="Campus 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/departement/department1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ডিপার্টমেন্ট ৩</h4>
                  <p>ইংলিশ ডিপার্টমেন্ট</p>
                  <a href="project_photos/jpeg/departement/department1.jpg" title="Department 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/library/mujib1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>লাইব্রেরি ৩</h4>
                  <p>বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ভাস্কর্য </p>
                  <a href="project_photos/jpeg/library/mujib1.jpg" title="Library 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="project_photos/jpeg/hallway/hallway1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>হলওয়ে ৩</h4>
                  <p>EWU হলওয়ে</p>
                  <a href="project_photos/jpeg/hallway/hallway1.jpg" title="Hallway 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>রিভিউ</h2>
          <p>ইউজার EWU স্টাফ ম্যানেজমেন্ট সিস্টেম ব্যবহার করে তার মতামত (ইতিবাচক কিংবা নেতিবাচক) সবার উদ্দেশ্যে জানাতে পারেন। </p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/avatar.png" class="testimonial-img" alt="">
                  <h3>মোঃ হাসিবুর রহমান</h3>
                  <h4> আইটি সেক্টর, সিএসই ডিপার্টমেন্ট</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    সিস্টেমটির ব্যবহার স্টাফ ম্যানেজমেন্টকে পূর্বের চেয়ে গতিশীল এবর দ্রুততর করেছে যা অর্গানাইজেশনের জন্য ইতিবাচক প্রভাব ফেলবে।
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/avatar.png" class="testimonial-img" alt="">
                  <h3>ফাতেমা জাহান</h3>
                  <h4> রিসেপশনিস্ট </h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    সিস্টেমটি ব্যবহার-বান্ধব হওয়ায় কাজের চাপ আগের চেয়ে অনেকটা কমে গেছে। এখন যার যার কাজের সময়ের রেকর্ড, বিভিন্ন জিজ্ঞাসার সমাধান সিস্টেমেই পাওয়া সম্ভব।
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/avatar.png" class="testimonial-img" alt="">
                  <h3>কামরুল ইসলাম</h3>
                  <h4>সিকিউরিটি গার্ড</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    ম্যানুয়ালি চেকইন-চেকআউট এর রেকর্ড রাখতে হয় না, ফিঙ্গারপ্রিন্টের মাধ্যমে সিস্টেম অটো ডিটেক্ট করে নেয়। এটি একটি টাইম সেভিং প্রোসেস।
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/avatar.png" class="testimonial-img" alt="">
                  <h3>মোঃ নাইমুল হক</h3>
                  <h4>টেকনিশিয়ান, ইইই ডিপার্টমেন্ট</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    এই সাইটে নেভিগেট করা সহজ কারণ সমস্ত লিঙ্ক সঠিক সেখানে বাম দিকে, এবং ইমেজ-লোডিং ব্রাউজার ছাড়া লিঙ্কগুলি অ্যাক্সেস করা যায় যা খুব সহজ এবং একটি ভাল সাইটের জন্য অপরিহার্য। সমস্ত গুরুত্বপূর্ণ তথ্য হাইলাইট করা থাকে, তাই সহজেই তাদের খুঁজে পাওয়া যায়।
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up"">

    
    
  <div class=" section-header">
        <h2>সাম্প্রতিক ব্লগ পোস্ট</h2>
        <p>কাজ হোক যথাযথ এবং প্রযুক্তির সাথে, কর্তব্য পালনের মতো আনন্দে কোনো ভুল নেই। </p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blogpost01.jpg" class="img-fluid" alt="">
              <span class="post-date">১৭ সেপ্টেম্বর ২০২২</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">অর্গানাইজেশনে ই-ম্যানেজমেন্ট এর ব্যবস্থাপনা </h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Developer</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>আরও পড়ুন</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>ইস্ট ওয়েস্ট ইউনিভার্সিটি স্টাফ ম্যানেজমেন্ট </h3>
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