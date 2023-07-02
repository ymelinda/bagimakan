@extends('layout')

@section('content')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        /* .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 522px;
            min-width: 370px;
        } */

        .card-container {
            /* display: flex; */
        }

        .left {
            /* flex: 1; */
            height: 1000px;
            background-color: #F3C6C6;
        }

        .right {
            display: flex;
            /* flex: 1; */
            height: 460px;
            background-color: #ffffff;
            justify-content: center;
            align-items: center;
        }

        .left {
            display: flex;
            /* flex: 1; */
            height: 1000px;
            justify-content: center;
            align-items: center;
            color: #ffffff;
        }


        .left-container {
            height: 50%;
            width: 80%;
            text-align: center;
            line-height: 22px
        }

        .left p {
            font-size: 1.5rem;
            color: black;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-style: anton;
        }

        .right-container {
            width: 70%;
            height: 80%;
            text-align: center;
        }

        input,
        textarea {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            font-size: 0.8rem;
        }

        input:focus,
        textarea:focus {
            outline: 1px solid #00b4cf;
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

        textarea {
            height: 90px;
        }

        /* responsive */

        @media only screen and (max-width: 600px) {
            .left {
                display: none;
            }

            .lg-view {
                display: none;
            }
        }

        @media only screen and (min-width: 600px) {
            .sm-view {
                display: none;
            }
        }
    </style>

    <!-- ======= Login ======= -->
    @if (session()->has('errors'))
        @foreach (session('errors')->all() as $e)
            <p>{{ $e }}</p>
        @endforeach
    @endif
    {{-- <div class="container">
        <div class="card">
            <div class="row">
                <div class="col">
                    <h2>Berdonasi untuk membantu sesama</h2>
                        <p>Dengan berdonasi, anda telah membantu banyak orang yang membutuhkan bantuan dan kelaparan.</p>
                        <br>
                        <p><b>5% dari donasi anda akan dialihkan untuk pemeliharaan sistem website ini.</b></p>
                        <br>
                        <p>Jika bersedia silahkan melanjutkan donasi dan jika tidak bersedia bisa kembali ke menu utama.</p>
                </div>
                <div class="col">
                    <form action="">
                        <h2 class="lg-view">Donasi</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" placeholder="Nama">
                        <input type="email" placeholder="Alamat Email">
                        <input type="text" placeholder="Jumlah Donasi" autocomplete="off">
                        <input type="phone" placeholder="Metode Pembayaran" autocomplete="off">
                        <textarea rows="10" placeholder="Catatan"></textarea>
                        <button type="submit">Donasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <form method="POST" action="{{ route('donasi') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Berdonasi untuk membantu sesama</h2>
                    <p>Dengan berdonasi, anda telah membantu banyak orang yang membutuhkan bantuan dan kelaparan.</p>
                    <br>
                    <p><b>5% dari donasi anda akan dialihkan untuk pemeliharaan sistem website ini.</b></p>
                    <br>
                    <p>Jika bersedia silahkan melanjutkan donasi dan jika tidak bersedia bisa kembali ke menu utama.</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                        <h2 class="lg-view">Donasi</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" placeholder="Nama" name="nama">
                        <input type="email" placeholder="Alamat Email" name="email">
                        <input type="text" placeholder="Jumlah Donasi" autocomplete="off" name="nominal">
                        <input type="text" placeholder="Metode Pembayaran" autocomplete="off" name="metode_bayar">
                        <textarea rows="10" placeholder="Catatan" name="catatan"></textarea>
                        <button type="submit">Donasi</button>

                </div>
            </div>
        </div>
    </form>
@endsection
