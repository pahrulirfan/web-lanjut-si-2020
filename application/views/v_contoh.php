<!doctype html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<style>
		h2 {
			color: red;
		}

		.hijau {
			color: green;
		}

		.besar {
			font-size: xx-large;
		}
	</style>
</head>
<body>
<h2>Data Mahasiswa</h2>
<p class="hijau">Nama : <?php echo $nama; ?> </p>
<p class="besar">Umur : <?php echo $umur; ?></p>
<p>NIM : <?php echo $nim; ?></p>
<p>Jurusan : <?php echo $jurusan; ?></p>
</body>
</html>
