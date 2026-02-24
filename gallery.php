<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gallery</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />


  </head>

  <body class="gallery-page">
    <?php include 'header.php'; ?>

<main class="main">
  <!-- Page Title -->
  <div
    class="page-title dark-background"
    data-aos="fade"
    style="background-image: url(assets/img/travel/misc-8.webp)"
  >
    <div class="container position-relative">
      <h1>China Gallery</h1>
      <p>
        A visual journey through China’s iconic cities, landscapes, culture, and
        unforgettable travel moments curated by Great Ocean Tours.
      </p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Gallery</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->



<!-- Gallery Section -->
<section id="gallery" class="gallery section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div
      class="isotope-layout"
      data-default-filter="*"
      data-layout="masonry"
      data-sort="original-order"
    >
      <!-- <ul class="gallery-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-nature">Nature</li>
        <li data-filter=".filter-architecture">Architecture</li>
        <li data-filter=".filter-people">Culture & People</li>
      </ul> -->

      <div class="row gallery-grid isotope-container" data-aos="fade-up" data-aos-delay="300">

        <!-- Nature -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-nature">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/1.webp" class="img-fluid" alt="China natural scenery" />
            </div>
            <div class="gallery-overlay">
              <h4>Natural Landscapes</h4>
              <p>Mountains and scenic beauty of China.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/1.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Architecture -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-architecture">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/2.webp" class="img-fluid" alt="Modern Chinese city" />
            </div>
            <div class="gallery-overlay">
              <h4>Urban Skylines</h4>
              <p>Modern cities and skylines.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/2.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Culture -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-people">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/3.webp" class="img-fluid" alt="Chinese culture" />
            </div>
            <div class="gallery-overlay">
              <h4>Local Culture</h4>
              <p>Traditions and daily life.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/3.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Nature -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-nature">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/4.webp" class="img-fluid" alt="China countryside" />
            </div>
            <div class="gallery-overlay">
              <h4>Untouched Nature</h4>
              <p>Peaceful landscapes.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/4.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Architecture -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-architecture">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/c1.webp" class="img-fluid" alt="Beijing landmarks" />
            </div>
            <div class="gallery-overlay">
              <h4>Historic Beijing</h4>
              <p>Imperial landmarks and history.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/c1.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Architecture -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-architecture">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/sha.webp" class="img-fluid" alt="Shanghai city" />
            </div>
            <div class="gallery-overlay">
              <h4>Shanghai</h4>
              <p>Modern life and waterfront views.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/sha.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Culture -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-people">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/pan.webp" class="img-fluid" alt="Chengdu panda experience" />
            </div>
            <div class="gallery-overlay">
              <h4>Family Experiences</h4>
              <p>Pandas and family-friendly tours.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/pan.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Nature -->
        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-nature">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/zh.webp" class="img-fluid" alt="Zhangjiajie scenery" />
            </div>
            <div class="gallery-overlay">
              <h4>Zhangjiajie</h4>
              <p>Iconic mountains and adventure.</p>
              <div class="gallery-actions">
                <a href="assets/img/gallery/zh.webp" class="glightbox"><i class="bi bi-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- /Gallery Section -->
</main>

    <?php include 'footer.php'; ?>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
