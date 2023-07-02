@extends('layout')

@section('content')
<style>
    .gradient-custom {
    /* fallback for old browsers */
    background: #F3C6C6;
    }

    h1{
        margin-top: 40px;
        font-size: 40px;
        font-family: "Animatic SC";
        text-align: center;
    }

    img{
        width: 100px;
        height: 100px;
        margin-top: 10px;
    }

  </style>
<!-- ======= Login ======= -->
<section class="vh-50 gradient-custom">
        <h1>Login With Your Bagimakan Account</h1>
        <div class="container py-5 h-50">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-#eeee text-black" style="border-radius: 0rem;">
                <div class="card-body p-3 text-center">
                <form method="POST" action="{{ route('submit')}}">
                @csrf

                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <img src="{{ asset('/') }}assets/img/user.png" alt="" srcset="">
      
                    <div class="form-outline form-white mb-4">
                      <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="email" />
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="password" />
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot password?</a></p>
      
                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>
      
                  </div>
                </form>
      
                  <div>
                  <p class="mb-0">Not registered? <a href="/register" class="text-red-50"> Create an account</a>
                  </p>
                </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Login -->
@endsection