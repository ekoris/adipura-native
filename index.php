<!doctype html>
<html lang="en">

<head>
	<title>Adipura Books</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="
	background-image: url('assets/images/abstract-blur-defocused-library-book-store-shop-interior-1.jpg'); 
	background-repeat: no-repeat;
	background-size: cover;
">
	<section class="ftco-section" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-7">
					<div class="wrap d-md-flex">
						<div class="login-wrap p-4 p-lg-5">
							<div class="text w-100" style="text-align: center;">
								<img src="assets/images/logo-warna.png" style="width: 150px;" alt="">
								<h2 style="color: #3B1B4E;font-weight: 900;">Selamat Datang di Adipura Books</h2>
								<p style="color: #3B1B4E;font-weight: 500;">Silahkan isi data dibawah untuk terhubung ke admin WA</p>
							</div>
							<form action="controllers/create.php" class="signin-form" method="post">
								<div class="form-group mb-3">
									<label class="label" for="name">Nama Kamu</label>
									<input type="text" class="form-control name" placeholder="Inputkan Nama" required="" name="name" aria-required="true">
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Nomor Hp kamu</label>
									<input type="number" class="form-control phone" type="text" placeholder="Inputkan Nomor Telpon / Wa" required="" name="phone" aria-required="true">
								</div>
								<div class="form-group" style="padding-top: 10px;">
									<button type="submit" class="form-control btn btn-primary submit px-3">Mulai Chat Admin</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>