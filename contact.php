<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Great Ocean Tours</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="contact-page">

<?php include 'header.php'; ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info -->
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-6">
            <div class="contact-info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Location</h4>
                <p>482 Pine Street, Seattle, Washington 98101</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="info-content">
                <h4>Phone &amp; Email</h4>
                <p>+1 (206) 555-0192</p>
                <p>connect@example.com</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Send a Message</h2>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Your Message" rows="6" required=""></textarea>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn-submit">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <!-- Map Section -->
      <div class="map-container mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </section><!-- /Contact Section -->

  </main>

<?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>