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
			<div class="col-lg-5" style="text-align: center">
				<h1>Daftar Teman <?php echo $_SESSION['nama'] ?></h1>
				<p><?php echo $_SESSION['nama'] ?> orangnya pelupa maka dia sering mencatat nama temannya dan menampilkan menggunakan perulangan.
				</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">Panggilan</th>
							<th scope="col">Email</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($data_view as $data): ?>
						<tr>
							<th scope="row"><?php echo $data['nama']; ?></th>
							<td><?php echo $data['panggilan']; ?></td>
							<td><?php echo $data['email']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<center>
					<a href="<?php echo base_url().'datadiri_controller/index' ?>" class="btn btn-primary">Data Diri</a>
				</center>
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
