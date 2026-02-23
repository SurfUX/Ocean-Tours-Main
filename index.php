<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Index - Tour Bootstrap Template</title>
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

  <body class="index-page">
    <?php include 'header.php'; ?>

    <main class="main">
      <!-- Travel Hero Section -->
      <section id="travel-hero" class="travel-hero section dark-background">
        <div class="hero-background">
          <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/gallery/1.webp" alt="Travel slide" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/gallery/2.webp" alt="Travel slide" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/gallery/3.webp" alt="Travel slide" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/gallery/4.webp" alt="Travel slide" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/gallery/5.webp" alt="Travel slide" />
              </div>
            </div>
          </div>

          <div class="hero-overlay"></div>
        </div>

        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div
                class="hero-text text-center"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <h1 class="hero-title">DISCOVER CHINA WITH CONFIDENCE</h1>
                <p class="hero-subtitle">
                  Curated China travel experiences by a Hong Kong–based tour
                  specialist. Culture, nature, family adventures & unforgettable
                  journeys.
                </p>
                <div class="hero-buttons">
                  <a
                    href="https://wa.me/94717758637?text=Hello%20Can%20I%20get%20this%20package%20details%20please"
                    class="btn btn-primary"
                    target="_blank"
                  >
                    <i class="bi bi-whatsapp me-2"></i> REQUEST A TOUR QUOTE
                  </a>
                  <a href="contact.php" class="btn btn-outline">
                    B2B AGENT LOGIN / TARIFF
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured Destinations Section -->
      <section id="featured-destinations" class="featured-destinations section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Featured Destinations</h2>
          <div>
            <span>Explore Our</span>
            <span class="description-title">Top China Destinations</span>
          </div>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="featured-destination">
                <div class="destination-overlay">
                  <img
                    src="assets/img/gallery/c1.webp"
                    alt="Beijing China"
                    class="img-fluid"
                  />
                  <div class="destination-info">
                    <span class="destination-tag">Top Highlight</span>
                    <h3>Beijing</h3>
                    <p class="location">
                      <i class="bi bi-geo-alt-fill"></i> China
                    </p>
                    <p class="description">
                      Discover China’s imperial past with iconic landmarks
                      including the Great Wall, Forbidden City, and Temple of
                      Heaven.
                    </p>
                    <div class="destination-meta">
                      <div class="tours-count">
                        <i class="bi bi-collection"></i>
                        <span>18 Packages</span>
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <span>4.9 (520)</span>
                      </div>
                    </div>
                    <div class="price-info">
                      <span class="starting-from">Starting from</span>
                      <span class="amount">$1,250</span>
                    </div>
                    <a href="destination-details.html" class="explore-btn">
                      <span>Explore Now</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                  <div class="compact-destination">
                    <div class="destination-image">
                      <img
                        src="assets/img/gallery/sha.webp"
                        alt="Shanghai China"
                        class="img-fluid"
                      />
                      <div class="badge-offer">Best Seller</div>
                    </div>
                    <div class="destination-details">
                      <h4>Shanghai</h4>
                      <p class="location">
                        <i class="bi bi-geo-alt"></i> China
                      </p>
                      <p class="brief">
                        A dynamic blend of modern skylines, luxury shopping, and
                        historic waterfronts along the Bund.
                      </p>
                      <div class="stats-row">
                        <span class="tour-count">
                          <i class="bi bi-calendar-check"></i> 14 Tours
                        </span>
                        <span class="rating">
                          <i class="bi bi-star-fill"></i> 4.8
                        </span>
                        <span class="price">from $980</span>
                      </div>
                      <a href="destination-details.html" class="quick-link">
                        View Details <i class="bi bi-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                  <div class="compact-destination">
                    <div class="destination-image">
                      <img
                        src="assets/img/gallery/x1.webp"
                        alt="Xian China"
                        class="img-fluid"
                      />
                    </div>
                    <div class="destination-details">
                      <h4>Xi’an</h4>
                      <p class="location">
                        <i class="bi bi-geo-alt"></i> China
                      </p>
                      <p class="brief">
                        Walk through ancient history with the world-famous
                        Terracotta Warriors and the historic Silk Road heritage.
                      </p>
                      <div class="stats-row">
                        <span class="tour-count">
                          <i class="bi bi-calendar-check"></i> 10 Tours
                        </span>
                        <span class="rating">
                          <i class="bi bi-star-fill"></i> 4.7
                        </span>
                        <span class="price">from $820</span>
                      </div>
                      <a href="destination-details.html" class="quick-link">
                        View Details <i class="bi bi-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                  <div class="compact-destination">
                    <div class="destination-image">
                      <img
                        src="assets/img/gallery/zh.webp"
                        alt="Zhangjiajie China"
                        class="img-fluid"
                      />
                      <div class="badge-offer limited">Adventure Pick</div>
                    </div>
                    <div class="destination-details">
                      <h4>Zhangjiajie</h4>
                      <p class="location">
                        <i class="bi bi-geo-alt"></i> China
                      </p>
                      <p class="brief">
                        Explore dramatic sandstone mountains, glass bridges, and
                        breathtaking natural scenery made famous worldwide.
                      </p>
                      <div class="stats-row">
                        <span class="tour-count">
                          <i class="bi bi-calendar-check"></i> 8 Adventures
                        </span>
                        <span class="rating">
                          <i class="bi bi-star-fill"></i> 4.9
                        </span>
                        <span class="price">from $1,050</span>
                      </div>
                      <a href="destination-details.html" class="quick-link">
                        View Details <i class="bi bi-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Featured Destinations Section -->

      <!-- Featured Tours Section -->
      <section id="featured-tours" class="featured-tours section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Featured Tours</h2>
          <div>
            <span>Explore Our</span>
            <span class="description-title">China Travel Experiences</span>
          </div>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <!-- Tour Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="tour-card">
                <div class="tour-image">
                  <img
                    src="assets/img/gallery/shan.webp"
                    alt="Beijing Shanghai Tour"
                    class="img-fluid"
                    loading="lazy"
                  />
                  <div class="tour-badge">Top Rated</div>
                  <div class="tour-price">$1,480</div>
                </div>
                <div class="tour-content">
                  <h4>Beijing &amp; Shanghai Highlights</h4>
                  <div class="tour-meta">
                    <span class="duration"
                      ><i class="bi bi-clock"></i> 5 Days</span
                    >
                    <span class="group-size"
                      ><i class="bi bi-people"></i> Max 10</span
                    >
                  </div>
                  <p>
                    Experience China’s past and future in one journey, from the
                    Great Wall and Forbidden City to Shanghai’s modern skyline.
                  </p>
                  <div class="tour-highlights">
                    <span>Beijing</span>
                    <span>Shanghai</span>
                  </div>
                  <div class="tour-action">
                    <a href="booking.html" class="btn-book">Book Now</a>
                    <div class="tour-rating">
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <span>4.8 (120)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tour Item -->

            <!-- Tour Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="tour-card">
                <div class="tour-image">
                  <img
                    src="assets/img/gallery/x1.webp"
                    alt="Xi’an Cultural Tour"
                    class="img-fluid"
                    loading="lazy"
                  />
                  <div class="tour-badge cultural">Culture &amp; History</div>
                  <div class="tour-price">$920</div>
                </div>
                <div class="tour-content">
                  <h4>Ancient Xi’an Discovery</h4>
                  <div class="tour-meta">
                    <span class="duration"
                      ><i class="bi bi-clock"></i> 3 Days</span
                    >
                    <span class="group-size"
                      ><i class="bi bi-people"></i> Max 12</span
                    >
                  </div>
                  <p>
                    Step back in time with visits to the Terracotta Warriors,
                    Ancient City Wall, and Silk Road heritage sites.
                  </p>
                  <div class="tour-highlights">
                    <span>Xi’an</span>
                    <span>Terracotta Army</span>
                  </div>
                  <div class="tour-action">
                    <a href="booking.html" class="btn-book">Book Now</a>
                    <div class="tour-rating">
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star"></i>
                      <span>4.7 (85)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tour Item -->

            <!-- Tour Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="tour-card">
                <div class="tour-image">
                  <img
                    src="assets/img/gallery/zin.webp"
                    alt="Zhangjiajie Adventure"
                    class="img-fluid"
                    loading="lazy"
                  />
                  <div class="tour-badge adventure">Adventure</div>
                  <div class="tour-price">$1,150</div>
                </div>
                <div class="tour-content">
                  <h4>Zhangjiajie Nature Adventure</h4>
                  <div class="tour-meta">
                    <span class="duration"
                      ><i class="bi bi-clock"></i> 3 Days</span
                    >
                    <span class="group-size"
                      ><i class="bi bi-people"></i> Max 8</span
                    >
                  </div>
                  <p>
                    Explore dramatic sandstone pillars, glass bridges, and
                    breathtaking national parks made famous by Avatar.
                  </p>
                  <div class="tour-highlights">
                    <span>Zhangjiajie</span>
                    <span>National Park</span>
                  </div>
                  <div class="tour-action">
                    <a href="booking.html" class="btn-book">Book Now</a>
                    <div class="tour-rating">
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <span>4.9 (70)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tour Item -->

            <!-- Tour Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="tour-card">
                <div class="tour-image">
                  <img
                    src="assets/img/gallery/pan.webp"
                    alt="Chengdu Family Tour"
                    class="img-fluid"
                    loading="lazy"
                  />
                  <div class="tour-badge">Family Friendly</div>
                  <div class="tour-price">$1,280</div>
                </div>
                <div class="tour-content">
                  <h4>Chengdu Panda &amp; City Tour</h4>
                  <div class="tour-meta">
                    <span class="duration"
                      ><i class="bi bi-clock"></i> 4 Days</span
                    >
                    <span class="group-size"
                      ><i class="bi bi-people"></i> Max 15</span
                    >
                  </div>
                  <p>
                    Meet giant pandas, enjoy relaxed city life, and taste
                    authentic Sichuan cuisine in this family-friendly journey.
                  </p>
                  <div class="tour-highlights">
                    <span>Chengdu</span>
                    <span>Panda Base</span>
                  </div>
                  <div class="tour-action">
                    <a href="booking.html" class="btn-book">Book Now</a>
                    <div class="tour-rating">
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <span>4.8 (95)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tour Item -->

            <!-- Tour Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="tour-card">
                <div class="tour-image">
                  <img
                    src="assets/img/gallery/rom.webp"
                    alt="Guilin Honeymoon"
                    class="img-fluid"
                    loading="lazy"
                  />
                  <div class="tour-badge honeymoon">Honeymoon</div>
                  <div class="tour-price">$1,690</div>
                </div>
                <div class="tour-content">
                  <h4>Romantic Guilin &amp; Li River</h4>
                  <div class="tour-meta">
                    <span class="duration"
                      ><i class="bi bi-clock"></i> 4 Days</span
                    >
                    <span class="group-size"
                      ><i class="bi bi-people"></i> Max 6</span
                    >
                  </div>
                  <p>
                    Enjoy serene landscapes, river cruises, and unforgettable
                    moments surrounded by Guilin’s iconic karst mountains.
                  </p>
                  <div class="tour-highlights">
                    <span>Guilin</span>
                    <span>Li River</span>
                  </div>
                  <div class="tour-action">
                    <a href="booking.html" class="btn-book">Book Now</a>
                    <div class="tour-rating">
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star"></i>
                      <span>4.6 (60)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tour Item -->

            <!-- Tour Item -->
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="tour-card">
                <div class="tour-image">
                  <img
                    src="assets/img/gallery/harb.webp"
                    alt="Harbin Winter Tour"
                    class="img-fluid"
                    loading="lazy"
                  />
                  <div class="tour-badge limited">Seasonal</div>
                  <div class="tour-price">$1,850</div>
                </div>
                <div class="tour-content">
                  <h4>Harbin Ice &amp; Snow Festival</h4>
                  <div class="tour-meta">
                    <span class="duration"
                      ><i class="bi bi-clock"></i> 4 Days</span
                    >
                    <span class="group-size"
                      ><i class="bi bi-people"></i> Max 10</span
                    >
                  </div>
                  <p>
                    Witness a magical winter wonderland featuring ice palaces,
                    sculptures, and one of China’s most unique festivals.
                  </p>
                  <div class="tour-highlights">
                    <span>Harbin</span>
                    <span>Ice Festival</span>
                  </div>
                  <div class="tour-action">
                    <a href="booking.html" class="btn-book">Book Now</a>
                    <div class="tour-rating">
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i
                      ><i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <span>4.9 (68)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tour Item -->
          </div>

          <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
            <a href="tours.html" class="btn-view-all">View All Tours</a>
          </div>
        </div>
      </section>
      <!-- /Featured Tours Section -->

      <!-- Testimonials Home Section -->
      <section id="testimonials-home" class="testimonials-home section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <div>
            <span>What Our Travelers</span>
            <span class="description-title">Are Saying</span>
          </div>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 1
                  }
                }
              }
            </script>

            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>
                      Our Beijing and Shanghai tour was perfectly organized.
                      From the Great Wall to the Bund, every detail was handled
                      smoothly. Highly professional service.
                    </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="assets/img/person/person-m-9.webp"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Daniel Wong</h3>
                  <h4>Business Traveler</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>
                      We traveled with our kids to Chengdu and Xi’an. The panda
                      visit and cultural experiences were amazing. The itinerary
                      was very family-friendly.
                    </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="assets/img/person/person-f-5.webp"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Michelle Tan</h3>
                  <h4>Family Traveler</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>
                      Zhangjiajie was absolutely breathtaking. The glass bridge
                      and national park hikes were unforgettable. Great Ocean
                      Tours made it stress-free.
                    </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="assets/img/person/person-f-12.webp"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Emma Richardson</h3>
                  <h4>Adventure Seeker</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>
                      Our honeymoon in Guilin was magical. The Li River cruise
                      and scenic views were exactly what we hoped for. Truly a
                      romantic experience.
                    </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="assets/img/person/person-m-12.webp"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Arjun &amp; Priya</h3>
                  <h4>Honeymoon Couple</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>
                      The Harbin Ice &amp; Snow Festival tour was well planned
                      and truly unique. Hotels, transfers, and guides were
                      excellent throughout the trip.
                    </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="assets/img/person/person-m-13.webp"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Michael Foster</h3>
                  <h4>Seasonal Traveler</h4>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>

            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- /Testimonials Home Section -->
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

    <script>
      new Swiper(".hero-swiper", {
        loop: true,
        speed: 1200,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
      });
    </script>
  </body>
</html>
