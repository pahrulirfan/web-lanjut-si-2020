<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<title>Rem</title>
</head>
<body>
<div class="container">
	<div class="alert alert-warning"><h3>Nama / NIM Anda</h3></div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">Remidi</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Data</a>
				</li>
			</ul>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="#" class="nav-link">Nama anda</a>
		</div>
	</div>
</nav>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">Data</div>
				<div class="card-body">
					<table class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>No</th>
							<th>Penulis</th>
							<th>Judul</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>Pahrul Irfan</td>
							<td>1810320032</td>
							<td>
								<a href="#" class="btn btn-danger btn-sm">Del</a>
								<a href="#" class="btn btn-warning btn-sm">Update</a>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card">
				<div class="card-header">Form</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Penulis</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Judul</label>
							<textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
