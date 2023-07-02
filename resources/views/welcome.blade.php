<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bagimakan - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/') }}assets/img/favicon.png" rel="icon">
  <link href="{{ asset('/') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/') }}assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('/') }}assets/img/logo.png" alt=""> -->
        <h1><img src="{{ asset('/') }}assets/img/logo.png" alt="" srcset=""></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Artikel</a></li>
          <li><a href="#chefs">Volunteer</a></li>
          <li><a href="#gallery">Dokumentasi</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-login" href="#login">Login</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Ada kata bagi<br>Dalam bahagia</h2>
          <p data-aos="fade-up" data-aos-delay="100">Hidupkan kebahagiaan kecil bagi mereka di sekitar kita yang membutuhkan bantuan sederhana</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a class="btn-login" href="#login">Donasi</a>
            <a href="https://youtu.be/zPL1ULeTyz0" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('/') }}assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{ asset('/') }}assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Hubungi kami</h4>
              <p>08123456789</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
               Website penyedia layananan yang menghubungkan antara orang yang ingin berbagi makanan dengan orang yang membutuhkan makanan, dimana:
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Anda bisa berbagi makanan apa saja kepada yang membutuhkan lewat website ini</li>
                <li><i class="bi bi-check2-all"></i> Bagi anda yang membutuhkan makanan, bisa melihat makanan yang tersedia di website ini dan mengambilnya</li>
                <li><i class="bi bi-check2-all"></i> Dibuka untuk investor atau yang ingin berdonasi dimana uangnya akan dibuatkan makanan dan dibagikan bagi yang membutuhkan</li>
              </ul>
              <p>
                Harapannya dengan adanya website ini bisa membantu bagi yang membutuhkan untuk mendapatkan makanan dan dapat mengurangi sampah makanan yang dihasilkan.
              </p>

              <div class="position-relative mt-4">
                <img src="{{ asset('/') }}assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/zPL1ULeTyz0" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Makanan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pemberi</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Penerima</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Volunteer</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check menu <span>yang tersedia</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Semua Makanan</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Available</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Habis</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Semua Makanan</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/1.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/1.png" class="menu-img img-fluid" alt=""></a>
                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Soto</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/2.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Kotak</h4>
                <p class="ingredients">
                  20 Porsi
                </p>
                <p class="price">
                  10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/3.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nastar</h4>
                <p class="ingredients">
                  10 Toples
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/4.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Goreng</h4>
                <p class="ingredients">
                  12 Porsi
                </p>
                <p class="price">
                  08.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/5.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Krawu</h4>
                <p class="ingredients">
                  5 Porsi
                </p>
                <p class="price">
                  10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/6.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ayam Bakar</h4>
                <p class="ingredients">
                  15 Porsi
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Available</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/1.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Soto</h4>
                <p class="ingredients">
                  15 Porsi
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/2.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Kotak</h4>
                <p class="ingredients">
                  20 Porsi
                </p>
                <p class="price">
                  10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/3.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nastar</h4>
                <p class="ingredients">
                  10 Toples
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/4.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Goreng</h4>
                <p class="ingredients">
                  12 Porsi
                </p>
                <p class="price">
                  08.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/5.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Krawu</h4>
                <p class="ingredients">
                  5 Porsi
                </p>
                <p class="price">
                  10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/6.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ayam Bakar</h4>
                <p class="ingredients">
                  15 Porsi
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Habis</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/1.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Soto</h4>
                <p class="ingredients">
                  15 Porsi
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/2.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Kotak</h4>
                <p class="ingredients">
                  20 Porsi
                </p>
                <p class="price">
                  10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/3.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nastar</h4>
                <p class="ingredients">
                  10 Toples
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/4.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Goreng</h4>
                <p class="ingredients">
                  12 Porsi
                </p>
                <p class="price">
                  08.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/5.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Krawu</h4>
                <p class="ingredients">
                  5 Porsi
                </p>
                <p class="price">
                  10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('/') }}assets/img/menu/6.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ayam Bakar</h4>
                <p class="ingredients">
                  15 Porsi
                </p>
                <p class="price">
                  09.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimoni</h2>
          <p>Apa pendapat mereka <span>Tentang kita</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Website yang membantu untuk bersedekah dan berbagi makanan ke sesama sehingga dapat diikuti oleh semua
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Max Anthoni</h3>
                      <h4>Wiraswasta</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('/') }}assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Website yang memberikan kemudahan bagi saya terutama saat bisnis makanan saya tidak terjual semua dan bingung mau dikemanakan, dengan website ini bisa menjadi solusinya. Terimakasih!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jane Allison</h3>
                      <h4>Owner Restauran</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('/') }}assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Bagus sekali, berbagi kepada sesama dengan cara yang berbeda dan sangat bermanfaat. Semoga dapat terus berkembang kedepannya
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Nadine Kim</h3>
                      <h4>Ibu Rumah Tangga</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('/') }}assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Saya baru menemui website semacam ini dan ini sangat membantu yang memiliki makanan dan tidak bisa menghabiskan, daripada dibuang lebih baik diberikan kepada yang membutuhkan
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Kale Aditya</h3>
                      <h4>Wiraswasta</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('/') }}assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Artikel</h2>
          <p>Artikel Kegiatan <span>Bagimakan</span> untuk sesama</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{ asset('/') }}assets/img/1.jpg)">
              <h3>Bagimakan Tuban</h3>
              <div class="price align-self-start">Berbagi di Tuban</div>
              <p class="description">
                Kegiatan berbagi makanan di kota Tuban dipenuhi oleh masyarakat.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{ asset('/') }}assets/img/2.jpg)">
              <h3>Bagimakan Gresik</h3>
              <div class="price align-self-start">Berbagi di Gresik</div>
              <p class="description">
                Kegiatan berbagi kepada masyarakat di Kota Gresik berjalan dengan lancar.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{ asset('/') }}assets/img/3.jpg)">
              <h3>Bagimakan Surabaya</h3>
              <div class="price align-self-start">Berbagi di Surabaya</div>
              <p class="description">
                Antusiasnya volunteer dalam kegiatan berbagi kepada masyarakat Surabaya di tengah panasnya terik matahari.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Volunteer</h2>
          <p>Volunteer <span>Kita</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('/') }}assets/img/chefs/1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rose Vania</h4>
                <span>Mahasiswa</span>
                <p>Saya bergabung menjadi volunteer di Bagimakan untuk menambah pengalaman saya dan juga ikut berbagi kepada sesama</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('/') }}assets/img/chefs/2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Johnny Ardian</h4>
                <span>Mahasiswa</span>
                <p>Pengalaman yang baru bagi saya sebagai volunteer di Bagimakan ini karena kita tidak hanya berbagi tetapi bisa melihat senyum tulus dari orang-orang</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('/') }}assets/img/chefs/3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Wivina Camilia</h4>
                <span>Mahasiswa</span>
                <p>Pengalaman baru yang sangat luar biasa dan tidak bisa dilupakan selama saya menjadi volunteer</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Login Section ======= -->
    <section id="login" class="login">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Login</h2>
          <p>Login Untuk <span>Berbagi Makanan</span></p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url({{ asset('/') }}assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/login.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="No. Telepon Aktif" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Tanggal" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Jam" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="Banyaknya Makanan" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Catatan"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Anda sudah berhasil login. Anda bisa mulai berbagi makanan dengan upload makanan anda di website. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Login</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Login Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Dokumentasi</h2>
          <p>Check <span>Dokumentasi Kita</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/1.jpeg"><img src="{{ asset('/') }}assets/img/gallery/1.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/2.jpeg"><img src="{{ asset('/') }}assets/img/gallery/2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/3.jpg"><img src="{{ asset('/') }}assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/4.jpg"><img src="{{ asset('/') }}assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/5.jpg"><img src="{{ asset('/') }}assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/6.jpg"><img src="{{ asset('/') }}assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/7.jpg"><img src="{{ asset('/') }}assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('/') }}assets/img/gallery/8.jpg"><img src="{{ asset('/') }}assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Butuh bantuan? <span>Hubungi kami</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63338.60540989095!2d112.61173745117856!3d-7.164919616864736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800504acb3253%3A0x25d71798cd652fb9!2sGresik%2C%20Gresik%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1683647386135!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Kompleks PT. Semen Indonesia (Persero) Tbk, Jl. Veteran, Kb. Dalem, Sidomoro, Kebomas, Gresik Regency, East Java 61122</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>bagimakan@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>08123456789</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Jam kerja</h3>
                <div><strong>Senin - Jumat:</strong> 08.00 - 17.00;
                  <strong>Sabtu - Minggu:</strong> Libur
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Kritik dan Saran" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesan anda sudah terkirim. Terima kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim Pesan</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Kompleks PT. Semen Indonesia (Persero) Tbk, Jl. Veteran, Kb. Dalem,<br>
              Sidomoro, Kebomas, Gresik Regency, East Java 61122 <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Hubungi kami</h4>
            <p>
              <strong>Telepon:</strong> 08123456789<br>
              <strong>Email:</strong> bagimakan@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Kerja</h4>
            <p>
              <strong>Senin - Jumat: 08.00</strong> - 17.00<br>
              Sabtu - Minggu: Libur
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>bagimakan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('/') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('/') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/') }}assets/js/main.js"></script>

</body>

</html>
