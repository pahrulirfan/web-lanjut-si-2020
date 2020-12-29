<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet"
		  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<title>Login</title>
</head>
<body>

<div class="container mt-5">
	<div class="col-md-4">
		<div class="card animate__animated animate__fadeInBottomRight">
			<div class="card-header">
				Form Login
			</div>
			<div class="card-body">

				<?php if ($this->session->flashdata('pesan')){ ?>
					<div class="alert alert-danger animate__animated animate__shakeX">
						<?php echo $this->session->flashdata('pesan'); ?>
					</div>
				<?php } ?>

				<form action="<?= site_url('Login/proses') ?>" method="post">

					<div class="form-group">
						<label for="">Username :</label>
						<input type="text" name="txtusername"
							   class="form-control">
					</div>

					<div class="form-group">
						<label for="">Password :</label>
						<input type="password" name="txtpassword"
							   class="form-control">
					</div>
					<input type="submit" class="btn btn-primary" value="Login">

				</form>

			</div>
		</div>
	</div>
</div>

</body>
</html>
