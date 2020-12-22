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
	Edit Data Mahasiswa
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="<?= site_url('mahasiswa/simpan_edit') ?>" method="post">
				<div class="form-group">
					<label>NIM</label>
					<input type="text" readonly value="<?=$data_nim->nim?>" name="nim" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa</label>
					<input type="text" value="<?=$data_nim->nama?>" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat"><?= $data_nim->alamat ?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary">
						Simpan data
					</button>

					<a href="<?= site_url('mahasiswa/index')?>" class="btn btn-warning">Batal</a>

				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
