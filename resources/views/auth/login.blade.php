<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
<!-- Section: Design Block -->
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://industries.ma/wp-content/uploads/2020/07/al-akhawayn.jpg');
        height: 500px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        ">
    
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Login now</h2>
          <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('login') }}">
          @csrf
            
            <!-- Email input -->
            <div class="form-outline mb-4">
            <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter email">
              <label class="form-label" for="email">Email address</label>
              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
            <input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Enter password">
            <label class="form-label" for="password">Password</label>
            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>

            

            <!-- Submit button -->
            <div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block ">
										Login
									</button>
            </div>

            <!-- Register buttons -->
            <div class="text-center">
              <p> Don't have an account?</p>
              <button type="button" class="btn btn-link btn btn-outline-secondary">
              <a href="{{route('register')}}">Create One</a>
              </button>
         

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<!-- Section: Design Block -->


	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>