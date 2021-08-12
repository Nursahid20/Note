<?php
require 'setting/functions.php';
$query = "SELECT * FROM notes";
$data = query($query);

if (isset($_POST['save'])) {
	if (save($_POST) > 0) {
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Note</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

	<style type="text/css">
		[aria-expanded="false"]>.expanded,
		[aria-expanded="true"]>.collapsed {
			display: none;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row min-vh-100 flex-column flex-md-row">
			<aside class="coll-12 col-md-3 col-xl-2 p-0 flex-shrink-1">
				<nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top" id="sidebar">
					<div class="text-center p-3">
						<img src="assets/img/books.png" alt="profile picture" class="img-fluid rounded-circle my-2 p-3 d-none d-md-block shaadow">
						<a href="#" class="navbar-brand mx-0 font-weight-bold text-nowarp">Nursahid Arya Suyudi</a>
						<a href="#" class="navbar-brand mx-0">Free Plan</a>
					</div>
					<button class="navbar-toggler border-0 order-1" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="nav">
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link active high pointer" id="catatan"><i class='bx bx-note'></i>&nbspCatatan</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link active high"><i class='bx bx-bell'></i>&nbspPengingat</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link active high pointer" id="arsip"><i class='bx bx-archive-in'></i>&nbspArsipkan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active high pointer" id="hapus"><i class='bx bx-trash'></i>&nbspSampah</a>
							</li>


						</ul>
					</div>
				</nav>
			</aside>
			<main class="col px-0 flex-gro-1">
				<div class="container py-3">
					<article>
						<form action="" method="POST">
							<div class="input-field-border-bottom">
								<textarea id="text1" name="title" rows="1" cols="60" placeholder="Judul" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)" autocomplete="off"></textarea><br>
								<textarea id="text2" name="description" rows="1" cols="60" placeholder="Tulis Catatanmu" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)" autocomplete="off"></textarea><br>
								<div style="text-align: center;">
									<button type="submit" class="btn" name="save" id="save">Simpan</button>
								</div>
							</div>
						</form>

						<div id="cards">

						</div>

					</article>
				</div>
			</main>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>