<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title><?php echo $_SESSION['nim'] ?></title>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 20px;">
			<div class="col-lg-4">
				<div class="header">
					<h1 style="font-size: 32px">Data Diri</h1>
					<p style="font-size: 16px;">Data diri ini menggunakan card dari bootstrap 4.</p>
				</div>
				<div class="card text-center" style="width: 21rem;">
					<img src="<?php echo base_url('/assets/');?>DisplayPicture.png" class="card-img-top" alt="Image not found">
					<div class="card-body">
						<h5 class="card-title" style="text-align: left"><?php echo $_SESSION['nama']." - ".$_SESSION['nim'] ?></h5>
						<p class="card-text" style="text-align: left"><?php echo $_SESSION['nama'] ?> adalah seorang yang baik hati dan
							sederhana.</p>
						<a href="<?php echo base_url().'datadiri_controller/daftarTeman'; ?>" class="btn btn-primary">Daftar Teman</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>
