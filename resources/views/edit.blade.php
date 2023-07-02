@extends('layout')

@section('content')
<style>
    .gradient-custom {
    /* fallback for old browsers */
    background: #F3C6C6;
    }

    h3{
        font-size: medium;
        text-align: left;
        color: #b6b6c4;
    }


    button {
        border-radius: 20px;
        border: 1px solid #ad8b8b;
        background-color: #ad8b8b;
        color: #ffffff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-out;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.7;
    }

  </style>

 <!-- ======= Edit ======= -->
 <section class="vh-50 gradient-custom">
      <div class="container py-5 h-50">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-#eeee text-black" style="border-radius: 0rem;">
              <div class="card-body p-3 text-center">
                  @if (session()->has('errors'))
                      @foreach(session('errors')->all() as $e)
                      <p>{{$e}}</p>
                      @endforeach
                  @endif
                <form method="POST" action="{{ route('admin') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="form-outline form-white mb-4">
                        <input type="name" id="typeNameX" class="form-control form-control-lg" placeholder="Nama Makanan" name="nama_makanan" value="{{ $sumbang_makan->nama_makanan }}"/>
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="porsi" id="typePorsiX" class="form-control form-control-lg" placeholder="Jumlah Porsi" name="porsi_makanan" value="{{ $sumbang_makan->porsi_makanan }}"/>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="telp" id="typeTelpX" class="form-control form-control-lg" placeholder="No Telepon" name="no_telp" value="{{ $sumbang_makan->no_telp }}"/>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <h3>Tanggal Dibuat</h3>
                        <input type="date" id="typeTanggalX" class="form-control form-control-lg" placeholder="Tanggal Dibuat" name="tanggal_dibuat" value="{{ $sumbang_makan->tanggal_dibuat }}"/>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <h3>Tanggal Kadaluarsa</h3>
                        <input type="date" id="typeTanggalX" class="form-control form-control-lg" placeholder="Tanggal Kadaluarsa" name="tanggal_kadaluarsa" value="{{ $sumbang_makan->tanggal_kadaluarsa }}"/>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <h3>Foto Makanan</h3>
                            <table><td><input type="file" name="foto_makanan" value="{{ $sumbang_makan->foto_makanan }}"/></td></table>
                    </div>

                    <div class="form-outline form-white mb-4" style="text-align: left;">
                     <h3>Lokasi Anda</h3>
                        <select name="id_lokasi" id="lokasi" >
                            <option value="1" {{ $sumbang_makan->id_lokasi == 1 ? 'Selected' : '' }}>Gresik</option>
                            <option value="2" {{ $sumbang_makan->id_lokasi == 2 ? 'Selected' : '' }}>Surabaya</option>
                            <option value="3" {{ $sumbang_makan->id_lokasi == 3 ? 'Selected' : '' }}>Lamongan</option>
                            <option value="4" {{ $sumbang_makan->id_lokasi == 4 ? 'Selected' : '' }}>Tuban</option>
                        </select>
                    </div>

                  <button type="submit">Submit</button>

                </div>
                <div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Edit -->

@endsection
