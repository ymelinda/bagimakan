@extends('layout')

@section('content')
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="detail_makanan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css_detail_makanan/style.css" rel="stylesheet">

    <!-- ======= Berbagi di Surabaya ======= -->
    <form method="GET" action="{{ route('berbagi_surabaya') }}" enctype="multipart/form-data">
        @csrf
        <div class="mt-5">
                <!-- Dokumentasi Start -->
                <div class="container-fluid py-5">
                    <div class="row px-xl-5">
                        <div class="col-lg-5 pb-5">
                            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner border">
                                    <div class="carousel-item active">
                                        <img class="w-100 h-100" src="assets/img/3.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 pb-5">
                            <h3>Berbagi Makanan di Kota Surabaya</h3>
                            <p class="mb-4">
                                Pada hari Jumat 14 Juli 2023, bagimakan mengadakan kegiatan berbagi diwilayah Surabaya.
                                Penerima manfaat (beneficiaries) utama dari distribusi makanan bagimakan adalah masyarakat didaerah Kenjeran, Surabaya. Berbagi makanan ini dilakukan dibeberapa titik.
                                Kami juga bekerjasama dengan relawan untuk membagikan makanan tersebut.
                            </p>
                            <p>
                                Berbagi makanan ini dilakukan di daerah Kenjeran, dengan 300 porsi makanan. Warga menyambut hal tersebut dengan antusias. Berbagi diwilayah Kenjeran ini dilakukan untuk yang kedua kalinya, setelah yang pertama di daerah Gresik.
                                Dengan adanya kegiatan ini diharapkan dapat sedikit membantu masyarakat yang membutuhkan makanan.
                                Berbagi ini juga diharapkan dapat mengetuk kesadaran sosial masyarakat agar tidak gampang membuang makanan dan dapat memotivasi untuk berbagi kepada orang yang membutuhkan.
                            </p>
                        </div>
                    </div>

                </div>

        </div>
        <!-- Dokumentasi End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="detail_makanan/lib/easing/easing.min.js"></script>
        <script src="detail_makanan/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="detail_makanan/mail/jqBootstrapValidation.min.js"></script>
        <script src="detail_makanan/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js_detail_makanan/main.js"></script>
    </form>
@endsection
