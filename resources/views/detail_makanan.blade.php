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

 <div class="mt-5">
    <form action="" method="post">
        <!-- Food Detail Start -->
        <div class="container-fluid py-5">
            <div class="row px-xl-5">
                <div class="col-lg-5 pb-5">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner border">
                            <div class="carousel-item active">
                                <img class="w-100 h-100" src="{{asset('storage/'.$data->foto_makanan)}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 pb-5">
                    <h3>{{$data->nama_makanan}}</h3>
                    <h3 class="font-weight-semi-bold mb-4">{{$data->porsi_makanan}} Porsi</h3>
                    <p class="mb-4">
                        Haloo, ini adalah makanan yang bisa diambil ya. Silahkan ambil makanan jika stok masih tersedia. Perhatikan juga tanggal kadaluarsanya ya, jangan sampai anda mendapatkan makanan yang tidak layak.
                        Untuk mendapatkan makanannya silahkan hubungi no telepon yang tersedia di bawah ini. Semoga membantu.
                    </p>
                    <div class="d-flex mb-4">
                        <form>
                            <p class="text-dark font-weight-medium mb-0 mr-3"><b>No Telepon: </b></p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="custom-control-label" for="size-1">{{$data->no_telp}}</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <form>
                            <p class="text-dark font-weight-medium mb-0 mr-3"><b>Tanggal dibuat: </b></p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="custom-control-label" for="size-1">{{$data->tanggal_dibuat}}</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <form>
                            <p class="text-dark font-weight-medium mb-0 mr-3"><b>Tanggal kadaluarsa: </b></p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="custom-control-label" for="size-1">{{$data->tanggal_kadaluarsa}}</label>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="d-flex mb-4">
                        <form>
                            <p class="text-dark font-weight-medium mb-0 mr-3"><b>Status: </b></p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="custom-control-label" for="size-1">{{$data->Status}}</label>
                            </div>
                        </form>
                    </div> --}}

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <form action="{{route('min_makanan', $data->id)}}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa"> Ambil Makan</i>
                                        </button>
                                </form>
                            {{-- </div>
                            <input type="text" class="form-control bg-secondary text-center" value="{{$data->porsi_makanan}}">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div> --}}
                        </div>
                        {{-- <button class="btn btn-primary px-3"><i class=""></i>Ambil Makanan</button> --}}
                    </div>
                </div>
            </div>

        </div>
    </form>

</div>
<!-- Food Detail End -->

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
@endsection
