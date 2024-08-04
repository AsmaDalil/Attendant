<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Register page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://industries.ma/wp-content/uploads/2020/07/al-akhawayn.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
       
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
		  <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">

			@if ( Session::get('success'))
			<div class="alert alert-success">{{ Session::get('success') }}</div>
			@endif
			@if ( Session::get('error'))<div class="alert alert-danger">{{ Session::get('error') }}
	 		</div>
			@endif
			@csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="form-outline mb-4">
              
                <div class="form-outline">
                  <input type="text" id="name" class="form-control" name="name"  autofocus placeholder="Enter name" value="{{ old('name') }}">
                  <label class="form-label" for="name">Name</label>
				  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
              </div>
			  
									
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
          	<input id="email" type="email" class="form-control" name="email"  placeholder="Enter email" value="{{ old('email') }}">
              <label class="form-label" for="email">E-Mail Address</label>
			  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
			</div>

            <!-- Password input -->
            <div class="form-outline mb-4">
			<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Enter password">
              <label class="form-label" for="form3Example4">Password</label>
			  <span class="text-danger">@error('password'){{ $message }}@enderror</span>	
            </div>
			<!-- Password confirmation -->
            <div class="form-outline mb-4">
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Enter confirm password">
			<label for="password-confirm">Confirm Password</label>
			<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>						
			</div>					

            <!-- Submit button -->
			<div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
			</div>


            <div class="text-center">
            
			Already have an account? 
			<a href="{{route('login')}}">Login</a>
			</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>