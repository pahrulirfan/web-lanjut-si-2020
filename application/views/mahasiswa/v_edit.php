
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
