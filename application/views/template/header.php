<!doctype html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2980b9">
	<div class="container">
		<a class="navbar-brand" href="#">SI</a>
		<div class="navbar-nav mr-auto">
			<a href="<?= site_url('mahasiswa/index') ?>" class="nav-link active">Home</a>
			<a href="<?= site_url('mahasiswa/tambah') ?>" class="nav-link">Tambah data</a>
			<a href="<?= site_url('login/logout') ?>" class="nav-link">Logout</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="#" class="nav-link"><?php echo $this->session->userdata('nama_pengguna'); ?></a>
		</div>
	</div>
</nav>
