<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet"
		  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Tugas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tambah Data</a>
				</li>
			</ul>
			<form class="my-2 my-lg-0">
				nama anda
			</form>
		</div>
	</nav>
	<div class="alert alert-info mt-3 text-center">
		<h3>Nama anda / nim anda</h3>
	</div>
	<div class="card mt-3">
		<div class="card-header">
			Data mahasiswa
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Nomor</th>
						<th>Nama</th>
						<th>Nim</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>Pahrul</td>
						<td>20020123992</td>
						<td>Mataram</td>
						<td>
							<a href="" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Irfan</td>
						<td>20020123929</td>
						<td>Mataram Lagi</td>
						<td>
							<a href="" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>
