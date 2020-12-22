
<div class="alert alert-success text-center mt-3">
	Tambah Data Mahasiswa
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="<?= site_url('mahasiswa/simpan_data') ?>" method="post">
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="nim" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary">
						Simpan data
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
