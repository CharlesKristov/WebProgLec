
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body class="background-radial-gradient">
  @extends('navbar')
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <div class="logoimage">
            <img src="{{asset('images/Logo.png')}}" alt="" class="Logo">
        </div>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative" id="circleandform">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">

            <form method="GET" action="/user_login" >
                    <h1 class="logintitle"> Login Now </h1>
                  <!-- 2 column grid layout with text inputs for the first and last names -->

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="form3Example3" class="form-control @error('email')
                    is-invalid
                    @enderror" placeholder="Enter email address" required value="{{ old('email') }}">
                    <label class="form-label" for="form3Example3">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input name="password" type="password" id="form3Example4" class="form-control  @error('password')
                    is-invalid
                @enderror" placeholder="Enter password">
                <label class="form-label" for="form3Example4">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <div class="form-check-text">
                    <label class="form-check-label" for="form2Example33">
                        Remember me
                      </label>
                </div>
              </div>

              <!-- Submit button -->
              <div class="loginbtn">
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Login
                  </button>
              </div>

              <div class="forgotandregis">
                <a href="" class="forgot">
                    forgot password?
                </a>
                <a href="{{Route('register')}}" class="Regis">
                    Don't have an account?
                </a>
              </div>
              <!-- Register buttons -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Vendor JS Files -->
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>

<!-- Section: Design Block -->
