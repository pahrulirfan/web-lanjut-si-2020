<!doctype html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>

	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2980b9">
		<div class="container">
			<a class="navbar-brand" href="#">Tugas</a>
			<div class="navbar-nav mr-auto">
				<a href="#" class="nav-link active">Home</a>
				<a href="<?= site_url('mahasiswa/tambah') ?>" class="nav-link">Tambah data</a>
			</div>
			<div class="navbar-nav ml-auto">
				<a href="#" class="nav-link">Nama user</a>
			</div>
		</div>
	</nav>

	<div class="animate__animated animate__backInDown alert alert-success text-center mt-3">
		Data Mahasiswa
	</div>
	
	<div class="container">
		<table class="animate__animated animate__heartBeat table table-bordered table-sm">
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
				<?php foreach ($data_mahasiswa as $isi) { ?>
				<tr>
					<td class="text-center"><?= $no++ ?></td>
					<td><?= $isi->nim ?></td>
					<td><?= $isi->nama ?></td>
					<td><?= $isi->alamat ?></td>
					<td class="text-center">

						<a href="<?=site_url('mahasiswa/hapus/' . $isi->nim )?>"
						   onclick="return confirm('Bneran ni ?')"
						   class="btn btn-danger btn-sm">Del</a>




						<a href="" class="btn btn-info btn-sm">Edit</a>

					</td>
				</tr>
				<?php } ?>
				
			</tbody>
		</table>
	</div>
</body>
</html>
