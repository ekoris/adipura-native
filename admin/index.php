<?php

session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicons/favicons-favicon.ico">
    <title>Adipura</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <link href="css/css-bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/blog-blog.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
					<a class="btn btn-sm btn-outline-secondary" href="cs.php">Master</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="index.php">Adipura</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-secondary" href="controllers/LogOut.php">Sign Out</a>
                </div>
            </div>
        </header>
        <!-- <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">Data</a>
                <a class="p-2 text-muted" href="#">U.S.</a>
            </nav>
        </div> -->
	</div>

    <main role="main" class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12 blog-main">
				<h3 style="text-align: center;">Data Chat Adipura</h3>
				<hr>
				<table id="example" class="table table-striped table-bordered table" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>No</th>
							<th>Name</th>
							<th>Whatsapp</th>
							<th>Tanggal Tersimpan</th>
							<th width="100px">Follow Up</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include "../config/connection.php";
							$no=1;
							$query=mysqli_query($mysqli, "SELECT * FROM orders") or die(mysqli_error($mysqli));
							while ($result=mysqli_fetch_array($query)) {
						?>
						<tr>
							<td>
								<a href="controllers/delete.php?id=<?php echo $result['id']; ?>"
									onclick="if (confirm('Apakah anda ingin menghapus ?')){return true;}else{event.stopPropagation(); event.preventDefault();};">
									<button class="btn btn-danger">Hapus</button>
								</a>
							</td>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $result['name']; ?>
							</td>
							<td>
								<?php echo $result['phone']; ?>
							</td>
							<td>
								<?php echo $result['created_at']; ?>
							</td>
							<td>
								<a href="https://wa.me/62<?php echo $result['phone']; ?>?text=Hallo%20Kak%20<?php echo $result['name']; ?>%2C%20Ada%20Buku%20Baru%20di%20adipura%20nih.%20Jika%20Mau%20bertanya%2C%20langsung%20dengan%20saya%20ya%2C%20CS%20Tika%2C%20terimakasih"
									target="_blank">
									<button class="btn btn-warning">follow up</button>
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			</div>
        </div><!-- /.row -->
    </main><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/vendor-popper.min.js"></script>
    <script src="js/js-bootstrap.min.js"></script>
    <script src="js/vendor-holder.min.js"></script>
    <script>
		Holder.addTheme('thumb', {
			bg: '#55595c',
			fg: '#eceeef',
			text: 'Thumbnail'
		});
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			var table = $('#example').DataTable({
				scrollX: true,
			});
		});
    </script>
</body>

</html>