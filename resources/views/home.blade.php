@extends('layout')

@section('content')
    <main id="main">
        @auth
            {{ Auth::user()->username }}
        @endauth
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div
                        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">Ada kata bagi<br>Dalam bahagia</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Hidupkan kebahagiaan kecil bagi mereka di sekitar kita yang
                            membutuhkan bantuan sederhana</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            @auth
                                <table>
                                    <td><a class="btn-login" href="/donasi">Donasi</a></td>
                                </table>
                                <table>
                                    <td><a class="btn-login" href="/sumbangMakan">Sumbang Makan</a></td>
                                </table>
                            @endauth
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="{{ asset('/') }}assets/img/hero-img.png" class="img-fluid" alt=""
                            data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url({{ asset('/') }}assets/img/about.jpg) ;" data-aos="fade-up"
                        data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Hubungi kami</h4>
                            <p>08123456789</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Website penyedia layananan yang menghubungkan antara orang yang ingin berbagi makanan dengan
                                orang yang membutuhkan makanan, dimana:
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Anda bisa berbagi makanan apa saja kepada yang
                                    membutuhkan lewat website ini</li>
                                <li><i class="bi bi-check2-all"></i> Bagi anda yang membutuhkan makanan, bisa melihat
                                    makanan yang tersedia di website ini dan mengambilnya</li>
                                <li><i class="bi bi-check2-all"></i> Dibuka untuk investor atau yang ingin berdonasi dimana
                                    uangnya akan dibuatkan makanan dan dibagikan bagi yang membutuhkan</li>
                            </ul>
                            <p>
                                Harapannya dengan adanya website ini bisa membantu bagi yang membutuhkan untuk mendapatkan
                                makanan dan dapat mengurangi sampah makanan yang dihasilkan.
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
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Makanan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pemberi</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Penerima</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
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

                    <form action="">
                        <select name="id_lokasi" id="lokasi">
                            <h5>Lokasi anda</h5>
                            <option value="1">Gresik</option>
                            <option value="2">Surabaya</option>
                            <option value="3">Lamongan</option>
                            <option value="4">Tuban</option>
                        </select>
                        <button type="submit">search</button>
                    </form>


                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Tersedia</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Habis</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                        </div>

                        <div class="row gy-5">

                            @foreach ($data as $d)
                                @if ($d->porsi_makanan >= 1)
                                    <div class="col-lg-4 menu-item">
                                        <a href="{{ asset('storage/' . $d->foto_makanan) }}" class="glightbox">
                                            <img src="{{ asset('storage/' . $d->foto_makanan) }}"
                                                class="menu-img img-fluid" alt="">
                                        </a>
                                        <a href="/detail_makanan/{{ $d->id }}"
                                            class="btn btn-outline-dark btn-lg px-5">{{ $d->nama_makanan }}</a>
                                    </div>
                                @endif
                            @endforeach
                            {{-- <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}assets/img/menu/1.png" class="glightbox"><img src="{{ asset('/') }}assets/img/menu/1.png" class="menu-img img-fluid" alt=""></a>
                                <button class="btn btn-outline-dark btn-lg px-5" type="submit"> <a href="detail_makanan">Soto</a></button>
                            </div> --}}
                            <!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                        </div>

                        <div class="row gy-5">
                            @foreach ($data as $d)
                                @if ($d->porsi_makanan < 1)
                                    <div class="col-lg-4 menu-item">
                                        <a href="{{ asset('storage/' . $d->foto_makanan) }}" class="glightbox">
                                            <img src="{{ asset('storage/' . $d->foto_makanan) }}"
                                                class="menu-img img-fluid" alt="">
                                        </a>
                                        <a href="/detail_makanan/{{ $d->id }}"
                                            class="btn btn-outline-dark btn-lg px-5">{{ $d->nama_makanan }}</a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div><!-- End Starter Menu Content -->
        </section>
        </div>


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
                                                Website yang membantu untuk bersedekah dan berbagi makanan ke sesama
                                                sehingga dapat diikuti oleh semua
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Max Anthoni</h3>
                                            <h4>Wiraswasta</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('/') }}assets/img/testimonials/testimonials-1.jpg"
                                            class="img-fluid testimonial-img" alt="">
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
                                                Website yang memberikan kemudahan bagi saya terutama saat bisnis makanan
                                                saya tidak terjual semua dan bingung mau dikemanakan, dengan website ini
                                                bisa menjadi solusinya. Terimakasih!
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Jane Allison</h3>
                                            <h4>Owner Restauran</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('/') }}assets/img/testimonials/testimonials-2.jpg"
                                            class="img-fluid testimonial-img" alt="">
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
                                                Bagus sekali, berbagi kepada sesama dengan cara yang berbeda dan sangat
                                                bermanfaat. Semoga dapat terus berkembang kedepannya
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Nadine Kim</h3>
                                            <h4>Ibu Rumah Tangga</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('/') }}assets/img/testimonials/testimonials-3.jpg"
                                            class="img-fluid testimonial-img" alt="">
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
                                                Saya baru menemui website semacam ini dan ini sangat membantu yang memiliki
                                                makanan dan tidak bisa menghabiskan, daripada dibuang lebih baik diberikan
                                                kepada yang membutuhkan
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Kale Aditya</h3>
                                            <h4>Wiraswasta</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('/') }}assets/img/testimonials/testimonials-4.jpg"
                                            class="img-fluid testimonial-img" alt="">
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
                    <h2>Dokumentasi</h2>
                    <p>Kegiatan <span>Bagimakan</span> untuk sesama</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('/') }}assets/img/1.jpg)">
                            <h3>Bagimakan Tuban</h3>
                            <div class="price align-self-start"> <a href="/berbagi_tuban">Berbagi di Tuban</a></div>
                            <p class="description">
                                Kegiatan berbagi makanan di kota Tuban dipenuhi oleh masyarakat.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('/') }}assets/img/2.jpg)">
                            <h3>Bagimakan Gresik</h3>
                            <div class="price align-self-start"> <a href="/berbagi_gresik">Berbagi di Gresik</a></div>
                            <p class="description">
                                Kegiatan berbagi kepada masyarakat di Kota Gresik berjalan dengan lancar.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('/') }}assets/img/3.jpg)">
                            <h3>Bagimakan Surabaya</h3>
                            <div class="price align-self-start"> <a href="berbagi_surabaya">Berbagi di Surabaya</a></div>
                            <p class="description">
                                Antusiasnya volunteer dalam kegiatan berbagi kepada masyarakat Surabaya di tengah panasnya
                                terik matahari.
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
                                <p>Saya bergabung menjadi volunteer di Bagimakan untuk menambah pengalaman saya dan juga
                                    ikut berbagi kepada sesama</p>
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
                                <p>Pengalaman yang baru bagi saya sebagai volunteer di Bagimakan ini karena kita tidak hanya
                                    berbagi tetapi bisa melihat senyum tulus dari orang-orang</p>
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
                                <p>Pengalaman baru yang sangat luar biasa dan tidak bisa dilupakan selama saya menjadi
                                    volunteer</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                </div>

            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Butuh bantuan? <span>Hubungi kami</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63338.60540989095!2d112.61173745117856!3d-7.164919616864736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800504acb3253%3A0x25d71798cd652fb9!2sGresik%2C%20Gresik%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1683647386135!5m2!1sen!2sid"
                        frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Kompleks PT. Semen Indonesia (Persero) Tbk, Jl. Veteran, Kb. Dalem, Sidomoro, Kebomas,
                                    Gresik Regency, East Java 61122</p>
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

                <div class=" p-3 p-md-4">
                    <form action="{{ route('kontak-post') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Nama" required>
                            </div>
                            <div class="col-xl-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        {{-- <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Pesan anda sudah terkirim. Terima kasih!</div>
                </div> --}}
                        <div class="text-center"><button type="submit">Kirim</button></div>
                    </form>
                </div>
                <!--End Contact Form -->

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
