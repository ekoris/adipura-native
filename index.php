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
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Selamat Datang di adipura books</h2>
								<br>
								<p>Silahkan isi data disamping untuk terhubung ke admin WA?</p>
								<img src="assets/images/bocilbuku1.png" alt="" style="
								    position: relative;
									left: 48px;
									top: 47px;
									z-index: 1;
									width: 100%;">
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5" style="z-index: 1000;">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Data kamu</h3>
								</div>
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