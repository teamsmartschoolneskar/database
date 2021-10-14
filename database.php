<?php
   require 'functions.php';
   $datapersonalsiswa = query("SELECT * FROM datapersonalsiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="databasestyle.css">
</head>
<body>

		<h1>Data Siswa</h1>
	<div class="table">
		<table border="1px" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>id</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
			<th>Jenis Kelamin</th>
			<th>NISN</th>
			<th>NIK</th>
			<th>Alamat</th>
			<th>No. Akta Lahir</th>
			<th>No. Kartu Keluarga</th>
			<th>No. KIP</th>
			<th>No. Seri Ijazah SMP</th>
			<th>SMP Asal</th>
			<th>SD Asal</th>
			<th>Koordinat Rumah</th>
			<th>Jarak Rumah ke Sekolah</th>
			<th>Hobi</th>
			<th>Minat</th>
			<th>Bakat</th>
			<th>Prestasi</th>
			<th>Pelanggaran</th>
			<th>Melanjutkan ke Instansi</th>

			<th>Nama Ayah</th>
			<th>Tempat Lahir Ayah</th>
			<th>Tanggal Lahir Ayah</th>
			<th>Agama Ayah</th>
			<th>NIK Ayah</th>
			<th>No. KTP Ayah</th>
			<th>Pendidikan Terakhir Ayah</th>
			<th>Pekerjaan Ayah</th>
			<th>Gaji Ayah</th>
			<th>Nama Ibu</th>
			<th>Tempat Lahir Ibu</th>
			<th>Tanggal Lahir Ibu</th>
			<th>Agama Ibu</th>
			<th>NIK Ibu</th>
			<th>No. KTP Ibu</th>
			<th>Pendidikan Terakhir Ibu</th>
			<th>Pekerjaan Ibu</th>
			<th>Gaji Ibu</th>
			<th>Gaji Ibu</th>

			<th>Upload Akta</th>
			<th>Upload Kartu Keluarga</th>
			<th>Upload KIP</th>
			<th>Ijazah SMP</th>
			<th>SKHUN</th>
			<th>Rapor SMP </th>
			<th>KTP Ayah</th>
			<th>KTP Ibu</th>
			<th>Bukti Prestasi</th>
		</tr>
		</div>
	</div>

	<?php $i = 1; ?>
    <?php foreach($datapersonalsiswa as $row) : ?>

    <tr>
        <td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
			</td>
		<td><?= $row["id"] ?></td>
        <td><?= $row["NIS"] ?></td>
		<td><?= $row["Nama Lengkap"] ?></td>
		<td><?= $row["Kelas"] ?></td>
		<td><?= $row["Tempat Lahir"] ?></td>
		<td><?= $row["Tanggal Lahir"] ?></td>
		<td><?= $row["Agama"] ?></td>
		<td><?= $row["Jenis Kelamin"] ?></td>
		<td><?= $row["NISN"] ?></td>
		<td><?= $row["NIK"] ?></td>
		<td><?= $row["Alamat"] ?></td>
		<td><?= $row["No. Akta Lahir"] ?></td>
		<td><?= $row["No. Kartu Keluarga"] ?></td>
		<td><?= $row["No. KIP"] ?></td>
		<td><?= $row["No. Seri Ijazah SMP"] ?></td>
		<td><?= $row["SMP Asal"] ?></td>
		<td><?= $row["SD Asal"] ?></td>
		<td><?= $row["Koordinat Rumah"] ?></td>
		<td><?= $row["Jarak Rumah ke Sekolah"] ?></td>
		<td><?= $row["Hobi"] ?></td>
		<td><?= $row["Minat"] ?></td>
		<td><?= $row["Bakat"] ?></td>
		<td><?= $row["Prestasi"] ?></td>
		<td><?= $row["Pelanggaran"] ?></td>
		<td><?= $row["Melanjutkan ke Instansi"] ?></td>
		<td><?= $row["Nama Ayah"] ?></td>
		<td><?= $row["Tempat Lahir Ayah"] ?></td>
		<td><?= $row["Tanggal Lahir Ayah"] ?></td>
		<td><?= $row["Agama Ayah"] ?></td>
		<td><?= $row["NIK Ayah"] ?></td>
		<td><?= $row["No. KTP Ayah"] ?></td>
		<td><?= $row["Pendidikan Terakhir Ayah"] ?></td>
		<td><?= $row["Gaji Ayah"] ?></td>
		<td><?= $row["Nama Ibu"] ?></td>
		<td><?= $row["Tempat Lahir Ibu"] ?></td>
		<td><?= $row["Tanggal Lahir Ibu"] ?></td>
		<td><?= $row["Agama Ibu"] ?></td>
		<td><?= $row["NIK Ibu"] ?></td>
		<td><?= $row["No. KTP Ibu"] ?></td>
		<td><?= $row["Pendidikan Terakhir Ibu"] ?></td>
		<td><?= $row["Gaji Ibu"] ?></td>
		<td><?= $row["Akta Upload"] ?></td>
		<td><?= $row["Kartu Keluarga Upload"] ?></td>
		<td><?= $row["KIP Upload"] ?></td>
		<td><?= $row["Ijazah SMP"] ?></td>
		<td><?= $row["SKHUN Upload"] ?></td>
		<td><?= $row["Ijazah SD"] ?></td>
		<td><?= $row["Rapor SMP"] ?></td>
		<td><?= $row["KTP Ayah Upload"] ?></td>
		<td><?= $row["KTP Ibu Upload"] ?></td>
		<td><?= $row["Bukti Prestasi"] ?></td>
	</tr>

	<?php $i++; ?>
	<?php endforeach; ?>

</body>
</html>
