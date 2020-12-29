<div class="alert alert-success text-center mt-3 animate__animated animate__backInDown ">
	Data Mahasiswa
</div>

<div class="container">
	<table class="table table-bordered table-sm" id="myTable">
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
		<?php foreach ($mahasiswa as $isi) { ?>
			<tr>
				<td class="text-center"><?= $no++ ?></td>
				<td><?= $isi->nim ?></td>
				<td><?= $isi->nama ?></td>
				<td><?= $isi->alamat ?></td>
				<td class="text-center">

					<?php if ($this->session->userdata('hak_pengguna') == 'admin') { ?>

						<a href="<?= site_url('mahasiswa/hapus/' . $isi->nim) ?>"
						   onclick="return confirm('Anda Yakin ?')"
						   class="btn btn-danger btn-sm">Del</a>

						<a href="<?= site_url('mahasiswa/edit/' . $isi->nim) ?>"
						   class="btn btn-info btn-sm">Edit</a>

					<?php } ?>

				</td>
			</tr>
		<?php } ?>

		</tbody>
	</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function () {
		$('.table').DataTable();
	});
</script>
</body>
</html>
