@extends('layouts.app')


@section('content')
<section class="my-lg-14 my-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
          <!-- img -->
          <img src="../assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid">
        </div>
        <!-- col -->
        <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
          <div class="mb-lg-9 mb-5">
            <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
            <p>Welcome to FreshCart! Enter your email to get started.</p>
          </div>
          <!-- form -->
          <form action="" method="POST">
            @csrf
            <div class="row g-3">
              <!-- col -->
              <div class="col-12">
                <!-- input --><input type="text" name="name" class="form-control" placeholder="First name" aria-label="First name"
                  required>
              </div>
              <div class="col-12">
                <!-- input --><input type="text" name="username" class="form-control" placeholder="User name" aria-label="User name"
                  required>
              </div>
              <div class="col-12">
                <!-- input --><input type="text" name="mobile" class="form-control" placeholder="Mobile Number" aria-label="Mobile Number"
                  required>
              </div>
              <div class="col-12">

                <!-- input --><input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
              </div>
              <div class="col-12">

                <div class="password-field position-relative">
                  <input type="password" id="fakePassword" name="password" placeholder="Enter Password" class="form-control" required >
                  <span><i id="passwordToggler"class="bi bi-eye-slash"></i></span>
                </div>
              </div>
              <!-- btn -->
              <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Register</button>
              </div>

              <!-- text -->
              {{-- <p><small>By continuing, you agree to our <a href="#!"> Terms of Service</a> & <a href="#!">Privacy
                    Policy</a></small></p> --}}
            </div>
          </form>
        </div>
      </div>
    </div>


  </section>
@endsection
