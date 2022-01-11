<!doctype html>
<html lang="en">
  <head>
  	<title>Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/styleLogin.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/warehouse-3.png);">
                        <!-- {{-- <h3 class="mb-2" style="font-size: 24px">Halo, Senang Bertemu!</h3>
                        <p>Belum punya akun?</p>
                        <p>Buat akunmu disini</p>
                        <button type="button" class="btn btn-outline-primary">Daftar</button> --}} -->
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4" style="font-size: 24px">Daftar</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
				<form method="post" action="/daftar1" class="signup-form">
				@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input type="text" name ="name"  class="form-control" placeholder="Nama" required>
			      		</div>
                    <div class="form-group mb-3">
                        <label class="label" for="name">Email</label>
                        <input type="email" name ="mail"  class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="password">Kata Sandi</label>
		                <input type="password" name ="pass" class="form-control" placeholder="Kata Sandi" required>
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="password">Ulang Kata Sandi</label>
		                <input type="password" name ="pass2" class="form-control" placeholder="Ulang Kata Sandi" required>
		            </div>
		            <div class="form-group">
                        {{-- ada ubah disini --}}
                        <input type="submit" class="form-control2 btn btn-outline-primary rounded submit px-3" role="button" value="Daftar"/>
		            	<!-- {{-- <button type="submit" class="form-control2 btn btn-outline-primary rounded submit px-3">Masuk</button> --}} -->
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
									</div>
		            </div>
		          </form>
		        </div>
		            </div>
				</div>
			</div>
		</div>
	@if ($errors->any())
                <!-- <div class="alert">
                    <h3>{{$errors->first()}}</h3>
                </div> -->
				<div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{$errors->first()}}</strong>
				</div>
				<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->
         
     @endif
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>
