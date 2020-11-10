<!doctype html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>

	<link rel="stylesheet"
	href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2980b9">
		<div class="container">
			<a class="navbar-brand" href="#">Tugas</a>
			<div class="navbar-nav mr-auto">
				<a href="#" class="nav-link active">Home</a>
				<a href="#" class="nav-link">Tambah data</a>
			</div>
			<div class="navbar-nav ml-auto">
				<a href="#" class="nav-link">Nama user</a>
			</div>
		</div>
	</nav>

	<div class="alert alert-success text-center mt-3">
		Data Mahasiswa
	</div>
	
	<div class="container">
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th class="text-center" width="15%">Nomor</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th class="text-center" width="15%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach ($tbl_mahasiswa as $key) { ?>
				<tr>
					<td class="text-center"><?= $no++ ?></td>
					<td><?= $key->nim ?></td>
					<td><?= $key->nama ?></td>
					<td><?= $key->alamat ?></td>
					<td class="text-center">
						<a href="" class="btn btn-info btn-sm">Edit</a>
						<a href="" class="btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>
				<?php } ?>
				
			</tbody>
		</table>
	</div>

</body>
</html>
